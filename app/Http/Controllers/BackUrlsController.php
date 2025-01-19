<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MlResponse;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\client\MercadoPagoClient;

class BackUrlsController extends Controller
{
    public function success(Request $request){
        try {
            if ($request->payment_id) {
                MlResponse::create(['payment_id' => $request->payment_id]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        return response('ok');
    }

    public function pending(Request $request){
        try {
            if ($request->payment_id) {
                MlResponse::create(['payment_id' => $request->payment_id]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        return response('ok');
    }

    public function failure(Request $request){
        try {
            if ($request->payment_id) {
                MlResponse::create(['payment_id' => $request->payment_id]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        return response('ok');
    }

    public function webhooks(Request $request){
        try {
            MercadoPagoConfig::setAccessToken("APP_USR-8013625678437650-011812-f50e9eb540bdb9b2f8e14d3ce4a614c9-1807710409");
            
            switch($request->type) {
                case "payment":
                    $payment = new PaymentClient();
                    $payment = $payment->get($request->data["id"]);
                    MlResponse::create(['payment_id' => $request->payment_id]);
                    break;
 }
        } catch (\Throwable $th) {
            //throw $th;
        }
        return response('ok');
    }

}
