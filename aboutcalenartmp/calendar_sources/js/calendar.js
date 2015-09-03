$( function()
{
	$(".week td a.day").click(function()
	{
		$(".week td").removeClass("today").removeClass("today-event");
		if($(this).parent().hasClass("grayed-event") || $(this).parent().hasClass("regular-event"))
		{
			$(this).parent().addClass("today-event");
		}
		else
		{
			$(this).parent().addClass("today");
		}
	});
});