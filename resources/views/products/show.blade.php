@extends('products.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Detail Pengaduan</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>

        </div>

    </div>

</div>



<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nama:</strong>

            {{ $product->nama }}

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

            <strong>Image:</strong>

            <img src="/image/{{ $product->image }}" width="500px">

        </div>

    </div>

</div>

@endsection