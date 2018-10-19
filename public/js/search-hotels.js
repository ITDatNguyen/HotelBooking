/**
 * Created by Group6 on 03/01/2016.
 */
var refreshPage= function(){
    $('#page-1').fadeOut();
    $('#page-1').fadeIn();

    $('#left-center-result').fadeOut();
    $('#left-center-result').fadeIn();
};
// các input & button của nav
$(document).ready(function(){
    //nhom' #search-locations
    $('#search-locations').hover(function() {
        //var inputval = $('#autocomplete').val();
        if ($('#autocomplete').val() !== ''){
            $('#search-locations img').fadeIn();
        }
    }, function() {
        $('#search-locations img').fadeOut();
    });
//su* kien change (ko duoc): http://stackoverflow.com/questions/12797700/jquery-detect-change-in-input-field
    $('#autocomplete').on('input', function() {
        // alert('autocomplete changed!');
        if ($(this).val().length !== 0){
            $('#search-locations img').fadeIn();
        } else {
            $('#search-locations img').fadeOut();
        }
    });
    $('#search-locations img').click(function(){
        $('#search-locations input').val('');
        $('#search-locations input').focus();
    });
    //nhom' #loaiphong
    $('#loaiphong select').change(function(){
        if ($(this).val() == "lựa chọn khác ..."){
            $('#loaiphong').fadeOut();
            $('#loaiphong-khac').fadeIn();
            $('#loaiphong-khac input[name=guest]').focus();
        }
    });
    //nhom' button[type=submit]
    <!--button lien quan den' cac' code modal da~ khai bao' nen khi click thi` co' dau hieu. refresh page => them return false-->
    $("button[type=submit]").click(function(){
        var get_location = function(){
            $('.name-of-location').text($('#autocomplete').val());
        };
        var check_in = new Date(document.getElementById("s-datePicker1").value);
        var check_out = new Date(document.getElementById("s-datePicker2").value);
        if ((isNaN(check_in) == false && isNaN(check_out) == false)) {
            if (check_in > check_out) {
                alert("Ngày nhận phòng & trả phòng ko hợp lệ !");
                //return false se~ xay tra truoc dk required cua input co' id= autocomplete'
                // => dat. trong ham` If de ko anh huong den' dk required
                return false;
            } else {
                get_location();
                refreshPage();
                return false;
            }
        } else if (isNaN(check_in) || isNaN(check_out)) {
            get_location();
            refreshPage();
            return false;
        }
    });
});

