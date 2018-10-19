<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DTDL | hotel-bookings</title>
    <link rel="stylesheet" type="text/css" href="../css/room-bookings.css" />
    <!-- bootstrap: de y' 2 file ajax phai dat truoc maxcdn thi moi dung` duoc modal (Form)-->
    <!-- Online -->
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <!-- Offline -->
    <link rel="stylesheet" href="../Utilities/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../Utilities/jQuery-1.x/jquery-1.11.3.min.js"></script>
    <script src="../Utilities/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="../Utilities/slideshow/slideshow2/engine1/style.css" />
    <script type="text/javascript" src="../Utilities/slideshow/slideshow2/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

    <style>
    </style>

    <script>
    $(document).ready(function(){
        // $("#header").load("header-footer/part-header.html");
        // $("#footer").load("header-footer/part-footer.html");
        //lay' ten locations o? trang search-hotels, 1 so' bien' dung chung ten da~ luu voi trang homepage
//          $('#autocomplete').val(localStorage.index_tmp_name);
        $('.name-of-location').text(localStorage.index_tmp_name);
        $('#date1').val(localStorage.searchhotels_tmp_checkin);
        $('#date2').val(localStorage.searchhotels_tmp_checkout);
//            $('#loaiphong select').val(localStorage.index_tmp_typeofroom);
        $('.name-of-hotel').text(localStorage.searchhotels_tmp_nameofhotel);
        $('.address-of-hotel').text(localStorage.searchhotels_tmp_addofhotel);
        // xac dinh vi tri tren Google map, chi thay doi dia chi & cố định tại Đà Nẵng
        $('#right-infoTabs iframe').attr('src','https://maps.google.com/maps?hl=en&q=' + localStorage.searchhotels_tmp_addofhotel_2 + '&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed');
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
<div id="container">
    @include('header-footer.part-header')

    <div id="aboutHotel" class="container" style="background-color: rgb(246,245,245); margin: 0; padding: 0">
        <div id="left-aboutHotel" style="width: 65%; float: left; position: relative; background-color: white">
        <div class="tmp-left-aboutHotel" style="display: none">...</div>
            <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1">
                <!--neu dung margin-top: 380px => khi zoom browser thi chu~ bi. day? xuog' -->
                <div style="position: absolute; z-index: 1000; color: white; text-shadow: 1px 0px black; margin-left: 50px;bottom: 45px">
                    <span style="font-weight: bolder; font-size: 30px" class="name-of-hotel">Vanda Hotel</span><br/>
                    <div style="font-size: 15px">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </div>
                    <!--<span class="glyphicon glyphicon-map-marker" style="font-size: 10px"> 3 Nguyễn Văn Linh, Q Hải Châu, Đà Nẵng</span>-->
                    <div style="font-size: 15px">
                        <span class="glyphicon glyphicon-map-marker"></span>
                        <span class="address-of-hotel">
                            3 Nguyễn Văn Linh, Q Hải Châu, Đà Nẵng
                        </span>
                    </div>
                </div>

                <div class="ws_images" style="z-index: 999">
                    <ul>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/room01.jpg" alt="room01" title="room01" id="wows1_0"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/room02.jpg" alt="room02" title="room02" id="wows1_1"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/room03.jpg" alt="room03" title="room03" id="wows1_2"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/room04.jpg" alt="room04" title="room04" id="wows1_3"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/hanhlang01.jpg" alt="hanhlang01" title="hanhlang01" id="wows1_4"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/hanhlang02.jpg" alt="hanhlang02" title="hanhlang02" id="wows1_5"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/nhahang01.jpg" alt="nhahang01" title="nhahang01" id="wows1_6"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/nhahang02.jpg" alt="nhahang02" title="nhahang02" id="wows1_7"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/beboi.jpg" alt="beboi" title="beboi" id="wows1_8"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/phongtapthehinh.jpg" alt="phongtapthehinh" title="phongtapthehinh" id="wows1_9"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/spa01.jpg" alt="Spa01" title="Spa01" id="wows1_10"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/spa02.jpg" alt="Spa02" title="Spa02" id="wows1_11"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/spa03.jpg" alt="Spa03" title="Spa03" id="wows1_12"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/spa04.jpg" alt="Spa04" title="Spa04" id="wows1_13"/></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/barpub01.jpg" alt="Bar-Pub01" title="Bar-Pub01" id="wows1_14"/></li>
                    <li><a href="http://wowslider.com"><img src="../Utilities/slideshow/slideshow2/data1/images/barpub02.jpg" alt="http://wowslider.com/" title="Bar-Pub02" id="wows1_15"/></a></li>
                    <li><img src="../Utilities/slideshow/slideshow2/data1/images/publounge.jpg" alt="Pub-Lounge" title="Pub-Lounge" id="wows1_16"/></li>
                    </ul>
                </div>
                <div class="ws_bullets"><div>
                    <a href="#wows1_0" title="room01"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/room01.jpg" alt="room01"/>1</span></a>
                    <a href="#wows1_1" title="room02"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/room02.jpg" alt="room02"/>2</span></a>
                    <a href="#wows1_2" title="room03"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/room03.jpg" alt="room03"/>3</span></a>
                    <a href="#wows1_3" title="room04"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/room04.jpg" alt="room04"/>4</span></a>
                    <a href="#wows1_4" title="hanhlang01"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/hanhlang01.jpg" alt="hanhlang01"/>5</span></a>
                    <a href="#wows1_5" title="hanhlang02"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/hanhlang02.jpg" alt="hanhlang02"/>6</span></a>
                    <a href="#wows1_6" title="nhahang01"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/nhahang01.jpg" alt="nhahang01"/>7</span></a>
                    <a href="#wows1_7" title="nhahang02"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/nhahang02.jpg" alt="nhahang02"/>8</span></a>
                    <a href="#wows1_8" title="beboi"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/beboi.jpg" alt="beboi"/>9</span></a>
                    <a href="#wows1_9" title="phongtapthehinh"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/phongtapthehinh.jpg" alt="phongtapthehinh"/>10</span></a>
                    <a href="#wows1_10" title="Spa01"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/spa01.jpg" alt="Spa01"/>11</span></a>
                    <a href="#wows1_11" title="Spa02"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/spa02.jpg" alt="Spa02"/>12</span></a>
                    <a href="#wows1_12" title="Spa03"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/spa03.jpg" alt="Spa03"/>13</span></a>
                    <a href="#wows1_13" title="Spa04"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/spa04.jpg" alt="Spa04"/>14</span></a>
                    <a href="#wows1_14" title="Bar-Pub01"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/barpub01.jpg" alt="Bar-Pub01"/>15</span></a>
                    <a href="#wows1_15" title="Bar-Pub02"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/barpub02.jpg" alt="Bar-Pub02"/>16</span></a>
                    <a href="#wows1_16" title="Pub-Lounge"><span><img src="../Utilities/slideshow/slideshow2/data1/tooltips/publounge.jpg" alt="Pub-Lounge"/>17</span></a>
                </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">slider</a> by WOWSlider.com v8.6</div>
                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="../Utilities/slideshow/slideshow2/engine1/wowslider.js"></script>
            <script type="text/javascript" src="../Utilities/slideshow/slideshow2/engine1/script.js"></script>
            <!--phia sau cua buc anh con` dang bi. an? cac' so' thu' tu* cua buc anh (quet se thay)-->
            <!-- End WOWSlider.com BODY section -->

            <!--<div id="aboutHotel-infoTabs" style="height: 350px; width: 100%; border-bottom: 1px solid rgb(238,238,238)">-->
            <div id="aboutHotel-infoTabs" class="container-fluid" style="width: 100%; border-bottom: 1px solid rgb(238,238,238)">
            <div class="row">
                <!--<div id="left-infoTabs" style="width: 55%; float: left">-->
                <div id="left-infoTabs" class="col-sm-6 col-md-6">
                    <div class="container" style="width: 95%; margin-top: 30px; margin-left: 30px">
                        <!--Toggable / Dynamic Tabs-->
                        <!--http://www.w3schools.com/bootstrap/bootstrap_tabs_pills.asp-->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home" style="color: rgb(156,153,153); font-weight: bold">DU LỊCH</a></li>
                            <li><a data-toggle="tab" href="#menu1" style="color: rgb(156,153,153); font-weight: bold">NHÀ HÀNG</a></li>
                            <li><a data-toggle="tab" href="#menu2" style="color: rgb(156,153,153); font-weight: bold">CHỢ, SIÊU THỊ</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <br/>
                                <table class="table borderless">
                                    <tr>
                                        <td>Bảo tàng Chăm</td>
                                        <td>0.1 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Sông Hàn</td>
                                        <td>0.1 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Các bãi biển</td>
                                        <td>2 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Bán đảo Sơn Trà</td>
                                        <td>3.2 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Núi Bà Nà</td>
                                        <td>9 Km</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <br/>
                                <table class="table borderless">
                                    <tr>
                                        <td>Apsara Restaurant</td>
                                        <td>0.3 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Café Trà Cung Đình</td>
                                        <td>0.5 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Trúc Lâm Viên</td>
                                        <td>2 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Nhà hàng Bia Tiệp Tulip</td>
                                        <td>2.5 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Nhà hàng Estasy</td>
                                        <td>1 Km</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <br/>
                                <table class="table borderless">
                                    <tr>
                                        <td>Chợ Hàn</td>
                                        <td>0.4 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Chợ Cồn</td>
                                        <td>1 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Siêu thị Big C</td>
                                        <td>1 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Trung tâm thương mại Vincom</td>
                                        <td>2 Km</td>
                                    </tr>
                                    <tr>
                                        <td>Lotte Mart</td>
                                        <td>2 Km</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div id="right-infoTabs" class="container-fluid" style="width: 400px; float: right; background-color: #008000">-->
                <div id="right-infoTabs" class="col-sm-6 col-md-6 container-fluid" style="margin: 0; padding: 0">
                    <!--height != full de thay' duoc hr-->
                    <!--<img src="../img/room-bookings/Googlemap.png" width="100%" height=348px" />-->
                    <!--http://embedgooglemaps.com/ neu' dia chi? cu~ thi` the hien vi tri ko dung' -->
                    <!--https://www.google.com/maps/place nhap vi tri (ten ks, dia chi ...) vao` phan` share/ nhung' code-->
                    <!--khi scroll neu con tro dat tai vi tri nay` => bi. zoom tu* dong (dug ra ko can` vi` da~ nut' - & +) -->
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6448.184861978808!2d108.22074437375409!3d16.059590732980645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xdb01f82fd192cd3c!2sVanda+Hotel!5e0!3m2!1sen!2sus!4v1451444838343" width="99.8%" height="348" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    <!--phu thuoc vao dia chi + ten thanh pho' (that te') -->
                    <!--<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="350" src="https://maps.google.com/maps?hl=en&q=3 Nguyễn Văn Linh, Q Hải Châu, Đà Nẵng&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed">-->
                    <div class="embed-responsive embed-responsive-4by3">
                        <!--left: 0 => ho tro noi rong pic (khi co' Grid, se tu* dong tao margin, padding)-->
                        <iframe style="left: 0px; " class="embed-responsive-item" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="auto" height="auto" allowfullscreen src="https://maps.google.com/maps?hl=en&q=3 Nguyễn Văn Linh, Q Hải Châu, Đà Nẵng&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed">
                            <!--<div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div>-->
                            <!--<div><small><a href="https://ww.premiumlinkgenerator.com/">premium link generator</a></small></div>-->
                        </iframe>
                    </div>

                    <!--<div class="map-wrap">-->
                        <!--<div class="overlay" onClick="style.pointerEvents='none'"></div>&lt;!&ndash; wrap map iframe to turn off mouse scroll and turn it back on on click &ndash;&gt;-->

                        <!--<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193588.80258659853!2d-74.12906269315698!3d40.69985076621476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1446647383676" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->

                    <!--</div>-->

                </div>
            </div>
            </div>
            
            <!--<div style="height: 400px; width: 100%">-->
            <div class="container-fluid" style="width: 100%; border-bottom: 1px solid rgb(238,238,238)">
            <div class="row">
                <!--<div id="amenities" style="width: 55%; height: 100%; float: left; margin-left: 30px">-->
                <div id="amenities" class="col-sm-7 col-md-7">
                <div class="container" style="width: 100%; margin-left: 30px">
                    <div class="title">Tiện nghi</div> <!-- dung` div thi moi cai duoc margin -->
                    <div class="redline"></div>
                    <table class="table borderless">
                        <tr>
                            <td>
                            <table class="table borderless">
                            <ul>
                                <!--chen pic truc tiep vao tung li-->
                                <li style="list-style-image:url('../img/room-bookings/Parking-26.png')">Bãi đậu xe</li>
                                <li style="list-style-image:url('../img/room-bookings/Bank%20Cards-26.png')">Có thể thanh toán bằng thẻ</li>
                                <li style="list-style-image:url('../img/room-bookings/Elevator-26.png')">Thang máy</li>
                                <li style="list-style-image:url('../img/room-bookings/Beer%20Bottle-26.png')">Minibar</li>
                                <li style="list-style-image:url('../img/room-bookings/Fridge-26.png')">Tủ lạnh nhỏ</li>
                                <li class="del" style="list-style-image:url('../img/room-bookings/Wheelchair-26.png')">Xe lăn cho người khuyết tật</li>
                            </ul>
                            </table>
                            </td>
                            <td>
                            <table class="table borderless">
                            <ul>
                                <li style="list-style-image:url('../img/room-bookings/Wi-Fi-26.png')">Internet</li>
                                <li style="list-style-image:url('../img/room-bookings/Air%20Conditioner-26.png')">Máy điều hòa nhiệt độ</li>
                                <li style="list-style-image:url('../img/room-bookings/Swimming%20Pool-26.png')">Hồ bơi</li>
                                <li class="del" style="list-style-image:url('../img/room-bookings/Conference-26.png')">Phòng họp</li>
                                <li style="list-style-image:url('../img/room-bookings/Dining%20Room-26.png')">Khu vực ẩm thực</li>
                                <li style="list-style-image:url('../img/room-bookings/Widescreen%20TV-26.png')">TV màn hình phẳng</li>
                            </ul>
                            </table>
                            </td>
                        </tr>
                    </table>
                </div>
                </div>

                <!--<div style="width: 40%; height: 100%; float: right">-->
                <div class="col-sm-5 col-md-5">
                <div class="container" style="width: 100%; margin-left: 15px">
                    <div style="margin-left: 15px">
                        <div class="title">Chính sách của khách sạn</div>
                        <div class="redline"></div>
                    </div>
                    <ul style="border-left: 1px solid rgb(223,221,221)">
                        <li class="li-title">Nhận phòng</li>
                        <li>Giờ nhận phòng sau 11:45 AM</li>
                        <li>Tuổi nhận phòng tối thiểu từ 18</li>
                        <br/>
                        <li class="li-title">Trả phòng</li>
                        <li>Giờ trả phòng trước 11:30 AM</li>
                        <br/>
                        <li class="li-title">Xin lưu ý thêm</li>
                        <li>Khách không được phép mang vật nuôi, bao gồm cả vật nuôi hỗ trợ người khuyết tật vào khách sạn này.</li>
                    </ul><br/>
                    <div style="text-align: center">
                        <a href="#url"><small>Thiếu thông tin hoặc không chính xác ? <br/>Hãy cho chúng tôi biết !</small></a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!--<hr/>-->
            <!--<div id="description" style="width: 85%; height: 350px; margin-left: 5%">-->
            <div id="description" class="container" style="width: 85%; margin-left: 50px">
                <div class="title">Mô tả khách sạn</div>
                <div class="redline"></div>
                <p style="text-align: justify">
                    Nếu bạn đang muốn tìm một khách sạn có vị trí thuận lợi thuộc <span class="name-of-location">Đà Nẵng</span>,
                    không lựa chọn nào tốt hơn <span class="name-of-hotel">Vanda Hotel</span>. Từ đây, khách có thể dễ dàng tiếp
                    cận được nét đẹp sống động của thành phố ở mọi góc cạnh. Với vị trí thuận lợi, khách sạn dễ dàng tiếp
                    cận những điểm tham quan du lịch nổi tiếng của thành phố.<br/><br/>
                    <span class="name-of-hotel">Vanda Hotel</span> mang lại dịch vụ hoàn hảo, làm hài lòng cả những vị
                    khách khó tính nhất với những tiện nghi sang trọng tuyệt vời. Khi nghỉ ngơi trong khách sạn tuyệt vời
                    này, khách có thể tận hưởng Miễn phí Wi-fi tất cả các phòng, quầy lễ tân 24 giờ, tiện nghi cho người
                    khuyết tật, Wi-Fi ở khu vực công cộng, phục vụ phòng.<br/><br/>
                    Khách có thể chọn 114 phòng có không khí yên bình và tuyệt vời. phòng thể dục, phòng xông hơi, hồ
                    bơi trong nhà, spa, massage của khách sạn là nơi lý tưởng để thư giãn và đổi gió sau một ngày bận
                    rộn. <span class="name-of-hotel">Vanda Hotel</span> là một sự lựa chọn thông minh cho du khách khi
                    đến <span class="name-of-location">Đà Nẵng</span>, nơi mang lại cho họ một kì nghỉ thư giãn và thoải mái.
                </p>
            </div>

            <div style="margin-left: 50px; color: rgb(70,68,79); line-height: 75px">
                <!--dung div thi bi. <br/>-->
                <a href="homepage.html" style="color: grey">Trang chủ</a>
                <span class="glyphicon glyphicon-menu-right" style="font-size: 10px"></span>
                <a href="search-hotels.html" style="color: grey">
                    <span class="name-of-location">Đà Nẵng</span>
                </a>
                <span class="glyphicon glyphicon-menu-right" style="font-size: 10px"></span>
                <b>YOY <span class="name-of-hotel">Vanda Hotel</span></b>
            </div>
        </div>
        <!--tam dat. height de ho tro fill color (vi ko xac dinh dc height cua right-aboutHotel)-->
        <!--neu height: 1715px; du* qua nhieu thi` ko the scroll xuong' sat' mep' cua footer, trang goc' khi zoom
        browser thi ben trai bi thu nho con` ben phai van~ giu~ nguyen -->
        <!--background-color: rgb(246,245,245) height: 1675px;  -->
        <div id="right-aboutHotel" style="width: 35%; float: right; bottom: 0">
        <!--<div id="right-aboutHotel" style="width: 400px; height: 1715px; background-color: rgb(246,245,245); float: right; bottom: 0">-->
            <div id="right-aboutHotel-1" style="width: 93%; margin: auto; margin-top: 5px">
                <table class="table borderless myTable-1">
                    <tr style="color: rgb(122,118,118); width: 50%">
                        <th>NHẬN PHÒNG</th>
                        <th>TRẢ PHÒNG</th>
                    </tr>

                    <tr>
                        <td>
                            <!--chung thuc khi click DAT PHONG-->
                            <div id="tooltip1" class="validation-advice" style="display: none">Ngày nhận phòng ko hợp lệ !</div>
                            <input type="date" class="form-control" id="date1" style="margin-top: -5px">
                            <!--nhap chung viec chung thuc cho nut' DAT PHONG (hop ly' hon dat o day-->
                        </td>
                        <td>
                            <div id="tooltip2" class="validation-advice" style="display: none">Ngày trả phòng ko hợp lệ !</div>
                            <input type="date" class="form-control" id="date2" style="margin-top: -5px">
                        </td>
                    </tr>

                    <tr>
                        <th style="text-align: right; color: rgb(122,118,118)">PHÒNG</th>
                        <td>
                            <!--gia tri cua select co the tuy` thuoc vao thong bao' con` bao nhieu phong` tai trang search-hotels-->
                            <select id="slt-rooms" class="form-control" style="width: 70px">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>6+</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <!--chua hover duoc -->
                <table id="mytable" class="table table-hover" style="margin-top: -22px">
                    <tr id="mytable-th" style="color: rgb(122,118,118)">
                        <th style="border: none">PHÒNG#</th>
                        <th style="border: none">KHÁCH</th>
                        <th style="border: none">GIÁ (đ)</th>
                        <th style="border: none">SỐ TIỀN (đ)</th>
                    </tr>
                    <tr id="room-row1" style="background-color: white">
                        <td> &nbsp; 1</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/>
                        </td>
                        <!--tuy theo chinh sach cua tung` ks ma` gia phong` duoc quy dinh theo SL khach' o?-->
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row2" style="background-color: white; display: none">
                        <td> &nbsp; 2</td>
                        <td>
                            <!--<input type="number" min="1" max="3" value="1" class="form-control" style="width: 65px"/>-->
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed" />
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed" />
                        </td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row3" style="background-color: white; display: none">
                        <td> &nbsp; 3</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/>
                        </td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row4" style="background-color: white; display: none">
                        <td> &nbsp; 4</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/></td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row5" style="background-color: white; display: none">
                        <td> &nbsp; 5</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/>
                        </td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row6" style="background-color: white; display: none">
                        <td> &nbsp; 6</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/></td>
                        <!--<td>-->
                            <!--<input type="number" min="1" max="3" value="1" class="form-control" style="width: 65px"/>-->
                        <!--</td>-->
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                </table>

                <table id="table-result" class="table borderless" style="margin-top: -15px;">
                    <tr>
                        <td id="table-result-1">
                            Tổng số
                            <span id="table-result-11" style="font-weight: bold">1</span> Phòng,
                            <span id="table-result-12" style="font-weight: bold">1</span> Khách &
                            <span id="table-result-13" style="font-weight: bold; text-decoration: underline">1</span><u> Đêm</u>
                        </td>
                        <td rowspan="2" style="text-align: right">
                            <span id="table-result-2" style="font-weight: bold; font-size: 25px">
                            1.500.000 <sup><u>đ</u></sup>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><small>Bao gồm tất cả các loại thuế</small></td>
                    </tr>
                </table>

                <div id="extra-room" style="display: none">
                    <div style="margin: auto; width: 95%; height: 60px; background-color: rgb(247,221,221); text-align: center; margin-bottom: 5px; padding: 10px; border: 1px solid rgb(220,30,40); color: rgb(220,30,40)">
                        Để đặt phòng số lượng lớn, vui lòng để lại số điện thoại<br/>của bạn. Chúng tôi sẽ gọi trong thời gian sớm nhất.
                    </div>
                    <div>
                    <form onsubmit="alert('Chúng tôi đã nhận được yêu cầu của bạn !')">
                        <table class="table borderless" style="width: 95%; margin: auto">
                        <tr>
                            <td style="width: 20%">
                                <input type="text" class="form-control" value="+84" disabled style="height: 45px"/>
                            </td>
                            <td style="width: 80%">
                                <!-- class="extraroom-phone" se~ duoc ap dug vao` phan` chu*ng' thuc -->
                                <div id="extraroom-tooltip" data-tooltip="Vui lòng điền vào trường này.">
                                    <!--<input name="extraroom-phone" type="tel" required class="form-control" placeholder="Nhập số điện thoại của bạn"/>-->
                                    <input name="extraroom-phone" type="tel" required="true" class="form-control" placeholder="Nhập số điện thoại của bạn"
                                               pattern="[0-9]{6,}" title="Tối thiểu 6 số"/>
                                    <!--chua tao duoc alert ios-overlay-->
                                </div>
                            </td>
                        </tr>
                        </table>
                        <div style="text-align: center; margin-top: 10px;">
                            <input type="submit" class="btn mybtn-style1" value="YÊU CẦU GỌI LẠI">
                        </div>
                    </form>
                    </div>
                </div>

                <!--them div de cai` text-align: center-->
                <div style="text-align: center; margin-top: 10px;">
                    <input id="book-now" type="button" class="btn mybtn-style1" value="ĐẶT PHÒNG">
                </div>

                <div style="width: 100%; text-align: center; margin-top: 10px">
                    <a href="#" style="color: rgb(220,30,40)">Các điều khoản và Điều kiện</a>
                </div>
            </div>
            <!-- sau khi click DAT PHONG -->
            <div id="right-aboutHotel-2" style="width: 90%; margin: auto; margin-top: 15px; display: none; bottom: 0">
                <!--borderless-->
                <table class="table borderless">
                    <tr>
                        <td>NHẬN PHÒNG</td>
                        <td>TRẢ PHÒNG</td>
                        <td>PHÒNG</td>
                        <td>KHÁCH</td>
                        <td>
                            <a id="book-now-2" href="#" style="color: rgb(220,30,40)">THAY ĐỔI</a>
                        </td>
                    </tr>
                    <tr style="font-weight: bold; text-align: center">
                        <td id="right-aboutHotel-2-checkin">20/01/2016</td>
                        <td id="right-aboutHotel-2-checkout">21/01/2016</td>
                        <td id="table-result-21">1</td>
                        <td id="table-result-22">1</td>
                        <!--<td>...</td>-->
                    </tr>
                </table>

                <form id="thanhtoan" name="formthanhtoan">
                    <b>THÔNG TIN CHI TIẾT:</b>
                    <table class="table borderless">
                        <tr>
                            <td colspan="2">
                                <input type="text" name="info-name" class="form-control" required="" placeholder="Họ và Tên" style="height: 40px"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><input type="text" class="form-control" value="+84" disabled style="height: 40px; margin-top: -10px"/></td>
                            <td style="width: 80%">
                                <!--<input type="tel" name="info-phone" class="form-control" required="" placeholder="Số điện thoại" style="height: 40px; margin-top: -10px"/>-->
                                <input type="text" name="info-phone" required="true" class="form-control" placeholder="Số điện thoại"
                                       style="height: 40px; margin-top: -10px"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="email" name="info-email" class="form-control" placeholder="Email"
                                       style="height: 40px; margin-top: -10px"/>
                            </td>
                        </tr>
                    </table>
                    <hr style="margin-top: -10px"/>
                    <table class="table borderless">
                        <tr>
                            <td style="width: 50%">
                                Tổng tiền thanh toán<br/><small>Đã bao gồm thuế</small>
                            </td>
                            <td id="tien-thanhtoan" style="text-align: right; width: 50%; font-weight: bold; font-size: 25px">
                                1.500.000 <sup><u>đ</u></sup>
                            </td>
                        </tr>
                    </table>

                    <div id="bt-thanhtoan" style="font-weight: bold; margin: auto; width: 88%">
                        <input id="bt-thanhtoan1" type="submit" class="btn mybtn-style2" value="THANH TOÁN TẠI KHÁCH SẠN" style="float: left"
                                >
                        <div style="float: left; margin-left: 10px">
                            <div id="paywith">
                                <div class="effect-shadow-ul">
                                    <!--ban dau dung ul, li nhu*ng ko ho tro hover row
                                    <li style="list-style-image:url('../img/room-bookings/icon%20pay/visa.gif')"> Visa</li> -->
                                    <!--http://www.w3schools.com/bootstrap/bootstrap_ref_css_tables.asp-->
                                    <table class="table table-hover borderless">
                                        <!--khi nao co' trang moi' thi cai` the? a-->
                                        <thead>
                                        <tr>
                                            <th colspan="2">TRẢ VỚI</th>
                                            <!--<th></th>-->
                                        </tr>
                                        </thead>
                                        <!--<tbody>-->
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/visa.gif"/></td>
                                            <td>Visa</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/mastercard.png"/></td>
                                            <td>MasterCard</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/JCB.png"/></td>
                                            <td>JCB</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/american-express.png"/></td>
                                            <td>American Express</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/paypal.png"/></td>
                                            <td>PayPal</td>
                                        </tr>
                                        <!--</tbody>-->
                                    </table>
                                </div>

                                <input type="button" class="btn mybtn-style1" value="TRẢ BÂY GIỜ">
                            </div>
                        </div>
                    </div>
                </form>

                <div id="verify-code" style="clear: both; width: 93%; display: none; margin: auto">
                <hr style="margin-top: -10px"/>
                    <form>
                    Nhập mã xác nhận đã gửi đến số điện thoại trên:
                    <table class="table borderless">
                        <tr>
                            <td>
                                <input type="text" name="enter-code" class="form-control" required placeholder="Nhập mã" style="height: 35px" />
                            </td>
                            <td>
                                <input type="submit" class="btn mybtn-style1" value="XÁC NHẬN & ĐẶT PHÒNG">
                                <div id="myID" class="ios-overlay" style="display: none">
                                    <span class="glyphicon glyphicon-ok" style="font-size: 100px"></span>
                                    <span>ĐÃ XÁC NHẬN !</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a id="verify-code-resendcode" href="#" style="color: rgb(220,30,40)">Gửi lại mã</a>
                            </td>
                            <td>
                                <a id="verify-code-cancel" href="#" style="color: rgb(220,30,40)">Hủy</a>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @include('header-footer.part-footer')

    <!-- dat. them o day thi moi' dung` dc-->
    <!-- Form Sign-Up & Log In: Ho tro link den' file Sign-up -->
    <!--<a href="Sign-up.html" data-toggle="modal" data-target="#theModal">Lab 6</a>-->
    <!--http://stackoverflow.com/questions/32958219/getting-bootstraps-modal-content-from-another-page
    http://plnkr.co/edit/Y7jDj2hORWmJ95c96qoG?p=preview
    -->
    <!-- <div class="modal fade" id="theModal">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div> -->

    <!--JavaScript-->
    <script src="../js/room-bookings.js"></script>
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