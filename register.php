<!-- <?php
ini_set('display_errors',1); // enable php error display for easy trouble shooting
error_reporting(E_ALL); // set error display to all

include 'connection/connection.php';
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Austin | Jones</title>

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
      <script <s></s>rc="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
	#registration .error.error-view , #registration .error.error-view:focus, #registration .error.error-view:active
	{background-color: rgba(255, 0, 39, 0.65) !important;box-shadow: 0px 0px 10px 3px #ff0027;}
	</style>
    
    
  </head>
  <body>
    <div class="container-fluid">
        <div class="row display-table">
            <div class="col-md-1 display-table-cell hidden-sm hidden-xs side-img">
                
            </div>

            <div class="col-md-10 display-table-cell wrapper grayish-color">
                <div class="col-md-2 sidebars" style="text-align=center;">
                    <center><h3><u>History</u></h3></center>
                </div>
                <div class="col-md-8 text-center middle-contents">
	            <div class="col-md-3">
			<div class="tab">
                               <u>Society</u>
		        </div>
                    </div>
					<form name="registration" id="registration" action="addmember.php" method="post" enctype="multipart/form-data"class="has-valid">
                    <div class="col-md-6 photo-up-height">
                          <div class="img">
                               <img src="images/logo-1.png" alt="circular logo"/>

                           </div>
                         <div  class="form-group photo-up text-center">
                            <label id="imageUploadLabel" class="image_req error" style="line-height:1.3em;margin-top:30px; letter-spacing:0.1em;" for="photo-up">UPLOAD <br> SELF <br> PHOTO</label>

                            <input style="display:none;" type="file" class="form-control" name="picture" id="photo-up">
                            <p class="help-block display-hidden">Video size can be max 100mb</p>
                            <div>
                            <img width="100px" height="110px" id="profileImage"  src="" class="img-circle img-cc">
                            </div>
                        </div>
                    </div>
			<div class="col-md-3">
			   <div class="tab">
                               <u>Balance</u>
		           </div>
                    </div>
                    
                    <div class="red-btns">
                        <div class="row">
                          <div class="col-md-4 col-sm-4 col-xs-4">
                               <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-dob-modal-sm">BIRTH</button>

                                <div class="modal fade bs-dob-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2">
                                        <div class="control-group">
                                          <label for="dob-day" class="control-label">Date of birth</label>
                                          <div class="controls">
                                            <select class="dob-style" name="dob-day" id="dob-day">
                                              <option value="">Day</option>
                                              <option value="">---</option>
											 
											 <?php
											  	for($i=1; $i<=31; $i++){
													echo"<option value=$i>$i</option>";
												} 
											  ?>
                                            </select>
                                            <select class="dob-style" name="dob-month" id="dob-month">
                                              <option value="">Month</option>
                                              <option value="">-----</option>
											  <?php
											  $months = array(
																'January',
																'February',
																'March',
																'April',
																'May',
																'June',
																'July ',
																'August',
																'September',
																'October',
																'November',
																'December',
															);
											  	for($i=0; $i<=11; $i++){ ?>
														
													<option value= <?php echo $months[$i];?> > <?php echo $months[$i];?> </option>
												<?php } 
											  ?>
                                             </select>
                                            <select class="dob-style" name="dob-year" id="dob-year">
                                              <option value="">Year</option>
                                      
											 <?php
											  	for($i=2017; $i>=1900; $i--){
													echo"<option value=$i>$i</option>";
												} 
											  ?>
                                             </select>
                                          </div>
                                        </div>
                                        <!-- <button class="btn btn-default modal-btn">Submit</button> -->
                                        <br>
                                        <button class="my-btn btn btn-default" data-dismiss="modal">Save</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                            <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-leng-modal-sm">LANGUAGE</button>
                            <div class="modal fade bs-leng-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2 adrs-inpt-gen">
                                        <div class="control-group">
                                            <label for="dob-leng" class="control-label">SELECT A LANGUAGE</label>
                                            <div class="controls">
                                                <select class="dob-style" name="dob-leng" id="dob-leng">
                                                    <option value="Chinese" name="Chinese">Chinese</option>
                                                    <option value="Spanish" name="Spanish">Spanish</option>
                                                    <option value="English" name="English" >English</option>
                                                    <option value="French" name="French">French</option>
                                                </select>
                                            </div>
                                            <br>
                                            <button type="button" class="my-btn btn btn-default margin-btm-15" data-dismiss="modal">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-phone-modal-sm">PHONE</button>

                                <div class="modal fade bs-phone-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2">
                                        <ul class="list-inline phn-nmbr">
                                            <li class="c-code"><input maxlength="3" name="ph1" type="text" id="ph1" placeholder="+CC"></li>
                                            <li>-</li>
                                            <li class="nmbr"><input type="text" name="ph2" id="ph2" placeholder="Number"></li>
                                        </ul>
                                        <!-- <button class="btn btn-default modal-btn margin-btm-15">Submit</button> -->
                                        <button class="my-btn btn btn-default" data-dismiss="modal">Save</button>
                                    </div>
                                  </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                 <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-ethic-modal-sm">GENEALOGY</button>
                                <div class="modal fade bs-ethic-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2 adrs-inpt-gen">
                                        <select class="dob-style" name="genealogy" id="genealogy">
										<option value="">Select</option>
                                         <option value="father" name="father">Father</option>
                                         <option value="mother" name="mother">Mother</option>
                                          <option value="you" name="you">You</option></select>
                                                </select></br> </br>
                                        <!-- <button class="btn btn-default modal-btn margin-btm-15">Submit</button> -->
                                        <button class="my-btn btn btn-default" data-dismiss="modal">Save</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                 <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-name-modal-sm">NAME</button>
                                <div class="modal fade bs-name-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2 adrs-inpt">
                                        <ul class="list-unstyled">
                                            <li><input type="text" name="first" id="" placeholder="First Name"></li>
                                            <li><input type="text" name="second" id=""placeholder="Middle Name"></li>
                                            <li><input type="text" name="family" id="" placeholder="Family Name"></li>
                                        </ul>
                                        <!-- <button class="btn btn-default modal-btn margin-btm-15">Submit</button> -->
                                        <button class="my-btn btn btn-default" data-dismiss="modal">Save</button>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-address-modal-sm">ADDRESS</button>
                                <div class="modal fade bs-address-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2 adrs-inpt">
                                        <ul class="list-unstyled">
                                            <li><input type="text" name="number"  placeholder="Number"></li>
                                            <li><input type="text" name="street" placeholder="Street"></li>
                                            <li><input type="text" name="district" placeholder="District"></li>
                                            <li><input type="text" name="country" placeholder="Country"></li>
                                            <li><input type="text" name="postcode" placeholder="Postcode"></li>
                                        </ul>
                                        <!-- <button class="btn btn-default modal-btn margin-btm-15">Submit</button> -->
                                        <button class="my-btn btn btn-default" data-dismiss="modal">Save</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                            <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-food-modal-sm">CONSUMPTION</button>
                            <div class="modal fade bs-food-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content transparent-models-2 adrs-inpt">
                                        <div class="control-group">
                                            
                                            <div class="controls">
                                                <select class="dob-style" name="dob-food" id="dob-food">
                                                    <option value="SENTINEL CORPSE EATER">SENTINEL CORPSE EATER</option>
                                                    <option value="SPIRITUALLY CLEAN VEGETARIAN">SPIRITUALLY CLEAN VEGETARIAN</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <button type="button" class="my-btn btn btn-default margin-btm-15" data-dismiss="modal">Save</button>
                                        <!-- <button class="btn btn-default modal-btn margin-btm-15">Submit</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                            <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-sex-modal-sm">SEX</button>
                            <div class="modal fade bs-sex-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2 adrs-inpt">
                                        <div class="control-group">
                                            
                                            <div class="controls">
                                                <select class="dob-style" name="dob-sex" id="dob-sex">
                                                    
                                                    <option value="X-X chromosome">X-X chromosome</option>
                                                    <option value="X-Y chromosome">X-Y chromosome</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <br>
                                        <button type="button" class="my-btn btn btn-default margin-btm-15" data-dismiss="modal">Save</button>
                                        <!-- <button class="btn btn-default modal-btn margin-btm-15">Submit</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-4 col-sm-4 col-xs-4">
                               <button type="button" class="btn btn-default red-btn" data-toggle="modal" data-target=".bs-others-modal-sm">OCCUPATION</button>
                                <div class="modal fade bs-others-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content transparent-models-2 adrs-inpt">
                                        <ul class="list-unstyled">
                                            <li><input type="text" name="occupation" id="occupation" placeholder="Occupation Name"></li>
                                        </ul>
                                        <!-- <button class="btn btn-default modal-btn margin-btm-15">Submit</button> -->
                                        <button class="my-btn btn btn-default" data-dismiss="modal">Save</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-panel clearfix">
                        <div class="low-con-up" style="background-image: url(images/logo email.png)">
                       </div>
                        
          
<ul class="input-field list-inline " style="border: 4px solid #CAB474; border-radius: 8px; height:70px; margin-top:10px; width:630px; margin-left:10px;">
<?php /*<a href="email/index.php"><img alt="xyz" class="img-responsive" src="images/logo email1.png" style="position:relative; width:700px;margin-top:-35px; margin-left: 32px;" /> </a>*/?>
	<spna><li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 25px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 58px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 90px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 125px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 158px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 190px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 224px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 257px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	<li> <input maxlength="1" type="text" style="color: #EFE187;margin-top: -70px;margin-left: 290px; width: 30px; height: 30px; background-color:transparent;padding-left:0px;" placeholder="" /></li>
	</span>
	</ul>
     
                        <div class="low-con-down form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control test-area-custom" name="comment" rows="9" id="comment"></textarea>
                        </div>
                        <div class="click-button text-center">
                          <button class="my-btn btn btn-default" id="save" type="submit" name="submit">SAVE</button>
                        </div>
					</form>
					</div>
				
					<!--
					<div class="click-button text-center">
						<a href="#">Print</a>
					</div>
					-->
                </div>
                <div class="col-md-2 sidebars">
                    <center><h3><u>Products</u></h3></center>
                </div>
            </div>

            <div class="col-md-1 display-table-cell hidden-sm hidden-xs side-img">
              <div class="icon icon-1">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- My Custom Js -->
    <script src="js/style.js"></script>
    
    <script>
    $(document).ready(function(){
		$('#registration').validate({
			errorClass: "error",
	        validClass: "success-view",
	        errorElement: "span",
			rules: {},
			messages: {},
	        highlight: function(e, s, t) {
	            $(e).addClass(s).removeClass(t)
	        },
	        unhighlight: function(e, s, t) {
	            $(e).addClass(t).removeClass(s)
	        },
	        errorPlacement: function(e, s) {
				$(s).closest(".has-valid").append(e)
	        },
			submitHandler: function (form) {
				var validator = $("#registration").validate();
				if($("#photo-up").val()==""){				
                	validator.showErrors({ "picture" : "" });
				}else{
					var val = $("#photo-up").val();
				    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
				        case 'gif': case 'jpg': case 'jpeg': case 'png':
				            form.submit();
				            break;
				        default:
				            break;
				    }
				}
			} 
		});
		setInterval(function(){
			($('#photo-up').hasClass('error')) ? $(".error").toggleClass("error-view") : $('.image_req').removeClass('error-view');
		}, 800);
	});
    </script>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>    
<script src="js/app.js"></script>
  </body>
</html>
