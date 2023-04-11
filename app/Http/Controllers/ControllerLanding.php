<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLanding extends Controller
{
    //
    public function index()
    {
        $packet = [
            [
                'id'=>'1',
                'name'=>'standar',
                'price'=>1500000,
                'img'=>'https://down-id.img.susercontent.com/file/9e7d9d14b0cbc3d28b7d73a6aa04547d',
                'list'=>[
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
                'id'=>'2',
                'name'=>'deluxe',
                'price'=>2500000,
                'img'=>'https://cdn.shopify.com/s/files/1/2216/6909/products/genie_20210427164153631_5139053899_1c9c42a7-fee8-4260-8472-88efb066400f.jpg?v=1620094884',
                'list'=>[
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
                    'id'=>'3',
                    'name'=>'premium',
                    'price'=>4000000,
                    'img'=>'https://cdn.shopify.com/s/files/1/2216/6909/products/VILLAGE17Artboard5.jpg?v=1675345647',
                    'list'=>[
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
                    'id'=>'4',
                    'name'=>'economy',
                    'price'=>1000000,
                    'img'=>'https://sc04.alicdn.com/kf/H4ef996a085ef439798e111e4cbc1a4baE.png',
                    'list'=>[
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
                    'id'=>'5',
                    'name'=>'family',
                    'price'=>5000000,
                    'img'=>'https://speedsindo.com/wp-content/uploads/2022/11/%E4%B8%BB%E5%9B%BE-01-24.jpg',
                    'list'=>[
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
                    'id'=>'6',
                    'name'=>'backpacker',
                    'price'=>750000,
                    'img'=>'https://images-cdn.ubuy.co.id/63580acd30e4a434e572e224-1-2-person-backpacking-tent-and-camping.jpg',
                    'list'=>[
                        'tenda 1',
                        'sleeping bag',
                        'kompor portable',
                        'Gas Kaleng',
                        'sendok, garpu, pisau lipat'
                    ],
                ]
            ];

            $data = [
                [
                    'id'=>'1',
                    'name'=>'standar',
                    'price'=>1500000,
                    'img'=>'https://down-id.img.susercontent.com/file/9e7d9d14b0cbc3d28b7d73a6aa04547d',
                    'list'=>[
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
                    'id'=>'2',
                    'name'=>'deluxe',
                    'price'=>2500000,
                    'img'=>'https://cdn.shopify.com/s/files/1/2216/6909/products/genie_20210427164153631_5139053899_1c9c42a7-fee8-4260-8472-88efb066400f.jpg?v=1620094884',
                    'list'=>[
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
                        'id'=>'3',
                        'name'=>'premium',
                        'price'=>4000000,
                        'img'=>'https://cdn.shopify.com/s/files/1/2216/6909/products/VILLAGE17Artboard5.jpg?v=1675345647',
                        'list'=>[
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
                        'id'=>'4',
                        'name'=>'economy',
                        'price'=>1000000,
                        'img'=>'https://sc04.alicdn.com/kf/H4ef996a085ef439798e111e4cbc1a4baE.png',
                        'list'=>[
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
                        'id'=>'5',
                        'name'=>'family',
                        'price'=>5000000,
                        'img'=>'https://speedsindo.com/wp-content/uploads/2022/11/%E4%B8%BB%E5%9B%BE-01-24.jpg',
                        'list'=>[
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
                        'id'=>'6',
                        'name'=>'backpacker',
                        'price'=>750000,
                        'img'=>'https://images-cdn.ubuy.co.id/63580acd30e4a434e572e224-1-2-person-backpacking-tent-and-camping.jpg',
                        'list'=>[
                            'tenda 1',
                            'sleeping bag',
                            'kompor portable',
                            'Gas Kaleng',
                            'sendok, garpu, pisau lipat'
                        ],
                    ]
                ];
    
        return view('guest.pages.landing',['packet'=>$packet]);    
    }
}
