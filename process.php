<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $formData = array(
        'firstName' => isset($_POST['firstName']) ? htmlspecialchars(trim($_POST['firstName'])) : '',
        'lastName' => isset($_POST['lastName']) ? htmlspecialchars(trim($_POST['lastName'])) : '',
        'email' => isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '',
        'phone' => isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '',
        'dob' => isset($_POST['dob']) ? htmlspecialchars(trim($_POST['dob'])) : '',
        'gender' => isset($_POST['gender']) ? htmlspecialchars(trim($_POST['gender'])) : '',
        'address' => isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '',
        'city' => isset($_POST['city']) ? htmlspecialchars(trim($_POST['city'])) : '',
        'state' => isset($_POST['state']) ? htmlspecialchars(trim($_POST['state'])) : '',
        'zipcode' => isset($_POST['zipcode']) ? htmlspecialchars(trim($_POST['zipcode'])) : '',
        'education' => isset($_POST['education']) ? htmlspecialchars(trim($_POST['education'])) : '',
        'password' => isset($_POST['password']) ? $_POST['password'] : ''
    );

    // Validate email
    if (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format');
    }

    // Validate required fields
    $requiredFields = ['firstName', 'lastName', 'email', 'phone', 'dob', 'gender', 'address', 'city', 'state', 'zipcode', 'education', 'password'];
    foreach ($requiredFields as $field) {
        if (empty($formData[$field])) {
            die('Missing required field: ' . $field);
        }
    }

    // Store data (you can later connect to a database)
    // For now, we'll store in a session to display on success page
    session_start();
    $_SESSION['registrationData'] = $formData;
    $_SESSION['submissionTime'] = date('Y-m-d H:i:s');

    // Redirect to success page
    header('Location: success.php');
    exit();
} else {
    // If accessed directly without POST request, redirect to form
    header('Location: index.html');
    exit();
}
?>
