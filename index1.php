<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin UI Editor</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Edit Login and Registration UI</h1>
    <form id="uiForm">
        <!-- Color Customization -->
        <label for="bgColor">Background Color:</label>
        <input type="color" id="bgColor" name="bgColor" value="#ffffff"><br>

        <label for="fontColor">Font Color:</label>
        <input type="color" id="fontColor" name="fontColor" value="#000000"><br>

        <label for="btnColor">Button Color:</label>
        <input type="color" id="btnColor" name="btnColor" value="#007bff"><br>

        <!-- Text Customization for Login -->
        <h3>Login Page Text</h3>
        <label for="loginTitle">Login Page Title:</label>
        <input type="text" id="loginTitle" name="loginTitle" value=" Welcome to Aquaguard WebMonitor, your trusted partner in protecting communities from water-related disasters. 
          Our revolutionary system provides real-time water level monitoring and smart response capabilities, 
          allowing for prompt action in the face of floods, storms, and other water-related hazards. 
          Join us in strengthening resilience and safeguarding lives and livelihoods.
          Explore how Aquaguard WebMonitor may help your community today."><br>

        <label for="loginUsernamePlaceholder">Username Placeholder:</label>
        <input type="text" id="loginUsernamePlaceholder" name="loginUsernamePlaceholder" value="Enter your username"><br>

        <label for="loginPasswordPlaceholder">Password Placeholder:</label>
        <input type="text" id="loginPasswordPlaceholder" name="loginPasswordPlaceholder" value="Enter your password"><br>

        <label for="loginButtonText">Login Button Text:</label>
        <input type="text" id="loginButtonText" name="loginButtonText" value="Login"><br>
        
        <label for="fontSize">Font Size:</label>
        <input type="number" id="fontSize" name="fontSize" value="16"><br>

        <!-- Text Customization for Registration -->
        <h3>Registration Page Text</h3>
        <label for="registerTitle">Registration Page Title:</label>
        <input type="text" id="registerTitle" name="registerTitle" value="Register"><br>

        <label for="registerUsernamePlaceholder">Username Placeholder:</label>
        <input type="text" id="registerUsernamePlaceholder" name="registerUsernamePlaceholder" value="Choose a username"><br>

        <label for="registerEmailPlaceholder">Email Placeholder:</label>
        <input type="text" id="registerEmailPlaceholder" name="registerEmailPlaceholder" value="Enter your email"><br>

        <label for="registerPasswordPlaceholder">Password Placeholder:</label>
        <input type="text" id="registerPasswordPlaceholder" name="registerPasswordPlaceholder" value="Create a password"><br>

        <label for="registerButtonText">Register Button Text:</label>
        <input type="text" id="registerButtonText" name="registerButtonText" value="Sign Up"><br>

        <button type="button" id="saveButton">Save Changes</button>
    </form>

    <script>
        $(document).ready(function() {
            $('#saveButton').click(function() {
                $.ajax({
                    url: 'save_ui.php',
                    method: 'POST',
                    data: $('#uiForm').serialize(),
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Saved!',
                            text: 'UI settings have been saved successfully.'
                        });
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'There was an error saving the settings.'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
