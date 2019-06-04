$(document).ready(function(){

    // phần của modalBox đăng nhập
    $("#dangnhap").click(function(){
        $(".loginBox").fadeIn();
    });

    $(".fa-times").click(function(){
        $(".loginBox").fadeOut();
    });

    // phần của SlideShow
    var imgItem = $('#slideShow img').length;
    var imgPos = 1;
    $('#slideShow img').hide();
    $('#slideShow img:first').show();
    $('.pagination li:first').css({"color":"yellow"});

    $('.pagination li').click(function()
    {
        var paginationPos = $(this).index() + 1;
        $('#slideShow img').hide();
        $('#slideShow img:nth-child('+paginationPos+')').fadeIn();
        $('.pagination li').css({"color":"orange"});
        $('.pagination li:nth-child('+paginationPos+')').css({"color":"yellow"});        
    });

    $('#next').click(function(){
        if(imgPos >= imgItem)
        imgPos = 1;
    else
        imgPos++;
    $('#slideShow img').hide();
    $('#slideShow img:nth-child('+ imgPos +')').fadeIn(); 
    $('.pagination li').css({"color":"orange"});
    $('.pagination li:nth-child('+imgPos+')').css({"color":"yellow"});
    });

    $('#prev').click(function(){
        if(imgPos <= 1)
            imgPos = imgItem;
        else
            imgPos--;
        $('#slideShow img').hide();
        $('#slideShow img:nth-child('+ imgPos +')').fadeIn(); 
        $('.pagination li').css({"color":"orange"});
        $('.pagination li:nth-child('+imgPos+')').css({"color":"yellow"});
    });

    setInterval(function(){
        $("#next").click();
    },3000);

    // phần hover NÚT MUA HÀNG
    $(".sell-btn a").hover(function(){
        $('.sell-btn a').css("background","green");
        }, function(){
        $('.sell-btn a').css("background","#95819d");
    });
});


// thanh toán giỏ hàng
function thanhtoangiohang()
{
    var count = document.giohang.tongtien.value;
    if(count == 'Tổng: 0 VNĐ')
    {
        alert('Bạn chưa mua sản phẩm nào.');
        return false;
    }
    return true;
}

// kiểm tra thông tin thanh toán
function ktraThanhToan()
{
    // kiểm tra tên người dùng
    var name = document.thanhtoan.name.value;
    if(name == "")
    {
        document.thanhtoan.name.focus();
        document.getElementById("name").style.color = "red";
        document.getElementById("name").innerHTML = "* Vui lòng tên người dùng.";
        return false;
    }
    else
    {
        document.getElementById("name").innerHTML = "";
    }

    // kiểm tra số điện thoại
    var telnumber = document.thanhtoan.phone.value;
    var filler = /^[0-9]{11}$/;
    if(filler.test(telnumber) == false)
    {
        document.thanhtoan.phone.focus();
        document.getElementById("phone").style.color = "red";
        document.getElementById("phone").innerHTML = "* Số điện thoại không hợp lệ!";
        return false;
    }
    else
    {
        document.getElementById("phone").innerHTML = "";
    }
    
    // kiểm tra địa chỉ 
    var address = document.thanhtoan.address.value;
    if(address == "")
    {
        document.thanhtoan.address.focus();
        document.getElementById("address").style.color = "red";
        document.getElementById("address").innerHTML = "* Vui lòng nhập địa chỉ của bạn!";
        return false;
    }
    else
    {
        document.getElementById("address").innerHTML = "";
    }

    // kiểm tra email 
    var email = document.thanhtoan.email.value;
    var filler = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(filler.test(email) == false)
    {        
        document.thanhtoan.email.focus();
        document.getElementById("email").style.color = "red";
        document.getElementById("email").innerHTML = "* Email điền không hợp lệ!";
        return false;
    }
    else
    {
        document.getElementById("email").innerHTML = "";
    }
    return true;
}

// kiểm tra thông tin đăng ký
function ktraDangky()
{
    // kiểm tra tên người dùng
    var name = document.dangky.name.value;
    if(name == "")
    {
        document.dangky.name.focus();
        document.getElementById("name").style.color = "red";
        document.getElementById("name").innerHTML = "* Vui lòng tên người dùng.";
        return false;
    }
    else
    {
        document.getElementById("name").innerHTML = "";
    }

    // kiểm tra số điện thoại người dùng
    var telnumber = document.dangky.phone.value;
    var filler = /^[0-9]{11}$/;
    if(filler.test(telnumber) == false)
    {
        document.dangky.phone.focus();
        document.getElementById("phone").style.color = "red";
        document.getElementById("phone").innerHTML = "* Số điện thoại không hợp lệ!";
        return false;
    }
    else
    {
        document.getElementById("phone").innerHTML = "";
    }
    
    // kiểm tra số chứng minh nhân dân
    var cmnd = document.dangky.cmnd.value;
    var filler= /^[0-9]{10}$/;
    if(filler.test(cmnd)==false)
    {
        document.dangky.cmnd.focus();
        document.getElementById("cmnd").style.color = "red";
        document.getElementById("cmnd").innerHTML = "* Chứng minh thư không hợp lệ.";
        return false;
    }
    else
    {
        document.getElementById("cmnd").innerHTML = "";
    }
    
    // kiểm tra địa chỉ người dùng
    var address = document.dangky.address.value;
    if(address == "")
    {
        document.dangky.address.focus();
        document.getElementById("address").style.color = "red";
        document.getElementById("address").innerHTML = "* Vui lòng nhập địa chỉ của bạn!";
        return false;
    }
    else
    {
        document.getElementById("address").innerHTML = "";
    }

    // kiểm tra email người dùng
    var email = document.dangky.email.value;
    var filler = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(filler.test(email) == false)
    {        
        document.dangky.email.focus();
        document.getElementById("email").style.color = "red";
        document.getElementById("email").innerHTML = "* Email điền không hợp lệ!";
        return false;
    }
    else
    {
        document.getElementById("email").innerHTML = "";
    }

    // kiểm tra tên đăng nhập
    var user = document.dangky.username.value;
    if(user == "")
    {
        document.dangky.username.focus();
        document.getElementById("user").style.color = "red";
        document.getElementById("user").innerHTML = "* Vui lòng nhập tài khoản.";
        return false;
    }
    else
    {
        document.getElementById("user").innerHTML = "";
    }

    // kiểm tra mật khẩu
    var pass1 = document.dangky.password1.value;
    if(pass1.length<8)
    {
        document.dangky.password1.focus();
        document.getElementById("pass1").style.color = "red";
        document.getElementById("pass1").innerHTML = "* Mật khẩu phải có ít nhất 8 kí tự.";
        return false;
    }
    else
    {
        document.getElementById("pass1").innerHTML = "";
    }

    // kiểm tra xem mật khẩu có khớp không
    var pass2 = document.dangky.password2.value;
    if(pass2.length<8 || pass2!=pass1)
    {
        document.dangky.password2.focus();
        document.getElementById("pass2").style.color = "red";
        document.getElementById("pass2").innerHTML = "* Mật khẩu không trùng khớp.";
        return false;
    }
    else
    {
        document.getElementById("pass2").innerHTML = "";
    }
    return true;
}