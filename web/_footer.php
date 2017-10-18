

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
	<script src="http://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>

	<script>
		$( function() {
			$( ".datepicker" ).datepicker({
			showOtherMonths: true,
			selectOtherMonths: true
			});
		});

		$(document).ready(function() {
		    $(".amount").keydown(function (e) {
		        // Allow: backspace, delete, tab, escape, enter and .
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		             // Allow: Ctrl/cmd+A
		            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
		             // Allow: Ctrl/cmd+C
		            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
		             // Allow: Ctrl/cmd+X
		            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
		             // Allow: home, end, left, right
		            (e.keyCode >= 35 && e.keyCode <= 39)) {
		                 // let it happen, don't do anything
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
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

		    $('[data-hide!=""]').on('click', function(event) {
		    	$($(this).data('hide')).addClass('hide');

		    	// $($(this).data('hide')).find('input[type="radio"]').prop('checked', false);
		    	$($(this).data('hide')).each(function(index, el) {
		    		// $(el).find('input[type="radio"]').eq(0).trigger('click');
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