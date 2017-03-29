
    <div class="container">
      <nav class="navbar navbar-default top-menu" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a class="top-logo" href="#">
                <img src="{!!asset('public/assets/frontend')!!}/images/logo-02.png" alt="">
            </a>
            <div id="navbar" class="navbar-collapse collapse navbar-right" aria-expanded="false">
                <ul class="nav navbar-nav">
                    <li class="{!!\Active::setActive(1,'','current')!!}"><a href="{!!route('f.homepage')!!}">Amazing Summer</a></li>
                    <li class="{!!\Active::setActive(1,'amazing','current')!!}" ><a href="{!!route('f.getAmazing')!!}" >Amazing Race</a></li>
                    <li><a href="#">Enrichment schedule</a></li>
                    <li><a href="#">Testimonial</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="{!!\Active::setActive(1,'lien-he','current')!!}" ><a href="{!!route('f.getContact')!!}">Contact us</a></li>
                </ul>
            </div>
        </nav>
    </div>
