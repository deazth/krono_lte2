<?php

use Illuminate\Database\Seeder;

class OvertimeFormulasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('overtime_formulas')->delete();
        
        \DB::table('overtime_formulas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'compregconfig_id' => 1,
                'legacy_codes' => NULL,
                'day_type' => 'NOR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'compregconfig_id' => 1,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 4,
                'unit' => 'day',
                'rate' => '0.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'compregconfig_id' => 1,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 4,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '1.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'compregconfig_id' => 1,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '2.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'compregconfig_id' => 1,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 7,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '3.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'compregconfig_id' => 1,
                'legacy_codes' => NULL,
                'day_type' => 'SPR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'compregconfig_id' => 2,
                'legacy_codes' => NULL,
                'day_type' => 'NOR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'compregconfig_id' => 2,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 4,
                'unit' => 'day',
                'rate' => '0.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'compregconfig_id' => 2,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 4,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '1.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'compregconfig_id' => 2,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '2.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'compregconfig_id' => 2,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 7,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '3.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 15,
                'compregconfig_id' => 2,
                'legacy_codes' => NULL,
                'day_type' => 'SPR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 16,
                'compregconfig_id' => 3,
                'legacy_codes' => NULL,
                'day_type' => 'NOR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'compregconfig_id' => 3,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 4,
                'unit' => 'day',
                'rate' => '0.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'compregconfig_id' => 3,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 4,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '1.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 20,
                'compregconfig_id' => 3,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '2.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 21,
                'compregconfig_id' => 3,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 7,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '3.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 22,
                'compregconfig_id' => 3,
                'legacy_codes' => NULL,
                'day_type' => 'SPR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 23,
                'compregconfig_id' => 4,
                'legacy_codes' => NULL,
                'day_type' => 'NOR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'compregconfig_id' => 4,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 4,
                'unit' => 'day',
                'rate' => '0.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 26,
                'compregconfig_id' => 4,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 4,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '1.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 27,
                'compregconfig_id' => 4,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '2.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 29,
                'compregconfig_id' => 4,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 7,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '3.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 30,
                'compregconfig_id' => 4,
                'legacy_codes' => NULL,
                'day_type' => 'SPR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 31,
                'compregconfig_id' => 5,
                'legacy_codes' => NULL,
                'day_type' => 'NOR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 32,
                'compregconfig_id' => 5,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 4,
                'unit' => 'day',
                'rate' => '0.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 34,
                'compregconfig_id' => 5,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 4,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '1.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 35,
                'compregconfig_id' => 5,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '2.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 36,
                'compregconfig_id' => 5,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 7,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '3.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 37,
                'compregconfig_id' => 5,
                'legacy_codes' => NULL,
                'day_type' => 'SPR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 39,
                'compregconfig_id' => 6,
                'legacy_codes' => NULL,
                'day_type' => 'NOR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 40,
                'compregconfig_id' => 6,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 4,
                'unit' => 'day',
                'rate' => '0.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 41,
                'compregconfig_id' => 6,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 4,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '1.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 42,
                'compregconfig_id' => 6,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '2.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 44,
                'compregconfig_id' => 6,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 7,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '3.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 45,
                'compregconfig_id' => 6,
                'legacy_codes' => NULL,
                'day_type' => 'SPR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 46,
                'compregconfig_id' => 7,
                'legacy_codes' => NULL,
                'day_type' => 'NOR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 47,
                'compregconfig_id' => 7,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 4,
                'unit' => 'day',
                'rate' => '0.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 49,
                'compregconfig_id' => 7,
                'legacy_codes' => NULL,
                'day_type' => 'RES',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 4,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '1.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 50,
                'compregconfig_id' => 7,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 7,
                'unit' => 'day',
                'rate' => '2.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 51,
                'compregconfig_id' => 7,
                'legacy_codes' => NULL,
                'day_type' => 'PHO',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 7,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '3.00',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 52,
                'compregconfig_id' => 7,
                'legacy_codes' => NULL,
                'day_type' => 'SPR',
                'wagetype' => NULL,
                'descr' => NULL,
                'min_hour' => 0,
                'max_hour' => 24,
                'unit' => 'hour',
                'rate' => '1.50',
                'start_date' => '2019-11-20',
                'end_date' => '9999-12-31',
                'created_by' => 53062,
                'last_edited_by' => NULL,
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-11-20 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}