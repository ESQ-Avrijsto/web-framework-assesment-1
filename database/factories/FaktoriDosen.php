<?php 

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaktoriDosen extends Factory
{
    /**
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * @return array
     */
    public function define()
    {
        return [
            'nama'=>$this->faker->text(),
            'nidn'=>$this->faker->text(),
            'alamat'=>$this->faker->date(),
            'kontak'=>$this->faker->text(),
            'create_at'=>$this->faker->date(),
            'update_at'=>$this->faker->date(),
    
        ];
    }
}

 ?>