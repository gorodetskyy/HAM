---
name: web-design
description: >-
  Use this skill when designing UI/UX, color palettes, typography, visual hierarchy,
  and component aesthetics for websites, specifically tailored for Ukrainian HAM Centre
  and modern UK charity/cultural institution standards.
---

# Web Design & UI/UX Skill

Provides design system standards, visual direction, and UI/UX guidelines for the **Ukrainian Heritage, Art & Music Centre (Ukrainian HAM)** website.

## 1. Visual Direction & Brand Palette (Inspired by UK Charity Reference)

- **Primary Royal/Ukrainian Blue (`#2B579A` / `#3B68B5`)**: Trustworthy, calm, institutional yet warm. Used for hero overlays, full-screen mobile navigation drawer, and primary brand surfaces.
- **Warm Gold / Sunflower Yellow (`#E5C130` / `#D9B426`)**: Used for primary Call-to-Action buttons (`Donate`), social media icon badges, and subtle cultural accents.
- **Background Surfaces**:
  - Soft Alabaster / Warm Off-White (`#F8FAFC` / `#F9F8F6`) for main reading sections to avoid harsh eye strain.
  - Deep Navy (`#1A365D`) for footer and high-contrast informational banners.
- **Text Hierarchy**:
  - Primary Ink (`#0F172A`) for body copy and headings on light backgrounds.
  - Crisp White (`#FFFFFF`) and Soft Sky (`#DCE6F7`) on blue backgrounds.

## 2. Typography & Readability

- **Headings**: Clean geometric or humanist sans-serif (`Plus Jakarta Sans`, `Montserrat`, or `Inter`) with generous tracking and semi-bold/light contrast (as seen in the mobile overlay navigation).
- **Editorial / Cultural Accents**: Optional serif pairing (`Cormorant Garamond` or `Playfair Display`) for literary, heritage, and artistic quotes.
- **Scale & Spacing**:
  - Hero Headline: `clamp(2.25rem, 5vw, 3.75rem)`, line-height `1.15`.
  - Section Headings: `clamp(1.75rem, 3.5vw, 2.5rem)`.
  - Body Text: `1.0625rem` (`17px`) to `1.125rem` (`18px`), line-height `1.65`, max-width `65ch` for effortless reading.

## 3. Core UI Components (Reference Pattern)

- **Header & Full-Screen Mobile Menu**:
  - Top bar with dual-flag or cultural emblem logo (`Ukrainian HAM`), language switcher (`EN / UA`), and prominent `Donate` button.
  - Full-screen translucent royal blue menu overlay (`backdrop-filter: blur(8px)`) with centered vertical navigation (`Our Mission`, `News`, `Projects`, `Events`, `Contact`, `Policies`), rounded yellow social buttons (`FB`, `LinkedIn`, `X`, `Instagram`), globe language selector, and pill-shaped yellow `Donate` CTA.
- **Impact Cards ("What We Do" & "Charitable Purposes")**:
  - Clean 3-column or 2x3 bento grid on desktop, single column on mobile.
  - Subtle top border or icon badge in Ukrainian Blue & Gold, concise title, and 2-sentence summary without wall-of-text clutter.
