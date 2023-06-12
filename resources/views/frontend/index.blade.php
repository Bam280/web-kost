@extends('frontend.partials.master')
@section('content')
@include('frontend.partials.modal')
<!-- Welcome Area Start -->
 <section class="aubna-welcome-area">
    <!--Content before waves-->
    <div class="container text-center">
       <div class="align-items-center justify-content-between ">
          <div class="inner-header">
            <div class="row">
               <div class="col">
                  <div class="welcome-left">
                    <h1>Veteran Kos</h1>
                    <p>Kosan siap huni di sekitar kampus UPNVJ</p>
                  </div>
               </div>
            </div>
             {{-- <div class="inner-content">
                
             </div> --}}
          </div>
       </div>
    </div>
 </section>
<!-- Welcome Area End -->
  
<!-- Blog Area Start -->
<section class="aubna-blog-area section_50">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="site-heading">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1402.050040831558!2d106.79443033369567!3d-6.316632678101145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1686593440690!5m2!1sen!2sid" 
               width="580" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="align-items-center text-center">
               <a href="#" class="btn btn-secondary btn-lg">Mulai Mencari kost</a>
            </div>
         </div>
   </div>
</section>
<!-- Blog Area End -->
@endsection