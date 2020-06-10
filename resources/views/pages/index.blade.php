@extends('layouts.app')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel" >
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" >
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-left " style="padding-left: 120px;">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container" dir="rtl">
                    <div class="row align-items-right">
                        <div class="col-xl-12 col-md-12" >
                            <div class="slider_text text-center" style="width: 50%;" >
                                <h3>قاعات الزفاف</h3>
                                <p>احجز قاعة زفافك بأرخص الأسعار</p>
                                <a href="#" class="boxed-btn3">عرض القاعات</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container" dir="rtl">
                    <div class="row align-items-right">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center" style="width: 60%;">
                                <h3>تصوير المناسبات</h3>
                                <p>وثّق أجمل لحظات العمر بأجمل العروض</p>
                                <a href="#" class="boxed-btn3">عرض المصورين</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_4 overlay">
                <div class="container" dir="rtl">
                    <div class="row align-items-right">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center" style="width: 70%;">
                                <h3>الضيافة و التوزيعات</h3>
                                <p>أكرم ضيوفك و أبهرهم بأفخم التوزيعات</p>
                                <a href="#" class="boxed-btn3">عرض الكل</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider_area_end -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area" dir="rtl">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>ابحث عن الخدمة المناسبة </h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#" style="text-align: right !important">
                            <div class="input_field" style="font-family: 'Tajawal', sans-serif;">
                                <input id="datepicker" placeholder="التاريخ">
                            </div>
                            <div class="input_field"  >
                                <select>
                                    <option data-display="الخدمة" > </option>
                                    <option value="1">قصور</option>
                                    <option value="2">خدمات التصوير </option>
                                    <option value="3">الضيافة و التوزيعات</option>
                                    <option value="4">أخرى </option>
                                </select>
                            </div>
                            <div class="input_field"  >
                                <select>
                                    <option data-display="المدينة" > </option>
                                    <option value="1">جدة</option>
                                    <option value="2">مكة </option>
                                    <option value="3">المدينة المنورة</option>
                                    <option value="4">كل المدن </option>
                                </select>
                            </div>
                            
                            
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >ابحث</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
    
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area" dir="rtl">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>الخدمات الأعلى تقييماً</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="travel_destination.html">
                     <div class="single_destination">
                        <div class="thumb">
                            <img src="img/destination/hall1.jpg" alt="">
                        </div>
                        <div class="content" style="text-align: right;">
                            <p class="d-flex align-items-right">قاعة نسايم ليل</p>
                            <p class="aa">تم حجزها 5 مرات</p>  
                        </div>
                     </div>
                    </a>
                </div>

                    <div class="col-lg-4 col-md-6">
                    <a href="travel_destination.html">
                     <div class="single_destination">
                        <div class="thumb">
                            <img src="img/destination/hall2.jpg" alt="">
                        </div>
                        <div class="content" style="text-align: right;">
                            <p class="d-flex align-items-right">قاعة نرسيان</p>
                            <p class="aa">تم حجزها 2 مرات</p>  
                        </div>
                     </div>
                    </a>
                </div>

                    <div class="col-lg-4 col-md-6">
                    <a href="travel_destination.html">
                     <div class="single_destination">
                        <div class="thumb">
                            <img src="img/destination/hall3.jpg" alt="">
                        </div>
                        <div class="content" style="text-align: right;">
                            <p class="d-flex align-items-right">قاعة الدار البيضاء الف ليلة و ليلة</p>
                            <p class="aa">تم حجزها 5 مرات</p>  
                        </div>
                     </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay" dir="rtl">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-2"> </div>
                        <div class="col-lg-8">
                            <div class="newsletter_text" style="text-align: center;">
                                <h4>هل أنت صاحب خدمة ؟؟ 
                                    هل لديك قاعة ؟؟ هل لديك عروض تصوير ؟؟ هل تقدم ضيافة مميزة ؟؟ هل لديك أي خدمة للعرسان 
                                </h4>
                                <p>لا تفوت الفرصة و اعرض خدماتك معنا</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="newsletter_btn">
                                <button class="boxed-btn4 " type="submit" >اعرض خدماتك</button>
                            </div>
                        </div>
                               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newletter_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>اخترنا لك </h3>
                    </div>
                </div>
            </div>
            <div>
            <hr style=" background-color: #ffd479; height: 3px;">
            <center>
            <h3 style="margin-top: -40px; background-color: #F7fff7; width: fit-content !important ; padding: 10px 10px; ">القصور</h3><br></center>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>California</h3></a>
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
                            <a href="destination_details.html"><h3>Korola Megna</h3></a>
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
                            <a href="destination_details.html"><h3>London</h3></a>
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
            <br><br><br>
            <div>
                <hr style=" background-color: #ffd479; height: 3px;">
                <center>
                <h3 style="margin-top: -40px; background-color: #F7fff7; width: fit-content; padding: 10px 10px;">خدمات االتصوير </h3><br></center>
                </div>
      
           <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/4.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Miami Beach</h3></a>
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
                            <img src="img/place/5.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>California</h3></a>
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
                            <img src="img/place/6.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Saintmartine Iceland</h3></a>
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
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="#">كل الخدمات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="travel_variation_area" dir="rtl">
        <div class="container" >
            <div class="row">
                <div class="col-lg-3 col-md-6" style="text-align: center;"><center>
                     <h3 style="border-bottom: 3px solid #ff6b6b; padding-bottom: 5px; width: fit-content;">للعرسان</h3>
                     <br></center>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_travel text-center">
                          <img src="img/svg_icon/bride.png" alt="" class="rounded" width="250" height="200">   
                </div>
             </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/savemony.png" alt="" width="90" height="90">
                        </div>
                        <h3>دبلة توفر لك فلوسك و مصاريفك </h3>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/meditation.png" alt="" width="90" height="90">
                        </div>
                        <h3>دبلة تريحك من اللفلفة و الدوران </h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/offers.png" alt="" width="90" height="90">
                        </div>
                        <h3>دبلة تقدم لك عروض حصرية و مميزة</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/interface.png" alt="" width="90" height="90"> 
                        </div>
                        <h3>دبلة تساعدك على تخطيط و ترتيب مهامك</h3>
                    </div>
                </div>
             </div>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6" style="text-align: center;"><center>
                    <h3 style="border-bottom: 3px solid #ff6b6b; padding-bottom: 5px; width: fit-content;">لمقدمي الخدمات</h3>
                    <br></center>
               </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_travel text-center">
                            <img src="img/svg_icon/servicesProvider.jpg" alt="" class="rounded" width="250" height="200" >
                            <h4></h4>
                     </div>
                 </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/hands-and-gestures.png" alt="" width="90" height="90">
                        </div>
                        <h3>دبلة تعرض لك خدماتك للباحثين عنها </h3>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/business.png" alt="" width="90" height="90">
                        </div>
                        <h3>دبلة تسوق لك خدماتك بأساليب جذابة و محترفة </h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/file.png" alt="" width="90" height="90">
                        </div>
                        <h3>دبلة تنظم لك و ترتب كل معاملاتك </h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/stats.png" alt="" width="90" height="90">
                        </div>
                        <h3>دبلة تقدم لك احصائيات عشان تعرف عملائك أكثر</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
           <center><h3>آراء العملاء</h3></center>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb" dir="rtl">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>خدمة ممتازة و رائعة و ننصح بالتعامل معاهم</p>
                                        <div class="testmonial_author">
                                            <h3>  محمد عبد الله</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>مصداقية في السعر و الخدمات المقدمة ، ا متعاونين جدا دبلة خصوصاً الأخ عبد الرحمن و حذيفة </p>
                                        <div class="testmonial_author">
                                            <h3> مها أحمد</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Jerry Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->


    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>آخر مواضيع المدونة</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/1.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/2.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/3.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection