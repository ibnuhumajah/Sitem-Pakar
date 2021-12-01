 @extends('layout.admin.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-table"></i>
     </span> Edit Data Gejala
   </h3>
 </div>

 <!-- Main content -->
 <section class="content">
   <div class="row">
     <div class="col-12 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <h4 class="card-title">Form Edit Data</h4>
           <br>
           <form class="forms-sample" method="POST" action="/admin/gejala/{{ $gejala->kode_gejala }}">
             @method('patch')
             @csrf
             <div class=" form-group">
               <label for="nama_gejala" class="form-label">Nama Gejala</label>
               <input type="text" class="form-control @error('nama_gejala') is-invalid @enderror" id="nama_gejala" placeholder="Masukan Nama Gejala" name="nama_gejala" value="{{ $gejala->nama_gejala }}">
               @error('nama_gejala')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
               <a href="/admin/gejala" class="btn btn-light">Kembali</a>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- /.content -->
 @endsection