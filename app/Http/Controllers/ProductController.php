<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        //$this->middleware('auth');
        /*$this->middleware('auth')->only([
            'create','storage'
        ]);*/
        //$this->middleware('auth')->except('index');

    }


    public function index(){

        $teste = 123;
        $teste3 = [1,2,3,4,5];
        $products = ['TV', 'Geladeira', 'Forno', 'Sofá'];

        return view('admin.pages.products.index', compact('teste', 'teste3', 'products'));
    }

    public function show($id){
        return "Exibindo o produto de id: {$id}";
    }

    public function create(){
        return view('admin.pages.products.create');
    }

    public function edit($id){
        return view('admin.pages.products.edit', compact('id'));
    }

    public function store(StoreUpdateProductRequest $request){

        // $request->validate([
        //     'name' => 'required | min:3 |max:255',
        //     'description' => 'nullable | min:3 |max:1000',
        //     'photo' => 'required|image'  
        // ]);

        dd('OK');

        //dd($request->all());
        //dd($request->only(['name', 'description']));
        //dd($request->name);
        //dd($request->has('name'));
        //dd($request->input('teste', 'Default'));
        //dd($request->except('_token', 'name'));

        if ($request->file('photo')->isValid()) {
            //dd($request->photo->getClientOriginalName());
           // $request->file('photo')->store('products');
           $nameFile = $request->name . '.' . $request->photo->extension();
           $request->file('photo')->storeAs('products', $nameFile);
        }

    }

    public function update($id){
        dd("Editando o produto {$id}........");
    }

    public function destroy($id){
        return "Deletando o produto de id: {$id}";
    }

    
}
