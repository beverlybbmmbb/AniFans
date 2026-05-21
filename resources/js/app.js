/**
 * =============================================
 * AniFans - JavaScript Modular
 * =============================================
 * Sistema completo de interacciones frontend
 */

// =====================================================
// 1. UTILIDADES & HELPERS
// =====================================================

const AniFans = {
    // CSRF Token
    getCsrfToken() {
        return document.querySelector('meta[name="csrf-token"]')?.content || '';
    },

    // Fetch Helper
    async fetch(url, options = {}) {
        const defaultOptions = {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.getCsrfToken(),
                ...options.headers,
            },
        };

        try {
            const response = await fetch(url, { ...defaultOptions, ...options });
            if (!response.ok && response.status !== 422) {
                throw new Error(`HTTP ${response.status}`);
            }
            return await response.json();
        } catch (error) {
            console.error('Fetch Error:', error);
            this.showToast('Error en la solicitud', 'error');
            throw error;
        }
    },

    // Toast Notification
    showToast(message, type = 'info') {
        const toast = document.createElement('div');
        toast.className = `fixed bottom-6 right-6 px-6 py-3 rounded-lg text-cream z-50 animate-fade-up ${
            type === 'error' ? 'bg-red-500' :
            type === 'success' ? 'bg-green-500' :
            'bg-blue-500'
        }`;
        toast.textContent = message;
        document.body.appendChild(toast);

        setTimeout(() => toast.remove(), 4000);
    },
};

// =====================================================
// 2. NAVBAR & MOBILE MENU
// =====================================================

function initNavbar() {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.classList.add('shadow-lg');
        } else {
            nav.classList.remove('shadow-lg');
        }
    });
}

// =====================================================
// 3. FAVORITOS
// =====================================================

async function toggleFavorite(movieId) {
    try {
        const response = await AniFans.fetch(`/api/movies/${movieId}/favorite`, {
            method: 'POST',
        });
        AniFans.showToast(response.message, 'success');
        return response.isFavorited;
    } catch (error) {
        console.error('Error toggling favorite:', error);
    }
}

// =====================================================
// 4. TABS
// =====================================================

function initTabs() {
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const tabName = this.dataset.tab;

            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });

            // Show selected tab
            const selectedTab = document.getElementById(tabName);
            if (selectedTab) {
                selectedTab.classList.remove('hidden');
            }

            // Update active button
            document.querySelectorAll('.tab-btn').forEach(b => {
                b.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
}

// =====================================================
// 5. SCROLL ANIMATIONS
// =====================================================

function initScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-up');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
    });

    document.querySelectorAll('[data-animate]').forEach(el => {
        observer.observe(el);
    });
}

// =====================================================
// 6. BÚSQUEDA LIVE
// =====================================================

function initLiveSearch() {
    const searchInput = document.getElementById('search');
    if (searchInput) {
        searchInput.addEventListener('input', debounce(async (e) => {
            const query = e.target.value.trim();
            if (query.length < 2) return;

            try {
                const response = await AniFans.fetch(`/api/movies?search=${encodeURIComponent(query)}`);
                // Results handled by caller
            } catch (error) {
                console.error('Search error:', error);
            }
        }, 500));
    }
}

// Debounce Helper
function debounce(func, delay) {
    let timeoutId;
    return function(...args) {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => func.apply(this, args), delay);
    };
}

// =====================================================
// 7. FORMULARIOS
// =====================================================

async function handleFormSubmit(form, endpoint, method = 'POST') {
    event.preventDefault();

    const formData = new FormData(form);
    const data = Object.fromEntries(formData);

    try {
        const response = await AniFans.fetch(endpoint, {
            method: method,
            body: JSON.stringify(data),
        });

        AniFans.showToast(response.message || 'Éxito', 'success');
        form.reset();
        return response;
    } catch (error) {
        AniFans.showToast('Error al enviar el formulario', 'error');
        return null;
    }
}

// =====================================================
// 8. INICIALIZACION GENERAL
// =====================================================

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initTabs();
    initScrollAnimations();
    initLiveSearch();

    // Card hover effects
    document.querySelectorAll('.movie-card, .card').forEach(card => {
        card.classList.add('animate-cinematic-hover');
    });
});

// =====================================================
// EXPORTAR PARA USO GLOBAL
// =====================================================

window.AniFans = AniFans;
window.toggleFavorite = toggleFavorite;
window.handleFormSubmit = handleFormSubmit;