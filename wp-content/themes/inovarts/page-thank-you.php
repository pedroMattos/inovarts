<?php
/* Template Name: Thank-You */
get_header();
if(isset($_POST['first_name'])) {
$name = $_POST['first_name'];
$email = $_POST['email'];
$service = $_POST['service'];
$phone = $_POST['tell'];
// SEND
$to = 'peoplesolutionsdev@gmail.com';
$subject = 'Inovarts Studios Contact Form';
$msg =
'Name: '.$name
.'<br/>E-mail: '.$email
.'<br/>Service required: '.$service
.'<br/>Phone: '.$phone;
$headers = array('Content-Type: text/html; charset=UTF-8');
$wpmail = wp_mail($to, $subject, $msg, $headers);
$REQUEST_RESPONSE = true;
}
include 'template/header-page.php';

if($REQUEST_RESPONSE === true) {
    echo
    '<h2 class="center">Thank You for contact Us! <br/> Wait for a return within 24 hours</h2>';
} else {
    echo
    '<h2>Sorry! <br/>Something went wrong sending your message, please try again.</h2>';
}
?>

<?php
get_footer();
