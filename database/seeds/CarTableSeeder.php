<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $car = new \App\Car(['name' => 'car1', 'price' => 111111, 'supplier_id' => 1]);
        $car->save();
    }
}
