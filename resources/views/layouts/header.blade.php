@if(isset($background_image) && $background_image)
    <style>
        @media screen and (min-width: 768px) {
            .main-header {
                background: url("{{ $background_image }}") no-repeat center center;
                background-size: 100% auto;
                position: static;
            }
        }
    </style>
@endif
<header class="main-header">
    <div class="container-fluid" style="margin-top: -15px">
        <nav class="navbar site-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#blog-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">blog首页</a>
            </div>
            <div class="collapse navbar-collapse fix-top" id="blog-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="menu-item" href="#">归档</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right blog-navbar">
                    <li><a href="{{ url('login') }}">登录</a></li>
                    <li><a href="{{ url('register') }}">注册</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search" method="get" action="">
                    <input type="text" class="form-control" name="q" placeholder="搜索" required>
                </form>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="description">{{ $description or 'Stay Hungry. Stay Foolish.' }}</div>
    </div>
</header>