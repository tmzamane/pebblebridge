// Start session at the very beginning to manage form messages
if (session_status() == PHP_SESSION_NONE) {
session_start();
}

// Initialize variables for newsletter form data and errors
$newsletter_name = $_SESSION['newsletter_name_input'] ?? '';
$newsletter_email = $_SESSION['newsletter_email_input'] ?? '';
$newsletter_name_error = $_SESSION['newsletter_name_error'] ?? '';
$newsletter_email_error = $_SESSION['newsletter_email_error'] ?? '';
$promo_message = $_SESSION['promo_message'] ?? '';
$promo_message_type = $_SESSION['promo_message_type'] ?? '';

// Clear session variables for newsletter form after retrieving
unset($_SESSION['newsletter_name_input']);
unset($_SESSION['newsletter_email_input']);
unset($_SESSION['newsletter_name_error']);
unset($_SESSION['newsletter_email_error']);
unset($_SESSION['promo_message']);
unset($_SESSION['promo_message_type']);


// --- PHP Logic for Newsletter Form Submission ---
// This block processes the subscription form directly on index.php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subscribe_form_submit'])) {
$form_valid = true;

// Sanitize and validate Name
$newsletter_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
if (empty($newsletter_name)) {
$newsletter_name_error = "Name is required.";
$form_valid = false;
} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $newsletter_name)) {
$newsletter_name_error = "Only letters and white space allowed for name.";
$form_valid = false;
}

// Sanitize and validate Email
$newsletter_email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL);
if (empty($newsletter_email)) {
$newsletter_email_error = "Email is required.";
$form_valid = false;
} elseif (!filter_var($newsletter_email, FILTER_VALIDATE_EMAIL)) {
$newsletter_email_error = "Invalid email format.";
$form_valid = false;
}

// If form is valid, simulate success
if ($form_valid) {
// --- Simulate successful subscription ---
// In a real application, you would:
// 1. Save $newsletter_name and $newsletter_email to a database
// 2. Send a confirmation email
// 3. Add to a mailing list service API
$promo_message = "Thank you for subscribing, " . htmlspecialchars($newsletter_name) . "!";
$promo_message_type = "success";
} else {
$promo_message = "Please correct the errors in the form.";
$promo_message_type = "error";
}

// Store current input values and errors in session for re-population after redirect
$_SESSION['newsletter_name_input'] = $newsletter_name;
$_SESSION['newsletter_email_input'] = $newsletter_email;
$_SESSION['newsletter_name_error'] = $newsletter_name_error;
$_SESSION['newsletter_email_error'] = $newsletter_email_error;
$_SESSION['promo_message'] = $promo_message;
$_SESSION['promo_message_type'] = $promo_message_type;

// Redirect to prevent form re-submission on refresh and to show messages
header("Location: " . $_SERVER['PHP_SELF'] . "#promos");
exit();
}