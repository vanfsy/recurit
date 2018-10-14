@extends('layouts.company')

@section('header')

  @include('layouts.header')

@endsection('header')

@section('content')
    <div class="container-wide">
      <h1 class="c-hd-02">セッション一覧</h1>
      <div class="row">
        <div class="col-xs-12">
          <ul class="c-session-list">
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <i class="c-icon c-icon-new c-session-new"><span class="hide">NEW</span></i> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <dl class="c-session-calendar-day-sat"><dt>4/2（土）</dt>
                      <dd>15：00～</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <dl class="c-session-calendar-day-sun"><dt>4/2（日）</dt>
                      <dd>15：00～</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <dl class="c-session-calendar-day-normal"><dt>4/2（月）</dt>
                      <dd>15：00～</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <div class="c-session-calendar-setting">日程調整中</div>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <dl class="c-session-calendar-day-normal"><dt>4/2（月）</dt>
                      <dd>15：00～</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <dl class="c-session-calendar-day-normal"><dt>4/2（月）</dt>
                      <dd>15：00～</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <dl class="c-session-calendar-day-normal"><dt>4/2（月）</dt>
                      <dd>15：00～</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
            <li class="c-session-list-item">
              <figure class="c-session-list-item-figure"> <img src="http://placehold.jp/666666/333333/446x592.png" alt=""> </figure>
              <div class="c-session-list-item-data">
                <div class="c-session-list-item-data-01">
                  <div class="c-session-name ellipsis">山田山田山田山田山田山田山田山田</div>
                  <div class="c-session-college">青山学院大学<br>2020年卒 / 文系</div>
                </div>
                <div class="c-session-list-item-data-02">
                  <div class="c-session-mail"> <i class="c-icon c-icon-mail"><span class="c-badge"><span class="c-badge-num">10</span></span></i></div>
                  <div class="c-session-calendar">
                    <dl class="c-session-calendar-day-normal"><dt>4/2（月）</dt>
                      <dd>15：00～</dd>
                    </dl>
                  </div>
                </div>
                <div class="c-session-list-item-comment">コミュ力、テキストテキストテキストテキストテキストテ</div>
                <div class="c-session-list-item-buttons">
                  <div> <a href="#" class="c-button c-button-01 c-button-next c-button-small"><i class="c-icon"></i>会った</a> </div>
                  <div> <a href="#" class="c-text-link">連絡取れない</a> <a href="#" class="c-text-link">通報する</a> </div>
                </div>
                <!-- /.c-session-list-item-buttons -->
              </div>
              <!-- /.c-session-list-item-data-02 -->
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.container -->
@endsection


@section('footer')

  @include('layouts.footer')

@endsection('footer')