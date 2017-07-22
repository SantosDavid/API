<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(VendorTableSeeder::class);
        $this->call(SaleTableSeeder::class);
    }
}


class VendorTableSeeder extends Seeder
{
    public function run()
    {
        App\Vendor::create([
            'name'  => 'Joao',
            'email' =>'joao@gmail.com',
        ]);

        App\Vendor::create([
            'name'  => 'Carlos',
            'email' => 'carlos@hotmail.com',
        ]);
    }
}


class SaleTableSeeder extends Seeder
{
    public function run()
    {
        App\Sale::create([
            'id_vendor' => 2,
            'price'  => '100.00',
            'comission' =>'15.00',
        ]);


    }
}
