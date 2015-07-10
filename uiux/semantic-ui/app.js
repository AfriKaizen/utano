
$('.booking').on('click', function(){
  $('#modal1')
    .modal({
      inverted: true
    }).modal('show');
});

$('.profile').on('click', function(){
$('#modal2')
  .modal('show')
});




$('.tabular.menu .item').tab();


$('.ui.dropdown')
  .dropdown()
;
$('#age-info')
  .dropdown({
  	onChange: function(val){

  	}
  });

$('.gender-selection')
  .checkbox({
  	onChange: function(val){

  	}
  });


$('.symptoms-button').on('click', function(e) {
    e.preventDefault(); 
    var button = $(this).index();
    console.log(button);
    $(this).hide();
    var symptom = "<div class='ui label'>"+$(this).children([0]).val()+"<i class='delete icon remove' button="+button+"></i></div>";
    $('div#selected-symptoms').append(symptom);
  });


 $('#selected-symptoms').on('click', '.remove', function(){
 	console.log($(this).attr('button'));
 		$('.symptoms-list').children('div').eq($(this).attr('button')).show();
 		$(this).parent().remove();
 });


