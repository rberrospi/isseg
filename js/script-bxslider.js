jQuery(document).ready(function($){$('.bxslider').bxSlider({pager:false,auto:true,autoHover:true,speed:1000,pause:5000,video:true,onSliderLoad:function(){$('video').trigger('play');}});});