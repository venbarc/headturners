<!-- SIGN UP modal -->
<div id="signup-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-300 rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="signup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h2 class="mb-4 text-4xl font-extrabold text-center text-gray-">SIGN UP</h2>
                <hr class="my-6 border-gray-900 sm:mx-auto lg:mt-8" />
                <h3 class="mb-4 text-sm font-normal text-center text-gray-">Join Headturner's Today</h3>
                <form class="space-y-6" action="#">

                    <div> <!-- EMAIL -->
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-">Email:</label>
                        <input type="email" name="email" id="email" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="your@gmail.com" required>
                    </div>
                    
                    <div> <!-- First_name -->         
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-">First Name:</label>
                        <input type="text" name="fname" id="fname" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="First Name" required>
                    </div><!-- First_name -->

                    <div> <!-- last_name -->         
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-">Last Name:</label>
                        <input type="text" name="lname" id="lname" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Name" required>
                    </div><!-- last_name -->

                    <div> <!-- last_name -->         
                        <label for="contact" class="block mb-2 text-sm font-medium text-gray-">Contact:</label>
                        <input type="text" name="contact" id="contact" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Contact" required>
                    </div><!-- last_name -->

                    <div><!-- last_name -->
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-200 border border-gray-300 rounded focus:ring-3 focus:ring-blue-300 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-90">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="w-full px-5 py-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Create account</button>
                    <span class="mt-2 text-sm font-medium text-gray-500">
                    By signing up, you agree to the
                    <a href="" class="text-blue-700 hover:underline dark:text-blue-500">Terms of Service ,
                       </a>
                       and
                    <a href=""class="flex justify-center text-blue-700 hover:underline dark:text-blue-500"> Privacy Policy</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div> <!-- SIGN UP modal -->
