@extends('products.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Data</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>

        </div>

    </div>

</div>



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



<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">

    @csrf

    @method('PUT')



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="nama" value="{{ $product->nama }}" class="form-control" placeholder="Nama">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                <input type="text" name="alamat" value="{{ $product->alamat }}" class="form-control" placeholder="Alamat">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No. KTP/SIM/Paspor:</strong>

                <input type="text" name="no_identitas" value="{{ $product->no_identitas }}" class="form-control" placeholder="Nomor KTP/SIM/Paspor">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Ormas/Perorangan:</strong>
                <input type="text" name="organisasi" value="{{ $product->organisasi }}" class="form-control" placeholder="Nama Organisasi">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Telp/Email:</strong>

                <input type="text" name="kontak" value="{{ $product->kontak }}" class="form-control" placeholder="Nomor Telp/Email">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Rincian Informasi yang dibutuhkan:</strong>
                <textarea class="form-control" style="height:150px" name="detail_info_diminta" placeholder="Detail info yang diminta">{{ $product->detail_info_diminta }}</textarea>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tujuan Penggunaan Informasi:</strong>
                <textarea class="form-control" style="height:150px" name="tujuan_penggunaan" placeholder="Tujuan Penggunaan">{{ $product->tujuan_penggunaan }}</textarea>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Cara Memperoleh Informasi:</strong>

                <input type="text" name="cara_memperoleh_info" value="{{ $product->cara_memperoleh_info}}" class="form-control" placeholder="Cara Memperoleh Informasi">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Cara Mendapatkan Salinan Informasi:</strong>

                <input type="text" name="cara_mendapat_salinan" value="{{ $product->cara_mendapat_salinan}}" class="form-control" placeholder="Cara Mendapat Salinan">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tujuan SKPD:</strong>

                <input type="text" name="tujuan_skpd" value="{{ $product->tujuan_skpd}}" class="form-control" placeholder="Tujuan">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal:</strong>

                <input type="date" name="date" value="{{ $product->date}}" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

                <img src="/image/{{ $product->image }}" width="300px">
            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection