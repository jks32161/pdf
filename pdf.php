<?php
/**
 * Plugin Name: PDF
 * Description: Tools to convert pages to pdf
 * Version: .1
 * Author: CSUN Undergraduate Studies
 */

//function to output button
function pdf_all_button() {
	echo '<button type="button" class="btn btn-default" id="export_pdf">';
	echo	'Download Program PDF';
	echo '</button>';
	
	?>
	<script type="text/javascript">
	(function($) {
		$(document).ready(function() {
				// when user clicks
				$('#export_pdf').click( function(){
					// the stuff we export
					var content = $('.entry-content').html();
					var title = $('.entry-title').html();
					$.ajax({
						url: '/wp-content/plugins/pdf/default.php',
						data:{ 
							content: content,
							title: title,
						},  
						type: "POST",
						success: function(data){
							 window.open(data);
						}
					});
				});
		});
	})(window.jQuery);
	</script>
<?php }

//function to output button
function pdf_fouryear_button() {
	echo '<button type="button" class="btn btn-default" id="export_pdf_fouryear">';
	echo	'Download Four Year Plan';
	echo '</button>';
	
	?>
	<script type="text/javascript">
	(function($) {
		$(document).ready(function() {
				// when user clicks
				$('#export_pdf_fouryear').click( function(){
					// the stuff we export
					var content = $('.four-year').html();
					var title = $('.entry-title').html()  + ' - Four Year Plan';
					$.ajax({
						url: '/wp-content/plugins/pdf/default.php',
						data:{ 
							content: content,
							title: title,
						},  
						type: "POST",
						success: function(data){
							 window.open(data);
						}
					});
				});
		});
	})(window.jQuery);
	</script>
<?php }

//function to output button
function pdf_star_button() {
	echo '<button type="button" class="btn btn-default" id="export_pdf_star">';
	echo	'Download Star Act Plan';
	echo '</button>';
	
	?>
	<script type="text/javascript">
	(function($) {
		$(document).ready(function() {
				// when user clicks
				$('#export_pdf_star').click( function(){
					// the stuff we export
					var content = $('.star').html();
					var title = $('.entry-title').html() + ' - Star Act';
					$.ajax({
						url: '/wp-content/plugins/pdf/default.php',
						data:{ 
							content: content,
							title: title,
						},  
						type: "POST",
						success: function(data){
							 window.open(data);
						}
					});
				});
		});
	})(window.jQuery);
	</script>
<?php }