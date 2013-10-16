var vitrina_width, vitrina_item_spacing, vitrina_regal_width;
var vitrina_toggle_lock = false;
var vitrina_fadeIn_time = 1350;
var vitrina_state = 0;
    var vit_position;
$(function() {
    vit_position = parseInt($('#vit').css('left'));
    console.log(vit_position);
});

function toggleShowroom() {

	if (vitrina_toggle_lock)
		return;
	else
		vitrina_toggle_lock = true;

	var a_move = new Array(); // "main","topnavi_rechts");

	var dtime = vitrina_fadeIn_time;

	var move_x = 0;

	if (vitrina_state == 0) { // open

		$('#vit_navi').css('left', (vitrina_item_spacing + 45) + 'px');

		$('.logo').css('z-index', 128);

		$('#regal').width(vitrina_regal_width);
		$('#vit').animate({
			left : '0px'
		}, dtime);

		$('#vit_lightbox_bg').css('display', 'block');
		$('body').css('overflow', 'hidden');

		for ( var i = 0; i < a_move.length; i++) {
			var l = $('#' + a_move[i]).css('left');
			$('#' + a_move[i]).animate(
					{
						left : parseInt(l.replace('px', ''))
								+ (a_move[i] == 'vit' ? vitrina_width : move_x)
								+ 'px'
					}, dtime);
		}

		if (move_x > 0)
			$('.zoomable').each(
					function(index) {
						log("toggleVitrina(+):" + this.getAttribute('id')
								+ " (" + this.style.display + ")")
						if (this.style.display == 'block')
							$(this).animate(
									{
										'left' : parseInt(this.style.left
												.replace('px', ''))
												+ move_x + 'px'
									}, dtime);
					});




	} else { // close
		$('body').css('position', 'static');

		$('#vit').animate({
			left : vit_position + 'px'
		}, dtime);

		for ( var i = 0; i < a_move.length; i++) {
			var l = $('#' + a_move[i]).css('left');
			$('#' + a_move[i]).animate(
					{
						left : parseInt(l.replace('px', ''))
								- (a_move[i] == 'vit' ? 100 : move_x)
								+ 'px'
					}, dtime);
		}

		if (move_x > 0)
			$('.zoomable').each(
					function(index) {
						log("toggleVitrina(-):" + this.getAttribute('id')
								+ " (" + this.style.display + ")")
						if (this.style.display == 'block')
							$(this).animate(
									{
										left : parseInt(this.style.left
												.replace('px', ''))
												- move_x + 'px'
									}, dtime);
					});

		setTimeout(
				"gw_submit_lock=false;$('.logo').css('z-index',32);$('body').css('overflow','visible');$('#vit_lightbox_bg').css('display','none');",
				(vitrina_fadeIn_time - 200));

	}

	setTimeout("vitrina_toggle_lock = false", dtime + 1);

	vitrina_state = 1 - vitrina_state; // toggle

}
