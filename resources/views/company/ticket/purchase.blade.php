@extends('layouts.company')

@section('header')

  @include('layouts.header')

@endsection('header')

@section('content')
<div class="container">
      <h1 class="c-hd-02">チケット申込み</h1>
      <div class="c-ticket-has">
        <div class="c-ticket-has-inner"><i class="c-icon c-icon-ticket"></i>所持チケット：7枚</div>
      </div>
      <!-- /.c-ticket-has -->
      <div class="center-block"> <label class="c-form-radio"><input type="radio" name="radio" value="1" checked><i></i><span class="c-form-radio-label">30チケット　￥285,000</span><span class="c-form-radio-text">（1人単価／￥9,500）</span></label><br> <label class="c-form-radio"><input type="radio" name="radio" value="2"><i></i><span class="c-form-radio-label">60チケット　￥450,000</span><span class="c-form-radio-text">（1人単価／￥9,500）</span></label><br> <label class="c-form-radio"><input type="radio" name="radio" value="3"><i></i><span class="c-form-radio-label">100チケット　￥850,000</span><span class="c-form-radio-text">（1人単価／￥9,500）</span></label> </div>
      <!-- /.center-block -->
      <div class="c-buttons"> <button class="c-button c-button-01 c-button-next"><i class="c-icon"></i>購入する</button> </div>
      <!-- /.c-buttons -->
    </div>
    <!-- /.container -->
@endsection


@section('footer')

  @include('layouts.footer')

@endsection('footer')