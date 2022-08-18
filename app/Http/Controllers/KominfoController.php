<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class KominfoController extends Controller
{

    public function index()

    {

        // return product::where('tujuan_skpd', 'KOMINFO')->first();
        $products = Product::where('tujuan_skpd', 'KOMINFO')->paginate(10);



        // $products = Product::latest()->paginate(10);

    

        return view('admin.kominfo',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    // public function search(Request $request)
    // {

    //     $keyword = $request->search;
    //     $products = Product::where('nama', 'like', "%" . $keyword . "%")->paginate(5);

    //     // if($request->search)
    //     // {
    //     //     return dd($request->search);
    //     //     $products = Product::where('nama', 'like', "%" . $keyword . "%")->get();
    //     // }

    //     // if($request->filterkominfo)pkomnf
    //     // {
    //     //     return dd($request->filterkominfo);
    //     //     $products = Product::Where('tujuan_skpd', 'like', "%" . $keyword . "%")->get();
    //     // }

    //     return view('admin.kominfo', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);


    //     // return view('admin.kominfo', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);


    //     // $keyword = $request->search;
    //     // $products = Product::where('tujuan_skpd', 'like', "%" . $keyword . "%")->paginate(5);

    //     // if($request->searchkominfo)
    //     // {
    //         // return dd($request->searchkominfo);
    //     // $products = Product::where('tujuan_skpd', 'like', "%" . $keyword . "%")->paginate(5);

    //     //     $result = Product::Where('nama', 'like', "%" . $keyword . "%")->get();
    //     // }

    // }
    

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

     

        return redirect()->route('admin.kominfo')

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

    

        return redirect()->route('admin.kominfo')

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

     

        return redirect()->route('admin.kominfo')

                        ->with('success','Data Berhasil dihapus!');

    }
    
}
