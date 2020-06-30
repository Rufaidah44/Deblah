@extends('layouts.app')

@section('content')
<div style="border-top: 5px solid #1a535c; width:100%">
  <div class="container w3-card">
    <div class="row justify-content-center">
      <div class="col-md-12 mt-3">
        @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
          <p>{{\Session::get('success')}}</p>
        </div>
        @endif

        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left mt-3" style="display:none" id="mySidebar">
          <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
          <a href="/myservices" class="w3-bar-item w3-button">خدماتي</a>
          <a href="/myProfile" class="w3-bar-item w3-button">الحجوزات</a>
          <a href="/myNotifications" class="w3-bar-item w3-button">تنبيهات</a>
          <a href="/myMessages" class="w3-bar-item w3-button">الرسائل</a>
          <a href="/myBookedServ" class="w3-bar-item w3-button">معلوماتي</a>
          <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">تسجيل الخروج</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>

        <div id="main">
          <div class="w3-teal mt-3" style="background-color: white !important">
            <button id="openNav" class="w3-button w3-teal w3-xxxlarge" style="background-color:#ff6b6b !important" onclick="w3_open()">&#9776;</button>
          </div>
          <div>
            <div class="w3-container" dir="rtl" style="text-align: right">
              <h2>الصفحة الخاصة بمقدمي الخدمات... </h2>
              <hr style="border-top: 3px solid #ff6b6b">
            </div>

            <div class="w3-container" dir="rtl" style="text-align: center">
              @yield("content2")

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection