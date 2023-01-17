const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
container.classList.remove('right-panel-active'));

$('#password').focusin(function(){
    $('form').addClass('up')
  });
  $('#password').focusout(function(){
    $('form').removeClass('up')
  });

  // Panda Eye move
  $(document).on( "mousemove", function( event ) {
    var dw = $(document).width() / 15;
    var dh = $(document).height() / 15;
    var x = event.pageX/ dw;
    var y = event.pageY/ dh;
    $('.eye-ball').css({
      width : x,
      height : y
    });
  });

// TO check the stringth of a password
$( document ).ready(function() {

  const changeText = function (el, text, color) {
    el.text(text).css('color', color);
  };
  $('.input-2').keyup(function(){
    let len = this.value.length;

    if (len === 0) {
      $('.form-2 .progress-bar_item').each(function() {
        $(this).removeClass('active')
      });
      changeText(pbText, 'Password is blank');
    } else if (len > 0 && len <= 4) {

      changeText(pbText, 'Too weak');
    } else if (len > 4 && len <= 8) {
      changeText(pbText, 'Could be stronger');
    } else {

      changeText(pbText, 'Strong password');

    }
  });


});
