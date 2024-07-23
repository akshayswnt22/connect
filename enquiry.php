<HTML>
<HEAD>
	<TITLE></TITLE>
	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">
	<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="container">
	<section class="contact section">
	<div class="row">	
    	<h1><b>Inquiry Form</b></h1>
			<div class="col-lg-12">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
					<b>Full Name : </b>
                  <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter full name" required="">
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
                  <input type="date" name="date" class="form-control" id="date-info" placeholder="Date" required="">
                </div><br><br>
                <div class="col-md-12 text-center">
                  <button type="submit" id="submit-btn" value="Submit">Submit</button>
                </div>
              </div>
            </form>
    </div><!-- End enquiry Form -->
</section>
</div>
</BODY>
</HTML>
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

