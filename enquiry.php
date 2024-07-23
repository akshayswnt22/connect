<!--<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
-->
<HTML>
<HEAD>
	
<TITLE></TITLE>

<!--<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
-->

<link  rel="stylesheet" href="style.css">

<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="form-container">
			
			<div class="">
				<form name="form" action="" method="post"
					onsubmit="return formValidation()">
					<div class="form-heading">Inquairi Form</div>
		<!--	<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
            -->


            <h1><b>Inquiry Form</b></h1>
				
			<div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
					<b>Full Name : </b>
                  <input type="text" name="fullname" class="form-control" id="fullname-info" placeholder="Enter full name" required="">
                </div><br>

				<div class="col-md-6">
				<b>Mobile No. : </b>
                  <input type="text" name="mobile" class="form-control" id="mobile-info" placeholder="Enter mobile no" required="">
                </div><br>

                <div class="col-md-6 ">
				<b>Email : </b>
                  <input type="email" class="form-control" name="email" id="email-info" placeholder="Enter email" required="">
                </div><br>

                <div class="col-md-12">
				<b>College Name : </b>
                  <input type="text" class="form-control" name="clgname" id="clgname-info" placeholder="Enter college name" required="">
                </div><br>

                <div class="col-md-12">
				<b>Branch Name : </b>
                  <input type="text" class="form-control" name="branchname" id="branchname-info" placeholder="Enter branch name" required=""></textarea>
                </div><br>
                  
				<div class="col-md-6">
				<b>Date : </b>
                  <input type="text" name="date" class="form-control" id="date-info
				  mnbmm" placeholder="Date" required="">
                </div><br><br>

                <div class="col-md-12 text-center">
                  <button type="submit" id="submit-btn" value="Submit">Submit</button>
                </div>

              </div>
            </form>
          </div><!-- End enquiry Form -->










		</div>
	</div>



	<script>
function formValidation() {
	var valid = true;

	$("#fullname").removeClass("error-field");
    $("#mobile").removeClass("error-field");
	$("#email").removeClass("error-field");
    $("#clgname").removeClass("error-field");
    $("#branchname").removeClass("error-field");
    $("#date").removeClass("error-field");
	

	var FullName = $("#fullname").val();
	var MobileNo = $("#mobile").val();
	var email = $("#email").val();
    var ClgName = $("#clgname").val();
    var BranchName = $("#branchname").val();
    var Date = $("#date").val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#fullname-info").html("").hide();
	$("#email-info").html("").hide();

	if (FullName.trim() == "") {
		$("#fullname-info").html("required.").css("color", "#ee0000").show();
		$("#fullname").addClass("error-field");
		valid = false;
	}
     
    if (MobileNo.trim() == "") {
		$("#mobile-info").html("required.").css("color", "#ee0000").show();
		$("#mobile").addClass("error-field");
		valid = false;
	}



    if (ClgName.trim() == "") {
		$("#clgname-info").html("required.").css("color", "#ee0000").show();
		$("#clgname").addClass("error-field");
		valid = false;
	}


    if (BranchName.trim() == "") {
		$("#branchname-info").html("required.").css("color", "#ee0000").show();
		$("#branchname").addClass("error-field");
		valid = false;
	}
 

    if (Date.trim() == "") {
		$("#date-info").html("required.").css("color", "#ee0000").show();
		$("#date").addClass("error-field");
		valid = false;
	}



	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}



 /*
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}

	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
*/

	return valid;


}
</script>
</BODY>
</HTML>
