$(document).ready(function() {
	'use strict';

    /**
     * Scroll
     */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 220) {
            $('.header-sticky').addClass('active');
        } else {
            $('.header-sticky').removeClass('active');
        }
    });

    /**
     * Filter
     */
	$('.filter h2').on('click', function(e) {
		$(this).toggleClass('closed');
	});


	/**
	 * Sidenav trigger
	 */
	$('.sidenav-trigger, .sidenav-close, .page-wrapper-overlay').on('click', function(e) {
		e.preventDefault();
		$('body').toggleClass('sidenav-open');
	});
	
	

	/**
	 * Animations
	 */
	setTimeout(function(){
      $('body').addClass('loaded');
   }, 500);
	

	/**
	 * Autocomplete
	 */
	 
	$.get('js/data/autocomplete.json', function(data){
    	$('.header-search input').typeahead({ 
    		source: data,
		    select: function () {
		      var val = this.$menu.find('.active').data('value');
		      this.$element.data('active', val);
		      if(this.autoSelect || val) {
		        var newVal = this.updater(val);

		        if (!newVal) {
		          newVal = "";
		        }

		        this.$element
		          .val(newVal.name)
		          .change();
		        this.afterSelect(newVal);
		      }
		      return this.hide();
		    },	         		
    		displayText: function(item) {
    			return '<img src="' + item.image + '"><strong>' + item.name + '</strong><span>' + item.category + '</span>';
    		},
			highlighter: function(item) { 
				return unescape(item);				
			},		
    		autoSelect: true
    	});
	}, 'json');

	/**
	 * Google Map
	 */
	var markers = [];
	
	$('#event-map').gmap3({
		map: {									
			options:{
				styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
				center:[40.761077, -73.88],
				scrollwheel: false,
				zoom: 12
			}
		},
		marker: {
			cluster: {
				radius: 100,
			}
		},			
		overlay: {
			values: [{
				latLng: [40.761077, -73.88], 
				data: 1,			
				options: {									
					content: '<div class="map-marker"><i class="fa fa-star"></i></div>', 
					offset: {
        				x: -18,
        				y: -42
      				}							
				}									
			}],
			events: {
				click: function(marker, event, context) {															
					$('.map-popup-content-wrapper').css('display', 'none');

					if ($(event[0].target).hasClass('close')) {
						$('#' + context.data).css('display', 'none');
					} else {
						$('#' + context.data).css('display', 'block');
					}
				}
			}
		}		
	});

	$('#contact-map').gmap3({
		map: {									
			options:{
				styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
				center: [40.761077, -73.88],
				scrollwheel: false,
				zoom: 12
			},
		},
		marker: {
			cluster: {
				radius: 100,
			}
		},			
		overlay: {
			values: [{
				latLng: [40.761077, -73.88], 
				data: 1,			
				options: {									
					content: '<div class="map-marker"><i class="fa fa-star"></i></div>', 
					offset: {
        				x: -18,
        				y: -42
      				}							
				}									
			}],
			events: {
				click: function(marker, event, context) {															
					$('.map-popup-content-wrapper').css('display', 'none');

					if ($(event[0].target).hasClass('close')) {
						$('#' + context.data).css('display', 'none');
					} else {
						$('#' + context.data).css('display', 'block');
					}
				}
			}
		}			
	});

	$.ajax('assets/data/markers.json', {
		success: function(values) {
			var markers = [];
			var infos = [];

			$.each(values, function(index, value) {
                var content = '<div id="' + value.id + '" class="map-popup-content-wrapper"><div class="map-popup-content"><div class="listing-window-image-wrapper">' +
                        '<a href="properties-detail-standard.html">' +
                            '<div class="listing-window-image" style="background-image: url(' + value.image + ');"></div>' +
                            '<div class="listing-window-content">' +
                                '<div class="info">' +
                                    '<h2>' + value.title + '</h2>' +
                                    '<h3>' + value.price + '</h3>' +
                                '</div>' +
                            '</div>' +
                        '</a>' +
                    '</div></div><i class="fa fa-close close"></i></div>' +
                    '<div class="map-marker">' + value.icon + '</div>';

				markers.push({
					latLng: value.center, 
					data: value.id,			
					options: {									
						content: content,
						offset: {
            				x: -18,
            				y: -42
          				}							
					}
				});
			});

			$('#map-google').gmap3({		
				map: {									
					options:{
						styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":60}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#a5c4c7"},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#f69679"},{"lightness":10}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#b6c54c"},{"lightness":40},{"saturation":-40}]},{}],
						center:[40.771077, -73.94],
						scrollwheel: false,
						zoom: 12
					}
				},
				marker: {
					cluster: {
						radius: 100,
					}
				},
				overlay: {
					values: markers,
					events: {
						click: function(marker, event, context) {															
							$('.map-popup-content-wrapper').css('display', 'none');

							if ($(event[0].target).hasClass('close')) {
								$('#' + context.data).css('display', 'none');
							} else {
								$('#' + context.data).css('display', 'block');
							}
						}
					}
				}
			});		
		}		
	});		

	/**
	 * Customizer
	 */	 
	$('.customizer-title').on('click', function() {		
		$('.customizer').toggleClass('open');
	});

	$('.customizer a').click('click', function(e) {
		e.preventDefault();

		var cssFile = $(this).attr('href');
		$('#css-primary').attr('href', cssFile);
	});		
	if($('.dt-modal-left-side').length){if(typeof $('.dt-modal-left-item.active').attr('data-bg')!='undefined'){$('.dt-modal-left-side').css('background','url('+$('.dt-modal-left-item.active').attr('data-bg')+') #4e94b1');}
	if($('.dt-modal-left-side').children().length>1){var pagination_html='<div class="dt-modal-left-pagination">';for(var i=0;i<$('.dt-modal-left-side').children().length;i++){var active='';if(i==0){active=' active';}
	pagination_html+='<span class="dt-modal-left-page'+active+'"></span>';}
	pagination_html+='</div>';$('.dt-modal-left-side').append(pagination_html);}}
});