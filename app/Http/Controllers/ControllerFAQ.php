<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFAQ extends Controller
{
    //
    public function index()
    {
        $data = [
            [
                'id_faq' => '1',
                'question' => 'Apakah ada penjualan tiket di lokasi wisata muara mbaduk ?',
                'answer' => 'Seluruh pemesanan tiket WAJIB secara online melalui www.muarambaduk.info.

                Saat ini pemesanan dan penjualan tiket dilakukan secara online, pembayaran dilakukan pembayaran
                dengan  metode pembayaran langsung di pos layanan di lokasi sampai dan pembayaran secara tranfer
                melalui virtual accoun'
            ],
            [
                'id_faq' => '2',
                'question' => 'Bagaimana cara memesan tiket secara online di lokasi wisata Muara Mbaduk?',
                'answer' => 'Untuk memesan tiket secara online di lokasi wisata Muara Mbaduk, Anda dapat mengunjungi www.muarambaduk.info. Kemudian, pilih opsi "Pemesanan Tiket" dan ikuti langkah-langkah yang tertera untuk memilih jumlah tiket, tanggal kunjungan, dan metode pembayaran. Pembayaran dapat dilakukan secara langsung di pos layanan di lokasi atau melalui transfer virtual account.'
            ],

            [
                'id_faq' => '3',
                'question' => 'Apakah ada batasan jumlah tiket yang dapat dibeli secara online di lokasi wisata Muara Mbaduk?',
                'answer' => 'Ya, terdapat batasan jumlah tiket yang dapat dibeli secara online di lokasi wisata Muara Mbaduk. Setiap pengunjung diperbolehkan membeli maksimal 5 tiket per transaksi. Jika Anda membutuhkan lebih dari 5 tiket, maka harus melakukan transaksi berulang kali dengan menggunakan akun yang berbeda.'
            ],

            [
                'id_faq' => '4',
                'question' => 'Apakah tiket yang dibeli secara online dapat dikembalikan atau dibatalkan di lokasi wisata Muara Mbaduk?',
                'answer' => 'Tiket yang telah dibeli secara online di lokasi wisata Muara Mbaduk tidak dapat dikembalikan atau dibatalkan. Setelah melakukan pembayaran dan menerima tiket, transaksi dianggap final dan tidak dapat diubah. Oleh karena itu, pastikan untuk memeriksa kembali detail tiket sebelum melakukan pembayaran.'
            ],

            [
                'id_faq' => '5',
                'question' => 'Apakah anak-anak memerlukan tiket untuk masuk ke lokasi wisata Muara Mbaduk?',
                'answer' => 'Ya, anak-anak di atas 2 tahun memerlukan tiket untuk masuk ke lokasi wisata Muara Mbaduk. Harga tiket untuk anak-anak biasanya berbeda dengan harga tiket untuk dewasa. Pastikan untuk memeriksa informasi harga tiket untuk anak-anak sebelum melakukan pembelian tiket secara online atau di lokasi wisata.'
            ],

            [
                'id_faq' => '6',
                'question' => 'Apakah ada fasilitas parkir di lokasi wisata Muara Mbaduk?',
                'answer' => 'Ya, di lokasi wisata Muara Mbaduk terdapat fasilitas parkir yang dapat digunakan oleh pengunjung. Biaya parkir biasanya sudah termasuk dalam harga tiket masuk. Namun, pastikan untuk memeriksa kembali informasi terkait fasilitas parkir, termasuk biaya dan jam operasional, sebelum berkunjung ke lokasi wisata.'
            ]
        ];

        return view('guest.pages.faq',['data'=>$data]);
    }
}
