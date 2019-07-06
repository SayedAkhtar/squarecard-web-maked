<div class="align-items-center justify-content-sm-between dashboard-heading-pc">
        <div class="action__button">
            <div class="action__button--left">
                <a href="{{isset($back)?$back:''}}"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
            </div>
        </div>
    <h3 class="dashboard--heading text-uppercase mt-4">{{isset($title)?$title:''}}</h3>
    <div class="dashboard__head-buttons">
        <a href="#" class="btn btn-secondary" id="btn-share-web-url">Share 
            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
        </a>
        <a class="btn btn-secondary" id="btn-help-modal">Help ?</a> 
    </div>
</div>