<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //

    public function index(){
        $products=products::all();
        return view('products.index',compact($products));
    }


    public function show($id){
        $products=products::find($id);
        return view('products.show',compact($products));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){


        Auth::user()->products()->created($request->except('_token'));
        return redirect('products');
    }
}
