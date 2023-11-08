<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'level_id' => 1,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:28',
                'updated_at' => '2022-07-20 10:49:28',
            ),
            1 => 
            array (
                'id' => 2,
                'level_id' => 1,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:28',
                'updated_at' => '2022-07-20 10:49:28',
            ),
            2 => 
            array (
                'id' => 3,
                'level_id' => 1,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:28',
                'updated_at' => '2022-07-20 10:49:28',
            ),
            3 => 
            array (
                'id' => 4,
                'level_id' => 1,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:28',
                'updated_at' => '2022-07-20 10:49:28',
            ),
            4 => 
            array (
                'id' => 5,
                'level_id' => 1,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:28',
                'updated_at' => '2022-07-20 10:49:28',
            ),
            5 => 
            array (
                'id' => 6,
                'level_id' => 2,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            6 => 
            array (
                'id' => 7,
                'level_id' => 2,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            7 => 
            array (
                'id' => 8,
                'level_id' => 2,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            8 => 
            array (
                'id' => 9,
                'level_id' => 2,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            9 => 
            array (
                'id' => 10,
                'level_id' => 2,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            10 => 
            array (
                'id' => 11,
                'level_id' => 3,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            11 => 
            array (
                'id' => 12,
                'level_id' => 3,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            12 => 
            array (
                'id' => 13,
                'level_id' => 3,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            13 => 
            array (
                'id' => 14,
                'level_id' => 3,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            14 => 
            array (
                'id' => 15,
                'level_id' => 3,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            15 => 
            array (
                'id' => 16,
                'level_id' => 4,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            16 => 
            array (
                'id' => 17,
                'level_id' => 4,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            17 => 
            array (
                'id' => 18,
                'level_id' => 4,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            18 => 
            array (
                'id' => 19,
                'level_id' => 4,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            19 => 
            array (
                'id' => 20,
                'level_id' => 4,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            20 => 
            array (
                'id' => 21,
                'level_id' => 5,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            21 => 
            array (
                'id' => 22,
                'level_id' => 5,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            22 => 
            array (
                'id' => 23,
                'level_id' => 5,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            23 => 
            array (
                'id' => 24,
                'level_id' => 5,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            24 => 
            array (
                'id' => 25,
                'level_id' => 5,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            25 => 
            array (
                'id' => 26,
                'level_id' => 6,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            26 => 
            array (
                'id' => 27,
                'level_id' => 6,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            27 => 
            array (
                'id' => 28,
                'level_id' => 6,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:29',
                'updated_at' => '2022-07-20 10:49:29',
            ),
            28 => 
            array (
                'id' => 29,
                'level_id' => 6,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            29 => 
            array (
                'id' => 30,
                'level_id' => 6,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            30 => 
            array (
                'id' => 31,
                'level_id' => 7,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            31 => 
            array (
                'id' => 32,
                'level_id' => 7,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            32 => 
            array (
                'id' => 33,
                'level_id' => 7,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            33 => 
            array (
                'id' => 34,
                'level_id' => 7,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            34 => 
            array (
                'id' => 35,
                'level_id' => 7,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            35 => 
            array (
                'id' => 36,
                'level_id' => 8,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            36 => 
            array (
                'id' => 37,
                'level_id' => 8,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            37 => 
            array (
                'id' => 38,
                'level_id' => 8,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            38 => 
            array (
                'id' => 39,
                'level_id' => 8,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            39 => 
            array (
                'id' => 40,
                'level_id' => 8,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            40 => 
            array (
                'id' => 41,
                'level_id' => 9,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            41 => 
            array (
                'id' => 42,
                'level_id' => 9,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            42 => 
            array (
                'id' => 43,
                'level_id' => 9,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            43 => 
            array (
                'id' => 44,
                'level_id' => 9,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            44 => 
            array (
                'id' => 45,
                'level_id' => 9,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            45 => 
            array (
                'id' => 46,
                'level_id' => 10,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            46 => 
            array (
                'id' => 47,
                'level_id' => 10,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            47 => 
            array (
                'id' => 48,
                'level_id' => 10,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            48 => 
            array (
                'id' => 49,
                'level_id' => 10,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            49 => 
            array (
                'id' => 50,
                'level_id' => 10,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            50 => 
            array (
                'id' => 51,
                'level_id' => 11,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            51 => 
            array (
                'id' => 52,
                'level_id' => 11,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:30',
                'updated_at' => '2022-07-20 10:49:30',
            ),
            52 => 
            array (
                'id' => 53,
                'level_id' => 11,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            53 => 
            array (
                'id' => 54,
                'level_id' => 11,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            54 => 
            array (
                'id' => 55,
                'level_id' => 11,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            55 => 
            array (
                'id' => 56,
                'level_id' => 12,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            56 => 
            array (
                'id' => 57,
                'level_id' => 12,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            57 => 
            array (
                'id' => 58,
                'level_id' => 12,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            58 => 
            array (
                'id' => 59,
                'level_id' => 12,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            59 => 
            array (
                'id' => 60,
                'level_id' => 12,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            60 => 
            array (
                'id' => 61,
                'level_id' => 13,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            61 => 
            array (
                'id' => 62,
                'level_id' => 13,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            62 => 
            array (
                'id' => 63,
                'level_id' => 13,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            63 => 
            array (
                'id' => 64,
                'level_id' => 13,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            64 => 
            array (
                'id' => 65,
                'level_id' => 13,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            65 => 
            array (
                'id' => 66,
                'level_id' => 14,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            66 => 
            array (
                'id' => 67,
                'level_id' => 14,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            67 => 
            array (
                'id' => 68,
                'level_id' => 14,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            68 => 
            array (
                'id' => 69,
                'level_id' => 14,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            69 => 
            array (
                'id' => 70,
                'level_id' => 14,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            70 => 
            array (
                'id' => 71,
                'level_id' => 15,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            71 => 
            array (
                'id' => 72,
                'level_id' => 15,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            72 => 
            array (
                'id' => 73,
                'level_id' => 15,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            73 => 
            array (
                'id' => 74,
                'level_id' => 15,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            74 => 
            array (
                'id' => 75,
                'level_id' => 15,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:31',
                'updated_at' => '2022-07-20 10:49:31',
            ),
            75 => 
            array (
                'id' => 76,
                'level_id' => 16,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            76 => 
            array (
                'id' => 77,
                'level_id' => 16,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            77 => 
            array (
                'id' => 78,
                'level_id' => 16,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            78 => 
            array (
                'id' => 79,
                'level_id' => 16,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            79 => 
            array (
                'id' => 80,
                'level_id' => 16,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            80 => 
            array (
                'id' => 81,
                'level_id' => 17,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            81 => 
            array (
                'id' => 82,
                'level_id' => 17,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            82 => 
            array (
                'id' => 83,
                'level_id' => 17,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            83 => 
            array (
                'id' => 84,
                'level_id' => 17,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            84 => 
            array (
                'id' => 85,
                'level_id' => 17,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            85 => 
            array (
                'id' => 86,
                'level_id' => 18,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            86 => 
            array (
                'id' => 87,
                'level_id' => 18,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            87 => 
            array (
                'id' => 88,
                'level_id' => 18,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            88 => 
            array (
                'id' => 89,
                'level_id' => 18,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            89 => 
            array (
                'id' => 90,
                'level_id' => 18,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            90 => 
            array (
                'id' => 91,
                'level_id' => 19,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            91 => 
            array (
                'id' => 92,
                'level_id' => 19,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            92 => 
            array (
                'id' => 93,
                'level_id' => 19,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            93 => 
            array (
                'id' => 94,
                'level_id' => 19,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            94 => 
            array (
                'id' => 95,
                'level_id' => 19,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            95 => 
            array (
                'id' => 96,
                'level_id' => 20,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            96 => 
            array (
                'id' => 97,
                'level_id' => 20,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            97 => 
            array (
                'id' => 98,
                'level_id' => 20,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:32',
                'updated_at' => '2022-07-20 10:49:32',
            ),
            98 => 
            array (
                'id' => 99,
                'level_id' => 20,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            99 => 
            array (
                'id' => 100,
                'level_id' => 20,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            100 => 
            array (
                'id' => 101,
                'level_id' => 21,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            101 => 
            array (
                'id' => 102,
                'level_id' => 21,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            102 => 
            array (
                'id' => 103,
                'level_id' => 21,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            103 => 
            array (
                'id' => 104,
                'level_id' => 21,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            104 => 
            array (
                'id' => 105,
                'level_id' => 21,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            105 => 
            array (
                'id' => 106,
                'level_id' => 22,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            106 => 
            array (
                'id' => 107,
                'level_id' => 22,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            107 => 
            array (
                'id' => 108,
                'level_id' => 22,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            108 => 
            array (
                'id' => 109,
                'level_id' => 22,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            109 => 
            array (
                'id' => 110,
                'level_id' => 22,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            110 => 
            array (
                'id' => 111,
                'level_id' => 23,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            111 => 
            array (
                'id' => 112,
                'level_id' => 23,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            112 => 
            array (
                'id' => 113,
                'level_id' => 23,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            113 => 
            array (
                'id' => 114,
                'level_id' => 23,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            114 => 
            array (
                'id' => 115,
                'level_id' => 23,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            115 => 
            array (
                'id' => 116,
                'level_id' => 24,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            116 => 
            array (
                'id' => 117,
                'level_id' => 24,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            117 => 
            array (
                'id' => 118,
                'level_id' => 24,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            118 => 
            array (
                'id' => 119,
                'level_id' => 24,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            119 => 
            array (
                'id' => 120,
                'level_id' => 24,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            120 => 
            array (
                'id' => 121,
                'level_id' => 25,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:33',
                'updated_at' => '2022-07-20 10:49:33',
            ),
            121 => 
            array (
                'id' => 122,
                'level_id' => 25,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            122 => 
            array (
                'id' => 123,
                'level_id' => 25,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            123 => 
            array (
                'id' => 124,
                'level_id' => 25,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            124 => 
            array (
                'id' => 125,
                'level_id' => 25,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            125 => 
            array (
                'id' => 126,
                'level_id' => 26,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            126 => 
            array (
                'id' => 127,
                'level_id' => 26,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            127 => 
            array (
                'id' => 128,
                'level_id' => 26,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            128 => 
            array (
                'id' => 129,
                'level_id' => 26,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            129 => 
            array (
                'id' => 130,
                'level_id' => 26,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            130 => 
            array (
                'id' => 131,
                'level_id' => 27,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            131 => 
            array (
                'id' => 132,
                'level_id' => 27,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            132 => 
            array (
                'id' => 133,
                'level_id' => 27,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            133 => 
            array (
                'id' => 134,
                'level_id' => 27,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            134 => 
            array (
                'id' => 135,
                'level_id' => 27,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            135 => 
            array (
                'id' => 136,
                'level_id' => 28,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            136 => 
            array (
                'id' => 137,
                'level_id' => 28,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            137 => 
            array (
                'id' => 138,
                'level_id' => 28,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            138 => 
            array (
                'id' => 139,
                'level_id' => 28,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            139 => 
            array (
                'id' => 140,
                'level_id' => 28,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            140 => 
            array (
                'id' => 141,
                'level_id' => 29,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:34',
                'updated_at' => '2022-07-20 10:49:34',
            ),
            141 => 
            array (
                'id' => 142,
                'level_id' => 29,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            142 => 
            array (
                'id' => 143,
                'level_id' => 29,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            143 => 
            array (
                'id' => 144,
                'level_id' => 29,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            144 => 
            array (
                'id' => 145,
                'level_id' => 29,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            145 => 
            array (
                'id' => 146,
                'level_id' => 30,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            146 => 
            array (
                'id' => 147,
                'level_id' => 30,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            147 => 
            array (
                'id' => 148,
                'level_id' => 30,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            148 => 
            array (
                'id' => 149,
                'level_id' => 30,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            149 => 
            array (
                'id' => 150,
                'level_id' => 30,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            150 => 
            array (
                'id' => 151,
                'level_id' => 31,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            151 => 
            array (
                'id' => 152,
                'level_id' => 31,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:35',
                'updated_at' => '2022-07-20 10:49:35',
            ),
            152 => 
            array (
                'id' => 153,
                'level_id' => 31,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            153 => 
            array (
                'id' => 154,
                'level_id' => 31,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            154 => 
            array (
                'id' => 155,
                'level_id' => 31,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            155 => 
            array (
                'id' => 156,
                'level_id' => 32,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            156 => 
            array (
                'id' => 157,
                'level_id' => 32,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            157 => 
            array (
                'id' => 158,
                'level_id' => 32,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            158 => 
            array (
                'id' => 159,
                'level_id' => 32,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            159 => 
            array (
                'id' => 160,
                'level_id' => 32,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            160 => 
            array (
                'id' => 161,
                'level_id' => 33,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            161 => 
            array (
                'id' => 162,
                'level_id' => 33,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            162 => 
            array (
                'id' => 163,
                'level_id' => 33,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            163 => 
            array (
                'id' => 164,
                'level_id' => 33,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            164 => 
            array (
                'id' => 165,
                'level_id' => 33,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            165 => 
            array (
                'id' => 166,
                'level_id' => 34,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            166 => 
            array (
                'id' => 167,
                'level_id' => 34,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            167 => 
            array (
                'id' => 168,
                'level_id' => 34,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            168 => 
            array (
                'id' => 169,
                'level_id' => 34,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            169 => 
            array (
                'id' => 170,
                'level_id' => 34,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            170 => 
            array (
                'id' => 171,
                'level_id' => 35,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            171 => 
            array (
                'id' => 172,
                'level_id' => 35,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            172 => 
            array (
                'id' => 173,
                'level_id' => 35,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            173 => 
            array (
                'id' => 174,
                'level_id' => 35,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            174 => 
            array (
                'id' => 175,
                'level_id' => 35,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:36',
                'updated_at' => '2022-07-20 10:49:36',
            ),
            175 => 
            array (
                'id' => 176,
                'level_id' => 36,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            176 => 
            array (
                'id' => 177,
                'level_id' => 36,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            177 => 
            array (
                'id' => 178,
                'level_id' => 36,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            178 => 
            array (
                'id' => 179,
                'level_id' => 36,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            179 => 
            array (
                'id' => 180,
                'level_id' => 36,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            180 => 
            array (
                'id' => 181,
                'level_id' => 37,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            181 => 
            array (
                'id' => 182,
                'level_id' => 37,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            182 => 
            array (
                'id' => 183,
                'level_id' => 37,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            183 => 
            array (
                'id' => 184,
                'level_id' => 37,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            184 => 
            array (
                'id' => 185,
                'level_id' => 37,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            185 => 
            array (
                'id' => 186,
                'level_id' => 38,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            186 => 
            array (
                'id' => 187,
                'level_id' => 38,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            187 => 
            array (
                'id' => 188,
                'level_id' => 38,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            188 => 
            array (
                'id' => 189,
                'level_id' => 38,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            189 => 
            array (
                'id' => 190,
                'level_id' => 38,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            190 => 
            array (
                'id' => 191,
                'level_id' => 39,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            191 => 
            array (
                'id' => 192,
                'level_id' => 39,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            192 => 
            array (
                'id' => 193,
                'level_id' => 39,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            193 => 
            array (
                'id' => 194,
                'level_id' => 39,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            194 => 
            array (
                'id' => 195,
                'level_id' => 39,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            195 => 
            array (
                'id' => 196,
                'level_id' => 40,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            196 => 
            array (
                'id' => 197,
                'level_id' => 40,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            197 => 
            array (
                'id' => 198,
                'level_id' => 40,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:37',
                'updated_at' => '2022-07-20 10:49:37',
            ),
            198 => 
            array (
                'id' => 199,
                'level_id' => 40,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            199 => 
            array (
                'id' => 200,
                'level_id' => 40,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            200 => 
            array (
                'id' => 201,
                'level_id' => 41,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            201 => 
            array (
                'id' => 202,
                'level_id' => 41,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            202 => 
            array (
                'id' => 203,
                'level_id' => 41,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            203 => 
            array (
                'id' => 204,
                'level_id' => 41,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            204 => 
            array (
                'id' => 205,
                'level_id' => 41,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            205 => 
            array (
                'id' => 206,
                'level_id' => 42,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            206 => 
            array (
                'id' => 207,
                'level_id' => 42,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            207 => 
            array (
                'id' => 208,
                'level_id' => 42,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            208 => 
            array (
                'id' => 209,
                'level_id' => 42,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            209 => 
            array (
                'id' => 210,
                'level_id' => 42,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            210 => 
            array (
                'id' => 211,
                'level_id' => 43,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            211 => 
            array (
                'id' => 212,
                'level_id' => 43,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            212 => 
            array (
                'id' => 213,
                'level_id' => 43,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            213 => 
            array (
                'id' => 214,
                'level_id' => 43,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            214 => 
            array (
                'id' => 215,
                'level_id' => 43,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            215 => 
            array (
                'id' => 216,
                'level_id' => 44,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            216 => 
            array (
                'id' => 217,
                'level_id' => 44,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:38',
                'updated_at' => '2022-07-20 10:49:38',
            ),
            217 => 
            array (
                'id' => 218,
                'level_id' => 44,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            218 => 
            array (
                'id' => 219,
                'level_id' => 44,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            219 => 
            array (
                'id' => 220,
                'level_id' => 44,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            220 => 
            array (
                'id' => 221,
                'level_id' => 45,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            221 => 
            array (
                'id' => 222,
                'level_id' => 45,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            222 => 
            array (
                'id' => 223,
                'level_id' => 45,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            223 => 
            array (
                'id' => 224,
                'level_id' => 45,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            224 => 
            array (
                'id' => 225,
                'level_id' => 45,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            225 => 
            array (
                'id' => 226,
                'level_id' => 46,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            226 => 
            array (
                'id' => 227,
                'level_id' => 46,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            227 => 
            array (
                'id' => 228,
                'level_id' => 46,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            228 => 
            array (
                'id' => 229,
                'level_id' => 46,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            229 => 
            array (
                'id' => 230,
                'level_id' => 46,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            230 => 
            array (
                'id' => 231,
                'level_id' => 47,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            231 => 
            array (
                'id' => 232,
                'level_id' => 47,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            232 => 
            array (
                'id' => 233,
                'level_id' => 47,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:39',
                'updated_at' => '2022-07-20 10:49:39',
            ),
            233 => 
            array (
                'id' => 234,
                'level_id' => 47,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            234 => 
            array (
                'id' => 235,
                'level_id' => 47,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            235 => 
            array (
                'id' => 236,
                'level_id' => 48,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            236 => 
            array (
                'id' => 237,
                'level_id' => 48,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            237 => 
            array (
                'id' => 238,
                'level_id' => 48,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            238 => 
            array (
                'id' => 239,
                'level_id' => 48,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            239 => 
            array (
                'id' => 240,
                'level_id' => 48,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            240 => 
            array (
                'id' => 241,
                'level_id' => 49,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            241 => 
            array (
                'id' => 242,
                'level_id' => 49,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            242 => 
            array (
                'id' => 243,
                'level_id' => 49,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            243 => 
            array (
                'id' => 244,
                'level_id' => 49,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            244 => 
            array (
                'id' => 245,
                'level_id' => 49,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            245 => 
            array (
                'id' => 246,
                'level_id' => 50,
                'question' => 'Question 1',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            246 => 
            array (
                'id' => 247,
                'level_id' => 50,
                'question' => 'Question 2',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            247 => 
            array (
                'id' => 248,
                'level_id' => 50,
                'question' => 'Question 3',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            248 => 
            array (
                'id' => 249,
                'level_id' => 50,
                'question' => 'Question 4',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
            249 => 
            array (
                'id' => 250,
                'level_id' => 50,
                'question' => 'Question 5',
                'created_at' => '2022-07-20 10:49:40',
                'updated_at' => '2022-07-20 10:49:40',
            ),
        ));
        
        
    }
}