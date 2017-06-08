
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-default top-menu" role="navigation">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <a class="top-logo" href="{!!route('f.homepage')!!}">
                  <img src="{!!asset('public/assets/frontend')!!}/images/logo-02.png" alt="">
              </a>
              <div id="navbar" class="navbar-collapse collapse navbar-right" aria-expanded="false">
                  <ul class="nav navbar-nav">
                      <li class="{!!\Active::setActive(1,'','current')!!}"><a href="{!!route('f.homepage')!!}">Trang Chủ</a></li>
                      <li class="{!!\Active::setActive(1,'amazing-summer','current')!!}"><a href="{!!route('f.getAmazingSummer')!!}">Amazing Summer</a></li>
                      <li class="{!!\Active::setActive(1,'amazing-race','current')!!}" ><a href="{!!route('f.getAmazing')!!}" >Amazing Race</a></li>
                      <li class="{!!\Active::setActive(1,'trai-nghiem-mua-he','current')!!}"><a href="{!!route('f.getTestimonial')!!}">Trải Nghiệm Mùa Hè</a></li>
                      <li class="{!!\Active::setActive(1,'thu-vien-hinh-anh','current')!!}"><a href="{!!route('f.getAlbum')!!}">Thư viện hình ảnh</a></li>
                      <li class="{!!\Active::setActive(1,'lich-hoc','current')!!}"><a href="{!!route('f.getlogin')!!}">Lịch Hoạt Động</a></li>
                      <li class="{!!\Active::setActive(1,'lien-he','current')!!}" ><a href="{!!route('f.getContact')!!}">Liên Hệ</a></li>
                      @if(Auth::client()->check())
                        <li class="{!!\Active::setActive(1,'doi-mat-khau','current')!!} parent">Profiles
                            <div class="wrap-submenu">
                                <ul class="sub-nav">
                                    <li><a href="{!!route('f.getChangpass')!!}">Đổi mật khẩu</a></li>
                                    <li><a href="{!!route('f.getLogout')!!}">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>
                      @endif
                  </ul>
              </div>
          </nav>
      </div>
    </div>
