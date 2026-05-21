# 🎬 AniFans - Quick Reference Guide

## 📍 What Changed?

| What | Before | After | Status |
|------|--------|-------|--------|
| CSS Structure | 2 files (app.css + custom.css) | 1 file (app.css) | ✅ Merged |
| Color System | Tailwind custom colors | CSS variables | ✅ Modernized |
| @apply Usage | Used on custom colors ❌ | Removed ✅ | ✅ Fixed |
| Blade Templates | Invalid classes | Valid CSS + CSS vars | ✅ Fixed |
| Tailwind Version | v4 (broken) | v4 (fixed) | ✅ Working |
| Components | Scattered | Organized library | ✅ Better |

---

## 🎨 Using Colors

### Method 1: Inline Styles (For dynamic colors)
```html
<div style="color: var(--color-terracota-500);">Colored Text</div>
<div style="background-color: var(--color-pergamino-100);">Background</div>
<div style="border-color: var(--color-bosque-500);">Border</div>
```

### Method 2: Tailwind Classes (For standard utilities)
```html
<p class="text-xl font-sans">Text with Tailwind</p>
<button class="px-6 py-3 rounded-lg">Button</button>
```

### Method 3: Custom Classes (Pre-made components)
```html
<button class="btn btn-primary">Primary Button</button>
<button class="btn btn-secondary">Secondary Button</button>
<div class="movie-card">...</div>
```

---

## 🧩 Common Components

### Buttons
```html
<!-- Primary (Terracota) -->
<button class="btn btn-primary">Action</button>

<!-- Secondary (Bosque) -->
<button class="btn btn-secondary">Action</button>

<!-- Outline -->
<button class="btn btn-outline">Action</button>

<!-- Sizes -->
<button class="btn btn-primary btn-sm">Small</button>
<button class="btn btn-primary btn-lg">Large</button>
```

### Cards
```html
<div class="movie-card">
    <div class="movie-card__image">
        <img src="poster.jpg" alt="Movie">
        <div class="movie-card__overlay"></div>
    </div>
    <div class="movie-card__content">
        <h3 class="movie-card__title">Movie Title</h3>
        <span class="movie-card__category">Action</span>
        <p class="movie-card__rating">★★★★★</p>
    </div>
</div>
```

### Layout
```html
<div class="cinema-container">
    <!-- Content with max-width and padding -->
</div>

<section class="cinema-section">
    <!-- Section with vertical padding -->
</section>

<header class="navbar-sticky">
    <!-- Sticky navbar with blur -->
</header>
```

### Effects
```html
<div class="glow">Glowing effect</div>
<div class="lift">Lifts on hover</div>
<div class="scale-on-hover">Scales on hover</div>
<div class="cascade-in">Animates in</div>
<div class="pulse-subtle">Pulses subtly</div>
<div class="float">Floats continuously</div>
```

---

## 🎨 Color Swatches Quick Reference

### Primary Colors
- **Crema** (Light): `--color-crema-100` → `#F5E6D3`
- **Terracota** (Warm): `--color-terracota-500` → `#C75B39`
- **Bosque** (Dark): `--color-bosque-500` → `#2D5016`
- **Pergamino** (Neutral): `--color-pergamino-100` → `#E8DCC8`
- **Tinta** (Text): `--color-tinta-900` → `#1A1A1A`

### Each Color Has 10 Shades
```
Crema:      50, 100, 200, 300, 400, 500, 600, 700, 800, 900
Terracota:  50, 100, 200, 300, 400, 500, 600, 700, 800, 900
Bosque:     50, 100, 200, 300, 400, 500, 600, 700, 800, 900
Pergamino:  50, 100, 200, 300, 400, 500, 600, 700, 800, 900
Tinta:      50, 100, 200, 300, 400, 500, 600, 700, 800, 900
```

---

## 📝 Blade Template Examples

### Simple Page
```blade
@extends('layouts.app')

@section('content')
<div class="cinema-container cinema-section">
    <h1 style="font-family: var(--font-display);">Welcome</h1>
    <p style="color: var(--color-tinta-600);">Content here</p>
</div>
@endsection
```

### With Buttons
```blade
<div class="flex gap-4 flex-col sm:flex-row">
    <button class="btn btn-primary">Primary Action</button>
    <button class="btn btn-secondary">Secondary Action</button>
    <button class="btn btn-outline">Cancel</button>
</div>
```

