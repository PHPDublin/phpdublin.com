MVC, Model/View/Controller, it's the heart of any web application. The View and the Controller are easy, but what about the Model? How do we build it? How do we connect to outside services? where should the database go? How do we keep it maintainable? How do we use design patterns to help us?

All these questions arise in any project that's more complex than a CRUD app. We knew we'd run into these same issues when we built our blog, so we made sure to use an architecture that answers these questions for us, giving us the framework to think about the problem.

That's why decided on an **Onion Architecture**.

At our September meetup, I gave a talk on the Onion Architecture and how we used it to build the very blog you are reading. If you'd like to learn more, or to review the slides, you'll find them attached below.

If you'd like to browse the code, to get a better understanding of how to use Laravel 5.1 to architect an app with an Onion Architecture, then you can <a href="https://github.com/PHPDublin/phpdublin.com" target="__blank">view the code on Github.</a>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/qhh2grCIldpwiS" width="700" height="450" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/barryosull/onion-architecture-and-the-blog" title="Onion Architecture and the Blog" target="_blank">Onion Architecture and the Blog</a> </strong> from <strong><a href="//www.slideshare.net/barryosull" target="_blank">barryosull</a></strong> </div>