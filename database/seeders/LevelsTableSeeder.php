<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('levels')->delete();
        
        \DB::table('levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genere_id' => 1,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:44:10',
                'updated_at' => '2022-07-20 10:44:10',
            ),
            1 => 
            array (
                'id' => 2,
                'genere_id' => 1,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:44:10',
                'updated_at' => '2022-07-20 10:44:10',
            ),
            2 => 
            array (
                'id' => 3,
                'genere_id' => 1,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:44:10',
                'updated_at' => '2022-07-20 10:44:10',
            ),
            3 => 
            array (
                'id' => 4,
                'genere_id' => 1,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:44:10',
                'updated_at' => '2022-07-20 10:44:10',
            ),
            4 => 
            array (
                'id' => 5,
                'genere_id' => 1,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:44:10',
                'updated_at' => '2022-07-20 10:44:10',
            ),
            5 => 
            array (
                'id' => 6,
                'genere_id' => 2,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:45:57',
                'updated_at' => '2022-07-20 10:45:57',
            ),
            6 => 
            array (
                'id' => 7,
                'genere_id' => 2,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:45:57',
                'updated_at' => '2022-07-20 10:45:57',
            ),
            7 => 
            array (
                'id' => 8,
                'genere_id' => 2,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:45:57',
                'updated_at' => '2022-07-20 10:45:57',
            ),
            8 => 
            array (
                'id' => 9,
                'genere_id' => 2,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:45:57',
                'updated_at' => '2022-07-20 10:45:57',
            ),
            9 => 
            array (
                'id' => 10,
                'genere_id' => 2,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:45:57',
                'updated_at' => '2022-07-20 10:45:57',
            ),
            10 => 
            array (
                'id' => 11,
                'genere_id' => 3,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:06',
                'updated_at' => '2022-07-20 10:46:06',
            ),
            11 => 
            array (
                'id' => 12,
                'genere_id' => 3,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:06',
                'updated_at' => '2022-07-20 10:46:06',
            ),
            12 => 
            array (
                'id' => 13,
                'genere_id' => 3,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:06',
                'updated_at' => '2022-07-20 10:46:06',
            ),
            13 => 
            array (
                'id' => 14,
                'genere_id' => 3,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:06',
                'updated_at' => '2022-07-20 10:46:06',
            ),
            14 => 
            array (
                'id' => 15,
                'genere_id' => 3,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:06',
                'updated_at' => '2022-07-20 10:46:06',
            ),
            15 => 
            array (
                'id' => 16,
                'genere_id' => 4,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:12',
                'updated_at' => '2022-07-20 10:46:12',
            ),
            16 => 
            array (
                'id' => 17,
                'genere_id' => 4,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:12',
                'updated_at' => '2022-07-20 10:46:12',
            ),
            17 => 
            array (
                'id' => 18,
                'genere_id' => 4,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:12',
                'updated_at' => '2022-07-20 10:46:12',
            ),
            18 => 
            array (
                'id' => 19,
                'genere_id' => 4,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:12',
                'updated_at' => '2022-07-20 10:46:12',
            ),
            19 => 
            array (
                'id' => 20,
                'genere_id' => 4,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:12',
                'updated_at' => '2022-07-20 10:46:12',
            ),
            20 => 
            array (
                'id' => 21,
                'genere_id' => 5,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:17',
                'updated_at' => '2022-07-20 10:46:17',
            ),
            21 => 
            array (
                'id' => 22,
                'genere_id' => 5,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:18',
                'updated_at' => '2022-07-20 10:46:18',
            ),
            22 => 
            array (
                'id' => 23,
                'genere_id' => 5,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:18',
                'updated_at' => '2022-07-20 10:46:18',
            ),
            23 => 
            array (
                'id' => 24,
                'genere_id' => 5,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:18',
                'updated_at' => '2022-07-20 10:46:18',
            ),
            24 => 
            array (
                'id' => 25,
                'genere_id' => 5,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:18',
                'updated_at' => '2022-07-20 10:46:18',
            ),
            25 => 
            array (
                'id' => 26,
                'genere_id' => 6,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:24',
                'updated_at' => '2022-07-20 10:46:24',
            ),
            26 => 
            array (
                'id' => 27,
                'genere_id' => 6,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:24',
                'updated_at' => '2022-07-20 10:46:24',
            ),
            27 => 
            array (
                'id' => 28,
                'genere_id' => 6,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:24',
                'updated_at' => '2022-07-20 10:46:24',
            ),
            28 => 
            array (
                'id' => 29,
                'genere_id' => 6,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:24',
                'updated_at' => '2022-07-20 10:46:24',
            ),
            29 => 
            array (
                'id' => 30,
                'genere_id' => 6,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:24',
                'updated_at' => '2022-07-20 10:46:24',
            ),
            30 => 
            array (
                'id' => 31,
                'genere_id' => 7,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:31',
                'updated_at' => '2022-07-20 10:46:31',
            ),
            31 => 
            array (
                'id' => 32,
                'genere_id' => 7,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:31',
                'updated_at' => '2022-07-20 10:46:31',
            ),
            32 => 
            array (
                'id' => 33,
                'genere_id' => 7,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:31',
                'updated_at' => '2022-07-20 10:46:31',
            ),
            33 => 
            array (
                'id' => 34,
                'genere_id' => 7,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:31',
                'updated_at' => '2022-07-20 10:46:31',
            ),
            34 => 
            array (
                'id' => 35,
                'genere_id' => 7,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:31',
                'updated_at' => '2022-07-20 10:46:31',
            ),
            35 => 
            array (
                'id' => 36,
                'genere_id' => 8,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:37',
                'updated_at' => '2022-07-20 10:46:37',
            ),
            36 => 
            array (
                'id' => 37,
                'genere_id' => 8,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:37',
                'updated_at' => '2022-07-20 10:46:37',
            ),
            37 => 
            array (
                'id' => 38,
                'genere_id' => 8,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:38',
                'updated_at' => '2022-07-20 10:46:38',
            ),
            38 => 
            array (
                'id' => 39,
                'genere_id' => 8,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:38',
                'updated_at' => '2022-07-20 10:46:38',
            ),
            39 => 
            array (
                'id' => 40,
                'genere_id' => 8,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:38',
                'updated_at' => '2022-07-20 10:46:38',
            ),
            40 => 
            array (
                'id' => 41,
                'genere_id' => 9,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:45',
                'updated_at' => '2022-07-20 10:46:45',
            ),
            41 => 
            array (
                'id' => 42,
                'genere_id' => 9,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:45',
                'updated_at' => '2022-07-20 10:46:45',
            ),
            42 => 
            array (
                'id' => 43,
                'genere_id' => 9,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:45',
                'updated_at' => '2022-07-20 10:46:45',
            ),
            43 => 
            array (
                'id' => 44,
                'genere_id' => 9,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:45',
                'updated_at' => '2022-07-20 10:46:45',
            ),
            44 => 
            array (
                'id' => 45,
                'genere_id' => 9,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:45',
                'updated_at' => '2022-07-20 10:46:45',
            ),
            45 => 
            array (
                'id' => 46,
                'genere_id' => 10,
                'title' => 'Level 1',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:51',
                'updated_at' => '2022-07-20 10:46:51',
            ),
            46 => 
            array (
                'id' => 47,
                'genere_id' => 10,
                'title' => 'Level 2',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:51',
                'updated_at' => '2022-07-20 10:46:51',
            ),
            47 => 
            array (
                'id' => 48,
                'genere_id' => 10,
                'title' => 'Level 3',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:51',
                'updated_at' => '2022-07-20 10:46:51',
            ),
            48 => 
            array (
                'id' => 49,
                'genere_id' => 10,
                'title' => 'Level 4',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:51',
                'updated_at' => '2022-07-20 10:46:51',
            ),
            49 => 
            array (
                'id' => 50,
                'genere_id' => 10,
                'title' => 'Level 5',
                'music' => 'https://server.appsstaging.com/3346/kidsmusic/public/uploadedmusics/1656306811.mp3',
                'created_at' => '2022-07-20 10:46:51',
                'updated_at' => '2022-07-20 10:46:51',
            ),
        ));
        
        
    }
}