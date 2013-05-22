function selectAll(element) {
	element.focus();
	element.select();
}

jQuery(document).ready(function($){
	$(".widgetInputCont .widgetSettings").on("submit", function(){
		submit_button = $(this).find('.generateCodeButton');
		$('.required').each(function(i){ // check to make sure we have all of our values
			bar = $(this).val();
			if(bar == ''){
				$(this).addClass('empty');
			}else{
				$(this).removeClass('empty');
			}
		});

		if($('.empty').length == 0){
			var grip_widget_data = {};
	 		grip_widget_data['domainName'] = $('#domainName').val();
	 		grip_widget_data['emailAddress'] = $('#emailAddress').val();
	 		grip_widget_data['linkDualDurometer'] = $('#linkDualDurometer').val();
	 		grip_widget_data['linkNDMC'] = $('#linkNDMC').val();
	 		grip_widget_data['linkNDMCWO'] = $('#linkNDMCWO').val();
	 		grip_widget_data['linkTourVelvet'] = $('#linkTourVelvet').val();
	 		grip_widget_data['linkTourVelvetBCT'] = $('#linkTourVelvetBCT').val();
	 		grip_widget_data['linkTourWrap2g'] = $('#linkTourWrap2g').val();
	 		grip_widget_data['linkVDR'] = $('#linkVDR').val();
	 		grip_widget_data['linkZgrip'] = $('#linkZgrip').val();
	 		grip_widget_data['linkZgripPatriot'] = $('#linkZgripPatriot').val();
	 		grip_widget_data['displayBanner'] = $('#displayBanner').prop('checked');
	 		grip_widget_data['linkNavigation'] = $('#linkNavigation').val();
	 		grip_widget_data['linkButtonText'] = $('#linkButtonText').val();
	 		grip_widget_data['hideEmailSub'] = $('#hideEmailSub').prop('checked');
	 		grip_widget_data['zindex'] = $('#zindex').val();
	 		
			$.ajax({
				type: 'POST',
				data: grip_widget_data,
				url: 'library/ajax/returnedData.php',
				dataType: 'json',
				success : function(response){
					$('.widgetCodeBox').text(response).html();
				},
				error : function(response){
					$('.widgetCodeBox').html('There was an error. Please try again later.');
				}
			});
			
		}
		return false;
	});
});