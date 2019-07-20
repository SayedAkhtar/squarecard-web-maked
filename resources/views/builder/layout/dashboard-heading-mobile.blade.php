<div class="align-items-center justify-content-sm-between dashboard-heading-mobile py-2">
        <div class="action__button">
            <div class="action__button--left">
                <a href="{{isset($back)?$back:''}}"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="20px"></a>
                {{-- <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a> --}}
            </div>
        </div>
    <h3 class="dashboard--heading text-uppercase">{{isset($title)?$title:''}}</h3>
    <div class="dashboard__head-buttons " style="position:relative;" id="mobile-heading-menu">
        <a href="javascript:void(0)"><i class="fas fa-ellipsis-v"></i></a>
        <ul class="mobile-heading-menu--container">
            <li><a href="{{env('APP_URL')}}/{{App\User::find(Auth::user()->id)->UserUrl->UserURL}}" target="_blank">Visit Website</a></li>
            <li onclick="$('.help-modal-background').fadeIn(100);"><a href="#">Contact Us</a></li>
        </ul>
    </div>
</div>