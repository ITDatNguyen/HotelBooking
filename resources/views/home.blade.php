<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YOY | homepage</title>
    <!-- stylesheets -->
    <link type="text/css" rel="stylesheet" href="../css/homepage.css" />
    <link rel="stylesheet" type="text/css" href="../Utilities/Chico-effect.css" />

    <!-- bootstrap: de y' 2 file: ajax phai dat truoc maxcdn thi moi dung` duoc modal (Form)-->
    <!-- Online -->
    <!--neu dung`: bootstrap.css (chua nen') de co the xem dc code, khi chay chinh thuc thi dung` ban min-->
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <!-- Offline -->
    <link rel="stylesheet" href="../Utilities/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../Utilities/jQuery-1.x/jquery-1.11.3.min.js"></script>
    <script src="../Utilities/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <!--autocomplete-suggestions-->
    <link rel="stylesheet" type="text/css" media="all" href="../Utilities/autocomplete-suggestions/style.css">
    <!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
    <script type="text/javascript" src="../Utilities/autocomplete-suggestions/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="../Utilities/autocomplete-suggestions/locations-autocomplete.js"></script>

    <style>
        header{
            /*height: 65px;*/
            width: 100%;
            /*border-bottom: solid thin black;*/
            /*background-color: white;*/
            /*color: black;*/
        }
        body{
            padding-right: 0 !important;
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
        footer{
            /*height: 370px; ko de? co dinh & dung class cua bootstrap*/
            background-color: rgb(46,45,45);
            /*group: background-image: http://www.css3.info/preview/multiple-backgrounds/ */
            background-image: url('../img/img/footer.png'), url('../img/img/footer.png');
            background-size: 50% 100px;
            background-position: left bottom, right bottom;
            background-repeat: no-repeat;
            /*khi ben tren co' 2 the div dung` float (+ height = auto) thi phai cai them thuoc tinh' clear de ko bi. troi len tren*/
            clear: both;
            padding-bottom: 150px;
        }
        #left-footer{
            float: left;
            /*width: 40%;*/
            margin-left: 80px;
            margin-top: 30px;
            color: #969595;
        }
        #left-footer a:nth-child(1):hover{
            /*the a dau tien la` logo YOY*/
            text-decoration: none;
        }
        /*http://blog.antonakoglou.com/change-font-awesome-icon-content-hover/*/
        /*set all*/
        #icon-socialnetwork a:hover .fa:before{
            color: rgb(197,196,196);
        }
        #icon-socialnetwork .fa{
            /*cursor: pointer;*/
            transition-property: all;
            transition-duration: 200ms;
            transition-timing-function: ease;   /* transition-timing-function: ease (default); in: vao dau cham, out: ket thuc cham, linear: toc do nhu* nhau */
            /**/
            -webkit-transition-property: all;
            -webkit-transition-duration: 200ms;
            -moz-transition-property: all;
            -moz-transition-duration: 200ms;
        }
        #icon-socialnetwork a:hover .fa{
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -o-transform: scale(1.2);
            -moz-transform: scale(1.2);
        }

        #right-footer{
            /*float: left;*/
            float: right;
            /*width: 50%;*/
            margin-top: 15px;
        }
        #right-footer a{
            color: #969595;
        }
        #right-footer a:hover{

        }
        .myTitle{
            font-size: 18px;
            font-weight: bold;
            color: rgb(197,197,197);

        }
    </style>

    <script type="text/javascript" language="javascript">
        $(document).ready(function(){
//        http://www.w3schools.com/jquery/jquery_ajax_load.asp
//      http://stackoverflow.com/questions/18712338/make-header-and-footer-files-to-be-included-in-multiple-html-pages-->
//      tach' rieng de su? dung cho nhieu trang
//      neu' mo? truc tiep' file o ben ngoai` thi` ko chay. 2 file nay`, khac o? noi dung Address: localhost: & file:///D:/
//      nhu*ng code khac neu dat rieng file deu bi.: 4 Modal
//      khi nhap chung cac file vao folder rieng thi ko the load cac' img

        // sau khi load xong thi check user da~ login hay chua
        // phai them delay thi moi' kich hoat duoc localStorage + id tu` file header1
//      se~ check + load sau khi load xong part-header1.html
//      bien' localStorage.check_login luu tai file user-login
        var timer;
//      neu thoi gian load body nhieu hon delay thi co the xay ra loi
        var delay = 1000;
        timer = setTimeout(function() {
            if (localStorage.check_login === 'true'){
//                    alert('DA DANG NHAP');
                $('#welcome').fadeIn(10);
                $('#signup-signin').fadeOut(10);
            } else {
                $('#welcome').fadeOut(10);
                $('#signup-signin').fadeIn(10);
            }
        }, delay);
    });
    </script>
