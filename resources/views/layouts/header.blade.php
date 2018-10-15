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

        @if ( isset($student_search_enabled) && $student_search_enabled )
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
                            @foreach ($codes['academies'] as $academy)
                                <li> <label class="header-detail-check"><input type="checkbox" ><span>{{ $academy->title }}</span></label> </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">学年</div>
                          <ul class="header-detail-list-form">
                            @foreach ($codes['graduate_years'] as $year)
                                <li> <label class="header-detail-check"><input type="checkbox" ><span>{{ $year }}</span></label> </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">地域</div>
                          <ul class="header-detail-list-form">
                            <li> <span class="header-detail-select"><select>
                                <option value="">地域を選択</option>
                                <option value="">地域を選択</option>
                              </select></span>
                            </li>
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">性別</div>
                          <ul class="header-detail-list-form">
                            @foreach ($codes['gender'] as $gender)
                                <li> <label class="header-detail-check"><input type="checkbox" ><span>{{ $gender }}</span></label> </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">専攻</div>
                          <ul class="header-detail-list-form">
                            @foreach ($codes['major'] as $major)
                                <li> <label class="header-detail-check"><input type="checkbox" ><span>{{ $major->name }}</span></label> </li>
                            @endforeach
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
                            @foreach ($codes['industry_tags'] as $interest)
                                <li> <label class="header-detail-tag"><input type="checkbox" ><span>{{ $interest->name }}</span></label> </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="header-detail-list">
                          <div class="header-detail-list-hd">パーソナル</div>
                          <ul class="header-detail-list-form">
                            @foreach ($codes['personal_tags'] as $personal)
                                <li> <label class="header-detail-tag"><input type="checkbox" ><span>{{ $personal->name }}</span></label> </li>
                            @endforeach
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
        @endif

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