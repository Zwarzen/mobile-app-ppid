@extends('products.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Admin Pusat PPID Kabupaten</h2>

        </div>

        <!-- <div class="pull-left">

                <a class="btn btn-success" href="{{ route('admin.create') }}"> Buat Pengaduan Baru</a>

            </div> -->
    </div>

</div>
<!-- <div class="pull-left" style="margin-bottom: 20px;">

    <a class="btn btn-success" href="{{ route('admin.create') }}"> Buat Pengaduan Baru</a>

</div> -->



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">

    <tr>

        <th>No</th>

        <th>Nama</th>

        <th>Subjek</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $product->nama }}</td>

        <td>{{ $product->subjek  }}</td>

        <td>

            <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Detail</a>


                <!-- <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> -->



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger">Hapus</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>



{!! $products->links() !!}



@endsection