 var files; 
$('input[type=file]').on('change', function(){
  files = this.files;
});
$('.upload_files').on( 'click', function( event ){
  console.log(files[0]['type']);

  if((files[0]['type'] != 'text/csv') || ((files[0]['type'] / 1024) >= 1000) || (typeof files == 'undefined')) {
    console.log('error');
    $('.alert-danger').css('display', 'block');
    return;
  }

  var data = new FormData();

  $.each( files, function( key, value ){
    data.append( key, value );
  });

  data.append( 'my_file_upload', 1 );

  $.ajax({
    url         : '/',
    type        : 'POST',
    data        : data,
    cache       : false,
    dataType    : 'text',
    processData : false,
    contentType : false, 
    success     : function( respond){;
      if( typeof respond.error === 'undefined' ){
        var files_path = respond.files;
        var html = '';
        $.each( files_path, function( key, val ){
           html += val +'<br>';
        } )

        $('.ajax-reply').html( html );
      }
      else {
        $('.alert-danger').css('display', 'block');
      }
    },
    error: function(){
      $('.alert-danger').css('display', 'block');
    }

  });

});