 
  $('#delete').on( 'click', function(){

    $.ajax({
      url         : '/',
      type        : 'POST',
      data        : "delete=1",
      success     : function(){
        console.log('aaaaaaaaaaaa');
    }
  });
})

    