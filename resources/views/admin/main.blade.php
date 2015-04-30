<html>
    <head>
        <title></title>

        <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/styles/ionicons.css') }}">

        <link rel="stylesheet/less" href="{{ URL::to('assets/less/style.less') }}" media="screen" title="no title" charset="utf-8">
        <script src="{{ URL::to('assets/js/less.min.js') }}"></script>

    </head>
    <body>

        <div class="navbar top">
            <div class="navbar-navigation">
                <a onclick="taggle_sidebar()"><li class="menu-item"><i class="ion-navicon"></i></li></a>
            </div>

            <ul class="navbar-menu push-right">
                <a>
                    <img src="assets/img/goleg-01.svg"/>
                </a>
                <a><li class="menu-item"><i class="icon ion-ios-home"></i>Beranda</li></a>
                <a><li class="menu-item"><i class="icon ion-ios-book"></i>Belajar</li></a>
                <a><li class="menu-item"><i class="icon ion-ios-chatboxes"></i>Diskusi</li></a>
                <li style="float:right;">
                    <div class="form with-icon" style="float:right;">
                        <div class="item right">
                            <a class="ion-ios-search-strong"></a>
                            <input type="text" name="some_name" value="" placeholder="Cari">
                        </div>
                    </div>
                </li>
            </ul>

        </div>


        <div class="sidebar-menu left">
            <div class="profile">
                <div class="pict">
                    <img src="uploads/photo.jpg">
                </div>
                <div class="name">
                    <h3>
                        Bassamtiano
                    </h3>
                </div>
                <div class="status">
                    <p>Administrator</p>
                </div>
            </div>
            <ul class="menu">
                <a class="item active" data-target="{{ URL::to('admin/beranda') }}">
                    <li>
                        <i class="ion-home"></i>
                        <p>BERANDA</p>
                    </li>
                </a>
                <a class="item" data-target="{{ URL::to('admin/classes') }}">
                    <li>
                        <i class="ion-person"></i>
                        <p>ARTIKEL</p>
                    </li>
                </a>
                <a class="item" data-target="{{ URL::to('admin/subject') }}">
                    <li>
                        <i class="ion-ios-email"></i>
                        <p>DISKUSI</p>
                    </li>
                </a>
                <a class="item" data-target="{{ URL::to('admin/subject') }}">
                    <li>
                        <i class="ion-ios-email"></i>
                        <p>BELAJAR</p>
                    </li>
                </a>
                <a class="item" data-target="{{ URL::to('admin/lecturer') }}">
                    <li>
                        <i class="ion-document-text"></i>
                        <p>KATEGORI</p>
                    </li>
                </a>
                <a class="item" data-target="{{ URL::to('admin/belajar') }}">
                    <li>
                        <i class="fa fa-book"></i>
                        <p>ANGGOTA</p>
                    </li>
                </a>
                <a class="item" data-target="{{ URL::to('admin/konfigurasi') }}">
                    <li>
                        <i class="ion-gear-a"></i>
                        <p>KONFIGURASI</p>
                    </li>
                </a>
                <a class="item" href="{{ URL::to('admin/logout') }}">
                    <li>
                        <i class="ion-log-out"></i>
                        <p>LOG OUT</p>
                    </li>
                </a>
            </ul>
        </div>



    </body>
</html>
