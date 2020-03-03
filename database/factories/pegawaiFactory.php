<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pegawai;
use Faker\Generator as Faker;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'nama_pegawai' => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
        'email' => $faker->unique()->safeEmail,
        'alamat' => $faker->secondaryAddress

    ];
});
