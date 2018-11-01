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
    <link href="{{ elixir('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">

    
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