<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;


class ProductController extends Controller
{
    public function index(){
        $products =  Product::all();
        return view('products.index', compact('products'));
    }

    public function checkout(Request $request){
        MercadoPagoConfig::setAccessToken('APP_USR-8013625678437650-011812-f50e9eb540bdb9b2f8e14d3ce4a614c9-1807710409');
        MercadoPagoConfig::setIntegratorId('24c65fb163bf11ea96500242ac130004');
        $sale = Product::find($request->input('product_id'));

        $client = new PreferenceClient();
        $preference = $client->create([
        "excluded_payment_methods" => [["id" => "visa"]],
        "installments" => 6,
        "items"=> array(
            array(
            "title" => $sale->name,
            "quantity" => 1,
            "unit_price" => $sale->price,
            "currency_id" => "ARS",
            )
            ),
        "back_urls"=> [
            "success" =>  "https://stockapp.store/back_urls/success",
            "pending" =>  "https://stockapp.store/back_urls/pending",
            "failure" =>  "https://stockapp.store/back_urls/failure"
        ],
        "external_reference" => "1643827245",
        
        ]);
        return view('products.checkout', compact('sale', 'preference'));
    }
}
