var select;

$(document).ready(function(){
 
  $('.menu ul li').click(function(){
    $('.container').css('display','inline-block');
    $('#list').css('display','none');
    select = this.getAttribute('prop');
    $('#title').html(this.innerHTML);
    $('#id').html(select);
  });
});
