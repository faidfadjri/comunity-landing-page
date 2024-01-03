<div class="flex justify-center items-center w-screen py-10 bg-white" id="feedback">
    <div class="container mx-auto px-4 lg:px-20">
        <form action="/web-programming/thanks.php" method="POST">
            <div class="w-full">
                <div class="flex">
                    <h1 class="font-bold text-2xl">Give us a feedback</h1>
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="First Name*" name="first_name" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Last Name*" name="last_name" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Email*" name="email" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" placeholder="Phone*" />
                </div>
                <div class="my-4">
                    <textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="message"></textarea>
                </div>
                <div class="w-1/2 lg:w-1/4">
                    <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                        Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>