<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiSuperioritysController extends Controller
{
    public function APISuperioritys()
    {
        $superioritys = array(
            array(
                'title' => 'Kelengkapan Product Averin',
                'description' => 'Seluruh Produk Averin dilengkapi dengan Manual Book, Technical Book, CD Aplikasi, dan beberapa telah terdaftar di Hak Cipta Intelektual (HAKI)',
            ),
            array(
                'title' => 'Webbase Aplication',
                'description' => 'Pengembangan produk menggunakan Teknologi berbasis Webbase Aplication dan Mobile Application',
            ),
            array(
                'title' => 'Kelompok Produk',
                'description' => 'Product AVerin dibagi menjadi 3 Katagori yaitu : Product Healthcare, Office Automation, Enginering & ERP',
            ),
            array(
                'title' => 'Masterpiece Averin',
                'description' => 'Product AVerin dibagi menjadi 3 Katagori yaitu : Product Healthcare, Office Automation, Enginering & ERP',
            ),
        );

        return response()->json($superioritys);
    }
}
