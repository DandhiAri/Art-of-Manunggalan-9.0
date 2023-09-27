<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Xendit\Xendit;
use Illuminate\Support\Str;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function __construct() {
        // $apiKey = config('services.xendit.api_key');
        Xendit::setApiKey("xnd_development_q3fBAB2WHR9GgS1k2bvdRtbjPcdYr8oel2Y717ZR2hM1LQJO40R9Mzofn1oCHwS");
    }
    public function create(Request $req){
        $params = [
            'external_id' => (string) Str::uuid(),
            'payer_email' => $req->payer_email,
            'description' => $req->description,
            'amount' => $req->amount,
            'redirect_url' => '/'
        ];
        $CreateInvoice = \Xendit\Invoice::create($params);

        //save
        $payment = new Payment;
        $payment->status = 'pending';
        $payment->chekout_link = $CreateInvoice ['invoice_url'];
        $payment->external_id = $params['external_id'];
        $payment->save();

        return response()->json(['data'=>  $CreateInvoice ['invoice_url']]);
    }
}
