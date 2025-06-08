<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/header.php" ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <section class="max-w-4xl mx-auto bg-white p-8 md:p-12 rounded-lg shadow-xl">
            <!-- Section Heading -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-center text-blue-700 mb-6 md:mb-8 leading-tight">
                Get in Touch with Us
            </h1>

            <!-- Introduction Text -->
            <p class="text-lg md:text-xl text-center text-gray-600 mb-8 md:mb-10 leading-relaxed">
                Have a question about our collections, need assistance with an order, or just want to say hello?
                We'd love to hear from you! Reach out to us through any of the methods below.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                <!-- Contact Information -->
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Information</h2>
                    <p class="text-gray-700 mb-2">
                        <strong class="font-semibold">Email:</strong> <a href="mailto:info@[yourbrand].com" class="text-blue-600 hover:underline">info@[yourbrand].com</a>
                    </p>
                    <p class="text-gray-700 mb-2">
                        <strong class="font-semibold">Phone:</strong> <a href="tel:+1234567890" class="text-blue-600 hover:underline">+1 (234) 567-890</a>
                    </p>
                    <p class="text-gray-700 mb-2">
                        <strong class="font-semibold">Address:</strong> 123 Fashion Lane, Style City, SC 12345
                    </p>
                    <div class="mt-6 w-full">
                        <!-- Placeholder for a map or social media links -->
                        <img src="https://placehold.co/400x200/CBD5E1/475569?text=Find+Us+Here" alt="Placeholder map or location" class="rounded-lg shadow-md mx-auto md:mx-0 max-w-full h-auto">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center md:text-left">Send Us a Message</h2>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Your Name" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="your@example.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Regarding your order / General inquiry">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Type your message here..." required></textarea>
                        </div>
                        <div class="text-center md:text-left">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php require "partials/footer.php"; ?>