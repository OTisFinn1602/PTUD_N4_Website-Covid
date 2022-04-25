function ktten(){
            var ten=document.getElementById('inputName').value;
            var regten=/^([A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{0,6})|([A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{0,6}\s[A-Z]{1}[a-z]{0,6})$/;
            if(regten.test(ten))
            {
                document.getElementById('ert').innerHTML="(*)";
            }
            else{
                document.getElementById('ert').innerHTML="(*) Nhập tên sai vui lòng nhập lại";
            }
        }
function ktsdt(){
            var tsdt=document.getElementById('inputSDT').value;
            var regsdt=/^0[1-9]{1}[0-9]{8}$/;
            if(regsdt.test(tsdt))
            {
                document.getElementById('ersdt').innerHTML="(*)";
            }
            else{
                document.getElementById('ersdt').innerHTML="(*) Nhập số điện thoại sai vui lòng nhập lại";
            }
        }
function ktemail(){
            var temail=document.getElementById('inputEmail').value;
            var regemail=/^\w+@[a-zA-Z]{3,}\.com$/;
            if(regemail.test(temail))
            {
                document.getElementById('eremail').innerHTML="(*)";
            }
            else{
                document.getElementById('eremail').innerHTML="(*) Nhập email sai vui lòng nhập lại";
            }
        }
        $(document).ready(function(){
            $("#inputDate").blur(function(){
                var kh=new Date($(this).val());
                var ngnk= new Date();
                var timecl=ngnk.getTime()-kh.getTime();
                var ng=Math.round(timecl/(60*60*24));
                if(ng>7)
               {
                $("#ern").html("(*)");
                return true;
               }
            else{
                $("#ern").html("(*) Nhập ngày sai vui lòng nhập lại")
                return false;
        }
    })
})
