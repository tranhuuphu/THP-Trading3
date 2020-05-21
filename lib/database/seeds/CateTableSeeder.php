<?php

use Illuminate\Database\Seeder;

class CateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'cate_name' => 'Inox',
        		'cate_slug' => str_slug('Inox'),
        		'meta_key' => 'Inox Khong Gi',
        		'meta_desc' => 'Inox Khong Gi'
        	],
        	[
        		'cate_name' => '304',
        		'cate_slug' => str_slug('304'),
        		'meta_key' => 'Inox Khong Gi',
        		'meta_desc' => 'Inox Khong Gi'
        	]
        ];
        DB::table('cate')->insert($data);
    }
}
