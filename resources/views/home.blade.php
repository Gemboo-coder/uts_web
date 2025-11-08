@extends('layouts.layout')

@section('title','Home')
@section('content')

<div class="container text-center">
  <div class="row">

    <div class="col-6 col-sm-4">
        <img src="{{asset('images/image.png')}} "class="w-100" alt="">
    </div>
    <div class="col-6 col-sm-4">
        <h2>Muhammad Anshori</h2>
        <h4>2301040034</h4>
        <h4>programer 1 master programmer alias bossnya</h4>
    </div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4">
         <h2>Tio Alvandie</h2>
        <h4>2301040026</h4>
        <h4>Programmer 2 ternaknya programer 1</h4>
    </div>

    <div class="col-6 col-sm-4"><img src="{{asset('images/mbappe.png')}}" alt=""></div>
  </div>
</div>
@endsection 