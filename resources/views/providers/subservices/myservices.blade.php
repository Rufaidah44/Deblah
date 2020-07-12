@extends('providers.servproviderpage')
@section('content2')


<script>
    var title = 0;
$(document).ready( function() {
    $("#ptitle").text("خدماتي ...");
});
</script>

<div class="m-3">
    <button class="boxed-btn3" onclick="document.getElementById('id01').style.display='block'"
        class="w3-button w3-black"> إضافة قاعة جديدة</button>
</div>


<div class="popular_places_area" style="padding-top: 10px; margin-top:50px">
    <div class="container" style="margin-top: 20px">
        <div>
            <hr style=" background-color: #ffd479; height: 3px;">
            <center>
                <h3
                    style="margin-top: -40px; background-color: #F7fff7; width: fit-content !important ; padding: 10px 10px; ">
                    خدماتي السابقة</h3><br>
            </center>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/1.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html">
                            <h3>California</h3>
                        </a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/2.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html">
                            <h3>Korola Megna</h3>
                        </a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/3.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html">
                            <h3>London</h3>
                        </a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">كل القصور</a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>



    <div id="id01" class="w3-modal ">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <h3>إضافة خدمة جديدة</h3>
                <small class="text-danger">{{ $errors->first('h_name') }}</small>
                <center>
                    <form class="logmodal-content animate" action="{{url('addnewhall')}}" method="post" enctype='multipart/form-data'
                        style="width:70%">
                        @csrf
                        <div class="logcontainer">
                            <input type="text" id="h_name" name="h_name" placeholder="اسم القاعة"
                                class="form-control " title="اسم القاعة"  autofocus class="form-group{{ $errors->has('h_name') ? ' has-error' : '' }}">


                            <div style="text-align: right;">
                                <br>
                                <label for="h_type">نوع القاعة:</label>&nbsp;&nbsp;
                                <input type="radio" name="h_type" id="h_type" value="قاعة" required>&nbsp;
                                <label for="h_type">قاعة</label>&nbsp;&nbsp;
                                <input type="radio" name="h_type" id="h_type" value="قاعة فندق">&nbsp;
                                <label for="h_type">قاعة فندق</label>&nbsp;&nbsp;
                                <input type="radio" name="h_type" id="h_type" value="استراحة">&nbsp;
                                <label for="h_type">استراحة</label><br>&nbsp;&nbsp;
                            </div>

                            <div style="text-align: right;">
                            <input type="text" id="h_age" name="h_age" placeholder="عمر القاعة"
                                class="form-control " style="width:50%" title="عمر القاعة" required ><br><br>
                            </div>

                            <div style="text-align: right; float: right !important;">
                                <label for="h_city">المدينة&nbsp;</label>
                                <select id="h_city" name="h_city" style="width:50%">
                                    <option value="جدة" style="width:100px">&nbsp;&nbsp;جدة</option>
                                    <option value="مكة" m>مكة</option>
                                    <option value="المدينة" m>المدينة</option>
                                </select>
                            </div>

                            <input type="text" id="h_address" name="h_address" placeholder="العنوان"
                                class="form-control  " title="العنوان" required autofocus>

                            <input type="text" id="h_location" name="h_location" placeholder="احداثيات خرائط جوجل"
                                class="form-control  " title="احداثيات خرائط جوجل" required autofocus>

                            <input type="text" id="h_national_address" name="h_national_address" placeholder="العنوان الوطني"
                                class="form-control  " title="العنوان الوطني" required autofocus>

                            <div style="text-align: right" dir="rtl">
                                <label for="">القاعة تشمل على:</label><br>
                                <input type="checkbox" id="female_hold" name="female_hold"
                                    value="1">&nbsp;<label for="female_hold">قاعة نساء</label>
                                <input type="checkbox" id="male_hold" name="male_hold" value="1 ">&nbsp;<label
                                    for="male_hold">قاعة رجال</label>
                            </div>
                            <br>
                            <div style="text-align: right" dir="rtl">
                                <input type="number" id="female_no" name="female_no" placeholder="عدد أفراد قاعة النساء"
                                class="inputnumber" title=" عدد أفراد قاعة النساء" style="width: 40%;padding: 12px 20px !important;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                box-sizing: border-box;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;"
                                min="1" required>
                                <input type="number" id="male_no" name="male_no" placeholder="عدد أفراد قاعة الرجال"
                                class="inputnumber" title=" عدد أفراد قاعة الرجال" style="width:40% ; padding: 12px 20px;margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                box-sizing: border-box;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;"
                                min="1" required>
                            </div><br>

                            <div style="text-align: right" dir="rtl">
                                <table class="addserv table table-borderless ">
                                    <tbody>
                                        <tr>
                                            <label for="">القاعة تشمل على:</label><br>
                                        </tr>
                                        <tr style="border: none !important;">
                                            <td><input type="checkbox" id="female_hosting_food"
                                                    name="female_hosting_food" value="1">&nbsp;<label
                                                    for="female_hosting_food">ضيافة نساء</label></td>
                                            <td><input type="checkbox" id="male_hosting_food" name="male_hosting_food"
                                                    value="1">&nbsp;<label for="male_hosting_food">ضيافة
                                                    رجال</label></td>
                                            <td><input type="checkbox" id="female_denner" name="female_denner"
                                                    value="1">&nbsp;<label for="female_denner">عشاء نساء</label>
                                            </td>
                                        </tr>
                                        <tr style="border: none !important;">
                                            <td><input type="checkbox" id="male_denner" name="male_denner"
                                                    value="1">&nbsp;<label for="male_denner">عشاء رجال</label>
                                            </td>
                                            <td><input type="checkbox" id="female_waiters" name="female_waiters"
                                                    value="1">&nbsp;<label for="female_waiters">مضيفات
                                                    نساء</label></td>
                                            <td><input type="checkbox" id="male_waiters" name="male_waiters"
                                                    value="1">&nbsp;<label for="male_waiters">مضيفين
                                                    رجال</label>
                                            </td>
                                        </tr>
                                        <tr style="border: none !important;">
                                            <td><input type="checkbox" id="female_cleaners" name="female_cleaners"
                                                    value="1">&nbsp;<label for="female_cleaners">عاملات
                                                    نظافة</label></td>
                                            <td><input type="checkbox" id="male_cleaners" name="male_cleaners"
                                                    value="1">&nbsp;<label for="male_cleaners">عمال
                                                    نظافة</label></td>
                                            <td><input type="checkbox" id="female_abayah_serve" name="female_abayah_serve"
                                                    value="1">&nbsp;<label for="female_abayah_serve">خدمة
                                                    عبايات</label></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="kosha" name="kosha"
                                                    value="1">&nbsp;<label for="kosha">تنسيق
                                                    الكوشة</label></td>
                                            <td><input type="checkbox" id="female_decoration" name="female_decoration"
                                                    value="1">&nbsp;<label for="female_decoration">تنسيق القاعة
                                                    الطاولات</label></td>
                                            <td><input type="checkbox" id="speakers" name="speakers"
                                                    value="1">&nbsp;<label for="speakers">سماعات</label></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="vip_room" name="vip_room"
                                                    value="1">&nbsp;<label for="vip_room">غرفة ضيوف
                                                    VIP</label></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align: right;">
                                <br><label for="female_services_room">عدد غرف الخدمة للعروس:</label>
                                <input type="radio" name="female_services_room" id="female_services_room_no"
                                    value="غرفة واحدة" required>
                                <label for="female_services_room_no">غرفة واحدة</label>
                                <input type="radio" name="female_services_room" id="female_services_room_no2"
                                    value="غرفتين" class="">
                                <label for="female_services_room_no2">غرفتين</label>
                                <input type="radio" name="female_services_room" id="female_services_room_no3"
                                    value="ثلاث غرف أو أكثر" class="">
                                <label for="female_services_room_no3">ثلاث غرف</label>
                                <input type="radio" name="female_services_room" id="female_services_room_no4"
                                    value="أكثر من ذلك" class="">
                                <label for="female_services_room_no4">أكثر من ذلك </label><br>


                                <br>
                                <label for="hall_photos" style="font-size: 1em">صور القاعة: </label><br><label>اختر جميع الصور مرة واحدة</label>
                                <input type="file" id="hall_photos" name="hall_photos[]" placeholder="اختر الصور" multiple
                                    title="اختر الصور" accept="image/*" required>
                                    <div id="preview"></div>
                            </div>
                            <hr>
                            <div>
                                <h3>التواريخ المتاحة:</h3>
                                <p>اختر جميع التواريخ المتاحة لديك</p>
                                <input type="text" id="h_dates" name="h_dates" required>
                                <script type="text/javascript">
                                    $('#h_dates').multiDatesPicker({
	                                    minDate: 0, // today
                                        maxDate: 360,
                                        dateFormat: "yy-mm-dd" ,
                                        
                                        });
                                </script>
                            </div>
                            <br><br>
                            <div class="clearfix">
                                <button type="submit" class="signupbtn"> اضافة القاعة</button>
                            </div>
                        </div>



            </div>
        </div>
        </form>
        </center>
    </div>
</div>
</div>


<script>
    function previewImages() {

var $preview = $('#preview').empty();
if (this.files) $.each(this.files, readAndPreview);

function readAndPreview(i, file) {
  
  if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
    return alert(file.name +" is not an image");
  } // else...
  
  var reader = new FileReader();

  $(reader).on("load", function() {
    $preview.append($("<img/>", {src:this.result, height:100}));
  });

  reader.readAsDataURL(file);
  
}

}

$('#hall_photos').on("change", previewImages);
</script>
@endsection