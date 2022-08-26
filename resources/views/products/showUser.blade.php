@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="row" style="margin-top:20px;">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-bottom:10px;">

            <h2> Detail Pengaduan</h2>

        </div>
        

        <!-- <div class="pull-right" style="margin-bottom:10px;">

            <a class="btn btn-primary" href="{{ url('admin') }}"> <i class="material-icons">arrow_back</i>Back</a>

        </div> -->

        <div class="pull-right" style="margin-right: 10px;" style="margin-bottom:10px;">

            <a class="btn btn-success" href="{{route('downloadPDFuser',$product->id)}}" action="surat.php"> <i class="material-icons">insert_drive_file</i>Print</a>

        </div>

        <!-- <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" action="surat.php">
            <div class="form-group">
                <select class="form-control input-lg dynamic" data-dependent="penerima_permohonan" id="penerima" name="penerima_permohonan">
                    <option selected disabled>Pilih Penerima Permohonan</option>
                    <option name="penerima_permohonan" value="KOMINFO">KOMINFO</option>
                    <option name="penerima_permohonan" value="PPID">PPID</option>
                </select>
            </div>
            <button type="submit" name="save_select" class="btn btn-primary">Simpan Penerima</button>
        </form> -->
        

        
    </div>

</div>



<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nomor Surat:</strong>

            {{ str_pad($product->id, 4, '0', STR_PAD_LEFT); }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Tanggal:</strong>
            <?php
            // function tanggal_indonesia($tanggal)
            // {
            //     $bulan = array(
            //         1 =>   'Januari',
            //         'Februari',
            //         'Maret',
            //         'April',
            //         'Mei',
            //         'Juni',
            //         'Juli',
            //         'Agustus',
            //         'September',
            //         'Oktober',
            //         'November',
            //         'Desember'
            //     );

            //     $pecahkan = explode('-', $tanggal);

            //     // variabel pecahkan 0 = tanggal
            //     // variabel pecahkan 1 = bulan
            //     // variabel pecahkan 2 = tahun

            //     return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
            // }

            // echo tanggal_indonesia($product->date); // Hasilnya menampilkan format tanggal 15 Februari 2004
            ?>
            <!-- 
            {{  
                $newDate = date("d F Y", strtotime($product->date));
            }} -->



        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nama:</strong>

            {{ $product->nama }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nomor KTP/SIM/Paspor:</strong>

            {{ $product->no_identitas }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Subjek:</strong>

            {{ $product->subjek }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Organisasi:</strong>

            {{ $product->organisasi }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Alamat:</strong>

            {{ $product->alamat }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nomor Telp/Email:</strong>

            {{ $product->kontak }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Detail informasi yang diminta:</strong>

            {{ $product->detail_info_diminta }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Tujuan Penggunaan Informasi:</strong>

            {{ $product->tujuan_penggunaan }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Cara Memperoleh Informasi:</strong>

            {{ $product->cara_memperoleh_info }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Cara Mendapat Salinan Informasi:</strong>

            {{ $product->cara_mendapat_salinan }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Tujuan SKPD:</strong>

            {{ $product->tujuan_skpd}}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Foto KTP:</strong>
            <br>
            <br>
            <img src="/image/{{ $product->image }}" width="250px">

        </div>

    </div>

    <!-- <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Dokumen:</strong>
            <br>
            <br>
            <iframe src="/dokumen/{{ $product->dokumen }}" width="100%" height="600px;"></iframe> -->
            <!-- <img src="{{ $product->dokumen }}" width="250px"> -->

        <!-- </div>

    </div> -->
    
</div>

@endsection