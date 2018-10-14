@section('header')
  <nav class="navbar navbar-default header navbar-fixed-top">
    <div class="container-wide">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> <a class="header-sitelogo" href="/"><img src="{{ asset('images/header-logo.png') }}" alt="LOGO"></a>
        <ul class="header-nav-sp">
          <li><a href="#"><i class="c-icon c-icon-header-nav-ticket">
          <span class="c-badge"><span class="c-badge-num">10</span></span></i></a></li>
        </ul>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-left header-search c-form-search">
          <div class="form-group"> <input type="text" class="form-control" placeholder="学校名などキーワード検索"> </div> <button type="submit"><i class="c-icon c-icon-form-search"></i><span class="hidden">検索</span></button> </form>
        <ul class="nav navbar-nav yamm">
          <li class="dropdown yamm-fw"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">絞り込み <i class="c-icon c-icon-header-dropdown-arrow"></i></a>
            <ul class="dropdown-menu yamm-dropdown-menu">
              <li>
                <div class="yamm-content">
                  <div class="row">
                    <div class="container-wide">
                      <div class="header-detail">
                        <div class="header-detail-close"> <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <i class="c-icon c-icon-header-dropdown-close"></i></a> </div>
                        <!-- /.header-detail-back -->
                        <div class="header-detail-back"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="c-icon c-icon-header-dropdown-arrow"></i> 戻る</a> </div>
                        <!-- /.header-detail-back -->
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">キーワード</div>
                          <ul class="header-detail-list-form">
                            <li>
                              <form class="navbar-form navbar-left header-search c-form-search">
                                <div class="form-group"> <input type="text" class="form-control" placeholder="学校名などキーワード検索"> </div> <button type="submit"><i class="c-icon c-icon-form-search"></i><span class="hidden">検索</span></button> </form>
                            </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">学歴</div>
                          <ul class="header-detail-list-form">
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>Sランク（早慶上智以上）</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox"  checked><span>Aランク（GMARCHレベル）</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>Bランク（日東駒専レベル）</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>Cランク（大東亜帝国レベル）</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>その他</span></label> </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">学年</div>
                          <ul class="header-detail-list-form">
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>1年生</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox"  checked><span>2年生</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>3年生</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>4年生</span></label> </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">地域</div>
                          <ul class="header-detail-list-form">
                            <li> <span class="header-detail-select"><select>
            <option value="">地域を選択</option>
            <option value="">地域を選択</option>
          </select></span> </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">性別</div>
                          <ul class="header-detail-list-form">
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>男性</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox"  checked><span>女性</span></label> </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">専攻</div>
                          <ul class="header-detail-list-form">
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>文系</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox"  checked><span>理系</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>服飾</span></label> </li>
                            <li> <label class="header-detail-check"><input type="checkbox" ><span>美術</span></label> </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">日時</div>
                          <ul class="header-detail-list-form">
                            <li>
                              <div class='col-sm-12 header-detail-datepicker'> <input type='text' class="header-detail-datepicker-input" id='datetimepicker' /> </div>
                              <script type="text/javascript">
                                $(function () {
                                  $('#datetimepicker').datetimepicker({
                                    format: 'L',
                                    locale: 'ja'
                                  });
                                });
                              </script>
                            </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">学歴</div>
                          <ul class="header-detail-list-form">
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>金融</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox"  checked><span>IT</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>アパレル</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>金融</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>IT</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>アパレル</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>金融</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>IT</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>アパレル</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>金融</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>IT</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>アパレル</span></label> </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">パーソナル</div>
                          <ul class="header-detail-list-form">
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>＃アイディアマン</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox"  checked><span>＃真面目にコツコツ</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>＃なんでもやってみたい</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>＃インターンを探している</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>＃ポジティブ</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>＃流行に敏感</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>＃なんでa＃何かつくることが好きもやってみたい</span></label> </li>
                            <li> <label class="header-detail-tag"><input type="checkbox" ><span>＃リーダー気質</span></label> </li>
                          </ul>
                        </div>
                        <div class="c-buttons"> <button class="c-button c-button-01 c-button-search"><i class="c-icon"></i>検　索</button> </div>
                        <!-- /.c-buttons -->
                      </div>
                      <!-- /.header-detail -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right header-nav">
          <li><a href="#"><i class="c-icon c-icon-header-nav-like"></i>お気に入り</a></li>
          <li><a href="#"><i class="c-icon c-icon-header-nav-message"></i>メッセージ</a></li>
          <li><a href="#"><i class="c-icon c-icon-header-nav-event"></i>イベント</a></li>
          <li><a href="#"><i class="c-icon c-icon-header-nav-session"></i>セッション</a></li>
          <li> <a href="#">
            <i class="c-icon c-icon-header-nav-ticket"><span class="c-badge"><span class="c-badge-num">10</span></span></i>
          チケット</a></li>
          <li><a href="#"><i class="c-icon c-icon-header-nav-setting"></i>設定</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
@endsection