### With Cards
```blade
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($movies as $movie)
    <div class="movie-card cascade-in">
        <div class="movie-card__image">
            <img src="{{ $movie->poster }}" alt="{{ $movie->titulo }}">
            <div class="movie-card__overlay"></div>
        </div>
        <div class="movie-card__content">
            <h3 class="movie-card__title">{{ $movie->titulo }}</h3>
            <span class="movie-card__category">{{ $movie->genero }}</span>
            <p class="movie-card__rating">{{ $movie->rating_promedio }}/10</p>
        </div>
    </div>
    @endforeach
</div>
```

---

## 🔧 CSS Variables Available

### Colors (50 total)
```css
/* All in format: --color-{name}-{shade} */
--color-crema-50 through --color-crema-900
--color-terracota-50 through --color-terracota-900
--color-bosque-50 through --color-bosque-900
--color-pergamino-50 through --color-pergamino-900
--color-tinta-50 through --color-tinta-900
```

### Effects
```css
--shadow-sm, --shadow-md, --shadow-lg, --shadow-xl
--shadow-card, --shadow-cinema
```

### Timing
```css
--transition-fast (150ms)
--transition-base (300ms)
--transition-slow (500ms)
```

### Borders
```css
--border-radius-sm, --border-radius-md, --border-radius-lg
--border-radius-xl, --border-radius-2xl
```

### Typography
```css
--font-display: 'Playfair Display', serif
--font-sans: 'Montserrat', system-ui, sans-serif
```

---

## 📦 File Locations

```
resources/
├── css/
│   └── app.css ← All styles here
├── js/
│   └── app.js
└── views/
    ├── home.blade.php
    └── layouts/
        └── app.blade.php
```

---

## 🚀 Commands

```bash
# Development
npm run dev

# Build for production
npm run build

# Full setup
composer setup

# Laravel server
php artisan serve

# Tests
composer test
```

---

## ⚠️ Common Issues & Fixes

### Issue: Colors not showing
```html
<!-- ❌ Wrong -->
<div class="text-terracota-500">Text</div>

<!-- ✅ Right -->
<div style="color: var(--color-terracota-500);">Text</div>
```

### Issue: Buttons not styled
```html
<!-- ❌ Wrong -->
<button class="bg-terracota-500">Click</button>

<!-- ✅ Right -->
<button class="btn btn-primary">Click</button>
```

### Issue: Custom class not working
```html
<!-- ❌ Wrong -->
<div class="my-custom-class">Content</div>

<!-- ✅ Right (add to app.css first) -->
<div class="my-custom-class">Content</div>
```

---

## 📚 Documentation Files

1. **REFACTORING_REPORT.md** - Full technical details
2. **REFACTORING_SUMMARY.md** - Complete overview
3. **This file** - Quick reference
4. **app.css** - Source of truth for all styles

---

## ✅ What's Working

- ✅ Tailwind CSS v4
- ✅ All custom colors
- ✅ All animations
- ✅ All components
- ✅ Responsive design
- ✅ Dark/light support ready
- ✅ Performance optimized

---

## 🎯 Best Practices

### DO ✅
- Use CSS variables for custom colors
- Use Tailwind classes for utilities (flex, grid, etc.)
- Use custom classes for complex components
- Keep styles organized in app.css
- Document new components
- Test on mobile

### DON'T ❌
- Don't use @apply with custom colors
- Don't create separate CSS files without merging
- Don't mix inline styles excessively
- Don't forget responsive design
- Don't hardcode colors
- Don't break the component structure

---

## 🎬 Cinematographic Design Elements

The project maintains:
- ✅ Elegant color palette (Crema, Terracota, Bosque, Pergamino, Tinta)
- ✅ Smooth animations (fadeInUp, cascadeIn, float)
- ✅ Sophisticated shadows (card, cinema)
- ✅ Professional typography (Playfair + Montserrat)
- ✅ Cinematic overlays and effects

---

## 💾 Quick Copy-Paste

### Hero Section
```html
<section class="cinema-hero" style="height: 500px;">
    <div class="cinema-hero__content">
        <h1 style="font-family: var(--font-display); color: white;">Title</h1>
        <p style="color: white;">Description</p>
    </div>
</section>
```

### Filter Buttons
```html
<div class="flex gap-2 flex-wrap">
    <button class="filter-badge active">All</button>
    <button class="filter-badge">Action</button>
    <button class="filter-badge">Drama</button>
</div>
```

### Search Bar
```html
<input type="text" class="search-input" placeholder="Search movies...">
```

### Divider
```html
<div class="divider my-8"></div>
```

---

**Last Updated:** 2024  
**Version:** 1.0  
**Status:** ✅ Production Ready  
**Questions?** See REFACTORING_REPORT.md
