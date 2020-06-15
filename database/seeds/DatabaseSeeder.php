<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class)
        // $movie=factory(App\Movie::class)->make(["name"=>"Crash", "year"=>"2004"]);
        factory(App\Person::class, 12)->create()->each(function ($person){
            global $movie;
            $person->movies()->save(factory(App\Movie::class)->make());
            $person->movies()->save(factory(App\Movie::class)->make());
            // $person->movies()->save($movie);
        });
        
    }
}
