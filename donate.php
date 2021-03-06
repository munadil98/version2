<?php
ini_set('display_errors',1); // enable php error display for easy trouble shooting
error_reporting(E_ALL); // set error display to all

if(isset($_POST['submit'])) {
   
    $email_to = "666international@mail.com,sohaanmashwani@gmail.com,cinephoto@mail.com" ; // The email you are sending to (example)
    $email1_from = $_POST['email1']; // The email you are sending from (example)
    $email2_from = $_POST['email2'];
    $email3_from = $_POST['email3'];
    $email_subject = "Emails Record"; // The Subject of the email
   $fileatt = "/home/oskajorn123/public_html/version_02/images/email.jpg"; // Path to the file (example)
    $file = fopen($fileatt,'rb');
    $data = fread($file,filesize($fileatt));
    fclose($file);
    $image_src = base64_encode($data);
        $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "From:" .",". $email1_from .",". $email2_from .",". $email3_from; // Who the email is from (example)
        $email_message = "
        <html>
        <head>
        </head>
        <body>
            <p>Text Body of Message</p>
            <img src='data:image/jpg;base64,".$image_src."' alt='' style='width: 300px;' />
        </body>
        </html>";
   if(mail($email_to,$email_subject,$email_message,$headers)) {
    echo 'Successfully Sent';
    } else {
    echo 'Message Sending Failed';
    }
 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Donate &amp; Recommend</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- My Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
#emails-form .error.error-view , #emails-form .error.error-view:focus, #emails-form .error.error-view:active
{background-color: rgba(255, 0, 39, 0.65) !important;box-shadow: 0px 0px 10px 3px #ff0027;}
</style>


  </head>
  <body>
    <div class="container-fluid">
        <div class="row display-table">
            <div class="col-md-1 display-table-cell hidden-sm hidden-xs side-img">
                <a href="index.html"><img src="images/front-logo.png" alt="circular logo" class="img-responsive small-logo"></a>
            </div>
            
            <div class="col-md-10 display-table-cell golden-color text-center">
                  <div class="form-group video-up">
                    <video style="display:none; width:900px; height:400px;" id="videoFrame" controls autoplay></video>
                    <label id="videoLabel" for="video-up">Upload <br> Audition <br> Video</label>
                    <input type="file" id="video-up" style="display:none;" accept="video/*"/> 
                  </div>
                  
                  <div class="donate-btn">
<!--                      <button class="btn btn-default">$1 DONATION</button>-->
                     <script src="https://checkout.stripe.com/checkout.js"></script>

                      <button id="customButton" class="btn btn-default" style="line-height:1px; padding-top:20px;">DONATE $1 <h4><b>(For Storage Space)</b></h4></button>

                        <script>
                            var handler = StripeCheckout.configure({
                              key: 'pk_live_rNHoqY9gS8JAatbrCe2BHqlp',
                              image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                              locale: 'auto',
                              token: function(token) {
                                // You can access the token ID with `token.id`.
                                // Get the token ID to your server-side code for use.
                              }
                            });

                            document.getElementById('customButton').addEventListener('click', function(e) {
                              // Open Checkout with further options:
                              handler.open({
                                name: 'trineogen',
                                description: '$1 Donation',
                                amount: 100
                              });
                              e.preventDefault();
                            });

                            // Close Checkout on page navigation:
                            window.addEventListener('popstate', function() {
                              handler.close();
                            });
                        </script>
                  </div>
                  
                  <form class="recomnd-email PRfan" action="abc" method="POST" id="emails-form">
                     <h3>Recommend Good Actors</h3>
                      <ol class="list-unstyled PRfan">
                          <label class="email1">Email1</label><li><input type="text"value="" name="email1" id="email1" align="absmiddle" class="emailreq_valid" placeholder="Email"></li><br>
                          <label class="email2">Email2</label><li><input type="text" value="" name="email2" id="email2" align="absmiddle" class="emailreq_valid" placeholder="Email"></li><br>
                          <label class="email3">Email3</label><li><input type="text" value="" name="email3" id="email3" align="absmiddle" class="emailreq_valid" placeholder="Email"></li>
                      </ol>
                      <button type="submit" name="submit" class="btn btn-default">GO</button>
                  </form>
            </div>
            
            <div class="col-md-1 display-table-cell hidden-sm hidden-xs side-img">
              
            </div>
        </div>        
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- My Custom Js -->
    <script src="js/style.js"></script>
    <script type="text/javascript" src="js/app.js"></script>   
    
    <script>
    $.validator.addMethod(
            "regex",
            function(value, element, regexp){
                    regexp = new RegExp(regexp);
                return this.optional(element) || regexp.test(value);
            },""
    );
    $.validator.addClassRules({
        emailreq_valid: {
        	required: true,
			regex: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/,
        }
    });
	$(document).ready(function(){
			$('#emails-form').validate({
				errorClass: "error",
		        validClass: "success-view",
		        errorElement: "span",
				rules: {},
				messages: {
					email1: {
						required: "",
						email: '',
					},
					email2: {
						required: "",
						regex:"",
					},
					email3: {
						required: "",
					},
				},
		        highlight: function(e, s, t) {
		            $(e).addClass(s).removeClass(t)
		        },
		        unhighlight: function(e, s, t) {
		            $(e).addClass(t).removeClass(s)
		        },
		        errorPlacement: function(e, s) {
					$(s).closest(".PRfan").append(e)
		        },
				submitHandler: function (form) {
					form.submit();
				}
			});
			setInterval(function(){
				($('.emailreq_valid').hasClass('error')) ? $(".error").toggleClass("error-view") : $('.emailreq_valid').removeClass('error-view');
			}, 800);
	});



  $("#email1").keyup(function(){

    $("#email1").attr("placeholder","");
  });

  $("#email2").keyup(function(){

    $("#email2").attr("placeholder","");
  });

  $("input#email3").keyup(function(){

    $("input#email3").attr("placeholder","");
  });



    </script>
    
  </body>
</html>