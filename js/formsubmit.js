// this is the id of the form
$("#userstep1").submit(function(e) {

    e.preventDefault(); // avoid Default behaviour

    var form = $(this);
    var url = form.attr('action');
    $.ajax({
     type: "POST",
     url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {

            if(data=='YES'){
              $('#resetBtn').click();
              $('.step1View').hide();
              $('.step2View').show();

              $('#requestTypeId').val(2);

            }else{
                 alert(data); // show response from the php script. 
               }
             }
           });
  });



$(document).on('keyup', '#username', function () {
  if(parseInt($('#requestTypeId').val())==2){
    console.log($(this).val());
    $.ajax({ 
      type: 'GET', 
      url: 'phpcode/savetodb.php', 
      data: { get_param: $.trim($(this).val()),requestType:parseInt($('#requestTypeId').val())}, 
      dataType: 'json',
      success: function (data) { 
        $.each(data, function(index, element) {
          $('body').append($('<div>', {
            text: element.name
          }));
        });
      }
    });
  }  
});
