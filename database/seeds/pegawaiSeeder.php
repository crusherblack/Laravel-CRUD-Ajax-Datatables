<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pegawai::class, 100)->create();
    }
}
