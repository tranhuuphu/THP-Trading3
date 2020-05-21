<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
        			'email' => 'phuth.site@gmail.com',
        			'password' => bcrypt('1234567'),
        			'level' => 1
        		],
        ];
        DB::table('thp_user')->insert($data);
    }
}
