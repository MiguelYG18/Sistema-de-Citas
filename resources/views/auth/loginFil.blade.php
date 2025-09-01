<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCenter - Acceso Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .medical-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M30 30c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20zm0 0c0 11.046 8.954 20 20 20s20-8.954 20-20-8.954-20-20-20-20 8.954-20 20z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .pulse-slow {
            animation: pulse 3s infinite;
        }
        
        .slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .medical-cross {
            position: relative;
        }
        
        .medical-cross::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 60px;
            background: white;
            border-radius: 10px;
        }
        
        .medical-cross::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 20px;
            background: white;
            border-radius: 10px;
        }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="min-h-screen gradient-bg medical-pattern bg-blue-900">
    <div class="min-h-screen flex items-center justify-center p-4">
        <!-- Elementos decorativos flotantes -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full floating"></div>
        <div class="absolute top-32 right-20 w-12 h-12 bg-blue-200/20 rounded-full floating" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-20 w-16 h-16 bg-green-200/20 rounded-full floating" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-32 right-16 w-8 h-8 bg-purple-200/30 rounded-full floating" style="animation-delay: 0.5s;"></div>      
        <!-- Container principal -->
        <div class="w-full max-w-6xl mx-auto grid lg:grid-cols-2 gap-8 items-center">         
            <!-- Panel izquierdo - Información de la clínica -->
            <div class="hidden lg:block slide-up">
                <div class="text-white space-y-8">
                    <!-- Logo y título -->
                    <div class="text-center mb-12">
                        <div class="w-24 h-24 mx-auto mb-6 bg-white/20 rounded-full flex items-center justify-center glass-effect">
                            <div class="w-12 h-12 medical-cross"></div>
                        </div>
                        <h1 class="text-4xl font-bold mb-2">MediCenter</h1>
                        <p class="text-lg text-white/80">Sistema de Gestión Clínica</p>
                    </div>                
                    <!-- Características -->
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4 p-4 bg-white/10 rounded-xl glass-effect">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user-md text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Gestión de Pacientes</h3>
                                <p class="text-white/80">Control completo del historial médico</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4 p-4 bg-white/10 rounded-xl glass-effect">
                            <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Citas Programadas</h3>
                                <p class="text-white/80">Organiza tu agenda médica fácilmente</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4 p-4 bg-white/10 rounded-xl glass-effect">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-chart-line text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Reportes Médicos</h3>
                                <p class="text-white/80">Analítica avanzada y reportes detallados</p>
                            </div>
                        </div>
                    </div>                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 pt-8">
                        <div class="text-center p-4 bg-white/10 rounded-xl glass-effect">
                            <div class="text-2xl font-bold">98%</div>
                            <div class="text-sm text-white/80">Satisfacción</div>
                        </div>
                        <div class="text-center p-4 bg-white/10 rounded-xl glass-effect">
                            <div class="text-2xl font-bold">24/7</div>
                            <div class="text-sm text-white/80">Soporte</div>
                        </div>
                        <div class="text-center p-4 bg-white/10 rounded-xl glass-effect">
                            <div class="text-2xl font-bold">500+</div>
                            <div class="text-sm text-white/80">Clínicas</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Panel derecho - Formulario de login -->
            <div class="w-full max-w-md mx-auto slide-up" style="animation-delay: 0.3s;">
                <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-8 border border-white/20">
                    <!-- Header del formulario -->
                    <div class="text-center mb-8">
                        <!-- Logo móvil -->
                        <div class="lg:hidden w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                            <div class="w-8 h-8 medical-cross" style="transform: scale(0.7);"></div>
                        </div>
                        
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Bienvenido</h2>
                        <p class="text-gray-600">Ingresa a tu cuenta profesional</p>
                    </div>
                    <!-- Formulario -->
                    <form class="space-y-6" method="POST" action="{{ route('login') }}" onsubmit="handleLogin(event)">
                        @csrf
                        <!-- Email -->
                        <div class="relative group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <div class="relative">
                                <input 
                                    type="email" 
                                    required
                                    name="email"
                                    id="email"
                                    required
                                    value="{{ old('email') }}"
                                    class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:ring-2 
                                    focus:ring-blue-500 focus:border-transparent transition-all duration-300 
                                    bg-gray-50 
                                    focus:bg-white"
                                    placeholder="doctor@medicenter.com"
                                >
                                <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                            </div>
                        </div>
                        
                        <!-- Contraseña -->
                        <div class="relative group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Contraseña</label>
                            <div class="relative">
                                <input 
                                    type="password" 
                                    required
                                    name="password"
                                    id="password"
                                    autocomplete="current-password"
                                    class="w-full px-4 py-3 pl-12 pr-12 border border-gray-300 rounded-xl focus:ring-2 
                                    focus:ring-blue-500 focus:border-transparent transition-all duration-300 
                                    bg-gray-50 
                                    focus:bg-white"
                                    placeholder="••••••••"
                                >
                                <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                                <button 
                                    type="button"
                                    onclick="togglePassword()"
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors"
                                >
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Opciones adicionales -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-600 hover:text-blue-800 transition-colors" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        
                        <!-- Botón de login -->
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-blue-700 hover:to-purple-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]"
                        >
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Iniciar Sesión
                        </button>
                        
                        <!-- Divider -->
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">o continúa con</span>
                            </div>
                        </div>
                        
                        <!-- Botones sociales -->
                        <div class="grid grid-cols-2 gap-4">
                            <button 
                                type="button"
                                class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-105"
                            >
                                <i class="fab fa-google text-red-500 mr-2"></i>
                                Google
                            </button>
                            <button 
                                type="button"
                                class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-105"
                            >
                                <i class="fab fa-microsoft text-blue-500 mr-2"></i>
                                Microsoft
                            </button>
                        </div>
                        
                    </form>
                    
                    <!-- Footer -->
                    <div class="mt-8 text-center">
                        <p class="text-sm text-gray-600">
                            ¿No tienes cuenta? 
                            <a href="register.html" class="text-blue-600 hover:text-blue-800 font-medium transition-colors">
                                Solicitar acceso
                            </a>
                        </p>
                    </div>
                    
                </div>              
                <!-- Información de soporte -->
                <div class="mt-6 text-center text-white/80">
                    <p class="text-sm">
                        <i class="fas fa-phone mr-1"></i>
                        Soporte 24/7: +51 123 456 789
                    </p>
                    <p class="text-xs mt-2">
                        <i class="fas fa-shield-alt mr-1"></i>
                        Conexión segura SSL - Datos protegidos
                    </p>
                </div>
            </div>
            
        </div>
    </div> 
    <!-- Notificación de éxito -->
    <div id="successNotification" class="fixed top-4 right-4 transform translate-x-full transition-transform duration-300 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span>¡Iniciando sesión...</span>
        </div>
    </div>
    <div id="successNotification" class="fixed top-4 right-4 transform translate-x-full transition-transform duration-300 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg">
        <div class="flex items-center">
            <i class="fa-solid fa-circle-exclamation mr-2"></i>
            <span>Verifica tus credenciales.</span>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
        
        function handleLogin(event) {
            event.preventDefault();
            
            // Mostrar notificación
            const notification = document.getElementById('successNotification');
            notification.classList.remove('translate-x-full');
            
            // Simular proceso de login
            setTimeout(() => {
                notification.classList.add('translate-x-full');
            }, 3000);
            
            // Aquí iría la lógica de autenticación real
            console.log('Procesando login...');
        }
        
        // Animación de entrada para elementos
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.slide-up');
            elements.forEach((el, index) => {
                el.style.animationDelay = `${index * 0.2}s`;
            });
        });
        
        // Efectos de hover mejorados
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.querySelector('i').style.color = '#3B82F6';
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.querySelector('i').style.color = '#9CA3AF';
                }
            });
        });
    </script>
</body>
</html>