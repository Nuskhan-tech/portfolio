<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohamed Nuskhan - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navigation -->
    <nav class="p-6 bg-white shadow-md fixed w-full top-0 z-50">
        <div class="max-w-6xl mx-auto flex justify-between">
            <a href="#" class="text-xl font-bold text-gray-800">Nuskhan</a>
            <div>
                <a href="#about" class="px-4 py-2">About</a>
                <a href="#experience" class="px-4 py-2">Experience</a>
                <a href="#projects" class="px-4 py-2">Projects</a>
                <a href="#contact" class="px-4 py-2">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex flex-col justify-center items-center text-center">
        <h1 class="text-5xl font-bold">Hello, I'm Mohamed Nuskhan</h1>
        <p class="mt-4 text-lg text-gray-600">Home Automation Engineer & Web Developer</p>
        <div class="mt-6">
            <a href="#projects" class="px-6 py-3 bg-blue-600 text-white rounded-lg">View My Work</a>
            <a href="#contact" class="ml-4 px-6 py-3 border border-blue-600 text-blue-600 rounded-lg">Get in Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white text-center">
        <h2 class="text-3xl font-bold">About Me</h2>
        <p class="mt-4 text-gray-600 max-w-4xl mx-auto">
            I am a passionate Home Automation Engineer specializing in Control4 systems, KNX, and smart home integration.
            I also have experience in web development using Laravel and Python.
        </p>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-16 bg-gray-200 text-center">
        <h2 class="text-3xl font-bold">Experience</h2>
        <div class="mt-8 space-y-6 max-w-4xl mx-auto">
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-2xl font-semibold">Home Automation Engineer - LIVE E Z Pvt Ltd</h3>
                <p class="text-gray-500">Dec 2023 - Present</p>
                <ul class="mt-2 list-disc ml-6 text-gray-600">
                    <li>Configuring and programming smart home systems</li>
                    <li>Integrating Control4, AV, lighting, and security solutions</li>
                    <li>Providing troubleshooting and client training</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-white text-center">
        <h2 class="text-3xl font-bold">Projects</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-2xl font-semibold">Penthouse Automation</h3>
                <p class="text-gray-600">Automated a luxury penthouse using Control4 for seamless control.</p>
            </div>

            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-2xl font-semibold">Laravel Project Management System</h3>
                <p class="text-gray-600">Developed a web-based system for managing home automation projects.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-200 text-center">
        <h2 class="text-3xl font-bold">Contact Me</h2>
        <p class="mt-4 text-gray-600">Feel free to reach out for automation projects or collaborations.</p>

        <div class="mt-6 text-lg">
            <p>Email: <a href="mailto:nuskhannadeer@gmail.com" class="text-blue-600">nuskhannadeer@gmail.com</a></p>
            <p>Phone: +9477 425 8639</p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/mohamed-nuskhan" class="text-blue-600">View Profile</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>© 2025 Nuskhan. All rights reserved.</p>
    </footer>

    <!-- Smooth Scrolling -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute("href")).scrollIntoView({ behavior: "smooth" });
            });
        });
    </script>

</body>
</html>
