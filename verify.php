#!/usr/bin/env php
<?php
/**
 * Quick Start Script for Online Registration Form
 * Run this file to verify everything is set up correctly
 */

echo "\n";
echo "╔═══════════════════════════════════════════════════════════╗\n";
echo "║   Online Registration Form - Quick Start                  ║\n";
echo "╚═══════════════════════════════════════════════════════════╝\n\n";

// Check PHP version
echo "✓ PHP Version: " . phpversion() . "\n";

// Check required files
$requiredFiles = [
    'index.html',
    'style.css',
    'script.js',
    'process.php',
    'success.php'
];

echo "\n📋 Checking Required Files:\n";
$allFilesExist = true;
foreach ($requiredFiles as $file) {
    if (file_exists($file)) {
        echo "  ✓ $file\n";
    } else {
        echo "  ✗ $file (MISSING!)\n";
        $allFilesExist = false;
    }
}\n\n";

// Check optional files
$optionalFiles = [
    'README.md',
    'DEPLOYMENT_GUIDE.md',
    'PROJECT_SUMMARY.md',
    'composer.json',
    'Procfile',
    '.gitignore'
];

echo "📦 Optional Files (for deployment):\n";
foreach ($optionalFiles as $file) {
    if (file_exists($file)) {
        echo "  ✓ $file\n";
    } else {
        echo "  ○ $file (optional)\n";
    }
}

// Check writeable directories
echo "\n🔐 Directory Permissions:\n";
$dirs = ['.', '.'];
foreach ($dirs as $dir) {
    if (is_writable($dir)) {
        echo "  ✓ Current directory is writable\n";
        break;
    }
}

// Summary
echo "\n";
echo "╔═══════════════════════════════════════════════════════════╗\n";
if ($allFilesExist) {
    echo "║  ✓ All systems ready! Application is configured.        ║\n";
    echo "║                                                           ║\n";
    echo "║  📌 Next Steps:                                          ║\n";
    echo "║                                                           ║\n";
    echo "║  1. RUN LOCALLY:                                         ║\n";
    echo "║     php -S localhost:8000                                ║\n";
    echo "║                                                           ║\n";
    echo "║  2. OPEN IN BROWSER:                                     ║\n";
    echo "║     http://localhost:8000                                ║\n";
    echo "║                                                           ║\n";
    echo "║  3. DEPLOY TO CLOUD:                                     ║\n";
    echo "║     Read DEPLOYMENT_GUIDE.md                             ║\n";
    echo "╚═══════════════════════════════════════════════════════════╝\n\n";
} else {
    echo "║  ✗ Some required files are missing!                       ║\n";
    echo "║  Please check the errors above.                           ║\n";
    echo "╚═══════════════════════════════════════════════════════════╝\n\n";
    exit(1);
}

// Feature list
echo "✨ Features Included:\n";
echo "  ✓ Modern responsive design\n";
echo "  ✓ Real-time form validation\n";
echo "  ✓ Client & server-side security\n";
echo "  ✓ Beautiful success page\n";
echo "  ✓ Print functionality\n";
echo "  ✓ Mobile-friendly interface\n";
echo "  ✓ Professional styling\n";
echo "  ✓ Password strength validation\n";
echo "  ✓ Age verification (18+)\n";
echo "  ✓ Email validation\n\n";

// Deployment options
echo "☁️  Cloud Deployment Options:\n";
echo "  1. Railway (Recommended) - Fast, free tier available\n";
echo "  2. Heroku - Industry standard, reliable\n";
echo "  3. InfinityFree - Free forever\n";
echo "  4. Replit - No setup needed, browser-based\n";
echo "  5. AWS Lightsail - Powerful, scalable\n\n";

echo "📚 Documentation Files:\n";
echo "  • README.md - Complete documentation\n";
echo "  • DEPLOYMENT_GUIDE.md - Step-by-step deployment\n";
echo "  • PROJECT_SUMMARY.md - Project overview\n\n";

echo "🎉 Your registration form is ready! Happy coding!\n\n";
?>
