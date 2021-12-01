 @extends('layout.admin.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-table"></i>
     </span> Edit Data Kondisi Wajah
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
           <form class="forms-sample" method="POST" action="/admin/kerusakan/{{ $kerusakan->kode_kerusakan }}">
             @method('patch')
             @csrf
             <div class=" form-group">
               <label for="nama_kerusakan" class="form-label">Kondisi Wajah</label>
               <input type="text" class="form-control @error('nama_kerusakan') is-invalid @enderror" id="nama_kerusakan" placeholder="Masukan Nama Kerusakan" name="nama_kerusakan" value="{{ $kerusakan->nama_kerusakan }}">
               @error('nama_kerusakan')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
             <div class="form-group">
               <label for="det_kerusakan" class="form-label">Detail Kerusakan</label>
               <textarea class="form-control @error('det_kerusakan') is-invalid @enderror" id="det_kerusakan" name="det_kerusakan">{{ $kerusakan->det_kerusakan }}</textarea>
               @error('det_kerusakan')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
             <div class="form-group">
               <label for="srn_kerusakan" class="form-label">Masukan Saran Kerusakan</label>
               <textarea class="form-control @error('srn_kerusakan') is-invalid @enderror" id="srn_kerusakan" name="srn_kerusakan">{{ $kerusakan->srn_kerusakan }}</textarea>
               @error('srn_kerusakan')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
               <a href="/admin/kerusakan" class="btn btn-light">Kembali</a>
             </div>
           </form>
         </div>
       </div>
     </div>
 </section>
 <!-- /.content -->
 @endsection