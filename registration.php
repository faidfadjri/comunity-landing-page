<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BY.DEV Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["username"])) {
            // Display thank you message
            $username = $_GET["username"];
            $email = $_GET["email"];
            $address = $_GET["address"];
            $phoneNumber = $_GET["phoneNumber"];
        ?>
            <div class="mb-6">
                <p class="text-lg font-semibold mb-2">Thank you, <?php echo $username; ?>!</p>
                <p class="opacity-60">We have received your registration details:</p>
                <ul class="list-disc pl-6 mt-2">
                    <li>Email: <?php echo $email; ?></li>
                    <li>Address: <?php echo $address; ?></li>
                    <li>Phone Number: <?php echo $phoneNumber; ?></li>
                </ul>

            </div>
            <hr class="my-3">
            <a href="/web-programming" class="mt-2 underline text-blue-500">Back to homepage</a>
        <?php
        } else {
        ?>
            <div class="flex flex-col gap-2 mb-5">
                <h2 class="text-2xl font-semibold">Getting Started.</h2>
                <p class="opacity-60">Please fill the registration form below</p>
            </div>
            <form method="GET">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                    <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-600">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-600">Address</label>
                    <input type="text" id="address" name="address" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-6">
                    <label for="phoneNumber" class="block text-sm font-medium text-gray-600">Phone Number</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md w-full font-semibold">Start</button>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>