@include('header-footer.header')
    <!-- dung` cho cac trang con` lai
    search-hotels.html & book-now -->
    <header>
        <!--class="container-fluid" su dung khi lien quan den float-->
        <div class="container-fluid">
            <!--khi zoom trinh duyet den'  gioi han. nho nhat' thi` se~ cho phep' trôi xuống dưới    -->
            <div id="left-header">
                <!--neu load tu` home page thi ghi day du thu* muc ngoai`-->
                <!--<img src="header-footer/img/header_logo.png" width="150"/>-->
                <!--<span style="color: white">Mạng đặt phòng khách sạn Online</span>-->

                <a href="../Pages/homepage.html" target="_self" title="Về trang chủ">
                    
                    <img class="animated bounce" src="../img/img/logo.png" width="110px" height="64px"/> <span>Mạng đặt phòng khách sạn Online</span>
                </a>
                

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
                    <a href="#" class="signup">ĐĂNG KÝ</a>

                    <span>&nbsp;|&nbsp;</span>

                    <a href="#" class="login" style="margin-right: 10px"
                      >ĐĂNG NHẬP</a>
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
    