
    $('.submitform').on("click",function(){

        /* submit via ajax */
    
    
            var sLoader = $('#submit-loader');
    
            $.ajax({      	
    
              type: "POST",
              url: "../formContact.php",
              data: $(".input-form").serialize(),
              beforeSend: function() { 
                $('#form').fadeOut();
                setTimeout(() => {
                  sLoader.fadeIn(); 
                }, 500);
                  
    
              },
              success: function(msg) {
    
                // Message was sent
                if (msg == 'OK') {
                    sLoader.fadeOut(); 
                   $('#message-warning').hide();
                   $('#contactForm').fadeOut();
                   $('#message-success').fadeIn();   
                }
                // There was an error
                else {
                    sLoader.fadeOut(); 
                   $('#message-warning').html(msg);
                    $('#message-warning').fadeIn();
                }
    
              },
              error: function() {
    
                  sLoader.fadeOut(); 
                  $('#message-warning').html("Une erreur s'est produite. Veuillez réessayer.");
                 $('#message-warning').fadeIn();
    
              }
    
          });     		
          
    
    });


