login.js
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const submitBtn = document.getElementById('submitBtn');
    const buttonText = submitBtn.querySelector('.button-text');
    const loadingSpinner = submitBtn.querySelector('.loading-spinner');
    
    // Password toggle functionality
    const passwordToggles = document.querySelectorAll('.password-toggle');
    
    passwordToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const targetId = this.dataset.target;
            const passwordInput = document.getElementById(targetId);
            const eyeIcon = this.querySelector('svg');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
                `;
                this.setAttribute('aria-label', 'Hide password');
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
                this.setAttribute('aria-label', 'Show password');
            }
        });
    });
    
    // Form submission with loading state
    form.addEventListener('submit', function(e) {
        submitBtn.disabled = true;
        buttonText.textContent = 'Memproses...';
        loadingSpinner.classList.remove('hidden');
        
        // Re-enable button after 10 seconds as fallback
        setTimeout(() => {
            if (submitBtn.disabled) {
                submitBtn.disabled = false;
                buttonText.textContent = 'Masuk';
                loadingSpinner.classList.add('hidden');
            }
        }, 10000);
    });
    
    // Real-time validation
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