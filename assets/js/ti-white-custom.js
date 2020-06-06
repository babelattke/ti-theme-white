function toggle_visibility(id) {
    var e = document.getElementById(id);
    if(e.style.display == 'block')
       e.style.display = 'none';
    else
       e.style.display = 'block';
 }

 $(document).ready(function(){  
   //move up button
   $('.move-up span').click(function(){
       $('html, body').animate({
           scrollTop: 0
       }, 1000);
   })
   // AOS Instance
   AOS.init();

});