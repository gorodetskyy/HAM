---
name: web-development
description: >-
  Use this skill when architecting website structure, multi-section navigation,
  bilingual EN/UA localization, SEO metadata, and interactive site functionality.
---

# Web Development & Site Architecture Skill (Laravel + Filament TALL Stack)

Standards for architecting, developing, and deploying the **Ukrainian HAM Centre** website on the **TALL Stack (Tailwind CSS, Alpine.js, Laravel 11/12, Livewire v3) + FilamentPHP v3**.

## 1. Tech Stack & Packages

- **Core**: Laravel 11/12, PHP 8.3+, MySQL 8 / PostgreSQL 16, Redis (cache & queues).
- **Admin Panel**: FilamentPHP v3 (`PageResource` with typed Filament Builder blocks and strict `maxLength` character limits, `DonationResource` with HMRC Gift Aid CSV export).
- **Frontend**: Tailwind CSS, Alpine.js, Livewire v3 (`EventCalendar`, `TicketCart`, `DonationModal`), Blade components.
- **Spatie Ecosystem**:
  - `spatie/laravel-translatable` (JSON `en` / `uk` columns)
  - `spatie/laravel-medialibrary` (WebP conversions)
  - `spatie/laravel-settings` (`GlobalSettingsPage`)
  - `spatie/laravel-sitemap` + Schema.org (`NGO`, `Event`)
- **Payments & UK Charity Compliance**: Stripe PHP SDK (Checkout + Webhooks for One-off/Monthly donations & ticket orders) + UK Gift Aid declaration capture (House name/number + UK Postcode).

## 2. Database Entities (6 Core Models)

1. `Page` (Translatable JSON, Media) — Home, Our Mission, Contact, Policies (uses Filament Builder JSON blocks).
2. `Pillar` (Translatable JSON) — The 6 core charitable areas (`hasMany` Events, Posts).
3. `Event` (Translatable JSON) — Cambridge events (`belongsTo` Pillar, `hasMany` Tickets/Orders).
4. `Post` (Translatable JSON, Media) — News & impact reports (`belongsTo` Pillar).
5. `Donation` — Stripe donations + Gift Aid fields (`is_gift_aid`, `address_line_1`, `postcode`, `donor_name`).
6. `Order` — Event ticket orders (`belongsTo` Event).
