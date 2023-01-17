@extends('customer.master')

@section('content')

<div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="index.html">Home</a><span>|</span>404</div>
        </div>
      </div>
      <div id="content">
        <div class="container">

          <div class="title1">ERROR 404</div>

          <div class="title2">Sorry but the page you are looking for does not exist has changed name or been removed</div>

          <div class="page-not-found">
            <img src="images/page-not-found.png" alt="" class="img-fluid">
            <div class="txt1"><span>OPPS!</span> THIS PAGE COULD NOT BE FOUND!</div>
            <div class="txt2"><a href="index.html" class="btn1">go to homepage</a></div>

          </div>

        </div>
      </div>

@endsection('content')