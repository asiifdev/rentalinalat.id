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
        // KATEGORI INDUK
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
            'name' => 'TV',
            'slug' => Str::slug('TV'),
            'foto' => 'foto.png'
        ]);
        Category::create([
            'name' => 'Audio',
            'slug' => Str::slug('Audio'),
            'foto' => 'foto.png'
        ]);
        Category::create([
            'name' => 'Lain-lain',
            'slug' => Str::slug('Lain-lain'),
            'foto' => 'foto.png'
        ]);

        // SUBKATEGORI MULTIMEDIA
        Category::create([
            'name' => 'Kamera',
            'slug' => Str::slug('Kamera'),
            'foto' => 'foto.png',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'Kamera Pendukung',
            'slug' => Str::slug('Kamera Pendukung'),
            'foto' => 'foto.png',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'Switcher VIDEO System',
            'slug' => Str::slug('Switcher VIDEO System'),
            'foto' => 'foto.png',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'Converter Video',
            'slug' => Str::slug('Converter Video'),
            'foto' => 'foto.png',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'Splitter Video',
            'slug' => Str::slug('Splitter Video'),
            'foto' => 'foto.png',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'Wireless Video',
            'slug' => Str::slug('Wireless Video'),
            'foto' => 'foto.png',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'Tripod',
            'slug' => Str::slug('Tripod'),
            'foto' => 'foto.png',
            'parent_id' => 1
        ]);

        // SUBKATEGORI PC & Laptop
        Category::create([
            'name' => 'Personal Computer',
            'slug' => Str::slug('Personal Computer'),
            'foto' => 'foto.png',
            'parent_id' => 2
        ]);
        Category::create([
            'name' => 'Laptop',
            'slug' => Str::slug('Laptop'),
            'foto' => 'foto.png',
            'parent_id' => 2
        ]);
        Category::create([
            'name' => 'Keyboard & Mouse',
            'slug' => Str::slug('Keyboard & Mouse'),
            'foto' => 'foto.png',
            'parent_id' => 2
        ]);
        Category::create([
            'name' => 'USB Hub',
            'slug' => Str::slug('USB Hub'),
            'foto' => 'foto.png',
            'parent_id' => 2
        ]);
        Category::create([
            'name' => 'Field Monitor',
            'slug' => Str::slug('Field Monitor'),
            'foto' => 'foto.png',
            'parent_id' => 2
        ]);
        Category::create([
            'name' => 'Monitor PC',
            'slug' => Str::slug('Monitor PC'),
            'foto' => 'foto.png',
            'parent_id' => 2
        ]);

        // SUBKATEGORI TV
        Category::create([
            'name' => 'TV',
            'slug' => Str::slug('TV'),
            'foto' => 'foto.png',
            'parent_id' => 3
        ]);
        Category::create([
            'name' => 'Stand TV',
            'slug' => Str::slug('Stand TV'),
            'foto' => 'foto.png',
            'parent_id' => 3
        ]);

        // SUBKATEGORI AUDIO
        Category::create([
            'name' => 'Mixer Audio System',
            'slug' => Str::slug('Mixer Audio System'),
            'foto' => 'foto.png',
            'parent_id' => 4
        ]);
        Category::create([
            'name' => 'EarTech',
            'slug' => Str::slug('EarTech'),
            'foto' => 'foto.png',
            'parent_id' => 4
        ]);
        Category::create([
            'name' => 'Audio Soundcard',
            'slug' => Str::slug('Audio Soundcard'),
            'foto' => 'foto.png',
            'parent_id' => 4
        ]);
        Category::create([
            'name' => 'Audio Pendukung',
            'slug' => Str::slug('Audio Pendukung'),
            'foto' => 'foto.png',
            'parent_id' => 4
        ]);
        Category::create([
            'name' => 'Wireless Audio ClipOn',
            'slug' => Str::slug('Wireless Audio ClipOn'),
            'foto' => 'foto.png',
            'parent_id' => 4
        ]);

        // SUBKATEGORI LAINNYA
        Category::create([
            'name' => 'Handy Talkie',
            'slug' => Str::slug('Handy Talkie'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Kabel',
            'slug' => Str::slug('Kabel'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Lighting',
            'slug' => Str::slug('Lighting'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Memory & Card Reader',
            'slug' => Str::slug('Memory & Card Reader'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'External HDD',
            'slug' => Str::slug('External HDD'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Splitter HUB Internet',
            'slug' => Str::slug('Splitter HUB Internet'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Internet System',
            'slug' => Str::slug('Internet System'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Green Screen',
            'slug' => Str::slug('Green Screen'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Webcam',
            'slug' => Str::slug('Webcam'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'UPS',
            'slug' => Str::slug('UPS'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Scanner Barcode-QR',
            'slug' => Str::slug('Scanner Barcode-QR'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Capture Card',
            'slug' => Str::slug('Capture Card'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
        Category::create([
            'name' => 'Peralatan Pendukung',
            'slug' => Str::slug('Peralatan Pendukung'),
            'foto' => 'foto.png',
            'parent_id' => 5
        ]);
    }
}
