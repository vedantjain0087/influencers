
<footer class="footer section-dark">
    <div class="container" style="padding-top: 24px;">
        <div class="row">
            <div class="col-md-4">
                <h2 style="font-weight: 700;">About us</h2>
                <br>
                <li style="list-style: none;"><a style="color: #fff; font-weight: 700;" href="#">About us</a></li>
                <li style="list-style: none;"><a style="color: #fff; font-weight: 700;" href="#">Our Team</a></li>
                <li style="list-style: none;"><a style="color: #fff; font-weight: 700;" href="#">Our supporters</a></li>
            </div>

            <div class="col-md-4">
                <h2 style="font-weight: 700;">Support</h2>
                <br>
                <li style="list-style: none;"><a style="color: #fff; font-weight: 700;" href="#">Help</a></li>
                <li style="list-style: none;"><a style="color: #fff; font-weight: 700;" href="#">FAQ</a></li>
                <li style="list-style: none;"><a style="color: #fff; font-weight: 700;" href="#">Donate</a></li>
            </div>

            <div class="col-md-4">
                <h2 style="font-weight: 700;">Connect</h2>
                <br>
                <div style="margin-left: -36px; display: flex; flex-direction: row; justify-content: space-evenly;">
                    <a href="#" style="font-size: 32px; color: #fff;"><i class="fa fa-instagram"></i></a>
                    <a href="#" style="font-size: 32px; color: #fff;"><i class="fa fa-facebook"></i></a>
                    <a href="#" style="font-size: 32px; color: #fff;"><i class="fa fa-github"></i></a>
                    <a href="#" style="font-size: 32px; color: #fff;"><i class="fa fa-twitter"></i></a>
                </div>
                <br>
                <a style="font-size: 16px; color: #fff; font-weight: 700;" href="mailto:fosskiet@gmail.com">Mail us at: official@kiet.edu</a>
            </div>

            <div class="col-lg-12">
                <h2 style="font-weight: 700; color: #fff;">Subscribe for the newsletter</h2>
                <br>
                <!-- <div class="form-group">
                    <input type="text" style="width: 360px; color: #333; font-weight: 700; border-radius: 4px; padding: 8px; border-color: #fff; margin-bottom: 16px; margin-right: 16px;"  placeholder="enter your email here">
                    <button class="btn btn-outline-neutral">Subscribe</button>
                </div> -->
            </div>

        </div>
        <br>
        <hr style="opacity: 0.3;">
        <div class="credits ml-auto text-center">
            <span class="copyright" style="color: #fff;">
                © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by FOSS-KIET
            </span>
        </div>
    </div>
</footer>
</body>

<!-- Core JS Files -->
<script src="<?=base_url('public//js/jquery-3.2.1.js')?>" type="text/javascript"></script>
<script src="<?=base_url('public//js/jquery-ui-1.12.1.custom.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('public//js/popper.js')?>" type="text/javascript"></script>
<script src="<?=base_url('public//js/bootstrap.min.js')?>" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="<?=base_url('public//js/paper-kit.js?v=2.1.0')?>"></script>

</html>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
<script>
  // Initialize Firebase
  otp_verified = false;
  var config = {
    apiKey: "AIzaSyBFXNIJ-SUrX-iNTGWLhFoaMpaD_s5SGL0",
    authDomain: "quaffmedia-1e2d5.firebaseapp.com",
    databaseURL: "https://quaffmedia-1e2d5.firebaseio.com",
    projectId: "quaffmedia-1e2d5",
    storageBucket: "quaffmedia-1e2d5.appspot.com",
    messagingSenderId: "862541850415"
  };
  firebase.initializeApp(config);

window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
var myfunction = function() {
    // var phoneNumber = getPhoneNumberFromUserInput();
var appVerifier = window.recaptchaVerifier;
firebase.auth().signInWithPhoneNumber("+"+document.getElementById("countryCode").value + document.getElementById("verificationcode").value, appVerifier)
    .then(function (confirmationResult) {
      // SMS sent. Prompt user to type the code from the message, then sign the
      // user in with confirmationResult.confirm(code).
      window.confirmationResult = confirmationResult;
      console.log(confirmationResult)
    }).catch(function (error) {
      // Error; SMS not sent
      console.log(error)

  swal({
  title: "Error",
  text: "Please check the mobile number again",
  icon: "error",
  button: "Ok",
});
  // window.recaptchaVerifier.render().then(function(widgetId) {
  // grecaptcha.reset(widgetId);
// }
// )
      // ...
    });
  };
  var verify_otp = function(){

    confirmationResult.confirm(document.getElementById("otp").value).then(function (result) {
  // User signed in successfully.
  otp_verified = true;
  var user = result.user;
  console.log(user);
  swal({
  title: "OTP Verified",
  text: "",
  icon: "success",
  button: "Ok",
});
  // ...
}).catch(function (error) {
  // User couldn't sign in (bad verification code?)
  console.log(error);
  swal({
  title: "Invalid OTP",
  text: "",
  icon: "error",
  button: "Ok",
});
// ...
});
}

