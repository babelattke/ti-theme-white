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

$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //sections
    var opacity;
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("section").index(next_fs)).addClass("active");
    
    //show the next section
    next_fs.show();
    //hide the current section with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("section").index(current_fs)).removeClass("active");
    
    //show the previous section
    previous_fs.show();
    
    //hide the current section with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
    return false;
    })

    $(document).on('click', '#deliverymain', function(event) { 
        event.preventDefault(); 
        $("#deliverycart").trigger("click");
    });

    $(document).on('click', '#pickupmain', function(event) { 
        event.preventDefault(); 
        $("#pickupcart").trigger("click");
    });

    //Update Price in Checkout based on total in cartbox  
    $(".alert").delay(4000).slideUp(200, function() {        
        $(this).alert('close');
    });
    
});





const switchLanguageRequest = function (lang) {
    return $.ajax({
        url: '/order/changelocale',
        type: 'POST',
        data: {
            '_token': $('meta[name=csrf-token]').attr('content'),
            'lang': lang,
        },
    })
};

$(function () { // window.onload

    $('#lang-switcher').on('click', function (e) {
        e.preventDefault();

        const newLang = $(this).text().replace(/\s/g, '');

        // $(this).text(newLang);
        console.log('new lang', newLang);
        switchLanguageRequest(newLang)
        .done(function (response) {
            console.log(response)
        })
        .fail(function () {
            console.log(...arguments);
        })
        .always(function () {
            window.location.reload();
        });
    });
});


const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});