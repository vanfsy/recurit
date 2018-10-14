@extends('layouts.company')

@section('header')

  @include('layouts.header')

@endsection('header')

@section('content')
    <div class="container-wide">
      <div class="c-notice c-notice--reserved visible-xs"> テキストテキストテキスト <span class="c-notice-next" role="button" data-toggle="modal" data-target="#myModal">
      <i class="c-icon c-icon-button-next"></i>
    </span> </div>
      <!-- /.c-notice -->
      <h1 class="c-hd-02">セッション詳細</h1>
      <div class="l-chat">
        <div class="l-chat-reserved hidden-xs">
          <div class="c-reserved">
            <div class="c-step">
              <ol class="c-step-list">
                <li class="c-step-list-item is-current">申込</li>
                <li class="c-step-list-item">確定</li>
                <li class="c-step-list-item">終了</li>
              </ol>
            </div>
            <!-- /.c-step -->
            <div class="c-reserved-alert">
              <p>○○○○さんから出品がありました！</p>
            </div>
            <!-- /.c-reserved-alert -->
            <div class="c-reserved-text">
              <p>テキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <!-- /.c-reserved-text -->
            <div class="row">
              <div class="form-group col-xs-12"> <label>場所</label> <input type="text" name="" class="form-control"> </div>
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="form-group col-xs-12"> <label>内容</label> <textarea name="" id="" rows="8" class="form-control"></textarea> </div>
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-xs-12"> <label class="c-form-radio center-block"><input type="radio"><i></i>利用規約に同意する</label>
                <div class="c-buttons"> <button class="c-button c-button-01 c-button-next"><i class="c-icon"></i>登録する</button> </div>
                <!-- /.c-buttons -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.c-reserved -->
        </div>
        <!-- /.l-chat-reserved -->
        <div class="l-chat-chat">
          <div class="c-chat">
            <div class="c-chat-list">
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--user">
                <figure class="c-chat-list-item-user"> <img src="http://placehold.jp/666666/333333/130x130.png" alt=""> </figure>
                <!-- /.c-chat-list-item-user -->
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
              <div class="c-chat-list-item c-chat-list-item--admin">
                <div class="c-chat-list-item-comment">
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <!-- /.c-chat-list-item-comment -->
              </div>
              <!-- /.c-chat-list-item -->
            </div>
            <!-- /.c-chat-list -->
            <div class="c-chat-input"> <span class="c-chat-input-button"><i class="c-icon c-icon-chat-plus"></i></span>
              <div class="c-chat-input-form"> <input type="text"> <button class="c-chat-input-form-button">
            <i class="c-icon c-icon-chat-arrow"></i>
          </button> </div>
              <!-- /.c-chat-input-form -->
            </div>
            <!-- /.c-chat-input u-sp -->
          </div>
          <!-- /.c-chat -->
        </div>
        <!-- /.l-chat-chat -->
      </div>
      <!-- /.l-chat -->
      <!-- Modal -->
      <div class="modal modal-02" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-close"><span class="modal-close-button" data-dismiss="modal" aria-label="Close"><i class="c-icon c-icon-modal-close-02"></i></span></div>
          <div class="modal-content">
            <div class="modal-body">
              <div class="c-step">
                <ol class="c-step-list">
                  <li class="c-step-list-item is-current">申込</li>
                  <li class="c-step-list-item">確定</li>
                  <li class="c-step-list-item">終了</li>
                </ol>
              </div>
              <!-- /.c-step -->
              <div class="c-reserved-alert">
                <p>○○○○さんから出品がありました！</p>
              </div>
              <!-- /.c-reserved-alert -->
              <div class="c-reserved-text">
                <p>テキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
              <!-- /.c-reserved-text -->
              <div class="row">
                <div class="form-group col-xs-12"> <label>場所</label> <input type="text" name="" class="form-control"> </div>
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="form-group col-xs-12"> <label>内容</label> <textarea name="" id="" rows="8" class="form-control"></textarea> </div>
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-xs-12"> <label class="c-form-radio center-block"><input type="radio"><i></i>利用規約に同意する</label>
                  <div class="c-buttons"> <button class="c-button c-button-01 c-button-next"><i class="c-icon"></i>登録する</button> </div>
                  <!-- /.c-buttons -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
        </div>
      </div>
      <!-- / Modal -->
    </div>
    <!-- /.container -->
@endsection


@section('footer')

  @include('layouts.footer')

@endsection('footer')