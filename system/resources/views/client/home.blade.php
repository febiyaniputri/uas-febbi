@extends('client.section.base')

@section('content_front')

<div class="using">
   <div class="container-fluid">
      <div class="row d_flex">
         <div class="col-md-6">
            <div class="titlepage">
               <h2 >Lorem Ipsum using</h2>
               <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
               <a class="read_more white_bg" href="Javascript:void(0)"> Read More</a>
            </div>
         </div>
         <div class="col-md-5 offset-md-1 padding_right0">
            <div class="frout_img">
               <figure><img src="{{ url('public/shopp') }}/images/frout.png" alt="#"/></figure>
            </div>
         </div>
      </div>
   </div>
</div>

<div  class="gallery">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Gallery</h2>
               <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-6">
            <div class="gallery_img">
               <figure><img src="{{ url('public/shopp') }}/images/gallery1.png" alt="#"/></figure>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="gallery_img">
               <figure><img src="{{ url('public/shopp') }}/images/gallery2.png" alt="#"/></figure>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="gallery_img">
               <figure><img src="{{ url('public/shopp') }}/images/gallery3.png" alt="#"/></figure>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="gallery_img">
               <figure><img src="{{ url('public/shopp') }}/images/gallery4.png" alt="#"/></figure>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="gallery_img">
               <figure><img src="{{ url('public/shopp') }}/images/gallery5.png" alt="#"/></figure>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="gallery_img">
               <figure><img src="{{ url('public/shopp') }}/images/gallery6.png" alt="#"/></figure>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection