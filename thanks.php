<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-100">

    <div class="flex justify-center items-center w-screen py-10 bg-white" id="feedback">
        <div class="container mx-auto px-4 lg:px-20">
            <div class="w-full">
                <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
                    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                    $message = isset($_POST['message']) ? $_POST['message'] : '';
                ?>
                    <div class="flex flex-col items-center">
                        <h1 class="font-bold text-2xl mb-2">Thank You for Your Feedback!</h1>
                        <p class="text-gray-700">We appreciate your time and input.</p>
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <div class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg">
                            <p><i class="fas fa-user mr-2"></i> First Name: <?php echo $first_name; ?></p>
                        </div>
                        <div class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg">
                            <p><i class="fas fa-user mr-2"></i> Last Name: <?php echo $last_name; ?></p>
                        </div>
                        <div class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg">
                            <p><i class="fas fa-envelope mr-2"></i> Email: <?php echo $email; ?></p>
                        </div>
                        <div class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg">
                            <p><i class="fas fa-phone mr-2"></i> Phone: <?php echo $phone; ?></p>
                        </div>
                    </div>
                    <div class="my-4">
                        <div class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg">
                            <p><i class="fas fa-comment mr-2"></i> Message: <?php echo $message; ?></p>
                        </div>
                    </div>
                <?php
                } else {
                    echo '<h1 class="font-bold text-2xl">Invalid Request</h1>';
                }
                ?>
            </div>
            <hr class="my-2">
            <a href="/web-programming" class="underline text-blue-500">Back to homepage</a>
        </div>

    </div>

</body>

</html>