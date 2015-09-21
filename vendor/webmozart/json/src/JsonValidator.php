<?php

/*
 * This file is part of the Webmozart JSON package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Json;

use JsonSchema\Exception\InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Validates decoded JSON values against a JSON schema.
 *
 * This class is a wrapper for {@link Validator} that adds exceptions and
 * validation of schema files. A few edge cases that are not handled by
 * {@link Validator} are handled by this class.
 *
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class JsonValidator
{
    /**
     * The schema used for validating schemas.
     *
     * @var object|null
     */
    private $metaSchema;

    /**
     * Validates JSON data against a schema.
     *
     * The schema may be passed as file path or as object returned from
     * `json_decode($schemaFile)`.
     *
     * @param mixed         $data   The decoded JSON data.
     * @param string|object $schema The schema file or object.
     *
     * @return string[] The errors found during validation. Returns an empty
     *                  array if no errors were found.
     *
     * @throws InvalidSchemaException If the schema is invalid.
     */
    public function validate($data, $schema)
    {
        if (is_string($schema)) {
            $schema = $this->loadSchema($schema);
        } else {
            $this->assertSchemaValid($schema);
        }

        $validator = new Validator();

        try {
            $validator->check($data, $schema);
        } catch (InvalidArgumentException $e) {
            throw new InvalidSchemaException(sprintf(
                'The schema is invalid: %s',
                $e->getMessage()
            ), 0, $e);
        }

        $errors = array();

        if (!$validator->isValid()) {
            $errors = (array) $validator->getErrors();

            foreach ($errors as $key => $error) {
                $prefix = $error['property'] ? $error['property'].': ' : '';
                $errors[$key] = $prefix.$error['message'];
            }
        }

        return $errors;
    }

    private function assertSchemaValid($schema)
    {
        if (null === $this->metaSchema) {
            // The meta schema is obviously not validated. If we
            // validate it against itself, we have an endless recursion
            $this->metaSchema = json_decode(file_get_contents(__DIR__.'/../res/meta-schema.json'));
        }

        if ($schema === $this->metaSchema) {
            return;
        }

        $errors = $this->validate($schema, $this->metaSchema);

        if (count($errors) > 0) {
            throw new InvalidSchemaException(sprintf(
                "The schema is invalid:\n%s",
                implode("\n", $errors)
            ));
        }

        // not caught by justinrainbow/json-schema
        if (!is_object($schema)) {
            throw new InvalidSchemaException(sprintf(
                'The schema must be an object. Got: %s',
                $schema,
                gettype($schema)
            ));
        }
    }

    private function loadSchema($file)
    {
        if (!file_exists($file)) {
            throw new InvalidSchemaException(sprintf(
                'The schema file %s does not exist.',
                $file
            ));
        }

        $schema = json_decode(file_get_contents($file));

        try {
            $this->assertSchemaValid($schema);
        } catch (InvalidSchemaException $e) {
            throw new InvalidSchemaException(sprintf(
                'An error occurred while loading the schema %s: %s',
                $file,
                $e->getMessage()
            ), 0, $e);
        }

        return $schema;
    }
}
