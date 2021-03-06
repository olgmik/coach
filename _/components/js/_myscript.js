$(function(){

	//highlight the current nav
	$("#home a:contains('Global')").parent().addClass('active'); 
	$("#grid_templates a:contains('Templates')").parent().addClass('active');
	$("#interaction a:contains('Interaction')").parent().addClass('active');
	$("#international a:contains('International')").parent().addClass('active');
	$("#factory a:contains('Factory')").parent().addClass('active');
	$("#fonts a:contains('Global')").parent().addClass('active');
	$("#fonts a:contains('Fonts')").parent().addClass('active');
	$("#colors a:contains('Global')").parent().addClass('active');
	$("#colors a:contains('Colors')").parent().addClass('active');
	$("#icons a:contains('Global')").parent().addClass('active');
	$("#icons a:contains('Icons')").parent().addClass('active');
	$("#buttons a:contains('Global')").parent().addClass('active');
	$("#buttons a:contains('Buttons')").parent().addClass('active');
	$("#links a:contains('Global')").parent().addClass('active');
	$("#links a:contains('Links')").parent().addClass('active');
	$("#forms a:contains('Global')").parent().addClass('active');
	$("#forms a:contains('Forms')").parent().addClass('active');
	$("#checkboxes a:contains('Global')").parent().addClass('active');
	$("#checkboxes a:contains('Checkboxes')").parent().addClass('active');
	$("#dropdowns a:contains('Global')").parent().addClass('active');
	$("#dropdowns a:contains('Dropdowns')").parent().addClass('active');
	$("#accordions a:contains('Global')").parent().addClass('active');
	$("#accordions a:contains('Accordions')").parent().addClass('active');
	$("#pagination a:contains('Global')").parent().addClass('active');
	$("#pagination a:contains('Pagination')").parent().addClass('active');
	$("#navigation a:contains('Global')").parent().addClass('active');
	$("#navigation a:contains('Navigation')").parent().addClass('active');
	$("#grid a:contains('Templates')").parent().addClass('active');
	$("#grid a:contains('Grid')").parent().addClass('active');
	$("#headers a:contains('Templates')").parent().addClass('active');
	$("#headers a:contains('Headers')").parent().addClass('active');
	$("#wwwcm a:contains('Templates')").parent().addClass('active');
	$("#wwwcm a:contains('WWWCM')").parent().addClass('active');
	$("#homepage a:contains('Templates')").parent().addClass('active');
	$("#homepage a:contains('Homepage')").parent().addClass('active');
	$("#landing_pages a:contains('Templates')").parent().addClass('active');
	$("#landing_pages a:contains('Landing')").parent().addClass('active');
	$("#carousel a:contains('Interaction')").parent().addClass('active');
	$("#carousel a:contains('Carousel')").parent().addClass('active');
	$("#video a:contains('Interaction')").parent().addClass('active');
	$("#video a:contains('Video')").parent().addClass('active');
	$("#rollovers a:contains('Interaction')").parent().addClass('active');
	$("#rollovers a:contains('Rollovers')").parent().addClass('active');
	$("#imagemapping a:contains('Interaction')").parent().addClass('active');
	$("#imagemapping a:contains('Image')").parent().addClass('active');

	$('ul.nav li.dropdown').hover(
		function(){
			$('.dropdown-menu', this).fadeIn(); // tell this element to fade in
		}, 
		function(){
			$('.dropdown-menu', this).fadeOut('fast');
	}
	); // hover

	$(':radio').change(
	  function(){
	    $('.choice').text( this.value + ' stars' );
	  } 
	); 

	$(".form-group.has-error").find("button.btn.dropdown-toggle.selectpicker.btn-default").addClass("border-error");
	// accordion icons
	$('.collapse.in').parent().find('.plus').removeClass("plus").addClass("minus");
	$('.collapse').on('shown.bs.collapse', function(){
	$(this).parent().find(".plus").removeClass("plus").addClass("minus");
	}).on('hidden.bs.collapse', function(){
	$(this).parent().find(".minus").removeClass("minus").addClass("plus");
	});
		
	$('input[type="email"]').focus( function(){
	  $(this).attr("data-placeholder",$(this).attr('placeholder')).removeAttr("placeholder");
	});
	$('input[type="email"]').blur( function(){
	  $(this).attr("placeholder",$(this).attr('data-placeholder'));
	});   
	$('.selectpicker').selectpicker();
}); 