<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nim' => fake()->unique()->numerify('########'),
            'jurusan' => fake()->randomElement([
                'Sistem Informasi',
                'Informatika',
                'Manajemen Informatika',
            ]),
        ];
    }
}
