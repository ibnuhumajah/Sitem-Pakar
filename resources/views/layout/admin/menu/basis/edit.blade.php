 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-table"></i>
     </span> Edit Basis Pengetahuan
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
           <form class="forms-sample" method="POST" action="/admin/basis/{{ $basis->kode_pengetahuan }}">
             @method('patch')
             @csrf
             <div class=" form-group">
               <label for="kode_kerusakan" class="form-label">Pilih Kondisi</label>
               <select class="form-control" id="kode_kerusakan" name="kode_kerusakan">
                 <option selected value="{{ $basis->kode_kerusakan }}">{{ $basis->kerusakan['nama_kerusakan'] }}</option>

                 @foreach ( $kerusakan as $ks )
                 <option value="{{ $ks->kode_kerusakan }}">{{ $ks->nama_kerusakan }}</option>
                 @endforeach
               </select>
             </div>
             <div class=" form-group">
               <label for="kode_gejala" class="form-label">Pilih Gejala</label>
               <select class="form-control" id="kode_gejala" name="kode_gejala">
                 <option selected value="{{ $basis->kode_gejala }}">{{ $basis->gejala['nama_gejala'] }}</option>

                 @foreach ( $gejala as $gj )
                 <option value="{{ $gj->kode_gejala }}">{{ $gj->nama_gejala }}</option>
                 @endforeach
               </select>
             </div>
             <div class=" form-group">
               <label for="mb" class="form-label">Nilai Bobot</label>
               <input type="text" class="form-control @error('mb') is-invalid @enderror" id="mb" placeholder="Masukan MB" name="mb" value="{{ $basis->mb }}">
               @error('mb')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
               <a href="/admin/basis" class="btn btn-light">Kembali</a>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- /.content -->
 @endsection