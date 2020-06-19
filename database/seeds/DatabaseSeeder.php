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
        // Uncomment if you'd like to randomly seed the database
        //
        // factory(App\Movie::class,3)->create(); // create 3 movies in the DB
        // factory(App\Person::class, 12)->create()->each(function ($person) {
        //     $person->movies()->createMany(factory(App\Movie::class,random_int(3,8))->make()->toArray()); // add 3 to 8 random movies to a person
        //     $person->movies()->save(App\Movie::find(random_int(1,3))); // add a random common movie from the 3 created on line 16
        // });

        // seed with the Cohort Data .csv files

        $this->call([
            MovieSeeder::class,
            PeopleSeeder::class,
            MoviePeopleSeeder::class,
        ]);
        
    }
}
