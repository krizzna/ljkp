!function ($) {
  'use strict';

  $(function () {

    // Kill links
    $('.container-fluid [href=#]').click(function (e) {
      e.preventDefault()
    })
    
    //sidenav
    $(".nav-sidenav > li").on("show.bs.collapse", function () {
	$(this).addClass("sidenav-active-background");
    });
    $("li").on("hide.bs.collapse", function (e) {
	e.stopPropagation();
	$(this).removeClass("sidenav-active-background");
    });

    $(".input-group.date").datepicker({
	autoclose: true,
	todayHighlight: true,
	toggleActive: true
    });
    
  })
}(jQuery);
