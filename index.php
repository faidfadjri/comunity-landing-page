  <html>

  <head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
      body {
        font-family: "Inter", sans-serif;
      }
    </style>

    <title>By.DEV</title>
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
  </head>

  <body>
    <div class="py-2 bg-gray-100 text-gray-900 min-h-screen">
      <?php include('./components/navbar.php'); ?>

      <main class="w-full">
        <?php include('./components/hero.php'); ?>

        <?php include('./components/companies.php'); ?>

        <?php include('./components/challenge.php'); ?>

        <?php include('./components/contact.php'); ?>

        <div class="px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-indigo-100" id="blog-posts">
          <div class="max-w-screen-xl mx-auto">
            <div class="xl:flex">
              <div>
                <h3 class="leading-none font-black text-3xl">Popular Posts</h3>
                <div class="flex flex-col items-center lg:flex-row lg:items-stretch lg:justify-around">
                  <a href="https://owaiskhan.me" class="flex w-full max-w-sm mt-6 lg:mt-8 xl:mr-8">
                    <div class="transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg bg-gray-100 relative">
                      <div class="w-full h-48 bg-cover rounded-t-lg" style="
                            background-image: url('https://images.unsplash.com/3/doctype-hi-res.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=768&q=80');
                          "></div>
                      <div class="p-6">
                        <div class="text-lg font-bold">
                          Tips for creating an amazing design system
                        </div>
                        <div class="mt-2 text-gray-900 text-sm">
                          Learn how to create a new design system that is
                          beautiful and efficient for creating your UI
                          components.
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="https://timerse.com" class="flex w-full max-w-sm mt-6 lg:mt-8 xl:mr-8">
                    <div class="transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg bg-gray-100 relative">
                      <div class="w-full h-48 bg-cover rounded-t-lg" style="
                            background-image: url('https://images.unsplash.com/photo-1572044162444-ad60f128bdea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=768&q=80');
                          "></div>
                      <div class="p-6">
                        <div class="text-lg font-bold">
                          Using a drawing tablet to create beautiful icons
                        </div>
                        <div class="mt-2 text-gray-900 text-sm">
                          Good Icons are hard to come by. This article guides
                          you on how to create beautiful sketched icons using a
                          drawing pad.
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mt-12 xl:mt-0 xl:ml-8">
                <h3 class="leading-none font-black text-3xl">Recent Posts</h3>
                <div class="flex flex-col items-center lg:flex-row lg:items-stretch lg:justify-around xl:flex-col">
                  <a href="https://owaiskhan.me" class="flex w-full max-w-sm mt-6 lg:mt-8">
                    <div class="transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg bg-gray-100 relative xl:flex xl:flex-row-reverse xl:items-center xl:px-6 xl:py-8">
                      <div class="w-full h-48 bg-cover rounded-t-lg xl:w-32 xl:h-20 xl:rounded-lg xl:ml-2" style="
                            background-image: url('https://images.unsplash.com/photo-1452830978618-d6feae7d0ffa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=512&q=80');
                          "></div>
                      <div class="p-6 xl:p-0">
                        <div class="text-lg font-bold">
                          How to work effectively with freelancers
                        </div>
                        <div class="mt-2 text-gray-900 text-sm xl:hidden">
                          Hiring a freelancer for your new project can be
                          challenging if you've never done before. Learn some
                          tips that will allow you to have a better experience
                          working with freelancers
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="https://owaiskhan.me" class="flex w-full max-w-sm mt-6 lg:mt-8">
                    <div class="transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg bg-gray-100 relative xl:flex xl:flex-row-reverse xl:items-center xl:px-6 xl:py-8">
                      <div class="w-full h-48 bg-cover rounded-t-lg xl:w-32 xl:h-20 xl:rounded-lg xl:ml-2" style="
                            background-image: url('https://images.unsplash.com/photo-1581287053822-fd7bf4f4bfec?ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80');
                          "></div>
                      <div class="p-6 xl:p-0">
                        <div class="text-lg font-bold">
                          How to create smooth React Native animations
                        </div>
                        <div class="mt-2 text-gray-900 text-sm xl:hidden">
                          Animations play a vital role in user experience. This
                          article describes how you can create butter smooth 60
                          FPS animations easily.
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="px-5 sm:px-10 md:px-20 py-8">
        <div class="flex flex-col items-center lg:flex-row-reverse justify-between">
          <div class="">
            <a class="mx-4 text-sm font-bold text-indigo-600 hover:text-indigo-800" href="#">Home</a>
            <a class="mx-4 text-sm font-bold text-indigo-600 hover:text-indigo-800" href="#">About Us</a>
            <a class="mx-4 text-sm font-bold text-indigo-600 hover:text-indigo-800" href="#">Careers</a>
            <!-- <a href="#">About Us</a> -->
            <!-- <a href="#">Careers</a> -->
          </div>
          <div class="mt-4">
            <img src="https://storage.googleapis.com/devitary-image-host.appspot.com/15846435184459982716-LogoMakr_7POjrN.png" class="w-32" />
          </div>
          <div class="mt-4 text-xs font-bold text-gray-500">
            &copy; 2020 TEMPLATANA | MIT License
          </div>
        </div>
      </footer>
    </div>
  </body>

  </html>