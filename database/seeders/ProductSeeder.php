<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'kode' => '42082734612',
            'name' => 'Kamera Canon',
            'slug' => Str::slug('Kamera Canon'),
            'description' => 'Lörem ipsum kopimism dekande. Laktigt särtad. Adeligt hexas när kupäss. Mak ore. Panesk mikrons vypp stenok. Mivis tende bes om tede.
            Episyvis povyhäska servicebarn utom tisade. Mösk lav. Nyngen kontranera. Sprita pärlifiera lunde att makrohösat speren. Nepisam telig ifall dona nesk. Pabel klickokrati: egovis lan och solure.
            ',
            'foto' => 'produk1.png',
            'dayRate' => '500000',
            'category_id' => '6',
            'status' => 'Active',
            'stock' => '100'
        ]);
        Product::create([
            'kode' => '879234623',
            'name' => 'Kamera Sony A6000',
            'slug' => Str::slug('Kamera Sony A6000'),
            'description' => 'Lörem ipsum kopimism dekande. Laktigt särtad. Adeligt hexas när kupäss. Mak ore. Panesk mikrons vypp stenok. Mivis tende bes om tede.
            Episyvis povyhäska servicebarn utom tisade. Mösk lav. Nyngen kontranera. Sprita pärlifiera lunde att makrohösat speren. Nepisam telig ifall dona nesk. Pabel klickokrati: egovis lan och solure.
            ',
            'foto' => 'produk2.png',
            'dayRate' => '230000',
            'category_id' => '6',
            'status' => 'Active',
            'stock' => '50'
        ]);
        Product::create([
            'kode' => '78923876',
            'name' => 'Kamera Mainan',
            'slug' => Str::slug('Kamera Mainan'),
            'description' => 'Lörem ipsum kopimism dekande. Laktigt särtad. Adeligt hexas när kupäss. Mak ore. Panesk mikrons vypp stenok. Mivis tende bes om tede.
            Episyvis povyhäska servicebarn utom tisade. Mösk lav. Nyngen kontranera. Sprita pärlifiera lunde att makrohösat speren. Nepisam telig ifall dona nesk. Pabel klickokrati: egovis lan och solure.
            ',
            'foto' => 'produk3.png',
            'dayRate' => '250000',
            'category_id' => '6',
            'status' => 'Active',
            'stock' => '50'
        ]);
        Product::create([
            'kode' => rand(),
            'name' => 'TV Sony',
            'slug' => Str::slug('TV Sony'),
            'description' => 'Lörem ipsum kopimism dekande. Laktigt särtad. Adeligt hexas när kupäss. Mak ore. Panesk mikrons vypp stenok. Mivis tende bes om tede.
            Episyvis povyhäska servicebarn utom tisade. Mösk lav. Nyngen kontranera. Sprita pärlifiera lunde att makrohösat speren. Nepisam telig ifall dona nesk. Pabel klickokrati: egovis lan och solure.
            ',
            'foto' => 'produk6.png',
            'dayRate' => '500000',
            'category_id' => '20',
            'status' => 'Active',
            'stock' => '100'
        ]);
        Product::create([
            'kode' => rand(),
            'name' => 'Kabel Antena',
            'slug' => Str::slug('Kabel Antena'),
            'description' => 'Lörem ipsum kopimism dekande. Laktigt särtad. Adeligt hexas när kupäss. Mak ore. Panesk mikrons vypp stenok. Mivis tende bes om tede.
            Episyvis povyhäska servicebarn utom tisade. Mösk lav. Nyngen kontranera. Sprita pärlifiera lunde att makrohösat speren. Nepisam telig ifall dona nesk. Pabel klickokrati: egovis lan och solure.
            ',
            'foto' => 'produk7.png',
            'dayRate' => '200000',
            'category_id' => '20',
            'status' => 'Active',
            'stock' => '50'
        ]);
        Product::create([
            'kode' => rand(),
            'name' => 'Antena TV',
            'slug' => Str::slug('Antena TV'),
            'description' => 'Lörem ipsum kopimism dekande. Laktigt särtad. Adeligt hexas när kupäss. Mak ore. Panesk mikrons vypp stenok. Mivis tende bes om tede.
            Episyvis povyhäska servicebarn utom tisade. Mösk lav. Nyngen kontranera. Sprita pärlifiera lunde att makrohösat speren. Nepisam telig ifall dona nesk. Pabel klickokrati: egovis lan och solure.
            ',
            'foto' => 'produk8.png',
            'dayRate' => '500000',
            'category_id' => '20',
            'status' => 'Active',
            'stock' => '50'
        ]);
    }
}
