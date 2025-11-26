# 🧪 Testing & Quality Assurance Guide

## Pre-Launch Testing Checklist

### ✅ Local Setup Testing

- [ ] **File Verification**
  - All 11 files present in project folder
  - No file name typos
  - All PHP files have .php extension

- [ ] **Server Running**
  - Started PHP built-in server: `php -S localhost:8000`
  - No port conflicts
  - Server shows "Listening on http://localhost:8000"

- [ ] **Page Loading**
  - Form page loads without errors
  - All styling visible (colors, fonts, icons)
  - No 404 errors in console

---

### ✅ Form Display Testing

- [ ] **Form Layout**
  - [ ] Form is centered on page
  - [ ] Header with gradient background visible
  - [ ] All 13+ form fields visible
  - [ ] Form title reads "Registration Form"
  - [ ] Submit button visible at bottom

- [ ] **Visual Elements**
  - [ ] Font Awesome icons appear next to each field
  - [ ] Input fields have light gray background
  - [ ] Labels are dark text
  - [ ] Placeholder text visible in fields
  - [ ] Required * indicators show (if implemented)

- [ ] **Responsive Design**
  - [ ] Open on desktop (1920x1080) - looks good
  - [ ] Open on tablet (768x1024) - adjusted layout
  - [ ] Open on mobile (375x667) - stacked layout
  - [ ] All text readable at each size
  - [ ] Form doesn't overflow on small screens

---

### ✅ Form Field Testing

**Test each field with valid and invalid data:**

#### First Name
- [ ] Valid: "John" → accepted
- [ ] Valid: "Marie" → accepted
- [ ] Invalid: "" (empty) → shows "First name is required"
- [ ] Invalid: "J" → shows "must be at least 2 characters"
- [ ] Invalid: "John123" → shows "can only contain letters"
- [ ] Shows error message below field
- [ ] Field gets red border on error

#### Last Name
- [ ] Valid: "Doe" → accepted
- [ ] Valid: "Smith-Jones" → accepted (hyphens OK)
- [ ] Invalid: "" (empty) → shows error
- [ ] Invalid: "D" → shows "must be at least 2 characters"
- [ ] Invalid: "Doe123" → shows "can only contain letters"

#### Email
- [ ] Valid: "john@example.com" → accepted
- [ ] Valid: "user.name+tag@example.co.uk" → accepted
- [ ] Invalid: "" (empty) → shows "Email is required"
- [ ] Invalid: "notanemail" → shows "valid email address"
- [ ] Invalid: "user@" → shows "valid email address"
- [ ] Invalid: "@example.com" → shows "valid email address"

#### Phone Number
- [ ] Valid: "555-123-4567" → accepted
- [ ] Valid: "(555) 123-4567" → accepted
- [ ] Valid: "5551234567" → accepted
- [ ] Valid: "+1-555-123-4567" → accepted
- [ ] Invalid: "" (empty) → shows error
- [ ] Invalid: "123" → shows "at least 10 digits"
- [ ] Invalid: "abc-def-ghij" → shows "valid phone number"

#### Date of Birth
- [ ] Valid: Set to date 18+ years ago → accepted
- [ ] Valid: Pick from calendar → accepted
- [ ] Invalid: "" (empty) → shows error
- [ ] Invalid: Less than 18 years ago → shows "must be at least 18 years old"
- [ ] Invalid: Future date → error message (browser default)

#### Gender Dropdown
- [ ] Shows "Select Gender" as placeholder
- [ ] Can select "Male" → accepted
- [ ] Can select "Female" → accepted
- [ ] Can select "Other" → accepted
- [ ] Invalid: Not selecting any option → shows error

#### Address
- [ ] Valid: "123 Main Street" → accepted
- [ ] Valid: "123 Main Street\nApt 456" (multiline) → accepted
- [ ] Invalid: "" (empty) → shows "Address is required"
- [ ] Invalid: "123" → shows "must be at least 5 characters"
- [ ] Textarea allows multiple lines

#### City
- [ ] Valid: "New York" → accepted
- [ ] Valid: "Los Angeles" → accepted
- [ ] Invalid: "" (empty) → shows error
- [ ] Invalid: "New York123" → shows "can only contain letters"

#### State/Province
- [ ] Valid: "California" → accepted
- [ ] Valid: "NY" → accepted
- [ ] Invalid: "" (empty) → shows error
- [ ] Invalid: "CA123" → shows "can only contain letters"

#### Zip Code
- [ ] Valid: "90210" → accepted
- [ ] Valid: "90210-1234" → accepted
- [ ] Valid: "M5V 3A8" (Canadian) → accepted
- [ ] Invalid: "" (empty) → shows error

