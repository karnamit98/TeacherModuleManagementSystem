const { reduce } = require('lodash');

require('./bootstrap');

console.log("Hello there!");

/****  Dynamic Dependent Dropdown for faculty and module *****/
$(document).ready(function() {
    //Triggers when the value of faculty dropdown changes
    $('#faculty').on('change', function() {
        var getFacultyId = $(this).val();       //Get the faculty_id
        console.log("FacID: "+getFacultyId);
        if(getFacultyId) {                      //If a faculty is selected
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
                    $('#modules').append('<option value="">-- select module(s) --</option>'); 
                    $.each(data, function(key, value){
                    //console.log( "Key: "+key+", value.id: "+value.id  );
                    $('select[name="modules[]"]').append('<option value="'+ value.id +'">' + value.module_name+ '</option>');
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

/****  Multi-Select for module dropdown *****/
$('#modules').select2({
    placeholder: "-- select module(s) --",
    allowClear: true,
    tags: true,
    tokenSeparators: [',', ' ']
  }).on('change', function(){

      console.log("module_selected: "+$(this).val());
  });