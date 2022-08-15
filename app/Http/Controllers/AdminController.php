<?php

  

namespace App\Http\Controllers;

  

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
  

class AdminController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
         // return user::all();
         $products = Product::latest()->paginate(10);
         
        //  if (request('search')){
        //     // dd(request('search'));
        //     $products->where('nama', 'like', '%'. request('search'). '%');
        // }

       

        return view('admin.index',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $products = Product::where('nama', 'like', "%" . $keyword . "%")->orWhere('id', 'like', "%" . $keyword . "%")->orWhere('organisasi', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.


     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('admin.create');

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $request->validate([

            'nama' => 'required',

            'no_identitas' => 'required',

            'origanisasi' => 'required',

            'alamat' => 'required',

            'kontak' => 'required',

            'detail_info_diminta' => 'required',

            'tujuan_penggunaan' => 'required',

            'cara_memperoleh_info' => 'required',

            'cara_mendapat_salinan' => 'required',

            'tujuan_skpd' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'date' => 'required',

        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

    

        Product::create($input);

     

        return redirect()->route('admin.index')

                        ->with('success','Product created successfully.');

    }

     

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {

        return view('admin.show',compact('product'));

    }

     

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

    {

        return view('admin.edit',compact('product'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Product $product)

    {

        $request->validate([

            'nama' => 'required',

            'no_identitas' => 'required',

            'origanisasi' => 'required',

            'alamat' => 'required',

            'kontak' => 'required',

            'detail_info_diminta' => 'required',

            'tujuan_penggunaan' => 'required',

            'cara_memperoleh_info' => 'required',

            'cara_mendapat_salinan' => 'required',

            'tujuan_skpd' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'date' => 'required',

        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }

          

        $product->update($input);

    

        return redirect()->route('admin.index')

                        ->with('success','Product updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $product->delete();

     

        return redirect()->route('admin.index')

                        ->with('success','Data Berhasil dihapus!');

    }

 
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$product = Product::table('products')
		->where('id','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['products' => $product]);
 
	}

}