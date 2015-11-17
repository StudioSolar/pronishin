$(window).load(function() {
  //$('.personality').height($('.information').height());
  
  

if (navigator.userAgent.indexOf('MSIE')!=-1) ie=1;
else ie=0;
document.onmousedown=function(e) {
        e=e||window.event;
        if ((ie && e.button==4) || (!ie && e.button==1)) return false
    }


  
});
/*$(window).resize(function() {
  $('.personality').height($('.information').height());
});*/