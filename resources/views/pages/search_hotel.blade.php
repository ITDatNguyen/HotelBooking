<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> ZZZ | search-hotels</title>
	
    <link rel="stylesheet" href="../public/css/search-hotels.css">
    <!-- bootstrap: de y' 2 file ajax phai dat truoc maxcdn thi moi dung` duoc modal (Form)-->
    <!-- Online -->
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <!-- Offline -->
    <link rel="stylesheet" href="../public/Utilities/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../public/Utilities/jQuery-1.x/jquery-1.11.3.min.js"></script>
    <script src="../public/Utilities/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <!-- Start WOWSlider.com section -->
    <!--slide-1-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine0/style.css" />
    <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine0/jquery.js"></script>
    <!--slide-2: tu` slide nay` tro di thi file engine cua jquery dug chung voi slide 1-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine1/style.css" />
    <!--script type="text/javascript" src="engine1/jquery.js"></script-->
    <!--slide-3-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine2/style.css" />
    <!--slide-4-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine3/style.css" />
    <!--slide-5-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine4/style.css" />
    <!--slide-6-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine5/style.css" />
    <!--slide-7-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine6/style.css" />
    <!--slide-8-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine7/style.css" />
    <!--slide-9-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine8/style.css" />
    <!--slide-10-->
    <link rel="stylesheet" type="text/css" href="../public/Utilities/slideshow/slideshow1/engine9/style.css" />
    <!-- End WOWSlider.com HEAD section -->

    <!--nhóm js nay` phai dat phia' sau cac slide thi moi' chay duoc (co le code tren chua cai ready...)-->
    <!--autocomplete-suggestions-->
    <link rel="stylesheet" type="text/css" media="all" href="../public/Utilities/autocomplete-suggestions/style.css">
    <!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
    <script type="text/javascript" src="../public/Utilities/autocomplete-suggestions/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="../public/Utilities/autocomplete-suggestions/locations-autocomplete.js"></script>

    <!-- Put icons inside of input fields -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Slider-->
    <link rel="stylesheet" href="../public/Utilities/RangeSlider/jquery-ui.css">
    <script src="../public/Utilities/RangeSlider/jquery-1.10.2.js"></script>
    <script src="../public/Utilities/RangeSlider/jquery-ui.js"></script>

    <style>
        .ws_images img{
            border-radius: 4px;
        }
        #left-center ul li{
            cursor: pointer;
        }
        #left-center ul li:hover{
            background-color: rgb(246,246,246);
        }
        #left-center input{
            /*cho dong bo voi' cac li*/
            cursor: pointer;
        }
    </style>

    <script>
    $(document).ready(function(){
        
        //lay' ten locations da~ search o? trang homepage (neu co)
        $('#autocomplete').val(localStorage.index_tmp_name);
        $('.name-of-location').text(localStorage.index_tmp_name);
        $('#s-datePicker1').val(localStorage.index_tmp_checkin);
        $('#s-datePicker2').val(localStorage.index_tmp_checkout);
        $('#loaiphong select').val(localStorage.index_tmp_typeofroom);
        $('.3-dd-noibat').fadeOut(10);
//        neu viet theo css: $('.3-dd-noibat'+':nth-child('+ localStorage.ddnoibat + ')').fadeIn(10);
//        http://stackoverflow.com/questions/27519457/jquery-get-nth-child-having-a-particular-class
//        https://api.jquery.com/eq-selector/
//        http://www.w3schools.com/jquery/jquery_ref_selectors.asp
        $('.3-dd-noibat'+':eq('+ localStorage.ddnoibat + ')').fadeIn(10);
        //
        $('.ws_images a').attr('href','room-bookings.html');
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
	@include('includes.header')
<div id="container">
    <nav>
    <form>
    <div id="nav-timkiem" class="container-fluid">
        <!-- da~ dung Bootstrap table, grid => viec chia theo size cac input, button kem` theo margin (se~ ko deu`) -->
        <!--ban dau dien` background img giong voi trang homepage-->
        <div class="inner-addon left-addon" style="float: left">
            <div id="search-locations">
            <i class="fa fa-map-marker" style="font-size: 22px; color: rgb(220,30,40)"></i>
            <img src="../public/img/homepage/Delete-25.png" width="16px" style="position: absolute; margin-left: 327px; margin-top: 15px; display: none"/>
            <input class="form-control biginput" name="locations" id="autocomplete" type="search" value="Đà Nẵng"
                   placeholder="Nhập tên thành phố, khu vực, khách sạn ..."  required
                   style="width: 350px">
                <!--da~ thu width theo %-->
            </div>
        </div>

        <div class="inner-addon left-addon my-tooltip" data-tooltip="Ngày nhận phòng" style="float: left">
            <i class="fa fa-calendar-o" style="font-size: 19px; color: rgb(220,30,40)"></i>
            <input id="s-datePicker1" type="date" class="form-control">
        </div>
        <div class="inner-addon left-addon my-tooltip" data-tooltip="Ngày trả phòng" style="float: left">
            <i class="fa fa-calendar-o" style="font-size: 19px; color: rgb(220,30,40)"></i>
            <input id="s-datePicker2" type="date" class="form-control">
        </div>

        <div id="loaiphong" class="inner-addon left-addon" style="float: left">
            <i class="material-icons" style="font-size: 22px; color: rgb(220,30,40)">group_add</i>
            <select class="form-control">
                <option>1 phòng (1 người lớn)</option>
                <option selected>1 phòng (2 người lớn)</option>
                <option>lựa chọn khác ...</option>
            </select>
        </div>

        <div id="loaiphong-khac" style="color: white; width: 22%; display: none">
            <!--toi da 6 phong` & 18 khach'-->
            <h5 style="margin-top: 30px">Khách</h5>
            <input class="form-control" type="number" name="guest" min="1" max="18" style="width: 70px" />
            <h5 style="margin-top: 30px">Phòng</h5>
            <input class="form-control" type="number" name="room" min="1" max="6" style="width: 70px" />
        </div>

        <!--http://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=icons
        http://www.tutorialspoint.com/bootstrap/bootstrap_glyphicons.htm -->
        <!--button lien quan den' modal nen khi click thi` co' dau hieu. refresh page-->
        <button type="submit" class="btn mybtn-style1">
            <span class="glyphicon glyphicon-search"></span>&nbsp;TÌM KIẾM
        </button>

    </div>
    </form>
    </nav>

    <div id="center">
        <div id="left-center">
            <div id="left-center-result" style="margin-top: 15px; width: 100%; height: 40px; background-color: #ffffff">
                Tìm thấy <span class="badge">10</span> khách sạn tại
                <!--class="name-of-location" duoc cai vao tat ca? ca'c tu` khoa' Da Nang-->
                <span class="name-of-location" style="font-weight: bold">Đà Nẵng</span>
            </div> <!-- span ko the cai margin-top -->
            <div style="height: auto">
                   
            </div>
            <div style="height: auto; border-top: 1px solid rgb(223,221,221)">
                <div class="left-title">GIÁ</div>
                <div>
                    <!--neu' 1 nut'-->
                    <!--dien san~ text de ko bi noi' rong. san~ the div-->
                    <!--<div style="text-align: center"><output id="rangevalue" style="margin-bottom: 10px; font-size: 15px">2.000.000 <sup>đ</sup></output></div>-->
                    <!--<input id="range-price" type="range" name="points" min="168600" max="25952800" value="2000000"-->
                           <!--onchange="rangevalue.value = (parseInt(value)).toLocaleString('vn-VN', { style: 'currency', currency: 'VND' })"-->
                            <!--/>-->
                    <!--<br/>-->
                    <!--<div style="font-size: 15px; height: 35px">-->
                        <!--<span style="float: left">168.600 <sup>đ</sup></span>-->
                        <!--<span style="float: right">25.952.800 <sup>đ</sup></span>-->
                    <!--</div>-->
                    <!--http://jqueryui.com/slider/#range-->
                    <div id="slider-range" style="margin: auto; margin-top: 15px; margin-bottom: 15px; width: 90%"></div>
                    <div style="font-size: 15px; height: 35px">
                        <span id="amount-1" style="float: left"></span>
                        <span id="amount-2" style="float: right"></span>
                    </div>

                    <!--co the co' them 1 checkbox dk: chỉ hiện các khách sạn còn phòng-->
                    <div style="margin: auto; margin-bottom: 10px">
                        <input type="checkbox" name="status" /> Chỉ hiện khách sạn còn phòng
                    </div>
                </div>
            </div>

            <div style="height: auto; border-top: 1px solid rgb(223,221,221)">
                <div class="left-title">KHOẢNG CÁCH TỪ TRUNG TÂM</div>
                <div>
                    <ul style="list-style-type: none">
                        <li><input type="radio" name="khoangcach" value="2 Km" checked/> 2 Km</li>
                        <li><input type="radio" name="khoangcach" value="5 Km" /> 5 Km</li>
                        <li><input type="radio" name="khoangcach" value="Bất kỳ" /> Bất kỳ</li>
                    </ul>
                </div>
            </div>
            <div style="height: auto; border-top: 1px solid rgb(223,221,221)">
                <div class="left-title">HẠNG KHÁCH SẠN</div>
                <div>
                <ul style="list-style-type: none; color: rgb(255,192,0)">
                    <li>
                        <input type="radio" name="hang-khachsang" value="*****"/>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </li>
                    <li>
                        <input type="radio" name="hang-khachsang" value="****">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </li>
                    <li>
                        <input type="radio" name="hang-khachsang" value="***">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </li>
                    <li>
                        <input type="radio" name="hang-khachsang" value="**">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </li>
                    <li style="color: rgb(70,68,73)"><input type="radio" name="hang-khachsang" value=""> Bất kỳ</li>

                </ul>
                </div>
            </div>
            <div style="height: auto; border-top: 1px solid rgb(223,221,221)">
                <div class="left-title">LOẠI</div>
                <div id="loai">
                    <ul style="list-style-type: none">
                        <li><input type="checkbox" value="Bình dân" /> Bình dân</li>
                        <li><input type="checkbox" value="Hạng trung" /> Hạng trung</li>
                        <li><input type="checkbox" value="Sang trọng" /> Sang trọng</li>
                        <li><input type="checkbox" value="Lãng mạn" /> Lãng mạn</li>
                        <li><a id="loai-them" data-toggle="modal" href="#myModal" style="color: black; font-size: small"> Thêm ...</a></li>
                    </ul>
                </div>
            </div>
            <div style="height: auto; border-top: 1px solid rgb(223,221,221)"> <!-- shorthand: top right bottom left -->
                <div class="left-title">TIỆN NGHI</div>
                <div id="tiennghi">
                    <ul style="list-style-type: none">
                        <li><input type="checkbox" value="Bãi đậu xe" /> Bãi đậu xe</li>
                        <li><input type="checkbox" value="Xe lăn cho người khuyết tật" /> Xe lăn cho người khuyết tật</li>
                        <!--<li><a href="#" style="color: black"> Thêm ...</a></li>-->
                        <li><a id="loai-tiennghi" data-toggle="modal" href="#myModal-2" style="color: black; font-size: small"> Thêm ...</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="right-center">
            <div id="right-center-1" style="height: 70px; border-width: thin">
                <!--chinh lai height de add tu* dong-->
                <div id="options" style="width: 55%; height: auto; float: left">
                    <div style="margin-bottom: 5px; font-weight: bold; color: rgb(156,153,153)">Lựa chọn của bạn:</div>
                    <!--=============-->
                    <div id="opts-ddnoitieng" class="options" style="display: none">
                        <!--da~ bo bot muc check vi` co' den 3 locations-->
                        <!--<a href="#"><div class="options-x">&times;</div> Gần cầu rồng </a>-->
                    </div>
                    <div id="opts-price" class="options" style="display: none">
                        <!--da~ dieu chinh thanh 2 nut-->
                        <!--<a href="#"><div class="options-x">&times;</div> 2.000.000 <sup>đ</sup></a>-->
                    </div>
                    <div id="opts-km" class="options">
                        <a href="#"><div class="options-x">&times;</div> 2 Km</a>
                    </div>
                    <!--them display: none vi` co' kem` class="options" co' ke? border (du` chua co' noi dung)
                    add margin-top vao` class options xay ra loi~
                    -->
                    <div id="opts-hangks" class="options" style="display: none; margin-top: 5px; margin-bottom: 5px"></div>
                    <div id="opts-loaiks" class="options" style="display: none; margin-top: 5px; margin-bottom: 5px"></div>
                    <div id="opts-tiennghi" class="options" style="display: none; margin-top: 5px; margin-bottom: 5px"></div>
                </div>

                <div id="sort" style="width: 45%; float: right; text-align: right; border-left: 1px solid rgb(156,153,153)">
                    <span style="font-weight: bold; color: rgb(156,153,153)">SẮP XẾP THEO: </span>
                    <a href="#" style="color: rgb(156,153,153)">Xếp hạng</a><span> -</span>
                    <a href="#" style="color: rgb(156,153,153)">Khoảng cách</a><span> -</span>
                    <a id="sort-price" href="#" style="color: rgb(156,153,153)">Giá <span class="glyphicon glyphicon-menu-up"></span></a>
                </div>
            </div>

            <div id="right-center-2" style="margin-top: -25px"><!-- chinh lai margin do margin-top cua row bi. day? xuong -->
                <div id="page-1">
                <!--dung ra phai khai bao' trong Object, array => ho tro viec tim kiem + sap xep ...    -->
                    <!-- dung` Bootstrap table: xuat hien ko chuan? = Bootstrap Grid -->
                    <div class="row" style="color: white">
                        <div class="col-sm-6">
                            <!--<img class="size-of-img" src="../img/search-hotels/vanda1.png" />-->
                            <!--khi click thang? vao buc anh thi` xem trinh` chieu' + dat phong`-->
                            <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->

                            <div id="wowslider-container0">
                                <!--nhom thong tin phai dat trong cung` id="wowslider-container1" va truoc' cac pic
                                thi moi' dung hover duoc.
                                -->
                                <div>
                                    <!--tinh trang phong`-->
                                    <!-- neu' nhap chung => anh huong den opacity-->
                                    <!--<div>-->
                                        <!--<div class="badge-outer"></div>-->
                                        <!--<div class="badge-inner">Hết phòng</div>-->
                                    <!--</div>-->
                                    <div class="loaiphong"> PREMIUM </div>
                                    <!--http://www.vandahotel.vn/-->
                                    <!-- SUPERIOR | DELUXE | GRAND SUITE | FAMILY JUNIOR SUITE -->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Vanda Hotel
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <!--tao them 1 class phu de ho tro xac dinh vi tri ao tren Google Map (trong Da Nang)-->
                                            <span class="address-of-hotel-sub">3 Nguyễn Văn Linh, Q Hải Châu,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">1,890,000 <sup>đ</sup></div>
                                </div>
                                <!--class="img-responsive"-->
                                <div class="ws_images">
                                    <ul>
                                        <li>
                                            <!-- dung jQuery add toan bo href='room-bookings.html' vao` .ws_images a -->
                                            <a>
                                            <img src="../public/Utilities/slideshow/slideshow1/data0/images/room01.jpg" alt="room01" title="room01" id="wows0_0"/>
                                            </a>
                                        </li>
                                        <li><a><img src="../public/Utilities/slideshow/slideshow1/data0/images/room02.jpg" alt="room02" title="room02" id="wows0_1"/></a></li>
                                        <li><a><img src="../public/Utilities/slideshow/slideshow1/data0/images/room03.jpg" alt="room03" title="room03" id="wows0_2"/></a></li>
                                        <li><a><img src="../public/Utilities/slideshow/slideshow1/data0/images/room04.jpg" alt="room04" title="room04" id="wows0_3"/></a></li>
                                        <li><a><img src="../public/Utilities/slideshow/slideshow1/data0/images/hanhlang01.jpg" alt="hanhlang01" title="hanhlang01" id="wows0_4"/></a></li>
                                        <li><a><img src="../public/Utilities/slideshow/slideshow1/data0/images/hanhlang02.jpg" alt="hanhlang02" title="hanhlang02" id="wows0_5"/></a></li>
                                        <li><a><img src="../public/Utilities/slideshow/slideshow1/data0/images/nhahang01.jpg" alt="nhahang01" title="nhahang01" id="wows0_6"/></a></li>
                                        <li><a><img src="../public/Utilities/slideshow/slideshow1/data0/images/nhahang02.jpg" alt="nhahang02" title="nhahang02" id="wows0_7"/></a></li>
                                    </ul>
                                </div>
                                <!--Logo tao ra khi lam` slide tu` pm ngoai`,
                                sau khi tat' di van~ click duoc ra trang http://wowslider.com/-->
                                <div class="ws_script" style="position:absolute;left:-99%">
                                    <a href="http://wowslider.net">jquery slider</a>
                                    by WOWSlider.com v8.6
                                </div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine0/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine0/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>

                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container1">
                                <div>
                                    <div>
                                        <img src="../public/img/search-hotels/Bookmark-100.png" width="70" class="badge-outer-2"/>
                                        <div class="badge-inner-2">50% Off</div>
                                    </div>
                                    <!--<div class="loaiphong"> PREMIUM </div>-->
                                    <!--http://www./-->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Vĩnh Trung Plaza
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <!--neu ko co xep hang thi noi dung bi day len cao-->
                                            <!--<span class="glyphicon glyphicon-star"></span>-->
                                            <!--<span class="glyphicon glyphicon-star"></span>-->
                                            <!--<span class="glyphicon glyphicon-star"></span>-->
                                            <!--<span class="glyphicon glyphicon-star"></span>-->
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">255-257 Hùng Vương, Q Hải Châu,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">1,636,364 <sup>đ</sup></div>
                                </div>

                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <!--<div id="wowslider-container1">-->
                                <div class="ws_images">
                                <ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></a></li>
                                </ul>
                                </div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine1/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine1/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>
                    </div>

                    <div class="row" style="color: white">
                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container2">
                                <div>
                                    <div>
                                        <div class="badge-outer-3"></div>
                                        <div class="badge-inner-3">Còn 2 phòng</div>
                                    </div>
                                    <!--<div class="loaiphong"> PREMIUM </div>-->
                                    <!--http://www.-->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Samdi Hotel
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">203-211 Nguyễn Văn Linh,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">2,110,390 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data2/images/1.jpg" alt="1" title="1" id="wows2_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data2/images/2.jpg" alt="2" title="2" id="wows2_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data2/images/3.jpg" alt="3" title="3" id="wows2_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine2/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine2/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->

                        </div>
                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container3">
                                <div>
                                    <div>
                                        <div class="badge-outer"></div>
                                        <div class="badge-inner">Hết phòng</div>
                                    </div>
                                    <div class="loaiphong"> DELUXE </div>
                                    <!--http://www./-->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Minh Toan Galaxy Hotel
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">2/9 Street, Sông Hàn,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">1,904,762 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data3/images/1.jpg" alt="1" title="1" id="wows3_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data3/images/2.jpg" alt="2" title="2" id="wows3_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data3/images/3.jpg" alt="3" title="3" id="wows3_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine3/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine3/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>
                    </div>

                    <div class="row" style="color: white">
                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container4">
                                <div>
                                    <div>
                                        <div class="badge-outer"></div>
                                        <div class="badge-inner">Hết phòng</div>
                                    </div>
                                    <div class="loaiphong"> SUPERIOR </div>
                                    <!--http://www./-->
                                    <!-- SUPERIOR | DELUXE | GRAND SUITE | FAMILY JUNIOR SUITE -->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Novotel Danang Premier
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">36 Bạch Đằng, Sông Hàn,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">3,802,122 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data4/images/1.jpg" alt="1" title="1" id="wows4_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data4/images/2.jpg" alt="2" title="2" id="wows4_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data4/images/3.jpg" alt="3" title="3" id="wows4_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine4/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine4/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>
                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container5">
                                <div>
                                    <!--<div>-->
                                        <!--<div class="badge-outer"></div>-->
                                        <!--<div class="badge-inner">Hết phòng</div>-->
                                    <!--</div>-->
                                    <!--<div class="loaiphong"> SUPERIOR </div>-->
                                    <!--http://www./-->
                                    <!-- SUPERIOR | DELUXE | GRAND SUITE | FAMILY JUNIOR SUITE -->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Green Plaza Hotel
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">238 Bạch Đằng, Quận Hải Châu,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">1,380,952 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data5/images/1.jpg" alt="1" title="1" id="wows5_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data5/images/2.jpg" alt="2" title="2" id="wows5_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data5/images/3.jpg" alt="3" title="3" id="wows5_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine5/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine5/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>
                    </div>

                    <div class="row"  style="color: white">
                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container6">
                                <div>
                                    <!--<div>-->
                                        <!--<div class="badge-outer"></div>-->
                                        <!--<div class="badge-inner">Hết phòng</div>-->
                                    <!--</div>-->
                                    <!--<div class="loaiphong"> PREMIUM </div>-->
                                    <!--http://www/-->
                                    <!-- SUPERIOR | DELUXE | GRAND SUITE | FAMILY JUNIOR SUITE -->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Brilliant Hotel
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">162 Bạch Đằng, Q Hải Châu,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">1,624,575 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data6/images/1.jpg" alt="1" title="1" id="wows6_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data6/images/2.jpg" alt="2" title="2" id="wows6_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data6/images/3.jpg" alt="3" title="3" id="wows6_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine6/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine6/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>
                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container7">
                                <div>
                                    <div>
                                        <img src="../public/img/search-hotels/Bookmark-100.png" width="70" class="badge-outer-2"/>
                                        <div class="badge-inner-2">35% Off</div>
                                    </div>
                                    <div class="loaiphong"> PREMIUM </div>
                                    <!--http://www.vandahotel.vn/-->
                                    <!-- SUPERIOR | DELUXE | GRAND SUITE | FAMILY JUNIOR SUITE -->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            OneOpera Danang Hotel
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">115 Nguyễn Văn Linh, Q Hải Châu,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">1,406,926 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data7/images/1.jpg" alt="1" title="1" id="wows7_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data7/images/2.jpg" alt="2" title="2" id="wows7_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data7/images/3.jpg" alt="3" title="3" id="wows7_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine7/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine7/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>
                    </div>

                </div>

                <div id="page-2" style="display: none">
                    <div class="row" style="color: white">
                        <div class="col-sm-6">
                            <!--<img class="size-of-img" src="../img/search-hotels/vanda1.png" />-->
                            <div id="wowslider-container8">
                                <div>
                                    <div>
                                        <div class="badge-outer"></div>
                                        <div class="badge-inner">Hết phòng</div>
                                    </div>
                                    <div class="loaiphong"> Executive </div>
                                    <!--http://www./-->
                                    <!-- SUPERIOR | DELUXE | GRAND SUITE | FAMILY JUNIOR SUITE -->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Mường Thanh Hotel
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <!--962 Ngô Quyền, An Hải Tây, Sơn Trà, Đà Nẵng, Việt Nam
                                            vì có phân phân biệt khu vực An Hải Tây & An Hải Đông => phải điền chính xác.
                                            -->
                                            <span class="address-of-hotel-sub">962 Ngô Quyền, An Hải Tây, Sơn Trà,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">2,271,766 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data8/images/1.jpg" alt="1" title="1" id="wows8_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data8/images/2.jpg" alt="2" title="2" id="wows8_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data8/images/3.jpg" alt="3" title="3" id="wows8_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine8/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine8/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->

                        </div>

                        <div class="col-sm-6">
                            <!--<img src="../img/search-hotels/room.png" />-->
                            <div id="wowslider-container9">
                                <div>
                                    <div>
                                        <div class="badge-outer"></div>
                                        <div class="badge-inner">Hết phòng</div>
                                    </div>
                                    <div class="loaiphong"> Suite </div>
                                    <!--http://www./-->
                                    <!-- SUPERIOR | DELUXE | GRAND SUITE | FAMILY JUNIOR SUITE -->
                                    <div class="info-hotel">
                                        <span style="font-weight: bolder; font-size: 20px" class="name-of-hotel">
                                            Gopatel Hotel & Spa
                                        </span><br/>
                                        <div style="font-size: 12px">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </div>
                                        <span style="font-size: 12px" class="address-of-hotel">
                                            <span class="address-of-hotel-sub">202 Nguyễn Chí Thanh, Q Hải Châu,</span>
                                            <span class="name-of-location">Đà Nẵng</span>
                                        </span>
                                    </div>
                                    <div class="price">2,500,500 <sup>đ</sup></div>
                                </div>
                                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                                <div class="ws_images"><ul>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data9/images/1.jpg" alt="1" title="1" id="wows9_0"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data9/images/2.jpg" alt="2" title="2" id="wows9_1"/></a></li>
                                    <li><a><img src="../public/Utilities/slideshow/slideshow1/data9/images/3.jpg" alt="3" title="3" id="wows9_2"/></a></li>
                                </ul></div>
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.6</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine9/wowslider.js"></script>
                            <script type="text/javascript" src="../public/Utilities/slideshow/slideshow1/engine9/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                        </div>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 15px"> <!-- chinh height o day de~ bi. day? cac phan tu* cua footer -->
                    <ul class="pagination"><!-- Bootstrap -->
                        <li>
                            <a href="#">«</a>
                        </li>
                        <li class="active">
                            <a href="#" id="pagi-1">1</a>
                        </li>
                        <li>
                            <a href="#" id="pagi-2">2</a>
                        </li>
                        <li>
                            <a href="#">»</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="footer"></div>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!--Modal content-->
        <div class="modal-content">
            <div class="modal-header"> <!-- style="padding:35px 50px;" -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--khi dat chung file thi ko can` cai` su* kien  id="refreshDIV" onClick="history.go(0)" cho nut'-->
                <h4>Loại</h4>
            </div>
            <div class="modal-body" style="padding:30px 30px"> <!--  style="padding:40px 50px;" -->
            <div class="row">
                <form role="form">
                <table class="table borderless">
                    <tr>
                        <td><input type="checkbox"> Bình dân </td>
                        <td><input type="checkbox"> Khách sạn nghĩ dưỡng </td>
                        <td><input type="checkbox"> Yên tĩnh</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"> Cổ điển</td>
                        <td><input type="checkbox"> Nhỏ và sang trọng</td>
                        <td><input type="checkbox"> Thương gia</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"> Dành cho gia đình </td>
                        <td><input type="checkbox"> Quyến rũ</td>
                        <td><input type="checkbox"> Thời thượng</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"> Gía tốt nhất </td>
                        <td><input type="checkbox"> Hạng trung </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                </table>
                </form>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="myModal-2" role="dialog">
    <div class="modal-dialog" style="width: 60%">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <!-- style="padding:35px 50px;" -->
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Tiện nghi</h4>
        </div>
        <div class="modal-body" style="padding:30px 30px"> <!--  style="padding:40px 50px;" -->
        <div class="row">
            <form role="form">
            <table class="table borderless">
                <tr>
                    <td><input type="checkbox"> Bãi biển</td>
                    <td><input type="checkbox"> Phòng họp</td>
                    <td><input type="checkbox"> Dịch vụ phòng </td>
                </tr>
                <tr>
                    <td><input type="checkbox"> Bể bơi</td>
                    <td><input type="checkbox"> Đỗ xe miễn phí</td>
                    <td><input type="checkbox"> Quầy bar/Phòng khách</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> Bếp nhỏ</td>
                    <td><input type="checkbox"> Internet</td>
                    <td><input type="checkbox"> Sân gôn</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> Khách sạn không hút thuốc</td>
                    <td><input type="checkbox"> Sòng bạc</td>
                    <td><input type="checkbox"> Xe đưa đón đén sân bay</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> Cho phép mang theo vật nuôi</td>
                    <td><input type="checkbox"> Lối ra cho xe lăn</td>
                    <td><input type="checkbox"> Spa</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> Dãy buồng </td>
                    <td><input type="checkbox"> Người giữ cửa</td>
                    <td><input type="checkbox"> Trung tâm thể dục thẩm mỹ</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> Dịch vụ kinh doanh</td>
                    <td><input type="checkbox"> Nhà hàng</td>
                    <td><input type="checkbox"> Phòng cho người khuyết tật</td>
                </tr>
                <tr>

                </tr>
            </table>
            </form>
        </div>
        </div>

        
    </div>

    </div>
    </div>

    <script>
//        da~ them thuoc tinh' data-toggle="modal" => ko can` cai` script
//        $(document).ready(function(){
//            $("#loai-them").click(function(){
//                $("#myModal").modal();
//            });
//            $("#loai-tiennghi").click(function(){
//                $("#myModal-2").modal();
//            });
//        });
    </script>

    <!-- JavaScript -->
    <!--js nay` phai dat phia' sau cac slide thi moi' chay duoc (co le code tren chua cai ready...)-->
    <script type="text/javascript" src="../public/js/search-hotels.js"></script>

    <script src="../public/Utilities/smoothscroll-for-websites-master/SmoothScroll.js"></script>

    <script src="../public/Utilities/LiveChat.js"></script>

    <!--Form Feedback (position: fixed): https://webengage.com/ , phai dang ky', chua tach ra duoc file rieng do co' kem` id-->
    <script id="_webengage_script_tag" type="text/javascript">
        var webengage;
        !function(e,t,n){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),arguments])}}var i,s,r=e[n],g=" ",l="init options track onReady".split(g),a="feedback survey notification".split(g),c="options render clear abort".split(g),p="Open Close Submit Complete View Click".split(g),u="identify login logout setAttribute".split(g);if(!r||!r.__v){for(e[n]=r={__queue:[],__v:"5.0",user:{}},i=0;i<l.length;i++)o(r,[l[i]]);for(i=0;i<a.length;i++){for(r[a[i]]={},s=0;s<c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s<p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i<u.length;i++)o(r.user,["user",u[i]]);var f=t.createElement("script"),d=t.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==t.location.protocol?"//ssl.widgets.webengage.com":"//cdn.widgets.webengage.com")+"/js/widget/webengage-min-v-5.0.js",d.parentNode.insertBefore(f,d)}}(window,document,"webengage");
        webengage.init('~15ba209b4');
        webengage.options('isDemoMode', true);
    </script>

</div>
@include('includes.footer')
</body>
</html>