<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Post;
use App\Models\Cate_post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker) {
    $position = $faker->unique()->numberBetween(1, 100000);
    $posts = Cate_post::all()->random()->id;
    $today = Carbon::today();
    return [
        'name_vi' => $faker->name,
        'name_en' => $faker->name,
        'slug_vi' => str_slug($faker->name),
        'slug_en' => str_slug($faker->name),
        'image'   => public_path('backend/images/anhpost.jpg'),
        'cate_post_id' => $posts,
        'position'    => $position,
        'status'     => $faker->numberBetween(0,1),
        'is_home'    => $faker->numberBetween(0,1),
        'is_hot'    => $faker->numberBetween(0,1),
        'title_vi'  => $faker->title,
        'title_en'  => $faker->title,
        'description_vi' => $faker->title,
        'description_en' => $faker->title,
        'created_at' => $faker->dateTimeBetween($today,strtotime('-6 days')),
        'updated_at' => $faker->dateTimeBetween($today,strtotime('-6 days')),
    ];
});
