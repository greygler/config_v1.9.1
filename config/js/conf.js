 $(document).ready(function(){ 
        $('.confident-link').click(function(){$('.hidden-conf').show();if($(window).height() < 760){$('.conf-info').css({'height':  ($(window).height()-120),'overflow-y': 'scroll'});};});
        $('.close-conf').click(function(){$('.hidden-conf').hide();});
  });