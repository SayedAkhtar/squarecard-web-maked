$(document).ready(function(){
    $(".mobile-menu-open").click(function(){
        $(".mobile-menu").css({"margin-left":"0%"});
    });
    $(".mobile-menu-close").click(function(){
        $(".mobile-menu").css({"margin-left":"-100%"});
    });
    $(".mobile-menu__link").click(function(){
        $(".mobile-menu").css({"margin-left":"-100%"});
    });
    var menuBar = $(".navigation-intro__navigation");
    var menuBarTop = menuBar[0].offsetTop;
    var menuBarHeight = menuBar[0].clientHeight;
    $(document).scroll(function(){
        var windowScroll = $(document).scrollTop();
        if(windowScroll > menuBarTop){
            $(".navigation-intro__introduction").css({"margin-top":menuBarHeight, "box-shadow":"0px 4px 30px 4px rgba(0,0,0,0.2)"});
            $(".navigation-intro__navigation").css({"box-shadow":"0px 4px 30px 4px rgba(0,0,0,0.2)"});
            $(".navigation-intro__navigation").addClass("fixed-top");
        }
        else{
            menuBar.removeClass("fixed-top");
            $(".navigation-intro__introduction").css({"margin-top":0, });
        }
        // console.log($(document).scrollTop());

    })
    
    var deferredPrompt;
    
   
});

window.addEventListener('beforeinstallprompt', function (e) {
    // Prevent Chrome 67 and earlier from automatically showing the prompt
    console.log("ADDED");
    // e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;

    showAddToHomeScreen();

    });
    function showAddToHomeScreen() {

        var a2hsBtn = document.querySelector(".install-pwa");
      
        a2hsBtn.style.display = "block";
      
        a2hsBtn.addEventListener("click", addToHomeScreen);
      
      }
      function addToHomeScreen() {  var a2hsBtn = document.querySelector(".install-pwa");  // hide our user interface that shows our A2HS button
  a2hsBtn.style.display = 'none';  // Show the prompt
  console.log("clicked");
  deferredPrompt.prompt();  // Wait for the user to respond to the prompt
  deferredPrompt.userChoice
    .then(function(choiceResult){

  if (choiceResult.outcome === 'accepted') {
    // console.log('User accepted the A2HS prompt');
  } else {
    // console.log('User dismissed the A2HS prompt');
  }

  deferredPrompt = null;

});}
