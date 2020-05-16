## Build Blog CMS (Content Management System) with Laravel 7

## Clone this repo
```
https://github.com/samironbarai/laravel-7-blog-cms.git
```

## Install composer packages
```
$ cd laravel-7-blog-cms
$ composer install
$ npm install
$ npm run dev
```

## Create and setup .env file
```
make a copy of .env.example and rename to .env
$ php artisan key:generate
put database credentials in .env file
```

## Migrate and insert records
```
$ php artisan migrate
$ php artisan tinker
$ factory(App\User::class, 5)->create();
$ factory(App\Post::class, 100)->create();
$ exit
$ php artisan db:seed --class=CategoriesTableSeeder
$ php artisan tinker
$ factory(App\CategoryPost::class, 100)->create();
```

## Use storate images
```
$ php artisan storage:link
```

## Mail setup 
```
visit at : https://mailtrap.io/
put mail credentials in .env file
```

## Facing any problem? Contact with me

Click on the image bellow to see YouTube video.

[![Laravel 7 Blog CMS](https://img.youtube.com/vi/Cm4Yggm5K9E/0.jpg)](https://www.youtube.com/watch?v=Cm4Yggm5K9E) 

Please visit my website.
[samironbarai.com](https://samironbarai.com) 
