@extends('layouts.company')

@section('header')

  @include('layouts.header')

@endsection('header')

@section('content')
    <div class="container">
      <h1 class="c-hd-02">チケット管理</h1>
      <div class="c-ticket-has">
        <div class="c-ticket-has-inner"><i class="c-icon c-icon-ticket"></i>所持チケット：10枚</div>
      </div>
      <!-- /.c-ticket-has -->
      <div class="c-buttons"> <button class="c-button c-button-01 c-button-next"><i class="c-icon"></i>購入する</button> </div>
      <!-- /.c-buttons -->
      <hr class="c-hr">
      <h2 class="c-hd-03">購入履歴</h2>
      <ul class="c-ticket-list">
        <li>
          <div class="c-ticket-list-date">2018/05/08（火）</div>
          <div class="c-ticket-list-status is-done">入金済み</div>
          <div class="c-ticket-list-num">30チケット　￥285,000</div>
        </li>
        <li>
          <div class="c-ticket-list-date">2018/05/08（火）</div>
          <div class="c-ticket-list-status">未入金</div>
          <div class="c-ticket-list-num">100チケット　￥285,000</div>
        </li>
        <li>
          <div class="c-ticket-list-date">2018/05/08（火）</div>
          <div class="c-ticket-list-status is-done">入金済み</div>
          <div class="c-ticket-list-num">30チケット　￥285,000</div>
        </li>
        <li>
          <div class="c-ticket-list-date">2018/05/08（火）</div>
          <div class="c-ticket-list-status is-done">入金済み</div>
          <div class="c-ticket-list-num">30チケット　￥285,000</div>
        </li>
        <li>
          <div class="c-ticket-list-date">2018/05/08（火）</div>
          <div class="c-ticket-list-status">未入金</div>
          <div class="c-ticket-list-num">100チケット　￥285,000</div>
        </li>
      </ul>
      <hr class="c-hr">
      <div class="text-right"> <a href="#" class="c-text-link">購入履歴一覧</a> </div>
    </div>
    <!-- /.container -->
@endsection


@section('footer')

  @include('layouts.footer')

@endsection('footer')