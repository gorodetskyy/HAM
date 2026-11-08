---
name: charity-copywriter
description: >-
  Use this skill when writing, editing, deduplicating, or translating website copy,
  mission statements, and UK Charity Commission governing purposes for nonprofit
  and cultural organizations.
---

# Charity & Cultural Copywriter Skill (Копірайтинг)

Specialized copywriting framework for UK charities, cultural centres, and community initiatives (specifically **Ukrainian HAM Centre, Cambridge**).

## 1. Core Copywriting Principles

1. **Zero Redundancy (Без води і повторів)**:
   - Never repeat the same list of adjectives (*"reduce social isolation, improve wellbeing, encourage active participation..."*) across multiple paragraphs on the same page.
   - Assign **one clear role** to each section:
     - **Hero / Tagline**: Emotional hook + clear identity in 1–2 sentences.
     - **Who We Are**: Context (Cambridge, since 2022, grassroots community-led charity).
     - **Our Mission & Vision**: Forward-looking purpose (two-way integration, dignity, cultural bridge between Ukraine and Britain).
     - **What We Do (6 Pillars)**: Scannable, action-oriented cards (1 headline + 1–2 crisp sentences per pillar).
     - **Our Charitable Purposes (Governance/Policies)**: Formal, comprehensive wording suitable for the UK Charity Commission, grant applications, and official policies.
2. **Empowering, Dignified Tone**:
   - Portray Ukrainians not merely as passive recipients of aid, but as **active contributors, professionals, artists, elders with wisdom, and talented youth** who enrich Cambridge and British society.
   - Emphasize **two-way integration** and **intergenerational solidarity**.
## 4. Filament Builder Character Limits (Strict Content Governance)

When preparing or editing copy for FilamentPHP `PageResource` blocks, enforce these hard limits:
- **`HeroBlock`**:
  - `h1`: max **80 chars**
  - `subtitle`: max **160 chars**
- **`MissionCardsBlock`** (3 cards: *Who We Are*, *Our Mission*, *Our Vision*):
  - `body`: max **250 chars** per card
- **`PillarsShowcaseBlock`** (6 `Pillar` records):
  - `teaser`: max **120 chars** per pillar card
  - `description` (full pillar page/modal): concise 2–3 sentences
- **`BeneficiariesBlock`** (5 cards for *Who Benefits*):
  - Compact 1-line title + crisp description
- **`ManifestoQuoteBlock`** (*Our Belief*):
  - High-impact quote + 3-part rhythm slogan
- **`GovernanceAccordionBlock`** (*Policies / Our Charitable Purposes 1–6*):
  - Full formal UK Charity Commission-ready wording, structured into 6 expandable accordion items.
