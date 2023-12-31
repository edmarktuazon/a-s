<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <link rel="shortcut icon" href="./assets/images/UA-Logo.png" type="image/x-icon">

    <!-- output -->
    <link rel="stylesheet" href="./dist/output.css" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- sweetalert2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body class="font-inter">
    <?php
require('database.php');
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    $username = stripslashes($_POST['username']);
    $password = stripslashes($_POST['password']);
    // Check if all fields are empty
    if (empty($username) || empty($password)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'All fields are required',
                text: 'Please fill in all the required fields.',
            }).then(() => {
                location.href = 'registration.php';
            });
        </script>";
    } else {
        // Check if the username or email already exists
        $checkQuery = "SELECT * FROM accounts WHERE username = '$username'";
        $checkResult = mysqli_query($con, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Username already exists',
                    text: 'Please choose a different username.',
                }).then(() => {
                    location.href = 'registration.php';
                });
            </script>";
        } else {
            // If username and email are unique, proceed with registration
          $query = "INSERT INTO `accounts` (username, password)
          VALUES ('$username', '" . md5($password) . "')";


            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Registration successful',
                        confirmButtonText: 'Proceed to login'
                    }).then(() => {
                        location.href = 'login.php';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Registration failed',
                        text: 'An error occurred while registering. Please try again.',
                    }).then(() => {
                        location.href = 'registration.php';
                    });
                </script>";
            }
        }
    }
} else {
    // Your registration form HTML here
?>

    <section
        class="bg-hero-bg min-h-screen bg-center bg-cover bg-no-repeat relative flex flex-col items-center justify-center w-full px-4 py-10 md:p-0">
        <form class="bg-white py-20 px-8 rounded-md md:px-36 md:rounded-full" method="post" name="login">
            <div class="flex items-center flex-col space-y-2 mb-5">
                <i class='bx bx-user-circle text-9xl text-gray-600'></i>
                <h1 class="uppercase  text-gray-600 mb-5 text-3xl md:text-4xl">
                    Sign Up
                </h1>
            </div>
            <div class="blocl space-y-3">
                <!-- username -->
                <div class="relative">
                    <i class="fa-solid fa-user absolute top-[16px] left-[14px] text-xl text-gray-600"></i>
                    <span class="block h-[20px] absolute top-[16px] left-[46px] bg-gray-700 w-[1px]"></span>
                    <input type="text" name="username" placeholder="Username"
                        class="w-full py-3 pl-14 rounded-xl text-gray-600 border border-gray-600" />
                </div>
                <!-- password -->
                <div class="relative">
                    <i class="fa-solid fa-lock absolute top-[16px] left-[14px] text-xl text-gray-600"></i>
                    <span class="block h-[20px] absolute top-[16px] left-[46px] bg-gray-700 w-[1px]"></span>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full py-3 pl-14 rounded-xl text-gray-600 border border-gray-600" />
                    <p class="text-gray-600 pt-2">
                        Already have an account?
                        <a href="login.php" class="underline">
                            Login here
                        </a>
                    </p>
                </div>
                <div class="pt-3">
                    <button type="submit" name="submit"
                        class="w-full bg-primary p-3 text-center uppercase border-[2px]  text-white rounded-md hover:bg-transparent hover:border-primary hover:border-[2px] hover:text-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
        <div class="mt-10">
            <p class="text-white text-xl text-center md:text-2xl">
                GREETINGS! PLEASE LOG IN / SIGN UP TO PROCEED TO CHAT BOT
            </p>
        </div>
        <?php
    }
?>

    </section>

    <!-- custom js -->
    <script src="./src/script.js"></script>
</body>

</html>