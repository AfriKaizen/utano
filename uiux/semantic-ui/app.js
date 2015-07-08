$('#age-info')
  .dropdown({
  	onChange: function(val){
  		alert(val);
  	}
  });

$('.gender-selection')
  .checkbox({
  	onChange: function(val){
  		alert( $( this ).val() );
  	}
  });