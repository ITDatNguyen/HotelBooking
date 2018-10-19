<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!-- bootstrap: de y' 2 file: ajax phai dat truoc maxcdn thi moi dung` duoc modal (Form)-->
    <!-- Online -->
    <!--neu dung`: bootstrap.css (chua nen') de co the xem dc code, khi chay chinh thuc thi dung` ban min-->
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <!-- Offline -->
    <link rel="stylesheet" href="../../Utilities/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../../Utilities/jQuery-1.x/jquery-1.11.3.min.js"></script>
    <script src="../../Utilities/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!--Google Action Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Font Awesome Web Application Icons-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
        header{
            /*height: 65px;*/
            width: 100%;
            /*border-bottom: solid thin black;*/
            /*background-color: white;*/
            /*color: black;*/
        }
        #left-header{
            float: left;
            margin-left: 20px;
            /*sau khi them jquery-1.11.3.min.js thi css moi co tac dung*/
            line-height: 60px;
        }
        #left-header a:hover{
            text-decoration: none;
        }
        #right-header{
            float: right;
            /*neu tach so' dt ra lam 2 thi co the bi anh huong*/
            line-height: 60px;
        }
        #right-header a{
            color: black;
        }
        #right-header a:hover{
            /*loai bo dau gach. duoi'*/
            text-decoration: none;
        }
        #language{
            cursor: pointer;
        }
        button[type="button"].mybtn-style1{
            border: 0;
        }
        #welcome{
            float: left;
            margin-right: 10px;
            /*display: inline-flex; bi xoa' khi load tu` home page*/
            display: none;
        }
        .dropdown-menu a{
            /*do ko su dung thuoc tinh href*/
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- dung` cho cac trang con` lai
    search-hotels.html & book-now -->
    <header>
        <!--class="container-fluid" su dung khi lien quan den float-->
        <div class="container-fluid">
            <!--khi zoom trinh duyet den' gioi han. nho nhat' thi` se~ cho phep' trôi xuống dưới    -->
            <div id="left-header">
                <!--neu load tu` home page thi ghi day du thu* muc ngoai`-->
                <!--<img src="header-footer/img/header_logo.png" width="150"/>-->
                <!--<span style="color: white">Mạng đặt phòng khách sạn Online</span>-->

                <a href="../Pages/homepage.html" target="_self" title="Về trang chủ">
                    <img src="../img/img/logo.png" width="110px"/>
                </a>
                <span>Mạng đặt phòng khách sạn Online</span>

            </div>

            <div id="right-header">
                <div style="float: left; border-right: solid thin rgb(238,238,238)">
                    <a href="download-apps.html" target="_self" style="color: black" title="Tải ứng dụng YOY">
                        <!-- trang chu co rat nhieu the a => ko the cai thuoc tinh' color white cho tung` the -->
                        <!-- khi doi ten file, se~ tim` ra cac dong` lenh dang cai` co lien quan, chinh sua xong thi` ra ngoai folder doi ten -->
                        <img src="../img/img/mobile-icon.png" height="40px"/>
                        <span style="margin-right: 10px">Download App </span>
                    </a>
                </div>

                <div id="welcome" style="padding-left: 10px">
                    <i class="material-icons" style="float: left; margin-top: 15px; font-size: 30px">
                        supervisor_account
                    </i>
                    <!--Dropdown Divider: http://www.w3schools.com/bootstrap/bootstrap_dropdowns.asp-->
                    <div class="dropdown" style="float: left;">
                        <button class="btn btn-default dropdown-toggle mybtn-style1" type="button" data-toggle="dropdown">
                            <!--<span class="glyphicon glyphicon-search"></span>-->
                            Xin chào Group 6
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li style="line-height: 30px">
                                <a onclick="alert('Đang cập nhật...')">
                                    <i class="material-icons" style="color: rgb(166, 166, 166)">info</i>
                                    <span>Thông tin tài khoản</span>
                                </a>
                            </li>
                            <li>
                                <a onclick="alert('Đang cập nhật...')">
                                    <i class="material-icons" style="color: rgb(166, 166, 166)">card_travel</i>
                                    <span>Các chuyến đi đã lưu</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="container-fluid"
                                   onclick="
//                                  alert('ĐÃ ĐĂNG XUẤT');
                                    localStorage.check_login = 'false';
                                    history.go(0); ">
                                    <span style="float: left">Đăng xuất</span>
                                    <i class="fa fa-sign-out" style="font-size: 20px; float: right; color: rgb(166, 166, 166)"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="signup-signin" style="float: left; margin-right: 5px; margin-left: 10px">
                    <!--khi thoat form ma` ko dung` &time thi so lieu van con luu (luc nay form dag an? chu' chua thoat-->
                    <!--=> so lieu van~ con` luu lai)-->
                    <!--http://stackoverflow.com/questions/15827262/how-to-reset-form-body-in-bootstrap-modal-box-->
                    <a href="modal-user/user-signup.html" data-toggle="modal" data-target="#theModal"
                       onclick="
                        $('.modal').on('hidden.bs.modal', function(){
                            $(this).find('form')[0].reset();
                        });
                        ">THAM GIA</a>

                    <span>&nbsp;|&nbsp;</span>

                    <a href="modal-user/user-login.html" data-toggle="modal" data-target="#theModal" style="margin-right: 10px"
                       onclick="
                        $('.modal').on('hidden.bs.modal', function(){
                            $(this).find('form')[0].reset();
                        });
                        ">ĐĂNG NHẬP</a>
                </div>

                <div style="float: left; border-right: solid thin rgb(238,238,238); margin-right: 5px">
                    <img id="language" src="../img/img/flagvn_thumbnail.png"
                         onclick="var $src = $(this).attr('src');
                            if ($src == 'header-footer/img/flagvn_thumbnail.png'){
                                $(this).attr('src','header-footer/img/flageng_thumbnail.png');
                                } else {
                                $(this).attr('src','header-footer/img/flagvn_thumbnail.png');
                            }"
                         style="margin-right: 15px; " width="32px" height="24px" title="Chọn ngôn ngữ"/>
                </div>

                <!--them style="float: left", doi luc xay ra loi khi refresh trang-->
                <a href="modal-user/user-24h.html" data-toggle="modal" data-target="#myModal-24h" title="Gọi trực tuyến"
                   style="color: white; float: left">
                    <img src="../img/img/24h_white.png"/>
                </a>
            </div>
        </div>
    </header>

    <!-- dat. tai trang chu hoac dat o day -->
    <!-- Form Sign-Up & Log In: Ho tro link den' file Sign-up -->
    <!--<a href="Sign-up.html" data-toggle="modal" data-target="#theModal">Lab 6</a>-->
    <!--http://stackoverflow.com/questions/32958219/getting-bootstraps-modal-content-from-another-page
    http://plnkr.co/edit/Y7jDj2hORWmJ95c96qoG?p=preview
    -->
    <div class="modal fade" id="theModal">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <!--do khac' width => dung` id khac-->
    <div class="modal fade" id="myModal-24h">
        <div class="modal-dialog" style="height: 150px">
            <div class="modal-content" style="width: 70%; margin: auto; margin-top: 150px">
            </div>
        </div>
    </div>
</body>
</html>