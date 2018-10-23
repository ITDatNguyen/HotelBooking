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
<body>
<!-- co' 2 ung' dung. Feedback, Can tu van? tu` trang web ngoai` (phai online)
Tab (toi') nguoc lai thi` Shift + Tab
-->
<div id="container">

    @include('header-footer.part-header') <!-- dung` Scrip - Function - load trang html -->

    <nav>
    <div class="container-fluid">
        <div id="left-nav"> <!-- cai mau` truc tiep' cho tung` div (co' den' 2 mau`) -->
        <!-- khi nao` co' trang tim` kiem theo phong` thi` cai` the a link -->
        <ul style="list-style-type: none">
        <!-- HA NOI Capital-->
            <!--ko the dung Id & class cua? bootstrap => them 1 class tam.-->
            <!--<li class="left-nav-city" id="nav-A-city"> bo bot' id-->
            
            <li class="left-nav-city">
                <!--tao class="txt-name-location" ho tro* tim` id ben duoi'-->
                <span class="txt-name-location">Quận Hải Châu</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)" class="glyphicon glyphicon-menu-down tmp-glyphicon"></span> <!-- ko dung` id="nav-A-city-span"  -->
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
                <span class="txt-name-location">Quận Thanh Khê</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)" class="glyphicon glyphicon-menu-down tmp-glyphicon"></span> <!-- ko dung` id="nav-A-city-span"  -->
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
                <span class="txt-name-location">Quận Ngũ Hành Sơn</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)" class="glyphicon glyphicon-menu-down tmp-glyphicon"></span> <!-- ko dung` id="nav-A-city-span"  -->
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
                <span class="txt-name-location">Quận Cẩm Lệ</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)" class="glyphicon glyphicon-menu-down tmp-glyphicon"></span> <!-- ko dung` id="nav-A-city-span"  -->
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
                <span class="txt-name-location">Quận Sơn Trà</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)" class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>

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
                <span class="txt-name-location">Quận Liên Chiểu</span>&nbsp;&nbsp;<span style="color: rgb(229,131,115)" class="glyphicon glyphicon-menu-down tmp-glyphicon"></span>

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
        </div> <!--  style="font-size: 30px" -->
        <div id="search_form">
            <!-- height nay` = height cua booking (400) - booking_slogan (75) + le? do co cai` padding, margin
            zoom to len de thay' ro~
            -->
            <div style="background-color: black; opacity: 0.3; width: 100%; height: 328px; position: absolute; border-radius: 5px"></div>

            <form action="search-hotels.html" method="get" style="position: absolute; padding: 15px">
                <div id="search-locations">
                <img src="../img/homepage/Delete-25.png" width="16px" style="position: absolute; margin-left: 405px; margin-top: 14px; display: none"/>
                <!--<input class="form-control" id="focusedInput" type="search" value="" placeholder="Nhập tên thành phố, khu vực, khách sạn ..." size="100%" style="height:45px">-->
                <!--http://designshack.net/articles/javascript/create-a-simple-autocomplete-with-html5-jquery/-->
                <input class="form-control biginput" name="locations" id="autocomplete" type="search" required="true" placeholder="Nhập tên thành phố, khu vực, khách sạn ..." style="height:45px">
                </div>
                <!-- dung' ra phai cho input ben tren cho vao Table ngay tu` dau (dat ve` sau bi. nhay) -->
                <div style="height: 160px"> <!-- cai` height cho table thi` div TIM KIEM ben duoi' van~ bi. float -->
                <table class="table borderless"><!-- them 1 class thu'2 borderless, border="1" de xem su* chinh' xac khi chia khung -->
                    <tr style="color: white">
                        <td>
                            <h5>Nhận phòng: </h5> <!-- khi cai label trong bootstrap => tu* dong bold -->
                            <input type="date" class="form-control" id="datepicker1" style="width: 100%">
                        </td>
                        <!-- chi lam 2 table rat' kho chinh? phan padding cua? icon_cal, ben trong input -->
                        <td>
                            <h5>Trả phòng: </h5><!-- khi cai label trong bootstrap => tu* dong bold -->
                            <input type="date" class="form-control" id="datepicker2" style="width: 100%">
                        </td>
                    </tr>
                    <tr> <!-- dang bi. 1 border trang' ben duoi' -->
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

    <img src="../img/homepage/Center_1440x860.jpg" width="100%" height="100%"/>
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
                <img class="img-responsive" src="../img/homepage/tiennghi-AC_Rooms.png"/>
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
                    <img src="../img/homepage/promotion_1.jpg" width="550px" alt="img15"/>
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
                <figure class="effect-chico" >
                    <img src="../img/homepage/promotion_2.jpg" width="550px" height="200px" alt="img04"/>
                    <figcaption>
                        <h3>
                            YOY <span class="txt-name-location">Quận Sơn Trà</span>
                        </h3>
                        <p>50% Off</p>
                        <!--<a href="#">View more</a>-->
                    </figcaption>
                </figure>
                <figure class="effect-chico">
                    <img src="../img/homepage/promotion_3.jpg" width="550px" height="200px" alt="img04"/>
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
                    <img class="effect-shadow img-responsive" src="../img/homepage/comment1_gordonramsay.jpg" style="border-radius: 5px"/>
                </div>
                <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px"/>
                <p style="width: 70%">
                    Tôi đánh giá cao về ẩm thực ở các khu nghỉ dưỡng của các bạn.
                    Bạn đã mang đến nhiều trải nghiệm tuyệt vời về ẩm thực Việt Nam với những món ăn
                    mang đậm bản sắc dân tộc đến các món ăn độc đáo.<br/>
                    <span class="comment_name">Gordon Ramsay</span><span class="comment_country"> - Scotland</span>
                </p>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                <div style="width: 22%">
                    <img class="effect-shadow img-responsive" src="../img/homepage/comment1_davidbeckham.jpg" style="border-radius: 5px"/>
                </div>
                <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px"/>
                <p style="width: 70%">
                    Thật tuyệt vời, lần đầu tiên tôi đến Việt Nam. Thật tuyệt khi được một nhà
                    cung cấp dịch vụ về nghỉ dưỡng tốt như các bạn. Mong rằng ở Việt Nam sẽ có những dịch
                    vụ như các bạn để du khách có thể trải nghiệm những điều tuyệt vời nhất ở Việt Nam!!!<br/>
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
                    <img class="effect-shadow img-responsive" src="../img/homepage/comment1_mrbean.jpg" style="border-radius: 5px"/>
                    <!--<img src="../img/homepage/quote.png" style="margin-top: -85px; float: right"/>-->
                </div>
                <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px"/>
                <p style="width: 70%">
                    Lần đầu tiên tôi đặt phòng ở YOY, đó là một trải nghiệm tuyệt vời về dịch vụ nghỉ
                    dưỡng của các khu nghỉ dưỡng  cao cấp mà các bạn giới thiệu cho chúng tôi.
                    Tôi và gia đình tôi vô cùng hài lòng về điều đó!!!!!<br/>
                    <span class="comment_name">Mr.Bean</span><span class="comment_country"> - England</span>
                </p>
            </div>

            <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                <div style="width: 22%">
                    <img class="effect-shadow img-responsive" src="../img/homepage/comment1_binladen.jpg" style="border-radius: 5px"/>
                </div>
                <img src="../img/homepage/quote.png" width="20" height="20" style="margin-left: 3px"/>
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
                    <p>...YOY hotels provide standardization on 30 measures in each room including free wifi and
                        breakfast, flatscreen TVs, spotless white bed linen and so on...
                    </p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <img class="img-responsive" src="../img/homepage/comment2_techcrucnch.png"><br/>
                    <p>...On the YOY platform, guests can do on-demand booking without waiting for a reply from a
                        host, and they can check in and out instantaneously instead of waiting at a reservation desk...
                    </p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <img class="img-responsive" src="../img/homepage/comment2_thehindu.png"><br/>
                    <p>...The YOY Rooms mobile app is the world’s first personal room service app that allows guests staying
                        at an YOY to order room service directly from their smartphones...
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

    @include('header-footer.part-footer') <!-- dung` Script - load() method trang html -->

    <!-- JavaScript -->
    <script src="../js/homepage.js"></script>

    <script src="../Utilities/smoothscroll-for-websites-master/SmoothScroll.js"></script>

    <script src="../Utilities/LiveChat.js"></script>
    <!--Form Feedback (position: fixed): https://webengage.com/ , phai dang ky', chua tach ra duoc file rieng do co' kem` id-->
    <script id="_webengage_script_tag" type="text/javascript">
        var webengage;
        !function(e,t,n){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),arguments])}}var i,s,r=e[n],g=" ",l="init options track onReady".split(g),a="feedback survey notification".split(g),c="options render clear abort".split(g),p="Open Close Submit Complete View Click".split(g),u="identify login logout setAttribute".split(g);if(!r||!r.__v){for(e[n]=r={__queue:[],__v:"5.0",user:{}},i=0;i<l.length;i++)o(r,[l[i]]);for(i=0;i<a.length;i++){for(r[a[i]]={},s=0;s<c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s<p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i<u.length;i++)o(r.user,["user",u[i]]);var f=t.createElement("script"),d=t.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==t.location.protocol?"//ssl.widgets.webengage.com":"//cdn.widgets.webengage.com")+"/js/widget/webengage-min-v-5.0.js",d.parentNode.insertBefore(f,d)}}(window,document,"webengage");
        webengage.init('~15ba209b4');
        webengage.options('isDemoMode', true);
    </script>
</div>
</body>
</html>