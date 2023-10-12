<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pemain' => $this->faker->name, // Menggunakan faker untuk nama pemain acak
            'no_punggung' => $this->faker->numberBetween(1, 99), // Nomor punggung acak antara 1 hingga 99
            'posisi' => $this->faker->randomElement(['Penyerang', 'Gelandang', 'Bertahan', 'Penjaga Gawang']), // Posisi pemain acak
        ];
    }
}
