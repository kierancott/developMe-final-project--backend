# DevelopMe_ Cohort #16: Final Project
## Back-end Architecture - Laravel Blade

### Team:
- Nik Osvalds
- Kieran Cott
- Henry MacFarlane
- Richard Stibbard

### Collaborating:

**Never commit directly to the master branch. Create a new branch, and make a merge request to a team-mate.**

### Getting Started:

The Virtual Machine is already configured from ScotchBox, and the Vagrant Box set up to use Laravel's Homestead. To get started:

1. Clone this repo and `cd` into folder
2. In your new directory, run `composer install`
3. Run `vendor/bin/homestead make`
4. Copy the `.env.example` file to a new `.env` file:
`cp .env.example .env`

5. Update the db, username and password your `.env` file
6. Run `vagrant up`
7. Login to the virtual machine: `vagrant ssh`
8. Navigate to new `code` folder: `cd code`
9. Generate a new artisan key: `art key:generate`
10. Run the database migration: `art migrate`
11. Seed the database with data: `artisan db:seed`

Visit `http://homestead.test` on Mac or `http://localhost:8000` on Windows:

![Default view on Start](https://imgur.com/v6YqxSl.jpg?)

---

# MovieHopper API

## General

All requests should:

- Use the basename `https://homestead.test/api/`
- Be sent using JSON and with the `Accept: application/json` header.

End point(s):

- `/api/people`

### People - `/api/people`

#### `GET /api/people`

Returns people as JSON object:

```
{
    "people": [
        {
            "id": "1",
            "name": "Chris Cassidy",
        },
        {
            "id": "2",
            "name": "Anatoly Ivanishin"
        },
        {
            "id": "3",
            "name": "Ivan Vagner"
        },
    ]
}
```

**Does not return movies.**

#### `GET /people/:id`

Returns an individual person as JSON object where `:id` is a person ID

```
{
     "id": "3",
     "name": "Ivan Vagner",
     "movies" : [
             {
                "id": "7",
                "name": "Fight Club"
                "year: "1999"
             },
             {
                "id": "2",
                "name": "The Shawshank Redemption"
                "year: "1994"
             },
       ]
}
```


#### GET Request - `api/people/match/?people=:id1,:id2,:id3`
Returns the movie most frequently liked by the people specified as JSON object, where `:id1`, `:id2` and `:id3` refer to person IDs (`1`,`2`,`3`).
```
{
    "id": "7",
    "name": "Fight Club",
    "year: "1999"
}
```

---

### Troubleshooting:

#### Q: When I visit `http://homestead.test` on Mac or `http://localhost:8000` on Windows, I get an Error 500: Internal Server Error
A:

Reload the vagrant box and provision it:

`vagrant reload --provision`


Generate a new app key:

`php artisan key:generate`

#### Q: When I run `vagrant up`, I get the following error:
```
Vagrant was unable to mount VirtualBox shared folders. This is usually
because the filesystem "vboxsf" is not available. This filesystem is
made available via the VirtualBox Guest Additions and kernel module.
Please verify that these guest additions are properly installed in the
guest. This is not a bug in Vagrant and is usually caused by a faulty
Vagrant box. For context, the command attempted was:

mount -t vboxsf -o dmode=777,fmode=666,uid=1000,gid=1000 var_www /var/www

The error output from the command was:

: No such device
```
A:

First, install the `vagrant-vbguest` plugin:

`vagrant plugin install vagrant-vbguest`


Next, initialise the plugin:

`vagrant vbguest`

---

## Laravel

## Documentation

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

---

## Scotch Box

## Documentation

* Check out the official docs at: [box.scotch.io](https://box.scotch.io)
* [Read the getting started article](https://scotch.io/bar-talk/introducing-scotch-box-a-vagrant-lamp-stack-that-just-works)
* [Read the 3.5 release article](https://scotch.io/bar-talk/announcing-scotch-box-v35-and-scotch-box-pro-v15-the-big-switcheroo)
