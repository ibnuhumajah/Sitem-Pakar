 @extends('layout.user.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-home"></i>
     </span> Detail Kondisi
   </h3>
   <div class="page-title">
     <a href="/user/cetak/{{$hasil->id_hasil}}" target="_blank" class="btn btn-gradient-danger btn-fw btn-rounded"><i class="mdi mdi-file-pdf"></i> Cetak Diagnosa</a>
   </div>
 </div>

 <!-- Main content -->
 <section class="content">
   <div class="card shadow mb-4">
     <div class="card-header py-3 bg-gradient-primary">
       <h6 class="m-0 font-weight-bold text-white">Data Pasien</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table width="100%">
           <tr class="text-center">
             <td>
               <span style="line-height:1; font-weight:normal; font-size:14;"><b>Nama Pasien:</b> {{ ucwords($hasil->nama_user) }}</span><br>
             </td>
             <td>
               <span style="line-height:1; font-weight:normal; font-size:14"><b>Tanggal Pemeriksaan:</b> {{ $hasil->tanggal }}</span><br>
             </td>
           </tr>
         </table>
       </div>
     </div>
   </div>
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Data Riwayat Diagnosa</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered" width="100%" cellspacing="0">
           <thead>
             <tr class="text-center">
               <th>No</th>
               <th>Kode Gejala</th>
               <th>Nama Gejala</th>
               <th>Pilihan Diagnosa</th>
             </tr>
           </thead>
           <tbody>
             @foreach ( $data_gejala as $key => $hs )
             <tr class="text-center">
               <th scope="row">{{ $key+1 }}</th>
               <th>G{{ str_pad($hs['kode_gejala'], 3, '0', STR_PAD_LEFT) }}</th>
               <td>{{$hs['nama_gejala']}}</td>
               <td>{{$hs['kondisi']}}</td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>

   <div class="card shadow mb-4">
     <div class="card-header py-3 bg-gradient-success">
       <h6 class="m-0 font-weight-bold text-white ">Hasil Diagnosa</h6>
     </div>
     <div class="card-body">
       <div class="card-title">
         <p class="card-text font-weight-bold">
           @foreach($detail_kerusakan as $i => $detail)
           - {{ $detail['nama_kerusakan'] }} | {{ round($detail['value'] * 100, 2) }}% ({{ $detail['value'] }})
           <br />
           @endforeach
         </p>
       </div>
     </div>
   </div>

   <div class="card shadow mb-4">
     <div class=" m-0 font-weight-bold text-white card-header bg-gradient-info">
       Saran Produk Perawatan Mandiri
     </div>
     <div class="card-body">
       <div class="card-title">
         <p class="card-text font-weight-bold">
           @foreach($detail_kerusakan as $i => $detail)
           - {{ $detail['detail_kerusakan'] }}
           <br />
           @endforeach
         </p>
       </div>
     </div>
   </div>

   <div class="card shadow mb-4">
     <div class=" m-0 font-weight-bold text-white card-header bg-gradient-danger">
       Saran Penanganan Dokter Kecantikan (Kulit)
     </div>
     <div class="card-body">
       <div class="card-title">
         <p class="card-text font-weight-bold">
           @foreach($detail_kerusakan as $i => $detail)
           - {{ $detail['saran_kerusakan'] }}
           <br />
           @endforeach
         </p>
       </div>
     </div>
   </div>

   <!-- <div class="card shadow mb-4">
     <div class=" m-0 font-weight-bold text-white card-header bg-gradient-warning">
       Kemungkinan Lain
     </div>
     <div class="card-body">
       <div class="card-title">
         <p class="card-text font-weight-bold">
           @foreach($data_kerusakan as $i => $kerusakan)
           - {{ $kerusakan['nama_kerusakan'] }} | {{ round($kerusakan['value'] * 100, 2) }}% ({{ $kerusakan['value'] }})
           @endforeach
         </p>
       </div>
     </div>
   </div> -->
 </section>
 <!-- /.content -->
 @endsection