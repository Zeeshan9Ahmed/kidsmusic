<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('generes')->delete();
        
        \DB::table('generes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'pop',
                'created_at' => '2022-07-19 07:17:49',
                'updated_at' => '2022-07-19 07:17:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'jazz',
                'created_at' => '2022-07-19 07:18:56',
                'updated_at' => '2022-07-19 07:18:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'indie',
                'created_at' => '2022-07-19 07:19:16',
                'updated_at' => '2022-07-19 07:19:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'house',
                'created_at' => '2022-07-19 07:19:35',
                'updated_at' => '2022-07-19 07:19:35',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'hiphop',
                'created_at' => '2022-07-19 07:20:07',
                'updated_at' => '2022-07-19 07:20:07',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'gospel',
                'created_at' => '2022-07-19 07:20:36',
                'updated_at' => '2022-07-19 07:20:36',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'folk_music',
                'created_at' => '2022-07-19 07:20:59',
                'updated_at' => '2022-07-19 07:20:59',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'country',
                'created_at' => '2022-07-19 07:21:22',
                'updated_at' => '2022-07-19 07:21:22',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'blues',
                'created_at' => '2022-07-19 07:21:39',
                'updated_at' => '2022-07-19 07:21:39',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'dubstep',
                'created_at' => '2022-07-19 07:21:56',
                'updated_at' => '2022-07-19 07:21:56',
            ),
        ));
        
        
    }
}