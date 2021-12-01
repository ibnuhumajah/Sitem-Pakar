 @extends('layout.admin.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-table"></i>
     </span> Data Kondisi Wajah
   </h3>
 </div>
 <section class="content">
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <div class="text-right">
         <a class="btn btn-gradient-primary mr-2" href="/admin/kerusakan/create">Tambah Kondisi <i class="mdi mdi-plus"></i> </a>
       </div>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
             <tr class="text-center">
               <th>No</th>
               <th>Kondisi Wajah</th>
               <th>Aksi</th>
             </tr>
           </thead>
           <tbody>
             @foreach ( $kerusakan as $key => $ks )
             <tr class="text-center">
               <th scope="row">{{ $kerusakan->firstItem() + $key }}</th>
               <td>{{ $ks->nama_kerusakan }}</td>
               <td>
                 <a href="/admin/kerusakan/{{ $ks->kode_kerusakan }}" class="btn btn-success btn-sm btn-shadow"><i class="mdi mdi-eye"></i> Detail </a>
               </td>
             </tr>
             @endforeach
           </tbody>
           <!-- {{ $kerusakan->links() }} -->
         </table>
       </div>
     </div>
   </div>
 </section>
 <!-- /.content -->
 @endsection