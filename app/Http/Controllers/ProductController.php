<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct()
    {
        return view ('product.add_product');
    }
    public function saveProduct(Request $req)
    {
        //@dd($req);
        $validated = $req->validate([
            "productName"=>['required','min:4'],
            "productSerialNumber"=>['required','min:4'],
        ]);
        $data=product::create($validated);
        return redirect("product.productIndex")->with('success', 'A product has been added!');
    }


}
