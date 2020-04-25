jQuery(document).ready(function(){ 'use strict'; jQuery("#main-menu-con ul ul").css({display: "none"}); jQuery('#main-menu-con ul li').hover( function() { jQuery(this).find('ul:first').slideDown(200).css('visibility', 'visible'); jQuery(this).addClass('selected'); }, function() { jQuery(this).find('ul:first').slideUp(200); jQuery(this).removeClass('selected'); }); });

jQuery(document).ready(function(){ 'use strict'; jQuery("ul.lboxd ul").css({display: "none"}); jQuery('ul.lboxd li').hover( function() { jQuery(this).find('ul:first').slideDown(200).css('visibility', 'visible'); jQuery(this).addClass('selected'); }, function() { jQuery(this).find('ul:first').slideUp(200); jQuery(this).removeClass('selected'); }); });

jQuery.noConflict();
// jQuery(document).ready(function(){ 'use strict'; jQuery(".box_skitter_large").skitter({ dots:true,numbers:false,preview:false,focus:false,navigation:false,controls:false,interval:5000,controls_position:"rightTop",progressbar:false});});

