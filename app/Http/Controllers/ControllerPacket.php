<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPacket extends Controller
{
    //
    public function index()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'standar',
                'price' => 1500000,
                'img' => 'https://down-id.img.susercontent.com/file/9e7d9d14b0cbc3d28b7d73a6aa04547d',
                'list' => [
                    'tenda 2',
                    'kursi lipat 1',
                    'Matras 1',
                    'Lampu Tenda 1',
                    'Kompor dan Gas Kaleng 1',
                    'panci',
                    'Cangkir 2',
                    'Sendok Garbu'
                ],
            ],
            [
                'id' => '2',
                'name' => 'deluxe',
                'price' => 2500000,
                'img' => 'https://cdn.shopify.com/s/files/1/2216/6909/products/genie_20210427164153631_5139053899_1c9c42a7-fee8-4260-8472-88efb066400f.jpg?v=1620094884',
                'list' => [
                    'tenda 4',
                    'kursi lipat 2',
                    'Matras 2',
                    'Lampu Tenda 2',
                    'Kompor dan Gas Kaleng 2',
                    'panci besar',
                    'Cangkir 4',
                    'Sendok Garpu'
                ]
            ],
            [
                'id' => '3',
                'name' => 'premium',
                'price' => 4000000,
                'img' => 'https://cdn.shopify.com/s/files/1/2216/6909/products/VILLAGE17Artboard5.jpg?v=1675345647',
                'list' => [
                    'tenda 6',
                    'kursi lipat 4',
                    'Matras 4',
                    'Lampu Tenda 3',
                    'Kompor dan Gas Kaleng 3',
                    'panci besar',
                    'Cangkir 6',
                    'Sendok Garpu'
                ],
            ],
            [
                'id' => '4',
                'name' => 'economy',
                'price' => 1000000,
                'img' => 'https://sc04.alicdn.com/kf/H4ef996a085ef439798e111e4cbc1a4baE.png',
                'list' => [
                    'tenda 1',
                    'kursi lipat 1',
                    'Matras 1',
                    'Lampu Tenda 1',
                    'Kompor dan Gas Kaleng 1',
                    'panci kecil',
                    'Cangkir 1',
                    'Sendok Garpu'
                ],
            ],
            [
                'id' => '5',
                'name' => 'family',
                'price' => 5000000,
                'img' => 'https://speedsindo.com/wp-content/uploads/2022/11/%E4%B8%BB%E5%9B%BE-01-24.jpg',
                'list' => [
                    'tenda 8',
                    'kursi lipat 6',
                    'Matras 6',
                    'Lampu Tenda 4',
                    'Kompor dan Gas Kaleng 4',
                    'panci besar',
                    'Cangkir 8',
                    'Sendok Garpu'
                ],
            ],
            [
                'id' => '6',
                'name' => 'backpacker',
                'price' => 750000,
                'img' => 'https://images-cdn.ubuy.co.id/63580acd30e4a434e572e224-1-2-person-backpacking-tent-and-camping.jpg',
                'list' => [
                    'tenda 1',
                    'sleeping bag',
                    'kompor portable',
                    'Gas Kaleng',
                    'sendok, garpu, pisau lipat'
                ],
            ]
        ];

        return view('transaction.pages.list-paket', ['data' => $data]);
    }

    public function getById($id)
    {
        $packet = [
            'id' => '1',
            'name' => 'standar',
            'price' => 1500000,
            'img' => 'https://down-id.img.susercontent.com/file/9e7d9d14b0cbc3d28b7d73a6aa04547d',
            'summary' => 'Paket camping yang ditujukan untuk empat orang dengan fasilitas yang lengkap dan nyaman',
            'description' => 'Paket camping yang ditujukan untuk empat orang dengan fasilitas
            yang lengkap dan nyaman. serta juga menyediakan fasilitas tambahan seperti
            toilet dan gratis pemsangan tenda.',
            'list' => [
                'tenda 2',
                'kursi lipat 1',
                'Matras 1',
                'Lampu Tenda 1',
                'Kompor dan Gas Kaleng 1',
                'panci',
                'Cangkir 2',
                'Sendok Garbu'
            ],
        ];

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
        return view('transaction.pages.detail-packet', ['packet' => $packet, 'reviews' => $reviews]);
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
        $item = [
            [
                'id'=>'1',
                'name'=>'Tenda Tendaki Kap. 2 Orang',
                'price'=> 60000,
                'img'=>'https://lzd-img-global.slatic.net/g/ff/kf/Se6130fd3372f4733b5a5d953d25d3355U.jpg_720x720q80.jpg_.webp'
            ],
            [
                'id'=>'2',
                'name'=>'Tenda Miss Borneo Kap. 2 Orang',
                'price'=> 80000,
                'img'=>'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/7/13/edef4102-eeeb-460a-bf55-22674e362158.jpg'
            ],
            [
                'id'=>'3',
                'name'=>'Tenda Miss Borneo Kap. 4 Orang',
                'price'=> 100000,
                'img'=>'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/3/5/d749547b-df7f-4853-9404-dfc59df36412.jpg'
            ],
            [
                'id'=>'4',
                'name'=>'Kompor',
                'price'=> 20000,
                'img'=>'https://s2.bukalapak.com/img/256104419/large/KOMPOR_PORTABLE_MINI_WINDPROOF__KOMPOR_CAMPING.jpg'
            ],
            [
                'id'=>'5',
                'name'=>'Gas Kaleng',
                'price'=> 15000,
                'img'=>'https://assets.klikindomaret.com/share/10037809/10037809_1.jpg'
            ],
            [
                'id'=>'7',
                'name'=>'Nesting / alat Masak',
                'price'=> 10000,
                'img'=>'https://images.tokopedia.net/img/cache/700/product-1/2015/10/22/237827/237827_184450f5-fcc5-4744-93cf-2242d4b130fb.jpg'
            ],
            [
                'id'=>'8',
                'name'=>'Meja Caping',
                'price'=> 15000,
                'img'=>'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//84/MTA-33312700/no_brand_meja_camping-meja_lipat_cordura-size_m_full01_eghttk7v.jpg'
            ],
            [
                'id'=>'9',
                'name'=>'Matras Lebar 80 x 60 cm',
                'price'=> 10000,
                'img'=>'https://cf.shopee.co.id/file/535559d6bb376c5f519aa0ab749da54c'
            ],
            [
                'id'=>'10',
                'name'=>'Cangkir',
                'price'=> 5000,
                'img'=>'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/12/19/1670c688-1834-4e72-8f9e-57a31f58c6a1.jpg'
            ],
            [
                'id'=>'11',
                'name'=>'Sendok dan Garbu',
                'price'=> 5000,
                'img'=>'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-42289408/no-brand_no-brand_full01.jpg'
            ],
            [
                'id'=>'12',
                'name'=>'jumlah Peserta',
                'price'=> 5000,
                'img'=>'https://static.vecteezy.com/system/resources/thumbnails/005/545/335/small/user-sign-icon-person-symbol-human-avatar-isolated-on-white-backogrund-vector.jpg'
            ],
        ];

        return view('transaction.pages.custom-packet',['item'=>$item]);
    }

    public function sendCustom(Request $request)
    {
        dd($request);
    }
}
