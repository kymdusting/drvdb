(function() {
  $(".bxslider").bxSlider({
    auto: !0,
    autoControls: !0
  });
  var e = {
    init: function(e) {
      this.form = e.form;
      this.output = e.output;
      this.mandatory = e.mandatory;
      this.messages = e.messages;
      this.sub = this.form.find('input[type="submit"]');
      this.inputs = this.form.find('input, textarea, select, input[type!="submit"]');
      this.labels = this.form.find("label");
      this.submitform();
    },
    validateform: function() {
      var e = !0;
      this.inputs.removeClass("error");
      this.labels.removeClass("error");
      for (var t in this.mandatory) {
        var n = $(this.mandatory[t]), r = $('label[for="' + this.mandatory[t].substring(1) + '"]');
        if (!n.val()) {
          n.addClass("error");
          n.on("keyup", function() {
            console.log($(this).val());
            $(this).val() ? $(this).removeClass("error") : $(this).addClass("error");
          });
          e = !1;
        }
      }
      e || this.output.addClass("error").html(this.messages.invalid).delay(5e3).fadeOut(1e3, function() {
        $(this).removeClass("success");
      });
      return e;
    },
    submitform: function() {
      this.form.on("submit", $.proxy(function() {
        this.inputs.off();
        this.output.css("display", "block").removeClass("error").addClass("waiting").html(this.messages.processing);
        var e = this.validateform();
        if (e) {
          this.sub.val("Sending...");
          $.ajax({
            context: this,
            url: "includes/contact.php",
            data: "ajax=true&name=" + escape($("#name").val()) + "&email=" + escape($("#email").val()) + "&phone=" + escape($("#phone").val()) + "&message=" + escape($("#message").val()),
            success: function(e) {
              if (e.substr(0, 5) === "Error") {
                this.sub.val("Try again!");
                this.output.removeClass("waiting").addClass("error").html(e).delay(5e3).fadeOut(1e3, function() {
                  $(this).removeClass("error");
                });
              } else {
                this.output.removeClass("waiting").addClass("success").html(e).delay(5e3).fadeOut(1e3, function() {
                  $(this).removeClass("success");
                });
                this.inputs.val("");
                this.sub.val("All done!");
              }
            }
          });
        }
        return !1;
      }, this));
    }
  };
  e.init({
    form: $(".contact"),
    output: $(".response"),
    mandatory: {
      message: "#message"
    },
    messages: {
      invalid: "Oops! Make sure you fill out all the required fields.",
      processing: "Email sending..."
    }
  });
})();