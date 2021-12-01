 @extends('layout.user.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-table-large"></i>
     </span> Riwayat Diagnosa
   </h3>
 </div>

 <!-- Main content -->
 <section class="content">
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Data Riwayat Diagnosa</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
             <tr class="text-center">
               <th>No</th>
               <th>Nama</th>
               <th>Tanggal</th>
               <th>Kerusakan</th>
               <th>Nilai CF</th>
               <th>Aksi</th>
             </tr>
           </thead>
           <tbody>
             @foreach ( $hasil as $key => $hs )
             <tr class="text-center">
               <th>{{ $key + 1 }}</th>
               <td>{{ucwords($hs->nama_user)}} </td>
               <td>{{$hs->tanggal}}</td>
               <td>{{$hs->kerusakan_ch->nama_kerusakan}}</td>
               <td>{{$hs->hasil_nilai}} </td>
               <td>
                 <a href="/user/result/{{ $hs->id_hasil}}" class="btn btn-success btn-sm btn-shadow"><i class="mdi mdi-eye"></i> Detail</a>
               </td>
             </tr>
             @endforeach
           </tbody>
           <!-- PAGINATION LARAVEL -->
           <!-- {{ $hasil->links() }} -->
         </table>
       </div>
     </div>
   </div>

 </section>

 <!-- /.content -->
 @endsection