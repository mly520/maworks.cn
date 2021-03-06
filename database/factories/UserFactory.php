<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// 头像假数据
$avatars = [
    'https://cdn.learnku.com/uploads/images/201710/14/1/s5ehp11z6s.png',
    'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png',
    'https://cdn.learnku.com/uploads/images/201710/14/1/LOnMrqbHJn.png',
    'https://cdn.learnku.com/uploads/images/201710/14/1/xAuDMxteQy.png',
    'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png',
    'https://cdn.learnku.com/uploads/images/201710/14/1/NDnzMutoxX.png',
];

$factory->define(User::class, function (Faker $faker) use($avatars){
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'avatar' => $faker->randomElement($avatars),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
        'introduction' => $faker->sentence(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
