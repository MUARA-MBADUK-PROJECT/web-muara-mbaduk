<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBerita extends Controller
{
    //
    public function index()
    {
        $hotNews = [

            'id_news' => '1',
            'title' => 'Cara Seru Habiskan Akhir Tahun, Wisata Camping Ciamik di Banyuwangi Yuk!',
            'sumary' => 'Destinasi wisata di Banyuwangi kembali berbenah menyambut kunjungan wisata akhir tahun 2022 ',
            'release' => '29 Desember 2022',
            'img' => 'https://awsimages.detik.net.id/community/media/visual/2022/12/09/muara-mbaduk-banyuwangi-2_169.jpeg?w=620'

        ];
        $news = [
            [
                'id_news' => '1',
                'title' => 'Cara Seru Habiskan Akhir Tahun, Wisata Camping Ciamik di Banyuwangi Yuk!',
                'summary' => 'Destinasi wisata di Banyuwangi kembali berbenah menyambut kunjungan wisata akhir tahun 2022 ',
                'release' => '29 Desember 2022',
                'img' => 'https://awsimages.detik.net.id/community/media/visual/2022/12/09/muara-mbaduk-banyuwangi-2_169.jpeg?w=620'
            ],
            [
                'id_news' => '2',
                'title' => 'Menjelajahi Keindahan Alam Banyuwangi Melalui Camping di Pulau Merah',
                'summary' => 'Pulau Merah di Banyuwangi menjadi destinasi camping yang menarik dengan pantai berpasir merah dan pemandangan laut yang memukau.',
                'release' => '15 Januari 2023',
                'img' => 'https://www.nativeindonesia.com/wp-content/uploads/2017/10/pulau-merah-banyuwangi.jpg'
            ],

            [
                'id_news' => '3',
                'title' => 'Keseruan Camping di Kawah Ijen Banyuwangi',
                'summary' => 'Berkemah di kawasan Kawah Ijen Banyuwangi adalah pengalaman unik dengan pemandangan indah kawah dan api biru yang terkenal.',
                'release' => '5 Februari 2023',
                'img' => 'https://www.banyuwangitourism.com/wp-content/uploads/2016/07/Kawah-Ijen-Banyuwangi-Banyuwangi-Tourism-Society.jpg'
            ],

            [
                'id_news' => '4',
                'title' => 'Wisata Alam Seru, Camping di Hutan Baluran Banyuwangi',
                'summary' => 'Hutan Baluran di Banyuwangi menawarkan pengalaman camping yang seru dengan hewan liar, savana, dan pantai yang eksotik.',
                'release' => '20 Maret 2023',
                'img' => 'https://1.bp.blogspot.com/-XjKc7zHRnSo/Xw04ZSn4m4I/AAAAAAAARHg/VEwbLtTwODIHKNNsTnrTcMqg3_Z6UxpnQCLcBGAsYHQ/w640-h426/baluran1.jpg'
            ],

            [
                'id_news' => '5',
                'title' => 'Sensasi Camping di Pantai Plengkung Banyuwangi, Surga Surfing di Indonesia',
                'summary' => 'Pantai Plengkung atau G-Land di Banyuwangi adalah destinasi camping yang populer bagi penggemar surfing dengan ombak yang epik.',
                'release' => '10 April 2023',
                'img' => 'https://www.nativeindonesia.com/wp-content/uploads/2016/12/plengkung-11-1.jpg'
            ],

            [
                'id_news' => '6',
                'title' => 'Kemah Romantis di Pantai Boom Banyuwangi, Menyaksikan Keindahan Sunrise',
                'summary' => 'Pantai Boom di Banyuwangi menawarkan pengalaman camping romantis dengan panorama pantai yang memesona dan matahari terbit yang memukau.',
                'release' => '25 Mei 2023',
                'img' => 'https://www.nativeindonesia.com/wp-content/uploads/2017/01/pantai-boom.jpg'
            ]
        ];
        return view('guest.pages.berita', ['hotNews' => $hotNews, 'news' => $news]);
    }

    public function getConten($id)
    {
        return "ini akan menjadi page berita $id";
    }
}
