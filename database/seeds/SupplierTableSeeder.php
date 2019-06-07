<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $supplier = new \App\Supplier(['address' => 'aaa111', 'name' => 'Supplier1']);
        $supplier->save();
    }
}