#### Education Dropdown
- [ ] Shows placeholder
- [ ] Can select "High School" → accepted
- [ ] Can select "Bachelor" → accepted
- [ ] Can select "Master" → accepted
- [ ] Can select "PhD" → accepted
- [ ] Invalid: Not selecting → shows error

#### Password
- [ ] Valid: "MyPass123" → accepted
- [ ] Valid: "SecureP@ss1" → accepted
- [ ] Invalid: "" (empty) → shows "Password is required"
- [ ] Invalid: "Pass1" → shows "must be at least 8 characters"
- [ ] Invalid: "password123" → shows "must contain uppercase"
- [ ] Invalid: "PASSWORD123" → shows "must contain lowercase"
- [ ] Invalid: "PasswordABC" → shows "must contain numbers"
- [ ] Password is hidden (dots/asterisks shown)

#### Confirm Password
- [ ] Matches password → accepted
- [ ] Different from password → shows "Passwords do not match"
- [ ] Empty → shows error
- [ ] Updates error when password changes

#### Terms Checkbox
- [ ] Unchecked by default
- [ ] Can check/uncheck
- [ ] Unchecked on submit → shows error
- [ ] Checked on submit → allows submission

---

### ✅ Validation Behavior Testing

- [ ] **Real-Time Validation**
  - [ ] Error appears when leaving field with invalid data
  - [ ] Error disappears when correcting data
  - [ ] Red border appears/disappears appropriately

- [ ] **Form Submit Validation**
  - [ ] All fields validated on submit click
  - [ ] Multiple errors shown simultaneously
  - [ ] Submit button prevents form submission if any error

- [ ] **Error Message Quality**
  - [ ] Error messages are clear and helpful
  - [ ] Messages suggest how to fix the issue
  - [ ] Error text is red and visible

---

### ✅ Form Submission Testing

#### Valid Submission
- [ ] Fill all fields with valid data
- [ ] Click "Submit Registration" button
- [ ] Page redirects to success.php
- [ ] Success page loads without errors
- [ ] No error messages in browser console (F12)

#### Invalid Submission - Multiple Errors
- [ ] Leave multiple fields empty
- [ ] Click submit
- [ ] All empty fields show errors
- [ ] Form doesn't submit
- [ ] Page stays on form

#### Submission Flow
- [ ] Form data sent as POST request (check Network tab)
- [ ] process.php receives and processes data
- [ ] No browser warnings/errors during submission
- [ ] Redirect happens automatically

---

### ✅ Success Page Testing

#### Data Display
- [ ] Page shows "Registration Successful!" header
- [ ] Green checkmark icon visible
- [ ] All submitted data displays correctly
- [ ] Data matches what was entered

#### Data Organization
- [ ] Personal Information section shows:
  - [ ] First Name (value matches input)
  - [ ] Last Name (value matches input)
  - [ ] Date of Birth formatted nicely
  - [ ] Age calculated correctly from DOB
  - [ ] Gender selected correctly

- [ ] Contact Information shows:
  - [ ] Email exact match
  - [ ] Phone exact match

- [ ] Address Information shows:
  - [ ] Full address multiline
  - [ ] City exact match
  - [ ] State exact match
  - [ ] Zip code exact match

- [ ] Education shows correct selection

- [ ] Submission Details shows:
  - [ ] Current date and time
  - [ ] Unique Registration ID (REG + 8 characters)

#### Functionality
- [ ] Print button works (opens print dialog)
- [ ] "New Registration" link takes back to form
- [ ] Form resets after clicking link
- [ ] Can submit another form after clicking link

---

### ✅ Browser Compatibility Testing

Test on these browsers:
- [ ] Chrome (Desktop)
- [ ] Firefox (Desktop)
- [ ] Safari (Desktop)
- [ ] Edge (Desktop)
- [ ] Chrome Mobile (Android)
- [ ] Safari Mobile (iOS)

For each browser:
- [ ] Form loads
- [ ] Validation works
- [ ] Styling displays correctly
- [ ] No console errors
- [ ] Submission works

---

### ✅ Mobile Testing

Use browser DevTools (F12 → Toggle Device Toolbar):

**iPhone 12 (390x844)**
- [ ] Form fits on screen
- [ ] Text is readable (min 16px)
- [ ] Buttons are tappable (min 48px)
- [ ] No horizontal scrolling
- [ ] Keyboard doesn't cover form
- [ ] Success page fits

**iPad (768x1024)**
- [ ] Form looks good in landscape
- [ ] Form looks good in portrait
- [ ] Two-column layout displays
- [ ] Buttons properly sized

**Android (412x915)**
- [ ] Form displays correctly
- [ ] Input fields work
- [ ] Dropdown opens properly
- [ ] Date picker works

---

### ✅ Print Testing

- [ ] Click "Print Registration Details"
- [ ] Print preview shows:
  - [ ] All data visible
  - [ ] Proper formatting
  - [ ] No buttons printed
  - [ ] Colors print correctly
  - [ ] Text readable
