/** Created by Group6 on 15/12/2015. **/
$(document).ready(function(){
    /* navigation-bar */
    /* viec xay ra cua mouseenter xay ra qua' nhanh => sau 1 hoac 2s thi` moi' kich hoat thanh nav */
    // How to add delay to jquery mouseover? [duplicate]: http://stackoverflow.com/questions/15575993/how-to-add-delay-to-jquery-mouseover
    // cung co 1 phuong thuc delay khac: https://api.jquery.com/delay/    http://www.w3schools.com/jquery/eff_delay.asp
    var timer;
    var delay = 300; //dam bao khi re chuot nhanh van~ chua so? menu ra
    $('.left-nav-city').hover(function() {
        //dat ngoai` function
        var $glyphicon = $(this).find('.tmp-glyphicon');
        //find ID (dug ra la dung` class cho nav_sub, nhu*ng do da cai nhieu` css truoc' do, bi anh huog', va` dung
        //var att = $(this).attr('id'); de xac dinh ten id
        //ban dau dung` ID => co nhieu dk if
        //var $txt = $(this).find('.txt-name-location').text();
        //if ($txt === "HÀ NỘI") {
        //    $nav_sub = $('#left-nav-A');
        //} else if ($txt === "ĐÀ NẴNG") {
        //    $nav_sub = $('#left-nav-B');
        //} else if ($txt === "HỒ CHÍ MINH") {
        //    $nav_sub = $('#left-nav-C');
        //} else {
        //    //'khi hover vao` TẤT CẢ
        //    $nav_sub = '';
        //}
        //dat ngoai function (neu dat trong thi` phai them bien' de? ho~ tro* this)
        $nav_sub = $(this).find('.tmp-left-nav');
        // on mouse in, start a timeout
        timer = setTimeout(function() {
            // do your stuff here
            $nav_sub.fadeIn(10);
            $glyphicon
                //viet gop, dau ; dat o thuoc tinh cuoi cung`, co' the gop css vao` class rotate-up
                .css("color","grey")
                //position = relative, dung su* kien Fade ko nhanh = remove class'
                .removeClass('glyphicon-menu-down rotate-down')
                .addClass('glyphicon-menu-up rotate-up');
        }, delay);
    }, function() {
        //phai khai bao' lai bien' $glyphicon, con` $txt thi` ko can
        var $glyphicon = $(this).find('.tmp-glyphicon');
        // on mouse out, cancel the timer
        clearTimeout(timer);
        $nav_sub.fadeOut();
        $glyphicon
            /*lay thong so' tai vi tri span da~ cai` (ko fai eye picker) */
            .css("color","#E58373")
            .removeClass('glyphicon-menu-up rotate-up')
            .addClass('glyphicon-menu-down rotate-down')
    });

    $('#search-locations img').click(function(){
        $('#search-locations input').val('');
        $('#search-locations input').focus();
    });

    $('#search-locations').hover(function() {
        if ($('#autocomplete').val() !== ''){
            $('#search-locations img').fadeIn();
        }
    }, function() {
        $('#search-locations img').fadeOut();
    });
    //su* kien change (ko duoc): http://stackoverflow.com/questions/12797700/jquery-detect-change-in-input-field
    $('#autocomplete').on('input', function() {
        //alert('autocomplete changed!');
        if ($(this).val().length !== 0){
            $('#search-locations img').fadeIn();
        } else {
            $('#search-locations img').fadeOut();
        }
    });

    $('#booking_form_search').click(function(){
        //luu tru~ bien' cho trang tim kiem (khi load trang nay` se~ thay') http://www.w3schools.com/html/html5_webstorage.asp
        save_name_of_location();
    });

    function save_name_of_location() {
        if(typeof(Storage) !== "undefined") {
            if (localStorage.index_tmp_name) {
                var $txtLocal = $('#autocomplete').val().toUpperCase();
                localStorage.index_tmp_name = $txtLocal;
                //alert(localStorage.index_tmp_name.toUpperCase());
                if ($txtLocal === 'HÀ NỘI') {
                    // luu bien' de ho tro tao ra cac options lien quan den dia diem noi bat tai trang search hotels
                    localStorage.ddnoibat = '0';
                } else if ($txtLocal === 'ĐÀ NẴNG') {
                    localStorage.ddnoibat = '1';
                } else if ($txtLocal === 'TP HỒ CHÍ MINH') {
                    localStorage.ddnoibat = '2';
                }
                localStorage.index_tmp_typeofroom = $('#loaiphong select').val();
                //save Date (checkin, checkout)
                var check_in = new Date(document.getElementById("datepicker1").value);
                var check_out = new Date(document.getElementById("datepicker2").value);
                if ((isNaN(check_in) == false && isNaN(check_out) == false)) {
                    //check_in
                    var month_check_in = check_in.getMonth()+1;
                    var day_check_in = check_in.getDate();
                    if (check_in.getMonth() < 10) month_check_in = "0" + month_check_in;
                    if(day_check_in < 10) day_check_in = "0" + day_check_in;
                    //check_out
                    var month_check_out = check_out.getMonth()+1;
                    var day_check_out = check_out.getDate();
                    if (check_out.getMonth() < 10) month_check_out = "0" + month_check_out;
                    if(day_check_out < 10) day_check_out = "0" + day_check_out;
                    //convert
                    var check_in_convert= check_in.getFullYear() + "-" + month_check_in + "-" + day_check_in;
                    var check_out_convert= check_out.getFullYear() + "-" + month_check_out + "-" + day_check_out;
                    //save
                    localStorage.index_tmp_checkin = check_in_convert;
                    localStorage.index_tmp_checkout = check_out_convert;
                } else {
                    localStorage.index_tmp_checkin = "2016-01-20";
                    localStorage.index_tmp_checkout = "2016-01-21";
                }
            } else {
                localStorage.index_tmp_name = "Đà Nẵng";
                localStorage.index_tmp_checkin = "2016-01-20";
                localStorage.index_tmp_checkout = "2016-01-21";
                localStorage.index_tmp_typeofroom = "1 phòng (2 người lớn)";
            }
            //bien' nay` se~ duoc chuyen sang trang search-hotels
        } else {
            alert("Sorry, your browser does not support web storage...");
        }
    }

});

