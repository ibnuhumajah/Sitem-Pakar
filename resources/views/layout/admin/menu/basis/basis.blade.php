 @extends('layout.admin.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-table-large"></i>
     </span> Basis Pengetahuan
   </h3>
 </div>
 <!-- Main content -->
 <section class="content">
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <div class="text-right">
         <a class="btn btn-gradient-primary mr-2" href="/admin/basis/create">Tambah Basis Pengetahuan <i class="mdi mdi-plus"></i></a>
       </div>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
             <tr class="text-center">
               <th>No</th>
               <th>Nama Kerusakan</th>
               <th>Nama Gejala</th>
               <th>Bobot</th>
               <th </tr>
           </thead>
           <tbody>
             @foreach ( $basis as $key => $bs )
             <tr class="text-center">
               <th scope="row">{{ $basis->firstItem() + $key }}</th>
               <td>{{ $bs->kerusakan['nama_kerusakan'] }}</td>
               <td>{{ $bs->gejala['nama_gejala'] }}</td>
               <td>{{ $bs->mb }}</td>

               <td>
                 <a href="/admin/basis/{{ $bs->kode_pengetahuan}}/edit" class="btn btn-primary btn-sm btn-shadow"><i class="mdi mdi-pencil"></i> Edit</a>
                 <form action="/admin/basis/{{ $bs->kode_pengetahuan }}" method="post" class="d-inline">
                   @method('delete')
                   @csrf
                   <button href="" id="btn-hapus" class="btn btn-danger btn-sm btn-shadow"><i class="mdi mdi-delete"></i> Delete</button>
                 </form>
               </td>
             </tr>
             @endforeach
           </tbody>
           <!-- {{ $basis->links() }} -->
         </table>
       </div>
     </div>
   </div>
 </section>
 <!-- /.content -->
 @endsection