<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generateQRcode()
    {
        //url yang ingin di ubah menjadi QRCode
        $url = "https://www.instagram.com/ndi.dil";

        //generate QRCode
        $qrcode = QRCode::size(300)->generate($url);

        //kirimke data view
        return view('home.qrcode', compact('qrcode'));


    }
}
