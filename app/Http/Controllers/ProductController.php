<?php



namespace App\Http\Controllers;



use App\Models\Product;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\Writer\PDF;



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

    public function store(Request $request)

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
        }



        Product::create($input);



        return redirect()->route('products.index')

            ->with('success', 'Data berhasil dikirim!');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {

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

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $product->delete();



        return redirect()->route('admin.index')

            ->with('success', 'Data Berhasil dihapus!');
    }

    public function downloadPDF($id)
    {
        $show = Product::find($id);
        $pdf = PDF::loadView('pdf', compact('show'));

        return $pdf->download('ppid'.$id.'.pdf');
    }
    // public function generate(Request $request, Product $product)

    // {
    //     // membaca data dari form
    //     $id = $_POST['id'];
    //     $nama = $_POST['nama'];
    //     $no_identitas = $_POST['no_identitas'];
    //     $organisasi = $_POST['organisasi'];
    //     $alamat = $_POST['alamat'];
    //     $kontak = $_POST['kontak'];
    //     $detail_info_diminta = $_POST['detail_info_diminta'];
    //     $tujuan_penggunaan = $_POST['tujuan_penggunaan'];
    //     $cara_memperoleh_info = $_POST['cara_memperoleh_info'];
    //     $cara_mendapat_salinan = $_POST['cara_mendapat_salinan'];
    //     $date = $_POST['date'];
    //     // memanggil dan membaca template dokumen yang telah kita buat
    //     $document = file_get_contents("form_permohonan.rtf");
    //     // isi dokumen dinyatakan dalam bentuk string
    //     $document = str_replace("#id", $id, $document);
    //     $document = str_replace("#nama", $nama, $document);
    //     $document = str_replace("#no_identitas", $no_identitas, $document);
    //     $document = str_replace("#organisasi", $organisasi, $document);
    //     $document = str_replace("#alamat", $alamat, $document);
    //     $document = str_replace("#kontak", $kontak, $document);
    //     $document = str_replace("#detail_info_diminta", $detail_info_diminta, $document);
    //     $document = str_replace("#tujuan_penggunaan", $tujuan_penggunaan, $document);
    //     $document = str_replace("#cara_memperoleh_info", $cara_memperoleh_info, $document);
    //     $document = str_replace("#cara_mendapat_salinan", $cara_mendapat_salinan, $document);
    //     $document = str_replace("#date", $date, $document);

    //     // header untuk membuka file output RTF dengan MS. Word
    //     header("Content-type: application/msword");
    //     header("Content-disposition: inline; filename=form_permohonan.doc");
    //     header("Content-length: ".strlen($document));
    //     echo $document;
    // }

}
