
<div class="help-modal-background">
  <div class="share-modal">
    <div class="container mx-auto">
      <h1 class="display-5 d-block text-center">Connect with us</h1>
      <span id="modal-help-close" class="modal-close-button">X</span>
      <p class="display-6 text-center">Please fill the form with your queries.</p>
        <form action="" method="post">
            @csrf
            {{-- {{ csrf_token() }} --}}
            <div class="form-group">
                <input type="text" value="{{Auth::user()->email}}" name="query-email" hidden>
                <input type="text" value="{{Auth::user()->name}}" name="query-name" hidden>
                {{-- <label for="help-message-box">Message</label> --}}
                <textarea class="form-control form-control-sm" type="text" id="help-message-box" rows="5" cols="60">   
                </textarea>    
            </div>
            <a type="submit" class="btn-submit help-modal-send-button" onclick="$('form').submit()">Send</a>
        </form>        
    </div>
  </div>
</div>
@section('script')
    {{-- <script>
     $(document).ready(function(){
        //Modal Hide
        $("#modal-help-close").click(function(){
          $(".help-modal-background").fadeOut(200);
        });

        //Modal Show Up
        $("#btn-help-modal").click(function(){
          $(".help-modal-background").fadeIn(100);
        });

      });
    </script> --}}
    
@endsection


