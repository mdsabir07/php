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

    <main class="w-6/12 mx-auto m-20 single">
        <article>
            <header class="mb-5">
                <h1 class="text-5xl font-bold mb-3">Lorem ipsum dolor sit amet consectetur.</h1>
                <!-- <h1 class="text-5xl font-bold mb-3"><?php //echo $title; ?></h1> -->
                <p>by <?php echo get_current_user(); ?></p>
                
            </header>

            <figure>
                <img class="w-full max-h-85 object-cover mb-5" src="https://images.unsplash.com/photo-1680176750034-8d11a2f71096?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80" alt="Post Image">
                <!-- <figcaption>Image Caption</figcaption> -->
            </figure>

            <p class="mt-5">Post content goes here. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus quod magnam perspiciatis harum aliquam quam soluta id accusantium. Dolorum, sit! Temporibus, nemo? Ad sapiente in excepturi beatae quis quae eos aspernatur itaque voluptas, cupiditate enim autem obcaecati expedita consectetur nihil nostrum quaerat aut facilis commodi libero. Excepturi nostrum voluptates vel, qui odio adipisci quis aspernatur facere eum iure? Nostrum.</p>
            <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quos cupiditate corrupti illum eveniet commodi magnam numquam debitis maiores alias sequi deleniti delectus voluptatibus laudantium, explicabo, sit molestias repellendus recusandae distinctio est fugit ipsum necessitatibus nam aspernatur! Minima ipsa quos atque saepe obcaecati voluptas possimus repellendus consequuntur sapiente sunt est provident distinctio voluptates in dignissimos iure vel aliquid, eveniet, unde, dolores facilis. Voluptate obcaecati cum, eveniet similique aliquid odit odio id vel, sed quia sit explicabo animi nihil iure ab!</p>

            <footer class="flex justify-between mt-10">
                <p class="font-semibold">Posted on: <?php echo date('d M, Y'); ?></p>

                <!-- Social Sharing Buttons -->
                <div class="flex"><span class="text-xl font-semibold">Share:</span>
          <a class="icon-10 facebook" href="https://www.facebook.com/sharer/sharer.php?u=example.com" title="Facebook"  target="_blank">
            <div class="ir">
              <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="30" height="30">
                <path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"></path>
              </svg>
            </div>
          </a>

          <a class="icon-26 twitter" href="https://twitter.com/intent/tweet?url=example.com" title="Twitter" target="_blank">
            <div class="ir">
              <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="30" height="30">
                <path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"></path>
              </svg>
            </div>
          </a>

          <a class="icon-17 linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=example.com" title="LinkedIn" target="_blank">
            <div class="ir">
              <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="30" height="30">
                <path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"></path>
              </svg>
            </div>
          </a>
          
          <a class="icon-18 reddit" href="https://www.reddit.com/submit?url=example.com" title="reddit"  target="_blank">
            <div class="ir">
              <svg viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="30" height="30">
                <path d="M454 251.848C454 227.864 434.382 208.321 410.254 208.321C398.47 208.321 387.837 213.026 379.97 220.593C350.181 201.018 309.858 188.516 265.256 186.936L289.68 110.148L355.777 125.644L355.678 126.598C355.678 146.206 371.708 162.196 391.458 162.196C411.175 162.196 427.206 146.239 427.206 126.598C427.206 106.956 411.143 91 391.425 91C376.284 91 363.38 100.442 358.18 113.701L286.948 97.0207C283.854 96.264 280.661 98.0735 279.706 101.1L252.484 186.739C205.775 187.298 163.445 199.866 132.338 220.034C124.537 212.829 114.168 208.321 102.713 208.321C78.6183 208.354 59 227.864 59 251.848C59 267.805 67.7887 281.623 80.6921 289.222C79.8362 293.861 79.2767 298.533 79.2767 303.337C79.2437 367.656 158.408 420 255.677 420C352.979 420 432.11 367.656 432.11 303.337C432.11 298.829 431.617 294.388 430.86 290.012C444.553 282.643 454 268.397 454 251.848ZM170.522 281.721C170.522 267.443 182.207 255.796 196.559 255.796C210.91 255.796 222.563 267.41 222.563 281.721C222.563 296 210.877 307.614 196.559 307.614C182.207 307.646 170.522 296.033 170.522 281.721ZM319.634 358.543C306.533 371.571 285.927 377.921 256.697 377.921L256.467 377.888L256.237 377.921C227.007 377.921 206.401 371.571 193.3 358.543C190.897 356.174 190.897 352.292 193.3 349.923C195.67 347.554 199.587 347.554 201.957 349.923C212.655 360.55 230.397 365.748 256.237 365.748L256.467 365.781L256.697 365.748C282.504 365.748 300.279 360.583 310.977 349.923C313.38 347.554 317.231 347.554 319.634 349.923C322.037 352.292 322.037 356.174 319.634 358.543ZM316.54 307.646C302.188 307.646 290.536 296.033 290.536 281.754C290.536 267.476 302.221 255.829 316.54 255.829C330.892 255.829 342.544 267.443 342.544 281.754C342.544 296.033 330.892 307.646 316.54 307.646Z"></path>
              </svg>
            </div>
          </a>
                </div>
            </footer>
        </article>
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