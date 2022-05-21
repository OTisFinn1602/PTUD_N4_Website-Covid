function ktten(){
            var ten=document.getElementById('inputName').value;
            var regten="";
            if(regten=ten)
            {
                document.getElementById('ert').innerHTML="(*)";
            }
            else{
                document.getElementById('ert').innerHTML="(*)Vui lòng nhập họ và tên";
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
                document.getElementById('ersdt').innerHTML="(*) Vui lòng nhập lại số điện thoại";
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
                document.getElementById('erc').innerHTML="(*) CCCD nhập sai hoặc không được để trống";
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
                document.getElementById('erb').innerHTML="(*) BHYT sai hoặc không được để trống";
            }
        }
		function ktemail(){
            var temail=document.getElementById('inputEmail').value;
            var regemail=/^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
            if(regemail.test(temail))
            {
                document.getElementById('ere').innerHTML="(*)";
				
				
            }
            else{
                document.getElementById('ere').innerHTML="(*) Email sai hoặc không được để trống";
            }
        }
		function ktgt(){
            var tgt=document.getElementById('selectGender').value;
            if(tgt=="")
            {
				document.getElementById('ergt').innerHTML="(*) Vui lòng chọn giới tính";
				
            }
            else{
                 document.getElementById('ergt').innerHTML="(*)";
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
                $("#ern").html("(*) Ngày sinh không hợp lệ")
                return false;
        }
    })
})
