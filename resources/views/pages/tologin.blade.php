@extends('layouts.app')

@section('content')



<hr style=" color:#1a535c; height:5px"> 

<div class="modal-dialog modal-dialog-centered" role="document">
    
    <div class="modal-content">
        <div style="position: absolute !important; width:100% ; ">
            <button style="" class="tablink" onclick="openPage('Home', this, '#ffd479')" id="defaultOpen">تسجيل
                الدخول</button>
            <button class="tablink" onclick="openPage('News', this, '#ffd479')">تسجيل جديد</button>
        </div>
        <div id="Home" class="tabcontent" dir="rtl">
            <form class="logmodal-content animate" action="{{ route('login') }}" method="post">
                @csrf
                <div class="logcontainer">
                    <input type="email" placeholder="البريد الالكتروني" name="email" required class="form-control inputbge @error('email') is-invalid @enderror"
                        >
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <input type="password" placeholder="كلمة المرور" name="password" required class="form-control inputbgp @error('password') is-invalid @enderror">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <button type="submit">تسجيل الدخول</button>
                    <a href="#">نسيت كلمة المرور؟؟</a>
                </div>
            </form>
        </div>
        <div id="News" class="tabcontent" dir="rtl">
            <form class="logmodal-content animate" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="logcontainer ">

                    <input type="text" id="email" name="email" placeholder="البريد الالكتروني"
                        class="inputbge @error('email') is-invalid @enderror"
                        title="البريد الالكتروني" required
                        autofocus autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="text" id="name" name="name"
                        class="inputbgu @error('name') is-invalid @enderror" placeholder="الاسم الكامل"
                        title="الاسم الكامل" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="text" id="mobile" name="mobile"
                        class="inputbgn @error('mobile') is-invalid @enderror"
                        placeholder="رقم الجوال 00966500000000" title="00966500000000" required>
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <input type="password" id="password" name="password" class="inputbgp"
                        placeholder="كلمة المرور" pattern="{8,}"
                        title="يجب أن يكون 8 خانات تحتوي على أرقام و حروف صغيرة و كبيرة و علامات " required>

                    <input type="password" id="re-password" name="re-password" placeholder="اعادة كلمة المرور"
                        class="inputbgp" title="اعادة كلمة المرور" required>

                    <p>عند تسجيلك فأنت توافق على <a href="#" style="color:dodgerblue">الشروط و الأحكام</a>.</p>

                    <div class="clearfix">
                        <button type="submit" class="signupbtn">تسجيل</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


@endsection