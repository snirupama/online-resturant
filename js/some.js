window.randomize = function() {
		$('.radial-progress').each(function() {
			var transform_styles = ['-webkit-transform', '-ms-transform', 'transform'];
      $(this).find('span').fadeTo('slow', 1);
			var score = $(this).data('score');
			var deg = (((100 / 5) * score) / 100) * 180;
			var rotation = deg;
			var fill_rotation = rotation;
			var fix_rotation = rotation * 2;
			for(i in transform_styles) {
				$(this).find('.circle .fill, .circle .mask.full').css(transform_styles[i], 'rotate(' + fill_rotation + 'deg)');
				$(this).find('.circle .fill.fix').css(transform_styles[i], 'rotate(' + fix_rotation + 'deg)');
			}
		});
	}
	setTimeout(window.randomize, 200); 
