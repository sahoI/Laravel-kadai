<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
      'title' => 'ラーメン',
      'info' => 'こってり',
      'image' => 'https://1.bp.blogspot.com/-AT1gtvKviZA/XQjuby-BKTI/AAAAAAABTSE/L-jwRc_xthUT2VoGd3FdrFTssREQ3uGdQCLcBGAs/s800/ramen_top_shio.png',
      'price' => 500,
    ];
});
