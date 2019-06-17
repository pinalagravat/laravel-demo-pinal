<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
        	[
        		'category_id' => 'Punjabi',
        		'name' => 'Pannertikka',
        		'price' => 150,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'category_id' => 'Chinese',
        		'name' => 'Chinese Bhel',
        		'price' => 70,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'category_id' => 'Gujarati',
        		'name' => 'Bhindi masala',
        		'price' => 60,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'category_id' => 'South Indian',
        		'name' => 'Masala Fry',
        		'price' => 120,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        	[
        		'category_id' => 'Italian',
        		'name' => 'Pizza',
        		'price' => 120,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString()
        	],
        ];

        foreach ($menus as $key => $menu) {
        	$menus[$key]['category_id'] = DB::table('categories')->where('name', $menu['category_id'])->value('id');
        }

        DB::table('menus')->insert($menus);
    }
}
