 @extends('layout.admin.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-table"></i>
     </span> Detail Data Kondisi Wajah
   </h3>
 </div>

 <!-- Main content -->
 <section class="content">

   <!-- Default box -->
   <div class="row">
     <div class="col-lg-12 stretch-card grid-margin">
       <div class="card bg-gradient-primary card-img-holder text-white">
         <div class="card-body">
           <img src="{{asset('asset/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
           <h1 class="font-weight-normal"><b>{{ $kerusakan->nama_kerusakan }}</b></i>
           </h1>
         </div>
         <div class="card">
           <div class="card-body" style="color: black;">
             <h3 class="card-text">Detail Kondisi Wajah</h3>
             <p class="card-text mb-3">{{ $kerusakan->det_kerusakan }}</p>
             <hr>
             <h3 class="card-text">Saran Penanganan</h3>
             <p class="card-text mb-5">{{ $kerusakan->srn_kerusakan }}</p>
             <a href="/admin/kerusakan/{{ $kerusakan->kode_kerusakan}}/edit" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i> Edit</a>
             <form action="/admin/kerusakan/{{ $kerusakan->kode_kerusakan }}" method="post" class="d-inline">
               @method('delete')
               @csrf
               <button href="" id="btn-hapus" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i> Delete</button>
             </form>
             <a href="/admin/kerusakan" class="btn btn-outline-secondary btn-sm">Kembali</a>
           </div>
         </div>
       </div>
     </div>

 </section>
 <!-- /.content -->
 @endsection