<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('todo.index',['products' => $products]);

    }
    public function create(){
        return view('todo.create');

    }

    public function store(Request $request){

        $data = $request->validate([
            'Id' => 'required',
            'Task Name'=> 'required',
            'Task Type'=> 'required',
            'Task Reason'=> 'required',
            
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));

        
    }

    public function edit(Product $product){
        return view('products.edit',['product' => $product]);

    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'Id' => 'required',
            'Task Name'=> 'required',
            'Task Type'=> 'required',
            'Task Reason'=> 'required',
            
        ]);

        $product->update($data);

        return redirect(route('product.index'));

        $product->delete($data);

        return redirect(route('product.index'));



    }
}
