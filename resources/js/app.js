require('./bootstrap');

console.log("Hello there");

$(document).ready(function() {
    $('#faculty').on('change', function() {
        var getFacultyId = $(this).val();
        console.log("FacID: "+getFacultyId);
        if(getFacultyId) {
            $.ajax({
                url: '/associatedFacultyModules/'+getFacultyId,
                type: "GET",
                data : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success:function(data) {
                    //console.log(data);
                  if(data){
                    $('#modules').empty();
                    $('#modules').focus;
                    $('#modules').append('<option value="">-- Select MyCity --</option>'); 
                    $.each(data, function(key, value){
                    $('select[name="modules"]').append('<option value="'+ key +'">' + value.module_name+ '</option>');
                });
              }else{
                $('#modules').empty();
              }
              }
            });
        }else{
          $('#modules').empty();
        }
    });
});