</head>

<body style="padding-right: 0 !important" >
    <!-- co' 2 ung' dung. Feedback, Can tu van? tu` trang web ngoai` (phai online)
Tab (toi') nguoc lai thi` Shift + Tab
-->
    <div id="container">
    @include('header-footer.part-header')
        <!-- dung` Scrip - Function - load trang html -->

        <nav>
            <div class="container-fluid">
                <div id="left-nav">
                    <!-- cai mau` truc tiep' cho tung` div (co' den' 2 mau`) -->
                    <!-- khi nao` co' trang tim` kiem theo phong` thi` cai` the a link -->
                    <ul style="list-style-type: none">
                        <!-- HA NOI Capital-->
                        <!--ko the dung Id & class cua? bootstrap => them 1 class tam.-->
                        <!--<li class="left-nav-city" id="nav-A-city"> bo bot' id-->

                        <li class="left-nav-city">
                            <!--tao class="txt-name-location" ho tro* tim` id ben duoi'-->
                            <span class="txt-name-location">Quận Hải Châu</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)"
                                class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>
                            <!-- ko dung` id="nav-A-city-span"  -->
                            <!-- neu nam trong li => anh huong den position se~ bi. day? theo li (chinh margin-left thu? cong)
            con` neu' dat ngoai` thi` bi. anh huong su* kien mouseenter, mouseleave -->
                            <div id="left-nav-A" class="tmp-left-nav">
                                <!--<div class="left-nav-city-sub">-->
                                <div class="nav-ddnoibat" style="width: 100%; float: left; margin-left: 10px">
                                    <!-- <span class="nav-title-loaiphong">Địa điểm nổi tiếng</span> -->
                                    <ul style="list-style-type: none">
                                        <li>Khách sạn Trí Nguyễn</li>
                                        <li>Khách sạn Trí Vape</li>
                                        <li>Khách sạn Trí Đẹp Trai</li>
                                        <li>Khách sạn VIP</li>
                                        <li>Khách sạn Trí</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!--nhap thoi -->
                        <li class="left-nav-city">
                            <!--tao class="txt-name-location" ho tro* tim` id ben duoi'-->
                            <span class="txt-name-location">Quận Thanh Khê</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)"
                                class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>
                            <!-- ko dung` id="nav-A-city-span"  -->
                            <!-- neu nam trong li => anh huong den position se~ bi. day? theo li (chinh margin-left thu? cong)
            con` neu' dat ngoai` thi` bi. anh huong su* kien mouseenter, mouseleave -->
                            <div id="left-nav-A" class="tmp-left-nav">
                                <!--<div class="left-nav-city-sub">-->
                                <div class="nav-ddnoibat" style="width: 100%; float: left; margin-left: 10px">
                                    <!-- <span class="nav-title-loaiphong">Địa điểm nổi tiếng</span> -->
                                    <ul style="list-style-type: none">
                                        <li>Phố Cổ</li>
                                        <li>Quận Hoàn Kiếm</li>
                                        <li>Quận Tây Hồ</li>
                                        <li>Quận Đống Đa</li>
                                        <li>Sân vận động quốc gia Mỹ Đình</li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="left-nav-city">
                            <!--tao class="txt-name-location" ho tro* tim` id ben duoi'-->
                            <span class="txt-name-location">Quận Ngũ Hành Sơn</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)"
                                class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>
                            <!-- ko dung` id="nav-A-city-span"  -->
                            <!-- neu nam trong li => anh huong den position se~ bi. day? theo li (chinh margin-left thu? cong)
            con` neu' dat ngoai` thi` bi. anh huong su* kien mouseenter, mouseleave -->
                            <div id="left-nav-A" class="tmp-left-nav">
                                <!--<div class="left-nav-city-sub">-->
                                <div class="nav-ddnoibat" style="width: 100%; float: left; margin-left: 10px">
                                    <!-- <span class="nav-title-loaiphong">Địa điểm nổi tiếng</span> -->
                                    <ul style="list-style-type: none">
                                        <li>Phố Cổ</li>
                                        <li>Quận Hoàn Kiếm</li>
                                        <li>Quận Tây Hồ</li>
                                        <li>Quận Đống Đa</li>
                                        <li>Sân vận động quốc gia Mỹ Đình</li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="left-nav-city">
                            <!--tao class="txt-name-location" ho tro* tim` id ben duoi'-->
                            <span class="txt-name-location">Quận Cẩm Lệ</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)"
                                class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>
                            <!-- ko dung` id="nav-A-city-span"  -->
                            <!-- neu nam trong li => anh huong den position se~ bi. day? theo li (chinh margin-left thu? cong)
            con` neu' dat ngoai` thi` bi. anh huong su* kien mouseenter, mouseleave -->
                            <div id="left-nav-A" class="tmp-left-nav">
                                <!--<div class="left-nav-city-sub">-->
                                <div class="nav-ddnoibat" style="width: 100%; float: left; margin-left: 10px">
                                    <!-- <span class="nav-title-loaiphong">Địa điểm nổi tiếng</span> -->
                                    <ul style="list-style-type: none">
                                        <li>Phố Cổ</li>
                                        <li>Quận Hoàn Kiếm</li>
                                        <li>Quận Tây Hồ</li>
                                        <li>Quận Đống Đa</li>
                                        <li>Sân vận động quốc gia Mỹ Đình</li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <!-- DA NANG city (vi` la thanh pho bien nen co the chia theo 1 nhom' kha)-->
                        <li class="left-nav-city">
                            <span class="txt-name-location">Quận Sơn Trà</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)"
                                class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>

                            <div id="left-nav-B" class="tmp-left-nav">
                                <!--<div class="left-nav-city-sub">-->
                                <div class="nav-ddnoibat" style="width: 100%; float: left; margin-left: 10px">
                                    <!-- <span class="nav-title-loaiphong">Địa điểm nổi tiếng</span> -->
                                    <ul style="list-style-type: none">
                                        <li>Gần Cầu Rồng</li>
                                        <li>Ven biển Mỹ Khê</li>
                                        <li>Ven biển Phạm Văn Đồng</li>
                                        <li>Ven Biển Bắc Mỹ An</li>
                                        <li>Khu thắng cảnh Ngũ Hành Sơn</li>
                                        <li>Khu du lịch Bà Nà Hills</li>
                                        <li>Khu Bán Đảo Sơn Trà/Núi Khỉ</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- HO CHI MINH city -->
                        <li class="left-nav-city">
                            <span class="txt-name-location">Quận Liên Chiểu</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)"
                                class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>

                            <div id="left-nav-C" class="tmp-left-nav">
                                <!--<div class="left-nav-city-sub">-->
                                <div class="nav-ddnoibat" style="width: 100%; float: left; margin-left: 10px">
                                    <!-- <span class="nav-title-loaiphong">Địa điểm nổi tiếng</span> -->
                                    <ul style="list-style-type: none">
                                        <li>Chợ Bến Thành Quận 1</li>
                                        <li>Nhà thờ Đức Bà Quận 1</li>
                                        <li>Công viên Đầm Sen Quận 11</li>
                                        <li>Phạm Ngũ Lão Quận 1</li>
                                        <li>Chợ Lớn Quận 5</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- ALL locations (trang rieng) -->
                        <li class="left-nav-city">
                            <span class="txt-name-location">TẤT CẢ</span>
                        </li>
                    </ul>
                </div>

                <!--<div id="right-nav" style="float: right; color: white; margin-right: 30px">-->
                <!--<a href="download-apps.html" target="_self" style="color: white" title="Tải ứng dụng YOY">-->
                <!--DOWNLOAD APP-->
                <!--</a>-->
                <!--</div>-->
            </div>
        </nav>

        <div id="center">
            <!--<div class="container-fluid">-->
            <div id="booking">
                <!-- neu dung` Span => ko the xac dinh height theo % -->
                <div id="booking_slogan">
                    Kỳ nghỉ thú vị tại thành phố Đà Nẵng</br>
                    với trên 100 khách sạn
                </div>
                <!--  style="font-size: 30px" -->
                <div id="search_form">
                    <!-- height nay` = height cua booking (400) - booking_slogan (75) + le? do co cai` padding, margin
            zoom to len de thay' ro~
            -->
                    <div style="background-color: black; opacity: 0.3; width: 100%; height: 328px; position: absolute; border-radius: 5px"></div>

                    <form action="search-hotels.html" method="get" style="position: absolute; padding: 15px">
                        <div id="search-locations">
                            <img src="../img/homepage/Delete-25.png" width="16px" style="position: absolute; margin-left: 405px; margin-top: 14px; display: none"
                            />
                            <!--<input class="form-control" id="focusedInput" type="search" value="" placeholder="Nhập tên thành phố, khu vực, khách sạn ..." size="100%" style="height:45px">-->
                            <!--http://designshack.net/articles/javascript/create-a-simple-autocomplete-with-html5-jquery/-->
                            <input class="form-control biginput" name="locations" id="autocomplete" type="search" required="true" placeholder="Nhập tên thành phố, khu vực, khách sạn ..."
                                style="height:45px">
                        </div>
                        <!-- dung' ra phai cho input ben tren cho vao Table ngay tu` dau (dat ve` sau bi. nhay) -->
                        <div style="height: 160px">
                            <!-- cai` height cho table thi` div TIM KIEM ben duoi' van~ bi. float -->
                            <table class="table borderless">
                                <!-- them 1 class thu'2 borderless, border="1" de xem su* chinh' xac khi chia khung -->
                                <tr style="color: white">
                                    <td>
                                        <h5>Nhận phòng: </h5>
                                        <!-- khi cai label trong bootstrap => tu* dong bold -->
                                        <input type="date" class="form-control" id="datepicker1" style="width: 100%">
                                    </td>
                                    <!-- chi lam 2 table rat' kho chinh? phan padding cua? icon_cal, ben trong input -->
                                    <td>
                                        <h5>Trả phòng: </h5>
                                        <!-- khi cai label trong bootstrap => tu* dong bold -->
                                        <input type="date" class="form-control" id="datepicker2" style="width: 100%">
                                    </td>
                                </tr>
                                <tr>
                                    <!-- dang bi. 1 border trang' ben duoi' -->
                                    <td colspan="2" style="color: white">
                                        <div id="loaiphong" style="margin-top: 4px; ">
                                            <span style="width: 30%; float: left; text-align: right"> Loại phòng: &nbsp </span>
                                            <select style="width: 70%; float: left; width: 200px" class="form-control">
                                    <option>1 phòng (1 người lớn)</option>
                                    <option selected>1 phòng (2 người lớn)</option>
                                    <option>lựa chọn khác ...</option>
                                </select>
                                        </div>
                                        <div id="loaiphong-khac" style="margin-top: 4px; display: none">
                                            <!--toi da 6 phong` & 18 khach'-->
                                            <h5>Khách:</h5>
                                            <!--nut button van kiem tra required duoc nhu*ng ko show tooltip (mac du` dang hide)-->
                                            <input class="form-control" type="number" name="guest" min="1" max="18" style="width: 70px" />
                                            <h5>Phòng:</h5>
                                            <input class="form-control" type="number" name="room" min="1" max="6" style="width: 70px" />
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!--http://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=icons
                    http://www.tutorialspoint.com/bootstrap/bootstrap_glyphicons.htm -->
                        <!--chua biet cach' add icon <input type="submit" class="btn mybtn-style1" value="TÌM KIẾM" />-->
                        <div style="margin: auto; text-align: center">
                            <button type="submit" class="btn mybtn-style1" id="booking_form_search">
                    <!--dang bi anh huong khi show select lua chon khac-->
                    <!--<span class="glyphicon glyphicon-search"></span>-->
                    TÌM KIẾM
                </button>
                        </div>
                        <!-- dung` span: ko ho~ tro* width: 100% hoac margin: 0 auto -->
                        <div style="color: white; text-align: center; width: 100%; height: 35px; line-height: 35px">Đặt bây giờ. Thanh toán sau tại khách sạn.</div>
                    </form>
                </div>
            </div>

            <img src="../img/homepage/Center_1440x860.jpg" width="100%" height="100%" />
            <!--</div>-->
        </div>

        <div id="our_promise">
            <div class="container-fluid">
                <div id="our_promise_title"> CHÚNG TÔI ĐẢM BẢO:</div>
                <!-- khi dung flexbox thi class="img-responsive" ko tac dung -->
                <div class="row" style="width: 80%; margin: 0 auto; text-align: center;  color: rgb(70,68,68)">
                    <!--<div class="col-xs-2 col-sm-2 col-md-2">-->
                    <div class="col-sm-2 col-md-2">
                        <p>Điều hòa nhiệt độ</p>
                        <!--do co' class="img-responsive" nen ko the? canh vao` center-->
                        <img class="img-responsive" src="../img/homepage/tiennghi-AC_Rooms.png" />
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <p>Truyền hình cáp</p>
                        <img class="img-responsive" src="../img/homepage/tiennghi-Cable_TV.png" />
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <p>Ra trải giường sạch sẽ</p>
                        <img class="img-responsive" src="../img/homepage/tiennghi-Spotless_Linen.png" />
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <p>Bữa sáng miễn phí</p>
                        <img class="img-responsive" src="../img/homepage/tiennghi-Complimentary_Breakfast.png" />
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <p>Miễn phí Wi-Fi</p>
                        <img class="img-responsive" src="../img/homepage/tiennghi-Free_Wi-Fi.png" />
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <p>Nhà vệ sinh đạt chuẩn</p>
                        <img class="img-responsive" src="../img/homepage/tiennghi-Hygienic_Washrooms.png" />
                    </div>
                </div>
            </div>
        </div>

        <div id="promotion">
            <div class="container-fluid">
                </br>
                <div id="promotion_title"> KHUYẾN MÃI HẤP DẪN
                    <div class="redline" style="width: 50px; margin: 0 auto;"></div>
                </div>

                <div class="container" style="margin-top: 10px">
                    <div class="grid">
                        <figure class="effect-chico">
                            <img src="../img/homepage/promotion_1.jpg" width="550px" alt="img15" />
                            <figcaption>
                                <!--<strong>YOY <span class="txt-name-location">ĐÀ NẴNG</span></strong>-->
                                <h3 style="margin-top: 20%">
                                    YOY <span class="txt-name-location">Quận Hải Châu</span>
                                </h3>
                                <p>Lập kế hoạch nghỉ ngơi những điểm yêu thích tại Đà Nẵng. 50% Off</p>
                                <!--<a href="#">View more</a>-->
                            </figcaption>
                        </figure>
                        <!--mac dinh the figure dag cai` float: left-->
                        <figure class="effect-chico">
                            <img src="../img/homepage/promotion_2.jpg" width="550px" height="200px" alt="img04" />
                            <figcaption>
                                <h3>
                                    YOY <span class="txt-name-location">Quận Sơn Trà</span>
                                </h3>
                                <p>50% Off</p>
                                <!--<a href="#">View more</a>-->
                            </figcaption>
                        </figure>
                        <figure class="effect-chico">
                            <img src="../img/homepage/promotion_3.jpg" width="550px" height="200px" alt="img04" />
                            <figcaption>
                                <h3>
                                    YOY <span class="txt-name-location">Quận Hòa Khánh</span>
                                </h3>
                                <p>50% Off</p>
                                <!--<a href="#">View more</a>-->
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>

        <div id="comment">
            <div class="container-fluid">
                <div id="comment_title"> Nhận xét gần đây về YOY</div>
                <!-- make blockquote http://jsfiddle.net/pz6kx0bw/ -->
                <div class="row">
                    <div class="col-xs-1 col-sm-1 col-md-1"></div>
                    <!--thuoc tinh display: inline-flex thay the cho float tung` phan tu ben trong-->
                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <!--khi co' responsive + display: inline-flex => ko cai` duoc width, height -->
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_gordonramsay.jpg" style="border-radius: 5px" />
                        </div>
                        <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px" />
                        <p style="width: 70%">
                            Tôi đánh giá cao về ẩm thực ở các khu nghỉ dưỡng của các bạn. Bạn đã mang đến nhiều trải nghiệm tuyệt vời về ẩm thực Việt
                            Nam với những món ăn mang đậm bản sắc dân tộc đến các món ăn độc đáo.<br/>
                            <span class="comment_name">Gordon Ramsay</span><span class="comment_country"> - Scotland</span>
                        </p>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_davidbeckham.jpg" style="border-radius: 5px" />
                        </div>
                        <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px" />
                        <p style="width: 70%">
                            Thật tuyệt vời, lần đầu tiên tôi đến Việt Nam. Thật tuyệt khi được một nhà cung cấp dịch vụ về nghỉ dưỡng tốt như các bạn.
                            Mong rằng ở Việt Nam sẽ có những dịch vụ như các bạn để du khách có thể trải nghiệm những điều
                            tuyệt vời nhất ở Việt Nam!!!<br/>
                            <span class="comment_name">David Beckham</span><span class="comment_country"> - England</span>
                        </p>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1"></div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-1 col-sm-1 col-md-1"></div>

                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_mrbean.jpg" style="border-radius: 5px" />
                            <!--<img src="../img/homepage/quote.png" style="margin-top: -85px; float: right"/>-->
                        </div>
                        <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px" />
                        <p style="width: 70%">
                            Lần đầu tiên tôi đặt phòng ở YOY, đó là một trải nghiệm tuyệt vời về dịch vụ nghỉ dưỡng của các khu nghỉ dưỡng cao cấp mà
                            các bạn giới thiệu cho chúng tôi. Tôi và gia đình tôi vô cùng hài lòng về điều đó!!!!!<br/>
                            <span class="comment_name">Mr.Bean</span><span class="comment_country"> - England</span>
                        </p>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_binladen.jpg" style="border-radius: 5px" />
                        </div>
                        <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px" />
                        <p style="width: 70%">
                            Thật tuyệt vời!!! Đó là lí do tôi không bao giờ khủng bố Việt Nam !!!<br/>
                            <!--Lần đầu tiên tôi đặt phòng ở YOY, đó là một trải nghiệm tuyệt vời về dịch vụ nghỉ-->
                            <!--dưỡng của các khu nghỉ dưỡng  cao cấp mà các bạn giới thiệu cho chúng tôi.-->
                            <!--Tôi và gia đình tôi vô cùng hài lòng về điều đó!!!!!<br/>-->
                            <span class="comment_name">Osama bin Laden</span><span class="comment_country"> - Saudi Arabia</span>
                        </p>
                    </div>

                    <div class="col-xs-1 col-sm-1 col-md-1"></div>
                </div>

                <!-- muon the hien dung' thi` div ben tren phai xac dinh chieu cao (do co dung` ul li, float)-->
                <div class="container" style="margin: 0 auto; margin-top: 25px; width: 90%; clear: both">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <img class="img-responsive" src="../img/homepage/comment2_forbes.png"><br/>
                            <p>...YOY hotels provide standardization on 30 measures in each room including free wifi and breakfast,
                                flatscreen TVs, spotless white bed linen and so on...
                            </p>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <img class="img-responsive" src="../img/homepage/comment2_techcrucnch.png"><br/>
                            <p>...On the YOY platform, guests can do on-demand booking without waiting for a reply from a host,
                                and they can check in and out instantaneously instead of waiting at a reservation desk...
                            </p>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <img class="img-responsive" src="../img/homepage/comment2_thehindu.png"><br/>
                            <p>...The YOY Rooms mobile app is the world’s first personal room service app that allows guests
                                staying at an YOY to order room service directly from their smartphones...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ban dau` dat trong id comment + dug` margin-top => khi zoom browser se~ ko chinh xac -->
        <div id="scrolltop">
            <!--<a href="#header" title="Về đầu trang">-->
            <!--them width de noi' rong the? a khi hover vao`-->
            <span style="color: rgb(197,196,196); width: 50px" class="glyphicon glyphicon-menu-up"></span>
            <!--</a>-->
        </div>
        <!-- form dang ky -->
        <div id="signup" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                          <div class="modal-header"> <!-- style="padding:35px 50px;" -->
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4>ĐĂNG KÝ</h4>
                          </div>
                          <div class="modal-body" style="padding:30px 30px 0px 30px">
                              <div class="row">
                                  <div class="col-sm-6" style="margin-left: -10px; margin-top: -20px; border-right: 2px dashed rgb(246,245,245)">
                                      <!--method="get" (Can not be bookmarked. | More difficult to hack) http://www.diffen.com/difference/GET_(HTTP)_vs_POST_(HTTP)-->
                                      <!--mac du dac chung thu* muc nhu*ng do kich hoat tu` 1 file dat tai folder Pages, nhin` address (localhost ...) se thay -->
                                      <form name="MyForm" role="form" method="get" action="modal-user/user-verify.html">
                                          <div class="form-group">
                                              <input type="text" class="form-control clear-border" id="usrname" placeholder="HỌ VÀ TÊN"
                                                     required pattern="[A-Za-z]+$" title="HỌ VÀ TÊN: Vui lòng nhập ký tự A-Z, a-z">
                                          </div>
                                          <div class="form-group">
                                              <input type="text" class="form-control clear-border" id="mobilenumber" placeholder="SỐ ĐIỆN THOẠI"
                                                      required pattern="[0-9]{1,10}" title="SỐ ĐIỆN THOẠI: Vui lòng nhập số (tối đa 10 số)">
                                          </div>
                                          <!--required pattern="^[0-9]+$" title="Chỉ nhập số từ 0-9">-->
                                          <!--pattern="[0]{1}[0-9]{9,12}"-->
                                          <div class="form-group">
                                              <input type="email" class="form-control clear-border" id="emailaddress" placeholder="ĐỊA CHỈ EMAIL"
                                                     required title="EMAIL">
                                          </div>
                                          <div class="form-group">
                                              <input type="password" class="form-control clear-border" placeholder="MẬT KHẨU"
                                                     required>
                                          </div>
                                          <button type="submit" class="btn btn-success btn-block" style="margin-top: 30px">
                                              ĐĂNG KÝ
                                          </button>
                                          <!--sau khi đăng ký thành công sẽ xuất hiện modal verify-->
                                      </form>
                                  </div>
                                  <div class="col-sm-6" style="margin-top: -20px; font-size: small">
                                      <ul style="margin: 0; padding-left: 20px; list-style-image:url('modal-user/img_audio/Checkmark-20.png') ">
                                          <li> Tăng tốc quy trình đặt phòng </li>
                                          <li> Xem hoặc thay đổi các đặt phòng của mình </li>
                                          <li> Trở thành người đầu tiên nhận thông tin về các ưu đãi đặt biệt </li>
                                      </ul>
                                      <!-- dung span: noi dung ko canh deu 2 ben -->
                                      <div style="margin-left: 10px; margin-top: 15px">
                                          Chúng tôi không bao giờ bán thông tin cá nhân của bạn. Vui lòng đọc
                                          <span style="color: rgb(220, 30, 40)">Chính sách bảo mật</span> của chúng tôi để biết thêm thông tin.</div>
                                  </div>
                              </div>
                              <!--dat trong class="modal-body"-->
                              <div style="text-align: right; margin-top: -80px; margin-right: -30px">
                                  <!--mac du` dat chung thu* muc nhu*ng chay tu` file khac dag nam` tai folder Pages -->
                                  <img src="/img/img/stay-awesome.png"/>
                              </div>
          
                          </div>
          
                      </div>
                    </div>
                </div>

                      <!-- form dang ky -->
        <div id="signin" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                        <h4>ĐĂNG NHẬP</h4>
                    </div>
                    <!-- cai` padding: ko anh huong den' img -->
                    <div class="modal-body" style="padding:30px 0px 0px 30px">
                        <div class="row">
                            <div class="col-sm-6" style="margin-left: -10px; margin-top: -20px; border-right: 2px dashed rgb(246,245,245)">
                                <form role="form" onsubmit="
                                alert('ĐĂNG NHẬP THÀNH CÔNG !');
                                localStorage.check_login = 'true';
                                ">
                                <!--co dau hieu refresh page-->
                                <!--hien tai id welcome dag dat. tai file header1    -->
                                    <div class="form-group">
                                        <input type="text" class="form-control clear-border" id="mobilenumber2" placeholder="SỐ ĐIỆN THOẠI"
                                               required pattern="[0-9]{1,10}" title="Vui lòng nhập số (tối đa 10 số)">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control clear-border" id="psw" placeholder="MẬT KHẨU"
                                               required>
                                    </div>
                                    <!--<div class="form-group">-->
                                    <div style="width: 100%; margin-top: 30px">
                                        <button  type="submit" class="btn btn-success btn-block" style="width: 40%; float: left">ĐĂNG NHẬP</button>
                                        <!--<a href="forgot-password.html" data-toggle="modal" data-target="#theModal" style="color: rgb(239,64,35); float: right; font-size: 13px">-->
                                        <a  href="modal-user/user-resetpassword.html"  target="_self"
                                           style="color: rgb(220, 30, 40); float: right; font-size: 13px">
                                        <!--chua the mo? truc tiep' tai trang chu (khi show 2 modal cung` luc)-->
                                        <!--<button type="button" class="close" data-dismiss="modal" id="refreshDIV" onClick="history.go(0)">&times;</button>-->
                                            Quên mật khẩu?
                                        </a>
                                    </div>
                
                                    <div style="margin-top: 80px; width: 100%">
                                        <input type="checkbox" /> Giữ chế độ đăng nhập
                                    </div>
                                    <a href="#" class="btn azm-social azm-btn azm-border-bottom azm-facebook" style="margin-left: 0px; margin-top: 20px">
                                        <i class="fa fa-facebook">
                                            <span style="margin-left: 10px; position: absolute">|</span>
                                        </i>
                                        Đăng nhập với Facebook
                                    </a>
                
                                </form>
                            </div>
                            <div class="col-sm-6" style="margin-top: 0px; font-size: small">
                                <span>Bạn không có tài khoản?</span>
                                <a href="#" class="signup" style="color: rgb(220, 30, 40)">Đăng ký</a>
                                <!-- dung span: noi dung ko canh deu 2 ben -->
                
                            </div>
                        </div>
                        <!--dat trong class="modal-body"-->
                        <div style="text-align: right; margin-top: -80px">
                            <!--mac du` dat chung thu* muc nhu*ng chay tu` file khac dag nam` tai folder Pages -->
                            <img src="/img/img/stay-awesome.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('header-footer.part-footer')
        <!-- dung` Script - load() method trang html -->

        <!-- JavaScript -->
        <script src="../js/homepage.js"></script>

        <script src="../Utilities/smoothscroll-for-websites-master/SmoothScroll.js"></script>

        <script src="../Utilities/LiveChat.js"></script>
        {{-- <!--Form Feedback (position: fixed): https://webengage.com/ , phai dang ky', chua tach ra duoc file rieng do co' kem` id-->
        <script id="_webengage_script_tag" type="text/javascript">
            var webengage;
        !function(e,t,n){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),arguments])}}var i,s,r=e[n],g=" ",l="init options track onReady".split(g),a="feedback survey notification".split(g),c="options render clear abort".split(g),p="Open Close Submit Complete View Click".split(g),u="identify login logout setAttribute".split(g);if(!r||!r.__v){for(e[n]=r={__queue:[],__v:"5.0",user:{}},i=0;i<l.length;i++)o(r,[l[i]]);for(i=0;i<a.length;i++){for(r[a[i]]={},s=0;s<c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s<p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i<u.length;i++)o(r.user,["user",u[i]]);var f=t.createElement("script"),d=t.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==t.location.protocol?"//ssl.widgets.webengage.com":"//cdn.widgets.webengage.com")+"/js/widget/webengage-min-v-5.0.js",d.parentNode.insertBefore(f,d)}}(window,document,"webengage");
        webengage.init('~15ba209b4');
        webengage.options('isDemoMode', true);
        </script> --}}
    </div>
</body>

</html>