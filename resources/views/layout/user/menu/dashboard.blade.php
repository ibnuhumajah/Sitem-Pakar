 @extends('layout.user.master')

 @section('content')
 <div class="page-header mb-3">
   <h3 class="page-title">
     <span class="page-title-icon bg-gradient-primary text-white mr-2">
       <i class="mdi mdi-home"></i>
     </span> Dashboard
   </h3>
 </div>
 <!-- Default box -->
 <section class="content">
   <div class="content">
     <div class="row">
       <div class="col-lg-12">
         <span class="d-flex align-items-center purchase-popup">
           <h5>Lakukan Diagnosa Pada Wajah</h5>
           <a href="/user/diagnosa" class="btn btn-inverse-primary btn-rounded btn-fw btn-shadow ml-auto">Klik Disini</a>
         </span>
       </div>
     </div>
   </div>

   <div class="row">
     <div class="col-12 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <h3 class="card-title"><b>Artikel Singkat</b></h3>
           <hr>
           <div class="row mt-3">
             <div class="col-12 row pr-1 mb-2">
               <div class="col-3">
                 <img src="{{('asset/assets/images/dashboard/jerawat.jpg')}}" class="w-100 rounded" alt="image">
               </div>
               <div class="col-8 text-left">
                 <h3>Kulit Jerawat (Acne)</h3>
                 <p>Jerawat adalah masalah kulit yang terjadi ketika folikel rambut atau tempat tumbuhnya rambut tersumbat oleh minyak dan sel kulit mati. Jerawat ditandai dengan munculnya bintik-bintik di beberapa bagian tubuh, seperti wajah, leher, punggung, dan dada.</p>
                 <a href="https://www.alodokter.com/jerawat/gejala" target="_blank" style="text-decoration: none;">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
               </div>
             </div>
             <div class="col-12 row pr-1 mb-2">
               <div class="col-3">
                 <img src="{{('asset/assets/images/dashboard/berminyak.jpg')}}" class="w-100 rounded" alt="image">
               </div>
               <div class="col-8 text-left">
                 <h3>Kulit Berminyak</h3>
                 <p>Jenis kulit wajah berminyak cenderung licin dan mengkilap karena produksi minyak atau sebum yang berlebih. Sebum dihasilkan secara alami oleh kelenjar minyak atau kelenjar sebaceous di bawah permukaan kulit.</p>
                 <a href="https://www.alodokter.com/tips-merawat-wajah-untuk-kulit-wajah-berminyak" target="_blank" style="text-decoration: none;">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
               </div>
             </div>
             <div class="col-12 row pr-1 mb-2">
               <div class="col-3">
                 <img src="{{('asset/assets/images/dashboard/kering.jpg')}}" class="w-100 rounded" alt="image">
               </div>
               <div class="col-8 mb-2 text-left">
                 <h3>Kulit Kering</h3>
                 <p>Kulit wajah kering umumnya terjadi akibat rendahnya tingkat kelembapan pada lapisan kulit terluar. Hal ini mengakibatkan kulit kering mudah pecah-pecah dan mengalami keretakan pada permukaan kulit.</p>
                 <a href="https://www.alodokter.com/ketahui-perbedaan-kulit-kering-dan-dehidrasi" target="_blank" style="text-decoration: none;">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
               </div>
             </div>
             <div class="col-12 row pr-1 mb-2">
               <div class="col-3">
                 <img src="{{('asset/assets/images/dashboard/flek-hitam.jpg')}}" class="w-100 rounded" alt="image">
               </div>
               <div class="col-8 mb-2 text-left">
                 <h3>Flek Hitam</h3>
                 <p>Flek hitam muncul karena peningkatan produksi melanin di kulit, terutama setelah terpapar sinar matahari atau sinar ultraviolet. Melanin adalah pigmen alami yang menentukan warna kulit seseorang. Semakin banyak kandungan melanin pada kulit, maka semakin gelap kulit orang tersebut.</p>
                 <a href="https://www.alodokter.com/flek-hitam" target="_blank" style="text-decoration: none;">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
               </div>
             </div>
             <div class="col-12 row pr-1 mb-2">
               <div class="col-3">
                 <img src="{{('asset/assets/images/dashboard/kusam.jpg')}}" class="w-100 rounded" alt="image">
               </div>
               <div class="col-8 text-left">
                 <h3>Kulit Kusam</h3>
                 <p>Kulit yang memiliki cukup kelembapan. Ketika disentuh, kulit terasa kenyal, padat, dan lembut. Sebaliknya, kulit kusam tidak mendapatkan cukup kelembapan sehingga penampilannya tersamarkan oleh warna yang lebih gelap. Warna gelap pada kulit kusam berbeda dengan warna kulit yang gelap secara alami.</p>
                 <a href="https://hellosehat.com/penyakit-kulit/perawatan-kulit/kulit-kusam/" target="_blank" style="text-decoration: none;">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
               </div>
             </div>
           </div>
           <div class="d-flex mt-3 align-items-top">
             <img src="{{('asset/assets/images/dashboard/alodok.jpg')}}" class="img-sm rounded-circle mr-3" alt="image">
             <div class="mb-0 flex-grow">
               <h5 class="mr-2 mb-2">Sumber Artikel - ALODOKTER.</h5>
               <p>Artikel Lainnya: <a href="https://www.alodokter.com/" target="_blank" style="text-decoration: none;" class="mb-0 font-weight-bold">alodokter.com</a></p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- /.content -->
 @endsection