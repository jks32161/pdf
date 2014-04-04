<?php
/**
 * Plugin Name: PDF
 * Description: Tools to convert pages to pdf
 * Version: 1.0
 * Author: CSUN Undergraduate Studies
 */

//function to output button
function pdf_all_button() {	?>
	<span class="no-line" href="" alt="download" title="Download this page.">
		<span id="export_pdf" class="glyphicon glyphicon-cloud-download share-icon"></span>
	</span>
	

	<script type="text/javascript">
	(function($) {
		$(document).ready(function() {
				// when user clicks
				$('#export_pdf').click( function(){
					//fix popup blockers
					var win = window.open('');
					window.oldOpen = window.open;
					window.open = function(url) { // reassignment function
						win.location = url;
						window.open = oldOpen;
						win.focus();
					}
					
					// the stuff we export
					var content = $('#inset-content').html();
					var title = $('.inner-title').html();
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
					//fix popup blockers
					var win = window.open('');
					window.oldOpen = window.open;
					window.open = function(url) { // reassignment function
						win.location = url;
						window.open = oldOpen;
						win.focus();
					}
					
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
					//fix popup blockers
					var win = window.open('');
					window.oldOpen = window.open;
					window.open = function(url) { // reassignment function
						win.location = url;
						window.open = oldOpen;
						win.focus();
					}
					
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