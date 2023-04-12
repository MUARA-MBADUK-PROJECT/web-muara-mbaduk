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
        $data = [
            'id_news' => '1',
            'title' => 'Cara Seru Habiskan Akhir Tahun, Wisata Camping Ciamik di Banyuwangi Yuk!',
            'release' => '29 Desember 2022',
            'img' => 'https://awsimages.detik.net.id/community/media/visual/2022/12/09/muara-mbaduk-banyuwangi-2_169.jpeg?w=620',
            'conten' => 'Berta, seorang wisatawan yang gemar menjelajahi berbagai destinasi wisata, telah merencanakan perjalanan wisata ke Banyuwangi pada akhir tahun 2022. Dia sangat bersemangat karena mendengar bahwa destinasi wisata di Banyuwangi telah melakukan berbagai perbaikan dan pembenahan untuk menyambut kunjungan wisatawan di akhir tahun tersebut.

            Di paragraf pertama, Berta merencanakan perjalanannya ke Banyuwangi, mempertimbangkan waktu akhir tahun sebagai waktu yang ideal untuk mengunjungi daerah tersebut.
            
            Di paragraf kedua, Berta merasa antusias dengan kabar bahwa destinasi wisata di Banyuwangi telah berbenah diri. Mungkin ada perbaikan infrastruktur, peningkatan fasilitas, atau upaya konservasi yang telah dilakukan, yang membuatnya semakin bersemangat untuk mengunjungi daerah tersebut.
            
            Di paragraf ketiga, Berta mulai mempersiapkan perjalanan wisatanya. Dia mungkin merencanakan rute perjalanan, memesan akomodasi, atau mencari informasi tentang atraksi wisata yang ingin dia kunjungi di Banyuwangi.
            
            Di paragraf keempat, Berta berbicara tentang ekspektasinya terhadap perjalanan wisata ke Banyuwangi. Mungkin dia berharap dapat menikmati keindahan alam, menjelajahi budaya lokal, atau mencicipi kuliner khas daerah tersebut.
            
            Di paragraf kelima, Berta berbicara tentang harapannya untuk mendapatkan pengalaman wisata yang tak terlupakan di Banyuwangi. Dia mungkin mengharapkan dapat bertemu dengan penduduk lokal, belajar tentang kearifan lokal, atau mengabadikan momen indah dalam perjalanan wisatanya.
            
            Di paragraf keenam, Berta mungkin berbicara tentang hal-hal yang ingin dia lakukan atau tempat-tempat yang ingin dia kunjungi di Banyuwangi, seperti menjelajahi Taman Nasional Baluran, menjelajahi Kawah Ijen, atau mengunjungi Pantai Pulau Merah.
            
            Di paragraf ketujuh, Berta bisa merencanakan kegiatan atau acara khusus yang ingin dia ikuti di Banyuwangi, seperti festival budaya atau acara wisata yang diadakan pada akhir tahun, yang akan menjadi highlight perjalanan wisatanya.
            
            Dengan tujuh paragraf ini, kita bisa menjelaskan lebih detail tentang bagaimana Berta merencanakan dan mengharapkan perjalanannya ke Banyuwangi pada akhir tahun 2022.'
        ];
        return view('guest.pages.detail-berita',['data'=>$data]);
    }

    public function getMoreNews($start)
    {
        $news = [
            [
                'id_news' => '7',
                'title' => '7 Tempat Wisata Tersembunyi di Indonesia yang Wajib Dikunjungi',
                'summary' => 'Nikmati keindahan alam Indonesia melalui 7 tempat wisata tersembunyi yang masih jarang dikunjungi oleh wisatawan.',
                'release' => '12 Januari 2023',
                'img' => 'https://example.com/gambar7.jpg'
            ],
            ['id_news' => '8',        'title' => 'Ternyata, Ini Rahasia Kecantikan Kulit Artis Korea yang Bisa Dicoba di Rumah',        'summary' => 'Tahukah Anda rahasia kecantikan kulit artis Korea? Temukan tips dan triknya yang bisa dicoba di rumah!',        'release' => '15 Januari 2023',        'img' => 'https://example.com/gambar8.jpg'],
            ['id_news' => '9',        'title' => '7 Aktivitas Seru untuk Liburan Akhir Pekan di Bali',        'summary' => 'Rencanakan liburan akhir pekan Anda di Bali dengan 7 aktivitas seru yang bisa dinikmati bersama keluarga atau teman.',        'release' => '19 Januari 2023',        'img' => 'https://example.com/gambar9.jpg'],
            ['id_news' => '10',        'title' => '5 Cara Menjaga Kesehatan Mental di Tengah Kehidupan yang Padat',        'summary' => 'Jaga kesehatan mental Anda dengan 5 cara sederhana yang dapat diterapkan di tengah rutinitas yang padat.',        'release' => '22 Januari 2023',        'img' => 'https://example.com/gambar10.jpg'],
            ['id_news' => '11',        'title' => 'Tips Memilih Baju Olahraga yang Tepat untuk Menunjang Performa',        'summary' => 'Pilihlah baju olahraga yang tepat untuk meningkatkan performa Anda saat berolahraga. Temukan tipsnya di sini!',        'release' => '25 Januari 2023',        'img' => 'https://example.com/gambar11.jpg'],
            ['id_news' => '12',        'title' => '7 Resep Makanan Lezat yang Bisa Dibuat di Rumah untuk Keluarga',        'summary' => 'Dapatkan inspirasi masakan lezat untuk keluarga dengan 7 resep makanan yang mudah dan praktis untuk dibuat di rumah.',        'release' => '28 Januari 2023',        'img' => 'https://example.com/gambar12.jpg'],
            ['id_news' => '13',        'title' => '10 Ide Kegiatan Seru untuk Anak Selama Liburan Sekolah',        'summary' => 'Bingung mencari ide kegiatan seru untuk anak selama liburan sekolah? Berikut 10 ide kegiatan yang bisa dicoba!',        'release' => '1 Februari']
        ];

        return json_encode($news);
    }
}