var main = function() {
//    them su* kien nay` de biet duoc dang load thong tin hoac dung` progress
//    phai cai dat truc tiep' tai tung su* kien de ho tro su* kien click vao li'
//    $('#center input').click(function(){
//        refreshPage();
//    });
//    voi dk cac input phai dung dk change chu' ko phai click'
    var boolean;
    //ko the kiem tra tai li chua' checkbox'
    $( "#left-center ul" ).click(function( event ) {

        var target = $( event.target );
        // set boolean = 'true' cho nhieu truong hop
        boolean = 'true';

        if ( target.is( "li" ) ) {
            //alert('click to li');
            //if ($(this).find('input[type=checkbox]').is(':checked')) {
            if (target.find('input[type=checkbox]').is(':checked')) {
                //alert('li 1');
                target.find('input').prop("checked", false).trigger("change");
                boolean = 'false';
                return false;
            } else {
                //alert('li 2');
                target.find('input').prop("checked", true).trigger("change");
                boolean = 'false';
            }
        } else if ( target.is( "span" ) ){
            //alert('click to span');
            if (target.parent().find('input[type=radio]').is(':checked')) {
                //alert('span 1');
                target.find('input[type=radio]').prop("checked", false).trigger("change");
                boolean = 'false';
                return false;
            } else {
                //alert('span 2');
                target.parent().find('input[type=radio]').prop("checked", true).trigger("change");
                boolean = 'false';
            }
        } else {
            //alert('click to radio or checkbox, Thêm ...');
            //them dk kiem tra all checkbox = empty sau khi trigger xong tai tu*ng` nhom' checkbox' + delay
            target.trigger("change");
            boolean = 'false';
            //return false;
        }
    });

    $('input[name=dd-noibat]').change(function() {
    // se bi refresh 2 lan neu click truc tiep' vao day' (disable input thi ko hop ly)
    // => phai them 1 bien de kiem tra la` duoc kich' hoat tu` li, vi` li bao phu luon input
    // neu click truc tiep' vao input thi co the bi tinh den 2 lan do bi bao phu boi? li
    if (boolean === 'true'){
//      cho show lai neu' da~ bi. fadeOut
        $('#opts-ddnoitieng').fadeIn();
        var toAdd = $("input[name=dd-noibat]:checked").val();
        $('#opts-ddnoitieng').html(
            '<a href="#">' +
            '<div class="options-x">' + '&times;' + '</div>' + toAdd +
            '</a>');

        add_HoverClick();
        refreshPage();
    }
    });

    // 1 nut
    //$("#range-price").change(function() {
    //    $('#opts-price').fadeIn();
    //    var toAdd = (parseInt($(this).val())).toLocaleString('vn-VN', { style: 'currency', currency: 'VND' });
    //    $('#opts-price').html(
    //        '<a href="#">' +
    //        '<div class="options-x">' + '&times;' + '</div>' + toAdd +
    //        '</a>');
    //
    //    add_HoverClick();
    //});

    // 2 nut http://jqueryui.com/slider/#range
    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 168600,
            max: 25952800,
            values: [ 168600, 25952800 ],
            slide: function( event, ui ) {
            //stop: function( event, ui ) {
                // ko co' parseInt
                var gia1 = ((ui.values[ 0 ]).toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
                var gia2 = ((ui.values[ 1 ]).toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
                var gia = 0;
                $( "#amount-1" ).text(gia1);
                $( "#amount-2" ).text(gia2);

                $('#opts-price').fadeIn();

                if ((ui.values[ 0 ]) == (ui.values[ 1 ])){
                    gia = (gia1);
                } else {
                    gia = ("> " + gia1 + " - < " + gia2);
                }
                $('#opts-price').html(
                    '<a href="#">' +
                    '<div class="options-x">' + '&times;' + '</div>' + gia +
                    '</a>');

                add_HoverClick();
                //khi keo' nhieu thi` bi. nhay? nhieu => chua hop ly' (them delay)
                //http://www.tutorialspoint.com/jqueryui/jqueryui_slider.htm
                //thay the' thuoc tinh slide thanh stop & tach' rieng
                //refreshPage();
            }
        });
        //ket hop 2 su* kien cung luc thi moi hop ly'
        $( "#slider-range" ).slider({
            range: true,
            //min: 168600,
            //max: 25952800,
            //values: [ 168600, 25952800 ],
            //slide: function( event, ui ) {
            stop: function( event, ui ) {
                //...
                refreshPage();
            }
        });

//      ban dau
        $( "#amount-1" ).text(($( "#slider-range" ).slider( "values", 0 )).toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
        $( "#amount-2" ).text(($( "#slider-range" ).slider( "values", 1 )).toLocaleString('vn-VN', { style: 'currency', currency: 'VND' }));
    });

    $('input[name=status]').change(function() {
        refreshPage();
    });

    $('input[name=khoangcach]').change(function() {
    if (boolean === 'true'){
        $('#opts-km').fadeIn();
        var toAdd = $("input[name=khoangcach]:checked").val();
        if (toAdd == "Bất kỳ"){
            $('#opts-km').fadeOut();
        } else {
            $('#opts-km').html(
                '<a href="#">' +
                '<div class="options-x">' + '&times;' + '</div>' + toAdd +
                '</a>');

            add_HoverClick();
        }
        refreshPage();
    }
    });

    $('input[name=hang-khachsang]').change(function() {
    if (boolean === 'true'){
        $('#opts-hangks').fadeIn();
        var toAdd = $("input[name=hang-khachsang]:checked").val();
        var star = '<span class="glyphicon glyphicon-star" style="color: rgb(255,192,0); font-size: 10px">'+'</span>';

        if (toAdd == "*****"){
            toAdd = star + star + star + star + star;
        } else if (toAdd == "****") {
            toAdd = star + star + star + star;
        } else if (toAdd == "***") {
            toAdd = star + star + star;
        } else if (toAdd == "**") {
            toAdd = star + star;
        } else {
//                      neu ko an? thi dung` su* kien check click lan` 2 de? bo? input radio + ko can input bat ky` nay`
            $('#opts-hangks').fadeOut();
        }

        $('#opts-hangks').html(
            '<a href="#">' +
            '<div class="options-x">' + '&times;' + '</div>' + toAdd +
            '</a>');

//      $('#opts-hangks').css('backgroundColor','#ffc000');
        add_HoverClick();
        refreshPage();
    }
    });

    $('#loai input[type=checkbox]').change(function() {
    if (boolean === 'true'){
        $('#opts-loaiks').fadeIn();
        //toAdd = array  http://stackoverflow.com/questions/11945802/how-to-get-multiple-checkbox-value-using-jquery
        var toAdd = $('#loai input[type=checkbox]:checked').map(function () {
            return " " + this.value;
        }).get();
        $('#opts-loaiks').html(
            '<a href="#">' +
            '<div class="options-x">' + '&times;' + '</div>' + toAdd +
            '</a>');

        add_HoverClick();

        refreshPage();

        if (toAdd.length == 0){
            //alert('if' + toAdd.length);
            // ko co delay thi ko the an? (bi choi~ voi' 1 thanh phan nao do' dag chay fia sau)
            var timer;
            var delay = 500;
            timer = setTimeout(function() {
                $('#opts-loaiks').fadeOut();
            }, delay);
        //return false;
        }
    }
    });

    $('#tiennghi input[type=checkbox]').change(function() {
    if (boolean === 'true'){
        $('#opts-tiennghi').fadeIn();
        var toAdd = $('#tiennghi input[type=checkbox]:checked').map(function () {
            return " " + this.value;
        }).get();
        $('#opts-tiennghi').html(
            '<a href="#">' +
            '<div class="options-x">' + '&times;' + '</div>' + toAdd +
            '</a>');

        add_HoverClick();

        refreshPage();

        if (toAdd.length == 0){
            //alert('if' + toAdd.length);
            // ko co delay thi ko the an? (bi choi~ voi' 1 thanh phan nao do' dag chay fia sau)
            var timer;
            var delay = 500;
            timer = setTimeout(function() {
                $('#opts-tiennghi').fadeOut();
            }, delay);
            //return false;
        }
    }
    });

};

