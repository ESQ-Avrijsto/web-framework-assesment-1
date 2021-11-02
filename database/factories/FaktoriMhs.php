<?php 

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaktoriMahasiswa extends Factory
{
    /**
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * @return array
     */
    public function define()
    {
        return [
          
        'nama'=>$this->faker->text(),
        'nim'=>$this->faker->text(),
        'tanggal_lahir'=>$this->faker->date(),
        'alamat'=>$this->faker->text(),
        'tahun_masuk'=>$this->faker->text(),
        'create_at'=>$this->faker->date(),
        'update_at'=>$this->faker->date(),

        ];
    }
}

 ?>