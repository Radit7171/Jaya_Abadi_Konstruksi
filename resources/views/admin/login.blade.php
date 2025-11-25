<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jaya Abadi Konstruksi</title>

    <!-- Laravel CSRF Token (akan di-generate oleh Laravel) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            --glass-bg: rgba(255, 255, 255, 0.95);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 20px;
            box-shadow:
                0 10px 25px rgba(0, 0, 0, 0.05),
                0 5px 10px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            position: relative;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .form-input {
            transition: all 0.2s ease;
            border: 1.5px solid #e2e8f0;
            font-size: 0.9rem;
            background: rgba(255, 255, 255, 0.8);
        }

        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            background: white;
        }

        .btn-primary {
            background: var(--primary-gradient);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .gradient-text {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo-glow {
            filter: drop-shadow(0 4px 6px rgba(59, 130, 246, 0.2));
        }

        .social-icon {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .social-icon:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            background: white;
        }

        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(180deg); }
        }

        .loading-spinner {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Mobile optimizations */
        @media (max-width: 640px) {
            .login-container {
                margin: 1rem;
                border-radius: 16px;
            }

            body {
                align-items: flex-start;
                padding-top: 2rem;
            }
        }

        /* Error states */
        .error-input {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        .error-message {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.25rem;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body class="bg-gray-50 overflow-x-hidden">
    <!-- Simple Particle Background -->
    <div class="particles-container" id="particles-container"></div>

    <!-- Login Container -->
    <div class="login-container w-full max-w-sm mx-4" data-aos="fade-up">
        <div class="p-6 sm:p-8">
            <!-- Logo and Company Name -->
            <div class="flex flex-col items-center mb-6">
                <div class="logo-container mb-3">
                    <img src="{{ asset('images/logo.png') }}" class="w-16 h-16 logo-glow" alt="Logo Jaya Abadi Konstruksi">
                </div>
                <h1 class="text-xl font-bold gradient-text">Jaya Abadi Konstruksi</h1>
                <p class="text-gray-500 text-xs mt-1">Spesialis Konstruksi Besi</p>
            </div>

            <!-- Login Form -->
            <form id="loginForm" method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf <!-- Laravel CSRF Token -->

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="bi bi-envelope text-gray-400 text-sm"></i>
                        </div>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-input block w-full pl-10 pr-3 py-2.5 rounded-lg focus:outline-none"
                            placeholder="email@example.com"
                            required
                            autocomplete="email"
                            autofocus
                        >
                    </div>
                    @error('email')
                        <div class="error-message">
                            <i class="bi bi-exclamation-circle mr-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="bi bi-lock text-gray-400 text-sm"></i>
                        </div>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-input block w-full pl-10 pr-10 py-2.5 rounded-lg focus:outline-none"
                            placeholder="••••••••"
                            required
                            autocomplete="current-password"
                        >
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                            <i class="bi bi-eye text-sm"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <i class="bi bi-exclamation-circle mr-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label for="remember" class="ml-2 text-gray-700">
                            Ingat saya
                        </label>
                    </div>
                </div>

                <button
                    type="submit"
                    id="loginButton"
                    class="btn-primary text-white w-full py-2.5 rounded-lg font-medium flex items-center justify-center"
                >
                    <i class="bi bi-box-arrow-in-right mr-2 text-sm"></i>Masuk
                </button>
            </form>
        </div>
    </div>

    <script>
        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Create simple particle background
            createParticles();

            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = togglePassword.querySelector('i');

            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    // Toggle eye icon
                    if (type === 'text') {
                        eyeIcon.classList.remove('bi-eye');
                        eyeIcon.classList.add('bi-eye-slash');
                    } else {
                        eyeIcon.classList.remove('bi-eye-slash');
                        eyeIcon.classList.add('bi-eye');
                    }
                });
            }

            // Form submission handling
            const loginForm = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');

            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
                    // If we're in a Laravel environment, let the form submit normally
                    // Otherwise, prevent default and show loading state
                    if (!window.laravelEnvironment) {
                        e.preventDefault();

                        // Get form values
                        const email = document.getElementById('email').value;
                        const password = document.getElementById('password').value;

                        // Simple validation
                        if (!email || !password) {
                            showError('Harap isi semua field yang diperlukan');
                            return;
                        }

                        // Show loading state
                        const originalText = loginButton.innerHTML;
                        loginButton.innerHTML = '<span class="loading-spinner mr-2"></span>Memproses...';
                        loginButton.disabled = true;

                        // Simulate API call (replace with actual fetch/AJAX in production)
                        setTimeout(() => {
                            // Reset button
                            loginButton.innerHTML = originalText;
                            loginButton.disabled = false;

                            // Show success message
                            alert('Login berhasil! (Ini hanya simulasi frontend)');

                            // In a real application, you would redirect to dashboard
                            // window.location.href = '/dashboard';
                        }, 1500);
                    }
                });
            }

            // Add focus effects to form inputs
            document.querySelectorAll('.form-input').forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-blue-100');
                    this.classList.add('border-blue-400');
                });

                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-blue-100');
                    this.classList.remove('border-blue-400');
                });
            });

            // Function to create simple particle background
            function createParticles() {
                const container = document.getElementById('particles-container');
                if (!container) return;

                // Create particles based on screen size
                const particleCount = window.innerWidth < 640 ? 15 : 25;

                for (let i = 0; i < particleCount; i++) {
                    const particle = document.createElement('div');
                    particle.classList.add('particle');

                    // Random properties
                    const size = Math.random() * 40 + 10;
                    const posX = Math.random() * 100;
                    const posY = Math.random() * 100;
                    const delay = Math.random() * 5;
                    const duration = Math.random() * 10 + 10;

                    particle.style.width = `${size}px`;
                    particle.style.height = `${size}px`;
                    particle.style.left = `${posX}%`;
                    particle.style.top = `${posY}%`;
                    particle.style.opacity = Math.random() * 0.1 + 0.05;
                    particle.style.animationDelay = `${delay}s`;
                    particle.style.animationDuration = `${duration}s`;

                    container.appendChild(particle);
                }
            }

            // Function to show error message
            function showError(message) {
                // Create a simple toast notification
                const toast = document.createElement('div');
                toast.className = 'fixed top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transform transition-transform duration-300 translate-x-full';
                toast.innerHTML = `
                    <div class="flex items-center">
                        <i class="bi bi-exclamation-circle mr-2"></i>
                        <span>${message}</span>
                    </div>
                `;

                document.body.appendChild(toast);

                // Animate in
                setTimeout(() => {
                    toast.classList.remove('translate-x-full');
                }, 10);

                // Remove after 3 seconds
                setTimeout(() => {
                    toast.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(toast);
                    }, 300);
                }, 3000);
            }
        });
    </script>
</body>

</html>
