<?php



namespace App\Http\Controllers;



use App\Models\Product;
use App\Rules\Uppercase;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products = Product::latest()->paginate(5);

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

    public function store(Request $request, Product $product)

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

            // 'penerima_permohonan',

            'date' => 'required',

        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
        }

        if ($dokumen = $request->file('dokumen')) {

            $destinationPathA = 'dokumen/';

            $profileDokumen = date('YmdHis') . "." . $dokumen->getClientOriginalExtension();

            $dokumen->move($destinationPathA, $profileDokumen);

            $input['dokumen'] = "$profileDokumen";
        }

        if ($ttd = $request->file('ttd')) {

            $destinationPathB = 'ttd/';

            $profileTtd = date('YmdHis') . "." . $ttd->getClientOriginalExtension();

            $ttd->move($destinationPathB, $profileTtd);

            $input['ttd'] = "$profileTtd";
        }

        
        // if ($pdf = Product::loadView('pdf.invoice', $data)) {

        //     Product::put('public/pdf/invoice.pdf', $pdf->output());

        //     return $pdf->download('invoice.pdf');
        // }

        
        Product::create($input);
        
        // Product::table('products')-> WHERE ('id','=', $id)->get();

        // $query = DB::table('products')->select('id');
        // $id = $query->addSelect('id')->get();
        // $lastInsertId = DB::table('reports')->insertGetId(['id' => $id]);


        //dd($input);



        return view('products.showUser', ['id'])
            ->with('product', $product)
            ->with('success', 'Data berhasil dikirim!');
    }

    public function bukti(Product $product)
    {

        return view('products.bukti', compact('product')); 
    
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {   
        // dd($product);

        return view('products.show', compact('product'));
    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

    {

        return view('products.edit', compact('product'));
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

            // 'penerima_permohonan',

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



        return redirect('admin')

            ->with('success', 'Product updated successfully');
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

            ->with('success', 'Data Berhasil dihapus!');
    }

    // public function destroyAll(Product $product)

    // {

    //     $product->truncate();



    //     return redirect('admin')

    //         ->with('success', 'Semua Data Berhasil dihapus!');
    // }

    public function downloadPDF($id)
    {

        $show = Product::find($id);

        $pdf = PDF::loadView('pdf.laporan', [
            'title' => 'LaporanPDF',
            'date' => date('m/d/Y'),
            'id' => $id,

        ], compact('show'));

        return $pdf->stream('ppid-' . $id . '.pdf');
    }

    public function downloadPDFuser($id)
    {

        $show = Product::find($id);

        $pdf = PDF::loadView('pdf.laporan', [
            'title' => 'LaporanPDF',
            'date' => date('m/d/Y'),
            'id' => $id,

        ], compact('show'));

        return $pdf->stream('ppid-' . $id . '.pdf');
    }

    // public function downloadPDFkeberatan($id)
    // {

    //     $show = Product::find($id);

    //     $pdf = PDF::loadView('pdf.keberatan', [
    //         'title' => 'LaporanKeberatanPDF',
    //         'date' => date('m/d/Y'),
    //         'id' => $id,

    //     ], compact('show'));

    //     return $pdf->stream('keberatan-ppid-' . $id . '.pdf');
    // }


    // public function deleteall(Request $request)
    // {
    //     $product->all()->delete();

    //     return redirect('admin')
    // }

    //    public function cari(Request $request)
    // {
    // 	// menangkap data pencarian
    // 	$cari = $request->cari;

    //    		// mengambil data dari table pegawai sesuai pencarian data
    // 	$product = DB::table('products')
    // 	->where('id','like',"%".$cari."%")
    // 	->paginate();

    //    		// mengirim data pegawai ke view index
    // 	return view('product.index',['products' => $product]);

    // }

    // public function fetchStaff(Request $request)

    // {

    //     $data['products'] = Product::where("penandatangan", $request->penandatangan)

    //                             ->get(["penandatangan", "id"]);

  

    //     return response()->json($data);

    // }
}
