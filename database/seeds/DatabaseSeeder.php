<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //$this->call(UserTableSeeder::class);
        factory('App\User')->create(array(
            'name' => 'Fabio',
            'email' => 'teste@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ));

        $this->call(PostsTableSeeder::class);
        $this->call(TagTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}
