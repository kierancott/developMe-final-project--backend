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

1. Fork this repo
2. In your new directory, run `composer require laravel/homestead`
3. Run `vendor/bin/homestead make`
4. In your `.env` file, set the following:
```
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret
```
* If your `.env` file does not exist, use the `.env.example` file for setup
5. Run `vagrant up`
6. Visit `http://homestead.test` on Mac or `http://localhost:8000` on Windows:

![Default view on Start](https://imgur.com/v6YqxSl.jpg?)

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
