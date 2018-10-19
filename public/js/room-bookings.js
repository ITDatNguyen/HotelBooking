/**
 * Created by Group6 on 02/01/2016.
 */

//http://www.w3schools.com/jquery/css_scrolltop.asp
// http://stackoverflow.com/questions/28452235/make-a-nav-bar-stick-to-the-top-when-scrolling-with-css
// phai them 1 class de chinh? lai margin left (neu' div nam` ben phai')
$(window).scroll(function () {
//  if you hard code, then use console, .log to determine when you want the nav bar to stick.
//  mo phan kiem tra phan tu? se~ thay' tab nay`', khi man hinh bi thu nho => scroll vi tri ko chinh xac
//  console.log($(window).scrollTop());
//  alert($(window).scrollTop());
    var $target_1 = $('#right-aboutHotel');
    if ($(window).scrollTop() > 0) {
        $target_1.addClass('navbar-fixed-top');
        $target_1.addClass('right-aboutHotel-margin-left');
    }
    if ($(window).scrollTop() < 65) {
        $target_1.removeClass('navbar-fixed-top');
        $target_1.removeClass('right-aboutHotel-margin-left');
    }
//  1088, dung` chuot keo' chinh' xac hon scroll giua~.
    if ($(window).scrollTop() > 1100) {
        $target_1.removeClass('navbar-fixed-top');
        $target_1.removeClass('right-aboutHotel-margin-left');

    }
//  tai trang chinh thi ho van~ thay' duoc nut' book-now khi vi tri dang o? footer
});
//##########################
$(document).ready(function(){
    $('#slt-rooms').change(function(){
//          hoac co the dung vong lap duyet tu` Room6 ve` Room2
        var amount = $(this).val();
//phai dao nguoc amount lon' nhat' xay ra truoc' roi` thoat' dk return false, cac
        if (amount >= 1) {
            fadeInRoom(1);
        } else {
            resetRoom('#room-row1');
        }
        if (amount >= 2) {
            fadeInRoom(2);
        } else {
            resetRoom('#room-row2');
        }
        if (amount >= 3) {
            fadeInRoom(3);
        } else {
            resetRoom('#room-row3');
        }
        if (amount >= 4) {
            fadeInRoom(4);
        } else {
            resetRoom('#room-row4');
        }
        if (amount >= 5) {
            fadeInRoom(5);
        } else {
            resetRoom('#room-row5');
        }
        if (amount == 6) {
            fadeInRoom(6);
        } else {
            resetRoom('#room-row6');
        }
        if (amount == '6+') {
//              do cai' cac cai' else o? tren => room 2 den' 6 deu refresh
//                alert('Để đặt số lượng lớn, vui lòng để lại số điện thoại của bạn. ' +
//                'Chúng tôi sẽ gọi cho bạn trong thời gian sớm nhất.');
//                alert: khi viet xuog dong thi` tu* dong them +
            $('#extra-room').fadeIn();
            //$('#book-now').val("YÊU CẦU GỌI LẠI");
            $('#book-now').fadeOut(1);
            $('#mytable-th').fadeOut(1);
            $('#table-result').fadeOut(1);
//              change noi dung cua nut' book-now
        } else {
//          tinh tien phong
//              table-result-1, table-result-2
//              Tổng số 1 Phòng, 1 Khách & 1 Đêm
            var iRoom = amount;
            var iGuest = 0;
            for (var i = 1; i <= amount; i++){
                iGuest = iGuest + parseInt($('#room-row' + i).find('span').text());
            }
//          session 15.4.3 Date	Object
            function GetDays(){
                var check_in = new Date(document.getElementById("date1").value);
                var check_out = new Date(document.getElementById("date2").value);

                if ((isNaN(check_in) == true || isNaN(check_out) == true)) {
                    //alert('Nhận phòng & Trả phòng không hợp lệ');
                    //ko can show tooltip, da cai day du tai nut DAT PHONG
                    return 1;
                } else if (check_out < check_in) {
                    //xay ra sau cung` (ko nhap chung voi If thu' nhat')
                    $('.validation-advice').fadeIn();
                    return 1;
                } else {
                    return parseInt((check_out - check_in) / (24 * 3600 * 1000));
                }
            }
//                chi thay doi so' cua cac ID chu' ko thay doi toan` bo (tranh' bi xoa' ID), ko the dung` rieng cho nut minus, plus
//                dung` val() ko dung khi thay doi so' luong room' (chi dung' cho nut' minus, plus)
//                $('#table-result-1').html("Tổng số " + iRoom + " Phòng, " + iGuest + " Khách & " + GetDays() + " Đêm");
            $('#table-result-11').html(iRoom);
            $('#table-result-12').html(iGuest);
            $('#table-result-13').html(GetDays());
            //ho tro khi click DAT PHONG
            $('#table-result-21').html(iRoom);
            $('#table-result-22').html(iGuest);

            var iTotal = 0;
            for (var j = 1; j <= amount; j++){
//                  http://stackoverflow.com/questions/16970237/jquery-replace-g-do-not-work-for-me-but-others
                var replaceDot = $('#room-row' + j).find('.row-total').text().replace(/\./g, "");
                iTotal = iTotal + parseInt(replaceDot);
            }

            iTotal *= GetDays();

//          https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/toLocaleString
            $('#table-result-2').html(iTotal.toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
            $('#tien-thanhtoan').html(iTotal.toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
        }
    });

//        phai tinh tu` 1 vi khi chon 6+ thi` room1 se~ bi an?
    var fadeInRoom = function(target){
//      var fadeIn_loop_from1to = function(target){
//      ko can dung vong lap do dk >= do co' xay ra o moi dk if
        $('#mytable-th').fadeIn();
        $('#table-result').fadeIn();
        $('#room-row' + target).fadeIn();
        var replaceDot = $('#room-row' + target).find('.row-total').text().replace(/\./g, "");
        $('#room-row' + target).find('.row-total').html(parseInt(replaceDot).toLocaleString('vn-VN'));
        //
        $('#extra-room').fadeOut(10);
        $('#book-now').val("ĐẶT PHÒNG");
    };
//        refresh = reset
    var resetRoom = function(iRoom) {
//          cho fadeOut nhanh thi` moi ko thay' qua trinh` reset'
        $(iRoom).fadeOut(10);
        // return = 1 sau khi an? xong
        $(iRoom).find('span').html(1);
        $(iRoom).find('.minus').removeClass('img-allowed');
        $(iRoom).find('.minus').addClass('img-not-allowed');
        $(iRoom).find('.plus').removeClass('img-not-allowed');
        $(iRoom).find('.plus').addClass('img-allowed');
    };
});

var onclick_guest = function() {
    $(document).on("click", '.minus', function() {
        var guest = parseInt($(this).parent().find('span').text());
        var guestOutput = parseInt($('#table-result-12').text());
        var pass_val = function(object){
//                ko cai this truc tiep o day
            object.parent().find('span').html(guest - 1);
            $('#table-result-12').html(guestOutput - 1);
            $('#table-result-22').html(guestOutput - 1);

        };
        if (guest == 1) {
            return false;
        } else if (guest == 2){
            pass_val($(this));
            $(this).removeClass('img-allowed');
            $(this).addClass('img-not-allowed');
        } else {
            pass_val($(this));
            $(this).parent().find('.plus').removeClass('img-not-allowed');
            $(this).parent().find('.plus').addClass('img-allowed');
        }
    });

    $(document).on("click", '.plus', function() {
        var guest = parseInt($(this).parent().find('span').text());
        var guestOutput = parseInt($('#table-result-12').text());
        var pass_val = function(object){
//                ko cai this truc tiep o day
            object.parent().find('span').html(guest + 1);
            $('#table-result-12').html(guestOutput + 1);
            $('#table-result-22').html(guestOutput + 1);
        };
        if (guest == 1) {
            pass_val($(this));
            $(this).parent().find('.minus').removeClass('img-not-allowed');
            $(this).parent().find('.minus').addClass('img-allowed');
        } else if (guest == 2) {
            pass_val($(this));
            $(this).removeClass('img-allowed');
            $(this).addClass('img-not-allowed');
        } else {
            return false;
        }
    });
};

$(document).ready(onclick_guest);

$(document).ready(function(){
    $('.validation-advice').click(function(){
        $(this).fadeOut();
    });
});

$(document).ready(function(){
    $('input[type=date]').change(function(){
//            se xay ra khi gia tri dien day du? dd/mm/yyyy
//            alert('changed');
        function GetDays2(){
            var check_in = new Date(document.getElementById("date1").value);
            var check_out = new Date(document.getElementById("date2").value);

            if ((isNaN(check_in) == true || isNaN(check_out) == true)) {
                return 1;
            } else if (check_out < check_in) {
                $('.validation-advice').fadeIn();
                return 1;
            } else {
                //neu lan truoc do' co fadeIn thi bay h se fadeOut
                $('.validation-advice').fadeOut();
                return parseInt((check_out - check_in) / (24 * 3600 * 1000));
            }
        }
        //nhom nay` co viet o su* kien change Room
        $('#table-result-13').html(GetDays2());

        var amount = $('#slt-rooms').val();
        var iTotal = 0;

        for (var j = 1; j <= amount; j++){
//              http://stackoverflow.com/questions/16970237/jquery-replace-g-do-not-work-for-me-but-others
            var replaceDot = $('#room-row' + j).find('.row-total').text().replace(/\./g, "");
            iTotal = iTotal + parseInt(replaceDot);
        }

        iTotal *= GetDays2();

//          https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/toLocaleString
        $('#table-result-2').html(iTotal.toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
        $('#tien-thanhtoan').html(iTotal.toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
    });
});

$(document).ready(function(){
//  group 1
    $('#book-now').click(function(){
//  co cai o* su* kien change Room (khac nhau o return + dkien else)
//        if ($(this).val() == 'YÊU CẦU GỌI LẠI'){
//            if ($('#extraroom-tooltip input').val() == ''){
//                $('#extraroom-tooltip').addClass('extraroom-phone');
//                //$('.extraroom-phone').fadeOut(4000); ko the dung fadeOut (bi an? luon Input)
//                var timer;
//                var delay = 3000;
//                timer = setTimeout(function() {
//                    $('#extraroom-tooltip')
//                        //neu viet gop: thi dau ; dat o thuoc tinh cuoi cung`
//                        .removeClass('extraroom-phone')
//                }, delay);
//                return false;
//            } else {
//            }
//        }

        var check_in = new Date(document.getElementById("date1").value);
        var check_out = new Date(document.getElementById("date2").value);

        if ((isNaN(check_in) == true && isNaN(check_out) == true)) {
            //alert('Nhận phòng trả phòng không hợp lệ');
            $('.validation-advice').fadeIn();
            //tu dong an?
            $('.validation-advice').fadeOut(7000);
            return false;
        } else if (isNaN(check_in)){
            $('#tooltip1').fadeIn();
            $('#tooltip1').fadeOut(4000);
            return false;
        } else if (isNaN(check_out)) {
            $('#tooltip2').fadeIn();
            $('#tooltip2').fadeOut(4000);
            return false;
        } else if (check_out < check_in){
            //xay ra sau cung` (ko nhap chung voi If thu' nhat')
            $('.validation-advice').fadeIn();
            $('.validation-advice').fadeIn(7000)
            return false;
        } else {
            //return parseInt((check_out - check_in) / (24 * 3600 * 1000));
            $('#right-aboutHotel-1').fadeOut();
            $('#right-aboutHotel-2').fadeIn();
            //update checkin, checkout: http://www.w3schools.com/jsref/jsref_obj_date.asp
            $('#right-aboutHotel-2-checkin').html(check_in.toLocaleDateString());
            $('#right-aboutHotel-2-checkout').html(check_out.toLocaleDateString());
            // lam` mo` div, se fadeOut tai #book-now-2 click
            $('.tmp-left-aboutHotel').fadeIn();
        }
    });

    var changeRoom = function(){

        $('#bt-thanhtoan').fadeIn(10);
        $('#verify-code').fadeOut(10);
        $('#right-aboutHotel-2').fadeOut(10);
        $('.tmp-left-aboutHotel').fadeOut();
        $('#thanhtoan input[name=info-name]').val('');
        $('#thanhtoan input[name=info-phone]').val('');
        $('#thanhtoan input[name=info-email]').val('');
        $('#verify-code input[name=enter-code]').val('');
        //
        $('#right-aboutHotel-1').fadeIn();
    };

    $('#book-now-2').click(function(){
        changeRoom();
    });
//  group 2
    $('#bt-thanhtoan1').click(function(){
        var $name = $('#thanhtoan input[name=info-name]').val();
        //viet ten chuan thi dung` dau' _ duoi'
        var $phone = $('#thanhtoan input[name=info-phone]').val();
        if (($name !== '') && ($phone !== '')){
            // kiem tra so' dien thoai: http://www.w3resource.com/javascript/form/javascript-validation-download.php
            // thay vi dung pattern: pattern="[0-9]{6,}" title="Tối thiểu 6 số" tai input
            var numbers = /^[0-9]+$/;
                if($phone.match(numbers)){
                    //alert('Your Registration number has accepted....');
                } else {
                    alert('Số điện thoại ko hợp lệ !');
                    $('#verify-code input[name=enter-code]').focus();
                    return false;
                }
            //
            $('#bt-thanhtoan').fadeOut();
            $('#verify-code').fadeIn();
            //neu dung` type = button thi binh thuong nhu*ng ko check duoc required
            //neu ko co' return thi trang giong nhu* bi. refresh
            $('#verify-code input[name=enter-code]').focus();
            return false;
        } else {

            //da~ cai them thuoc tinh' required'
        }
    });

    // verify-code
    $('#verify-code input[type=submit]').click(function(){
        //alert($code);
        var $code = $('#verify-code input[name=enter-code]').val();
        if ($code !== '') {
            //alert('XÁC NHẬN THÀNH CÔNG !');
            $('.ios-overlay').fadeIn(10);

            var timer;
            var delay = 3000;
            timer = setTimeout(function() {
                changeRoom();
            }, delay);
            ////de? cho tu* dong return = false <=> refresh trang
            return false;
        } else {
            //da~ cai them thuoc tinh' required'
        }
    });

    $('#verify-code-resendcode').click(function(){
        alert('Đã gửi lại mã');
    });

    $('#verify-code-cancel').click(function(){
        $('#bt-thanhtoan').fadeIn();
        $('#verify-code').fadeOut();
        $('#verify-code input[name=enter-code]').val('');
    });
});

$(document).ready(function(){
// http://www.w3schools.com/jquery/jquery_slide.asp
// https://api.jquery.com/mouseleave/
// ban dau dung` hover
    $('#paywith').click(function() {
        $('#paywith div').slideDown();
    });
    $('#paywith div').mouseleave(function() {
        $(this).fadeOut(100);
    });

    $('#paywith td').click(function(){
        alert('< Chưa tạo trang thanh toán bằng thẻ />');
    });
});
