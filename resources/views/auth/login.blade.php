@extends('layouts.app')

@section('content')

<div style="border-top: 5px solid #1a535c; width:100%">
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
                        <input type="email" id="email" name="email" placeholder="البريد الالكتروني"
                            class="form-control inputbge @error('email') is-invalid @enderror" title="البريد الالكتروني"
                            required autofocus autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                        <input type="password" id="password" name="password" placeholder="كلمة المرور"
                            class="form-control inputbgp @error('password') is-invalid @enderror" title="كلمة المرور"
                            required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <button type="submit">تسجيل الدخول</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            نسيت كلمة المرور؟؟
                        </a>
                        @endif

                    </div>
                </form>
            </div>


            <div id="News" class="tabcontent" dir="rtl">
            <div>
                <center> <h4 style="color: #1a535c">هل أنت مقدم خدمة؟؟ <a href="/servprovidersignup">سجل هنا</a></h4><center>
            </div>
                <form class="logmodal-content animate" action="{{url('customersignup')}}" method="POST">
                    @csrf
                    <div class="logcontainer ">

                        <input type="email" id="email" name="email" placeholder="البريد الالكتروني"
                            class="form-control inputbge @error('email') is-invalid @enderror" title="البريد الالكتروني" required
                            autofocus autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input type="text" id="name" name="name" class="form-control inputbgu @error('name') is-invalid @enderror"
                            placeholder="الاسم الكامل" title="الاسم الكامل" required>
                        @error('name')
                        <span class="form-control invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input type="text" id="mobile" name="mobile"
                            class="form-control inputbgn @error('mobile') is-invalid @enderror"
                            placeholder="رقم الجوال 00966500000000" title="00966500000000" required>
                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                        <input type="password" id="password" name="password" class=" form-control inputbgp" placeholder="كلمة المرور"
                            pattern="{6,}" title="يجب أن تكون 6 خانات  "
                            required>

                        <input type="password" id="password-confirm" name="password_confirmation" placeholder="اعادة كلمة المرور"
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
</div>


@endsection