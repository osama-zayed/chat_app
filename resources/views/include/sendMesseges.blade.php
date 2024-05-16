<form class="row add-message" action="/sendMesseges" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-9 d-flex flex-row bd-highlight mb-3 justify-content-center">
        <input type="text" class="w-100" name="message">
        <div class="d-flex flex-column bd-highlight mb-3 ms-3 justify-content-center">
            <div class="winCl-img-wrap-wrap">
                <button id="SendImgRoom" type="button" class="winCl-img-btn">
                    س1
                </button>
            </div>
            <div class="winCl-img-wrap-wrap">
                <button type="button" class="winCl-img-btn">
                    <img src="{{ asset('assets/image/smile.png') }}">
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex flex-column bd-highlight justify-content-around">
        <div class="d-flex flex-row bd-highlight justify-content-center">
            <button type="button" class="w-50 p-1" onclick="openWindow('/commission',600,700)">
                الهيئة
            </button>
            <button type="button" class="w-50 p-1 ms-2" onclick="submitForm(event)">خروج</button>
        </div>
        <button type="button" class="w-100 p-1" onclick="submitForm(event)">ارسل</button>
    </div>
</form>
