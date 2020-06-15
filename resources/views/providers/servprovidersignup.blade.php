@extends('layouts.app')

@section('content')
<div style="border-top: 5px solid #1a535c; width:100%">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div style="position: absolute !important; width:100% ; ">
            <button style="" class="tablink" onclick="openPage('Home', this, '#ffd479')" id="defaultOpen"></button>
        </div>

        <div id="Home" class="tabcontent" dir="rtl">
            <center><h3 style="color: white">تسجيل جديد لمقدمي الخدمات</h3><center>
                @if (count($errors) > 0)
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li style="color: red">{{$error}}</li>                            
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (\Session::has('success'))
                <div>
                <p>{{\Session::get('success')}}</p>
                </div>
                @endif

            <form class="logmodal-content animate" action="{{url('servprovidersegester')}}" method="POST">
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

                    <div style="text-align: right">
                        <br><label for="servtype" style="text-align: right">نوع الخدمة المقدمة:</label><br>
                    </div>
                    <div style="text-align: right; width:90%; color: #949393">
                        <input type="radio" name="servtype" id="servtype" value="قاعات زفاف" required > قاعات زفاف<br>
                        <input type="radio" name="servtype"  id="servtype" value="ضيافة و توزيعات" class=""> تصوير مناسبات<br>
                        <input type="radio" name="servtype" id="servtype" value="تصوير مناسبات" class=""> ضيافة و توزيعات<br>
                        <input type="radio" name="servtype" id="servtype" value="أخرى" class=""> أخرى<br><br>
                    </div>
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