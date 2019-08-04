<div class="share-clickable-button">
    <img src="{{asset('./img/share.png')}}" alt="" class="share-clickable-button-image">
</div>
<div class="share-buttons-container">
    <ul class="share-buttons--wrap">
        <li class="share-buttons--button" id="share-1">
            <a href="whatsapp://send?text=You are invited to our wedding. Please use this invite code {{App\UserUrls::EventCode()}} or{{env('APP_URL').'/'.App\UserUrls::EventUrl()}}" data-action="share/whatsapp/share" target="_blank">
                <img src="{{asset('img/buttons/whatsapp.png')}}" alt="" class="share-buttons--button--img" >
            </a>
        </li>
        <li class="share-buttons--button" id="share-2">
            <a href="https://www.facebook.com/sharer/sharer.php?u=www.squarecard.in/{{env('APP_URL').'/'.App\UserUrls::EventUrl()}}/" class="social-media-button" target="_blank">
                <img src="{{asset('img/buttons/facebook.png')}}" alt="" class="share-buttons--button--img">
            </a>
        </li>
        <li class="share-buttons--button" id="share-3">
            <a class="social-media-button">
                <img src="{{asset('img/buttons/share.png')}}" alt="" class="share-buttons--button--img" style="height:30px;width:20px;margin:3px auto;">
            </a>
        </li>
    </ul>
</div>

@section('script')
<script>
$('#share-3').click(function(){
    if (navigator.share) {
      navigator.share({
          title: 'Wedding Card',
          text: 'You are Invited to the wedding. Your Invite code is: {{App\UserUrls::EventCode()}}',
          url: '{{env('APP_URL').'/'.App\UserUrls::EventUrl()}}',
      })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error));
    }
    else{
        $("#share-3").hide();
    }

  });
</script>
@endsection
