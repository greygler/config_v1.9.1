  jQuery.ajax ({
    type: "GET",
    url: "http://ipgeobase.ru:7020/geo/?ip=" + ip,
    dataType: "xml",
    success: function(xml) {
      var region = jQuery(xml).find('city').text();
      jQuery(".geocity").text(region);
	  $('<input>').attr('type','hidden').attr('name','city').attr('value',region).appendTo('form');   
    },
    error: function() {
      jQuery(".geocity").text("********");
	  $('<input>').attr('type','hidden').attr('name','city').attr('value',"не определен").appendTo('form'); 
    }
	
	
  });
  