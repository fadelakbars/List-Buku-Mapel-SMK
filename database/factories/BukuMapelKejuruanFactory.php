<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BukuMapelKejuruan;

class BukuMapelKejuruanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BukuMapelKejuruan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->word(),
            'penerbit' => $this->faker->word(),
            'kelas' => $this->faker->randomElement(["X","XI","XII"]),
            'jurusan' => $this->faker->randomElement(["TITL","TAV","TG","TJKT","DPIB","ATPH"]),
            'jumlah' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}