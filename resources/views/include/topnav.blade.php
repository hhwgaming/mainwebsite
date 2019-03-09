<!--================Header Menu Area =================-->
<header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="/"><img src="img/freelogo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav justify-content-center">
            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item" ><a href="{{ route('login') }}" class="primary_btn">Log In</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item" style="margin-left:10px"><a href="{{ route('register') }}" class="primary_btn">Sign Up</a></li>
          </ul>

         </div>

        </div>
      </div>
    </nav>
  </div>
</header>
<!--================Header Menu Area =================-->