- [ ] Save as PDF works
- [ ] PDF shows all information

---

### ✅ Console & Network Testing

Open DevTools (F12):

**Console Tab**
- [ ] No JavaScript errors
- [ ] No warning messages
- [ ] jQuery loads correctly
- [ ] Font Awesome CDN loads

**Network Tab**
- [ ] index.html loads (200 OK)
- [ ] style.css loads (200 OK)
- [ ] script.js loads (200 OK)
- [ ] Font Awesome CDN loads (200 OK)
- [ ] jQuery CDN loads (200 OK)
- [ ] process.php loads on submit (200/302)
- [ ] success.php loads (200 OK)

**Network Post Data**
- [ ] POST request shows form-data
- [ ] All fields included in POST
- [ ] No sensitive data exposed

---

### ✅ Performance Testing

- [ ] Form loads in < 2 seconds
- [ ] Validation feedback instant (< 100ms)
- [ ] Submit processing quick (< 1 second)
- [ ] Success page displays immediately
- [ ] No lag when typing in fields

---

### ✅ Security Testing

**XSS Prevention**
- [ ] Try entering: `<script>alert('XSS')</script>` in first name
- [ ] Should display as text, not execute
- [ ] Appears escaped on success page

**Input Sanitization**
- [ ] Try entering: `'; DROP TABLE users; --` in email
- [ ] Should be rejected or sanitized
- [ ] No SQL injection (once DB integrated)

**Email Validation**
- [ ] Try: `test@test@test.com` → rejected
- [ ] Try: `test@test` → rejected
- [ ] Try: `test@test.com` → accepted

---

## Test Case Scenarios

### Scenario 1: Complete Valid Registration
```
Steps:
1. Fill all fields with correct information
2. Click Submit
3. See success page

Expected:
✓ All data displays on success page
✓ Age calculated correctly
✓ Registration ID generated
✓ Can print details
```

### Scenario 2: Missing Required Field
```
Steps:
1. Leave "Email" field empty
2. Try to submit form

Expected:
✓ Error shows: "Email is required"
✓ Email field has red border
✓ Form doesn't submit
✓ Other fields remain filled
```

### Scenario 3: Invalid Email Format
```
Steps:
1. Enter "notanemail" in email field
2. Click elsewhere or submit

Expected:
✓ Error shows: "Please enter a valid email"
✓ Red border appears
✓ Can correct and resubmit
```

### Scenario 4: Age Under 18
```
Steps:
1. Select DOB from today back 15 years
2. Try to submit

Expected:
✓ Error shows: "You must be at least 18 years old"
✓ Can fix and submit
```

### Scenario 5: Password Mismatch
```
Steps:
1. Enter "MyPass123" in password
2. Enter "MyPass124" in confirm password
3. Try to submit

Expected:
✓ Error shows: "Passwords do not match"
✓ Must make them match to submit
```

### Scenario 6: New Registration After Success
```
Steps:
1. Complete registration successfully
2. Click "New Registration"
3. Submit again

Expected:
✓ Form is empty
✓ Can submit new registration
✓ Success page shows new data
```

---

## Bug Report Template

If you find an issue:

```
**Title:** [Brief description]

**Steps to Reproduce:**
1. [Step 1]
2. [Step 2]
3. [Step 3]

**Expected Behavior:**
[What should happen]

**Actual Behavior:**
[What actually happens]

**Browser/Device:**
[Chrome on Windows 10, etc.]

**Screenshots:**
[If applicable]
```

---

## Performance Metrics

Check with DevTools (F12 → Performance):

Target metrics:
- [ ] Page Load Time: < 2s
- [ ] First Contentful Paint: < 1s
- [ ] Validation Response: < 100ms
- [ ] Form Submission: < 500ms
- [ ] Success Page Load: < 1s

---

## Accessibility Testing

- [ ] Use keyboard only (Tab through form)
- [ ] All fields accessible
- [ ] Error messages announced by screen reader
- [ ] Colors have sufficient contrast
- [ ] Labels associated with inputs
- [ ] Form is navigable without mouse

---

## Final Checklist

Before declaring launch-ready:

- [ ] All files created and in correct location
- [ ] No console errors
- [ ] All form validations working
- [ ] Form submits successfully
- [ ] Success page displays correctly
- [ ] Responsive on mobile/tablet/desktop
- [ ] Print functionality works
- [ ] Cross-browser tested (at least 2 browsers)
- [ ] Can start new registration
- [ ] Documentation complete
- [ ] Ready for cloud deployment

---

## Ready to Deploy!

Once all tests pass, your application is production-ready and can be deployed to the cloud using one of the methods in DEPLOYMENT_GUIDE.md

✅ **Testing Complete!**
