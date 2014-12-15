$(document).ready(function() {
	
	var content = "";
	
	$('body').prepend("<div class='editbox'><div class='closeedit'>X</div><p id='editheader'></p><form method='post' action='#'><textarea name='newdata' class='editer'></textarea><input type='hidden' name='clip' id='whichone' value='' /><input type='submit' name='submit' value='submit' /></form></div>");
	
	// Load data into divs
	$('.editable').each(function () {
		var clip =  $(this).attr('id');
		
		$(this).prepend("<div class='editbutton' title='"+clip+"'>#</div>");
		
		$.ajax({
			type: "POST",
			url: "get_contents.php",
			data: { clip: clip },
			cache: false
		})
			.done(function( html ) {
			$('#'+clip).append(html);
		});
	});
	
	// Load the popup editor and populate it with stuff
	$('.editbutton').on('click', function(event) {
		var clip =  $(this).parent().attr('id');
		
		$.ajax({
			type: "POST",
			url: "get_contents.php",
			data: { clip: clip },
			cache: false
		})
			.done(function( html ) {
			tinyMCE.activeEditor.setContent(html);
			$('#whichone').attr('value', clip);
			$('#editheader').html('Editing &quot;'+clip+'&quot;');
		});
		
		$('.editbox').show();
	});
	
	$('.closeedit').click(function() { $('.editbox').hide(); });
	
});