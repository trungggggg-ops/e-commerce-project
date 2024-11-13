<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generate()
    {
        $bankAccount = '1234567890';
        $bankName = 'ABC Bank';
        $amount = 100000;
        $content = "Bank: $bankName\nAccount: $bankAccount\nAmount: $amount";

        $qrCode = QrCode::size(300)->generate($content);

        return view('qrcode', compact('qrCode'));
    }
}
