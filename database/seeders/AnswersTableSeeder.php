<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('answers')->delete();
        
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_id' => 1,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:15',
                'updated_at' => '2022-07-20 11:10:11',
            ),
            1 => 
            array (
                'id' => 2,
                'question_id' => 1,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:15',
                'updated_at' => '2022-07-20 10:59:15',
            ),
            2 => 
            array (
                'id' => 3,
                'question_id' => 1,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:15',
                'updated_at' => '2022-07-20 10:59:15',
            ),
            3 => 
            array (
                'id' => 4,
                'question_id' => 1,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            4 => 
            array (
                'id' => 5,
                'question_id' => 2,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 11:10:20',
            ),
            5 => 
            array (
                'id' => 6,
                'question_id' => 2,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            6 => 
            array (
                'id' => 7,
                'question_id' => 2,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            7 => 
            array (
                'id' => 8,
                'question_id' => 2,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            8 => 
            array (
                'id' => 9,
                'question_id' => 3,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 11:10:30',
            ),
            9 => 
            array (
                'id' => 10,
                'question_id' => 3,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            10 => 
            array (
                'id' => 11,
                'question_id' => 3,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            11 => 
            array (
                'id' => 12,
                'question_id' => 3,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            12 => 
            array (
                'id' => 13,
                'question_id' => 4,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 11:10:39',
            ),
            13 => 
            array (
                'id' => 14,
                'question_id' => 4,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            14 => 
            array (
                'id' => 15,
                'question_id' => 4,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            15 => 
            array (
                'id' => 16,
                'question_id' => 4,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            16 => 
            array (
                'id' => 17,
                'question_id' => 5,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 11:10:57',
            ),
            17 => 
            array (
                'id' => 18,
                'question_id' => 5,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            18 => 
            array (
                'id' => 19,
                'question_id' => 5,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            19 => 
            array (
                'id' => 20,
                'question_id' => 5,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            20 => 
            array (
                'id' => 21,
                'question_id' => 6,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 11:14:29',
            ),
            21 => 
            array (
                'id' => 22,
                'question_id' => 6,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            22 => 
            array (
                'id' => 23,
                'question_id' => 6,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            23 => 
            array (
                'id' => 24,
                'question_id' => 6,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            24 => 
            array (
                'id' => 25,
                'question_id' => 7,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 11:14:35',
            ),
            25 => 
            array (
                'id' => 26,
                'question_id' => 7,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:16',
                'updated_at' => '2022-07-20 10:59:16',
            ),
            26 => 
            array (
                'id' => 27,
                'question_id' => 7,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            27 => 
            array (
                'id' => 28,
                'question_id' => 7,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            28 => 
            array (
                'id' => 29,
                'question_id' => 8,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 11:14:50',
            ),
            29 => 
            array (
                'id' => 30,
                'question_id' => 8,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            30 => 
            array (
                'id' => 31,
                'question_id' => 8,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            31 => 
            array (
                'id' => 32,
                'question_id' => 8,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            32 => 
            array (
                'id' => 33,
                'question_id' => 9,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 11:14:56',
            ),
            33 => 
            array (
                'id' => 34,
                'question_id' => 9,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            34 => 
            array (
                'id' => 35,
                'question_id' => 9,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            35 => 
            array (
                'id' => 36,
                'question_id' => 9,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            36 => 
            array (
                'id' => 37,
                'question_id' => 10,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 11:15:02',
            ),
            37 => 
            array (
                'id' => 38,
                'question_id' => 10,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            38 => 
            array (
                'id' => 39,
                'question_id' => 10,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            39 => 
            array (
                'id' => 40,
                'question_id' => 10,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            40 => 
            array (
                'id' => 41,
                'question_id' => 11,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 11:15:35',
            ),
            41 => 
            array (
                'id' => 42,
                'question_id' => 11,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            42 => 
            array (
                'id' => 43,
                'question_id' => 11,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            43 => 
            array (
                'id' => 44,
                'question_id' => 11,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            44 => 
            array (
                'id' => 45,
                'question_id' => 12,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 11:15:40',
            ),
            45 => 
            array (
                'id' => 46,
                'question_id' => 12,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            46 => 
            array (
                'id' => 47,
                'question_id' => 12,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            47 => 
            array (
                'id' => 48,
                'question_id' => 12,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            48 => 
            array (
                'id' => 49,
                'question_id' => 13,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 11:15:49',
            ),
            49 => 
            array (
                'id' => 50,
                'question_id' => 13,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:17',
                'updated_at' => '2022-07-20 10:59:17',
            ),
            50 => 
            array (
                'id' => 51,
                'question_id' => 13,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            51 => 
            array (
                'id' => 52,
                'question_id' => 13,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            52 => 
            array (
                'id' => 53,
                'question_id' => 14,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 11:15:57',
            ),
            53 => 
            array (
                'id' => 54,
                'question_id' => 14,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            54 => 
            array (
                'id' => 55,
                'question_id' => 14,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            55 => 
            array (
                'id' => 56,
                'question_id' => 14,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            56 => 
            array (
                'id' => 57,
                'question_id' => 15,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 11:16:03',
            ),
            57 => 
            array (
                'id' => 58,
                'question_id' => 15,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            58 => 
            array (
                'id' => 59,
                'question_id' => 15,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            59 => 
            array (
                'id' => 60,
                'question_id' => 15,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            60 => 
            array (
                'id' => 61,
                'question_id' => 16,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 11:16:43',
            ),
            61 => 
            array (
                'id' => 62,
                'question_id' => 16,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            62 => 
            array (
                'id' => 63,
                'question_id' => 16,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            63 => 
            array (
                'id' => 64,
                'question_id' => 16,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            64 => 
            array (
                'id' => 65,
                'question_id' => 17,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 11:17:11',
            ),
            65 => 
            array (
                'id' => 66,
                'question_id' => 17,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            66 => 
            array (
                'id' => 67,
                'question_id' => 17,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            67 => 
            array (
                'id' => 68,
                'question_id' => 17,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 10:59:18',
            ),
            68 => 
            array (
                'id' => 69,
                'question_id' => 18,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:18',
                'updated_at' => '2022-07-20 11:17:17',
            ),
            69 => 
            array (
                'id' => 70,
                'question_id' => 18,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            70 => 
            array (
                'id' => 71,
                'question_id' => 18,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            71 => 
            array (
                'id' => 72,
                'question_id' => 18,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            72 => 
            array (
                'id' => 73,
                'question_id' => 19,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 11:17:22',
            ),
            73 => 
            array (
                'id' => 74,
                'question_id' => 19,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            74 => 
            array (
                'id' => 75,
                'question_id' => 19,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            75 => 
            array (
                'id' => 76,
                'question_id' => 19,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            76 => 
            array (
                'id' => 77,
                'question_id' => 20,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 11:17:30',
            ),
            77 => 
            array (
                'id' => 78,
                'question_id' => 20,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            78 => 
            array (
                'id' => 79,
                'question_id' => 20,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            79 => 
            array (
                'id' => 80,
                'question_id' => 20,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            80 => 
            array (
                'id' => 81,
                'question_id' => 21,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 11:18:20',
            ),
            81 => 
            array (
                'id' => 82,
                'question_id' => 21,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            82 => 
            array (
                'id' => 83,
                'question_id' => 21,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            83 => 
            array (
                'id' => 84,
                'question_id' => 21,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            84 => 
            array (
                'id' => 85,
                'question_id' => 22,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 11:18:24',
            ),
            85 => 
            array (
                'id' => 86,
                'question_id' => 22,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            86 => 
            array (
                'id' => 87,
                'question_id' => 22,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            87 => 
            array (
                'id' => 88,
                'question_id' => 22,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            88 => 
            array (
                'id' => 89,
                'question_id' => 23,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 11:18:34',
            ),
            89 => 
            array (
                'id' => 90,
                'question_id' => 23,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            90 => 
            array (
                'id' => 91,
                'question_id' => 23,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            91 => 
            array (
                'id' => 92,
                'question_id' => 23,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:19',
                'updated_at' => '2022-07-20 10:59:19',
            ),
            92 => 
            array (
                'id' => 93,
                'question_id' => 24,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 11:18:39',
            ),
            93 => 
            array (
                'id' => 94,
                'question_id' => 24,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            94 => 
            array (
                'id' => 95,
                'question_id' => 24,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            95 => 
            array (
                'id' => 96,
                'question_id' => 24,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            96 => 
            array (
                'id' => 97,
                'question_id' => 25,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 11:18:47',
            ),
            97 => 
            array (
                'id' => 98,
                'question_id' => 25,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            98 => 
            array (
                'id' => 99,
                'question_id' => 25,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            99 => 
            array (
                'id' => 100,
                'question_id' => 25,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            100 => 
            array (
                'id' => 101,
                'question_id' => 26,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 11:18:51',
            ),
            101 => 
            array (
                'id' => 102,
                'question_id' => 26,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            102 => 
            array (
                'id' => 103,
                'question_id' => 26,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            103 => 
            array (
                'id' => 104,
                'question_id' => 26,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            104 => 
            array (
                'id' => 105,
                'question_id' => 27,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 11:18:56',
            ),
            105 => 
            array (
                'id' => 106,
                'question_id' => 27,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            106 => 
            array (
                'id' => 107,
                'question_id' => 27,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            107 => 
            array (
                'id' => 108,
                'question_id' => 27,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            108 => 
            array (
                'id' => 109,
                'question_id' => 28,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 11:19:17',
            ),
            109 => 
            array (
                'id' => 110,
                'question_id' => 28,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            110 => 
            array (
                'id' => 111,
                'question_id' => 28,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            111 => 
            array (
                'id' => 112,
                'question_id' => 28,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            112 => 
            array (
                'id' => 113,
                'question_id' => 29,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 11:19:37',
            ),
            113 => 
            array (
                'id' => 114,
                'question_id' => 29,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            114 => 
            array (
                'id' => 115,
                'question_id' => 29,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            115 => 
            array (
                'id' => 116,
                'question_id' => 29,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:20',
                'updated_at' => '2022-07-20 10:59:20',
            ),
            116 => 
            array (
                'id' => 117,
                'question_id' => 30,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 11:19:42',
            ),
            117 => 
            array (
                'id' => 118,
                'question_id' => 30,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            118 => 
            array (
                'id' => 119,
                'question_id' => 30,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            119 => 
            array (
                'id' => 120,
                'question_id' => 30,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            120 => 
            array (
                'id' => 121,
                'question_id' => 31,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            121 => 
            array (
                'id' => 122,
                'question_id' => 31,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            122 => 
            array (
                'id' => 123,
                'question_id' => 31,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            123 => 
            array (
                'id' => 124,
                'question_id' => 31,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            124 => 
            array (
                'id' => 125,
                'question_id' => 32,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            125 => 
            array (
                'id' => 126,
                'question_id' => 32,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            126 => 
            array (
                'id' => 127,
                'question_id' => 32,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            127 => 
            array (
                'id' => 128,
                'question_id' => 32,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            128 => 
            array (
                'id' => 129,
                'question_id' => 33,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            129 => 
            array (
                'id' => 130,
                'question_id' => 33,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            130 => 
            array (
                'id' => 131,
                'question_id' => 33,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            131 => 
            array (
                'id' => 132,
                'question_id' => 33,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            132 => 
            array (
                'id' => 133,
                'question_id' => 34,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            133 => 
            array (
                'id' => 134,
                'question_id' => 34,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            134 => 
            array (
                'id' => 135,
                'question_id' => 34,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            135 => 
            array (
                'id' => 136,
                'question_id' => 34,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            136 => 
            array (
                'id' => 137,
                'question_id' => 35,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:21',
                'updated_at' => '2022-07-20 10:59:21',
            ),
            137 => 
            array (
                'id' => 138,
                'question_id' => 35,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            138 => 
            array (
                'id' => 139,
                'question_id' => 35,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            139 => 
            array (
                'id' => 140,
                'question_id' => 35,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            140 => 
            array (
                'id' => 141,
                'question_id' => 36,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            141 => 
            array (
                'id' => 142,
                'question_id' => 36,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            142 => 
            array (
                'id' => 143,
                'question_id' => 36,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            143 => 
            array (
                'id' => 144,
                'question_id' => 36,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            144 => 
            array (
                'id' => 145,
                'question_id' => 37,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            145 => 
            array (
                'id' => 146,
                'question_id' => 37,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            146 => 
            array (
                'id' => 147,
                'question_id' => 37,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            147 => 
            array (
                'id' => 148,
                'question_id' => 37,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            148 => 
            array (
                'id' => 149,
                'question_id' => 38,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            149 => 
            array (
                'id' => 150,
                'question_id' => 38,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            150 => 
            array (
                'id' => 151,
                'question_id' => 38,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            151 => 
            array (
                'id' => 152,
                'question_id' => 38,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            152 => 
            array (
                'id' => 153,
                'question_id' => 39,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            153 => 
            array (
                'id' => 154,
                'question_id' => 39,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            154 => 
            array (
                'id' => 155,
                'question_id' => 39,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:22',
                'updated_at' => '2022-07-20 10:59:22',
            ),
            155 => 
            array (
                'id' => 156,
                'question_id' => 39,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            156 => 
            array (
                'id' => 157,
                'question_id' => 40,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            157 => 
            array (
                'id' => 158,
                'question_id' => 40,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            158 => 
            array (
                'id' => 159,
                'question_id' => 40,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            159 => 
            array (
                'id' => 160,
                'question_id' => 40,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            160 => 
            array (
                'id' => 161,
                'question_id' => 41,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            161 => 
            array (
                'id' => 162,
                'question_id' => 41,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            162 => 
            array (
                'id' => 163,
                'question_id' => 41,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            163 => 
            array (
                'id' => 164,
                'question_id' => 41,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            164 => 
            array (
                'id' => 165,
                'question_id' => 42,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            165 => 
            array (
                'id' => 166,
                'question_id' => 42,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            166 => 
            array (
                'id' => 167,
                'question_id' => 42,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            167 => 
            array (
                'id' => 168,
                'question_id' => 42,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            168 => 
            array (
                'id' => 169,
                'question_id' => 43,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            169 => 
            array (
                'id' => 170,
                'question_id' => 43,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            170 => 
            array (
                'id' => 171,
                'question_id' => 43,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            171 => 
            array (
                'id' => 172,
                'question_id' => 43,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            172 => 
            array (
                'id' => 173,
                'question_id' => 44,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            173 => 
            array (
                'id' => 174,
                'question_id' => 44,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            174 => 
            array (
                'id' => 175,
                'question_id' => 44,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:23',
                'updated_at' => '2022-07-20 10:59:23',
            ),
            175 => 
            array (
                'id' => 176,
                'question_id' => 44,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            176 => 
            array (
                'id' => 177,
                'question_id' => 45,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            177 => 
            array (
                'id' => 178,
                'question_id' => 45,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            178 => 
            array (
                'id' => 179,
                'question_id' => 45,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            179 => 
            array (
                'id' => 180,
                'question_id' => 45,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            180 => 
            array (
                'id' => 181,
                'question_id' => 46,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            181 => 
            array (
                'id' => 182,
                'question_id' => 46,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            182 => 
            array (
                'id' => 183,
                'question_id' => 46,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            183 => 
            array (
                'id' => 184,
                'question_id' => 46,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            184 => 
            array (
                'id' => 185,
                'question_id' => 47,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            185 => 
            array (
                'id' => 186,
                'question_id' => 47,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            186 => 
            array (
                'id' => 187,
                'question_id' => 47,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            187 => 
            array (
                'id' => 188,
                'question_id' => 47,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            188 => 
            array (
                'id' => 189,
                'question_id' => 48,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            189 => 
            array (
                'id' => 190,
                'question_id' => 48,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            190 => 
            array (
                'id' => 191,
                'question_id' => 48,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            191 => 
            array (
                'id' => 192,
                'question_id' => 48,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            192 => 
            array (
                'id' => 193,
                'question_id' => 49,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            193 => 
            array (
                'id' => 194,
                'question_id' => 49,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            194 => 
            array (
                'id' => 195,
                'question_id' => 49,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            195 => 
            array (
                'id' => 196,
                'question_id' => 49,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            196 => 
            array (
                'id' => 197,
                'question_id' => 50,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            197 => 
            array (
                'id' => 198,
                'question_id' => 50,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            198 => 
            array (
                'id' => 199,
                'question_id' => 50,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:24',
                'updated_at' => '2022-07-20 10:59:24',
            ),
            199 => 
            array (
                'id' => 200,
                'question_id' => 50,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            200 => 
            array (
                'id' => 201,
                'question_id' => 51,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            201 => 
            array (
                'id' => 202,
                'question_id' => 51,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            202 => 
            array (
                'id' => 203,
                'question_id' => 51,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            203 => 
            array (
                'id' => 204,
                'question_id' => 51,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            204 => 
            array (
                'id' => 205,
                'question_id' => 52,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            205 => 
            array (
                'id' => 206,
                'question_id' => 52,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            206 => 
            array (
                'id' => 207,
                'question_id' => 52,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            207 => 
            array (
                'id' => 208,
                'question_id' => 52,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            208 => 
            array (
                'id' => 209,
                'question_id' => 53,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            209 => 
            array (
                'id' => 210,
                'question_id' => 53,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            210 => 
            array (
                'id' => 211,
                'question_id' => 53,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            211 => 
            array (
                'id' => 212,
                'question_id' => 53,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            212 => 
            array (
                'id' => 213,
                'question_id' => 54,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            213 => 
            array (
                'id' => 214,
                'question_id' => 54,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            214 => 
            array (
                'id' => 215,
                'question_id' => 54,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            215 => 
            array (
                'id' => 216,
                'question_id' => 54,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            216 => 
            array (
                'id' => 217,
                'question_id' => 55,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            217 => 
            array (
                'id' => 218,
                'question_id' => 55,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            218 => 
            array (
                'id' => 219,
                'question_id' => 55,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            219 => 
            array (
                'id' => 220,
                'question_id' => 55,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            220 => 
            array (
                'id' => 221,
                'question_id' => 56,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:25',
                'updated_at' => '2022-07-20 10:59:25',
            ),
            221 => 
            array (
                'id' => 222,
                'question_id' => 56,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            222 => 
            array (
                'id' => 223,
                'question_id' => 56,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            223 => 
            array (
                'id' => 224,
                'question_id' => 56,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            224 => 
            array (
                'id' => 225,
                'question_id' => 57,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            225 => 
            array (
                'id' => 226,
                'question_id' => 57,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            226 => 
            array (
                'id' => 227,
                'question_id' => 57,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            227 => 
            array (
                'id' => 228,
                'question_id' => 57,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            228 => 
            array (
                'id' => 229,
                'question_id' => 58,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            229 => 
            array (
                'id' => 230,
                'question_id' => 58,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            230 => 
            array (
                'id' => 231,
                'question_id' => 58,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            231 => 
            array (
                'id' => 232,
                'question_id' => 58,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            232 => 
            array (
                'id' => 233,
                'question_id' => 59,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            233 => 
            array (
                'id' => 234,
                'question_id' => 59,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            234 => 
            array (
                'id' => 235,
                'question_id' => 59,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            235 => 
            array (
                'id' => 236,
                'question_id' => 59,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            236 => 
            array (
                'id' => 237,
                'question_id' => 60,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            237 => 
            array (
                'id' => 238,
                'question_id' => 60,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            238 => 
            array (
                'id' => 239,
                'question_id' => 60,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:26',
                'updated_at' => '2022-07-20 10:59:26',
            ),
            239 => 
            array (
                'id' => 240,
                'question_id' => 60,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            240 => 
            array (
                'id' => 241,
                'question_id' => 61,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            241 => 
            array (
                'id' => 242,
                'question_id' => 61,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            242 => 
            array (
                'id' => 243,
                'question_id' => 61,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            243 => 
            array (
                'id' => 244,
                'question_id' => 61,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            244 => 
            array (
                'id' => 245,
                'question_id' => 62,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            245 => 
            array (
                'id' => 246,
                'question_id' => 62,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            246 => 
            array (
                'id' => 247,
                'question_id' => 62,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            247 => 
            array (
                'id' => 248,
                'question_id' => 62,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            248 => 
            array (
                'id' => 249,
                'question_id' => 63,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            249 => 
            array (
                'id' => 250,
                'question_id' => 63,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            250 => 
            array (
                'id' => 251,
                'question_id' => 63,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            251 => 
            array (
                'id' => 252,
                'question_id' => 63,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            252 => 
            array (
                'id' => 253,
                'question_id' => 64,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            253 => 
            array (
                'id' => 254,
                'question_id' => 64,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            254 => 
            array (
                'id' => 255,
                'question_id' => 64,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            255 => 
            array (
                'id' => 256,
                'question_id' => 64,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            256 => 
            array (
                'id' => 257,
                'question_id' => 65,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            257 => 
            array (
                'id' => 258,
                'question_id' => 65,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            258 => 
            array (
                'id' => 259,
                'question_id' => 65,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            259 => 
            array (
                'id' => 260,
                'question_id' => 65,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            260 => 
            array (
                'id' => 261,
                'question_id' => 66,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            261 => 
            array (
                'id' => 262,
                'question_id' => 66,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            262 => 
            array (
                'id' => 263,
                'question_id' => 66,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:27',
                'updated_at' => '2022-07-20 10:59:27',
            ),
            263 => 
            array (
                'id' => 264,
                'question_id' => 66,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            264 => 
            array (
                'id' => 265,
                'question_id' => 67,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            265 => 
            array (
                'id' => 266,
                'question_id' => 67,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            266 => 
            array (
                'id' => 267,
                'question_id' => 67,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            267 => 
            array (
                'id' => 268,
                'question_id' => 67,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            268 => 
            array (
                'id' => 269,
                'question_id' => 68,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            269 => 
            array (
                'id' => 270,
                'question_id' => 68,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            270 => 
            array (
                'id' => 271,
                'question_id' => 68,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            271 => 
            array (
                'id' => 272,
                'question_id' => 68,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            272 => 
            array (
                'id' => 273,
                'question_id' => 69,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            273 => 
            array (
                'id' => 274,
                'question_id' => 69,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            274 => 
            array (
                'id' => 275,
                'question_id' => 69,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            275 => 
            array (
                'id' => 276,
                'question_id' => 69,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            276 => 
            array (
                'id' => 277,
                'question_id' => 70,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            277 => 
            array (
                'id' => 278,
                'question_id' => 70,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            278 => 
            array (
                'id' => 279,
                'question_id' => 70,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            279 => 
            array (
                'id' => 280,
                'question_id' => 70,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            280 => 
            array (
                'id' => 281,
                'question_id' => 71,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            281 => 
            array (
                'id' => 282,
                'question_id' => 71,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            282 => 
            array (
                'id' => 283,
                'question_id' => 71,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            283 => 
            array (
                'id' => 284,
                'question_id' => 71,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            284 => 
            array (
                'id' => 285,
                'question_id' => 72,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            285 => 
            array (
                'id' => 286,
                'question_id' => 72,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:28',
                'updated_at' => '2022-07-20 10:59:28',
            ),
            286 => 
            array (
                'id' => 287,
                'question_id' => 72,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            287 => 
            array (
                'id' => 288,
                'question_id' => 72,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            288 => 
            array (
                'id' => 289,
                'question_id' => 73,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            289 => 
            array (
                'id' => 290,
                'question_id' => 73,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            290 => 
            array (
                'id' => 291,
                'question_id' => 73,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            291 => 
            array (
                'id' => 292,
                'question_id' => 73,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            292 => 
            array (
                'id' => 293,
                'question_id' => 74,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            293 => 
            array (
                'id' => 294,
                'question_id' => 74,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            294 => 
            array (
                'id' => 295,
                'question_id' => 74,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            295 => 
            array (
                'id' => 296,
                'question_id' => 74,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            296 => 
            array (
                'id' => 297,
                'question_id' => 75,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            297 => 
            array (
                'id' => 298,
                'question_id' => 75,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            298 => 
            array (
                'id' => 299,
                'question_id' => 75,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            299 => 
            array (
                'id' => 300,
                'question_id' => 75,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            300 => 
            array (
                'id' => 301,
                'question_id' => 76,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            301 => 
            array (
                'id' => 302,
                'question_id' => 76,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            302 => 
            array (
                'id' => 303,
                'question_id' => 76,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            303 => 
            array (
                'id' => 304,
                'question_id' => 76,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            304 => 
            array (
                'id' => 305,
                'question_id' => 77,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            305 => 
            array (
                'id' => 306,
                'question_id' => 77,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            306 => 
            array (
                'id' => 307,
                'question_id' => 77,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:29',
                'updated_at' => '2022-07-20 10:59:29',
            ),
            307 => 
            array (
                'id' => 308,
                'question_id' => 77,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            308 => 
            array (
                'id' => 309,
                'question_id' => 78,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            309 => 
            array (
                'id' => 310,
                'question_id' => 78,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            310 => 
            array (
                'id' => 311,
                'question_id' => 78,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            311 => 
            array (
                'id' => 312,
                'question_id' => 78,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            312 => 
            array (
                'id' => 313,
                'question_id' => 79,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            313 => 
            array (
                'id' => 314,
                'question_id' => 79,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            314 => 
            array (
                'id' => 315,
                'question_id' => 79,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            315 => 
            array (
                'id' => 316,
                'question_id' => 79,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            316 => 
            array (
                'id' => 317,
                'question_id' => 80,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            317 => 
            array (
                'id' => 318,
                'question_id' => 80,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            318 => 
            array (
                'id' => 319,
                'question_id' => 80,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            319 => 
            array (
                'id' => 320,
                'question_id' => 80,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            320 => 
            array (
                'id' => 321,
                'question_id' => 81,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            321 => 
            array (
                'id' => 322,
                'question_id' => 81,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            322 => 
            array (
                'id' => 323,
                'question_id' => 81,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            323 => 
            array (
                'id' => 324,
                'question_id' => 81,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            324 => 
            array (
                'id' => 325,
                'question_id' => 82,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            325 => 
            array (
                'id' => 326,
                'question_id' => 82,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            326 => 
            array (
                'id' => 327,
                'question_id' => 82,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            327 => 
            array (
                'id' => 328,
                'question_id' => 82,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            328 => 
            array (
                'id' => 329,
                'question_id' => 83,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:30',
                'updated_at' => '2022-07-20 10:59:30',
            ),
            329 => 
            array (
                'id' => 330,
                'question_id' => 83,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            330 => 
            array (
                'id' => 331,
                'question_id' => 83,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            331 => 
            array (
                'id' => 332,
                'question_id' => 83,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            332 => 
            array (
                'id' => 333,
                'question_id' => 84,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            333 => 
            array (
                'id' => 334,
                'question_id' => 84,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            334 => 
            array (
                'id' => 335,
                'question_id' => 84,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            335 => 
            array (
                'id' => 336,
                'question_id' => 84,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            336 => 
            array (
                'id' => 337,
                'question_id' => 85,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            337 => 
            array (
                'id' => 338,
                'question_id' => 85,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            338 => 
            array (
                'id' => 339,
                'question_id' => 85,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            339 => 
            array (
                'id' => 340,
                'question_id' => 85,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            340 => 
            array (
                'id' => 341,
                'question_id' => 86,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            341 => 
            array (
                'id' => 342,
                'question_id' => 86,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            342 => 
            array (
                'id' => 343,
                'question_id' => 86,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            343 => 
            array (
                'id' => 344,
                'question_id' => 86,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            344 => 
            array (
                'id' => 345,
                'question_id' => 87,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            345 => 
            array (
                'id' => 346,
                'question_id' => 87,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            346 => 
            array (
                'id' => 347,
                'question_id' => 87,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            347 => 
            array (
                'id' => 348,
                'question_id' => 87,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            348 => 
            array (
                'id' => 349,
                'question_id' => 88,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            349 => 
            array (
                'id' => 350,
                'question_id' => 88,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            350 => 
            array (
                'id' => 351,
                'question_id' => 88,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            351 => 
            array (
                'id' => 352,
                'question_id' => 88,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:31',
                'updated_at' => '2022-07-20 10:59:31',
            ),
            352 => 
            array (
                'id' => 353,
                'question_id' => 89,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            353 => 
            array (
                'id' => 354,
                'question_id' => 89,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            354 => 
            array (
                'id' => 355,
                'question_id' => 89,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            355 => 
            array (
                'id' => 356,
                'question_id' => 89,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            356 => 
            array (
                'id' => 357,
                'question_id' => 90,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            357 => 
            array (
                'id' => 358,
                'question_id' => 90,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            358 => 
            array (
                'id' => 359,
                'question_id' => 90,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            359 => 
            array (
                'id' => 360,
                'question_id' => 90,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            360 => 
            array (
                'id' => 361,
                'question_id' => 91,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            361 => 
            array (
                'id' => 362,
                'question_id' => 91,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            362 => 
            array (
                'id' => 363,
                'question_id' => 91,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            363 => 
            array (
                'id' => 364,
                'question_id' => 91,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            364 => 
            array (
                'id' => 365,
                'question_id' => 92,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            365 => 
            array (
                'id' => 366,
                'question_id' => 92,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            366 => 
            array (
                'id' => 367,
                'question_id' => 92,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            367 => 
            array (
                'id' => 368,
                'question_id' => 92,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            368 => 
            array (
                'id' => 369,
                'question_id' => 93,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            369 => 
            array (
                'id' => 370,
                'question_id' => 93,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            370 => 
            array (
                'id' => 371,
                'question_id' => 93,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            371 => 
            array (
                'id' => 372,
                'question_id' => 93,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            372 => 
            array (
                'id' => 373,
                'question_id' => 94,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            373 => 
            array (
                'id' => 374,
                'question_id' => 94,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            374 => 
            array (
                'id' => 375,
                'question_id' => 94,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:32',
                'updated_at' => '2022-07-20 10:59:32',
            ),
            375 => 
            array (
                'id' => 376,
                'question_id' => 94,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            376 => 
            array (
                'id' => 377,
                'question_id' => 95,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            377 => 
            array (
                'id' => 378,
                'question_id' => 95,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            378 => 
            array (
                'id' => 379,
                'question_id' => 95,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            379 => 
            array (
                'id' => 380,
                'question_id' => 95,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            380 => 
            array (
                'id' => 381,
                'question_id' => 96,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            381 => 
            array (
                'id' => 382,
                'question_id' => 96,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            382 => 
            array (
                'id' => 383,
                'question_id' => 96,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            383 => 
            array (
                'id' => 384,
                'question_id' => 96,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            384 => 
            array (
                'id' => 385,
                'question_id' => 97,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            385 => 
            array (
                'id' => 386,
                'question_id' => 97,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            386 => 
            array (
                'id' => 387,
                'question_id' => 97,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            387 => 
            array (
                'id' => 388,
                'question_id' => 97,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            388 => 
            array (
                'id' => 389,
                'question_id' => 98,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            389 => 
            array (
                'id' => 390,
                'question_id' => 98,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            390 => 
            array (
                'id' => 391,
                'question_id' => 98,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            391 => 
            array (
                'id' => 392,
                'question_id' => 98,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            392 => 
            array (
                'id' => 393,
                'question_id' => 99,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:33',
                'updated_at' => '2022-07-20 10:59:33',
            ),
            393 => 
            array (
                'id' => 394,
                'question_id' => 99,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            394 => 
            array (
                'id' => 395,
                'question_id' => 99,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            395 => 
            array (
                'id' => 396,
                'question_id' => 99,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            396 => 
            array (
                'id' => 397,
                'question_id' => 100,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            397 => 
            array (
                'id' => 398,
                'question_id' => 100,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            398 => 
            array (
                'id' => 399,
                'question_id' => 100,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            399 => 
            array (
                'id' => 400,
                'question_id' => 100,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            400 => 
            array (
                'id' => 401,
                'question_id' => 101,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            401 => 
            array (
                'id' => 402,
                'question_id' => 101,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            402 => 
            array (
                'id' => 403,
                'question_id' => 101,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            403 => 
            array (
                'id' => 404,
                'question_id' => 101,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            404 => 
            array (
                'id' => 405,
                'question_id' => 102,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            405 => 
            array (
                'id' => 406,
                'question_id' => 102,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            406 => 
            array (
                'id' => 407,
                'question_id' => 102,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            407 => 
            array (
                'id' => 408,
                'question_id' => 102,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            408 => 
            array (
                'id' => 409,
                'question_id' => 103,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            409 => 
            array (
                'id' => 410,
                'question_id' => 103,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            410 => 
            array (
                'id' => 411,
                'question_id' => 103,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            411 => 
            array (
                'id' => 412,
                'question_id' => 103,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:34',
                'updated_at' => '2022-07-20 10:59:34',
            ),
            412 => 
            array (
                'id' => 413,
                'question_id' => 104,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            413 => 
            array (
                'id' => 414,
                'question_id' => 104,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            414 => 
            array (
                'id' => 415,
                'question_id' => 104,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            415 => 
            array (
                'id' => 416,
                'question_id' => 104,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            416 => 
            array (
                'id' => 417,
                'question_id' => 105,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            417 => 
            array (
                'id' => 418,
                'question_id' => 105,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            418 => 
            array (
                'id' => 419,
                'question_id' => 105,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            419 => 
            array (
                'id' => 420,
                'question_id' => 105,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            420 => 
            array (
                'id' => 421,
                'question_id' => 106,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            421 => 
            array (
                'id' => 422,
                'question_id' => 106,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            422 => 
            array (
                'id' => 423,
                'question_id' => 106,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            423 => 
            array (
                'id' => 424,
                'question_id' => 106,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            424 => 
            array (
                'id' => 425,
                'question_id' => 107,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            425 => 
            array (
                'id' => 426,
                'question_id' => 107,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            426 => 
            array (
                'id' => 427,
                'question_id' => 107,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            427 => 
            array (
                'id' => 428,
                'question_id' => 107,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            428 => 
            array (
                'id' => 429,
                'question_id' => 108,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            429 => 
            array (
                'id' => 430,
                'question_id' => 108,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            430 => 
            array (
                'id' => 431,
                'question_id' => 108,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            431 => 
            array (
                'id' => 432,
                'question_id' => 108,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:35',
                'updated_at' => '2022-07-20 10:59:35',
            ),
            432 => 
            array (
                'id' => 433,
                'question_id' => 109,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            433 => 
            array (
                'id' => 434,
                'question_id' => 109,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            434 => 
            array (
                'id' => 435,
                'question_id' => 109,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            435 => 
            array (
                'id' => 436,
                'question_id' => 109,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            436 => 
            array (
                'id' => 437,
                'question_id' => 110,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            437 => 
            array (
                'id' => 438,
                'question_id' => 110,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            438 => 
            array (
                'id' => 439,
                'question_id' => 110,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            439 => 
            array (
                'id' => 440,
                'question_id' => 110,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            440 => 
            array (
                'id' => 441,
                'question_id' => 111,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            441 => 
            array (
                'id' => 442,
                'question_id' => 111,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            442 => 
            array (
                'id' => 443,
                'question_id' => 111,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            443 => 
            array (
                'id' => 444,
                'question_id' => 111,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            444 => 
            array (
                'id' => 445,
                'question_id' => 112,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            445 => 
            array (
                'id' => 446,
                'question_id' => 112,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            446 => 
            array (
                'id' => 447,
                'question_id' => 112,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            447 => 
            array (
                'id' => 448,
                'question_id' => 112,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            448 => 
            array (
                'id' => 449,
                'question_id' => 113,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            449 => 
            array (
                'id' => 450,
                'question_id' => 113,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            450 => 
            array (
                'id' => 451,
                'question_id' => 113,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            451 => 
            array (
                'id' => 452,
                'question_id' => 113,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            452 => 
            array (
                'id' => 453,
                'question_id' => 114,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            453 => 
            array (
                'id' => 454,
                'question_id' => 114,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            454 => 
            array (
                'id' => 455,
                'question_id' => 114,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            455 => 
            array (
                'id' => 456,
                'question_id' => 114,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:36',
                'updated_at' => '2022-07-20 10:59:36',
            ),
            456 => 
            array (
                'id' => 457,
                'question_id' => 115,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            457 => 
            array (
                'id' => 458,
                'question_id' => 115,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            458 => 
            array (
                'id' => 459,
                'question_id' => 115,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            459 => 
            array (
                'id' => 460,
                'question_id' => 115,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            460 => 
            array (
                'id' => 461,
                'question_id' => 116,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            461 => 
            array (
                'id' => 462,
                'question_id' => 116,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            462 => 
            array (
                'id' => 463,
                'question_id' => 116,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            463 => 
            array (
                'id' => 464,
                'question_id' => 116,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            464 => 
            array (
                'id' => 465,
                'question_id' => 117,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            465 => 
            array (
                'id' => 466,
                'question_id' => 117,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            466 => 
            array (
                'id' => 467,
                'question_id' => 117,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            467 => 
            array (
                'id' => 468,
                'question_id' => 117,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            468 => 
            array (
                'id' => 469,
                'question_id' => 118,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            469 => 
            array (
                'id' => 470,
                'question_id' => 118,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            470 => 
            array (
                'id' => 471,
                'question_id' => 118,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            471 => 
            array (
                'id' => 472,
                'question_id' => 118,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            472 => 
            array (
                'id' => 473,
                'question_id' => 119,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            473 => 
            array (
                'id' => 474,
                'question_id' => 119,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            474 => 
            array (
                'id' => 475,
                'question_id' => 119,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            475 => 
            array (
                'id' => 476,
                'question_id' => 119,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            476 => 
            array (
                'id' => 477,
                'question_id' => 120,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:37',
                'updated_at' => '2022-07-20 10:59:37',
            ),
            477 => 
            array (
                'id' => 478,
                'question_id' => 120,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            478 => 
            array (
                'id' => 479,
                'question_id' => 120,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            479 => 
            array (
                'id' => 480,
                'question_id' => 120,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            480 => 
            array (
                'id' => 481,
                'question_id' => 121,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            481 => 
            array (
                'id' => 482,
                'question_id' => 121,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            482 => 
            array (
                'id' => 483,
                'question_id' => 121,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            483 => 
            array (
                'id' => 484,
                'question_id' => 121,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            484 => 
            array (
                'id' => 485,
                'question_id' => 122,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            485 => 
            array (
                'id' => 486,
                'question_id' => 122,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            486 => 
            array (
                'id' => 487,
                'question_id' => 122,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            487 => 
            array (
                'id' => 488,
                'question_id' => 122,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            488 => 
            array (
                'id' => 489,
                'question_id' => 123,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            489 => 
            array (
                'id' => 490,
                'question_id' => 123,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            490 => 
            array (
                'id' => 491,
                'question_id' => 123,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            491 => 
            array (
                'id' => 492,
                'question_id' => 123,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            492 => 
            array (
                'id' => 493,
                'question_id' => 124,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            493 => 
            array (
                'id' => 494,
                'question_id' => 124,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            494 => 
            array (
                'id' => 495,
                'question_id' => 124,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            495 => 
            array (
                'id' => 496,
                'question_id' => 124,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            496 => 
            array (
                'id' => 497,
                'question_id' => 125,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            497 => 
            array (
                'id' => 498,
                'question_id' => 125,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            498 => 
            array (
                'id' => 499,
                'question_id' => 125,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            499 => 
            array (
                'id' => 500,
                'question_id' => 125,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
        ));
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 501,
                'question_id' => 126,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            1 => 
            array (
                'id' => 502,
                'question_id' => 126,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            2 => 
            array (
                'id' => 503,
                'question_id' => 126,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            3 => 
            array (
                'id' => 504,
                'question_id' => 126,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:38',
                'updated_at' => '2022-07-20 10:59:38',
            ),
            4 => 
            array (
                'id' => 505,
                'question_id' => 127,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            5 => 
            array (
                'id' => 506,
                'question_id' => 127,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            6 => 
            array (
                'id' => 507,
                'question_id' => 127,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            7 => 
            array (
                'id' => 508,
                'question_id' => 127,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            8 => 
            array (
                'id' => 509,
                'question_id' => 128,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            9 => 
            array (
                'id' => 510,
                'question_id' => 128,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            10 => 
            array (
                'id' => 511,
                'question_id' => 128,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            11 => 
            array (
                'id' => 512,
                'question_id' => 128,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            12 => 
            array (
                'id' => 513,
                'question_id' => 129,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            13 => 
            array (
                'id' => 514,
                'question_id' => 129,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            14 => 
            array (
                'id' => 515,
                'question_id' => 129,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            15 => 
            array (
                'id' => 516,
                'question_id' => 129,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            16 => 
            array (
                'id' => 517,
                'question_id' => 130,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            17 => 
            array (
                'id' => 518,
                'question_id' => 130,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            18 => 
            array (
                'id' => 519,
                'question_id' => 130,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            19 => 
            array (
                'id' => 520,
                'question_id' => 130,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            20 => 
            array (
                'id' => 521,
                'question_id' => 131,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            21 => 
            array (
                'id' => 522,
                'question_id' => 131,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            22 => 
            array (
                'id' => 523,
                'question_id' => 131,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:39',
                'updated_at' => '2022-07-20 10:59:39',
            ),
            23 => 
            array (
                'id' => 524,
                'question_id' => 131,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            24 => 
            array (
                'id' => 525,
                'question_id' => 132,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            25 => 
            array (
                'id' => 526,
                'question_id' => 132,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            26 => 
            array (
                'id' => 527,
                'question_id' => 132,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            27 => 
            array (
                'id' => 528,
                'question_id' => 132,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            28 => 
            array (
                'id' => 529,
                'question_id' => 133,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            29 => 
            array (
                'id' => 530,
                'question_id' => 133,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            30 => 
            array (
                'id' => 531,
                'question_id' => 133,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            31 => 
            array (
                'id' => 532,
                'question_id' => 133,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            32 => 
            array (
                'id' => 533,
                'question_id' => 134,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            33 => 
            array (
                'id' => 534,
                'question_id' => 134,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            34 => 
            array (
                'id' => 535,
                'question_id' => 134,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            35 => 
            array (
                'id' => 536,
                'question_id' => 134,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            36 => 
            array (
                'id' => 537,
                'question_id' => 135,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            37 => 
            array (
                'id' => 538,
                'question_id' => 135,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            38 => 
            array (
                'id' => 539,
                'question_id' => 135,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            39 => 
            array (
                'id' => 540,
                'question_id' => 135,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            40 => 
            array (
                'id' => 541,
                'question_id' => 136,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            41 => 
            array (
                'id' => 542,
                'question_id' => 136,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            42 => 
            array (
                'id' => 543,
                'question_id' => 136,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:40',
                'updated_at' => '2022-07-20 10:59:40',
            ),
            43 => 
            array (
                'id' => 544,
                'question_id' => 136,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            44 => 
            array (
                'id' => 545,
                'question_id' => 137,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            45 => 
            array (
                'id' => 546,
                'question_id' => 137,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            46 => 
            array (
                'id' => 547,
                'question_id' => 137,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            47 => 
            array (
                'id' => 548,
                'question_id' => 137,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            48 => 
            array (
                'id' => 549,
                'question_id' => 138,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            49 => 
            array (
                'id' => 550,
                'question_id' => 138,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            50 => 
            array (
                'id' => 551,
                'question_id' => 138,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            51 => 
            array (
                'id' => 552,
                'question_id' => 138,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            52 => 
            array (
                'id' => 553,
                'question_id' => 139,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            53 => 
            array (
                'id' => 554,
                'question_id' => 139,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            54 => 
            array (
                'id' => 555,
                'question_id' => 139,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            55 => 
            array (
                'id' => 556,
                'question_id' => 139,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            56 => 
            array (
                'id' => 557,
                'question_id' => 140,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            57 => 
            array (
                'id' => 558,
                'question_id' => 140,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            58 => 
            array (
                'id' => 559,
                'question_id' => 140,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            59 => 
            array (
                'id' => 560,
                'question_id' => 140,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            60 => 
            array (
                'id' => 561,
                'question_id' => 141,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            61 => 
            array (
                'id' => 562,
                'question_id' => 141,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            62 => 
            array (
                'id' => 563,
                'question_id' => 141,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:41',
                'updated_at' => '2022-07-20 10:59:41',
            ),
            63 => 
            array (
                'id' => 564,
                'question_id' => 141,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            64 => 
            array (
                'id' => 565,
                'question_id' => 142,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            65 => 
            array (
                'id' => 566,
                'question_id' => 142,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            66 => 
            array (
                'id' => 567,
                'question_id' => 142,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            67 => 
            array (
                'id' => 568,
                'question_id' => 142,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            68 => 
            array (
                'id' => 569,
                'question_id' => 143,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            69 => 
            array (
                'id' => 570,
                'question_id' => 143,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            70 => 
            array (
                'id' => 571,
                'question_id' => 143,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            71 => 
            array (
                'id' => 572,
                'question_id' => 143,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            72 => 
            array (
                'id' => 573,
                'question_id' => 144,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            73 => 
            array (
                'id' => 574,
                'question_id' => 144,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            74 => 
            array (
                'id' => 575,
                'question_id' => 144,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            75 => 
            array (
                'id' => 576,
                'question_id' => 144,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            76 => 
            array (
                'id' => 577,
                'question_id' => 145,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            77 => 
            array (
                'id' => 578,
                'question_id' => 145,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            78 => 
            array (
                'id' => 579,
                'question_id' => 145,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            79 => 
            array (
                'id' => 580,
                'question_id' => 145,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            80 => 
            array (
                'id' => 581,
                'question_id' => 146,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:42',
                'updated_at' => '2022-07-20 10:59:42',
            ),
            81 => 
            array (
                'id' => 582,
                'question_id' => 146,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            82 => 
            array (
                'id' => 583,
                'question_id' => 146,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            83 => 
            array (
                'id' => 584,
                'question_id' => 146,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            84 => 
            array (
                'id' => 585,
                'question_id' => 147,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            85 => 
            array (
                'id' => 586,
                'question_id' => 147,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            86 => 
            array (
                'id' => 587,
                'question_id' => 147,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            87 => 
            array (
                'id' => 588,
                'question_id' => 147,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            88 => 
            array (
                'id' => 589,
                'question_id' => 148,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            89 => 
            array (
                'id' => 590,
                'question_id' => 148,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            90 => 
            array (
                'id' => 591,
                'question_id' => 148,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            91 => 
            array (
                'id' => 592,
                'question_id' => 148,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            92 => 
            array (
                'id' => 593,
                'question_id' => 149,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            93 => 
            array (
                'id' => 594,
                'question_id' => 149,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            94 => 
            array (
                'id' => 595,
                'question_id' => 149,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            95 => 
            array (
                'id' => 596,
                'question_id' => 149,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            96 => 
            array (
                'id' => 597,
                'question_id' => 150,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            97 => 
            array (
                'id' => 598,
                'question_id' => 150,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            98 => 
            array (
                'id' => 599,
                'question_id' => 150,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            99 => 
            array (
                'id' => 600,
                'question_id' => 150,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            100 => 
            array (
                'id' => 601,
                'question_id' => 151,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            101 => 
            array (
                'id' => 602,
                'question_id' => 151,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:43',
                'updated_at' => '2022-07-20 10:59:43',
            ),
            102 => 
            array (
                'id' => 603,
                'question_id' => 151,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            103 => 
            array (
                'id' => 604,
                'question_id' => 151,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            104 => 
            array (
                'id' => 605,
                'question_id' => 152,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            105 => 
            array (
                'id' => 606,
                'question_id' => 152,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            106 => 
            array (
                'id' => 607,
                'question_id' => 152,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            107 => 
            array (
                'id' => 608,
                'question_id' => 152,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            108 => 
            array (
                'id' => 609,
                'question_id' => 153,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            109 => 
            array (
                'id' => 610,
                'question_id' => 153,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            110 => 
            array (
                'id' => 611,
                'question_id' => 153,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            111 => 
            array (
                'id' => 612,
                'question_id' => 153,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            112 => 
            array (
                'id' => 613,
                'question_id' => 154,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            113 => 
            array (
                'id' => 614,
                'question_id' => 154,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            114 => 
            array (
                'id' => 615,
                'question_id' => 154,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            115 => 
            array (
                'id' => 616,
                'question_id' => 154,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            116 => 
            array (
                'id' => 617,
                'question_id' => 155,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            117 => 
            array (
                'id' => 618,
                'question_id' => 155,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            118 => 
            array (
                'id' => 619,
                'question_id' => 155,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            119 => 
            array (
                'id' => 620,
                'question_id' => 155,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            120 => 
            array (
                'id' => 621,
                'question_id' => 156,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            121 => 
            array (
                'id' => 622,
                'question_id' => 156,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            122 => 
            array (
                'id' => 623,
                'question_id' => 156,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            123 => 
            array (
                'id' => 624,
                'question_id' => 156,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            124 => 
            array (
                'id' => 625,
                'question_id' => 157,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:44',
                'updated_at' => '2022-07-20 10:59:44',
            ),
            125 => 
            array (
                'id' => 626,
                'question_id' => 157,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            126 => 
            array (
                'id' => 627,
                'question_id' => 157,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            127 => 
            array (
                'id' => 628,
                'question_id' => 157,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            128 => 
            array (
                'id' => 629,
                'question_id' => 158,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            129 => 
            array (
                'id' => 630,
                'question_id' => 158,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            130 => 
            array (
                'id' => 631,
                'question_id' => 158,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            131 => 
            array (
                'id' => 632,
                'question_id' => 158,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            132 => 
            array (
                'id' => 633,
                'question_id' => 159,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            133 => 
            array (
                'id' => 634,
                'question_id' => 159,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            134 => 
            array (
                'id' => 635,
                'question_id' => 159,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            135 => 
            array (
                'id' => 636,
                'question_id' => 159,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            136 => 
            array (
                'id' => 637,
                'question_id' => 160,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            137 => 
            array (
                'id' => 638,
                'question_id' => 160,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            138 => 
            array (
                'id' => 639,
                'question_id' => 160,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            139 => 
            array (
                'id' => 640,
                'question_id' => 160,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            140 => 
            array (
                'id' => 641,
                'question_id' => 161,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            141 => 
            array (
                'id' => 642,
                'question_id' => 161,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            142 => 
            array (
                'id' => 643,
                'question_id' => 161,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            143 => 
            array (
                'id' => 644,
                'question_id' => 161,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            144 => 
            array (
                'id' => 645,
                'question_id' => 162,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            145 => 
            array (
                'id' => 646,
                'question_id' => 162,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            146 => 
            array (
                'id' => 647,
                'question_id' => 162,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            147 => 
            array (
                'id' => 648,
                'question_id' => 162,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:45',
                'updated_at' => '2022-07-20 10:59:45',
            ),
            148 => 
            array (
                'id' => 649,
                'question_id' => 163,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            149 => 
            array (
                'id' => 650,
                'question_id' => 163,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            150 => 
            array (
                'id' => 651,
                'question_id' => 163,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            151 => 
            array (
                'id' => 652,
                'question_id' => 163,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            152 => 
            array (
                'id' => 653,
                'question_id' => 164,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            153 => 
            array (
                'id' => 654,
                'question_id' => 164,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            154 => 
            array (
                'id' => 655,
                'question_id' => 164,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            155 => 
            array (
                'id' => 656,
                'question_id' => 164,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            156 => 
            array (
                'id' => 657,
                'question_id' => 165,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            157 => 
            array (
                'id' => 658,
                'question_id' => 165,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            158 => 
            array (
                'id' => 659,
                'question_id' => 165,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            159 => 
            array (
                'id' => 660,
                'question_id' => 165,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            160 => 
            array (
                'id' => 661,
                'question_id' => 166,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            161 => 
            array (
                'id' => 662,
                'question_id' => 166,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            162 => 
            array (
                'id' => 663,
                'question_id' => 166,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            163 => 
            array (
                'id' => 664,
                'question_id' => 166,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            164 => 
            array (
                'id' => 665,
                'question_id' => 167,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:46',
                'updated_at' => '2022-07-20 10:59:46',
            ),
            165 => 
            array (
                'id' => 666,
                'question_id' => 167,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            166 => 
            array (
                'id' => 667,
                'question_id' => 167,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            167 => 
            array (
                'id' => 668,
                'question_id' => 167,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            168 => 
            array (
                'id' => 669,
                'question_id' => 168,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            169 => 
            array (
                'id' => 670,
                'question_id' => 168,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            170 => 
            array (
                'id' => 671,
                'question_id' => 168,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            171 => 
            array (
                'id' => 672,
                'question_id' => 168,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            172 => 
            array (
                'id' => 673,
                'question_id' => 169,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            173 => 
            array (
                'id' => 674,
                'question_id' => 169,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            174 => 
            array (
                'id' => 675,
                'question_id' => 169,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            175 => 
            array (
                'id' => 676,
                'question_id' => 169,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            176 => 
            array (
                'id' => 677,
                'question_id' => 170,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            177 => 
            array (
                'id' => 678,
                'question_id' => 170,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            178 => 
            array (
                'id' => 679,
                'question_id' => 170,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            179 => 
            array (
                'id' => 680,
                'question_id' => 170,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            180 => 
            array (
                'id' => 681,
                'question_id' => 171,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            181 => 
            array (
                'id' => 682,
                'question_id' => 171,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            182 => 
            array (
                'id' => 683,
                'question_id' => 171,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            183 => 
            array (
                'id' => 684,
                'question_id' => 171,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            184 => 
            array (
                'id' => 685,
                'question_id' => 172,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            185 => 
            array (
                'id' => 686,
                'question_id' => 172,
                'answer' => 'Answer 2',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            186 => 
            array (
                'id' => 687,
                'question_id' => 172,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            187 => 
            array (
                'id' => 688,
                'question_id' => 172,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            188 => 
            array (
                'id' => 689,
                'question_id' => 173,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:47',
                'updated_at' => '2022-07-20 10:59:47',
            ),
            189 => 
            array (
                'id' => 690,
                'question_id' => 173,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            190 => 
            array (
                'id' => 691,
                'question_id' => 173,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            191 => 
            array (
                'id' => 692,
                'question_id' => 173,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            192 => 
            array (
                'id' => 693,
                'question_id' => 174,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            193 => 
            array (
                'id' => 694,
                'question_id' => 174,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            194 => 
            array (
                'id' => 695,
                'question_id' => 174,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            195 => 
            array (
                'id' => 696,
                'question_id' => 174,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            196 => 
            array (
                'id' => 697,
                'question_id' => 175,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            197 => 
            array (
                'id' => 698,
                'question_id' => 175,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            198 => 
            array (
                'id' => 699,
                'question_id' => 175,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            199 => 
            array (
                'id' => 700,
                'question_id' => 175,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            200 => 
            array (
                'id' => 701,
                'question_id' => 176,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            201 => 
            array (
                'id' => 702,
                'question_id' => 176,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            202 => 
            array (
                'id' => 703,
                'question_id' => 176,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            203 => 
            array (
                'id' => 704,
                'question_id' => 176,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            204 => 
            array (
                'id' => 705,
                'question_id' => 177,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            205 => 
            array (
                'id' => 706,
                'question_id' => 177,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            206 => 
            array (
                'id' => 707,
                'question_id' => 177,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            207 => 
            array (
                'id' => 708,
                'question_id' => 177,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:48',
                'updated_at' => '2022-07-20 10:59:48',
            ),
            208 => 
            array (
                'id' => 709,
                'question_id' => 178,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            209 => 
            array (
                'id' => 710,
                'question_id' => 178,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            210 => 
            array (
                'id' => 711,
                'question_id' => 178,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            211 => 
            array (
                'id' => 712,
                'question_id' => 178,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            212 => 
            array (
                'id' => 713,
                'question_id' => 179,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            213 => 
            array (
                'id' => 714,
                'question_id' => 179,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            214 => 
            array (
                'id' => 715,
                'question_id' => 179,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            215 => 
            array (
                'id' => 716,
                'question_id' => 179,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            216 => 
            array (
                'id' => 717,
                'question_id' => 180,
                'answer' => 'Answer 1',
                'is_true' => 1,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            217 => 
            array (
                'id' => 718,
                'question_id' => 180,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            218 => 
            array (
                'id' => 719,
                'question_id' => 180,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            219 => 
            array (
                'id' => 720,
                'question_id' => 180,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            220 => 
            array (
                'id' => 721,
                'question_id' => 181,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            221 => 
            array (
                'id' => 722,
                'question_id' => 181,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            222 => 
            array (
                'id' => 723,
                'question_id' => 181,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            223 => 
            array (
                'id' => 724,
                'question_id' => 181,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            224 => 
            array (
                'id' => 725,
                'question_id' => 182,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            225 => 
            array (
                'id' => 726,
                'question_id' => 182,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            226 => 
            array (
                'id' => 727,
                'question_id' => 182,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:49',
                'updated_at' => '2022-07-20 10:59:49',
            ),
            227 => 
            array (
                'id' => 728,
                'question_id' => 182,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            228 => 
            array (
                'id' => 729,
                'question_id' => 183,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            229 => 
            array (
                'id' => 730,
                'question_id' => 183,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            230 => 
            array (
                'id' => 731,
                'question_id' => 183,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            231 => 
            array (
                'id' => 732,
                'question_id' => 183,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            232 => 
            array (
                'id' => 733,
                'question_id' => 184,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            233 => 
            array (
                'id' => 734,
                'question_id' => 184,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            234 => 
            array (
                'id' => 735,
                'question_id' => 184,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            235 => 
            array (
                'id' => 736,
                'question_id' => 184,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            236 => 
            array (
                'id' => 737,
                'question_id' => 185,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            237 => 
            array (
                'id' => 738,
                'question_id' => 185,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            238 => 
            array (
                'id' => 739,
                'question_id' => 185,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            239 => 
            array (
                'id' => 740,
                'question_id' => 185,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            240 => 
            array (
                'id' => 741,
                'question_id' => 186,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            241 => 
            array (
                'id' => 742,
                'question_id' => 186,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            242 => 
            array (
                'id' => 743,
                'question_id' => 186,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            243 => 
            array (
                'id' => 744,
                'question_id' => 186,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            244 => 
            array (
                'id' => 745,
                'question_id' => 187,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            245 => 
            array (
                'id' => 746,
                'question_id' => 187,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            246 => 
            array (
                'id' => 747,
                'question_id' => 187,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            247 => 
            array (
                'id' => 748,
                'question_id' => 187,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:50',
                'updated_at' => '2022-07-20 10:59:50',
            ),
            248 => 
            array (
                'id' => 749,
                'question_id' => 188,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            249 => 
            array (
                'id' => 750,
                'question_id' => 188,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            250 => 
            array (
                'id' => 751,
                'question_id' => 188,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            251 => 
            array (
                'id' => 752,
                'question_id' => 188,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            252 => 
            array (
                'id' => 753,
                'question_id' => 189,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            253 => 
            array (
                'id' => 754,
                'question_id' => 189,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            254 => 
            array (
                'id' => 755,
                'question_id' => 189,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            255 => 
            array (
                'id' => 756,
                'question_id' => 189,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            256 => 
            array (
                'id' => 757,
                'question_id' => 190,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            257 => 
            array (
                'id' => 758,
                'question_id' => 190,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            258 => 
            array (
                'id' => 759,
                'question_id' => 190,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            259 => 
            array (
                'id' => 760,
                'question_id' => 190,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            260 => 
            array (
                'id' => 761,
                'question_id' => 191,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            261 => 
            array (
                'id' => 762,
                'question_id' => 191,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            262 => 
            array (
                'id' => 763,
                'question_id' => 191,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            263 => 
            array (
                'id' => 764,
                'question_id' => 191,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            264 => 
            array (
                'id' => 765,
                'question_id' => 192,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            265 => 
            array (
                'id' => 766,
                'question_id' => 192,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            266 => 
            array (
                'id' => 767,
                'question_id' => 192,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            267 => 
            array (
                'id' => 768,
                'question_id' => 192,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            268 => 
            array (
                'id' => 769,
                'question_id' => 193,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            269 => 
            array (
                'id' => 770,
                'question_id' => 193,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            270 => 
            array (
                'id' => 771,
                'question_id' => 193,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            271 => 
            array (
                'id' => 772,
                'question_id' => 193,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:51',
                'updated_at' => '2022-07-20 10:59:51',
            ),
            272 => 
            array (
                'id' => 773,
                'question_id' => 194,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            273 => 
            array (
                'id' => 774,
                'question_id' => 194,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            274 => 
            array (
                'id' => 775,
                'question_id' => 194,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            275 => 
            array (
                'id' => 776,
                'question_id' => 194,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            276 => 
            array (
                'id' => 777,
                'question_id' => 195,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            277 => 
            array (
                'id' => 778,
                'question_id' => 195,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            278 => 
            array (
                'id' => 779,
                'question_id' => 195,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            279 => 
            array (
                'id' => 780,
                'question_id' => 195,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            280 => 
            array (
                'id' => 781,
                'question_id' => 196,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            281 => 
            array (
                'id' => 782,
                'question_id' => 196,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            282 => 
            array (
                'id' => 783,
                'question_id' => 196,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            283 => 
            array (
                'id' => 784,
                'question_id' => 196,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            284 => 
            array (
                'id' => 785,
                'question_id' => 197,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            285 => 
            array (
                'id' => 786,
                'question_id' => 197,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            286 => 
            array (
                'id' => 787,
                'question_id' => 197,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            287 => 
            array (
                'id' => 788,
                'question_id' => 197,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            288 => 
            array (
                'id' => 789,
                'question_id' => 198,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            289 => 
            array (
                'id' => 790,
                'question_id' => 198,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            290 => 
            array (
                'id' => 791,
                'question_id' => 198,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            291 => 
            array (
                'id' => 792,
                'question_id' => 198,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            292 => 
            array (
                'id' => 793,
                'question_id' => 199,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            293 => 
            array (
                'id' => 794,
                'question_id' => 199,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:52',
                'updated_at' => '2022-07-20 10:59:52',
            ),
            294 => 
            array (
                'id' => 795,
                'question_id' => 199,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            295 => 
            array (
                'id' => 796,
                'question_id' => 199,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            296 => 
            array (
                'id' => 797,
                'question_id' => 200,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            297 => 
            array (
                'id' => 798,
                'question_id' => 200,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            298 => 
            array (
                'id' => 799,
                'question_id' => 200,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            299 => 
            array (
                'id' => 800,
                'question_id' => 200,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            300 => 
            array (
                'id' => 801,
                'question_id' => 201,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            301 => 
            array (
                'id' => 802,
                'question_id' => 201,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            302 => 
            array (
                'id' => 803,
                'question_id' => 201,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            303 => 
            array (
                'id' => 804,
                'question_id' => 201,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            304 => 
            array (
                'id' => 805,
                'question_id' => 202,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            305 => 
            array (
                'id' => 806,
                'question_id' => 202,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            306 => 
            array (
                'id' => 807,
                'question_id' => 202,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            307 => 
            array (
                'id' => 808,
                'question_id' => 202,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            308 => 
            array (
                'id' => 809,
                'question_id' => 203,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            309 => 
            array (
                'id' => 810,
                'question_id' => 203,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            310 => 
            array (
                'id' => 811,
                'question_id' => 203,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            311 => 
            array (
                'id' => 812,
                'question_id' => 203,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            312 => 
            array (
                'id' => 813,
                'question_id' => 204,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            313 => 
            array (
                'id' => 814,
                'question_id' => 204,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:53',
                'updated_at' => '2022-07-20 10:59:53',
            ),
            314 => 
            array (
                'id' => 815,
                'question_id' => 204,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            315 => 
            array (
                'id' => 816,
                'question_id' => 204,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            316 => 
            array (
                'id' => 817,
                'question_id' => 205,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            317 => 
            array (
                'id' => 818,
                'question_id' => 205,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            318 => 
            array (
                'id' => 819,
                'question_id' => 205,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            319 => 
            array (
                'id' => 820,
                'question_id' => 205,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            320 => 
            array (
                'id' => 821,
                'question_id' => 206,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            321 => 
            array (
                'id' => 822,
                'question_id' => 206,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            322 => 
            array (
                'id' => 823,
                'question_id' => 206,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            323 => 
            array (
                'id' => 824,
                'question_id' => 206,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            324 => 
            array (
                'id' => 825,
                'question_id' => 207,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            325 => 
            array (
                'id' => 826,
                'question_id' => 207,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            326 => 
            array (
                'id' => 827,
                'question_id' => 207,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            327 => 
            array (
                'id' => 828,
                'question_id' => 207,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            328 => 
            array (
                'id' => 829,
                'question_id' => 208,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            329 => 
            array (
                'id' => 830,
                'question_id' => 208,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            330 => 
            array (
                'id' => 831,
                'question_id' => 208,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            331 => 
            array (
                'id' => 832,
                'question_id' => 208,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:54',
                'updated_at' => '2022-07-20 10:59:54',
            ),
            332 => 
            array (
                'id' => 833,
                'question_id' => 209,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            333 => 
            array (
                'id' => 834,
                'question_id' => 209,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            334 => 
            array (
                'id' => 835,
                'question_id' => 209,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            335 => 
            array (
                'id' => 836,
                'question_id' => 209,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            336 => 
            array (
                'id' => 837,
                'question_id' => 210,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            337 => 
            array (
                'id' => 838,
                'question_id' => 210,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            338 => 
            array (
                'id' => 839,
                'question_id' => 210,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            339 => 
            array (
                'id' => 840,
                'question_id' => 210,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            340 => 
            array (
                'id' => 841,
                'question_id' => 211,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            341 => 
            array (
                'id' => 842,
                'question_id' => 211,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            342 => 
            array (
                'id' => 843,
                'question_id' => 211,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            343 => 
            array (
                'id' => 844,
                'question_id' => 211,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            344 => 
            array (
                'id' => 845,
                'question_id' => 212,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            345 => 
            array (
                'id' => 846,
                'question_id' => 212,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            346 => 
            array (
                'id' => 847,
                'question_id' => 212,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            347 => 
            array (
                'id' => 848,
                'question_id' => 212,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            348 => 
            array (
                'id' => 849,
                'question_id' => 213,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            349 => 
            array (
                'id' => 850,
                'question_id' => 213,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            350 => 
            array (
                'id' => 851,
                'question_id' => 213,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            351 => 
            array (
                'id' => 852,
                'question_id' => 213,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            352 => 
            array (
                'id' => 853,
                'question_id' => 214,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            353 => 
            array (
                'id' => 854,
                'question_id' => 214,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:55',
                'updated_at' => '2022-07-20 10:59:55',
            ),
            354 => 
            array (
                'id' => 855,
                'question_id' => 214,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            355 => 
            array (
                'id' => 856,
                'question_id' => 214,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            356 => 
            array (
                'id' => 857,
                'question_id' => 215,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            357 => 
            array (
                'id' => 858,
                'question_id' => 215,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            358 => 
            array (
                'id' => 859,
                'question_id' => 215,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            359 => 
            array (
                'id' => 860,
                'question_id' => 215,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            360 => 
            array (
                'id' => 861,
                'question_id' => 216,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            361 => 
            array (
                'id' => 862,
                'question_id' => 216,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            362 => 
            array (
                'id' => 863,
                'question_id' => 216,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            363 => 
            array (
                'id' => 864,
                'question_id' => 216,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            364 => 
            array (
                'id' => 865,
                'question_id' => 217,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            365 => 
            array (
                'id' => 866,
                'question_id' => 217,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            366 => 
            array (
                'id' => 867,
                'question_id' => 217,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            367 => 
            array (
                'id' => 868,
                'question_id' => 217,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            368 => 
            array (
                'id' => 869,
                'question_id' => 218,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            369 => 
            array (
                'id' => 870,
                'question_id' => 218,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            370 => 
            array (
                'id' => 871,
                'question_id' => 218,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            371 => 
            array (
                'id' => 872,
                'question_id' => 218,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            372 => 
            array (
                'id' => 873,
                'question_id' => 219,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            373 => 
            array (
                'id' => 874,
                'question_id' => 219,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:56',
                'updated_at' => '2022-07-20 10:59:56',
            ),
            374 => 
            array (
                'id' => 875,
                'question_id' => 219,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            375 => 
            array (
                'id' => 876,
                'question_id' => 219,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            376 => 
            array (
                'id' => 877,
                'question_id' => 220,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            377 => 
            array (
                'id' => 878,
                'question_id' => 220,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            378 => 
            array (
                'id' => 879,
                'question_id' => 220,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            379 => 
            array (
                'id' => 880,
                'question_id' => 220,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            380 => 
            array (
                'id' => 881,
                'question_id' => 221,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            381 => 
            array (
                'id' => 882,
                'question_id' => 221,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            382 => 
            array (
                'id' => 883,
                'question_id' => 221,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            383 => 
            array (
                'id' => 884,
                'question_id' => 221,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            384 => 
            array (
                'id' => 885,
                'question_id' => 222,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            385 => 
            array (
                'id' => 886,
                'question_id' => 222,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            386 => 
            array (
                'id' => 887,
                'question_id' => 222,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            387 => 
            array (
                'id' => 888,
                'question_id' => 222,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            388 => 
            array (
                'id' => 889,
                'question_id' => 223,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            389 => 
            array (
                'id' => 890,
                'question_id' => 223,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            390 => 
            array (
                'id' => 891,
                'question_id' => 223,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:57',
                'updated_at' => '2022-07-20 10:59:57',
            ),
            391 => 
            array (
                'id' => 892,
                'question_id' => 223,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            392 => 
            array (
                'id' => 893,
                'question_id' => 224,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            393 => 
            array (
                'id' => 894,
                'question_id' => 224,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            394 => 
            array (
                'id' => 895,
                'question_id' => 224,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            395 => 
            array (
                'id' => 896,
                'question_id' => 224,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            396 => 
            array (
                'id' => 897,
                'question_id' => 225,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            397 => 
            array (
                'id' => 898,
                'question_id' => 225,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            398 => 
            array (
                'id' => 899,
                'question_id' => 225,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            399 => 
            array (
                'id' => 900,
                'question_id' => 225,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            400 => 
            array (
                'id' => 901,
                'question_id' => 226,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            401 => 
            array (
                'id' => 902,
                'question_id' => 226,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            402 => 
            array (
                'id' => 903,
                'question_id' => 226,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            403 => 
            array (
                'id' => 904,
                'question_id' => 226,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            404 => 
            array (
                'id' => 905,
                'question_id' => 227,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            405 => 
            array (
                'id' => 906,
                'question_id' => 227,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            406 => 
            array (
                'id' => 907,
                'question_id' => 227,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            407 => 
            array (
                'id' => 908,
                'question_id' => 227,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            408 => 
            array (
                'id' => 909,
                'question_id' => 228,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            409 => 
            array (
                'id' => 910,
                'question_id' => 228,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            410 => 
            array (
                'id' => 911,
                'question_id' => 228,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            411 => 
            array (
                'id' => 912,
                'question_id' => 228,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            412 => 
            array (
                'id' => 913,
                'question_id' => 229,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:58',
                'updated_at' => '2022-07-20 10:59:58',
            ),
            413 => 
            array (
                'id' => 914,
                'question_id' => 229,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            414 => 
            array (
                'id' => 915,
                'question_id' => 229,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            415 => 
            array (
                'id' => 916,
                'question_id' => 229,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            416 => 
            array (
                'id' => 917,
                'question_id' => 230,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            417 => 
            array (
                'id' => 918,
                'question_id' => 230,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            418 => 
            array (
                'id' => 919,
                'question_id' => 230,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            419 => 
            array (
                'id' => 920,
                'question_id' => 230,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            420 => 
            array (
                'id' => 921,
                'question_id' => 231,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            421 => 
            array (
                'id' => 922,
                'question_id' => 231,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            422 => 
            array (
                'id' => 923,
                'question_id' => 231,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            423 => 
            array (
                'id' => 924,
                'question_id' => 231,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            424 => 
            array (
                'id' => 925,
                'question_id' => 232,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            425 => 
            array (
                'id' => 926,
                'question_id' => 232,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            426 => 
            array (
                'id' => 927,
                'question_id' => 232,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            427 => 
            array (
                'id' => 928,
                'question_id' => 232,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            428 => 
            array (
                'id' => 929,
                'question_id' => 233,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            429 => 
            array (
                'id' => 930,
                'question_id' => 233,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            430 => 
            array (
                'id' => 931,
                'question_id' => 233,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            431 => 
            array (
                'id' => 932,
                'question_id' => 233,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            432 => 
            array (
                'id' => 933,
                'question_id' => 234,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            433 => 
            array (
                'id' => 934,
                'question_id' => 234,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            434 => 
            array (
                'id' => 935,
                'question_id' => 234,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            435 => 
            array (
                'id' => 936,
                'question_id' => 234,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            436 => 
            array (
                'id' => 937,
                'question_id' => 235,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 10:59:59',
                'updated_at' => '2022-07-20 10:59:59',
            ),
            437 => 
            array (
                'id' => 938,
                'question_id' => 235,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            438 => 
            array (
                'id' => 939,
                'question_id' => 235,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            439 => 
            array (
                'id' => 940,
                'question_id' => 235,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            440 => 
            array (
                'id' => 941,
                'question_id' => 236,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            441 => 
            array (
                'id' => 942,
                'question_id' => 236,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            442 => 
            array (
                'id' => 943,
                'question_id' => 236,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            443 => 
            array (
                'id' => 944,
                'question_id' => 236,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            444 => 
            array (
                'id' => 945,
                'question_id' => 237,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            445 => 
            array (
                'id' => 946,
                'question_id' => 237,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            446 => 
            array (
                'id' => 947,
                'question_id' => 237,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            447 => 
            array (
                'id' => 948,
                'question_id' => 237,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            448 => 
            array (
                'id' => 949,
                'question_id' => 238,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            449 => 
            array (
                'id' => 950,
                'question_id' => 238,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            450 => 
            array (
                'id' => 951,
                'question_id' => 238,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            451 => 
            array (
                'id' => 952,
                'question_id' => 238,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            452 => 
            array (
                'id' => 953,
                'question_id' => 239,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            453 => 
            array (
                'id' => 954,
                'question_id' => 239,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:00',
                'updated_at' => '2022-07-20 11:00:00',
            ),
            454 => 
            array (
                'id' => 955,
                'question_id' => 239,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            455 => 
            array (
                'id' => 956,
                'question_id' => 239,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            456 => 
            array (
                'id' => 957,
                'question_id' => 240,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            457 => 
            array (
                'id' => 958,
                'question_id' => 240,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            458 => 
            array (
                'id' => 959,
                'question_id' => 240,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            459 => 
            array (
                'id' => 960,
                'question_id' => 240,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            460 => 
            array (
                'id' => 961,
                'question_id' => 241,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            461 => 
            array (
                'id' => 962,
                'question_id' => 241,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            462 => 
            array (
                'id' => 963,
                'question_id' => 241,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            463 => 
            array (
                'id' => 964,
                'question_id' => 241,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            464 => 
            array (
                'id' => 965,
                'question_id' => 242,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            465 => 
            array (
                'id' => 966,
                'question_id' => 242,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            466 => 
            array (
                'id' => 967,
                'question_id' => 242,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            467 => 
            array (
                'id' => 968,
                'question_id' => 242,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            468 => 
            array (
                'id' => 969,
                'question_id' => 243,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            469 => 
            array (
                'id' => 970,
                'question_id' => 243,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            470 => 
            array (
                'id' => 971,
                'question_id' => 243,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            471 => 
            array (
                'id' => 972,
                'question_id' => 243,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            472 => 
            array (
                'id' => 973,
                'question_id' => 244,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            473 => 
            array (
                'id' => 974,
                'question_id' => 244,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            474 => 
            array (
                'id' => 975,
                'question_id' => 244,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            475 => 
            array (
                'id' => 976,
                'question_id' => 244,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:01',
                'updated_at' => '2022-07-20 11:00:01',
            ),
            476 => 
            array (
                'id' => 977,
                'question_id' => 245,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            477 => 
            array (
                'id' => 978,
                'question_id' => 245,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            478 => 
            array (
                'id' => 979,
                'question_id' => 245,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            479 => 
            array (
                'id' => 980,
                'question_id' => 245,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            480 => 
            array (
                'id' => 981,
                'question_id' => 246,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            481 => 
            array (
                'id' => 982,
                'question_id' => 246,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            482 => 
            array (
                'id' => 983,
                'question_id' => 246,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            483 => 
            array (
                'id' => 984,
                'question_id' => 246,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            484 => 
            array (
                'id' => 985,
                'question_id' => 247,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            485 => 
            array (
                'id' => 986,
                'question_id' => 247,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            486 => 
            array (
                'id' => 987,
                'question_id' => 247,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            487 => 
            array (
                'id' => 988,
                'question_id' => 247,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            488 => 
            array (
                'id' => 989,
                'question_id' => 248,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            489 => 
            array (
                'id' => 990,
                'question_id' => 248,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            490 => 
            array (
                'id' => 991,
                'question_id' => 248,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            491 => 
            array (
                'id' => 992,
                'question_id' => 248,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            492 => 
            array (
                'id' => 993,
                'question_id' => 249,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            493 => 
            array (
                'id' => 994,
                'question_id' => 249,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            494 => 
            array (
                'id' => 995,
                'question_id' => 249,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            495 => 
            array (
                'id' => 996,
                'question_id' => 249,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            496 => 
            array (
                'id' => 997,
                'question_id' => 250,
                'answer' => 'Answer 1',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            497 => 
            array (
                'id' => 998,
                'question_id' => 250,
                'answer' => 'Answer 2',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            498 => 
            array (
                'id' => 999,
                'question_id' => 250,
                'answer' => 'Answer 3',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:02',
                'updated_at' => '2022-07-20 11:00:02',
            ),
            499 => 
            array (
                'id' => 1000,
                'question_id' => 250,
                'answer' => 'Answer 4',
                'is_true' => 0,
                'created_at' => '2022-07-20 11:00:03',
                'updated_at' => '2022-07-20 11:00:03',
            ),
        ));
        
        
    }
}