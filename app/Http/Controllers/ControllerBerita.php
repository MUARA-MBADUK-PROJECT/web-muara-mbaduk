<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryNews;
use Illuminate\Http\Request;

class ControllerBerita extends Controller
{
    private $repo;

    public function __construct() {
        $this->repo = new RepositoryNews();;
    }
    //
    public function index()
    {
        $news = $this->repo->getAll();
        return view('guest.pages.news.index', ['news' => $news]);
    }

    public function getConten($slug)
    {
        $data = $this->repo->getByOne($slug);
        return view('guest.pages.news.detail',['data'=>$data->data]);
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
