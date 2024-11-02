<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
        }

        /* Form container */
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        /* Heading */
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        /* Submit button styling */
        button[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Link styling */
        .form-container a {
            text-align: center;
            display: block;
            margin-top: 20px;
            color: #4CAF50;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .form-container a:hover {
            color: #388E3C;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Enter Student Information</h2>
        <form action="insert_student.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" maxlength="30" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" maxlength="30" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" maxlength="30">

            <label for="maks">Maks:</label>
            <input type="number" id="maks" name="maks" required>

            <button type="submit">Submit</button>
        </form>
        <a href="displayData.php">Display Data</a>
    </div>
</body>
</html>
