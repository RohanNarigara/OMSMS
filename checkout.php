<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OMSMS </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="mt-20">
        <h1 class="flex items-center justify-center font-bold text-blue-600 text-md lg:text-3xl">Checkout
        </h1>
    </div>
    <div class="container p-12 mx-auto">
        <div class="flex flex-col w-full px-0 mx-auto md:flex-row">
            <div class="flex flex-col md:w-full">
                <h2 class="mb-4 font-bold md:text-xl text-heading ">Shipping Address
                </h2>
                <form class="justify-center w-full mx-auto" method="post" action>
                    <div class="">
                        <div class="space-x-0 lg:flex lg:space-x-4">
                            <div class="w-full lg:w-1/2">
                                <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">First
                                    Name</label>
                                <input name="firstName" type="text" placeholder="First Name" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600 " required='true'>
                            </div>
                            <div class="w-full lg:w-1/2 ">
                                <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">Last
                                    Name</label>
                                <input name="Last Name" type="text" placeholder="Last Name" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600 " required='true'>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full">
                                <label for="Email" class="block mb-3 text-sm font-semibold text-gray-500">Email</label>
                                <input name="Last Name" type="text" placeholder="Email" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600 " required='true'>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-full">
                                <label for="Address" class="block mb-3 text-sm font-semibold text-gray-500">Address</label>
                                <textarea class="w-full px-4 py-3 text-xs border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600" name="Address" cols="20" rows="4" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="space-x-0 lg:flex lg:space-x-4">
                            <div class="w-full lg:w-1/2">
                                <label for="city" class="block mb-3 text-sm font-semibold text-gray-500">City</label>
                                <input name="city" type="text" placeholder="City" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600 " required='true'>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="state" class="block mb-3 text-sm font-semibold text-gray-500">State</label>
                                <input name="state" type="text" placeholder="State" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600 " required='true'>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="postcode" class="block mb-3 text-sm font-semibold text-gray-500">
                                    Postcode</label>
                                <input name="postcode" type="number" pattern="\d{6}" title="Please enter a 6-digit number" placeholder="Post Code" class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600" required="true">
                            </div>


                        </div>

                        <div class="relative pt-3 xl:pt-6"><label for="note" class="block mb-3 text-sm font-semibold text-gray-500"> Notes
                                (Optional)</label><textarea name="note" class="flex items-center w-full px-4 py-3 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-600" rows="4" placeholder="Notes for delivery"></textarea>
                        </div>
                        <div class="flex mt-2">
                            <input class="flex-1 mt-4 ml-2 w-60 px-6 py-2 rounded-[20px] text-white bg-blue-600 hover:bg-blue-900" value="Continue to Payment" type="submit">
                            <button class="flex-1 mt-4 ml-2 w-60 px-6 py-2 text-blue-200 hover:text-white bg-blue-600 hover:bg-blue-900 relative">
                                <span class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('includes/pay-mthd-img.jpg');"></span>
                                <span class="relative z-10"></span>
                            </button>

                        </div>

                    </div>
                </form>
            </div>



            <div class="flex flex-col w-full ml-0 lg:ml-12 lg:w-2/5">
                <div class="pt-12 md:pt-0 2xl:ps-4">
                    <h2 class="text-xl font-bold">Order Summary
                    </h2>
                    <div class="mt-8">
                        <div class="flex flex-col space-y-4">
                            <div class="flex space-x-4">
                                <div>
                                    <img src="https://source.unsplash.com/user/erondu/1600x900" alt="image" class="w-60">
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold">Title</h2>
                                    <p class="text-sm">Lorem ipsum dolor sit amet, tet</p>
                                    <span class="text-red-600">Price</span> $20
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <div>
                                    <img src="https://source.unsplash.com/collection/190727/1600x900" alt="image" class="w-60">
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold">Title</h2>
                                    <p class="text-sm">Lorem ipsum dolor sit amet, tet</p>
                                    <span class="text-red-600">Price</span> $20
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex p-4 mt-4">
                        <h2 class="text-xl font-bold">ITEMS 2</h2>
                    </div>
                    <div class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Subtotal<span class="ml-2">$40.00</span></div>
                    <div class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Shipping Tax<span class="ml-2">$10</span></div>
                    <div class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Total<span class="ml-2">$50.00</span></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>