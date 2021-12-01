 @extends('layout.admin.master')

 @section('content')
 <div class="page-header">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-home"></i>
     </span> Dashboard
   </h3>
 </div>
 <section class="content">
   <div class="row">
     <div class="col-12 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <h1><b>Sistem Pakar Metode Certainty Factor</b></h1>
           <hr>
           <div class="row mt-3">
             <div class="col-12 row pr-1">
               <div class="col-12 text-left">
                 <h3>Certainty Factor</h3>
                 <p>Ketidakpastian dianggap sebagai suatu kekurangan informasi yang memadai untuk membuat suatu keputusan. Faktor kepastian (Certainty factor) merupakan salah satu metode yang digunakan untuk menangani ketidakpastian dalam sistem pakar (Sigalingging et al., 2019).
                   Certainty factor menggunakan MB (H, E) untuk mewakili nilai keyakinan dari hipotesis H, gejala E, dan MD (H, E) untuk nilai ketidakpercayaan dari hipotesis H, gejala E. Karena keterangan atau fakta dari gejala salah satunya menentang hipotesis, MB (H, E) atau MD (H, E) maka nilai yang dimiliki harus nol untuk tiap H dan E (Putri, 2018).</p>
               </div>
             </div>
           </div>
           <hr>
           <div class="row mt-3">
             <div class="col-12 row pr-1">
               <div class="col-12 text-left">
                 <h3>Sumber Pakar (Dokter)</h3>
                 <p>1. Dr. *****</p>
                 <p>2. Dr. *****</p>
                 <p>3. Dr. *****</p>
                 <p>4. Dr. *****</p>
                 <p>5. Dr. *****</p>
               </div>
             </div>
           </div>
           <div class="d-flex mt-3 align-items-top">
             <div class="mb-0 flex-grow">
               <h5 class="mr-2 mb-2">Sumber Analisa:</h5>
               <img src="{{asset('asset/assets/images/alo.png')}}" style="width: 150px;" alt="image">
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- /.content -->
 @endsection