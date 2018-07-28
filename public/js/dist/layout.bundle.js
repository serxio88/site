/*!
 * JavaScript Cookie v2.2.0
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
;(function (factory) {
	var registeredInModuleLoader = false;
	if (typeof define === 'function' && define.amd) {
		define(factory);
		registeredInModuleLoader = true;
	}
	if (typeof exports === 'object') {
		module.exports = factory();
		registeredInModuleLoader = true;
	}
	if (!registeredInModuleLoader) {
		var OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = OldCookies;
			return api;
		};
	}
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (; i < arguments.length; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function init (converter) {
		function api (key, value, attributes) {
			var result;
			if (typeof document === 'undefined') {
				return;
			}

			// Write

			if (arguments.length > 1) {
				attributes = extend({
					path: '/'
				}, api.defaults, attributes);

				if (typeof attributes.expires === 'number') {
					var expires = new Date();
					expires.setMilliseconds(expires.getMilliseconds() + attributes.expires * 864e+5);
					attributes.expires = expires;
				}

				// We're using "expires" because "max-age" is not supported by IE
				attributes.expires = attributes.expires ? attributes.expires.toUTCString() : '';

				try {
					result = JSON.stringify(value);
					if (/^[\{\[]/.test(result)) {
						value = result;
					}
				} catch (e) {}

				if (!converter.write) {
					value = encodeURIComponent(String(value))
						.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);
				} else {
					value = converter.write(value, key);
				}

				key = encodeURIComponent(String(key));
				key = key.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent);
				key = key.replace(/[\(\)]/g, escape);

				var stringifiedAttributes = '';

				for (var attributeName in attributes) {
					if (!attributes[attributeName]) {
						continue;
					}
					stringifiedAttributes += '; ' + attributeName;
					if (attributes[attributeName] === true) {
						continue;
					}
					stringifiedAttributes += '=' + attributes[attributeName];
				}
				return (document.cookie = key + '=' + value + stringifiedAttributes);
			}

			// Read

			if (!key) {
				result = {};
			}

			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all. Also prevents odd result when
			// calling "get()"
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var rdecode = /(%[0-9A-Z]{2})+/g;
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var cookie = parts.slice(1).join('=');

				if (!this.json && cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					var name = parts[0].replace(rdecode, decodeURIComponent);
					cookie = converter.read ?
						converter.read(cookie, name) : converter(cookie, name) ||
						cookie.replace(rdecode, decodeURIComponent);

					if (this.json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					if (key === name) {
						result = cookie;
						break;
					}

					if (!key) {
						result[name] = cookie;
					}
				} catch (e) {}
			}

			return result;
		}

		api.set = api;
		api.get = function (key) {
			return api.call(api, key);
		};
		api.getJSON = function () {
			return api.apply({
				json: true
			}, [].slice.call(arguments));
		};
		api.defaults = {};

		api.remove = function (key, attributes) {
			api(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.withConverter = init;

		return api;
	}

	return init(function () {});
}));

$( function() {
    prepareCategoryCount();
});


function prepareCategoryCount() {
    async.parallel([
        function(callback) {
            getCategoryData('/doctors/count', 'doctors', callback);
        },
        function(callback) {
            getCategoryData('/clinics/count', 'clinics', callback);
        },
        function(callback) {
            getCategoryData('/services/count', 'services', callback);
        },
        function(callback) {
            getCategoryData('/pharmacies/count', 'pharmacies', callback);
        },
        function(callback) {
            getCategoryData('/drugs/count', 'drugs', callback);
        }
    ],
    // optional callback
    function(err, results) {
        for (var i = 0, length = results.length; i < length; i++) {
            var category = results[i];
            $('#' + category.name + 'Count').html(category.value);
        }
    })

    function getCategoryData(url, paramName, callback) {
        $.ajax({
            url: url,
            dataType: 'application/json',
            success: function (res) {
                var obj = {};
                obj.name = paramName;
                obj.value = res.count;
                callback(null, obj);
            }, 
            error: function (res) {
                var count = 0;
                try {
                    count = JSON.parse(res.responseText).count;
                } catch (err) {}
                callback(null, {
                    name: paramName,
                    value: count
                });
            }
        })
    }
}
$(function() {
    initializeAccordions();
    initializeCarousels();
    initializeCopyButtons();
    initializeMapMarkersToggle();
    initializeFiltersToggle();
    initializeMenuToggle();
    initializeBellToggle();

    $('[data-toggle="tooltip"]').tooltip();
    $('.gallery a.gallery-img').simpleLightbox();

    $("a.delete-parent").click(function(event) {
        event.preventDefault();
        $(this).parent('.parent').remove();
    });
});

$(window).resize(function () {
    repos($('.crop img'))
})

repos($('.crop img'))

function initializeAccordions() {
    $( "#accordion" ).accordion({
        heightStyle: "content"
    });
    $( "#accordion2" ).accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });
    $( "#accordion3" ).accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });
    $( "#accordion4" ).accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });
    $( "#accordion5" ).accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });
    $( "#accordion6" ).accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });
}

function initializeCarousels() {
    $('.reviews ul').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
     $( ".owl-prev").html('<i class="fas fa-long-arrow-alt-left"></i>');
     $( ".owl-next").html('<i class="fas fa-long-arrow-alt-right"></i>');

     $('.gallery ul.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            },
            1400:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
     $( ".owl-prev").html('<i class="fas fa-long-arrow-alt-left"></i>');
     $( ".owl-next").html('<i class="fas fa-long-arrow-alt-right"></i>');
}

function initializeCopyButtons() {
    $('.btn-copy1').click(function () {
        if($('.btn-copy1 i').hasClass('fa-copy'))
        {
            $('.btn-copy1').html('<i class="far fa-copy"></i> Copied');
            $('.btn-copy2').html('<i class="far fa-copy"></i> Copy');
        }
        else
        {
            $('.btn-copy1').html('<i class="far fa-copy"></i> Copy');
        }
    });
    
    $('.btn-copy2').click(function () {
        if($('.btn-copy2 i').hasClass('fa-copy'))
        {
            $('.btn-copy2').html('<i class="far fa-copy"></i> Copied');
            $('.btn-copy1').html('<i class="far fa-copy"></i> Copy');
        }
        else
        {
            $('.btn-copy2').html('<i class="far fa-copy"></i> Copy');
        }
    });
}

function initializeMapMarkersToggle() {
    $('.btn-map').click(function () {
        if($('.btn-map i').hasClass('fa-map-marker'))
        {
            $('.btn-map').html('<i class="fas fa-map-marker"></i> Close map');
        }
        else
        {
            $('.btn-map').html('<i class="fas fa-map-marker"></i> Show on map');
        }
    });
}

function initializeFiltersToggle() {
    $('#btn-more').click(function () {
        if($('#btn-more i').hasClass('fa-angle-down'))
        {
            $('#btn-more').html('<i class="fas fa-angle-up"></i> Less filters');
        }
        else
        {
            $('#btn-more').html('<i class="fas fa-angle-down"></i> More filters');
        }
    });
}

function initializeMenuToggle() {
    $('#btn-menu').click(function () {
        if($('#btn-menu i').hasClass('fa-bars'))
        {
            $('#btn-menu').html('<i class="fas fa-times"></i><span> Close menu</span>');
        }
        else
        {
            $('#btn-menu').html('<i class="fas fa-bars"></i><span> Open menu</span>');
        }
    });
}

function initializeBellToggle() {
    $('.btn-bell1').click(function () {
        if($('.btn-bell1 i').hasClass('fa-bell'))
        {
            $('.btn-bell1').html('<i class="fas fa-bell-slash text-danger"></i>');
        }
        else
        {
            $('.btn-bell1').html('<i class="fas fa-bell text-success"></i>');
        }
    });
    
    $('.btn-bell2').click(function () {
        if($('.btn-bell2 i').hasClass('fa-bell'))
        {
            $('.btn-bell2').html('<i class="fas fa-bell-slash text-danger"></i>');
        }
        else
        {
            $('.btn-bell2').html('<i class="fas fa-bell text-success"></i>');
        }
    });
}

function repos(imgs) {
    imgs.each(function (i, o) {
        var imgw = $(o).width()
        var boxw = $(o).parent('div').width()
        var imgh = $(o).height()
        var boxh = $(o).parent('div').outerHeight()

        if (imgw > boxw) {
            $(o).css('left', ((imgw / 3) - (boxw / 3)) * -1)
        } else {
            $(o).css('left', 0)
        }

        if (imgh > boxh) {
            $(o).css('top', ((imgh / 3) - (boxh / 3)) * -1)
        } else {
            $(o).css('top', 0)
        }

    })
}
var sizerHelper = (function() {
    var SIZER_NAMES = [
        'small',
        'medium',
        'large'
    ];
    var DEFAULT_SIZE = 'medium';
    var FONT_SIZE_COOKIE_NAME = 'fontSize';
    var sizers = {
        small: {
            id: '#small',
            class: 'small'
        },
        medium: {
            id: '#medium',
            class: 'medium'
        },
        large: {
            id: '#large',
            class: 'large'
        }
    };

    for(sizerName in sizers) {
        $(sizers[sizerName].id).on('click', function (event) {
            event.preventDefault();
            setSize(sizerName);
        });
    }
    $("a.sizer").click(function(evt) {
        setSize(evt.target.id);
    });

    var cookieValue = Cookies.get(FONT_SIZE_COOKIE_NAME);
    setSize(isFontSize(cookieValue) ? cookieValue : DEFAULT_SIZE);

    function setSize(size) {
        var sizerObject = sizers[size];
        if (!sizerObject)
            throw 'No such a sizer object';
        var sizerElement = $(sizers[size].id);
        var excludedClasses = Object.keys(sizers).reduce(
            function (accumulator, sizerName) {
                if (sizerName !== size)
                    accumulator.push(sizers[sizerName].class);
                return accumulator;
            },
            []
        ).join(' ');

        $('body').removeClass(excludedClasses);
        $('body').addClass(sizers[size].class);
        selectSizer($(sizerObject.id));
        Cookies.set(FONT_SIZE_COOKIE_NAME, size);
    }

    function selectSizer(sizerEl) {
        $("a.sizer").removeClass("selected");
        $(sizerEl).addClass("selected"); 
    }

    function isFontSize(size) {
        for (var i = 0, length = SIZER_NAMES.length; i < length; i++) {
            if (SIZER_NAMES[i] === size)
                return true;
        }
        return false;
    }

    return {
        setSize: setSize
    };
})();