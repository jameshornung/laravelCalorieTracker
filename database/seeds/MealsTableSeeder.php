<?php

use Illuminate\Database\Seeder;

use app\meal;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Meal::class, 50)->create();
    }
}
