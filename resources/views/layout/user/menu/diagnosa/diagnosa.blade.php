 @extends('layout.user.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-format-list-bulleted"></i>
     </span> Diagnosa Wajah
   </h3>
 </div>
 <!-- Main content -->
 <section class="content">
   @if (session('failed')=='true')
   <div class="alert alert-danger">
     <h5>Tolong pilih kondisi pada salah satu gejala</h5>
   </div>
   @endif
   <div class="card shadow mb-4">
     <form action="/user/diagnosa" method="POST">
       <div class="card-header py-3">
         <div class="text-right">
           <button type="submit" class="btn btn-gradient-primary mr-2">Klik untuk diagnosa</button>
         </div>
       </div>
       <div class="card-body">
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label for="nama_user" class="form-label">Nama Pengguna</label>
               <input type="text" autocomplete="off" class="form-control @error('nama_user') is-invalid @enderror" id="nama_user" placeholder="{{ ucwords(Auth::user()->name) }}" name="nama_user" value="{{ ucwords(Auth::user()->name) }}" required>
               @error('nama_user')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="tanggal" class="form-label">Tanggal</label>
               <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="date-picker" name="tanggal" required>
               @error('tanggal')<div class="invalid-feedback">{{ $message }}</div>@enderror
             </div>
           </div>
         </div>
         <div class="table-responsive">
           <table class="table table-bordered" width="100%" cellspacing="0">
             <thead>
               <tr class="text-center">
                 <th>No.</th>
                 <th>Kode Gejala</th>
                 <th>Nama Gejala</th>
                 <th>Pilih Kondisi</th>
               </tr>
             </thead>
             <tbody>
               @foreach ( $gejala as $key => $gjd )
               <tr data-id="{{ $gjd->kode_gejala }}" class="text-center">
                 <td style="font-weight:bold;">{{ $key + 1   }}</td>
                 <td style="font-weight:bold;">G{{ str_pad($gjd['kode_gejala'], 3, '0', STR_PAD_LEFT) }}</td>
                 <td>{{ $gjd->nama_gejala }}</td>
                 <td>
                   <select class="form-control" id="kode_gejala" name="kondisi[]">
                     @foreach ( $kondisi as $i => $ks )
                     @if($i == 0 )
                     <option value="{{ $i }}">{{ $ks['nama'] }}</option>
                     @else
                     <option value="{{ $gjd->kode_gejala }}_{{ $i }}">{{ $ks['nama'] }}</option>
                     @endif
                     @endforeach
                   </select>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
       </div>
     </form>
   </div>
 </section>
 <script>
   var date = new Date();
   var todayDate = String(date.getDate()).padStart(2, '0');
   var month = date.getMonth() + 1;
   var year = date.getFullYear();
   var datePattern = year + '-' + month + '-' + todayDate;
   document.getElementById("date-picker").value = datePattern;
 </script>
 <!-- /.content -->
 @endsection