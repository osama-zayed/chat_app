@extends('layouts.app')

@section('content')
    <div class="main-section p-2">
        <marquee behavior="scroll" direction="right"> للاشتراك في باقات التاج الفضي =1200 -التاج الذهبي</marquee>

        <div class="row chat-section">
            <div class="col-md-9 chating">
                {{-- @for ($i = 0; $i < 100; $i++) --}}

                <div class="d-flex mt-1 align-items-top p-3" style="background-color: #665e5e">
                    <img src="{{ asset('assets/image/Resources/profileIcon.GIF') }}" alt="">
                    <div class="message flex-grow-1 ms-3" style="color: #fff;">
                        <h5 class="title">علي </h5>
                        <p class="content">
                         وانت كيف حالك
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-1 align-items-top p-3" style="background-color: #665e5e">
                    <img src="{{ asset('assets/image/Resources/profileIcon.GIF') }}" alt="">
                    <div class="message flex-grow-1 ms-3" style="color: #fff;">
                        <h5 class="title">علي </h5>
                        <p class="content">
                          الحمدلله
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-1 align-items-top p-3" style="background-color: #b1a8a8">
                    <img src="{{ asset('assets/image/Resources/joinIcon.GIF') }}" alt="">
                    <div class="message flex-grow-1 ms-3" style="color: #fff;">
                        <h5 class="title">اسامه </h5>
                        <p class="content">
                          كيف الحال
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-1 align-items-top p-3" style="background-color: #665e5e">
                    <img src="{{ asset('assets/image/Resources/profileIcon.GIF') }}" alt="">
                    <div class="message flex-grow-1 ms-3" style="color: #fff;">
                        <h5 class="title">علي </h5>
                        <p class="content">
                            وعليكم السلام
                        </p>
                    </div>
                </div>
                <div class="d-flex mt-1 align-items-top p-3" style="background-color: #b1a8a8">
                    <img src="{{ asset('assets/image/Resources/joinIcon.GIF') }}" alt="">
                    <div class="message flex-grow-1 ms-3" style="color: #fff;">
                        <h5 class="title">اسامه </h5>
                        <p class="content">
                            السلام عليكم
                        </p>
                    </div>
                </div>
                {{-- @endfor --}}
            </div>
            <div class="col-md-3">

                <div class="ml-5">
                    <button class="user-button active">المستخدمين</button>
                    <button class="room-button">غرف</button>
                </div>
                <div class="">
                    <div class="All-users-content">
                        <div class=" d-flex justify-content-around">
                            <div class="winCl-img-wrap-wrap">
                                <button id="SendImgRoom" type="button" class="winCl-img-btn">
                                    <img src="{{ asset('assets/image/Resources/userInfoIcon.GIF') }}"> </button>
                                </button>
                            </div>
                            <div class="winCl-img-wrap-wrap">
                                <button id="SendImgRoom" type="button" class="winCl-img-btn">
                                    <img src="{{ asset('assets/image/Resources/kickUserIcon.GIF') }}"> </button>
                                </button>
                            </div>
                            <div class="winCl-img-wrap-wrap">
                                <button id="SendImgRoom" type="button" class="winCl-img-btn">
                                    <img src="{{ asset('assets/image/Resources/whisperIcon.GIF') }}"> </button>
                                </button>
                            </div>
                            <div class="winCl-img-wrap-wrap">
                                <button id="SendImgRoom" type="button" class="winCl-img-btn">
                                    <img src="{{ asset('assets/image/Resources/flagUserIcon.GIF') }}"> </button>
                                </button>
                            </div>
                            <div class="winCl-img-wrap-wrap">
                                <button id="SendImgRoom" type="button" class="winCl-img-btn">
                                    <img src="{{ asset('assets/image/Resources/muteUserIcon.GIF') }}"> </button>
                                </button>
                            </div>
                        </div>
                        <form action="" class="p-2">
                            <input type="checkbox" name="showAlluser" id="showAlluser"
                                style="margin:5px 5px 5px 10px;font-size: x-large; width: 20px; height: 20px; color: #f7f4f4">
                            <label for="showAlluser" style="color: #fff">عرض المستخدمين في كل
                                الغرف</label>
                            <input type="text" class="mt-3">
                        </form>
                        <div class="showAlluse m-2">
                            <h6 class="p-2">الاسم المستعار</h6>
                            <div class="card ">
                                <div class="d-flex align-items-top p-1" style="background-color: #665e5e">
                                    <img src="{{ asset('assets/image/Resources/joinIcon.GIF') }}" alt=""

                                        style="width: 30px;height: 30px;" class="m-0">
                                    <div class="message  ms-3" style="color: #fff;">
                                        <p class="content user-name">اسامه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms-content ">
                        <div class="m-1" style="">
                            <button type="button" class="w-100 p-1" style="">
                                ادخال</button>
                        </div>
                        <div class="showAllrooms m-1">
                            <div class="card ">
                                <table class="text-center">
                                    <thead>
                                        <th
                                            style="background-color: #575757 ;width: 80%; color: white ;ou: #141414 solid 1px">
                                            الاسم</th>
                                        <th style="background-color: #5a5959 ;width: 20%;">
                                            <img src="{{ asset('assets/image/Resources/usersIcon.gif') }}" alt="">
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr style="background-color: #d6cfcf ;" class="p-1 m-2">
                                            <td>
                                               شات العرب
                                            </td>
                                            <td>12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @include("include.sendMesseges")
    </div>
    @include('include.footer')
@endsection
