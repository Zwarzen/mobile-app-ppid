@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    @media screen and (max-width: 500px) {
        .button-text {
            display: none;
        }

        .search-bar{
            max-width: 200px;
        }

        h2{
            max-width: 200px;
        }
    }
</style>


<div class="row" marg>
    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Admin KOMINFO Banyuwangi</h2>

        </div>

        <form action="/logout" method="POST" style="margin-top: 20px;">
            @csrf
            <div class="col-lg-20 margin-tb">
                <div class="pull-right" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-danger">
                        <i class="material-icons">logout</i>
                        <span class="button-text">Keluar</span>
                    </button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        <!-- {{-- <form action="/admin" >
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="searchkominfo" value="{{ request('searchkominfo') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
            </form> --}} -->
            <form class="form" style="display:inline;">
                <div class="form-group" >
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Masukkan Nomor Surat/Organisasi/Nama" style="width: 350px; height: 35px;">
                    <!-- <select id="filterkominfo" name="filterkominfo"  class="form-control" style="width: 350px; height: 35px; margin-top: 10px; margin-bottom: 10px;">
                        <option>-- Select --</option>
                        @foreach ($products as $product)
                        <option value="{{ $product->tujuan_skpd }}">{{ $product->tujuan_skpd }}</option>
                        @endforeach
                    </select> -->
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                
            </form>

    </div>
</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered" id="myTable" style="margin-top: 20px;">

    <tr>

        <th>No</th>

        <th>Nama</th>

        <th>Subjek</th>

        <th>Organisasi</th>

        <th>Tujuan</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $product->nama }}</td>

        <td>{{ $product->subjek }}</td>

        <td>{{ $product->organisasi }}</td>

        <td>{{ $product->tujuan_skpd }}</td>

        <td>

            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">
                    <i class="material-icons">visibility</i>
                    <span class="button-text">Detail</span>
                </a>

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    <i class="material-icons">delete</i>
                    <span class="button-text">Hapus</span>
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

{!! $products->links() !!}

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

@endsection