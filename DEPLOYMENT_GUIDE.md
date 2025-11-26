# Deployment Guide for Online Registration Form

## Quick Start - Test Locally

### Option 1: PHP Built-in Server (Easiest)
```powershell
cd "c:\Users\sripridha\Documents\web assignment2"
php -S localhost:8000
```
Open: http://localhost:8000

### Option 2: XAMPP (Recommended)
1. Install XAMPP from https://www.apachefriends.org/
2. Copy project to `C:\xampp\htdocs\registration-form`
3. Start Apache from XAMPP Control Panel
4. Open: http://localhost/registration-form

---

## Cloud Deployment Options

### 🌟 **OPTION 1: Railway (Recommended - Easiest)**

**Advantages:** Free tier available, auto-deployment from GitHub, no config files needed

**Steps:**
1. Create GitHub account if you don't have one
2. Create new public repository: `registration-form`
3. Push project files to GitHub:
   ```powershell
   cd "c:\Users\sripridha\Documents\web assignment2"
   git init
   git add .
   git commit -m "Initial registration form application"
   git branch -M main
   git remote add origin https://github.com/YOUR_USERNAME/registration-form.git
   git push -u origin main
   ```
4. Visit https://railway.app
5. Click "Deploy from GitHub"
6. Authorize Railway and select your repository
7. Railway auto-detects PHP and deploys
8. Get your live URL (e.g., https://registration-form-production.up.railway.app)

**Cost:** Free tier includes $5/month credits

---

### 🔵 **OPTION 2: Heroku (Easy, Free Tier Available)**

**Advantages:** Industry standard, reliable, good for learning

**Requirements:**
- Heroku CLI installed from https://devcenter.heroku.com/articles/heroku-cli
- GitHub account

**Steps:**
1. Login to Heroku:
   ```powershell
   heroku login
   ```

2. Create app:
   ```powershell
   heroku create your-registration-form
   ```

3. Deploy:
   ```powershell
   git push heroku main
   ```

4. View live app:
   ```powershell
   heroku open
   ```

**Cost:** Free tier was discontinued (March 2022). Currently starts at $5/month

---

### 🟠 **OPTION 3: Vercel/Netlify (PHP with Serverless)**

**Note:** Vercel/Netlify primarily support static sites. You need serverless PHP:

Visit: https://vercel.com/guides/deploying-php-with-vercel

Or use their recommended alternative: Railway or Heroku

---

### 💰 **OPTION 4: InfinityFree (Completely Free)**

**Advantages:** 100% free forever, good for beginners

**Steps:**
1. Sign up at https://www.infinityfree.net/
2. Create new account
3. Get your FTP credentials from control panel
4. Use FileZilla or similar FTP client:
   - Host: Your assigned FTP host
   - Username: Your FTP username
   - Password: Your FTP password
5. Upload all files to `public_html` folder
6. Access your form at: https://yourdomain.infinityfree.net

**Note:** May have some limitations on free tier

---

### 🟢 **OPTION 5: Replit (Great for Learning)**

**Advantages:** No setup needed, browser-based, free

**Steps:**
1. Go to https://replit.com
2. Click "Create" → "Import from GitHub"
3. Paste your GitHub repo URL
4. Replit auto-detects PHP and sets up server
5. Click "Run" button
6. Share your project link with anyone

---

### 🚀 **OPTION 6: AWS Lightsail (Scalable)**

**Advantages:** Powerful, scalable, free tier available for 1 year

**Steps:**
1. Create AWS account at https://aws.amazon.com
2. Go to Lightsail service
3. Create new PHP instance (Ubuntu with LAMP)
4. Connect via SSH or Lightsail console
5. Upload files
6. Enable static IP
7. Configure domain (if desired)

---

### 🌐 **OPTION 7: Microsoft Azure (Enterprise)**

**Advantages:** Enterprise-grade, free tier available

**Steps:**
1. Create Azure account
2. Create "App Service" → PHP runtime
3. Deploy via Git or FTP
4. Get your custom domain

---

## Recommended Choice for You

**For easiest deployment:** 🌟 **Railway**
- Fastest setup (5 minutes)
- Free tier with monthly credits
- Auto-deploys from GitHub
- Professional environment

**For best free option:** 💰 **InfinityFree**
- 100% free forever
- No credit card needed
- Simple FTP upload

**For learning/prototyping:** 💻 **Replit**
- Zero configuration
- Browser-based
- Easy sharing with live link

---

## Testing Your Live Application

After deployment, test these scenarios:

1. **Fill out form completely** - All fields required
2. **Test validation**:
   - Invalid email format
   - Password mismatch
   - Phone number too short
   - Name with numbers
3. **Submit successfully**
4. **View formatted success page**
5. **Print registration details**

---

## Troubleshooting

| Issue | Solution |
|-------|----------|
| Form not submitting | Check that `process.php` exists on server |
| Success page blank | Verify PHP 7.0+ installed on hosting |
| Styling looks broken | Clear browser cache (Ctrl+F5) |
| 404 on success.php | Check file names are lowercase and exact match |
| POST method error | Verify web server supports POST requests |

---

## What Gets Deployed

Files needed:
- ✅ index.html
- ✅ style.css
- ✅ script.js
- ✅ process.php
- ✅ success.php

Files NOT needed:
- ❌ .git folder (gets created automatically)
- ❌ This deployment guide

---

## Environment Variables (Optional)

For database integration in future, you can add:
```
DATABASE_URL=your-database-url
SMTP_HOST=email-server
SMTP_USER=your-email
```

Most platforms provide UI to set these.

---

## Monitoring After Deployment

- Check application logs in your hosting dashboard
- Monitor for errors in form submissions
- Test occasionally from different devices
- Keep backups of your database (once integrated)

---

**Your application is ready to go live! Choose your platform above and deploy now!** 🚀
