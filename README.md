<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mohamed Nuskhan - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>

        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #f6f9fc 0%, #eef2f7 100%);
        }

        .card-shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .hover-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
        }

        .nav-blur {
            backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.85);
        }

        .section-gradient {
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        }

        .btn-primary {
            background: linear-gradient(90deg, #2563eb 0%, #4f46e5 100%);
            transition: all 0.4s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.35);
        }

        .text-gradient {
            background: linear-gradient(90deg, #1e40af 0%, #4f46e5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .skill-pill {
            background: linear-gradient(90deg, #f1f5f9 0%, #f8fafc 100%);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .skill-pill:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border-color: #cbd5e1;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        .progress-bar {
            height: 6px;
            background: linear-gradient(90deg, #2563eb 0%, #4f46e5 100%);
            border-radius: 3px;
            transition: width 1.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            width: 0;
        }

        .certification-card {
            border-left: 4px solid #2563eb;
            transition: all 0.3s ease;
        }

        .certification-card:hover {
            border-left-color: #4f46e5;
            transform: translateX(5px);
        }

        /* Enhanced experience section */
        .experience-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .experience-card:hover {
            border-left-color: #2563eb;
            transform: translateX(5px);
        }

        .experience-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, #2563eb, #4f46e5);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.6s ease;
        }

        .experience-card:hover::before {
            transform: scaleY(1);
        }

        /* New animations */
        .nav-link {
            position: relative;
            padding-bottom: 2px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #2563eb 0%, #4f46e5 100%);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Pulse animation for buttons */
        @keyframes pulse-border {
            0% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
            }
        }

        .pulse-effect {
            animation: pulse-border 2s infinite;
        }

        /* Glow effect for skill-pills */
        @keyframes glow {
            0% {
                box-shadow: 0 0 5px rgba(59, 130, 246, 0.2);
            }
            50% {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
            }
            100% {
                box-shadow: 0 0 5px rgba(59, 130, 246, 0.2);
            }
        }

        .skill-pill:hover {
            animation: glow 1.5s infinite;
        }

        /* Rotate effect for icons */
        .rotate-icon {
            transition: transform 0.5s ease;
        }

        .rotate-icon:hover {
            transform: rotate(360deg);
        }

        /* Typing animation for hero section */
        .typing-container {
            display: inline-block;
        }

        .typing-text {
            overflow: hidden;
            border-right: 2px solid #3b82f6;
            white-space: nowrap;
            margin: 0;
            animation: typing 3.5s steps(30, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #3b82f6 }
        }

        /* Fade-in animation for sections */
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in-section.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* 3D hover effect for project cards */
        .project-card {
            transition: transform 0.5s ease;
            transform-style: preserve-3d;
        }

        .project-card:hover {
            transform: rotateY(5deg) rotateX(5deg);
        }

        /* Particle background for hero section */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }

        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 50px;
            border: 2px solid #3b82f6;
            border-radius: 15px;
            cursor: pointer;
            z-index: 10;
        }

        .scroll-indicator::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 6px;
            background: #3b82f6;
            border-radius: 50%;
            animation: scroll-down 1.5s infinite;
        }

        @keyframes scroll-down {
            0% {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateX(-50%) translateY(20px);
            }
        }

        /* Progress bar animation when in view */
        .progress-value {
            position: relative;
            display: inline-block;
            color: transparent;
            animation: counter 2.5s linear forwards;
        }

        @keyframes counter {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes gradientAnimation {
    0% {
      background-position: 0% 50%;
    }
    100% {
      background-position: 100% 50%;
    }
  }

  .animate-gradient {
    background: linear-gradient(90deg, #4b6cb7, #182848, #4b6cb7);
    background-size: 200% auto;
    animation: gradientAnimation 5s ease infinite;
  }

    </style>
</head>
<body class="gradient-bg">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 nav-blur">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
          <div class="flex items-center justify-between h-16 md:h-20">
            <!-- Logo -->
            <a href="#about" class="flex items-center gap-2 text-lg md:text-xl font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 2l7 7-7 7-7-7 7-7z" />
                </svg>
                Nuskhan
              </a>            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-6"> <!-- Increased spacing -->
                <a href="#skills" class="text-sm md:text-base text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link px-2 py-1">Skills</a>
                <a href="#experience" class="text-sm md:text-base text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link px-2 py-1">Experience</a>
                <a href="#projects" class="text-sm md:text-base text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link px-2 py-1">Projects</a>
                <a href="#about" class="text-sm md:text-base text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link px-2 py-1">About</a>
                <a href="#contact" class="text-sm md:text-base text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link px-2 py-1">Contact</a>
              </div>

            <!-- Mobile Navigation Links -->
            <div class="flex md:hidden space-x-2">
              <a href="#skills" class="text-[10px] text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link">Skills</a>
              <a href="#experience" class="text-[10px] text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link">Experience</a>
              <a href="#projects" class="text-[10px] text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link">Projects</a>
              <a href="#about" class="text-[10px] text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link">About</a>
              <a href="#contact" class="text-[10px] text-gray-600 hover:text-blue-600 font-medium transition-colors nav-link">Contact</a>
            </div>
          </div>
        </div>
      </nav>

    <!-- Hero Section with Particles Background -->
    <section class="pt-32 pb-24 section-gradient relative" id="about">
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
          <div class="flex flex-col md:flex-row items-center justify-between gap-12">
            <!-- Left Column: Text Content -->
            <div class="flex-1 text-center md:text-left animate__animated animate__fadeInLeft" data-aos="fade-right">
              <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                Hello, I'm<br />
                <span class="text-gradient typing-text">Mohamed Nuskhan</span>
              </h1>
              <p class="mt-6 text-base md:text-lg text-gray-600 leading-relaxed animate__animated animate__fadeIn animate__delay-1s">
                Home Automation Engineer & Full Stack Developer specializing in creating intelligent spaces and seamless digital experiences
              </p>

                    <div class="mt-10 flex flex-wrap gap-4 justify-center md:justify-start">
                        <a href="#projects" class="px-3 py-1 border-2 border-blue-600 text-white bg-blue-700 rounded-full font-medium hover:bg-blue-800 transition-all duration-300 pulse-effect" style="margin-top: 1rem; padding: 0.5rem 1rem; font-size: 0.95rem; line-height: 2.75; display: inline-block; text-align: center; transition: all 0.3s ease; box-shadow: 0 8px 25px rgba(59, 130, 246, 0);">View Projects</a>
                        <a href="#contact" class="px-8 py-4 border-2 border-blue-600 text-blue-600 rounded-full font-medium hover:bg-blue-50 transition-colors animate__animated animate__fadeIn animate__delay-1s" style="margin-top: 1rem;">Get in Touch</a>
                    </div>
                </div>
                <div class="flex-1 flex justify-center animate__animated animate__fadeInRight" data-aos="fade-left">
                    <img src="https://i.postimg.cc/dQrP3HZS/Photo-Room-20231102-204729-removebg-preview.png" alt="Mohamed Nuskhan" class="w-64 h-64 rounded-full object-cover border-8 border-white card-shadow float-animation">
                </div>
            </div>
        </div>
        <div class="scroll-indicator" onclick="scrollToSection('#skills')"></div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16 fade-in-section" data-aos="fade-up">Technical Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-pill p-6 rounded-xl text-center fade-in-section">
                    <h3 class="font-semibold text-gray-900 mb-4">Automation</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">Control4</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="95">95%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">KNX</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="85">85%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-pill p-6 rounded-xl text-center fade-in-section">
                    <h3 class="font-semibold text-gray-900 mb-4">Programming</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">Python</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="90">90%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">Laravel</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="85">85%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-pill p-6 rounded-xl text-center fade-in-section">
                    <h3 class="font-semibold text-gray-900 mb-4">Design</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">AutoCAD</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="90">90%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">Solid Works</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="85">85%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-pill p-6 rounded-xl text-center fade-in-section">
                    <h3 class="font-semibold text-gray-900 mb-4">Tools</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">Composer Pro</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="95">95%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <p class="text-sm text-gray-600">Factory I/O</p>
                                <span class="text-sm text-blue-600 progress-value" data-value="80">80%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full">
                                <div class="progress-bar" data-width="80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section (Enhanced) -->
    <section id="experience" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16 fade-in-section" data-aos="fade-up" style="margin-top: -3rem;">Professional Experience</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-xl hover-card card-shadow experience-card fade-in-section" data-aos="fade-up">
                    <div class="flex flex-col md:flex-row justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">Home Automation Engineer</h3>
                        <span class="text-blue-600 animate__animated animate__fadeIn">2023 - Present</span>
                    </div>
                    <h4 class="text-lg text-blue-600 mb-2">Archimedes Global</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="animate__animated animate__fadeInLeft animate__delay-1s">• Led the implementation of Control4 and KNX automation systems for luxury residential projects</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-2s">• Developed custom programming solutions for integrated smart home systems</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-3s">• Collaborated with clients to design personalized automation scenarios</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-4s">• Managed project documentation and technical specifications</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl hover-card card-shadow experience-card fade-in-section" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col md:flex-row justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">Software Engineer</h3>
                        <span class="text-blue-600">2022 - 2023</span>
                    </div>
                    <h4 class="text-lg text-blue-600 mb-2">Saberion</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="animate__animated animate__fadeInLeft animate__delay-1s">• Developed and maintained web applications using Laravel framework</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-2s">• Implemented responsive designs and user interface improvements</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-3s">• Collaborated with cross-functional teams on various projects</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-4s">• Participated in code reviews and technical documentation</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-xl hover-card card-shadow experience-card fade-in-section" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex flex-col md:flex-row justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">Automation Engineer Intern</h3>
                        <span class="text-blue-600">2021 - 2022</span>
                    </div>
                    <h4 class="text-lg text-blue-600 mb-2">Brandix</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="animate__animated animate__fadeInLeft animate__delay-1s">• Assisted in implementing industrial automation solutions</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-2s">• Developed PLC programs for manufacturing processes</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-3s">• Contributed to system documentation and testing procedures</li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-4s">• Participated in maintenance and troubleshooting activities</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section with 3D Effect -->
    <section id="projects" class="py-16 section-gradient">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12 fade-in-section" data-aos="fade-up" style="margin-top: -3rem;">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl project-card card-shadow fade-in-section" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-blue-50 rounded-xl p-4 mb-4 overflow-hidden">
                        <img src="https://i.postimg.cc/g26vbZTR/smart-home-jpg.webp" alt="Smart Home Project" class="w-full h-48 object-cover rounded-lg transform transition-transform duration-700 hover:scale-110">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Elements Penthouse Automation</h3>
                    <p class="text-gray-600 mb-4">Complete Control4 automation system integration for luxury penthouse.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700 group inline-flex items-center">
                        View Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl project-card card-shadow fade-in-section" data-aos="fade-up" data-aos-delay="150">
                    <div class="bg-blue-50 rounded-xl p-4 mb-4 overflow-hidden">
                        <img src="https://i.postimg.cc/cC4Qpkp4/Website-Development.webp" alt="Web Application" class="w-full h-48 object-cover rounded-lg transform transition-transform duration-700 hover:scale-110">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Laravel Project Management</h3>
                    <p class="text-gray-600 mb-4">Web application with CRM functionality and analytics dashboard.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700 group inline-flex items-center">
                        View Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl project-card card-shadow fade-in-section" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-blue-50 rounded-xl p-4 mb-4 overflow-hidden">
                        <img src="/api/placeholder/400/320" alt="IoT Project" class="w-full h-48 object-cover rounded-lg transform transition-transform duration-700 hover:scale-110">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">IoT Milk Properties Monitor</h3>
                    <p class="text-gray-600 mb-4">Smart monitoring system for dairy industry quality control.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700 group inline-flex items-center">
                        View Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl project-card card-shadow fade-in-section" data-aos="fade-up" data-aos-delay="250">
                    <div class="bg-blue-50 rounded-xl p-4 mb-4 overflow-hidden">
                        <img src="/api/placeholder/400/320" alt="Smart Waste Bin" class="w-full h-48 object-cover rounded-lg transform transition-transform duration-700 hover:scale-110">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">IoT Smart Waste Bin</h3>
                    <p class="text-gray-600 mb-4">Automated waste management system with real-time monitoring.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700 group inline-flex items-center">
                        View Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl project-card card-shadow fade-in-section" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-blue-50 rounded-xl p-4 mb-4 overflow-hidden">
                        <img src="/api/placeholder/400/320" alt="Robot Safety" class="w-full h-48 object-cover rounded-lg transform transition-transform duration-700 hover:scale-110">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Robot Cell Safety System</h3>
                    <p class="text-gray-600 mb-4">Industrial safety system for robotic manufacturing environments.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700 group inline-flex items-center">
                        View Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl project-card card-shadow fade-in-section" data-aos="fade-up" data-aos-delay="350">
                    <div class="bg-blue-50 rounded-xl p-4 mb-4 overflow-hidden">
                        <img src="/api/placeholder/400/320" alt="AI Monitoring" class="w-full h-48 object-cover rounded-lg transform transition-transform duration-700 hover:scale-110">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">AI-based Monitoring System</h3>
                    <p class="text-gray-600 mb-4">Machine learning solution for predicting maintenance needs in automation systems.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700 group inline-flex items-center">
                        View Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16 fade-in-section" data-aos="fade-up">Certifications</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 rounded-xl certification-card bg-gray-50 fade-in-section" data-aos="fade-right">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Control4 Certified Technician</h3>
                    <p class="text-gray-600 mb-2">Control4 Corporation</p>
                    <p class="text-gray-500 text-sm">Issued: 2023</p>
                </div>

                <div class="p-6 rounded-xl certification-card bg-gray-50 fade-in-section" data-aos="fade-left">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">KNX Partner Certification</h3>
                    <p class="text-gray-600 mb-2">KNX Association</p>
                    <p class="text-gray-500 text-sm">Issued: 2023</p>
                </div>

                <div class="p-6 rounded-xl certification-card bg-gray-50 fade-in-section" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Laravel Professional</h3>
                    <p class="text-gray-600 mb-2">Laravel Certification Program</p>
                    <p class="text-gray-500 text-sm">Issued: 2022</p>
                </div>

                <div class="p-6 rounded-xl certification-card bg-gray-50 fade-in-section" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Certified SolidWorks Associate</h3>
                    <p class="text-gray-600 mb-2">Dassault Systèmes</p>
                    <p class="text-gray-500 text-sm">Issued: 2021</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 section-gradient">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16 fade-in-section" data-aos="fade-up">Get In Touch</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="fade-in-section" data-aos="fade-right">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mr-4 rotate-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Phone</p>
                                <p class="text-gray-900 font-medium">+94 77 123 4567</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mr-4 rotate-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Email</p>
                                <p class="text-gray-900 font-medium">nuskhannadeer@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mr-4 rotate-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Location</p>
                                <p class="text-gray-900 font-medium">Colombo, Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Connect</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-400 hover:bg-blue-500 rounded-full flex items-center justify-center text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-900 hover:bg-black rounded-full flex items-center justify-center text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fade-in-section" data-aos="fade-left">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Your name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Your email">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Subject">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="px-6 py-3 btn-primary text-white rounded-lg pulse-effect">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h2 class="text-2xl font-bold mb-3 text-white">Mohamed Nuskhan</h2>
                    <p class="text-gray-400">Home Automation Engineer & Full Stack Developer</p>
                </div>
                <div class="mt-6 md:mt-0">
                    <p class="text-gray-400">&copy; 2025 Mohamed Nuskhan. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });

            // Initialize Particles.js for hero section
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#3b82f6"
                    },
                    "shape": {
                        "type": "circle",
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#3b82f6",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "push": {
                            "particles_nb": 4
                        }
                    }
                },
                "retina_detect": true
            });

            // Animate skill bars when they come into view
            const progressBars = document.querySelectorAll('.progress-bar');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progressBar = entry.target;
                        const width = progressBar.getAttribute('data-width');
                        progressBar.style.width = width;
                    }
                });
            }, { threshold: 0.2 });

            progressBars.forEach(bar => {
                observer.observe(bar);
            });

            // Fade in sections when they come into view
            const fadeInSections = document.querySelectorAll('.fade-in-section');
            const fadeObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeInSections.forEach(section => {
                fadeObserver.observe(section);
            });
        });

        // Smooth scrolling for navigation links
        function scrollToSection(id) {
            const element = document.querySelector(id);
            if (element) {
                window.scrollTo({
                    top: element.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        }

        // Add event listeners to nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent default anchor behavior
                const targetId = this.getAttribute('href').substring(1); // Get the target ID
                const targetElement = document.getElementById(targetId); // Find the target element

                if (targetElement) {
                // Define custom offsets for each section
                const offsets = {
                    about: 50,       // Offset for #about
                    skills: 80,      // Offset for #skills
                    experience: 60,  // Offset for #experience
                    projects: 100,   // Offset for #projects
                    contact: -23      // Offset for #contact
                };

                const offset = offsets[targetId] || 0; // Default to 0 if no offset is defined
                const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth' // Smooth scrolling
                });
                }
            });
            });
    </script>
</body>
</html>
