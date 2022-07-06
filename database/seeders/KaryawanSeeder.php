<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id_ID digunakan untuk memilih negara dari data, id berarti dari indonesia
        $faker = Faker::create('id_ID');

        for ($i=1; $i<=20; $i++){
            \DB::table('karyawan')->insert([
                'nama'=>$faker->name,
                'npa'=>$faker->randomNumber(9, true),
                'alamat'=>$faker->address,
                'pekerjaan_id'=>$faker->numberBetween(1,5)
            ]);
        }
    }
}
