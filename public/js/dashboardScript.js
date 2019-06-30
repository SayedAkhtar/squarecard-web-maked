$(document).ready(function(){

    const web = $("#web-preview");
    const mobile = $("#mobile-preview");
    // console.log(web);
    selectWebMobile(web, mobile);

});


function selectWebMobile(web, mobile){
    const webcontainer = $(".web-preview");
    const mobilecontainer = $(".mobile-preview");
    web.on('click', function(){
        mobilecontainer.hide();
        webcontainer.show();
    });
    mobile.on('click', function(){
        mobilecontainer.show();
        webcontainer.hide();
    });
}