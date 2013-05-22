<!doctype html>
<html>
<head>
<title>Test</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$(".form").on("submit", function(){
		
		var input_data = {};
	 		input_data['before'] = $('#before').val();
	 		console.log
		$.ajax({
			type: 'POST',
			data: input_data,
			url: 'hash.php',
			dataType: 'json',
			success : function(response){
				$('.output').text(response).html();
			},
			error : function(response){
				$('.output').html('There was an error. Please try again later.');
			}
		});
		return false;
	});
});
</script>
<?php



?>
</head>
<body>
	
<form action="" method="post" class="form">
	<input type="text" id="before">
	<input type="submit" class="submitButton" id="submit">
</form>

<textarea name="output" id="output" cols="30" rows="10" class="output">
</textarea>
</body>
</html>