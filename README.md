# Online Registration Form Application

A modern, attractive web application for online registration/application forms built with HTML, CSS, JavaScript, jQuery, and PHP.

## Features

✨ **Features Included:**
- **Attractive Modern Design** - Gradient backgrounds, smooth animations, and professional styling
- **Responsive Layout** - Works perfectly on desktop, tablet, and mobile devices
- **Client-Side Validation** - Real-time form validation with helpful error messages
- **Comprehensive Form Fields**:
  - Personal Information (First Name, Last Name, DOB, Gender)
  - Contact Information (Email, Phone)
  - Address Details (Full Address, City, State, Zip Code)
  - Education Level
  - Password Authentication
  - Terms & Conditions Checkbox

- **Server-Side Processing** - PHP backend for secure data handling
- **Success Page** - Beautifully formatted display of submitted information
- **Print Functionality** - Users can print their registration details
- **Age Verification** - Automatic age calculation (18+ requirement)
- **Security** - Input sanitization and validation

## File Structure

```
web assignment2/
├── index.html          # Main registration form
├── style.css           # Modern styling and animations
├── script.js           # jQuery validation and client-side logic
├── process.php         # Form submission handler
├── success.php         # Success page with formatted data display
└── README.md           # This file
```

## Form Fields

1. **Personal Information**
   - First Name (letters only, min 2 chars)
   - Last Name (letters only, min 2 chars)
   - Date of Birth (18+ age requirement)
   - Gender (Male, Female, Other)

2. **Contact Information**
   - Email Address (valid email format)
   - Phone Number (min 10 digits)

3. **Address Information**
   - Full Address
   - City (letters only)
   - State/Province (letters only)
   - Zip Code

4. **Education**
   - Education Level (High School, Bachelor, Master, PhD)

5. **Security**
   - Password (min 8 chars, uppercase, lowercase, numbers)
   - Confirm Password
   - Terms & Conditions checkbox

## Validation Rules

### Client-Side (JavaScript/jQuery)
- All fields are required
- Email format validation
- Phone number (10+ digits)
- Password strength (8+ chars, uppercase, lowercase, numbers)
- Password matching
- Age verification (18+)
- Letter-only fields for names, city, and state

### Server-Side (PHP)
- Email format validation
- Required field verification
- Input sanitization using htmlspecialchars()
- XSS prevention

## Styling Highlights

- **Color Scheme**: Purple gradient (Primary: #667eea, Secondary: #764ba2)
- **Animations**: Smooth slide-in animations on page load
- **Responsive Design**: Mobile-first approach with breakpoints for tablets and phones
- **Font Awesome Icons**: Beautiful icons throughout the form
- **Accessible Design**: Proper label associations and semantic HTML
- **Print Styling**: Optimized layout when printing

## Local Setup Instructions

### Prerequisites
- PHP 7.0+ installed
- Web server (Apache, Nginx, or PHP built-in server)

### Option 1: Using PHP Built-in Server
```bash
cd "c:\Users\sripridha\Documents\web assignment2"
php -S localhost:8000
```
Then open http://localhost:8000 in your browser.

### Option 2: Using XAMPP/WAMP
1. Copy the project folder to `htdocs` (XAMPP) or `www` (WAMP)
2. Start Apache server
3. Navigate to `http://localhost/web\ assignment2/`

## Deployment to Cloud Platform

### Option A: Heroku (Recommended for PHP)

1. **Install Heroku CLI**
   ```bash
   # Download from https://devcenter.heroku.com/articles/heroku-cli
   ```

2. **Create Procfile** (already included)
   ```
   web: vendor/bin/heroku-php-apache2
   ```

3. **Create Heroku App**
   ```bash
   heroku create your-app-name
   ```

4. **Deploy**
   ```bash
   git init
   git add .
   git commit -m "Initial registration form application"
   git push heroku main
   ```

### Option B: Railway

1. **Connect GitHub/GitLab** to Railway
2. **Select your repository**
3. **Railway auto-detects PHP** and deploys
4. Get your live URL instantly

### Option C: Replit

1. Create a new Replit project with PHP
2. Upload all files
3. Click "Run" to start the server
4. Share your project link

### Option D: InfinityFree (Free Hosting)

1. Sign up at infinityfree.net
2. Create new account
3. Upload files via FTP
4. Update form action to point to your domain

## Usage

1. **Fill Out Form**
   - Complete all required fields
   - Validation errors appear in real-time

2. **Submit**
   - Click "Submit Registration" button
   - Client-side validation runs first
   - Form submits to process.php

3. **View Success Page**
   - Formatted display of all submitted data
   - Shows submission date/time
   - Unique Registration ID generated
   - Print button available

4. **Print/Export**
   - Click "Print Registration Details"
   - Use browser's print function to save as PDF

## Technologies Used

- **HTML5** - Semantic structure
- **CSS3** - Modern styling with gradients and animations
- **JavaScript** - Client-side interactions
- **jQuery 3.6** - DOM manipulation and validation
- **PHP 7.0+** - Server-side processing
- **Font Awesome 6.0** - Icons

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Security Features

- Input sanitization with htmlspecialchars()
- Email validation (client & server)
- XSS prevention
- Password fields never displayed
- Session-based data handling
- No sensitive data stored in local storage

## Future Enhancements

- Database integration for persistent storage
- Email confirmation system
- Admin dashboard for viewing submissions
- Export to CSV/PDF functionality
- Multi-step form wizard
- File upload capability
- CAPTCHA integration
- Two-factor authentication

## Support

For issues or questions, please check:
1. Browser console for JavaScript errors
2. PHP error logs
3. Form validation messages

## License

This project is open source and available for educational purposes.

---

**Ready to Deploy!** Choose your favorite cloud platform and follow the deployment instructions above.
