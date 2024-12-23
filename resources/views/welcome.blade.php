<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Hype Bank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #fff8e1; /* Light golden background */
        color: #6d4c41; /* Warm text color for contrast */
    }

    .header-font {
        font-family: 'Montserrat', sans-serif;
    }

    .btn-hover:hover {
        transform: scale(1.05);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease-in-out;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #ffd700, #ffac33);
        background-size: 200% 200%;
        animation: gradientAnimation 6s ease infinite;
    }

    @keyframes gradientAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .floating-circles {
        position: relative;
    }

    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 1); /* Subtle golden transparency */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .circle.one {
        width: 100px;
        height: 100px;
        top: 15%;
        left: 5%;
    }

    .circle.two {
        width: 150px;
        height: 150px;
        top: 50%;
        right: 15%;
    }

    .circle.three {
        width: 75px;
        height: 75px;
        bottom: 20%;
        left: 40%;
    }
</style>


</head>
<body class="bg-gray-50">

    <!-- Navigation Bar -->
    <header class="gradient-bg shadow-lg">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-black header-font">Hype Bank</h1>
            <nav class="space-x-6 flex-grow flex justify-center">
                <a href="#" class="text-black hover:text-gray-200">Business</a>
                <a href="#" class="text-black hover:text-gray-200">Wealth</a>
                <a href="#" class="text-black hover:text-gray-200">Personal</a>
                <a href="#" class="text-black hover:text-gray-200">Our Story</a>
            </nav>
            <a href="{{ route('login') }}" class="bg-white text-orange-600 px-4 py-2 rounded-lg hover:bg-gray-100">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="flex items-center justify-center min-h-screen gradient-bg floating-circles">
        <div class="max-w-2xl text-center">
        <h1 class="text-5xl font-bold header-font mb-6">Banking with Integrity and Innovation</h1>
            <p class="text-lg mb-8">Transforming the way you manage your finances, with a focus on trust and personalized service.</p>
            <a
                        href="{{ route('register') }}"
                    
                        class="bg-white text-orange-600 px-8 py-3 rounded-lg shadow-lg hover:bg-orange-100 transition duration-300 ease-in-out"

                    >
                        {{ __('Register here') }}
                    </a>
        </div>

        <!-- Circles -->
        <div class="circle one"></div>
        <div class="circle two"></div>
        <div class="circle three"></div>
    </div>

    <section class="bg-black-50 py-10">
    <div class="container mx-auto px-6">
        <!-- Title -->
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-10">OUR SERVICES</h2>
        
        <!-- Grid Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Service Item 1 -->
            <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="ABCD Skybanking" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Hype Skybanking</h3>
                </div>
            </div>

            <!-- Service Item 2 -->
            <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="Offshore Banking" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Offshore Banking</h3>
                </div>
            </div>

            <!-- Service Item 3 -->
            <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="Retail Loan" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Retail Loan</h3>
                </div>
            </div>

            <!-- Service Item 4 -->
            <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="Retail Deposit" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Retail Deposit</h3>
                </div>
            </div>
            <!-- Service Item 5 -->
            <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="Retail Deposit" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Emergency Deposit</h3>
                </div>
            </div>
            <!-- Service Item 4 -->
            <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="Retail Deposit" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Hype WOMEN BANKING</h3>
                </div>
            </div>

             <!-- Service Item 4 -->
             <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="Retail Deposit" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Hype SME LOAN</h3>
                </div>
            </div>
             <!-- Service Item 4 -->
             <div class="relative group">
                <img src="./images/The Secret to Investing Overseas.jpeg" alt="Retail Deposit" class="w-full h-48 object-cover rounded-lg">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                    <h3 class="text-white font-bold text-xl">Hype SME Deposit</h3>
                </div>
            </div>
            <!-- Add more services as needed -->
        </div>
    </div>
</section>

   <!-- Footer Section -->
    <footer class="bg-gray-800 text-gray-200 py-10">
        <div class="container mx-auto px-6 md:grid md:grid-cols-3 md:gap-8">
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-400">Business Banking</a></li>
                    <li><a href="#" class="hover:text-gray-400">Personal Banking</a></li>
                    <li><a href="#" class="hover:text-gray-400">Wealth Management</a></li>
                    <li><a href="#" class="hover:text-gray-400">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-2">
                    <li>Phone: <a href="tel:+1234567890" class="hover:text-gray-400">+1 (234) 567-890</a></li>
                    <li>Email: <a href="mailto:support@abcdbank.com" class="hover:text-gray-400">support@Hypebank.com</a></li>
                    <li>Address: 1234 Bank Street, City, State, ZIP</li>
                </ul>
            </div>
            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <ul class="flex space-x-4">
                    <li><a href="https://www.facebook.com/morshedulislammaruf.00" class="text-gray-400 hover:text-white">Facebook</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Twitter</a></li>
                    <li><a href="" class="text-gray-400 hover:text-white">LinkedIn</a></li>
                    <li><a href="https://www.instagram.com/morshedul_islam_maruf" class="text-gray-400 hover:text-white">Instagram</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="mt-8 text-center text-sm text-gray-500">
            © 2024 Hype Bank. All rights reserved.
        </div>
    </footer>

</body>
</html>
