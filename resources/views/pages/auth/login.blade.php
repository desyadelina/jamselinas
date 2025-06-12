@extends('layouts.app')

@section('title', 'Login - JAMSELINAS XIV 2025')

@section('body-class', 'bg-blue-almost-white min-h-screen')

@section('no-navbar', true)
@section('no-footer', true)
@section('no-scroll-button', true)

@section('content')
    <div class="fixed top-6 left-6 z-50">
        <nav aria-label="Navigation">
            <a href="{{ App\Helpers\NavigationHelper::getBackButtonUrl() }}"
                class="group inline-flex items-center justify-center w-12 h-12 bg-jamselinas-primary rounded-xl shadow-md hover:shadow-lg hover:bg-jamselinas-secondary transition-all duration-300 transform hover:scale-105"
                aria-label="Kembali ke halaman sebelumnya">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-white transition-transform duration-300 group-hover:-translate-x-0.5">
                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </nav>
    </div>
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-lg">
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl border border-white/20 p-8 space-y-8">
                <div class="text-center">
                    <img src="{{ asset('images/small_logo.png') }}" alt="JAMSELINAS Logo"
                        class="w-50 h-auto mx-auto mb-6 object-contain" />
                    <h1 class="text-2xl font-semibold text-gray-900 font-inter">
                        Selamat datang kembali!
                    </h1>
                </div>

                <!-- login form -->
                <form method="POST" action="#" class="space-y-6" id="loginForm">
                    @csrf

                    <!-- email field -->
                    <div class="space-y-2">
                        <label for="email" class="sr-only">Email Address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                <div
                                    class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center group-focus-within:bg-jamselinas-primary/10 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-gray-500 group-focus-within:text-jamselinas-primary transition-colors duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                            </div>
                            <input type="email" id="email" name="email"
                                class="w-full pl-20 pr-4 py-4 text-lg bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-jamselinas-primary focus:border-transparent transition-all duration-200 placeholder-gray-400"
                                placeholder="Masukkan Email" required />
                        </div>
                        @error('email')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- password field -->
                    <div class="space-y-2">
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                <div
                                    class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center group-focus-within:bg-jamselinas-primary/10 transition-colors duration-200">
                                    <svg class="w-5 h-5 text-gray-500 group-focus-within:text-jamselinas-primary transition-colors duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                            </div>
                            <input type="password" id="password" name="password"
                                class="w-full pl-20 pr-12 py-4 text-lg bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-jamselinas-primary focus:border-transparent transition-all duration-200 placeholder-gray-400"
                                placeholder="Masukkan Password" required />
                            <button type="button"
                                class="password-toggle absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 hover:text-gray-600 transition-colors duration-200"
                                data-target="password" aria-label="Show password">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- submit button -->
                    <button type="submit" id="submitBtn"
                        class="w-full text-white font-medium text-lg py-4  bg-jamselinas-secondary border-2 border-jamselinas-secondary rounded-lg transition-all duration-200 shadow-lg hover:bg-white hover:text-jamselinas-secondary hover:border-jamseltext-jamselinas-secondary focus:bg-white focus:text-jamselinas-secondary focus:border-jamseltext-jamselinas-secondary focus:outline-none focus:ring-4 focus:ring-jamseltext-jamselinas-secondary focus:ring-offset-2 cursor-pointer flex items-center justify-center space-x-2">
                        <span class="button-text">Masuk</span>
                        <div class="loading-spinner hidden">
                            <svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </form>

                <!-- Link pendaftaran -->
                <div class="text-center">
                    <p class="text-gray-600">
                        Belum punya akun?
                        <a href="{{ route('form.pendaftaran') }}"
                            class="font-semibold text-jamselinas-primary hover:text-jamselinas-secondary transition-colors duration-200 focus:outline-none relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-jamselinas-secondary after:transition-all after:duration-300 hover:after:w-full after:rounded-full">
                            Daftar sekarang
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            const submitBtn = document.getElementById('submitBtn');
            const buttonText = submitBtn.querySelector('.button-text');
            const loadingSpinner = submitBtn.querySelector('.loading-spinner');

            // pass toggle functionality
            const passwordToggles = document.querySelectorAll('.password-toggle');

            // icon show/hide pass
            const eyeIcon = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            `;

            const eyeOffIcon = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 11-4.243-4.243m4.242 4.242L9.88 9.88" />
            `;

            passwordToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const targetId = this.dataset.target;
                    const passwordInput = document.getElementById(targetId);
                    const eyeIconSvg = this.querySelector('svg');

                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        eyeIconSvg.innerHTML = eyeOffIcon;
                        this.setAttribute('aria-label', 'Hide password');
                    } else {
                        passwordInput.type = 'password';
                        eyeIconSvg.innerHTML = eyeIcon;
                        this.setAttribute('aria-label', 'Show password');
                    }
                });
            });

            // form submission with load state
            form.addEventListener('submit', function(e) {
                submitBtn.disabled = true;
                buttonText.textContent = 'Memproses...';
                loadingSpinner.classList.remove('hidden');

                // reenable button after 10 seconds as fallback
                setTimeout(() => {
                    if (submitBtn.disabled) {
                        submitBtn.disabled = false;
                        buttonText.textContent = 'Masuk';
                        loadingSpinner.classList.add('hidden');
                    }
                }, 10000);
            });

            // realtime validation
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            emailInput.addEventListener('blur', validateEmail);
            passwordInput.addEventListener('input', validatePassword);

            function validateEmail() {
                const email = emailInput.value;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (email && !emailRegex.test(email)) {
                    showFieldError(emailInput, 'Format email tidak valid');
                } else {
                    clearFieldError(emailInput);
                }
            }

            function validatePassword() {
                const password = passwordInput.value;

                if (password && password.length < 6) {
                    showFieldError(passwordInput, 'Password minimal 6 karakter');
                } else {
                    clearFieldError(passwordInput);
                }
            }

            function showFieldError(field, message) {
                field.classList.add('border-red-500', 'focus:ring-red-500', 'focus:border-red-500');

                let errorElement = field.parentNode.parentNode.querySelector('.field-error');
                if (!errorElement) {
                    errorElement = document.createElement('p');
                    errorElement.className = 'mt-1 text-sm text-red-600 field-error';
                    field.parentNode.parentNode.appendChild(errorElement);
                }
                errorElement.textContent = message;
            }

            function clearFieldError(field) {
                field.classList.remove('border-red-500', 'focus:ring-red-500', 'focus:border-red-500');

                const errorElement = field.parentNode.parentNode.querySelector('.field-error');
                if (errorElement) {
                    errorElement.remove();
                }
            }
        });
    </script>
@endpush
