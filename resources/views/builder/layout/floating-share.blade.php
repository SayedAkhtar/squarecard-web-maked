<div class="share-clickable-button">
    <img src="{{asset('./img/share.png')}}" alt="" class="share-clickable-button-image">
</div>
<div class="share-buttons-container">
    <ul class="share-buttons--wrap">
        <li class="share-buttons--button" id="share-1">
            <a href="whatsapp://send?text=You are invited to our wedding. {{$user->UserURL}}" data-action="share/whatsapp/share" target="_blank">
                <img src="{{asset('img/buttons/whatsapp.png')}}" alt="" class="share-buttons--button--img" >
            </a>
        </li>
        <li class="share-buttons--button" id="share-2">
            <a href="https://www.facebook.com/sharer/sharer.php?u=www.squarecard.in/{{$user->UserURL}}/" class="social-media-button" target="_blank">    
                <img src="{{asset('img/buttons/facebook.png')}}" alt="" class="share-buttons--button--img">
            </a>
        </li>
        <li class="share-buttons--button" id="share-3">
            <a href="https://www.facebook.com/sharer/sharer.php?u=www.squarecard.in/{{$user->UserURL}}/" class="social-media-button" target="_blank">    
                <img src="{{asset('img/buttons/share.png')}}" alt="" class="share-buttons--button--img" style="height:30px;width:20px;margin:3px auto;">
            </a>
        </li>
    </ul>
</div>