var send_email = function(){

  function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	  }
  if(!otp_verified){
    swal("Otp", "OTP is not verified", "error");
		return;
  }
  else if($("#email").val() == "" || !isEmail($("#email").val())){
		swal("Email", "Enter a valid email address", "error");
		return;
	}
  var actionCodeSettings = {
  // URL you want to redirect back to. The domain (www.example.com) for this
  // URL must be whitelisted in the Firebase Console.
  url: 'http://localhost/quaff/index.php/main/verifyemail',
  // This must be true.
  handleCodeInApp: true
};

firebase.auth().sendSignInLinkToEmail(document.getElementById("email").value, actionCodeSettings)
  .then(function() {
    // The link was successfully sent. Inform the user.
    // Save the email locally so you don't need to ask the user for it again
    // if they open the link on the same device.
    window.localStorage.setItem('emailForSignIn', document.getElementById("email").value);
  })
  .catch(function(error) {
    // Some error occurred, you can inspect the code: error.code
    console.log(error)
  });

//Ajax code to send the data to database
$.post("<?=base_url('index.php/main/receive_form1')?>",
  {
    mobile: $('#verificationcode').val(),
    email: $('#email').val()
  },
  function(data, status){
    console.log(data);
    console.log(status);
  });

}
</script>
<script>
if (firebase.auth().isSignInWithEmailLink(window.location.href)) {
 swal({
  title: "Email Verified",
  text: "Redirecting to your dashboard",
  icon: "success",
  button: "Ok",
});

setTimeout(function(){
  window.location = "<?=base_url('index.php/main/set_password')?>";
 }, 4000);
  }
  if (window.location.href.toString().includes("set_password") != -1){
    $('#set_pass_email').val(window.localStorage.getItem('emailForSignIn'));
    console.log( $('#set_pass_email').val())
  }

  function check_confirm (){
    if($('#set_password').val() == $('#set_cpassword').val()){
      $('#set_password_btn').prop("disabled",false);
    }
  }
</script>
<script>
function send_form2(){
  $.post("<?=base_url('index.php/main/receive_form2')?>",
  {
    twitter: $('#twitter').val(),
    facebook: $('#facebook').val(),
    instagram: $('#instagram').val(),
    email: $('#email').val()
  },
  function(data, status){
  
  });
}

function send_form3(){
  $.post("<?=base_url('index.php/main/receive_form3')?>",
  {
    fname: $('#fname').val(),
    lname: $('#lname').val(),
    // location: $('#location').val(),
    email: $('#email').val()
  },
  function(data, status){
    if(status == 'success'){
      window.location = "<?=base_url('index.php/main/message')?>";
    }
  });
}
</script>
<script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	  }
if(!otp_verified){
  swal("Otp", "OTP is not verified", "error");
  return;
}
else if($("#email").val() == "" || !isEmail($("#email").val())){
		swal("Email", "Enter a valid email address", "error");
		return;
	}
	if(animating) return false;
	animating = true;
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

</script>
		<script src="<?=base_url('public/dist/jquery.easy-autocomplete.min.js')?>" type="text/javascript" ></script>

<script>
//fetch_company
$.get("<?=base_url('index.php/main/fetch_company')?>", function(data, status){
  data = JSON.parse(data);
  arr = [];
  for(x of data){
    arr.push(x.company)
  }
  var options = {
			data: arr,
		};
$("#company").easyAutocomplete(options);
  });

//fetch work_with
$.get("<?=base_url('index.php/main/fetch_work_with')?>", function(data, status){
  data = JSON.parse(data);
  arr = [];
  for(x of data){
    arr.push(x.work_with)
  }
  var options = {
			data: arr,
		};
$("#work_with").easyAutocomplete(options);
  });

//fetch look_for_mentor
$.get("<?=base_url('index.php/main/fetch_look_for_mentor')?>", function(data, status){
  data = JSON.parse(data);
  arr = [];
  for(x of data){
    arr.push(x.look_for_mentor)
  }
  var options = {
			data: arr,
		};
$("#look_for_mentor").easyAutocomplete(options);
  });

$('#profile_switch').change(function() {
     if(this.checked) {
         $('#profile_url_box').show();
     }
     else{
      $('#profile_url_box').hide();
     }
 });
is_valid_profile_url = false;
 function check_profile(){
  $.post("<?=base_url('index.php/main/check_profile_url')?>",
  {
    profile_url: $('#profile_url').val()
  },
  function(data, status){
    if(data == 1){
      is_valid_profile_url = true;
      $('#profile_url').addClass('correct');
      $('#profile_url').removeClass('incorrect');
    }else{
      is_valid_profile_url = false;
      $('#profile_url').addClass('incorrect');
      $('#profile_url').removeClass('correct');
    }
  });
 }

 function submit_profile_url(){
  $.post("<?=base_url('index.php/main/submit_profile_url')?>",
  {
    profile_url: $('#profile_url').val()
  },
  function(data, status){
    if(status == 'success'){
      swal({
  title: "Profile URL Registered",
  text: "",
  icon: "success",
  button: "Ok",
});
    }
    else{
      swal({
  title: "Error",
  text: "There was some error while processing your request",
  icon: "success",
  button: "Ok",
});
    }
  });
 }

</script>
</html>