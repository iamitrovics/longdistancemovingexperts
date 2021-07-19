(function($) {
	jQuery(document).ready(function() {
	    // desktop multilevel menu
        $('.dropdown-menu a.dropdown-toggle').on('hover', function(e) {
            if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
            });
            return false;
        });

        $('.quote-form-in .nav-tabs').each(function(){
			var $active, $content, $links = $(this).find('a');
			$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
			$active.addClass('active');
			$content = $($active.attr('href'));
			$links.not($active).each(function () {
				$($(this).attr('href')).hide();
			});
			$(this).on('click', 'a', function(e){
			var c = this;
				$active.removeClass('active');
				$content.fadeOut("slow", function(){
                    $active = $(c);
                    $content = $($(c).attr('href'));
                    
                    $active.addClass('active');
                    $content.fadeIn("fast");
                });
				e.preventDefault();
			});
        });

        $('.quote-form #q2 .add-car-btn').click(function() {
            $(this).fadeOut(300);
            $('.quote-form #q2 .add-car-div').fadeIn(300);
        });
        $('.quote-form #q3 .add-car-btn').click(function() {
            $(this).fadeOut(300);
            $('.quote-form #q3 .add-car-div').fadeIn(300);
        });

        $('.estimate-form .nav-tabs').each(function(){
			var $active, $content, $links = $(this).find('a');
			$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
			$active.addClass('active');
			$content = $($active.attr('href'));
			$links.not($active).each(function () {
				$($(this).attr('href')).hide();
			});
			$(this).on('click', 'a', function(e){
			var c = this;
				$active.removeClass('active');
				$content.fadeOut("slow", function(){
                    $active = $(c);
                    $content = $($(c).attr('href'));
                    
                    $active.addClass('active');
                    $content.fadeIn("fast");
                });
				e.preventDefault();
			});
        });

        $('#cookie-notice').addClass('slide-up');

        $('#close-notice, #accept-cookie').click(function(e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });

        $("#menu").slidingMenu();

        jQuery("#top__mobile .menu-btn").click(function(){
	    	jQuery(".menu-overlay").addClass("active-overlay");
            jQuery('.main-menu-sidebar').addClass("menu-active");
	    });
	   
	    jQuery('.main-menu-sidebar .close-menu-btn, .menu-overlay').click(function(){
	        jQuery('.main-menu-sidebar').removeClass("menu-active");
	        jQuery(".menu-overlay").removeClass("active-overlay");
	    });

        // date picker
        $(".quote-form .calendar input[type=text]").datepicker({
            minDate: '0'
        });

        $(".date-picker-input").datepicker({
            minDate: '0'
        });        


        $(function () {
            
                var date1 = new Date('05/05/2021');
                var date2 = new Date('05/20/2021');

                var date3 = new Date('06/05/2021');
                var date4 = new Date('06/20/2021');

                var date5 = new Date('07/05/2021');
                var date6 = new Date('07/20/2021');                
                    
                $(".date-picker-input").datepicker({
                    minDate: '0',
                    showOtherMonths: true,
                    selectOtherMonths: true, 
                    
                    
                    beforeShowDay: function( date ) {
                        var highlight = date >= date1 && date <= date2
                        var highlight2 = date >= date3 && date <= date4
                        var highlight3 = date >= date5 && date <= date6
                        if( highlight || highlight2 || highlight3 ) {
                             return [true, "event", 'Tooltip text'];
                        } else {
                             return [true, '', ''];
                        }
                    }
            
                });

        });

        $('.date-picker-input').on('click', function(e) {
          e.preventDefault();
          $(this).attr("autocomplete", "off");  
       });

       $(".date-picker-input").attr("autocomplete", "off");    
        
        $('.selectpicker').selectpicker();
        // modal script
        setTimeout(function() {
            jQuery('.modal-overlay').addClass('show');
        }, 1000);
        $('.toggle-modal').click(function(e){
            var myEm = $(this).attr('data-my-element');
            var modal = $('.modal-overlay[data-my-element = '+myEm+'], .modal[data-my-element = '+myEm+']');
            e.preventDefault();
            modal.addClass('active');
            $('html').addClass('fixed');
        });
        $('.close-modal').click(function(){
            var modal = $('.modal-overlay, .modal');
            $('html').removeClass('fixed');
            modal.removeClass('active');
        });

        //scroll to anchored
        $(document).on('click', '#faq-page #faq-questions ul li a', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 30
            }, 500);
        });

        // Fancybox
        $('#gallery-page [data-fancybox="gallery"]').fancybox();

        $(function() {
            $('.quote-cta--single a.btn-cta').click(function() {
              if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html, body').animate({
                    scrollTop: target.offset().top - 100
                  }, 1000);
                  return false;
                }
              }
            });
          });           

    });
})(jQuery);