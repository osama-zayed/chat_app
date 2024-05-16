@extends('layouts.app')

@section('content')
<div class="ms-3">
    <button type="button" class="navbutton active PersonalInformationButton">المعلومات الشخصية</button>
    <button type="button" class="navbutton OptionsButton">الخيارات</button>
    <button type="button" class="navbutton WritingMethodsButton">طرق الكتابة</button>
    <button type="button" class="navbutton InformationButton">المعلومات</button>
  </div>

  <div class="main-section commission p-2 h-50vh">
    <div class="PersonalInformationContent">
      الصفحة 1
    </div>
    <div class="OptionsContent">
      الصفحة 2
    </div>
    <div class="WritingMethodsContent ">
      الصفحة 3
    </div>
    <div class="InformationContent ">
      الصفحة 4
    </div>
  </div>
    @include('include.footer')
    <div class="d-flex mt-3 justify-content-end">
        <button class="rounded" style="border-radius: 20px">الغاء</button>
        <button class="rounded ml-2 ms-2" style="border-radius: 20px">حفظ</button>
    </div>
@endsection
