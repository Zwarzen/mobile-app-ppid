<?php

  

namespace App\Http\Controllers;

  
use App\Rules\Uppercase;
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
         $products = Product::latest()->paginate(5);

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

            'id',

            'nama' => 'required',

            'no_identitas' => new Uppercase,

            'subjek' => 'required',

            'organisasi',

            'alamat' => 'required',

            'kontak' => 'required',

            'detail_info_diminta' => 'required',

            'tujuan_penggunaan' => 'required',

            'cara_memperoleh_info' => 'required',

            'cara_mendapat_salinan' => 'required',

            'tujuan_skpd' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

            'dokumen' => 'mimes:pdf,jpeg,png,jpg,gif,svg',

            'ttd' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

            'date' => 'required',

        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
        }

        if ($dokumen = $request->file('pdf')) {

            $destinationPath = 'dokumen/';

            $profileDokumen = date('YmdHis') . "." . $dokumen->getClientOriginalExtension();

            $dokumen->move($destinationPath, $profileDokumen);

            $input['pdf'] = "$profileDokumen";
        }

        if ($ttd = $request->file('image')) {

            $destinationPath = 'ttd/';

            $profileTtd = date('YmdHis') . "." . $ttd->getClientOriginalExtension();

            $ttd->move($destinationPath, $profileTtd);

            $input['image'] = "$profileTtd";
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

        return view('product.index',compact('product'));

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

            'id',

            'nama' => 'required',

            'no_identitas' => 'required',

            'subjek' => 'required',

            'organisasi',

            'alamat' => 'required',

            'kontak' => 'required',

            'detail_info_diminta' => 'required',

            'tujuan_penggunaan' => 'required',

            'cara_memperoleh_info' => 'required',

            'cara_mendapat_salinan' => 'required',

            'tujuan_skpd' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

            'dokumen' => 'mimes:pdf,jpeg,png,jpg,gif,svg',

            'ttd' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

            'date' => 'required',
        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
        } else {

            unset($input['image']);
        }

        if ($dokumen = $request->file('pdf')) {

            $destinationPath = 'dokumen/';

            $profileDokumen = date('YmdHis') . "." . $dokumen->getClientOriginalExtension();

            $dokumen->move($destinationPath, $profileDokumen);

            $input['pdf'] = "$profileDokumen";
        } else {

            unset($input['pdf']);
        }

        if ($ttd = $request->file('image')) {

            $destinationPath = 'ttd/';

            $profileTtd = date('YmdHis') . "." . $ttd->getClientOriginalExtension();

            $ttd->move($destinationPath, $profileTtd);

            $input['image'] = "$profileTtd";
        } else {

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

     

        return redirect('admin')

                        ->with('success','Data Berhasil dihapus!');

    }

    public function deleteall(Product $product)
    {

        $product->truncate();

        return redirect('admin')
            ->with('success', 'Semua Data Berhasil Dihapus!');

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