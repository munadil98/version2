<?php
ini_set('display_errors',1); // enable php error display for easy trouble shooting
error_reporting(E_ALL); // set error display to all


if(isset($_POST['submit']))
{

$email1 = $_POST['email1'];
 $email2 = $_POST['email2'];
 $email3 = $_POST['email3'];
   $to = 'sohaanmashwani@gmail.com', 'naseer902000@yahoo.com';
    $subject = 'Emails record';
    $message =  $email1 .','. $email2 .','. $email3;
   $headers  = '';
	$email_message = "
        <html>
        <head>
        </head>
        <body>
            <p> this is the text body </p>
  
        </body>
        </html>";
	
	
  if(mail($to, $subject, $message, $headers, $email_message)){

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
                  
                  <form class="recomnd-email" action="" method="POST">
                     <h3>Recommend Good Actors</h3>
                      <ol class="list-unstyled">
                          Email1<li><input type="email1"value="@" name="email1" align="absmiddle"></li><br>
                          Email2<li><input type="email2" value="@" name="email2" align="absmiddle" ></li><br>
						  
                          Email3<li><input type="email3" value="@" name="email3" align="absmiddle"></li>
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
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- My Custom Js -->
    <script src="js/style.js"></script>
    
  </body>
</html>