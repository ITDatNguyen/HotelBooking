<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!--http://www.w3schools.com/icons/fontawesome_icons_brand.asp-->
    <!--download file nay` ve` de? chay. offline-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
        /*** footer ***/
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
</head>
<body>
    <footer>
    <div class="container-fluid">
        <div id="left-footer">
            <a href="../Pages/homepage.html" style="color: #969595">
                <span style="font-size: 30px; font-weight: bold">YOY</span>
            </a>
            <span style="margin-top: 0; position: absolute">&reg;</span><!-- http://www.w3schools.com/html/html_symbols.asp -->
            <br/>
            <span>Mạng đặt phòng khách sạn Online</span><br/>

            <!--<div style="height: 30px; margin-top: 10px" id="icon-socialnetwork">-->
            <div style="margin-top: 10px" id="icon-socialnetwork">
                <table>
                    <tr>
                        <td width="40px"> <!-- do co' position: absolute => ko the dung line-height + margin -->
                            <!--<img src="header-footer/img/icon_facebook.png" style="opacity: 0.2; position: absolute"/> &lt;!&ndash; xay ra truoc' the a + 2 abosolute &ndash;&gt;-->
                            <!-- cach' 2: chong` 2 pic len voi' nhau -->
                            <!--<a href="https://www.facebook.com/phuc.nguyenhuu.7927" target="_blank" class="icon_followus">-->
                            <!--<div style="height: 24px; width: 24px; border-radius: 4px; position: absolute"></div>-->
                            <!--</a>-->
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa fa-facebook-official" style="font-size: 24px; color: rgb(122,118,118)"></i>
                                <!--<i class="fa fa-facebook-official facebook-icon"></i>-->
                            </a>
                        </td>
                        <td width="40px">
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa fa-twitter-square" style="font-size: 24px; color: rgb(122,118,118)"></i>
                            </a>
                        </td>
                        <td  width="40px">
                            <a href="https://www.pinterest.com/" target="_blank">
                                <i class="fa fa-pinterest-square" style="font-size: 24px; color: rgb(122,118,118)"></i>
                            </a>
                        </td>
                        <td  width="40px">
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="fa fa-youtube-play" style="font-size: 24px; color: rgb(122,118,118)"></i>
                            </a>
                        </td>
                        <td>
                            <a href="https://plus.google.com/" target="_blank">
                                <i class="fa fa-google-plus-square" style="font-size: 24px; color: rgb(122,118,118)"></i>
                            </a>
                        </td>
                        </td>
                    </tr>
                </table>
            </div>

            <div style="margin-top: 25px">
                <span>Liên hệ:</span><br/>
                <!-- http://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp -->
                <span class="glyphicon glyphicon-map-marker"></span> 38 Yên Bái, Quận Hải Châu, tp Đà Nẵng<br/>
                <span class="glyphicon glyphicon-earphone"></span> 0123 - 456 - 789<br/>
                <span class="glyphicon glyphicon-envelope"></span> aptech@gmail.com<br/>
            </div>
        </div>

        <div id="right-footer">
            <div class="container-fluid">
            <!--<div class="row" style="font-size: 18px; font-weight: bold; color: rgb(197,197,197)">-->
            <div class="row">
                <div style="float: left; margin: 25px">
                    <p class="myTitle">YOY</p>
                    <a href="#url">Giới thiệu</a><br/>
                    <a href="#url">Nghề nghiệp</a><br/>
                    <a href="#url">Hỗ trợ người dùng</a><br/>
                </div>
                <!--<div class="col-xs-5 col-sm-5 col-md-5">-->
                <div style="float: left; width: 200px; margin: 25px">
                    <p class="myTitle">Dịch vụ cung cấp</p>
                    <a href="#url">Ứng dụng di động - tìm kiếm mọi lúc, mọi nơi YOY Hotel Manager - dành cho chủ khách</a>
                </div>
                <!--<div class="col-xs-4 col-sm-4 col-md-4">-->
                <div style="float: left; margin: 25px">
                    <p class="myTitle">Info</p>
                    <a href="#url">Điều khoản sử dụng</a><br/>
                    <a href="#url">Thông tin pháp lý</a><br/>
                    <a href="#url">Chính sách bảo mật</a><br/>
                    <a href="#url">Sơ đồ website</a><br/>
                </div>
            </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- neu' dat ben trong footer thi` phai them 1 the div bao quoanh left-footer, right-footer -->
    <p style="color: rgb(150,149,149); margin-top: -30px; width: 100%; text-align: center; font-size: small">
        <!-- http://www.w3schools.com/html/html_symbols.asp -->
        &copy; 2015-16 Batch124.Sem1.Group6 | Thực hiện
    </p>

</body>
</html>