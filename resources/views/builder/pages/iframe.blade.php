
<div class="web-view__buttons">   
        <a href="{{env('APP_URL')}}/{{$user->UserURL}}" class="btn btn-cancel px-4 mt-0" target="_blank">VIEW LIVE <img src="{{asset("img/internet.png")}}" alt="" class="img-responsive ml-2" height="24px"></a>
    </div>
    <div class="web-view__container">
        <div class="web-view__container--preview">
            <div class="web-preview">
                <img src="{{asset('img/browser-window.png')}}" alt="" class="web-preview--img">
                <iframe src="{{env('APP_URL')}}/{{$user->UserURL}}" frameborder="0" X-Frame-Options='allow'></iframe>
            </div>
            <div class="mobile-preview">
                <img src="{{asset('img/mobile-frame.png')}}" alt="" class="mobile-preview--img">
                <iframe src="{{env('APP_URL')}}/{{$user->UserURL}}" frameborder="0"></iframe>
            </div>
        </div>
        <div class="web-view__container--preview-select">
            <ul class="btn btn-cancel web-view__container--preview-select-ul">
                <li id="web-preview"><i class="fas fa-desktop"></i></li>
                <li id="mobile-preview"><i class="fas fa-mobile-alt"></i></li>
            </ul>
        </div>
</div>
