@php
    $url = env('APP_URL').'/'.$user->UserURL;
@endphp
<div class="background">
  <div class="share-modal">
    <div class="container mx-auto">
      <h1 class="display-5 d-block text-center">Share Url</h1>
      <span class="modal-close-button" id="modal-share-close">X</span>
      <p class="display-6 text-center">Click on the link below to share the url or use any of the social media buttons.</p>
      <div id="share-web-url" class="text-center">
        <small>Link copied !</small>
      <input type="text" class="form-control text-center" value="{{$url}}">
      </div>

      <div class="social-media">
        <ul class="social-media-container">
          <li class="social-media-list"><a href="https://www.facebook.com/sharer/sharer.php?u=www.squarecard.in/rajuwedssavitha/" class="social-media-button" target="_blank">
            
            <img src="{{asset('img/buttons/facebook-flat.svg')}}" alt="" class="social-media-button-img">
          </a></li>
          <li class="social-media-list"><a href="http://twitter.com/share?text=Digital Invitation &url={{$url}}&hashtags=squarecard.in,digital_invitation,wedding_invitation" class="social-media-button" target="_blank">
            <img src="{{asset('img/buttons/twitter.svg')}}" alt="" class="social-media-button-img">
          </a></li>
          <li class="social-media-list"><a href="whatsapp://send?text=You are invited to our wedding. {{$url}}" data-action="share/whatsapp/share" class="social-media-button" target="_blank">
            <img src="{{asset('img/buttons/whatsapp.svg')}}" alt="" class="social-media-button-img">
          </a></li>
          {{-- <li class="social-media-list"><a href="#" class="social-media-button">
            <img src="{{asset('img/buttons/instagram.svg')}}" alt="" class="social-media-button-img">
          </a></li> --}}
        </ul>
      </div>
    </div>
  </div>
</div>    



