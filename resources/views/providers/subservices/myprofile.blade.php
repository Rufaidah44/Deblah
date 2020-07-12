@extends('providers.servproviderpage')
@section('content2')


<script>
    var title = 0;
$(document).ready( function() {
    $("#ptitle").text(" المعلومات الشخصية لأصحاب القاعات");
});
</script>

<div class="m-10">
    <center>
        <table class="table table-borderless" style="width: 80%;">
            <tbody style="">
                <tr>
                    <td style="width: 30%;" class=" text-center">اسم المالك</td>
                    <td id="profiletd2" style="width: 70%;" class=" text-right">{{$userinfo->p_owner_name}}</td>
                </tr>
                <tr>
                    <td class="text-center "> اسم الوكيل 1</td>
                    <td class=" ">{{$userinfo->p_agent_name1}} </td>
                </tr>
                <tr>
                    <td class="text-center">اسم الوكيل 2</td>
                    <td class="">{{$userinfo->p_agent_name2}}</td>
                </tr>
                <tr>
                    <td class="text-center">البريد الالكتروني الرسمي</td>
                    <td class="profiletd2">{{$userinfo->p_email1}}</td>
                </tr>
                <tr>
                    <td class="text-center">البريدالالكتروني 2</td>
                    <td>{{$userinfo->p_email2}}</td>
                </tr>
                <tr>
                    <td class="text-center">رقم الهاتف</td>
                    <td>{{$userinfo->p_phone}}</td>
                </tr>
                <tr>
                    <td class="text-center">رقم الجوال</td>
                    <td>{{$userinfo->p_mobile1}}</td>
                </tr>
                <tr>
                    <td class="text-center">رقم الجوال 2</td>
                    <td>{{$userinfo->p_mobile2}}</td>
                </tr>
                <tr>
                    <td class="text-center">رقم السجل التجاري</td>
                    <td>{{$userinfo->p_commercal_record_no}}</td>
                </tr>
                <tr id="edit">
                    <td class="text-center">اسم البنك</td>
                    <td>{{$userinfo->p_bank_name}}</td>
                </tr>
                <tr>
                    <td class="text-center">رقم الايبان</td>
                    <td>{{$userinfo->p__bank_iban}}</td>
                </tr>
                <tr>
                    <td class="text-center">عدد سنوات الخدمة</td>
                    <td>{{$userinfo->experience_years}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="boxed-btn3">تغيير كلمة المرور</button>&nbsp;<button class="boxed-btn3"
                            onclick="document.getElementById('id01').style.display='block'">تعديل
                            البيانات</button></td>
                </tr>

            </tbody>
        </table>
    </center>

</div>


<div id="id01" class="w3-modal ">
    <div class="w3-modal-content">
        <div class="w3-container">
            <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
            <h3>تعديل المعلومات الشخصية</h3>
            @if ($userinfo->p_commercal_record_no = null || $userinfo->p__bank_iban = null)
            <div class="alert alert-danger" role="alert">
                الرجاء اكمال البيانات المطلوبة
            </div>
            @endif
            <small class="text-danger">{{ $errors->first('h_name') }}</small>
            <center>
                <form class="logmodal-content animate" action="{{url('/myProfile_edit')}}"
                    method="post" enctype='multipart/form-data' style="width:70%">
                    @csrf
                    <br><br>
                    <div class="clearfix">
                        <table class="table table-borderless" style="width: 80%;">
                            <tbody style="">
                                <tr>
                                    <td style="width: 30%;" class=" text-center">اسم المالك *</td>
                                    <td id="profiletd2" style="width: 70%;" class=" text-right">
                                        <input type="text" name="p_owner_name" id="p_owner_name"
                                            value="{{$userinfo->p_owner_name}}" required autofocus>
                                            @if ($errors->has('p_owner_name'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('p_owner_name') }}</strong>
                                            </span>
                                            @endif
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-center "> اسم الوكيل 1 *</td>
                                    <td class=" ">
                                        <input type="text" name="p_agent_name1" id="p_agent_name1"
                                            value="{{$userinfo->p_agent_name1}}" required>
                                            @if ($errors->has('p_agent_name1'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('p_agent_name1') }}</strong>
                                                </span>
                                            @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">اسم الوكيل 2</td>
                                    <td class="">
                                        <input type="text" name="p_agent_name2" id="p_agent_name2"
                                            value="{{$userinfo->p_agent_name2}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">البريد الالكتروني الرسمي *</td>
                                    <td class="profiletd2"><input type="text" name="p_email1" id="p_email1"
                                            value="{{$userinfo->p_email1}}" required>
                                            @if ($errors->has('p_email1'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('p_email1') }}</strong>
                                                </span>
                                            @endif
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-center">البريدالالكتروني 2</td>
                                    <td><input type="text" name="p_email2" id="p_email2"
                                            value="{{$userinfo->p_email2}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">رقم الهاتف</td>
                                    <td><input type="text" name="p_phone" id="p_phone" value="{{$userinfo->p_phone}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">رقم الجوال *</td>
                                    <td><input type="text" name="p_mobile1" id="p_mobile1"
                                            value="{{$userinfo->p_mobile1}}" required>
                                            @if ($errors->has('p_mobile1'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('p_mobile1') }}</strong>
                                                </span>
                                            @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">رقم الجوال 2</td>
                                    <td><input type="text" name="p_mobile2" id="p_mobile2"
                                            value="{{$userinfo->p_mobile2}}"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">رقم السجل التجاري *</td>
                                    <td><input type="text" name="p_commercal_record_no" id="p_commercal_record_no"
                                            value="{{$userinfo->p_commercal_record_no}}" required>
                                            @if ($errors->has('p_commercal_record_no'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('p_commercal_record_no') }}</strong>
                                                </span>
                                            @endif
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-center">اسم البنك *</td>
                                    <td><input type="text" name="p_bank_name" id="p_bank_name"
                                            value="{{$userinfo->p_bank_name}}" required>
                                            @if ($errors->has('p_bank_name'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('p_bank_name') }}</strong>
                                                </span>
                                            @endif
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-center">رقم الايبان *</td>
                                    <td><input type="text" name="p__bank_iban" id="p__bank_iban"
                                            value="{{$userinfo->p__bank_iban}} " required>
                                            @if ($errors->has('p__bank_iban'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('p__bank_iban') }}</strong>
                                                </span>
                                            @endif
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-center">عدد سنوات الخدمة *</td>
                                    <td><input type="text" name="experience_years" id="experience_years"
                                            value="{{$userinfo->experience_years}}" required>
                                            @if ($errors->has('experience_years'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('experience_years') }}</strong>
                                                </span>
                                            @endif
                                        </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="boxed-btn3">حفظ البيانات</button></td>
                                </tr>

                            </tbody>
                        </table>






                    </div>
                </form>
        </div>
    </div>
</div>







@endsection