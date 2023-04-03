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


    <main class="w-9/12 mx-auto m-20 grid grid-cols-3 gap-10 blog">
        <div class="post">
            <img class="w-full h-60 object-cover" src="https://images.unsplash.com/photo-1680176750034-8d11a2f71096?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80" alt="Post title">
            <h2 class="text-3xl font-bold leading-10 mt-3 line-clamp-1"><a href="single.php">sit amet consectetur elit.</a></h2>
            <p class="line-clamp-2 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere earum amet natus quas ea perspiciatis neque deleniti dolorem accusamus natus quas ea perspiciatis neque deleniti reprehenderit?</p>
        </div>
        <div class="post">
            <img class="w-full h-60 object-cover" src="https://plus.unsplash.com/premium_photo-1670002336255-6c713d702ade?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Post title">
            <h2 class="text-3xl font-bold leading-10 mt-3 line-clamp-1"><a href="single.php">Lorem ipsum dolor sit amet consectetur elit.</a></h2>
            <p class="line-clamp-2 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere earum amet natus quas ea perspiciatis neque deleniti dolorem accusamus natus quas ea perspiciatis neque deleniti reprehenderit?</p>
        </div>
        <div class="post">
            <img class="w-full h-60 object-cover" src="https://images.unsplash.com/photo-1680330386633-fdad7abdf93d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Post title">
            <h2 class="text-3xl font-bold leading-10 mt-3 line-clamp-1"><a href="single.php">Lorem ipsum dolor sit amet consectetur elit.</a></h2>
            <p class="line-clamp-2 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere earum amet natus quas ea perspiciatis neque deleniti dolorem accusamus natus quas ea perspiciatis neque deleniti reprehenderit?</p>
        </div>
        <div class="post">
            <img class="w-full h-60 object-cover" src="https://images.unsplash.com/photo-1590073844006-33379778ae09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="Post title">
            <h2 class="text-3xl font-bold leading-10 mt-3 line-clamp-1"><a href="single.php">Lorem ipsum dolor sit amet consectetur elit.</a></h2>
            <p class="line-clamp-2 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere earum amet natus quas ea perspiciatis neque deleniti dolorem accusamus natus quas ea perspiciatis neque deleniti reprehenderit?</p>
        </div>
        <div class="post">
            <img class="w-full h-60 object-cover" src="https://plus.unsplash.com/premium_photo-1670270312555-ee722a1bbc4c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Post title">
            <h2 class="text-3xl font-bold leading-10 mt-3 line-clamp-1"><a href="single.php">Lorem ipsum dolor sit amet consectetur elit.</a></h2>
            <p class="line-clamp-2 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere earum amet natus quas ea perspiciatis neque deleniti dolorem accusamus natus quas ea perspiciatis neque deleniti reprehenderit?</p>
        </div>
        <div class="post">
            <img class="w-full h-60 object-cover" src="https://plus.unsplash.com/premium_photo-1678567670653-36af920cc0ec?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Post title">
            <h2 class="text-3xl font-bold leading-10 mt-3 line-clamp-1"><a href="single.php">Lorem ipsum dolor sit amet consectetur elit.</a></h2>
            <p class="line-clamp-2 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere earum amet natus quas ea perspiciatis neque deleniti dolorem accusamus natus quas ea perspiciatis neque deleniti reprehenderit?</p>
        </div>
    </main>

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