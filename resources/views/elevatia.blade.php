<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEVATIA Properties - Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #808080 0%, #c2a476 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-container img {
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            font-family: inherit;
        }

        /* Style for intl-tel-input */
        .iti {
            width: 100%;
        }

        .iti__flag-container {
            z-index: 1;
        }

        #phone {
            padding-left: 52px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 8px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .checkbox-item label {
            margin-bottom: 0;
            cursor: pointer;
            font-weight: normal;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #808080 0%, #606060 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(128, 128, 128, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .form-container {
                padding: 25px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="logo-container">
            <img src="elevatia.jpg" alt="ELEVATIA Properties Logo">
        </div>

        <h1>Open House Registration Form</h1>

        <form id="contactForm" method="POST" action="#">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First Name *</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name *</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="day">Select Day *</label>
                <select id="day" name="day" required>
                    <option value="">Choose a day</option>
                    <option value="13">Day 13</option>
                    <option value="14">Day 14</option>
                    <option value="15">Day 15</option>
                </select>
            </div>

            <div class="form-group">
                <label for="timeSlot">Time Slot *</label>
                <select id="timeSlot" name="timeSlot" required>
                    <option value="">Choose a time</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="13:00">1:00 PM</option>
                    <option value="14:00">2:00 PM</option>
                    <option value="15:00">3:00 PM</option>
                    <option value="16:00">4:00 PM</option>
                    <option value="17:00">5:00 PM</option>
                    <option value="18:00">6:00 PM</option>
                </select>
            </div>

            <div class="form-group">
                <label>Interested In *</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="villa" name="interested[]" value="villa">
                        <label for="villa">Villa</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="townhouse" name="interested[]" value="townhouse">
                        <label for="townhouse">Townhouse</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="apartment" name="interested[]" value="apartment">
                        <label for="apartment">Apartment</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script>
        const form = document.getElementById('contactForm');
        const phoneInputField = document.querySelector("#phone");

        // Initialize intl-tel-input with UAE as default
        const iti = window.intlTelInput(phoneInputField, {
            initialCountry: "ae",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
        });

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = new FormData(this);
            const interested = formData.getAll('interested[]');

            // Validate that at least one property type is selected
            if (interested.length === 0) {
                alert('Please select at least one property type you are interested in.');
                return;
            }

            // Get country code from selected flag
            const countryData = iti.getSelectedCountryData();
            const countryCode = countryData.dialCode;

            // Get the phone number that user entered (remove all non-digit characters)
            const rawInput = phoneInputField.value.trim();
            const phoneNumber = rawInput.replace(/\D/g, ''); // Remove all non-digit characters

            // Prepare data for Google Sheets
            const submitData = {
                firstName: formData.get('firstName'),
                lastName: formData.get('lastName'),
                email: formData.get('email'),

                countryCode: '+' + countryCode,
                phone: phoneNumber,
                day: formData.get('day'),
                timeSlot: formData.get('timeSlot'),
                interested: interested.join(', '),
            };

            // Submit to Google Sheets via Apps Script
            fetch("https://script.google.com/macros/s/AKfycbx2QPr_aIVcH6J9WYWLfy_9E4pdVqXhTGf7F6S_7k-_bRLsM0xrhxG-FsIjiw7XklnN/exec", {
                    method: "POST",
                    body: JSON.stringify(submitData)
                })
                .then(res => res.json())
                .then(data => {
                    if (data.result === "success") {
                        alert("✅ Great! Your form has been submitted successfully.");
                        form.reset();
                        iti.setCountry("ae"); // reset to UAE after submit
                    } else {
                        alert("⚠️ Something went wrong. Try again.");
                    }
                })
                .catch(err => {
                    console.error('Error:', err);
                    alert("Error: " + err);
                });
        });
    </script>
</body>

</html>