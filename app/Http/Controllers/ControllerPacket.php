<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryPackage;
use App\Repository\RepositoryProduct;
use App\View\Components\cards\Packet;
use Illuminate\Http\Request;

class ControllerPacket extends Controller
{
    //

    private $repo;
    private $repoProd;

    public function __construct() {
        $this->repo = new RepositoryPackage();
        $this->repoProd = new RepositoryProduct();
    }
    public function index()
    {
        $data = $this->repo->getAll();

        return view('transaction.pages.list-paket', ['data' => $data->data]);
    }

    public function getBySlug($slug)
    {
        $packet = $this->repo->getOne($slug);

        $reviews = [
            [
                'id_review' => '1',
                'name' => 'Mamang Racing',
                'img' => 'https://qph.cf2.quoracdn.net/main-qimg-c2108cee7b7917f80d8f6182a7a0a8ee-lq',
                'star' => 5,
                'comment' => 'First time mengunjungi wisata muara mbaduk merupakan pengalaman yang mengesankan buat saya.
                Kunjungan saya kali ini untuk berkemah dengan pacar saya. Ada berbagai macam pilihan layanan camping yang
                disediakan di wisata ini.'
            ],
            [
                'id_review' => '2',
                'name' => 'Nadia Sari',
                'img' => 'https://example.com/nadia-sari.jpg',
                'star' => 4,
                'comment' => 'Wisata Muara Mbaduk sangat indah dan cocok untuk menghabiskan waktu liburan bersama keluarga. Pemandangannya sangat menakjubkan dan suasana di sini sangat tenang. Anak-anak saya juga senang bermain di area bermain yang disediakan.'
            ],
            [
                'id_review' => '3',
                'name' => 'Budi Hermawan',
                'img' => 'https://example.com/budi-hermawan.jpg',
                'star' => 3,
                'comment' => 'Saya mengunjungi Wisata Muara Mbaduk pada akhir pekan. Lokasinya cukup mudah diakses dan parkirannya luas. Sayangnya, fasilitas yang ada masih terbatas, seperti toilet dan tempat makan. Namun, pemandangan alamnya sangat bagus dan cocok untuk berfoto-foto.'
            ],
            [
                'id_review' => '4',
                'name' => 'Rina Wijayanti',
                'img' => 'https://example.com/rina-wijayanti.jpg',
                'star' => 2,
                'comment' => 'Saya merasa kurang puas dengan pengalaman saya di Wisata Muara Mbaduk. Pemandangan bagus, tapi fasilitasnya kurang memadai. Tempatnya juga agak terpencil dan jalan menuju ke sana cukup rusak. Harga tiket masuknya juga tergolong mahal.'
            ]



        ];
        return view('transaction.pages.detail-packet', ['packet' => $packet->data, 'reviews' => $reviews]);
    }

    public function getMoreReviews()
    {
        $reviews = [
            ['id_review' => '5',    'name' => 'Hendra Pratama',    'img' => 'https://example.com/hendra-pratama.jpg',    'star' => 3,    'comment' => 'Saya memiliki pengalaman yang cukup baik di Wisata Muara Mbaduk. Pemandangan yang indah dan suasana yang tenang. Namun, fasilitas yang disediakan masih perlu ditingkatkan.'],
            ['id_review' => '6',    'name' => 'Siti Nurhayati',    'img' => 'https://example.com/siti-nurhayati.jpg',    'star' => 5,    'comment' => 'Saya sangat terkesan dengan Wisata Muara Mbaduk. Pemandangan alamnya sangat memukau dan fasilitas yang ada sudah cukup baik. Harga tiket masuknya juga cukup terjangkau.'],
            [
                'id_review' => '7',
                'name' => 'Budi Setiawan',
                'img' => 'https://example.com/budi-setiawan.jpg',
                'star' => 4,
                'comment' => 'Wisata Muara Mbaduk adalah tempat yang cocok untuk bersantai dan menikmati alam. Fasilitas yang ada sudah cukup lengkap dan pelayanan yang ramah. Namun, akses jalan menuju ke sana masih perlu diperbaiki.'
            ],
            [
                'id_review' => '8',
                'name' => 'Linda Sari',
                'img' => 'https://example.com/linda-sari.jpg',
                'star' => 1,
                'comment' => 'Saya sangat kecewa dengan pengalaman saya di Wisata Muara Mbaduk. Pemandangan bagus, tapi fasilitasnya sangat minim dan kurang terawat. Harga tiket masuknya terlalu mahal untuk fasilitas yang diberikan.'
            ],
            ['id_review' => '9',    'name' => 'Ahmad Santoso',    'img' => 'https://example.com/ahmad-santoso.jpg',    'star' => 3,    'comment' => 'Saya merasa cukup puas dengan kunjungan saya ke Wisata Muara Mbaduk. Pemandangan alamnya indah, namun fasilitas yang ada masih perlu ditingkatkan. Harga tiket masuknya cukup wajar.']

        ];

        return json_encode($reviews);
    }

    public function viewCustom()
    {
        $products = $this->repoProd->getAll();

        return view('transaction.pages.custom-packet',['products'=>$products]);
    }

    public function sendCustom(Request $request)
    {
        dd($request);
    }
}
