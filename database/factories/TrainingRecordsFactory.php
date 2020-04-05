<?php

use App\TrainingRecord;
use Faker\Generator as Faker;

$factory->define(TrainingRecord::class, function (Faker $faker) {

    $facilities = ['SEA_DEL', 'SEA_GND', 'SEA_TWR', 'SEA_APP', 'PDX_CTR'];
    $isOTS = $faker->boolean(10);
    return [
        'student_id'    => 1275302,
        'instructor_id' => 1275401,
        'session_date'  => $faker->dateTimeThisDecade,
        'facility_id'   => 'ZSE',
        'position'      => $facilities[$faker->numberBetween(0, 4)],
        'duration'      => $faker->numberBetween(0, 4) . ":" . $faker->numberBetween(0, 59),
        'num_movements' => $faker->numberBetween(0, 100),
        'score'         => $faker->numberBetween(1, 5),
        'notes'         => implode("<br>", $faker->paragraphs($faker->numberBetween(1, 6))),
        'location' => $faker->numberBetween(0,2),
        'is_ots' => $isOTS,
        'is_cbt' => 0,
        'solo_granted' => $faker->boolean(15),
        'ots_result' => $isOTS ? $faker->boolean(70) : false
    ];
});