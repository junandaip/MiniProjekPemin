<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        DB::table('blog')->insert([
            'judul' => 'Perubahan Jam Tidur',
            'isi' => 'Sudah bukan rahasia kalau freelancer atau remote worker bisa kerja dimana dan kapan aja, 
            untuk hal "kapan aja" nya ini ga bisa terjadi di semua perusahaan, karena sistem tiap pekerjaan beda beda, 
            ada yang pake tracker yang mana buat nge-track wajib kerja mulai pukul 9 sampai 5 sore misalkan. Dan ada juga 
            perusahaan yang menerapkan asalkan task kamu selesai, yaudah, entah itu cuma makan waktu 3 jam.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('blog')->insert([
            'judul' => 'Bagaimana Saya Mengatur Waktu sebagai Developer',
            'isi' => 'Manajemen waktu adalah bagaimana kita mengatur waktu sehingga di setiap aktivitas nya mendapatkan porsi /
             bagian waktu yang sesuai dengan kebutuhan. Bayangkan jika kita tidak punya manajemen waktu yang baik, hidup mu ga akan 
             berjalan teratur dan yang terjadi malah kesehatanmu juga bakal terganggu.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
