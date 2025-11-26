$(document).ready(function() {
    // Form validation on submit
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();
        
        // Clear all previous error messages
        $('.error-message').text('');
        $('.form-group input, .form-group textarea, .form-group select').removeClass('error');
        
        // Validate form
        if (validateForm()) {
            // Submit form if validation passes
            this.submit();
        }
    });

    // Real-time validation
    $('#firstName').on('blur', function() {
        validateFirstName();
    });

    $('#lastName').on('blur', function() {
        validateLastName();
    });

    $('#email').on('blur', function() {
        validateEmail();
    });

    $('#phone').on('blur', function() {
        validatePhone();
    });

    $('#dob').on('blur', function() {
        validateDOB();
    });

    $('#gender').on('change', function() {
        validateGender();
    });

    $('#address').on('blur', function() {
        validateAddress();
    });

    $('#city').on('blur', function() {
        validateCity();
    });

    $('#state').on('blur', function() {
        validateState();
    });

    $('#zipcode').on('blur', function() {
        validateZipcode();
    });

    $('#education').on('change', function() {
        validateEducation();
    });

    $('#password').on('blur', function() {
        validatePassword();
    });

    $('#confirmPassword').on('blur', function() {
        validateConfirmPassword();
    });

    $('#terms').on('change', function() {
        validateTerms();
    });

    // Validation functions
    function validateForm() {
        let isValid = true;

        if (!validateFirstName()) isValid = false;
        if (!validateLastName()) isValid = false;
        if (!validateEmail()) isValid = false;
        if (!validatePhone()) isValid = false;
        if (!validateDOB()) isValid = false;
        if (!validateGender()) isValid = false;
        if (!validateAddress()) isValid = false;
        if (!validateCity()) isValid = false;
        if (!validateState()) isValid = false;
        if (!validateZipcode()) isValid = false;
        if (!validateEducation()) isValid = false;
        if (!validatePassword()) isValid = false;
        if (!validateConfirmPassword()) isValid = false;
        if (!validateTerms()) isValid = false;

        return isValid;
    }

    function validateFirstName() {
        const firstName = $('#firstName').val().trim();
        const errorElement = $('#firstNameError');

        if (firstName === '') {
            errorElement.text('First name is required');
            $('#firstName').addClass('error');
            return false;
        } else if (firstName.length < 2) {
            errorElement.text('First name must be at least 2 characters');
            $('#firstName').addClass('error');
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(firstName)) {
            errorElement.text('First name can only contain letters');
            $('#firstName').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#firstName').removeClass('error');
            return true;
        }
    }

    function validateLastName() {
        const lastName = $('#lastName').val().trim();
        const errorElement = $('#lastNameError');

        if (lastName === '') {
            errorElement.text('Last name is required');
            $('#lastName').addClass('error');
            return false;
        } else if (lastName.length < 2) {
            errorElement.text('Last name must be at least 2 characters');
            $('#lastName').addClass('error');
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(lastName)) {
            errorElement.text('Last name can only contain letters');
            $('#lastName').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#lastName').removeClass('error');
            return true;
        }
    }

    function validateEmail() {
        const email = $('#email').val().trim();
        const errorElement = $('#emailError');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === '') {
            errorElement.text('Email is required');
            $('#email').addClass('error');
            return false;
        } else if (!emailRegex.test(email)) {
            errorElement.text('Please enter a valid email address');
            $('#email').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#email').removeClass('error');
            return true;
        }
    }

    function validatePhone() {
        const phone = $('#phone').val().trim();
        const errorElement = $('#phoneError');
        const phoneRegex = /^[0-9\-\+\(\)\s]+$/;

        if (phone === '') {
            errorElement.text('Phone number is required');
            $('#phone').addClass('error');
            return false;
        } else if (!phoneRegex.test(phone) || phone.replace(/\D/g, '').length < 10) {
            errorElement.text('Please enter a valid phone number (at least 10 digits)');
            $('#phone').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#phone').removeClass('error');
            return true;
        }
    }

    function validateDOB() {
        const dob = $('#dob').val();
        const errorElement = $('#dobError');

        if (dob === '') {
            errorElement.text('Date of birth is required');
            $('#dob').addClass('error');
            return false;
        } else {
            const birthDate = new Date(dob);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age < 18) {
                errorElement.text('You must be at least 18 years old');
                $('#dob').addClass('error');
                return false;
            } else {
                errorElement.text('');
                $('#dob').removeClass('error');
                return true;
            }
        }
    }

    function validateGender() {
        const gender = $('#gender').val();
        const errorElement = $('#genderError');

        if (gender === '') {
            errorElement.text('Please select a gender');
            $('#gender').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#gender').removeClass('error');
            return true;
        }
    }

    function validateAddress() {
        const address = $('#address').val().trim();
        const errorElement = $('#addressError');

        if (address === '') {
            errorElement.text('Address is required');
            $('#address').addClass('error');
            return false;
        } else if (address.length < 5) {
            errorElement.text('Address must be at least 5 characters');
            $('#address').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#address').removeClass('error');
            return true;
        }
    }

    function validateCity() {
        const city = $('#city').val().trim();
        const errorElement = $('#cityError');

        if (city === '') {
            errorElement.text('City is required');
            $('#city').addClass('error');
            return false;
        } else if (!/^[a-zA-Z\s\-]+$/.test(city)) {
            errorElement.text('City can only contain letters');
            $('#city').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#city').removeClass('error');
            return true;
        }
    }

    function validateState() {
        const state = $('#state').val().trim();
        const errorElement = $('#stateError');

        if (state === '') {
            errorElement.text('State/Province is required');
            $('#state').addClass('error');
            return false;
        } else if (!/^[a-zA-Z\s\-]+$/.test(state)) {
            errorElement.text('State/Province can only contain letters');
            $('#state').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#state').removeClass('error');
            return true;
        }
    }

    function validateZipcode() {
        const zipcode = $('#zipcode').val().trim();
        const errorElement = $('#zipcodeError');

        if (zipcode === '') {
            errorElement.text('Zip code is required');
            $('#zipcode').addClass('error');
            return false;
        } else if (!/^[a-zA-Z0-9\-\s]+$/.test(zipcode)) {
            errorElement.text('Zip code format is invalid');
            $('#zipcode').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#zipcode').removeClass('error');
            return true;
        }
    }

    function validateEducation() {
        const education = $('#education').val();
        const errorElement = $('#educationError');

        if (education === '') {
            errorElement.text('Please select an education level');
            $('#education').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#education').removeClass('error');
            return true;
        }
    }

    function validatePassword() {
        const password = $('#password').val();
        const errorElement = $('#passwordError');

        if (password === '') {
            errorElement.text('Password is required');
            $('#password').addClass('error');
            return false;
        } else if (password.length < 8) {
            errorElement.text('Password must be at least 8 characters');
            $('#password').addClass('error');
            return false;
        } else if (!/(?=.*[a-z])/.test(password)) {
            errorElement.text('Password must contain lowercase letters');
            $('#password').addClass('error');
            return false;
        } else if (!/(?=.*[A-Z])/.test(password)) {
            errorElement.text('Password must contain uppercase letters');
            $('#password').addClass('error');
            return false;
        } else if (!/(?=.*\d)/.test(password)) {
            errorElement.text('Password must contain numbers');
            $('#password').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#password').removeClass('error');
            return true;
        }
    }

    function validateConfirmPassword() {
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();
        const errorElement = $('#confirmPasswordError');

        if (confirmPassword === '') {
            errorElement.text('Please confirm your password');
            $('#confirmPassword').addClass('error');
            return false;
        } else if (password !== confirmPassword) {
            errorElement.text('Passwords do not match');
            $('#confirmPassword').addClass('error');
            return false;
        } else {
            errorElement.text('');
            $('#confirmPassword').removeClass('error');
            return true;
        }
    }

    function validateTerms() {
        const terms = $('#terms').is(':checked');
        const errorElement = $('#termsError');

        if (!terms) {
            errorElement.text('You must agree to the terms and conditions');
            return false;
        } else {
            errorElement.text('');
            return true;
        }
    }
});
