<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'nama' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'gambar' => 'foto/user/user.jpg',
            'role' => 0
        ]);
        DB::table('users')->insert([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'gambar' => 'foto/user/user.jpg',
            'role' => 1
        ]);
        // make example seed kategori
        DB::table('kategori_galeri')->insert([
            'nama_kategori' => 'kategori',
        ]);
        DB::table('kategori_berita')->insert([
            'nama_kategori' => 'kategori',
        ]);
        DB::table('kategori_publikasi')->insert([
            'nama_kategori' => 'kategori',
        ]);
        // make example data for table publikasi
        DB::table('publikasi')->insert([
            'user_id' => 1,
            'kategori_publikasi_id' => 1,
            'judul' => 'Posyandu Remaja KEREN, Langkah kelurahan Pulo Brayan Bengkel Baru Edukasi Kesehatan Dan Antisipasi Prilaku Negatif Para Remaja',
            'tanggal_rilis' => '2023-04-23',
            'deskripsi' => 'Dalam rangka Untuk merealisasikan salah satu Program Prioritas Wali Kota Medan Bobby Nasution di Bidang Kesehatan, Kelurahan Pulo Brayan Bengkel Baru Kecamatan Medan Timur menggelar Posyandu Remaja di Wilayahnya, Kamis (4/5) Lurah Pulo Brayan Bengkel Baru Medan Efendi Gurusinga mengatakan Posyandu remaja ini dilakukan secara rutin setiap bulannya dan sudah berlangsung selama setahun terakhir " Hal ini sejalan dengan Program Prioritas dari Pak Wali kota Bobby Nasution dan instruksi dari Camat Medan Timur Noor Alfi Pane yang meminta untuk merealisasikan Masalah kesehatan bagi warga Medan, Dan salah satu langkah yang kami lakukan adalah menggelar Posyandu Remaja ini dengan berkolaborasi dengan sejumlah pihak seperti Puskesmas Glugur Darat, “ Jelasnya Effendi juga menjelaskan, Posyandu Remaja ini bukan saja dilakukan sebagai salah satu langkah untuk melakukan pemeriksaan kesehatan bagi para remaja saja, tetapi juga menjadi cara untuk mencegah prilaku-prilaku negatif yang rentan terjadi pada para remaja',
            'gambar' => 'foto/publikasi/default.png',
            'slug' => 'posyandu-remaja-keren-langkah-kelurahan-pulo-brayan-bengkel-baru-edukasi-kesehatan-dan-antisipasi-prilaku-negatif-para-remaja',
        ]);
        // make example data for table berita
        DB::table('berita')->insert([
            'user_id' => 1,
            'kategori_berita_id' => 1,
            'judul' => 'Terima Komnas Anti Kekerasan Terhadap Perempuan, Bobby Nasution: Perlu Edukasi Agar Korban Melapor',
            'tanggal_rilis' => '2023-04-23',
            'deskripsi' => 'Kekerasan terhadap perempuan dan anak merupakan persoalan yang harus diselesaikan. Kerap kali korban kekerasan tidak menyuarakan apa yang mereka alami, baik itu kekerasan secara fisik, mental, maupun seksual. Bahkan, tidak sedikit di antara korban yang kesulitan melapor atau tidak berani untuk melaporkan atas kekerasan yang mereka alami. Wali Kota Medan Bobby Nasution menyampaikan hal ini saat menerima Kunjungan Komisi Nasional Anti Kekerasan Terhadap Perempuan di Balai Kota, Kamis (4/5). Selain bersilaturahmi, kedatangan Komnas Anti Kekerasan Terhadap Perempuan ini bertujuan untuk Dialog Dalam Rangka Pemahaman Atas Segala Bentuk Kekerasan Terhadap Perempuan di Indonesia Termasuk Dalam Hal Pelanggaran HAM Berat di Masa Lalu yang Berdampak Pada Perempuan.',
            'gambar' => 'foto/berita/default.png',
            'slug' => 'terima-komnas-anti-kekerasan-terhadap-perempuan-bobby-nasution-perlu-edukasi-agar-korban-melapor',
        ]);
        // make example data for table galeri
        DB::table('galeri')->insert([
            'user_id' => 1,
            'kategori_galeri_id' => 1,
            'judul' => 'judul',
            'gambar' => 'foto/galeri/default.png',
        ]);
        DB::table('kepengurusans')->insert([
            'periode' => "2022/2023",
            'konten' => 'judul',
        ]);

    }
}
