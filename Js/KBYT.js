function ktten(){
            var ten=document.getElementById('inputName').value;
            var regten=/^([A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{0,6})|([A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{1,6}\s[A-Z]{1}[a-z]{0,6}\s[A-Z]{1}[a-z]{0,6})$/;
            if(regten.test(ten))
            {
                document.getElementById('ert').innerHTML="(*)";
            }
            else{
                document.getElementById('ert').innerHTML="(*)Tên Nhập Sai";
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
                document.getElementById('ersdt').innerHTML="(*) Số điện thoại sai";
            }
        }
function ktcccd(){
            var tcccd=document.getElementById('inputCCCD').value;
            var regcccd=/^0[0-9]{11}$/;
            if(regcccd.test(tcccd))
            {
                document.getElementById('erc').innerHTML="(*)";
            }
            else{
                document.getElementById('erc').innerHTML="(*) Số CCCD sai";
            }
        }
		function ktbhyt(){
            var tbhyt=document.getElementById('inputSTYT').value;
            var regbhyt=/^[A-Z]{2}[0-9]{13}$/;
            if(regbhyt.test(tbhyt))
            {
                document.getElementById('erb').innerHTML="(*)";
            }
            else{
                document.getElementById('erb').innerHTML="(*) Số BHYT sai";
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
                $("#ern").html("(*) Phải trước ngày hiện tại")
                return false;
        }
    })
})
