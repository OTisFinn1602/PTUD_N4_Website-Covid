var tinh_arr = new Array("TP Hồ Chí Minh");
var s_a = new Array();
s_a[1]="Quận 1|Quận 2|Quận 3| Quận 4|Quận 5|Quận 6| Quận 7|Quận 8|Quận 9| Quận 10|Quận 11|Quận 12|TP Thủ Đức|Quận Gò Vấp|Quận Bình Thạnh|Quận Phú Nhuận|Quận Tân Bình|Quận Tân Phú|Quận Bình Tân|Huyện Nhà Bè|Huyện Hóc Môn|Huyện Bình Chánh|Huyện Củ Chi|Huyện Cần Giờ";

var s_b = new Array();
s_b[2,1]="Bến Nghé|Cầu Kho|Ông Lãnh|Bến Thành|Cô Giang|Đa Kao|Nguyễn Thái Bình|Phạm Ngũ Lão|Nguyễn Cư Trinh|Tân Định";
s_b[2,2]="An Khánh|Thảo Điền|Thủ Thiêm|An Lợi Đông|An Phú|Bình An|Bình Khánh|Bình Trưng Đông|Bình Trưng Tây|Thạnh Mỹ Lợi|Cát Lái";
s_b[2,3]="Phường 1|Phường 2|Phường 3|Phường 4|Phường 5|Phường 6| Phường 7| Phường 8|Phường 9|Phường 10| Phường 11|Phường 12|Phường 13|Phường 14";
s_b[2,4]="Phường 1|Phường 2|Phường 3|Phường 4|Phường 5|Phường 6| Phường 8|Phường 9|Phường 10| Phường 11|Phường 12|Phường 13|Phường 14|Phường 15|Phường 16|Phường 18";
s_b[2,5]="Phường 1|Phường 2|Phường 3|Phường 4|Phường 5|Phường 6| Phường 7|Phường 8|Phường 9|Phường 10| Phường 11|Phường 12|Phường 13|Phường 14|Phường 15";
s_b[2,6]="Phường 1|Phường 2|Phường 3|Phường 4|Phường 5|Phường 6| Phường 7|Phường 8|Phường 9|Phường 10| Phường 11|Phường 12|Phường 13|Phường 14"
s_b[2,7]="Bình Thuân|Phú Mỹ|Phú Thuận|Tân Hưng|Tân Kiểng|Tân Phong|Tân Phú|Tân Quý|Tân Thuận Đông|Tân Thuận Tây"
s_b[2,8]="Phường 1|Phường 2|Phường 3|Phường 4|Phường 5|Phường 6| Phường 7|Phường 8|Phường 9|Phường 10| Phường 11|Phường 12|Phường 13|Phường 14|Phường 15|Phường 16";
function print_tinh(tinh_id){
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var option_str = document.getElementById(tinh_id);
    option_str.length=0;
    option_str.options[0] = new Option('Tỉnh,Thành phố','');
    option_str.selectedIndex = 0;
    for (var i=0; i<tinh_arr.length; i++) {
        option_str.options[option_str.length] = new Option(tinh_arr[i],tinh_arr[i]);
    }
}

function print_quan(quan_id, quan_index){
    var option_str = document.getElementById(quan_id);
    option_str.length=0;
    option_str.options[0] = new Option('Quận,Huyện','');
    option_str.selectedIndex = 0;
    var quan_arr = s_a[quan_index].split("|");
    for (var i=0; i<quan_arr.length; i++) {
        option_str.options[option_str.length] = new Option(quan_arr[i],quan_arr[i]);
    }
}
//This function is incorrect, just to demonstrate, please help to correct this

function print_phuong(phuong_id, phuong_index){
    var option_str = document.getElementById(phuong_id);
    option_str.length=0;
    option_str.options[0] = new Option('Phường Xã','');
    option_str.selectedIndex = 0;
    var phuong_arr = s_b[phuong_index].split("|");
    for (var i=0; i<phuong_arr.length; i++) {
        option_str.options[option_str.length] = new Option(phuong_arr[i],phuong_arr[i]);
    }
}
