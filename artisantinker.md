# Artisan Tinker Database Instructions:

#### Add a person to the database:

`$person = Person::create(["name"=>"John Smith"]);`

#### Add a movie to the database:

$movie = Movie::create(["name"=>"Fight Club", "year"=>1999]);

#### Define relationship:

Assign `$movie` (created above) to person in people table with id = 1:

$movie->people()->sync([1]);