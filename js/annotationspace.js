jQuery( document ).ready(function() {


  jQuery("#leftcolumn a").click(function(event) {


	var pos = jQuery(this).position();
	var ref = jQuery(this).attr('ref');

	jQuery("#rightcolumn").empty();
	jQuery.getJSON( sitevars.siteurl+"/wp-json/wp/v2/"+ref, function( data ) {
	  var title = data.title.rendered;
	  var body = data.content.rendered;
	  jQuery("#rightcolumn").html("<h3 style='padding-top:"+(pos.top)+"px'>"+title+"</h3>"+body);
	});

	event.preventDefault();
  });

  jQuery("#choosetranslation").click(function(event) {
	jQuery("#transcription").hide();
	jQuery("#translation").show();
	event.preventDefault();
  });

  jQuery("#choosetranscription").click(function(event) {
	jQuery("#transcription").show();
	jQuery("#translation").hide();
	event.preventDefault();
  });


});





