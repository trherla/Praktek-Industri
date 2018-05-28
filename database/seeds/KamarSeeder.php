<?php

use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kamar::insert([
        [
        	'nama_kamar'=>'Cottage',
        	'deskripsi'=>'Cottage kami merupakan studio cottage dengan udara terbuka dan dilengkapi dengan teras dan tempat parkir pribadi. Fasilitasnya antara lain:',
        	'fasilitas'=>'Double Bed / Twin Bed, Air Conditioner, 32" LED TV dengan 32 TV Channels, Free Wifi, Water Heater, Wardrobe, Private Parking Lot',
            'tarif'=>'200000',
            'jumlah_kamar'=>'5',
        	'gambar'=>'http://localhost:8000/images/cottage.png'
        ],
        [
        	'nama_kamar'=>'Superior Deluxe',
        	'deskripsi'=>'Superior Deluxe merupakan bagian dari Hotel kami dan Superior Deluxe merupakan kamar dengan view yang bagus dari dalam kamarnya. Fasilitasnya antara lain:',
        	'fasilitas'=>'Double Bed / Twin Bed, Air Conditioner, 32" LED TV dengan 32 TV Channels, Free Wifi, Water Heater, Wardrobe, Minibar',
            'tarif'=>'500000',
            'jumlah_kamar'=>'1',
        	'gambar'=>'http://localhost:8000/images/superiordeluxe.png'
        ],
        [
        	'nama_kamar'=>'Deluxe Room',
        	'deskripsi'=>'Ruangan yang cukup luas, dengan extra bed, kamar ini dapat dihuni dengan kapasitas max 4 pax. Fasilitasnya antara lain:',
        	'fasilitas'=>'Double Bed / Twin Bed, Air Conditioner, 32" LED TV dengan 32 TV Channels, Free Wifi, Water Heater, Wardrobe',
            'tarif'=>'300000',
            'jumlah_kamar'=>'3',
        	'gambar'=>'http://localhost:8000/images/deluxe.png'
        ],
        [
        	'nama_kamar'=>'Superior Room',
        	'deskripsi'=>'Ruangan yang cukup luas, dengan extra bed, kamar ini dapat dihuni dengan kapasitas max 4 pax. Fasilitasnya antara lain:',
        	'fasilitas'=>'Twin Bed, Air Conditioner, 32" LED TV dengan 32 TV Channels, Free Wifi, Water Heater, Wardrobe, Private Parking Lot',
            'tarif'=>'400000',
            'jumlah_kamar'=>'2',
        	'gambar'=>'http://localhost:8000/images/superior.png'
        ]
        ]);
    }
}
