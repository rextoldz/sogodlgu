$(document).ready(function(){
    $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );
});
$(function(){
  var tickerLength = $('.an ul li').length;
  var tickerHeight = $('.an ul li').outerHeight();
  $('.an ul li:last-child').prependTo('.an ul');
  $('.an ul').css('marginTop',-tickerHeight);
  function moveTop(){
    $('.an ul').animate({
        top : -tickerHeight
    },300, function(){
      $('.an ul li:first-child').appendTo('.an ul');
        $('.an ul').css('top','');
      });
    }
  setInterval( function(){
    moveTop();
  }, 6000);
});