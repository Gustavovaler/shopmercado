<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MlResponse;

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
            if ($request->payment_id) {
                MlResponse::create(['payment_id' => $request->payment_id]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        return response('ok');
    }

}
