<?php 

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mahasiswa::factory()->count(5)->create();
        
        Dosen::factory()->count(5)->create();
    }
}

 ?>