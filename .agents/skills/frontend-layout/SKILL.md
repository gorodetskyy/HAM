---
name: frontend-layout
description: >-
  Use this skill when building responsive HTML5/CSS3/Tailwind markup, mobile-first
  layouts, interactive navigation menus, and accessible UI components.
---

# Frontend Layout & Responsive Markup Skill (Верстка)

Guidelines for clean, semantic, mobile-first HTML and CSS layout engineering.

## 1. Semantic HTML5 Structure

- Always use semantic landmarks: `<header>`, `<nav aria-label="Main">`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`.
- Ensure proper heading hierarchy (`<h1>` once per page, followed logically by `<h2>` and `<h3>`).
- Include accessible attributes (`aria-expanded`, `aria-controls`, `aria-label`) on interactive drawers, modals, and language switchers.

## 2. Mobile-First Responsive Grid & Flexbox

- **Breakpoints**: Design for `375px` mobile screens first (matching the iPhone viewport reference), scaling smoothly to tablet (`768px`) and desktop (`1280px+`).
- **Container**: Centered container with `max-width: 1200px` and responsive horizontal padding (`1.25rem` on mobile, `2.5rem` on desktop).
- **Card Grids**: Use CSS Grid (`grid-template-columns: repeat(auto-fit, minmax(300px, 1fr))`) with consistent gap (`1.5rem`–`2rem`) and equal-height cards (`display: flex; flex-direction: column; justify-content: space-between`).

## 3. Interactive Overlay Menu & Micro-interactions

- Smooth CSS transitions (`transition: opacity 0.25s ease, transform 0.25s ease`) for the mobile drawer menu.
- Lock body scroll (`overflow: hidden`) when the mobile overlay menu is open.
- Touch targets on mobile must be at least `44x44px` (buttons, social icons, menu links).
