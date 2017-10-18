

	<script src="/cnesst/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.fr.min.js"></script>
	<script src="/cnesst/js/jquery.qtip.min.js"></script>

	<script>
		$( function() {
			$( ".datepicker" ).datepicker({
				format: "yyyy-mm-dd",
    			language: 'fr'
			});
		});


		$(document).ready(function() {
		    $(".amount").keydown(function (e) {
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
		            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
		            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
		                 return;
		        }
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
		    });


		    $('[title!=""]').qtip({
		    	content: {
		    		button: true
		    	},
			    show: {
			        event: 'click',

			    },
			    hide: {
			        event: 'click'
			    }
		    });

			$('.hasTooltip').each(function() { 
			    $(this).qtip({
			    	content: {
			    		button: true,
			            text: $(this).next('div').html() 
			    	},
				    show: {
				        event: 'click',

				    },
				    hide: {
				        event: 'click'
				    }
			    });
			});	


		    $('[data-hide!=""]').on('click', function(event) {
		    	$($(this).data('hide')).addClass('hide');

		    	$($(this).data('hide')).each(function(index, el) {
		    		$(el).find('input[type="radio"]').prop('checked', false);
		    	});
		    });

		    $('[data-show!=""]').on('click', function(event) {
		    	$($(this).data('show')).removeClass('hide');
		    });

		    $('[data-characters!=""]').keyup(function(){
			        var text = $(this).val();
			        var maxlength = $(this).data('characters');

			        if(maxlength > 0)  
			        {
			                $(this).val(text.substr(0, maxlength)); 
			        }
			});

		});
	</script>

</body>
</html>