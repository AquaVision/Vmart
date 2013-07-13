

$(function(){

	$('body').delegate('.ulstyle li a', 'click', function(e) {
    		var $this = $(this);
		$('.ulstyle li a').removeClass('activex');
		if (!$this.hasClass('activex')) {
			$this.addClass('activex');
			var thisdiv = jQuery(this).attr("data-target")
		}
		e.preventDefault();
	});


});