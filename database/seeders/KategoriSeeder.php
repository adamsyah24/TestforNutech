<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Sequence;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::factory()
        ->count(3)
        ->sequence(fn ($sequence) => [
            'nama_kategori' => 'TRL' . $sequence->index +1,
        ])
        ->create();
    }
}
