<?php 
if(isset($_POST['submit'])){
    $to = "saiprasanna.p@cubiclogics.com"; // this is your Email address
    $from = $_POST['EmailId']; // this is the sender's Email address
    $first_name = $_POST['Name'];
    $empsize = $_POST['employeeSize'];
    $subject = "$_POST['Description']";
    $phone = "$_POST['PhoneNumber']";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $empsize . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>

<style>
h1.et_pb_contact_main_title {
    font-size: 32px;
    color: #ffffff!important;
    line-height: 1.2em;
    text-align: center;
}
.full-width-input {
    width: 100%;
    background: transparent;
    margin-bottom: 20px;
	height: 100%;
    overflow: hidden;
}
.full-width-input input {
    border-radius: 25px 25px 25px 25px;
    overflow: hidden;
    border-width: 1px;
    border-color: rgba(255,255,255,0.66);
    line-height: 1em;
    font-size: 15px;
    background-color: rgba(0,0,0,0);
    color: #ffffff;
    height: 40px;
    border-style: solid;
    padding: 16px;
    -webkit-appearance: none;
    margin: 0;
    position: relative;
    font-family: inherit;
}
.full-width-input input:focus {
    border-color: #fff;
    color: rgba(255, 255, 255, 0.71);
}
.half-width-input {
    width: 100%;
    margin-bottom: 20px;
    height: 100%;
    overflow: hidden;
	background: transparent;
}
.half-width-input input {
    border-radius: 25px 25px 25px 25px;
    overflow: hidden;
    border-width: 1px;
    border-color: rgba(255,255,255,0.66);
    line-height: 1em;
    font-size: 15px;
    background-color: rgba(0,0,0,0);
    color: #ffffff;
    height: 40px;
    border-style: solid;
    padding: 16px;
    -webkit-appearance: none;
    margin: 0;
    position: relative;
    font-family: inherit;
    width: 48% !important;
    float: left;
}
.half-width-input input:nth-child(1) {
    margin-right: 2%;
}
.half-width-input input:nth-child(2) {
    margin-left: 2%;
}
.half-width-input input:focus {
    border-color: #fff;
    color: rgba(255, 255, 255, 0.71);
}
.submit-input {
    width: 100%;
}
.submit-input input {
    color: #ffffff!important;
    border-width: 0px!important;
    border-radius: 25px;
    letter-spacing: 1px;
    font-size: 16px;
    background-image: linear-gradient(90deg,#e0443c 0%,rgba(239,52,93,0.76) 100%)!important;
    background-color: #2b9cf2;
    padding-top: 5px!important;
    padding-right: 30px!important;
    padding-bottom: 5px!important;
    padding-left: 30px!important;
    float: right;
    display: inline-block;
    margin: 0 0 0 18px;
    font-family: inherit;
    cursor: pointer;
    border: 2px solid;
    font-weight: 500;
    line-height: 1.7em!important;
}
</style>
<body>
<form action="" method="post">
<div class="quick-demo">
	<h1 class="et_pb_contact_main_title">Looking for a quick demo?</h1>
	<div class="full-width-input">
		<input type="text" id="Contactname" name="Name" required="" placeholder="Name"/>
	</div>
	<div class="half-width-input">
		<input type="text" id="contactemail"  name="EmailId" required="" placeholder="Email ID"/>
		<input type="text" id="contactphoneno" name="PhoneNumber" required="" placeholder="Phone Number">
	</div>
	<div class="full-width-input">
		<input type="text" id="empsize" name="employeeSize" required="" placeholder="Employee Size"/>
	</div>
	<div class="full-width-input">
		<input type="text" id="servicedescription" name="Description" required="" placeholder="Service Name Description"/>
	</div>
	<div class="submit-input">
		<input onclick="saveContactData();" id="send_request" name="submit" type="submit" value="Submit" />
	</div>
</div>
</form>

</body>
</html> 
