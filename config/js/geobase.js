  jQuery.ajax ({
    type: "GET",
    url: "http://ipgeobase.ru:7020/geo/?ip=" + ip,
    dataType: "xml",
    success: function(xml) {
      var city = jQuery(xml).find('city').text();
	  var region = jQuery(xml).find('region').text();
	  var country = jQuery(xml).find('country').text();
      jQuery(".geocity").text(city);
	  $('<input>').attr('type','hidden').attr('name','city').attr('value',city).appendTo('form');   
	  $('<input>').attr('type','hidden').attr('name','region').attr('value',region).appendTo('form'); 
	  $('<input>').attr('type','hidden').attr('name','country').attr('value',country).appendTo('form'); 
    },
    error: function() {
      jQuery(".geocity").text("********");
	  $('<input>').attr('type','hidden').attr('name','city').attr('value',"Не определен").appendTo('form');
	  $('<input>').attr('type','hidden').attr('name','region').attr('value',"Не определен").appendTo('form'); 
	  $('<input>').attr('type','hidden').attr('name','country').attr('value',"AA").appendTo('form');	  
    }
	
	
  });
  