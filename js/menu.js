
$(document).ready(function(){
	//Only shows drop down trigger when js is enabled (Adds empty span tag after ul.menu_sous_categories*)
	$(".menu_sous_categories").parent().append("<span></span>");

	//When trigger is clicked... => cliked remplacé par hover !
	$(".menu_categories li span").hover(function() 
	{ 
		//Following events are applied to the menu_sous_categories itself (moving menu_sous_categories up and down)
		//Drop down the menu_sous_categories on hover
		$(this).parent().find(".menu_sous_categories").slideDown('fast').show(); 

		$(this).parent().hover(function()
		{

		}, function()
		{
			//When the mouse hovers out of the menu_sous_categories, move it back up
			$(this).parent().find(".menu_sous_categories").slideUp('slow');
		});
	}).hover(function() 
	{ 
		//Following events are applied to the trigger (Hover events for the trigger)
		//On hover over, add class "subhover"
		$(this).addClass("subhover");
	}, function()
	{
		//On hover out, remove class "subhover"
		$(this).removeClass("subhover");
	});
});


