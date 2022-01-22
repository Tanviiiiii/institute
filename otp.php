<?php
$errorMsg = "";
$success = 0;
function sendOTP($email, $otp)
{
    $to = $email;
    $subject = "OTP Email Verification";
    $txt = "Enter the OTP for verification" . $otp;

    if (mail($to, $subject, $txt)) {
        return 1;
    }
    return 0;
}

// genrate OTP
$otp = rand(100000, 999999);
// send otp to email
$mail_status = sendOTP($email, $otp);
// mail stastus
if ($mail_status == 1) {
    $d = date('Y-m-d H:i:s');
    $q = "INSERT INTO otp_expiry(otp,is_expired,created_at) VALUES('$otp',0,'$d')";
    $result = $conn->query($q);
    $current_id = $conn->insert_id;
    if (!empty($current_id)) {
        $success = 1;
        echo "<h1 style='color:white'>$success $current_id</h1>";
    } else {
        $success = 0;
    }
} else {
    $errorMsg = "Email doesn't Exists!";
}

if (isset($_POST['submit_otp']) && !empty($_POST['submit_otp'])) {
    $otp_submit = $_POST['otp'];
    $otp_query = "SELECT * FROM otp_expiry WHERE otp = $otp_submit AND is_expired != 1 AND NOW() <= DATE_ADD(created_at,INTERVAL 24 HOUR)";
    $result = $conn->query($otp_query);
    $count = $result->num_rows;
    if (!empty($count)) {
        $result = $conn->query("UPDATE otp_expiry SET  is_expired = 1 WHERE otp = $otp_submit");
        $success = 2;
    } else {
        $errorMsg = "Invalid OTP!";
    }
}
?>

<form name="f2" id="f2">
    <?php

    if (($success == 1)) {
    ?>
        <div>
            Enter OTP
        </div>
        <input type="text" name="otp" id="otp" placeholder="One Time Password" class="login-input" required>
        <input type="submit" value="submit" name="submit_otp">

    <?php
    }
    if ($success == 2) {
        header("refresh=2;url=login.php");
    }
    ?>
</form>