//  link to search-hotels
$(document).ready(function(){
    //ko duoc $('#left-nav-city').click(function(){
    $('#left-nav li').click(function(){
        //tren thuc te khi click vao` nhom' li thu' 2 cung co' 2 truong hop xay ra:
        //khi click vao nhom dia diem noi tieng => vao trang search-hotels
        //khi click vao cac ks thi` chay thang den' trang room-bookings
        //========
        //xac dinh thuoc tinh id, class: var att = $(this).attr('id');
        //do dag cai li chung chung cho #left-nav nen them dk if de xac dinh dag o nhom' nao`
        //alert($(this).find('.txt-name-location').text());
        //return false;
        var bcheck;
        if ($(this).attr('class') == "left-nav-city") {
            var $txt = $(this).find('.txt-name-location').text();

            if ($txt === 'HÀ NỘI') {
                // code bị lặp lại tại nút submit: đúng ra việc check được thực hiện tại trang search-hotels
                // (co' khac ve` text o? dia diem: TP HO CHI MINH)
                // luu bien' de ho tro tao ra cac options lien quan den dia diem noi bat tai trang search hotels
                localStorage.ddnoibat = '0';
                bcheck = 'true';
            } else if ($txt === 'ĐÀ NẴNG') {
                localStorage.ddnoibat = '1';
                bcheck = 'true';
            } else if ($txt === 'HỒ CHÍ MINH') {
                localStorage.ddnoibat = '2';
                bcheck = 'true';
            } else if ($txt === 'TẤT CẢ') {
                window.location = 'all-locations.html';
                return false;
            }
        } else {
        //alert('bcheck = false 1');
        bcheck = 'false';
        //http://api.jquery.com/parents/
        var $txt = $(this).parents("li").find('.txt-name-location').text();
        var local = $(this).parents('.nav-ddnoibat').find('.nav-title-loaiphong').text();
        }

        if(typeof(Storage) !== "undefined") {
            //cac bien' nay` se~ duoc chuyen sang trang search-hotels
            if (localStorage.index_tmp_name) {
                localStorage.index_tmp_name = $txt;
            } else {
                localStorage.index_tmp_name = "Đà Nẵng";
            }
            //3 bien sau: co' dinh
            localStorage.index_tmp_checkin = "";
            localStorage.index_tmp_checkout = "";
            localStorage.index_tmp_typeofroom = "1 phòng (2 người lớn)";
        } else {
            alert("Sorry, your browser does not support web storage...");
        }

        if (bcheck === 'true'){
            //alert('bcheck = true');
            //hoac window.open("search-hotels.html","_self");
            window.location = 'search-hotels.html';
            return false;
        } else {
            if (local === 'Địa điểm nổi tiếng' || $(this).text() === 'Tất cả ...') {
                window.location = 'search-hotels.html';
                return false;
            } else {
                //luu tru ten bien' khach san, nhu*ng ko co' dia chi => viec xac dinh Google se~ co the bi. co' dinh
                //alert('bcheck = false 2');
                localStorage.searchhotels_tmp_nameofhotel = $(this).text();
                window.location = 'room-bookings.html';
                return false;
            }
        }
    });

    $('#promotion figure').click(function(){
        var $txt = $(this).find('.txt-name-location').text();
        if(typeof(Storage) !== "undefined") {
            //cac bien' nay` se~ duoc chuyen sang trang search-hotels
            if (localStorage.index_tmp_name) {
                //chua chuyen chu~ hoa thanh chu~ thuong` (neu dung ham thi co phan biet Unicode)
                //C1: .css('text-transform','capitalize')
                //C2: http://www.w3schools.com/jsref/prop_style_texttransform.asp
                localStorage.index_tmp_name = $txt;
            } else {
                localStorage.index_tmp_name = "Đà Nẵng";
            }
            //3 bien sau: co' dinh
            localStorage.index_tmp_checkin = "";
            localStorage.index_tmp_checkout = "";
            localStorage.index_tmp_typeofroom = "1 phòng (2 người lớn)";
        } else {
            alert("Sorry, your browser does not support web storage...");
        }
        //hoac window.open("search-hotels.html","_self");
        window.location = 'search-hotels.html';
    });

});

$(document).ready(function(){
    $('#loaiphong select').change(function(){
        if ($(this).val() == "lựa chọn khác ..."){
            $('#loaiphong').fadeOut();
            $('#loaiphong-khac').fadeIn();
            $('#loaiphong-khac input[name=guest]').focus();
        }
    });
});

$(document).ready(function(){
    $(".login").on('click', function(){
        $("#signin").modal();
    });

    $(".signup").on('click', function(){
        $("#signin").modal("hide");
        $("#signup").modal();
        // $(".modal-backdrop").html($("#signup").html());
    });
    
    $("#scrolltop").on('click', function(event) {
       
        event.preventDefault();
        $('body').css('cursor', 'none');
        $('html, body').animate({
            scrollTop: 0
        }, 900, function(){
            $('body').css('cursor', 'default');
        });
    });
});



