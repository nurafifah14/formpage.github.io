<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFF;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #963696;
            color: #fff;
            padding: 1px;
            text-align: center;
        }

        .logo {
            max-width: 150px;
            max-height: 100px;
        }

        h1 {
            margin: 8px 0; /* Adjust margin for h1 */
            font-size: 24px; /* Adjust the font size as needed */
        }

        nav {
            background-color: #dda0dd;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .menu-item {
            display: inline-block;
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
        }

        .profile-container {
            background-color: #dda0dd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin: 20px auto;
            max-width: 600px;
        }

        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-info {
            color: #333;
        }

        .matric-number, .class-group {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .next-button {
            background-color: #963696;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        footer {
            background-color: #963696;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <img class="logo" src="logo.png" alt="Logo">
        <h1>STUDENT PROFILE</h1>
    </header>

    <nav>
        <a class="menu-item" href="#">Home</a>
        <a class="menu-item" href="#">Form</a>
    </nav>

    <div class="profile-container">
        <img class="profile-picture" src="afifah.jpg" alt="Profile Picture of Nur Afifah Binti Mohd Nizam">
        <div class="profile-info">
            <h2>NUR AFIFAH BINTI MOHD NIZAM</h2>
            <p class="matric-number">Matric No: 2021888096</p>
            <p class="class-group">Class Group: RCS2405A</p>
        </div>

        <a href="form.php">
            <button class="next-button" onclick="goToNextPage()">Continue</button>
        </a>
    </div>

    <footer>
        © <?php echo date('Y'); ?> My Web Application
    </footer>

    <script>
        function goToNextPage() {
            // Add your logic to navigate to the next page or perform the desired action
            alert("Going to the next page!");
        }
    </script>
</body>
</html>
