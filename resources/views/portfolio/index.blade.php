<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            font-family: 'Arial', sans-serif;
        }

        /* Header Styles */
        header {
            background-color: #1a202c;
            color: #ffffff;
            padding: 20px;
        }

        header h1 {
            font-size: 36px;
        }

        header p {
            font-size: 18px;
        }

        
        /* Hero Section Styles */
        .hero {
            background-image: linear-gradient(to right, #667eea, #764ba2);
            color: #ffffff;
            padding: 100px 0;
            display: flex;
            align-items: center;
        }

        .hero-img-container {
            width: 200px;
            height: 200px;
            margin-right: 20px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        .hero-img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }

        .hero-text {
            flex-grow: 1;
        }

        .hero h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px; /* Adjusted margin */
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 0; /* Remove margin to reduce space */
        }

        /* JavaScript Text Animation Styles */
        .animated-text {
            animation: changeProfession 5s ease-in-out;
        }

        /* About Section Styles */
        .about {
            background-color: #ffffff;
            padding: 100px 0;
        }

        .about h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .about p {
            font-size: 20px;
            line-height: 1.5;
        }
        .project-card {
            transition: transform 0.3s ease-in-out;
        }

        .project-card:hover {
            transform: scale(1.05);
        }

        /* Animation Keyframes */
        @keyframes changeProfession {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(20px);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container mx-auto">
            <h1 class="text-2xl">Muhammad Subhan Portfolio</h1>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container mx-auto flex">
            <div class="hero-img-container">
                <img src="pas-photo.jpeg" alt="Your Name" class="hero-img">
            </div>
            <div class="hero-text">
                <h1>Hello, I'm Muhammad Subhan</h1>
                <p> <span class="animateds-text">Fresh Graduate Informatics Engineering</span></p>
                <p> <span class="animateds-text">Institut Teknologi Sepuluh Nopember</span></p>
                <p> <span class="animated-text">Full Stack Developer</span></p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container mx-auto">
            <h2>About Me</h2>
            <p>
                I'm a passionate web developer and AI enthusiast with a focus on creating elegant and user-friendly web solutions. With expertise in web development technologies and artificial intelligence, I aim to deliver exceptional digital experiences.
            </p>
        </div>
    </section>

     <!-- Skills Section -->
     <section class="skills bg-gray-100 py-10">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6">My Skills</h2>
            <!-- Skill Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Skill Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-xl font-semibold mb-2">Laravel</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <!-- Skill Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-xl font-semibold mb-2">PHP</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <!-- Skill Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-xl font-semibold mb-2">HTML + CSS</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <!-- Skill Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-xl font-semibold mb-2">Python</h3>
                    <p class="text-gray-600">Proficient</p>
                </div>
                <!-- Skill Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-xl font-semibold mb-2">Figma</h3>
                    <p class="text-gray-600">Proficient</p>
                </div>
                <!-- Skill Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-xl font-semibold mb-2">JavaScript</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <!-- Skill Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-xl font-semibold mb-2">MySQL</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizational Experience Section -->
<section class="experience bg-gray-100 py-10">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-6">Organizational Experience</h2>
        <!-- Experience Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Experience Card 1 -->
            <div class="bg-white rounded-lg shadow-md p-4 project-card">
            <img src="bem.png" alt="Organization 1" class="w-16 h-16 object-containt mb-4">
                <h3 class="text-xl font-semibold mb-2">Head Of Internal Affairs Department</h3>
                <p class="text-gray-600">BEM FTEIC</p>
                <p class="text-gray-600">Duration: 1 April 2022 - 25 February 2023</p>
                <p class="text-gray-600">Responsible for interest talent and organizing event in faculty</p>
            </div>
            <!-- Experience Card 2 -->
            <div class="bg-white rounded-lg shadow-md p-4 project-card">
            <img src="scn.png" alt="Organization 1" class="w-16 h-16 object-containt mb-4">
                <h3 class="text-xl font-semibold mb-2">Staff Of REEVA Concert</h3>
                <p class="text-gray-600">Schematics 2021</p>
                <p class="text-gray-600">Duration: 1 May 2021 - 31 December 2021</p>
                <p class="text-gray-600">Responsible for held an concert event in Informatics Department Institut Teknologi Sepuluh Nopember</p>
            </div>
            <!-- Add more organizational experience cards as needed -->
        </div>
    </div>
</section>

<!-- Internship Experience Section -->
<section class="experience bg-gray-100 py-10">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-6">Internship Experience</h2>
        <!-- Experience Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Experience Card 1 -->
            <div class="bg-white rounded-lg shadow-md p-4 project-card">
            <img src="Petrokimia_Gresik.webp" alt="Organization 1" class="w-16 h-16 object-containt mb-4">

                <h3 class="text-xl font-semibold mb-2">Full Stack Internship</h3>
                <p class="text-gray-600">PT.Petrokimia Gresik</p>
                <p class="text-gray-600">Duration: 1 October 2022 - 31 March 2023</p>
                <p class="text-gray-600">Develop Website called DIRGA and SIMBA </p>
            </div>
          
            <!-- Add more internship experience cards as needed -->
        </div>
    </div>
</section>

     <!-- Projects Section -->
     <section class="projects bg-gray-100 py-10">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6">My Projects</h2>
            <!-- Project Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project Card 1 -->
               <div class="bg-white rounded-lg shadow-md overflow-hidden project-card">
                    <img src="dirga.jpeg" alt="Project 1" class="w-full h-48 object-contain">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">DIRGA Retail Management PT.Petrokimia Gresik</h3>
                        <p class="text-gray-600">Registration for fertilizer distributor in PT.Petrokimia Gresik using Laravel, PHP, HTML, bootstrap, JavaScript, MySQL.</p>
                        <a href="https://www.dirga.retailmanagement-pg.com" class="text-blue-500 hover:underline mt-2 block">Visit Website</a>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden project-card">
    <img src="simba.jpeg" alt="Project 2" class="w-full h-48 object-contain">
    <div class="p-4">
        <h3 class="text-xl font-semibold mb-2">SIMBA Retail Management PT.Petrokimia Gresik</h3>
        <p class="text-gray-600">Information System and management system for promotion stuff in PT.Petrokimia Gresik using Laravel, PHP, HTML, Tailwind, JavaScript, MySQL.</p>
        <a href="https://www.simba.retailmanagement-pg.com" class="text-blue-500 hover:underline mt-2 block">Visit website</a>
    </div>
</div>

                <!-- Project Card 3 -->
               <div class="bg-white rounded-lg shadow-md overflow-hidden project-card">
                    <img src="3.jpeg" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Klasifikasi Emosi Manusia menggunakan Ensemble Stacking pada Data Transkrip Audio-ke-Teks</h3>
                        <p class="text-gray-600">Undergraduate thesis using python for NLP</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Muhammad Subhan Portfolio</p>
        </div>
    </footer>

    <!-- JavaScript code to update the profession text -->
    <script>
        const animatedText = document.querySelector('.animated-text');
        const professions = ['Full Stack Developer', 'AI Developer'];
        let index = 0;

        function changeProfessionText() {
            animatedText.textContent = professions[index];
            index = (index + 1) % professions.length;
        }

        setInterval(changeProfessionText, 3000); // Transition the text every 5 seconds
    </script>
</body>
</html>