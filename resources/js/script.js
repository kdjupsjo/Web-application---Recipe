$(document).ready(function(){
     
  $("#submit").click(function(event) {
      
    event.preventDefault();

    //var $form = $( this ),
    var $form = $( '#form' ),
        url = $form.attr( 'action' );
          
    var posting = $.post( url, { name: $('#name').val(), comment: $('#comment').val() } );
      
    posting.done(function(  ) {
        var $div = $("<div>", {class: "showcomment"});
        $($div).append('<h4>'+ $('#name').val() +'</h4>');
        $($div).append('<p>'+ $('#comment').val()+'</p>');
        
        $('.comment-commentsection').append($div);
        $('#form').trigger('reset');
      });
    });
});