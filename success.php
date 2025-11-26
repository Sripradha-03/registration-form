<?php
session_start();

// Check if registration data exists in session
if (!isset($_SESSION['registrationData'])) {
    header('Location: index.html');
    exit();
}

$data = $_SESSION['registrationData'];
$submissionTime = isset($_SESSION['submissionTime']) ? $_SESSION['submissionTime'] : date('Y-m-d H:i:s');

// Calculate age from DOB
$dob = new DateTime($data['dob']);
$today = new DateTime();
$age = $today->diff($dob)->y;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="success-container">
            <div class="success-header">
                <i class="fas fa-check-circle"></i>
                <h1>Registration Successful!</h1>
                <p>Your information has been submitted successfully</p>
            </div>

            <div class="success-content">
                <div class="info-section">
                    <h3><i class="fas fa-user"></i> Personal Information</h3>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">First Name</div>
                            <div class="info-value"><?php echo $data['firstName']; ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Last Name</div>
                            <div class="info-value"><?php echo $data['lastName']; ?></div>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">Date of Birth</div>
                            <div class="info-value">
                                <?php 
                                    $dobDate = new DateTime($data['dob']);
                                    echo $dobDate->format('F d, Y') . ' (Age: ' . $age . ' years)'; 
                                ?>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Gender</div>
                            <div class="info-value"><?php echo $data['gender']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3><i class="fas fa-envelope"></i> Contact Information</h3>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">Email Address</div>
                            <div class="info-value"><?php echo $data['email']; ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Phone Number</div>
                            <div class="info-value"><?php echo $data['phone']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3><i class="fas fa-map-pin"></i> Address Information</h3>
                    <div class="info-row full">
                        <div class="info-item">
                            <div class="info-label">Full Address</div>
                            <div class="info-value"><?php echo nl2br($data['address']); ?></div>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">City</div>
                            <div class="info-value"><?php echo $data['city']; ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">State/Province</div>
                            <div class="info-value"><?php echo $data['state']; ?></div>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">Zip Code</div>
                            <div class="info-value"><?php echo $data['zipcode']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3><i class="fas fa-graduation-cap"></i> Education Information</h3>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">Education Level</div>
                            <div class="info-value"><?php echo $data['education']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3><i class="fas fa-clock"></i> Submission Details</h3>
                    <div class="info-row">
                        <div class="info-item">
                            <div class="info-label">Submission Date & Time</div>
                            <div class="info-value">
                                <?php 
                                    $submitTime = new DateTime($submissionTime);
                                    echo $submitTime->format('F d, Y \a\t h:i:s A'); 
                                ?>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Registration ID</div>
                            <div class="info-value">
                                <?php 
                                    $registrationId = 'REG' . strtoupper(substr(md5($data['email'] . $submissionTime), 0, 8));
                                    echo $registrationId;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 30px; text-align: center;">
                    <button class="print-btn" onclick="window.print()">
                        <i class="fas fa-print"></i> Print Registration Details
                    </button>
                </div>

                <div style="margin-top: 20px; text-align: center;">
                    <a href="index.html" style="display: inline-block; padding: 12px 30px; background: #667eea; color: white; text-decoration: none; border-radius: 8px; transition: all 0.3s ease;">
                        <i class="fas fa-arrow-left"></i> New Registration
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
