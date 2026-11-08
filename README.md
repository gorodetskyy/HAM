# Ukrainian Heritage, Art & Music Centre (Ukrainian HAM) — Cambridge, UK

**Connecting Communities Through Heritage, Art, Music and Mutual Support**  
*Helping Ukrainians Rebuild, Belong and Thrive in Cambridge*

---

## 🌐 Live Frontend & Architecture Repository

This repository contains:
1. **`index.html` (GitHub Pages Live Site)** — Full interactive TALL-stack frontend prototype built with **Tailwind CSS** and **Alpine.js**, featuring:
   - Responsive navigation & full-screen mobile menu overlay inspired by UK charity standards (`ukraineappeal.org.uk`) with enhanced backdrop blur contrast.
   - Instant **English / Українська** language switching (`spatie/laravel-translatable` JSON structure).
   - **Strict Filament Builder Blocks** with verified anti-bloat character caps (`HeroBlock`, `MissionCardsBlock`, `PillarsShowcaseBlock`, `BeneficiariesBlock`, `ManifestoQuoteBlock`, `GovernanceAccordionBlock`).
   - Interactive **Events Filter & Ticket Cart** (`Livewire EventCalendar` + `TicketCart` simulation).
   - **Stripe + HMRC UK Gift Aid Modal** (`Livewire DonationModal` with One-off/Monthly toggle and required UK taxpayer address/postcode declaration).
2. **`laravel-backend/` (Laravel 11/12 + FilamentPHP v3 Core)** — Production database migrations, Filament Builder `PageResource` schema with character limits, and bilingual `DatabaseSeeder`.

---

## 🧱 Database Entities (`laravel-backend/database/migrations/`)

| Model | Purpose | Localization | Key Relations |
| :--- | :--- | :---: | :--- |
| **`Page`** | Dynamic pages (`Home`, `Our Mission`, `Policies`, `Contact`) | JSON (`en`, `uk`) | Media, Filament Builder JSON blocks |
| **`Pillar`** | 6 interconnected charitable areas (`short_teaser` ≤ 120 chars + `full_purpose`) | JSON (`en`, `uk`) | `hasMany` Events, Posts |
| **`Event`** | Cambridge cultural, educational & community events | JSON (`en`, `uk`) | `belongsTo` Pillar, `hasMany` Orders |
| **`Post`** | News & community impact reports | JSON (`en`, `uk`) | `belongsTo` Pillar, Media |
| **`Donation`** | Stripe Checkout donations + HMRC Gift Aid audit fields | — | Webhook idempotency (`stripe_event_id`) |
| **`Order`** | Event ticket registrations & checkout orders | — | `belongsTo` Event |
