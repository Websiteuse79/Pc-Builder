<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pc Modification Maintenance & Repair</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-bg {
            position: relative;
            overflow: hidden;
            min-height: 60vh;
            height: 100vh;
            max-height: 900px;
            display: flex;
            align-items: stretch;
        }
        .hero-bg video.bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            min-height: 100%;
            min-width: 100%;
            object-fit: cover;
            z-index: 0;
            aspect-ratio: 16/9;
        }
        .hero-bg .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: 1;
        }
        .glow-effect {
            box-shadow: 0 0 15px rgba(37, 99, 235, 0.5), 0 0 5px rgba(37, 99, 235, 0.3);
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-100 text-slate-800">
     <?php
    session_start();
    // Prevent order placement if not logged in
    if (
        ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['place_order']) || isset($_POST['checkout']) || isset($_POST['add_to_cart']))) &&
        !isset($_SESSION['user'])
    ) {
        header('Location: Login/login.php');
        exit;
    }
    ?>
    
    <?php include 'navbar.php'; ?>
    
    <main>
        <!-- Hero Section -->
        <section class="hero-bg text-white">
            <video class="bg-video" autoplay muted loop playsinline poster="assets/Maintenance Video.mp4">
                <source src="assets/Maintenance Video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay"></div>
            <div class="relative z-10 container mx-auto px-6 py-32 text-center flex flex-col justify-center h-full">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">Your PC's Health is Our Priority</h1>
                <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-8">Fast, reliable, and affordable PC maintenance and repair services to get your computer running like new again.</p>
                <div class="flex justify-center">
                    <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-10 rounded-full text-base transition duration-300 transform hover:scale-105 glow-effect" style="height: 54px; width: 240px;">Book a Repair Now</a>
                </div>
            </div>
        </section>
        
        <!-- Services Section -->
        <section id="services" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Our Services</h2>
                    <p class="text-gray-600 mt-2">Comprehensive solutions for all your PC needs.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Card 1 -->
                    <div class="bg-white rounded-xl p-8 transform hover:-translate-y-2 transition duration-300 shadow-lg border border-gray-200 hover:border-blue-600">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-slate-900 mb-3">Virus & Malware Removal</h3>
                        <p class="text-gray-600">We perform deep scans to eliminate threats and secure your system against future attacks.</p>
                    </div>
                    <!-- Service Card 2 -->
                    <div class="bg-white rounded-xl p-8 transform hover:-translate-y-2 transition duration-300 shadow-lg border border-gray-200 hover:border-blue-600 flex flex-col">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-slate-900 mb-3">Hardware Repair & Upgrades</h3>
                        <p class="text-gray-600 flex-grow">From screen replacements to RAM upgrades, we handle all hardware issues to boost performance.</p>
                    </div>
                    <!-- Service Card 3 -->
                    <div class="bg-white rounded-xl p-8 transform hover:-translate-y-2 transition duration-300 shadow-lg border border-gray-200 hover:border-blue-600">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path><path d="M12 12v9"></path><path d="m8 17 4 4 4-4"></path></svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-slate-900 mb-3">Software Troubleshooting</h3>
                        <p class="text-gray-600">Resolving operating system errors, software crashes, and compatibility problems efficiently.</p>
                    </div>
                    <!-- Service Card 4 -->
                    <div class="bg-white rounded-xl p-8 transform hover:-translate-y-2 transition duration-300 shadow-lg border border-gray-200 hover:border-blue-600">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-slate-900 mb-3">Data Recovery & Backup</h3>
                        <p class="text-gray-600">Recovering lost files from failed drives and setting up robust backup solutions for your peace of mind.</p>
                    </div>
                    <!-- Service Card 5 -->
                    <div class="bg-white rounded-xl p-8 transform hover:-translate-y-2 transition duration-300 shadow-lg border border-gray-200 hover:border-blue-600">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-slate-900 mb-3">Performance Tune-Up</h3>
                        <p class="text-gray-600">Optimizing your system for speed by cleaning up junk files, defragmenting drives, and updating software.</p>
                    </div>
                    <!-- Service Card 6 -->
                    <div class="bg-white rounded-xl p-8 transform hover:-translate-y-2 transition duration-300 shadow-lg border border-gray-200 hover:border-blue-600 flex flex-col">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 5 4 4"></path><path d="M13 7.4 7.07 13.33c-.9.9-.55 2.51.65 3.12l1.51.76c.49.24 1.05.24 1.53 0l1.51-.76c1.2-1.2 1.55-2.22.65-3.12L7.4 7.9c-.2-.2-.2-.51 0-.71l2.83-2.83c.2-.2.51-.2.71 0l2.83 2.83c.2.2.2.51 0 .71L13 7.4z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-slate-900 mb-3">Custom PC Builds</h3>
                        <p class="text-gray-600 flex-grow">Building tailor-made PCs for gaming, professional work, or home use, based on your specific needs and budget.</p>
                    </div>
                    <!-- Service Card 7 -->
                    <div class="bg-white rounded-xl p-8 transform hover:-translate-y-2 transition duration-300 shadow-lg border border-gray-200 hover:border-blue-600">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 21h12v-2a4.6 4.6 0 0 0-4.6-4.6H8.4A4.6 4.6 0 0 0 3.8 9V7a4.6 4.6 0 0 1 4.6-4.6h0A4.6 4.6 0 0 1 13 7v2"/><path d="M11 21H2"/><path d="M15 14a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1Z"/><path d="M22 14h-2.5a1.5 1.5 0 0 0-1.5 1.5V21"/></svg>
                        </div>
                        <h3 class="text-2xl font-semibold text-slate-900 mb-3">PC Cleaning</h3>
                        <p class="text-gray-600">Thorough internal and external cleaning to remove dust, improving airflow and system longevity.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Us Section -->
        <section id="about" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="mdw-1/2">
                        <img src="./assets/images/PC technician at work.png" alt="PC technician at work" class="rounded-xl shadow-2xl">
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Why Choose Pc Modification?</h2>
                        <p class="text-gray-600 mb-6">With over a decade of experience, our certified technicians are passionate about technology and dedicated to providing exceptional service. We believe in transparent pricing, honest advice, and quality workmanship.</p>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Expert Technicians</h4>
                                    <p class="text-gray-600">Our team is certified and stays updated with the latest tech trends.</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Fast Turnaround</h4>
                                    <p class="text-gray-600">We prioritize quick and efficient repairs to minimize your downtime.</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Affordable & Transparent Pricing</h4>
                                    <p class="text-gray-600">No hidden fees. We provide a clear quote before any work begins.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Get in Touch</h2>
                    <p class="text-gray-600 mt-2">Have a question or need a custom quote? We're here to help.</p>
                </div>
                <div class="max-w-3xl mx-auto bg-white rounded-xl p-8 border border-gray-200 shadow-lg">
                    <form action="save_contact.php" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-semibold mb-2">Your Full Name</label>
                                <input type="text" id="name" name="Customer_Name" class="w-full bg-gray-200 text-slate-800 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition" placeholder="Full Name" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-gray-700 font-semibold mb-2">Your Phone Number</label>
                                <input type="tel" id="phone" name="Customer_Phone_Number" pattern="[0-9]{10}" maxlength="10" minlength="10" class="w-full bg-gray-200 text-slate-800 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition" placeholder="Enter 10 digit number" required oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                               
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Your Email</label>
                                <input type="email" id="email" name="Customer_Email" class="w-full bg-gray-200 text-slate-800 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition" placeholder="Your.Email@example.com" required>
                            </div>
                            <div>
                                <label for="address" class="block text-gray-700 font-semibold mb-2">Your Address</label>
                                <input type="text" id="address" name="Customer_Address" class="w-full bg-gray-200 text-slate-800 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition" placeholder="123 Main St, City, State" required>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="service" class="block text-gray-700 font-semibold mb-2">Service Needed</label>
                            <select id="service" name="Service_Needed" class="w-full bg-gray-200 text-slate-800 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition">
                                <option>Select a service...</option>
                                <option>Virus & Malware Removal - Starting from ₹2,500</option>
                                <option>Hardware Repair & Upgrades - Starting from ₹4,000</option>
                                <option>Software Troubleshooting - Starting from ₹1,500</option>
                                <option>Data Recovery & Backup - Starting from ₹5,000</option>
                                <option>Performance Tune-Up - Starting from ₹2,000</option>
                                <option>Custom PC Build - Starting from ₹15,000</option>
                                <option>PC Cleaning - Starting from ₹1,200</option>
                                <option>Other (Request Quote)</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                            <textarea id="message" name="Message" rows="5" class="w-full bg-gray-200 text-slate-800 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition" placeholder="Describe your PC issue here..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 glow-effect">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="bg-slate-800 border-t border-slate-700">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <a href="#" class="text-xl font-bold text-white flex items-center mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 text-blue-400"><path d="M12 11.55C12 10.13 10.87 9 9.45 9H4.2C2.43 9 1 10.43 1 12.2V12.8C1 14.57 2.43 16 4.2 16H9.45C10.87 16 12 14.87 12 13.45V11.55Z"></path><path d="M23 12.2V12.8C23 14.57 21.57 16 19.8 16H14.55C13.13 16 12 14.87 12 13.45V11.55C12 10.13 13.13 9 14.55 9H19.8C21.57 9 23 10.43 23 12.2Z"></path><path d="M17.15 16.85C17.15 17.76 16.41 18.5 15.5 18.5H8.5C7.59 18.5 6.85 17.76 6.85 16.85V8.15C6.85 7.24 7.59 6.5 8.5 6.5H15.5C16.41 6.5 17.15 7.24 17.15 8.15V16.85Z"></path></svg>
                    Pc Modification
                </a>
                <p class="text-gray-400 text-sm">&copy; 2024 Pc Modification. All Rights Reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white transition"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                </div>
            </div>
        </div>
    </footer>
      <script src="script.js"></script>
</body>
</html>

