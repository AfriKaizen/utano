//activate dropdowns
$('.ui.dropdown').dropdown();

//drop down for selecting age group
$('#age-info')
  .dropdown({
  	onChange: function(val){
      var age = val;
      var gender = $('#gender').val();
      getSymptoms(age,gender);
    }
  });

//gender selection radio buttons
$('#gender-info')
   .dropdown({
    onChange: function(val){
      var gender = val;
      var age = $('#who').val();
      getSymptoms(age,gender);
    }
});

function getSymptoms(age,gender){

  $.ajax({
    method: "POST",
    url: "http://localhost/kaizen/utano/search/here/",
    data: {gender: gender, age: age },
    success: function(data){
    data = JSON.parse(data);

    $('.symptoms-list').empty();

    for (i = 1; i < data['hits']['hits'].length; i++) {
    var results = data['hits']['hits'][i]['_source']['profile'][gender][age];
    
    results.forEach(function(symptom) {
      var button = "<div class='symptoms-button'><button class='ui right basic button' value='"+symptom+"'>"
      +symptom+"</button><br/></div>";
      $('.symptoms-list').append(button);
    });
    }
  }
});
}

function getDiagnosis(endpoint, symptoms){

  $.ajax({
    method: "POST",
    url: "http://localhost/kaizen/utano/app/search/get/",
    data: {endpoint: endpoint, symptoms: symptoms}, 
    success: function(data){
      data = JSON.parse(data);
      $('#diagnosis').empty();
    for (i = 0; i < data['hits']['hits'].length; i++) {
    var results = data['hits']['hits'][i]['_source']['title'];
    var button = "<div class='ui secondary segment symptoms-button'>"
      +results+"</div>";
      $('#diagnosis').append(button);
    }
    }
  });
}



//button click event that is used by user to select symptoms.
$('.symptoms-list').on('click','.symptoms-button',function(e){
    e.preventDefault(); 
    var button = $(this).index();
    console.log(button);
    $(this).hide();
    var symptom = "<div class='ui label'>"+$(this).children([0]).val()+"<i class='delete icon remove' button="+button+"></i></div>";
    $('div#selected-symptoms').append(symptom);
    
    var symptoms = "";
    $('div#selected-symptoms').children('div').each(function(){
        symptoms += $(this).text()+" ";
    });
    var gender = $('#gender').val();
    var age = $('#who').val();
    getDiagnosis(gender+"."+age,symptoms);
  });


//button click event that is used by user to remove selected sysmptoms.
 $('#selected-symptoms').on('click', '.remove', function(){
 	console.log($(this).attr('button'));
 		$('.symptoms-list').children('div').eq($(this).attr('button')).show();
 		$(this).parent().remove();
    var symptoms = "";
    $('div#selected-symptoms').children('div').each(function(){
        symptoms += $(this).text()+" ";
    });
    var gender = $('#gender').val();
    var age = $('#who').val();
    getDiagnosis(gender+"."+age,symptoms);
 });


