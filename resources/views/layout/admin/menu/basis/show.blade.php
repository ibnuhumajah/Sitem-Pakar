 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Basis Pengetahuan </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
       <section class="content">

      <!-- Default box -->
 <div class="card" >
  <div class="card-body">

    <h4 class="card-text">Nama Kerusakan</h4>
    <p class="card-text">{{ $basis->kerusakan['nama_kerusakan'] }}</p>

    <h4 class="card-text">Gejala Kerusakan</h4>
    <p class="card-text">{{ $basis->gejala['nama_gejala'] }}</p>

    <h4 class="card-text">MB</h4>
    <p class="card-text">{{ $basis->mb }}</p>


    <a href="/admin/basis/{{ $basis->kode_pengetahuan}}/edit" class="btn btn-primary">Edit</a>

    <form action="/admin/basis/{{ $basis->kode_pengetahuan }}" method="post" class="d-inline">
      @method('delete')
      @csrf
    <button href="" class="btn btn-danger" >Delete</button>
    </form>
    <a href="/admin/basis" class="card-link">Kembali</a>
  </div>
</div>

    </section>
    <!-- /.content -->
    @endsection