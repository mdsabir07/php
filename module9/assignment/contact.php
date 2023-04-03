<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment of Module 9</title>
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <header class="p-4 bg-black">
        <div class="w-9/12 mx-auto flex justify-between items-center gap-x-10">
            <div><a href="home.php"><img class="w-full" src="Codermsiit-Logo.png" alt="Logo"></a></div>
            <nav>
                <ul class="flex gap-x-5">
                    <li><a class="text-white uppercase" href="home.php">Home</a></li>
                    <li><a class="text-white uppercase" href="home.php">About</a></li>
                    <li><a class="text-white uppercase" href="home.php">Services</a></li>
                    <li><a class="text-white uppercase" href="home.php">Testimonials</a></li>
                    <li><a class="text-white uppercase" href="blog.php">Blog</a></li>
                    <li><a class="text-white uppercase" href="single.php">Blog single</a></li>
                    <li><a class="text-white uppercase" href="contact.php">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact us</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-700">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="subject" class="block text-sm font-semibold leading-6 text-gray-700">Subject</label>
                    <div class="mt-2.5">
                        <input type="text" name="subject" id="subject" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-700">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit" class="block w-full last: rounded-md bg-black px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </div>
        </form>
    </div>

    <footer class="bg-black p-4">
        <div class="w-9/12 flex justify-between items-center mx-auto">
            <div class="text-white">
                &copy; <?php echo date('Y '); ?><a href="home.php">Coder MSI IT</a> All rights reserved.
            </div>
            <ul class="flex gap-x-5">
                <li><a class="text-white" href="home.php">Privacy Policy</a></li>
                <li><a class="text-white" href="home.php">Tearms of Services</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>