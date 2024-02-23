<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/img.jpg'); /* Replace 'img/img.jpg' with the correct path to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif; /* Change font-family as needed */
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Add transparency to navbar background color */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Add transparency to container background color */
            border-radius: 10px; /* Add border radius for container */
            padding: 20px;
            margin-top: 50px; /* Adjust margin-top for better alignment */
        }
    </style>
</head>
<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript for form validation
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            var nameInput = document.getElementById('name');
            var emailInput = document.getElementById('email');

            if (nameInput.value.trim() === '' || emailInput.value.trim() === '') {
                event.preventDefault();
                alert('Please fill in all fields.');
            }
        });
    </script>
</body>
</html>
