@extends('layouts.app')

@section('title', 'Contact Us - Mkula Secondary School')

@section('content')

    <!-- Header Banner -->
    <section class="bg-blue-950 text-white py-12 px-4 border-b-4 border-yellow-500">
        <div class="max-w-7xl mx-auto text-center space-y-2">
            <h1 class="text-3xl md:text-5xl font-extrabold">Contact Us</h1>
            <p class="text-yellow-400 font-semibold italic">"Strive for better future"</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-12 space-y-12">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Left Side: Contact Information & Address -->
            <div class="space-y-6">
                
                <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-blue-900 space-y-6">
                    <h2 class="text-2xl font-bold text-gray-800 border-b pb-3">Get in Touch</h2>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Have questions regarding admissions, academic progress, or general inquiries? Reach out to us using the contact details below or fill out the message form.
                    </p>

                    <div class="space-y-4 text-sm">
                        <div class="flex items-start gap-4">
                            <div class="bg-blue-100 p-3 rounded-full text-blue-900 font-bold">📍</div>
                            <div>
                                <h4 class="font-bold text-gray-800">Physical & Postal Address</h4>
                                <p class="text-gray-600">
                                    Mkula Secondary School<br>
                                    Mkula Village, Busega District<br>
                                    P.O. Box 157, Busega, Simiyu, Tanzania
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-yellow-100 p-3 rounded-full text-yellow-900 font-bold">📞</div>
                            <div>
                                <h4 class="font-bold text-gray-800">Phone Numbers</h4>
                                <p class="text-gray-600">+255 700 000 000 / +255 711 000 000</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-full text-green-900 font-bold">✉️</div>
                            <div>
                                <h4 class="font-bold text-gray-800">Email Address</h4>
                                <p class="text-gray-600">info@mkulasecondary.ac.tz</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Map Embed - Busega / Simiyu Location -->
                <div class="bg-white p-4 rounded-lg shadow-md border overflow-hidden">
                    <h3 class="font-bold text-gray-800 mb-3 text-sm">School Location Map (Busega, Simiyu)</h3>
                    <div class="w-full h-64 rounded overflow-hidden">
                        <iframe 
                            class="w-full h-full border-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127392.123456789!2d33.7000!3d-2.5000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMsKwMzAnMDAuMCJTIDMzwrA0MicwMC4wIkU!5e0!3m2!1sen!2stz!4v1600000000000" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>

            <!-- Right Side: Direct Message Form -->
            <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-yellow-500 space-y-6">
                <h2 class="text-2xl font-bold text-gray-800 border-b pb-3">Send Us a Message</h2>
                
                <form id="contactForm" onsubmit="handleFormSubmit(event)" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Your Full Name</label>
                        <input type="text" required placeholder="John Doe" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none text-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address / Phone Number</label>
                        <input type="text" required placeholder="example@mail.com or 07xx xxx xxx" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none text-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Subject</label>
                        <input type="text" required placeholder="Inquiry about Form 1 Admission" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none text-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                        <textarea rows="5" required placeholder="Type your message here..." class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none text-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 rounded-lg shadow transition">
                        Send Message
                    </button>
                </form>
            </div>

        </div>

    </div>

    <script>
        function handleFormSubmit(event) {
            event.preventDefault();
            alert('Thank you! Your message has been sent successfully.');
            document.getElementById('contactForm').reset();
        }
    </script>

@endsection