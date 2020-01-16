<?php

use Illuminate\Database\Seeder;

class HolidayLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('holiday_logs')->delete();
        
        \DB::table('holiday_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'holiday_id' => 1,
                'descr' => 'New Year',
                'dt' => '2016-01-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19562,
                'action' => 'INSERT',
                'created_at' => '2019-11-18 17:16:40',
                'updated_at' => '2019-11-18 17:16:40',
            ),
            1 => 
            array (
                'id' => 2,
                'holiday_id' => 2,
                'descr' => 'New Year',
                'dt' => '2018-01-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19562,
                'action' => 'INSERT',
                'created_at' => '2019-11-18 17:18:05',
                'updated_at' => '2019-11-18 17:18:05',
            ),
            2 => 
            array (
                'id' => 3,
                'holiday_id' => 3,
                'descr' => 'New Year',
                'dt' => '2019-01-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19562,
                'action' => 'INSERT',
                'created_at' => '2019-11-18 17:22:05',
                'updated_at' => '2019-11-18 17:22:05',
            ),
            3 => 
            array (
                'id' => 4,
                'holiday_id' => 4,
                'descr' => 'Thaipusam Day',
                'dt' => '2019-01-21',
                'guarantee_flag' => 0,
                'states' => '"WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:40:37',
                'updated_at' => '2019-11-21 09:40:37',
            ),
            4 => 
            array (
                'id' => 5,
                'holiday_id' => 5,
            'descr' => 'Federal Territory Day (MY)',
                'dt' => '2019-02-01',
                'guarantee_flag' => 0,
                'states' => '"WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:41:45',
                'updated_at' => '2019-11-21 09:41:45',
            ),
            5 => 
            array (
                'id' => 6,
                'holiday_id' => 6,
            'descr' => 'Chinese New Year Day 1 (MY)',
                'dt' => '2019-02-05',
                'guarantee_flag' => 0,
                'states' => '"WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:42:38',
                'updated_at' => '2019-11-21 09:42:38',
            ),
            6 => 
            array (
                'id' => 7,
                'holiday_id' => 7,
            'descr' => 'Labour Day (MY)',
                'dt' => '2019-05-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:43:47',
                'updated_at' => '2019-11-21 09:43:47',
            ),
            7 => 
            array (
                'id' => 8,
                'holiday_id' => 7,
            'descr' => 'Labour Day (MY)',
                'dt' => '2019-05-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 09:43:54',
                'updated_at' => '2019-11-21 09:43:54',
            ),
            8 => 
            array (
                'id' => 9,
                'holiday_id' => 8,
            'descr' => 'Wesak Day (MY)',
                'dt' => '2019-05-19',
                'guarantee_flag' => 0,
                'states' => '"WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:44:54',
                'updated_at' => '2019-11-21 09:44:54',
            ),
            9 => 
            array (
                'id' => 10,
                'holiday_id' => 9,
            'descr' => 'Hari Raya Puasa Day 2 (MY)',
                'dt' => '2019-06-06',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:46:07',
                'updated_at' => '2019-11-21 09:46:07',
            ),
            10 => 
            array (
                'id' => 11,
                'holiday_id' => 10,
            'descr' => 'Hari Raya Qurban Day 1 (MY)',
                'dt' => '2019-08-11',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:47:51',
                'updated_at' => '2019-11-21 09:47:51',
            ),
            11 => 
            array (
                'id' => 12,
                'holiday_id' => 11,
            'descr' => 'National Holiday (MY)',
                'dt' => '2019-08-31',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:48:20',
                'updated_at' => '2019-11-21 09:48:20',
            ),
            12 => 
            array (
                'id' => 13,
                'holiday_id' => 12,
            'descr' => 'Awal Muharam- Maal Hijrah (MY)',
                'dt' => '2019-09-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:53:34',
                'updated_at' => '2019-11-21 09:53:34',
            ),
            13 => 
            array (
                'id' => 14,
                'holiday_id' => 13,
                'descr' => 'Malaysia Day',
                'dt' => '2019-09-16',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:54:01',
                'updated_at' => '2019-11-21 09:54:01',
            ),
            14 => 
            array (
                'id' => 15,
                'holiday_id' => 14,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2019-10-27',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 09:54:26',
                'updated_at' => '2019-11-21 09:54:26',
            ),
            15 => 
            array (
                'id' => 16,
                'holiday_id' => 15,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2019-11-09',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:01:11',
                'updated_at' => '2019-11-21 10:01:11',
            ),
            16 => 
            array (
                'id' => 17,
                'holiday_id' => 15,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2019-11-09',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:01:50',
                'updated_at' => '2019-11-21 10:01:50',
            ),
            17 => 
            array (
                'id' => 18,
                'holiday_id' => 15,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2019-11-09',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:02:04',
                'updated_at' => '2019-11-21 10:02:04',
            ),
            18 => 
            array (
                'id' => 19,
                'holiday_id' => 15,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2019-11-09',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:02:43',
                'updated_at' => '2019-11-21 10:02:43',
            ),
            19 => 
            array (
                'id' => 20,
                'holiday_id' => 15,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2019-11-09',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:03:36',
                'updated_at' => '2019-11-21 10:03:36',
            ),
            20 => 
            array (
                'id' => 21,
                'holiday_id' => 15,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2019-11-09',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:03:49',
                'updated_at' => '2019-11-21 10:03:49',
            ),
            21 => 
            array (
                'id' => 22,
                'holiday_id' => 16,
            'descr' => 'Christmas Day (MY)',
                'dt' => '2019-12-25',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:08:39',
                'updated_at' => '2019-11-21 10:08:39',
            ),
            22 => 
            array (
                'id' => 23,
                'holiday_id' => 4,
                'descr' => 'Thaipusam Day',
                'dt' => '2019-01-21',
                'guarantee_flag' => 0,
                'states' => '"WP","LB","PJ"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:13:28',
                'updated_at' => '2019-11-21 10:13:28',
            ),
            23 => 
            array (
                'id' => 24,
                'holiday_id' => 5,
            'descr' => 'Federal Territory Day (MY)',
                'dt' => '2019-02-01',
                'guarantee_flag' => 0,
                'states' => '"WP","LB","PJ"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:14:01',
                'updated_at' => '2019-11-21 10:14:01',
            ),
            24 => 
            array (
                'id' => 25,
                'holiday_id' => 6,
            'descr' => 'Chinese New Year Day 1 (MY)',
                'dt' => '2019-02-05',
                'guarantee_flag' => 0,
                'states' => '"WP","LB","PJ"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:14:15',
                'updated_at' => '2019-11-21 10:14:15',
            ),
            25 => 
            array (
                'id' => 26,
                'holiday_id' => 8,
            'descr' => 'Wesak Day (MY)',
                'dt' => '2019-05-19',
                'guarantee_flag' => 0,
                'states' => '"WP","LB","PJ"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:14:30',
                'updated_at' => '2019-11-21 10:14:30',
            ),
            26 => 
            array (
                'id' => 27,
                'holiday_id' => 17,
            'descr' => 'New Year (MY)',
                'dt' => '2020-01-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:31:26',
                'updated_at' => '2019-11-21 10:31:26',
            ),
            27 => 
            array (
                'id' => 28,
                'holiday_id' => 18,
            'descr' => 'Chinese New Year Day 1 (MY)',
                'dt' => '2020-01-25',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:39:50',
                'updated_at' => '2019-11-21 10:39:50',
            ),
            28 => 
            array (
                'id' => 29,
                'holiday_id' => 19,
            'descr' => 'Chinese New Year Day 1 (MY)',
                'dt' => '2020-01-26',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:41:52',
                'updated_at' => '2019-11-21 10:41:52',
            ),
            29 => 
            array (
                'id' => 30,
                'holiday_id' => 19,
            'descr' => 'Chinese New Year Day 1 (MY)',
                'dt' => '2020-01-26',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 10:42:22',
                'updated_at' => '2019-11-21 10:42:22',
            ),
            30 => 
            array (
                'id' => 31,
                'holiday_id' => 20,
            'descr' => 'Federal Territory Day (MY)',
                'dt' => '2010-02-01',
                'guarantee_flag' => 0,
                'states' => '"LB","PJ","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:43:07',
                'updated_at' => '2019-11-21 10:43:07',
            ),
            31 => 
            array (
                'id' => 32,
                'holiday_id' => 21,
                'descr' => 'Thaipusam Day',
                'dt' => '2020-02-08',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:49:40',
                'updated_at' => '2019-11-21 10:49:40',
            ),
            32 => 
            array (
                'id' => 33,
                'holiday_id' => 22,
            'descr' => 'Labour Day (MY)',
                'dt' => '2020-05-01',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:50:29',
                'updated_at' => '2019-11-21 10:50:29',
            ),
            33 => 
            array (
                'id' => 34,
                'holiday_id' => 23,
            'descr' => 'Wesak Day (MY)',
                'dt' => '2020-05-07',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:51:48',
                'updated_at' => '2019-11-21 10:51:48',
            ),
            34 => 
            array (
                'id' => 35,
                'holiday_id' => 24,
                'descr' => 'Nuzul Al-Quran Day Sun',
                'dt' => '2020-05-10',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:52:55',
                'updated_at' => '2019-11-21 10:52:55',
            ),
            35 => 
            array (
                'id' => 36,
                'holiday_id' => 25,
            'descr' => 'Hari Raya Puasa Day 1 (MY) Sun',
                'dt' => '2020-05-24',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:57:07',
                'updated_at' => '2019-11-21 10:57:07',
            ),
            36 => 
            array (
                'id' => 37,
                'holiday_id' => 26,
            'descr' => 'Hari Raya Puasa Day 2 (MY)',
                'dt' => '2020-05-25',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 10:57:43',
                'updated_at' => '2019-11-21 10:57:43',
            ),
            37 => 
            array (
                'id' => 38,
                'holiday_id' => 27,
            'descr' => 'Hari Raya Puasa Day 1 (MY) Sun , moved',
                'dt' => '2020-05-26',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:00:34',
                'updated_at' => '2019-11-21 11:00:34',
            ),
            38 => 
            array (
                'id' => 39,
                'holiday_id' => 28,
                'descr' => 'Hari Keputeraan YDP Agong',
                'dt' => '2020-06-06',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:01:17',
                'updated_at' => '2019-11-21 11:01:17',
            ),
            39 => 
            array (
                'id' => 40,
                'holiday_id' => 29,
            'descr' => 'Hari Raya Qurban Day 1 (MY)',
                'dt' => '2020-07-31',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:02:17',
                'updated_at' => '2019-11-21 11:02:17',
            ),
            40 => 
            array (
                'id' => 41,
                'holiday_id' => 30,
            'descr' => 'Awal Muharam- Maal Hijrah (MY)',
                'dt' => '2020-08-20',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:02:59',
                'updated_at' => '2019-11-21 11:02:59',
            ),
            41 => 
            array (
                'id' => 42,
                'holiday_id' => 31,
            'descr' => 'National Holiday (MY)',
                'dt' => '2020-08-31',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:03:35',
                'updated_at' => '2019-11-21 11:03:35',
            ),
            42 => 
            array (
                'id' => 43,
                'holiday_id' => 32,
                'descr' => 'Malaysia Day',
                'dt' => '2020-09-16',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:04:19',
                'updated_at' => '2019-11-21 11:04:19',
            ),
            43 => 
            array (
                'id' => 44,
                'holiday_id' => 33,
            'descr' => 'Prophet Muhammad\'s B\'day (MY)',
                'dt' => '2020-10-29',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:05:43',
                'updated_at' => '2019-11-21 11:05:43',
            ),
            44 => 
            array (
                'id' => 45,
                'holiday_id' => 34,
            'descr' => 'Deepavali Day  (MY)',
                'dt' => '2020-11-14',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:07:00',
                'updated_at' => '2019-11-21 11:07:00',
            ),
            45 => 
            array (
                'id' => 46,
                'holiday_id' => 35,
            'descr' => 'Christmas Day (MY)',
                'dt' => '2020-12-25',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:07:44',
                'updated_at' => '2019-11-21 11:07:44',
            ),
            46 => 
            array (
                'id' => 47,
                'holiday_id' => 17,
            'descr' => 'New Year (MY)',
                'dt' => '2020-01-01',
                'guarantee_flag' => 0,
                'states' => '"KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 11:11:44',
                'updated_at' => '2019-11-21 11:11:44',
            ),
            47 => 
            array (
                'id' => 48,
                'holiday_id' => 3,
                'descr' => 'New Year',
                'dt' => '2019-01-01',
                'guarantee_flag' => 0,
                'states' => '"KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19562,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 11:11:52',
                'updated_at' => '2019-11-21 11:11:52',
            ),
            48 => 
            array (
                'id' => 49,
                'holiday_id' => 3,
                'descr' => 'New Year',
                'dt' => '2019-01-01',
                'guarantee_flag' => 0,
                'states' => '"KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19562,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 11:12:05',
                'updated_at' => '2019-11-21 11:12:05',
            ),
            49 => 
            array (
                'id' => 50,
                'holiday_id' => 36,
                'descr' => 'Birthday of Sultan Johor MY',
                'dt' => '2019-03-23',
                'guarantee_flag' => 0,
                'states' => '"JH"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:13:02',
                'updated_at' => '2019-11-21 11:13:02',
            ),
            50 => 
            array (
                'id' => 51,
                'holiday_id' => 37,
                'descr' => 'Hari Hol Sultan Iskandar',
                'dt' => '2020-10-05',
                'guarantee_flag' => 0,
                'states' => '"JH"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:22:53',
                'updated_at' => '2019-11-21 11:22:53',
            ),
            51 => 
            array (
                'id' => 52,
                'holiday_id' => 38,
                'descr' => 'Birthday of Sultan Johor MY',
                'dt' => '2020-03-23',
                'guarantee_flag' => 0,
                'states' => '"JH"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:26:50',
                'updated_at' => '2019-11-21 11:26:50',
            ),
            52 => 
            array (
                'id' => 53,
                'holiday_id' => 39,
                'descr' => 'Hari Hol Sultan Iskandar',
                'dt' => '2020-09-24',
                'guarantee_flag' => 0,
                'states' => '"JH"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:31:02',
                'updated_at' => '2019-11-21 11:31:02',
            ),
            53 => 
            array (
                'id' => 54,
                'holiday_id' => 3,
                'descr' => 'New Year',
                'dt' => '2019-01-01',
                'guarantee_flag' => 0,
                'states' => '"KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19562,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 11:32:42',
                'updated_at' => '2019-11-21 11:32:42',
            ),
            54 => 
            array (
                'id' => 55,
                'holiday_id' => 40,
                'descr' => 'Birthday of Sultan Kedah',
                'dt' => '2019-01-20',
                'guarantee_flag' => 0,
                'states' => '"KH"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:33:23',
                'updated_at' => '2019-11-21 11:33:23',
            ),
            55 => 
            array (
                'id' => 56,
                'holiday_id' => 41,
                'descr' => 'Israk and Mikraj',
                'dt' => '2019-04-03',
                'guarantee_flag' => 0,
                'states' => '"KH"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:35:24',
                'updated_at' => '2019-11-21 11:35:24',
            ),
            56 => 
            array (
                'id' => 57,
                'holiday_id' => 8,
            'descr' => 'Wesak Day (MY)',
                'dt' => '2019-05-19',
                'guarantee_flag' => 0,
                'states' => '"WP","LB","PJ","JH","KH","KT","ML","NS","PG","PK","PP","PR","SB","SN","SR","TG"',
                'update_by' => 43570,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 11:36:13',
                'updated_at' => '2019-11-21 11:36:13',
            ),
            57 => 
            array (
                'id' => 58,
                'holiday_id' => 3,
                'descr' => 'New Year',
                'dt' => '2019-01-01',
                'guarantee_flag' => 0,
                'states' => '"LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19562,
                'action' => 'UPDATE',
                'created_at' => '2019-11-21 11:43:58',
                'updated_at' => '2019-11-21 11:43:58',
            ),
            58 => 
            array (
                'id' => 59,
                'holiday_id' => 42,
                'descr' => 'Sultan Kelantan Birthday Day 1',
                'dt' => '2019-11-11',
                'guarantee_flag' => 0,
                'states' => '"KT"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:44:57',
                'updated_at' => '2019-11-21 11:44:57',
            ),
            59 => 
            array (
                'id' => 60,
                'holiday_id' => 43,
                'descr' => 'Sultan Kelantan Birthday Day 2',
                'dt' => '2019-11-12',
                'guarantee_flag' => 0,
                'states' => '"KT"',
                'update_by' => 43570,
                'action' => 'INSERT',
                'created_at' => '2019-11-21 11:45:34',
                'updated_at' => '2019-11-21 11:45:34',
            ),
            60 => 
            array (
                'id' => 61,
                'holiday_id' => 44,
            'descr' => 'Chinese New Year Day 1 (MY) Sat Replacement',
                'dt' => '2020-01-24',
                'guarantee_flag' => 0,
                'states' => '"LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","WP"',
                'update_by' => 19021,
                'action' => 'INSERT',
                'created_at' => '2020-01-06 13:21:03',
                'updated_at' => '2020-01-06 13:21:03',
            ),
            61 => 
            array (
                'id' => 62,
                'holiday_id' => 19,
            'descr' => 'Chinese New Year Day 2 (MY)',
                'dt' => '2020-01-26',
                'guarantee_flag' => 0,
                'states' => '"JH","KH","KT","LB","ML","NS","PG","PJ","PK","PP","PR","SB","SN","SR","TG","WP"',
                'update_by' => 19021,
                'action' => 'UPDATE',
                'created_at' => '2020-01-06 13:21:25',
                'updated_at' => '2020-01-06 13:21:25',
            ),
        ));
        
        
    }
}