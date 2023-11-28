<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApidescriptionController extends Controller
{
    public function APIdescription()
    {
        $description =
    array(
        'nama' => 'PT. Averin Informatika Teknologi',
        'description' => 'Dibangun tahun 2001 yaitu melakukan pembuatan Sistem Aplikasi Kesehatan, Pembuatan produk sistem aplikasi ini dimulai dengan melakukan riset di bidang sistem Pelayanan dan Manajemen Rumah Sakit dan dengan dibantu para ahli di bidang pengelolaan Rumah Sakit.',
        'title' => 'PT. Averin telah berdiri sejak tahun 1999 untuk menyediakan solusi IT untuk mitra kerja dengan teknologi terkini yang tepat guna sehingga dapat mempermudah alur kerja para mitra.',
        'alamat' => 'Gedung Graha Pulo, Ground Floor, Jl. Warung Buncit Raya No.89, RT.6/RW.3, Kalibata, Pancoran, Kota Jakarta Selatan. 12740',
        'link' => 'https://averin.co.id/',
        'logo' => 'assets/images/logo_averin.png',
        'copyright' => '© Copyright PT Averin Informatika. All Rights Reserved.',
        'kontak' => '+6221 79186448',
        'visimisi' => 'Hadir dalam rangka ikut berpartisipasi membangun dan memajukan telematika di Indonesia Menggunakan teknologi yang tepat guna sehingga para mitra kerja memperoleh hasil yang maksimal.',
        'poweredby' => ['assets/images/logo_averin1.png', 'assets/images/logo_privy.png', 'assets/images/logo_upg.png'],
    );
    return response()->json($description);
    }
}