var add_HoverClick = function() {
//                    su* kien hover & click duoc ap dung cho tat ca cac tuy` chon (co' cai` lan dau tien khi load page)
    $('.options a').hover(
        function(){
            $(this).find('div').fadeIn();
        },
        function(){
            $(this).find('div').fadeOut();
        }
    );
    $('.options').click(function(){
//                        se~ fadeIn lai, khi add html
        $(this).fadeOut();

    });
};

$(document).ready(main);

//nhóm Lựa chọn của bạn:
$(document).ready(function(){
    $('.options a').hover(
        function(){
//  http://stackoverflow.com/questions/306583/this-selector-and-children
            $(this).find('div').fadeIn();
        },
        function(){
            $(this).find('div').fadeOut();
        }
    );
    $('.options').click(function(){
        $(this).fadeOut();
        refreshPage();
    });

});

// nhóm SẮP XẾP THEO
$(document).ready(function(){
    $('#sort a').click(function(){
        $('#sort a').css('border-bottom','none');
        $(this).css('textDecoration','none');
//                        http://stackoverflow.com/questions/447197/how-to-define-multiple-css-attributes-in-jquery
        $(this).css({
            'border-bottom':'2px solid rgb(220,30,40)'
        });
//                        refreshPage();, chi refresh page (ko phai ket qua)
        $('#page-1').fadeOut();
        $('#page-1').fadeIn();
    });

    $('#sort-price').click(function(){
//                        http://stackoverflow.com/questions/12665107/how-to-get-class-value-of-a-span
        var spanClass = $('#sort-price').find('span').attr('class');
        if (spanClass == 'glyphicon glyphicon-menu-up'){
            $('#sort-price span')
                .removeClass('glyphicon glyphicon-menu-up')
                .addClass('glyphicon glyphicon-menu-down');
        } else {
            $('#sort-price span')
                .removeClass('glyphicon glyphicon-menu-down')
                .addClass('glyphicon glyphicon-menu-up');
        }

    });
});
// nhóm WOWSLIDER
$(document).ready(function(){
//  chua the loai bo the? a ben slideshow bo bot the a de khoi nham
//    $('.ws_images').click(function(){
    $('.ws_images').click(function(){
    // riêng Google map vẫn chưa cập nhật được
    //    neu xay ra loi thi thoat trinh duyet
    //    alert('click');
        if(typeof(Storage) !== "undefined") {
            //luu tru~ bien' cho trang room-bookings (khi load trang nay` se~ thay') http://www.w3schools.com/html/html5_webstorage.asp
            //get_name_of_location();
            //dung` ham thi phai khai bao' them bien' de? ho tro $(this)
            if (localStorage.index_tmp_name) {
                //1 so' localStorage giong trang homepage: de? ho tro ghi de`
                localStorage.index_tmp_name = $('#autocomplete').val();
                localStorage.searchhotels_tmp_nameofhotel = $(this).parent().find('.name-of-hotel').text();
                localStorage.searchhotels_tmp_addofhotel = $(this).parent().find('.address-of-hotel').text();
                localStorage.searchhotels_tmp_addofhotel_2 = $(this).parent().find('.address-of-hotel-sub').text() + ' Đà Nẵng';
                //save Date (checkin, checkout)
                //viec khai bao' trung id o? cac file co' bi. anh huong? cai` trung id thi` ko chay. duoc ham` nay`
                var check_in = new Date(document.getElementById("s-datePicker1").value);
                var check_out = new Date(document.getElementById("s-datePicker2").value);
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
                    localStorage.searchhotels_tmp_checkin = check_in_convert;
                    localStorage.searchhotels_tmp_checkout = check_out_convert;
                } else {
                    localStorage.searchhotels_tmp_checkin = "2016-01-20";
                    localStorage.searchhotels_tmp_checkout = "2016-01-21";
                }
            } else {
                localStorage.searchhotels_tmp_name = "Đà Nẵng";
                //localStorage.searchhotels_tmp_nameofhotel = $(this).find('.name-of-hotel').text();
                //localStorage.searchhotels_tmp_addofhotel = $(this).find('.address-of-hotel').text();
                localStorage.searchhotels_tmp_checkin = "2016-01-20";
                localStorage.searchhotels_tmp_checkout = "2016-01-21";
            }
            //bien' nay` se~ duoc chuyen sang trang search-hotels
        } else {
            alert("Sorry, your browser does not support web storage...");
        }
        //hoac window.open("search-hotels.html","_self");
        //window.location = 'room-bookings.html';
        //return false;
    });

    //function get_name_of_location() {
    //}
});

// nhóm BS Pagination (code thuc te' se link den' tung` page rieng biet)
$(document).ready(function(){
    $("#pagi-1").click(function(){
        // parents co' them s neu xac dinh selector cha cu. the
        // xoa' sach. cac li co' chua' class = active & chi add cho cai' dang click
        $(this).parents("ul").find("li").removeClass('active');
        $(this).parent().addClass('active');
        //
        $('#page-1').fadeIn();
        $('#page-2').fadeOut();
    });
    $("#pagi-2").click(function(){
        $(this).parents("ul").find("li").removeClass('active');
        $(this).parent().addClass('active');
        $('#page-1').fadeOut();
        $('#page-2').fadeIn();
    });
});





