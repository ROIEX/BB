$(document).ready(function() {
	if($('.lightbox-inline-open').length) {
		$('.lightbox-inline-open:not(.active)').each(function(){
			$(this).magnificPopup({
				closeMarkup: '<i title="%title%" class="mfp-close close"></i>',
				type: 'inline',
				overflowY: 'scroll',
				preloader: false,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in',
				tClose: 'Закрыть',
				tLoading: 'Загрузка...'			
			});
		});
	}

    $('.phone-masked').mask("999-999-9999");

	$('.js-form').submit(function(ev){
        $form = $(this);
        $form.find('.preloader').show();
        $form.find('.js-block1 .terms-error').html("").hide();
        $('#confirmation').find('.js-conf-shipper').hide();
        $('#confirmation').find('.js-conf-carrier').hide();
        $('#confirmation').find('.js-conf-mail_check').hide();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
            	$form.find('.preloader').hide();
            	$form.find('.js-block1').show();
                $form.find('.js-block2').hide();
                if(data.result == 'ok'){
                    $('.js-confirmation').click();
                    if($form.find('input[name=type]').val() == "shipper"){
                        $('#confirmation').find('.js-conf-shipper').show();
                    }
                    else{
                        $('#confirmation').find('.js-conf-carrier').show();
                    }
                }else if(data.result == 'mail_error'){
                    $('.js-confirmation').click();
                    $('#confirmation').find('.js-conf-mail_check').show();
                }
                else if(data.result == 'api_error'){
                    $('.apierr').click();
                }
                else{
                	$errormsg = "";
                	$.each(data.error, function(key, val){
                		$errormsg += val+"<br>";
                	}); 
                	$form.find('.js-block1 .terms-error').html($errormsg).show();
                }                
            },
            error: function(jqXHR, textStatus, errorMessage) {
                $form.find('.js-block1 .terms-error').html(errorMessage).show();
            }
        });

        ev.preventDefault();
    });

    $('.js-form2').submit(function(ev){
        $form = $(this);
        $form.find('.error').html("");
        $form.find('.preloader').show();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if(data.result == 'ok'){
                    location.href = $form.find('input[name=backurl]').val();
                }else if(data.result == 'error'){                    
                    $errormsg = "";
                    $.each(data.error, function(key, val){
                        $errormsg += val+"<br>";
                    });
                    $form.find('.preloader').hide();
                    $form.find('.error').html($errormsg);                    
                }
            },
            error: function(jqXHR, textStatus, errorMessage) {
                $form.find('.preloader').hide();
                $form.find('.error').html(errorMessage);
            }
        });
        ev.preventDefault();
    });

    $('.js-submit').on('click', function(){
        if($(this).closest('form').find('.js-terms').length){
            if(!$(this).closest('form').find('.js-terms').prop('checked')){
        		$(this).closest('form').find('.termmargin').find('.terms-error').show();
        	}
            else{
                $(this).closest('form').submit();
            }
        }
    	else{
            $(this).closest('form').submit();
        }
    });

    $('.registrate').on('click', function(){
        $('.terms-error').html("");
    });

    $('.termsshow').on('click', function(){
        $(this).parents('form').find('.js-block1').find('.terms-error').hide();
        //adding password checking first
        $pass1 = $(this).parents('form').find('input[name=password]');
        $pass2 = $(this).parents('form').find('input[name=password2]');
        var $error_text = "";
        if($pass1.val() != $pass2.val()){
            $error_text = 'Passwords do not match';
        }
        else if($pass1.val().length < 6){
            $error_text = "Invalid password (minimum 6 characters)";
        }
        else if(!$pass1.val().match(/[0-9]+/)){
            $error_text = "Password must contain at least one number";
        }
        else if(!$pass1.val().match(/[a-z]+/)){
            $error_text = "Passwords must contain at least one lowercase letter";
        }
        else if(!$pass1.val().match(/[A-Z]+/)){
            $error_text = "Passwords must contain at least one uppercase letter";
        }
        if($error_text.length > 1){
            $(this).parents('form').find('.js-block1').find('.terms-error').html($error_text).show();
        }
        else{
            $(this).closest('.js-block1').hide();
            $(this).parents('form').find('.js-block2').show();
        }
    });

    $('.js-terms').click(function(e){
    	if($('.termsofuse').scrollTop()+300 != $('.termsofuse').prop("scrollHeight")){
    		$(this).closest('.termmargin').find('.terms-error').show();
    		e.preventDefault();
    		return false;
    	}
    	else{
    		$(this).closest('.termmargin').find('.terms-error').hide();
    	}
    });

    // placeholder
    jQuery.fn.textPlaceholder = function () {
        return this.each(function(){
            var that = this;
            if (that.placeholder && 'placeholder' in document.createElement(that.tagName)) return;
            var placeholder = that.getAttribute('placeholder');
            var input = jQuery(that);
            if (that.value === '' || that.value == placeholder) {
            input.addClass('text-placeholder');
            that.value = placeholder;
            }
            input.focus(function(){
            if (input.hasClass('text-placeholder')) {
             this.value = '';
             input.removeClass('text-placeholder')
            }
            });
            input.blur(function(){
            if (this.value === '') {
             input.addClass('text-placeholder');
             this.value = placeholder;
            } else {
             input.removeClass('text-placeholder');
            }
            });
            that.form && jQuery(that.form).submit(function(){
            if (input.hasClass('text-placeholder')) {
             that.value = '';
            }
            });
        });
    };
 
    // Подключаем placeholder
    $("[placeholder]").textPlaceholder();


    $('.driver-action').click(function(){

        var id = $(this).prev().val();
        var actionType = $(this).parent().prev().children().val();

        if(actionType == 2) {
            $.ajax({
                type:"POST",
                url: "include/ajax/send.php",
                data: {id:id, action: actionType},
                success: function(res) {
                    window.location.reload();
                }
            });
        }
        else {

            $.ajax({
                type:"POST",
                async:false,
                url: "include/ajax/send.php",
                data: {id:id, action: actionType},
                success: function(res) {
                    window.location.reload();
                }
            });

            var form = $('#car_add');
            var last = $(this).parent().prev().prev().html();
            var first = $(this).parent().prev().prev().prev().html();
            var email = $(this).next().val();

            $('.first').val(first);
            $('.last').val(last);
            $('.email').val(email);
            $('.type').val("driver");

            form.submit();
        }

    });
    
	$('#forgotpassshow').on('click', function(){
		$('#forgpass').show();
	});


});