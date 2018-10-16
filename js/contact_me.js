$(function() {
  $('#sendMessageButton').click(function(event) {
      $('#sendMessageButton').html('Sending...');
      event.preventDefault();

      $('html, body').scrollTo($('#contact'), 'fast');
      $.ajax({
        type: 'POST',
        url: 'https://eleganza.test/core.php',
        data: $('#contactForm').serialize(),
        datatype: 'json',
        success: function(res) {

          if (res.success == '1') {
            if (res.lang == 'EN')
              window.location = "/thank_you";
            else
              window.location = "/fr/thank_you";

          } else {
            //$('#sendMessageButton').html('<i class="fa fa-send"></i> Submit');
            $('#error').html(res.msg);
            $('#error').show();
            $('#success').hide();
          }
        },
        error: function(e) {
          //$('#sendMessageButton').html('<i class="fa fa-send"></i> Submit');
          $('#error').show("Database Error. Please standby!");
          console.log(e);
        }
      });
      $('#sendMessageButton').html('Message sent Successfully');
      $('#contactForm').trigger("reset");
    });

//
//   $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
//     preventSubmit: true,
//     submitError: function($form, event, errors) {
//       // additional error messages or events
//     },
//     submitSuccess: function($form, event) {
//       event.preventDefault(); // prevent default submit behaviour
//       // get values from FORM
//       var name = $("input#name").val();
//       var email = $("input#email").val();
//       var phone = $("input#phone").val();
//       var areas = $("input#inputAreas1").val();
//       var state = $("select#state").val();
//       var agency = $("input#inputAgency1").val();
//       var refer = $("input#inputRef1").val();
//       var firstName = name; // For Success/Failure Message
//       // Check for white space in name for Success/Fail message
//       if (firstName.indexOf(' ') >= 0) {
//         firstName = name.split(' ').slice(0, -1).join(' ');
//       }
//       $this = $("#sendMessageButton");
//       $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
//       $.ajax({
//         url: "././mail/contact_me.php",
//         type: "POST",
//         data: {
//           name: name,
//           phone: phone,
//           email: email,
//           areas: areas,
//           state: state,
//           agency: agency,
//           refer: refer
//         },
//         cache: false,
//         success: function() {
//           // Success message
//           $('#success').html("<div class='alert alert-success'>");
//           $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
//             .append("</button>");
//           $('#success > .alert-success')
//             .append("<strong>Your message has been sent. </strong>");
//           $('#success > .alert-success')
//             .append('</div>');
//           //clear all fields
//           $('#contactForm').trigger("reset");
//         },
//         error: function() {
//           // Fail message
//           $('#success').html("<div class='alert alert-danger'>");
//           $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
//             .append("</button>");
//           $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
//           $('#success > .alert-danger').append('</div>');
//           //clear all fields
//           $('#contactForm').trigger("reset");
//         },
//         complete: function() {
//           setTimeout(function() {
//             $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
//           }, 1000);
//         }
//       });
//     },
//     filter: function() {
//       return $(this).is(":visible");
//     },
//   });
//
//   $("a[data-toggle=\"tab\"]").click(function(e) {
//     e.preventDefault();
//     $(this).tab("show");
//   });
// });
//
// /*When clicking on Full hide fail/success boxes */
// $('#name').focus(function() {
//   $('#success').html('');
});
