<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHistory extends Controller
{
    //
    public function index()
    {
        $data = [
            [
                'id' => 'MDK2602232233580',
                'date' => '26 Februari 2023',
                'person' => 5,
                'car' => 1,
                'bike' => 0,
                'payment_method' => 'Bayar Ditempat',
                'total' => 45000,
                'status' => 'Menunggu Pembayaran'
            ],
            [
                'id' => 'MDK2802230930211',
                'date' => '28 Februari 2023',
                'person' => 2,
                'car' => 0,
                'bike' => 2,
                'payment_method' => 'Transfer Bank',
                'total' => 60000,
                'status' => 'Sudah Dibayar'
            ],

            [
                'id' => 'MDK0103231203145',
                'date' => '01 Maret 2023',
                'person' => 1,
                'car' => 0,
                'bike' => 1,
                'payment_method' => 'Bayar Ditempat',
                'total' => 25000,
                'status' => 'Menunggu Pembayaran'
            ],

            [
                'id' => 'MDK0303231547423',
                'date' => '03 Maret 2023',
                'person' => 3,
                'car' => 1,
                'bike' => 2,
                'payment_method' => 'Transfer Bank',
                'total' => 90000,
                'status' => 'Sudah Dibayar'
            ],

            [
                'id' => 'MDK0503230815216',
                'date' => '05 Maret 2023',
                'person' => 4,
                'car' => 2,
                'bike' => 0,
                'payment_method' => 'Bayar Ditempat',
                'total' => 120000,
                'status' => 'Menunggu Pembayaran'
            ],

            [
                'id' => 'MDK0703231724130',
                'date' => '07 Maret 2023',
                'person' => 2,
                'car' => 1,
                'bike' => 1,
                'payment_method' => 'Transfer Bank',
                'total' => 70000,
                'status' => 'Sudah Dibayar'
            ]
        ];

        return view('users.pages.riwayat_pemesanan', ['data' => $data]);
    }
}
