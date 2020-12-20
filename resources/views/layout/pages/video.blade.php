@extends('layout.master')
@section('content')

      <section
        class="breadcrumb-area"
        style="
              max-height: 100px;
              background-image: url('/front-asset/images/breadcrumb/breadcrumb-4.jpg');
          "
      >
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="inner-content clearfix">
                <div class="title">
                  <h3 style="color:white;font-weight:bold">
                    3D Exhibition
                  </h3>
                </div>
                <div class="breadcrumb-menu">
                  <ul class="clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">3D Exhibition</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br />
      @if($video->type=='youtube')
      <section>
        <div class="col-md-8 col-sm-12 offset-md-2">
         <iframe width="100%" height="315" src="{{$video->link}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe>
        </div>
      </section>
      @else
      <section>
        <div class="col-md-8 col-sm-12 offset-md-2" style="display: flex;justify-content: center;">
          <div id="fb-root"></div>
          <div class="fb-video" data-href="{{$video->link}}" data-autoplay="true" data-width="800" data-show-text="false">
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="{{$video->link}}">
                <!--<a href="https://www.facebook.com/facebook/videos/10153231379946729/">How to Share With Just Friends</a>-->
                <!--<p>How to share with just friends.</p>-->
                <!--Posted by <a href="https://www.facebook.com/facebook/">Facebook</a> on Friday, December 5, 2014-->
              </blockquote>
            </div>
          </div>
        </div>
      </section>
      @endif
      <br><br>
@endsection
@section('js')
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
@endsection
