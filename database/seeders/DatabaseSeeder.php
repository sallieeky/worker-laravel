<?php

namespace Database\Seeders;

use App\Models\Porto;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sallie Mansurina',
            'email' => 'sallieeky@gmail.com',
            'password' => bcrypt('eky12345')
        ]);

        Porto::create([
            'judul' => 'Eksype Moodle',
            'keterangan' => 'Eksype Moodle merupakan moodle atau LMS yang saya buat untuk belajar',
            'gambar' => 'modle.jpeg'
        ]);
        Porto::create([
            'judul' => 'RindangIn',
            'keterangan' => 'Rindangin merupakan program jual beli tanaman hias sebagai tugas besar mata kuliah PBO',
            'gambar' => 'rindangin.png'
        ]);
        Porto::create([
            'judul' => 'Eksype Wiki',
            'keterangan' => 'Eksype Wiki merupakan tempat menyimpan informasi seperti wikipedia yang dibuat menggunakan mediawiki',
            'gambar' => 'wiki.jpeg'
        ]);
        Porto::create([
            'judul' => 'Aul Thrift',
            'keterangan' => 'Aul Thrift merupakan website jual beli thrift sebagai tugas besar mata kuliah pemrograman web',
            'gambar' => 'aulthrift.png'
        ]);
    }
}
