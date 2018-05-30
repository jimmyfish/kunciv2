<?php

use Illuminate\Database\Seeder;

class KunciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kunci = [
            [
                'nama_lokasi' => 'Gardu 140B',
                'is_available' => 1,
            ],
            [
                'nama_lokasi' => 'Gardu 150B',
                'is_available' => 1,
            ],
        ];

        DB::table('kunci')->insert($kunci);
    }
}
