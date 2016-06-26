<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    }
}
