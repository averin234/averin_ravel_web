<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApikaryawanController extends Controller
{
    public function APIkaryawan()
    {
        $karyawan_manager = array(
            array(
                'nama' => 'PUJI RUSDIANTO',
                'image' => 'assets/images/karyawan/puji.JPG',
                'jabatan' => 'Manager Development Operations Engineer',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'WAHIDIN',
                'image' => 'assets/images/karyawan/wahid.JPG',
                'jabatan' => 'Manager Research & Development',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'ABDUL BASHIR WICAKSONO',
                'image' => 'assets/images/karyawan/bashir.JPG',
                'jabatan' => 'Development Lead',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'FAJAR ERI IRIANTO',
                'image' => 'assets/images/karyawan/fajar.JPG',
                'jabatan' => 'Network Engineer, System Administrator',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'BAGASKARA FADILLAH AKBAR',
                'image' => 'assets/images/bagas.jpg',
                'jabatan' => 'Manager Bussiness Process',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'ANFRI ENGKY',
                'image' => 'assets/images/karyawan/engky.JPG',
                'jabatan' => 'Manager Customer Implementation System',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'ELIYA SOEKAMTO',
                'image' => 'assets/images/alyias.jpg',
                'jabatan' => 'Manager Marketing',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'DARMAWAN DARMAYANTO',
                'image' => 'assets/images/karyawan/pato.JPG',
                'jabatan' => 'Development Lead',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
        );
        
        $karyawan_developer = array(
            array(
                'nama' => 'MUHAMMAD TAUFIK RAMADHAN',
                'image' => 'assets/images/opik.jpg',
                'jabatan' => 'Mobile & Backend Developer',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'KHOLIS MAULANA FIRDAUS',
                'image' => 'assets/images/karyawan/kholis.JPG',
                'jabatan' => 'Web Engineer',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'ANGGI DWI SUMIYADI',
                'image' => 'assets/images/anggi.png',
                'jabatan' => 'Web Engineer',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'REMO HARSONO',
                'image' => 'assets/images/karyawan/remo.JPG',
                'jabatan' => 'Web Engineer, System Administrator',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'IRWAN SETIAWAN',
                'image' => 'assets/images/karyawan/irwan.JPG',
                'jabatan' => 'Mobile & Frontend Developer',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'ADNI MAULUDDIN',
                'image' => 'assets/images/karyawan/adni.JPG',
                'jabatan' => 'Web Engineer',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
        );
        
        $karyawan_cis = array(
            array(
                'nama' => 'NUR CHOTIMAH',
                'image' => 'assets/images/karyawan/nur.JPG',
                'jabatan' => 'Customer Implementation System',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'DYAH AYU NAWANGWULAN',
                'image' => 'assets/images/karyawan/ayu.JPG',
                'jabatan' => 'Customer Implementation System',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'ESYA DWI OKTVIANI',
                'image' => 'assets/images/karyawan/esya.JPG',
                'jabatan' => 'Customer Implementation System',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'MAMAN',
                'image' => 'assets/images/kosong.png',
                'jabatan' => 'Customer Implementation System',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'BOBBY MALAU SITUMPAL',
                'image' => 'assets/images/karyawan/bobby.JPG',
                'jabatan' => 'Customer Implementation System',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'ASEP YUDI',
                'image' => 'assets/images/karyawan/asep.JPG',
                'jabatan' => 'Customer Implementation System',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
        );
        
        $karyawan_office = array(
            array(
                'nama' => 'APRIL',
                'image' => 'assets/images/kosong_cw.jpg',
                'jabatan' => 'Sekretaris Korporat',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'NADIA NUR AZZIZAH',
                'image' => 'assets/images/karyawan/nadiah.JPG',
                'jabatan' => 'Customer Administrator',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'CHAFIDZ',
                'image' => 'assets/images/apis.jpeg',
                'jabatan' => 'Office',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
            array(
                'nama' => 'SADAM',
                'image' => 'assets/images/sadam.jpeg',
                'jabatan' => 'Office',
                'linkedin' => 'https://www.linkedin.com/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'gmail' => 'https://mail.google.com/',
            ),
        );
        return response()->json($karyawan_manager);
    }
}
