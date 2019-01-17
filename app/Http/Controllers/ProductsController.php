<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\products;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //

    public function __Construct(){
        $this->middleware('auth')->only(['edit']);
    }


    public function index(){
        // $books=books::all();
        $products=products::with(['user'])->get();
        return view('products.index',compact('products'));
    }

    public function show($id){

        $products =products::find($id);
        //////////////////////////////////////////////////////
//        $books->categories()->get() = $books->categories
////////////////////////////////////////////////////////////////////////////////////////////////////////
//        foreach ($books->categories()->get() as $category){
//            dump($category->toArray());
//        }
//
//        dd();

        return view('products.show', compact('products'));

    }

    public function create(){
        $categories=category::all();

        return view('products.create',compact('categories'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request){


//        $request->validate([
//            'name'=>'required',
//            'pages'=>'required|numeric',
//            'price'=>'required|numeric',
//            'ISBN'=>'required'
//
//        ]);
        $books=Auth::user()->products()->create($request->except('_token'));
        $books->categories()->attach($request->get('category_id'));
        return redirect('products');
        // books::create($request->except('_token'));


    }
    public function update(Request $request,$id){
//        dd($request->all(),$id);

        //find book
        $book=books::find($id);
        //update
        $book->update($request->only(['name','description','ISBA','price']));
        // update->category
        $book->categories()->sync($request->get('category_id'));

        return redirect('/products');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $products=products::find($id);
        $this->authorize('update',$products);

//        abort_if($books->user->id != Auth::user()->id,HttpResponse::HTTP_UNAUTHORIZED);

//        if($books->user->id != Auth::user()->id){
//            abort(Response::HTTP_UNAUTHORIZED);
//        }
        $categories=category::all();
        return view('products.edit',compact('products','categories'));
    }
}
