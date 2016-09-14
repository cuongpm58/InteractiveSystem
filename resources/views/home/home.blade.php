<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <title>Diebold Nixdorf</title>

    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/home/stylehome.css">
    <link rel="stylesheet" href="public/home/style.css">

  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header"> 
      <div class="logo">
        <a href="home" class="navbar-brand"><img src="public/image/DieboldLogo.jpg" alt="Forest" width="200" height="120"></a>
      </div>
      <div class="alignRight">
         Xin chào {!! Auth::user()->name !!} | <a href="{!! url('logout') !!}">LogOut </a> | <a href="signup">SignUp</a>
      </div>
      <div class="name">
        DIEBOLD INTERACTIVE REQUIREMENTS SYSTEM
      </div>
    </div>
    <div class="header">
        <nav class="navbar navbar-custom">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="main-menu" >
            <ul class="nav navbar-nav ">
             <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="">Tạo yêu cầu <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="khac-phuc-su-co">Khắc phục sự cố </a></li>
                  <li><a href="bao-tri">Bảo trì</a></li>
                  <li><a href="tra-soat">Tra soát</a></li>
                  <li><a href="yeu-cau-khac">Yêu cầu khác</a></li>
                  </ul>
              </li>
              <li><a href="#">Infomation</a></li>
              <li><a href="user">User</a></li>
              <li><a href="profile">Chỉnh sửa thông tin cá nhân</a></li>
              <li><a href="changepass">Đổi mật khẩu</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="container">
      @yield('content')
    </div>
    
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </body>
</html>