@extends('products.layout')



@section('content')

<style>
    canvas {
                border: 1px solid #ccc;
                border-radius: 0.5rem;
                width: 100%;
                height: 400px;
            }
</style>

<div class="row">

    <div class="col-lg-12 margin-tb" style="margin-top: 30px;">

        <div class="pull-left">

            <h2>Buat Pengaduan Baru</h2>

        </div>

    </div>

</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>
@endif


@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" action="surat.php">

    @csrf



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="nama" class="form-control" placeholder="Nama">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <input type="text" name="alamat" class="form-control" placeholder="Alamat">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No. KTP/SIM/Paspor:</strong>

                <input type="text" name="no_identitas" class="form-control" placeholder="Nomor KTP/SIM/Paspor">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Subjek:</strong>

                <input type="text" name="subjek" class="form-control" placeholder="Subjek">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Organisasi / Kuasa Hukum:</strong><br>
                <!-- <input type="text" name="organisasi" class="form-control" placeholder="Nama Organisasi"> -->
                
                <input type="text" name="organisasi" class="form-control" placeholder="Nama Organisasi / Kuasa Hukum (isi ' - ' jika Perorangan)">
                
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Telp/Email:</strong>

                <input type="text" name="kontak" class="form-control" placeholder="Nomor Telp/Email">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Rincian Informasi yang dibutuhkan:</strong>
                <textarea class="form-control" style="height:150px" name="detail_info_diminta" placeholder="Detail info yang diminta.(Max 100 Huruf)" max="100"></textarea>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tujuan Penggunaan Informasi:</strong>
                <textarea class="form-control" style="height:150px" name="tujuan_penggunaan" placeholder="Tujuan Penggunaan.(Max 100 Huruf)" max="100"></textarea>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Cara Memperoleh Informasi:</strong><br>

                <!-- <input type="text" name="cara_memperoleh_info" class="form-control" placeholder="Cara Memperoleh Informasi"> -->
                <tr style="display: block;">
                    <td><input type="radio" name="cara_memperoleh_info" value="Melihat/Membaca/Mendengar/Mencatat"/> Melihat/Membaca/Mendengar/Mencatat</td>
                <tr><br>
                    <td><input type="radio" name="cara_memperoleh_info" value="Mendapat Salinan Informasi(Hard Copy/Soft Copy)" /> Mendapat Salinan Informasi(Hard Copy/Soft Copy)</td>
                </tr>
                </tr>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Cara Mendapatkan Salinan Informasi:</strong>

                <!-- <input type="text" name="cara_mendapat_salinan" class="form-control" placeholder="Cara Mendapat Salinan"> -->
                <tr>
                    <br><td><input type="radio" name="cara_mendapat_salinan" value="Mengambil Langsung" /> Mengambil Langsung</td>
                <tr>
                    <td><br><input type="radio" name="cara_mendapat_salinan" value="Kurir" /> Kurir</td>
                </tr>
                <tr>
                    <td><br><input type="radio" name="cara_mendapat_salinan" value="Pos" /> Pos</td>
                </tr>
                <tr>
                    <td><br><input type="radio" name="cara_mendapat_salinan" value="Faximili" /> Faximili</td>
                </tr>
                <tr>
                    <td><br><input type="radio" name="cara_mendapat_salinan" value="Email" /> Email</td>
                </tr>
                </tr>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tujuan SKPD:</strong>
                <div class="form-group">
                    <select class="form-control" name="tujuan_skpd">
                        <option selected disabled>Pilih Tujuan SKPD</option>
                      <option  name="tujuan_skpd" value="KOMINFO">KOMINFO</option>
                      <option  name="tujuan_skpd" value="PPID">PPID</option>
                    </select>
                  </div>
                 

                <!-- <input type="text" name="tujuan_skpd" class="form-control" placeholder="Tujuan"> -->
                {{-- <tr style="display: block;">
                    <td><br><input type="radio" name="tujuan_skpd" value="KOMINFO"/> KOMINFO</td>
                <tr><br>
                    <td><input type="radio" name="tujuan_skpd" value="PPID" /> PPID</td>
                </tr>
                </tr> --}}
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal:</strong>

                <input type="date" name="date" class="form-control" value="<?php echo date("Y-m-d"); ?>">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Foto KTP:</strong>

                <input type="file" name="image" class="form-control" placeholder="masukan foto KTP">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dokumen Pendukung:</strong>

                <input type="file" name="dokumen" class="form-control" placeholder="Dokumen Berformat PDF">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <p>Tanda Tangan bisa dilakukan di <a href="https://signaturely.com/online-signature/draw/">sini</a>, lalu unggah pada form dibawah.( atau bisa menggunakan link <a href="https://signaturely.com/online-signature/draw/">https://signaturely.com/online-signature/draw/</a>)</p> 

                <strong>Tanda Tangan:</strong>

                <input type="file" name="ttd" class="form-control" placeholder="masukan gambar Tanda Tangan">

                <!-- <canvas id="signature-pad" class="signature-pad"></canvas> -->

            </div>

        </div>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="padding-bottom: 50px;">

            <button type="submit" class="btn btn-primary">OK</button>

        </div> -->

    </div>

</form>

@endsection