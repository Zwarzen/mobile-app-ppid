<?php

namespace App\Http\Controllers;

use App\Models\DataPPID;
use App\Rules\Uppercase;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PPIDData extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products = DataPPID::latest()->paginate(5);



        return view('products.create', compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('products.create');
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



        DataPPID::create($input);



        return redirect()->route('products.index')

            ->with('success', 'Data berhasil dikirim!');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\DataPPID  $product

     * @return \Illuminate\Http\Response

     */

    public function show(DataPPID $product)

    {

        return view('products.show', compact('product'));


    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\DataPPID  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(DataPPID $product)

    {

        return view('products.edit', compact('product'));
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\DataPPID  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, DataPPID $product)

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

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

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



        $product->update($input);



        return redirect()->route('admin.index')

            ->with('success', 'Product updated successfully');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\DataPPID  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(DataPPID $product)

    {

        $product->delete();



        return redirect()->route('admin.index')

            ->with('success', 'Data Berhasil dihapus!');
    }

    public function downloadPDF($id)
    {
        
        $show = DataPPID::find($id);

        $pdf = PDF::loadView('pdf.laporan', [
            'title' => 'LaporanPDF',
            'date' => date('m/d/Y'),
            'id' => $id,
            
        ], compact('show'));

        return $pdf->stream('ppid-'.$id.'.pdf');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$product = DB::table('products')
		->where('id','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('product.index',['products' => $product]);
 
	}
}
