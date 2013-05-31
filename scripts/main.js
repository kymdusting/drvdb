(function(){

	/*global escape: true */

	$('.bxslider').bxSlider({
		auto: true,
		autoControls: true
	});

	var Email = {

		init: function(config) {
			this.form = config.form;
			this.output = config.output;
			this.mandatory = config.mandatory;
			this.messages = config.messages;
			this.sub = this.form.find('input[type="submit"]');
			this.inputs = this.form.find('input, textarea, select, input[type!="submit"]');
			this.labels = this.form.find('label');
			this.submitform();
		},

		validateform: function() {

			var valid = true;
			this.inputs.removeClass('error');
			this.labels.removeClass('error');

			for (var i in this.mandatory) {
				var a = $(this.mandatory[i]);
				var l = $('label[for="'+this.mandatory[i].substring(1)+'"]');
				if(!a.val()) {
					// l.addClass('error');
					a.addClass('error');
					a.on('keyup', function() {
						console.log($(this).val());
						($(this).val()) ? $(this).removeClass('error') : $(this).addClass('error');
					});
					valid = false;
				}
			}
			if(!valid) {
				this.output.addClass('error').html(this.messages.invalid).delay(5000).fadeOut(1000, function() { $(this).removeClass('success');});
			}
			return valid;

		},

		submitform: function() {
			// console.log('inside the subform function');

			this.form.on('submit', $.proxy(function() {

				this.inputs.off();
				this.output.css('display', 'block').removeClass('error').addClass('waiting').html(this.messages.processing);
				var validate = this.validateform();

				if(validate) {

					// update user interface
					this.sub.val('Sending...');

					// Prepare query string and send AJAX request
					$.ajax({
						context: this,
						url: 'includes/contact.php',
						// *(* Should turn this into a loop over an array of variables
						data: 'ajax=true&name=' + escape($('#name').val()) + '&email=' + escape($('#email').val()) + '&phone=' + escape($('#phone').val()) + '&message=' + escape($('#message').val()),
						success: function(msg) {
							if(msg.substr(0,5) === 'Error') {
								this.sub.val('Try again!');
								this.output.removeClass('waiting').addClass('error').html(msg).delay(5000).fadeOut(1000, function() {$(this).removeClass('error');});
							} else {
								// *(* Need to better handle checkboxes and radio buttons
								this.output.removeClass('waiting').addClass('success').html(msg).delay(5000).fadeOut(1000, function() { $(this).removeClass('success');});
								this.inputs.val('');
								this.sub.val('All done!');
							}

						}
					});

				}

				return false; }, this));
		}
	};

	Email.init({
		form: $('.contact'),
		output: $('.response'),
		mandatory: {
			// *(* this is a bit dumb but it works
			message: '#message'
		},
		messages: {
			invalid: 'Oops! Make sure you fill out all the required fields.',
			processing: 'Email sending...'
		}
	});

	//ie8 nth-child fix
	$('.lt-ie9 .column:even').css('margin-right','2%');
	$('.lt-ie9 .column:odd').css('margin-left','2%');

	// Product Description switch
	var p = $('.product p');
	// if (window.console) console.log(p);
	p.each(function(index) {
		var that = $(this);
		// if (window.console) console.log(this);
		var a = $('<a></a>', {
			href: '#',
			text: 'Read Description'
		}).insertBefore(this);
		// if (window.console) console.log(a);
		a.on('click', function() {
			// console.log(that);
			l = $(this);
			(that.hasClass('appear')) ?
				that.slideUp(120, function(){
					that.removeClass('appear').siblings('dl, img').slideDown(120);
					l.text('Read Description');
				}) :
				that.css('display', 'none').addClass('appear').siblings('dl, img').slideUp(120, function(){
					that.slideDown(120);
					l.text('Hide Description');
				});
			return false;
		});
	});

	// Even hieght product containers
	var r = $('.product');

	r.each(function(index) {
		var that = $(this),
				tw = that.outerHeight();
		// adjust long images placement
		if (that.find('img').height() > 110) {
			that.find('img').css('margin-top','-15px');
	  }
		// get the even columns
	  if (index % 2 === 0) {
	  	var nw = that.next('.product').outerHeight();
	  	var hival = Math.max(tw,nw);
	  	if (window.console) console.log('left: '+tw+' right: '+nw+' hival: '+hival);
	  	that.css('min-height',hival);
	  	that.next('.product').css('min-height',hival);
	  }
	});

})();