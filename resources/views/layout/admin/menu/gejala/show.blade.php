 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Detail Kerusakan Mobil </h1>
       </div>
     </div>
   </div><!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">

   <!-- Default box -->
   <div class="card">
     <div class="card-body">
       <h2 class="card-text">{{ $gejala->nama_gejala }}</h2>

       <a href="{{ $gejala->kode_gejala}}/edit" class="btn btn-primary">Edit</a>

       <form action="/gejala/{{ $gejala->kode_gejala }}" method="post" class="d-inline">
         @method('delete')
         @csrf
         <button href="" class="btn btn-danger">Delete</button>
       </form>
       <a href="/gejala" class="card-link">Kembali</a>
     </div>
   </div>

 </section>
 <!-- /.content -->
 @endsection