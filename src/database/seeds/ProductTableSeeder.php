<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('product')->insert(
					[
						[
							'ten' => 'Sản Phẩm 1',
							
						],
						[
							'ten' => 'Sản Phẩm 2',
							
						],
					]
				);
    }
}
