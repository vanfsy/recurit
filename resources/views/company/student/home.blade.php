@extends('layouts.company')

@section('header')

  @include('layouts.header')

@endsection('header')

@section('content')
<div class="container-wide">
      <div class="row">
        <div class="col-xs-12">
          <ul class="c-student-sort">
            <li><a href="#" class="is-current">新着順</a></li>
            <li><a href="#">ログイン順</a></li>
            <li><a href="#">人気順</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <ul class="c-student-list">
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <i class="c-icon c-icon-new c-student-new"><span class="hide">NEW</span></i> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <i class="c-icon c-icon-new c-student-new"><span class="hide">NEW</span></i> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <i class="c-icon c-icon-new c-student-new"><span class="hide">NEW</span></i> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
            <li class="c-student-list-item">
              <a href="#" role="button" data-toggle="modal" data-target="#myModal">
                <figure class="c-student-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> <span class="c-student-list-item-button">詳細</span> </figure>
              </a>
              <div class="c-student-list-item-data">
                <div class="c-student-name ellipsis">山田山田山田山田山田山田山田山田</div>
                <div class="c-student-college">青山学院大学<br>2020年卒 / 文系</div>
                <div class="c-student-login">3日以内にログイン</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-close"><span class="modal-close-button" data-dismiss="modal" aria-label="Close"><i class="c-icon c-icon-modal-close-01"></i></span></div>
          <div class="modal-content">
            <div class="modal-body">
              <div class="c-student-detail">
                <div class="c-student-detail-person">
                  <div class="c-student-detail-person-left">
                    <figure class="c-student-detail-person--figure"> <i class="c-icon c-icon-new c-student-new"><span class="hide">NEW</span></i> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
                    <div class="c-student-login">3日以内にログイン</div>
                  </div>
                  <!-- /.c-student-detail-person-left -->
                  <div class="c-student-detail-person-right">
                    <div class="c-student-name">山田花子</div>
                    <div class="c-student-college">東京大学<br>2021年卒 / 理系</div>
                    <div class="c-student-sex"><span>女性</span></div>
                    <dl class="c-student-data"> <dt>PRポイント</dt>
                      <dd>コミュ力、テキストテキストテキストテキストテキストテキストテキストテキスト</dd> <dt>趣味</dt>
                      <dd>スポーツ、読書</dd> <dt>勤務可能地</dt>
                      <dd>東京、神奈川</dd>
                    </dl>
                  </div>
                  <!-- /.c-student-detail-person-right -->
                </div>
                <!-- /.c-student-detail-person -->
                <ul class="c-tags">
                  <li><span class="c-tag">＃流行に敏感</span></li>
                  <li><span class="c-tag">＃流行に敏感</span></li>
                  <li><span class="c-tag">＃流行に敏感</span></li>
                </ul>
                <h2 class="c-hd-03">出品中の時間</h2>
                <div class="c-student-calendar">
                  <dl class="c-student-calendar-day-normal"> <dt>4/2（月）</dt>
                    <dd>15：00 - 16：30</dd>
                  </dl>
                  <dl class="c-student-calendar-day-sat"> <dt>4/2（土）</dt>
                    <dd>15：00 - 16：30</dd>
                  </dl>
                  <dl class="c-student-calendar-day-sun"> <dt>4/2（日）</dt>
                    <dd>15：00 - 16：30</dd>
                  </dl>
                  <dl class="c-student-calendar-day-normal"> <dt>4/2（月）</dt>
                    <dd>15：00 - 16：30</dd>
                  </dl>
                  <dl class="c-student-calendar-day-normal"> <dt>4/2（月）</dt>
                    <dd>15：00 - 16：30</dd>
                  </dl>
                </div>
                <!-- /.c-student-calendar -->
              </div>
              <!-- /.c-student-detail -->
              <div class="c-buttons"> <button type="button" class="c-button c-button-01 c-button-next" data-dismiss="modal" aria-label="Close"><i class="c-icon"></i>候補に入れる</button> </div>
              <!-- /.c-buttons -->
              <div class="c-student-recommend">
                <h3 class="c-student-recommend-hd">この学生にアポを取った人は、こんな学生も見ています</h3>
                <ul class="c-student-recommend-list">
                  <li><a href="#"><img src="http://placehold.jp/666666/333333/446x592.png" alt=""></a></li>
                  <li><a href="#"><img src="http://placehold.jp/666666/333333/446x592.png" alt=""></a></li>
                  <li><a href="#"><img src="http://placehold.jp/666666/333333/446x592.png" alt=""></a></li>
                  <li><a href="#"><img src="http://placehold.jp/666666/333333/446x592.png" alt=""></a></li>
                </ul>
              </div>
              <!-- /.c-student-recommend -->
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