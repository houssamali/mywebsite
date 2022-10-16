$(document).ready(function(){

   $(document).on('click','.add-like',function(e){
    e.preventDefault();
    var data={
        'like':$('.like').val(),
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/add-like',
        type: 'post',
        dataType: 'json',
        data: data,
        success: function(response) {
           
           
        }
    });

    });


    $(document).on('click','.remove-like',function(e){
        e.preventDefault();
       
        var data={
            'like':$('.like').val(),
        }
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            url: '/remove-like',
            type: 'post',
            dataType: 'json',
            data: data,
            success: function(response) {
               
              // window.location.reload();
              $('.my-like').load(location.href + " .my-like");
             //console.log('add success');
            }
        });


        });
}); 