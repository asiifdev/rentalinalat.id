<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Multimedia',
            'slug' => Str::slug('Multimedia'),
            'foto' => 'foto.png'
        ]);
        Category::create([
            'name' => 'PC & Laptop',
            'slug' => Str::slug('PC & Laptop'),
            'foto' => 'foto.png'
        ]);
        Category::create([
            'name' => 'Audio',
            'slug' => Str::slug('Audio'),
            'foto' => 'foto.png'
        ]);
        Category::create([
            'name' => 'TV',
            'slug' => Str::slug('TV'),
            'foto' => 'foto.png'
        ]);
        Category::create([
            'name' => 'Lain-lain',
            'slug' => Str::slug('Lain-lain'),
            'foto' => 'foto.png'
        ]);
    }
}
