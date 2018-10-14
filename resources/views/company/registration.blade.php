@extends('layouts.company')

@section('header')

  @include('layouts.header')

@endsection('header')

@section('content')
<div class="container">
      <h1 class="c-hd-02">本登録</h1>
      <div class="row">
        <div class="form-group col-xs-12"> <label>会社名</label> <input type="text" name="" class="form-control" placeholder="〇〇コーポレーション"> </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="form-group col-xs-12"> <label>担当者名</label> <input type="text" name="" class="form-control" placeholder="山田"> </div>
        <div class="form-group col-xs-12"> <input type="text" name="" class="form-control" placeholder="太郎"> </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="form-group col-xs-12"> <label>メールアドレス</label> <input type="email" name="" class="form-control" placeholder="※ログインIDになります。"> </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="form-group col-xs-12"> <label>電話番号</label> <input type="tel" name="" class="form-control" placeholder="08000000000"> </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="form-group col-xs-12"> <label>パスワード</label> <input type="password" name="" class="form-control" placeholder="*******"> </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <p class="c-text-middle">利用規約、プライバシーポリシー、個人情報取得に関する明示事項をご確認ください。</p> <label class="c-form-radio center-block"><input type="radio"><i></i>利用規約に同意する</label>
          <div class="c-buttons"> <button class="c-button c-button-01 c-button-next"><i class="c-icon"></i>登録する</button> </div>
          <!-- /.c-buttons -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection


@section('footer')

  @include('layouts.footer')

@endsection('footer')