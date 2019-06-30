<div class="mobile-navigation">
    <div class="row mobile-navigation__container">
        <div class="mobile-navigation__container--image">
            <a href="{{env('APP_URL')}}/builder/dashboard/schedule">
                <img src="{{asset("img/back.png")}}" alt="" class="mobile-navigation__container--image-img">
            </a>
        </div>
        <div class="mobile-navigation__container--image">
            <a href="{{env('APP_URL')}}/builder/dashboard">
                <img src="{{asset("img/home.png")}}" alt="" class="mobile-navigation__container--image-img">
            </a>
        </div>
        <div class="mobile-navigation__container--image mobile-navigation--center">
            <a href="{{env('APP_URL')}}/{{$user->UserURL}}" target="_blank">
                <img src="{{asset("img/internet.png")}}" alt="" class="mobile-navigation__container--image-img">
            </a>
        </div>
        <div class="mobile-navigation__container--image" onclick="$('.background').fadeIn(100);">
            <a href="#" > 
                <img src="{{asset("img/share.png")}}" alt="" class="mobile-navigation__container--image-img" id="btn-share-web-url">
            </a>
        </div>
        <div class="mobile-navigation__container--image" id="btn-help-modal" onclick="$('.help-modal-background').fadeIn(100);">
            <a href="#"  class="no-link-style">
                <span class="mobile-navigation__container--image-img">?</span>
            </a>
        </div>
    </div>
</div>