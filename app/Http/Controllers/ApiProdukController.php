<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiProdukController extends Controller
{
    public function APIproduk()
    {
        $products = array(
            array(
                'nama' => 'Averin SIRs',
                'title' => 'Averin SIRS menyediakan paket - paket dengan harga yang sesuai dengan kebutuhan',
                'description' => 'Averin SIRS telah diuji dan dipercaya oleh Rumah Sakit untuk menjadi program standar',
                'link' => 'https://sirs.co.id',
                'image' => 'assets/images/AVerinSIRs.png',
            ),
            array(
                'nama' => 'D-Medis',
                'title' => 'Manajemen Pelayanan Klinik menggunakan Metode Clould',
                'description' => 'Aplikasi D-medis memudahkan Klinik dalam Melayani Pasien lebih cepat, mudah dan
                Akurat',
                'link' => 'https://d-medis.id',
                'image' => 'assets/images/D-medis.png',
            ),
            array(
                'nama' => 'a-Dokter',
                'title' => 'Aplikasi dokter berbasis cloud untuk meningkatkan kualitas pelayanan',
                'description' => 'Aplikasi dokter berbasis cloud untuk meningkatkan kualitas pelayanan praktek dokter
                mandiri',
                'link' => 'https://a-dokter.id',
                'image' => 'assets/images/A-Dokter.png',
            ),
            array(
                'nama' => 'Gateway RME-RS',
                'title' => 'Direct Sale Order dirancang untuk kebutuhan Apotik',
                'description' => 'Direct Sale Order dirancang untuk kebutuhan Apotik',
                'link' => 'https://rme.sirs.co.id',
                'image' => 'assets/images/RME.png',
            ),
            array(
                'nama' => 'AHS SIRs',
                'title' => 'AHS menyediakan paket - paket dengan harga yang sesuai dengan kebutuhan',
                'description' => 'AHS menyediakan paket - paket dengan harga yang sesuai dengan kebutuhan',
                'link' => 'https://rskita.id',
                'image' => 'assets/images/AHS.png',
            ),
            array(
                'nama' => 'SIMPONI',
                'title' => 'System HR terintegrasi dengan Payroll dan KPI',
                'description' => 'System HR terintegrasi dengan Payroll dan KPI',
                'link' => 'https://payroll.sirs.co.id',
                'image' => 'assets/images/simponi.jpg',
            ),
            array(
                'nama' => 'SIM Akreditasi',
                'title' => '',
                'description' => '',
                'link' => 'https://lafkespri.org',
                'image' => '',
            ),
            array(
                'nama' => 'Kreki-119',
                'title' => '',
                'description' => '',
                'link' => 'https://kreki.org',
                'image' => '',
            ),
            array(
                'nama' => 'e-Notaris',
                'title' => 'Sistem Administrasi Manajemen Kantor Notaris',
                'description' => 'Sistem Administrasi Manajemen Kantor Notaris',
                'link' => 'https://cnot.co.id',
                'image' => 'assets/images/cnot.jpg',
            ),
            array(
                'nama' => 'Averin e-Klinik',
                'title' => 'Manajemen Pelayanan Klinik menggunakan Metode Cloud',
                'description' => 'Averin merupakan Aplikasi Manajemen Pelayanan Klinik menggunakan Metode Cloud
                Application',
                'link' => 'https://d-medis.id',
                'image' => 'assets/images/e-klinik.jpg',
            ),
            array(
                'nama' => 'PBFKU',
                'title' => '',
                'description' => '',
                'link' => 'https://pbfku.averin.co.id',
                'image' => '',
            ),
            array(
                'nama' => 'SAM',
                'title' => 'System Apotik Mandiri berbasis Cloud Application',
                'description' => 'System Apotik Mandiri yang terintegrasi mulai dari pemesanan oleh Client, Work Order,
                penyiapan obat (termasuk obat racikan) sampai dengan pembayaran di kasir',
                'link' => 'https://sam.sirs.co.id',
                'image' => 'assets/images/sam.png',
            ),
            array(
                'nama' => 'LaboSS',
                'title' => '',
                'description' => '',
                'link' => '',
                'image' => '',
            ),
            array(
                'nama' => 'SIDIK',
                'title' => 'System Informasi Manajemen Pendidikan',
                'description' => 'System Informasi Manajemen Pendidikan',
                'link' => '',
                'image' => 'assets/images/sidik.jpg',
            ),
            array(
                'nama' => 'AMS Corporate',
                'title' => 'Administrasi Manajemen Surat Korporat',
                'description' => 'Administrasi Manajemen Surat Korporat',
                'link' => '',
                'image' => 'assets/images/laboos.jpg',
            ),
        );

        return response()->json($products);
    }
}
