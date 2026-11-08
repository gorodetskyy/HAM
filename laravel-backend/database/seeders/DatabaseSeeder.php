<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        // 1. Seed the 6 Core Pillars (EN & UK)
        $pillars = [
            [
                'slug' => 'community-support-integration',
                'icon' => 'users',
                'sort_order' => 1,
                'title' => json_encode([
                    'en' => 'Community Support & Integration',
                    'uk' => 'Підтримка громади та інтеграція',
                ], JSON_UNESCAPED_UNICODE),
                'short_teaser' => json_encode([
                    'en' => 'Reducing isolation, improving wellbeing, and creating pathways for volunteering and active life in UK society.',
                    'uk' => 'Зменшення ізоляції, покращення добробуту та створення можливостей для волонтерства й активної участі у житті Британії.',
                ], JSON_UNESCAPED_UNICODE),
                'full_purpose' => json_encode([
                    'en' => 'Supporting Ukrainian refugees, displaced families, and individuals facing hardship as they adapt to life in the UK. We work to reduce social isolation, improve wellbeing, encourage independence, and create opportunities for education, volunteering, skills development, and participation in British community life.',
                    'uk' => 'Підтримка українських біженців, переміщених родин та людей у складних обставинах під час адаптації до життя у Великій Британії. Ми працюємо над зменшенням соціальної ізоляції, зміцненням добробуту, розвитком самостійності та залученням до волонтерства, навчання і громадського життя.',
                ], JSON_UNESCAPED_UNICODE),
            ],
            [
                'slug' => 'empowering-talent-knowledge',
                'icon' => 'sparkles',
                'sort_order' => 2,
                'title' => json_encode([
                    'en' => 'Empowering Talent, Knowledge & Experience',
                    'uk' => 'Розвиток талантів, знань та досвіду',
                ], JSON_UNESCAPED_UNICODE),
                'short_teaser' => json_encode([
                    'en' => 'Helping Ukrainian professionals, educators, artists, and leaders share their expertise and flourish in Britain.',
                    'uk' => 'Підтримка українських фахівців, освітян, митців та лідерів у реалізації їхнього потенціалу у Великій Британії.',
                ], JSON_UNESCAPED_UNICODE),
                'full_purpose' => json_encode([
                    'en' => 'Recognising the professional qualifications, intellectual abilities, creativity, and practical experience that Ukrainians bring to British society. We encourage educators, professionals, artists, musicians, and emerging community leaders to develop their potential, share their knowledge, and enrich their local communities.',
                    'uk' => 'Визнання професійної кваліфікації, інтелектуального потенціалу, креативності та практичного досвіду, які українці привносять у британське суспільство. Ми допомагаємо фахівцям, освітянам, митцям і музикантам розкривати свій потенціал та збагачувати місцеву громаду.',
                ], JSON_UNESCAPED_UNICODE),
            ],
            [
                'slug' => 'older-people-intergenerational-solidarity',
                'icon' => 'heart-handshake',
                'sort_order' => 3,
                'title' => json_encode([
                    'en' => 'Older People & Intergenerational Solidarity',
                    'uk' => 'Старше покоління та зв’язок поколінь',
                ], JSON_UNESCAPED_UNICODE),
                'short_teaser' => json_encode([
                    'en' => 'Valuing older people’s wisdom and skills through active ageing, volunteering, and mentoring younger generations.',
                    'uk' => 'Визнання досвіду старшого покоління, активне довголіття, волонтерство та передача знань молоді.',
                ], JSON_UNESCAPED_UNICODE),
                'full_purpose' => json_encode([
                    'en' => 'Supporting older Ukrainians to remain active, independent, socially connected, and valued. Recognising their professional knowledge and life experience as a vital resource, we create opportunities for active ageing, volunteering, teaching, and sharing wisdom with younger generations.',
                    'uk' => 'Підтримка українців старшого віку, щоб вони залишалися активними, незалежними, соціально залученими та цінними. Ми створюємо умови для активного довголіття, волонтерства, викладання та передачі життєвого і професійного досвіду молодшим поколінням.',
                ], JSON_UNESCAPED_UNICODE),
            ],
            [
                'slug' => 'children-education-future-generations',
                'icon' => 'academic-cap',
                'sort_order' => 4,
                'title' => json_encode([
                    'en' => 'Children, Education & Future Generations',
                    'uk' => 'Діти, освіта та майбутні покоління',
                ], JSON_UNESCAPED_UNICODE),
                'short_teaser' => json_encode([
                    'en' => 'Nurturing youth through creative programmes and partnerships with educational institutions in the UK and Ukraine.',
                    'uk' => 'Підтримка дітей і молоді через освітні й творчі програми та співпрацю із закладами освіти України й Британії.',
                ], JSON_UNESCAPED_UNICODE),
                'full_purpose' => json_encode([
                    'en' => 'Contributing to the education, development, and wellbeing of children and young people through creative, educational, and cultural programmes. We cooperate with educational institutions in Ukraine and the UK to foster intergenerational learning, cultural awareness, and mutual understanding.',
                    'uk' => 'Сприяння освіті, гармонійному розвитку та добробуту дітей і молоді через творчі, освітні й культурні програми. Ми співпрацюємо з дитячими та освітніми закладами в Україні та Великій Британії задля культурного обміну та взаєморозуміння.',
                ], JSON_UNESCAPED_UNICODE),
            ],
            [
                'slug' => 'ukrainian-heritage-arts-music',
                'icon' => 'musical-note',
                'sort_order' => 5,
                'title' => json_encode([
                    'en' => 'Ukrainian Heritage, Arts & Music',
                    'uk' => 'Українська спадщина, мистецтво та музика',
                ], JSON_UNESCAPED_UNICODE),
                'short_teaser' => json_encode([
                    'en' => 'Sharing Ukrainian language, literature, history, art, and music through concerts, exhibitions, and public events.',
                    'uk' => 'Популяризація української мови, літератури, історії, мистецтва та музики через концерти, виставки й події.',
                ], JSON_UNESCAPED_UNICODE),
                'full_purpose' => json_encode([
                    'en' => 'Preserving and promoting Ukrainian language, literature, history, traditions, music, and contemporary art. Through literary and historical gatherings, language programmes, concerts, exhibitions, and festivals, we share Ukrainian heritage with multicultural audiences and challenge stereotypes through dialogue.',
                    'uk' => 'Збереження та популяризація української мови, літератури, історії, традицій, музики та сучасного мистецтва. Через літературні й історичні зустрічі, мовні програми, концерти, виставки та фестивалі ми знайомимо британську спільноту з українською спадщиною та руйнуємо стереотипи.',
                ], JSON_UNESCAPED_UNICODE),
            ],
            [
                'slug' => 'community-partnerships-humanitarian-support',
                'icon' => 'globe-europe-africa',
                'sort_order' => 6,
                'title' => json_encode([
                    'en' => 'Community Partnerships & Humanitarian Support',
                    'uk' => 'Партнерства громади та гуманітарна допомога',
                ], JSON_UNESCAPED_UNICODE),
                'short_teaser' => json_encode([
                    'en' => 'Uniting Cambridge institutions and businesses for local cohesion while coordinating vital humanitarian aid to Ukraine.',
                    'uk' => 'Об’єднання інституцій та бізнесу Кембриджа задля згуртованості громади та координація гуманітарної допомоги Україні.',
                ], JSON_UNESCAPED_UNICODE),
                'full_purpose' => json_encode([
                    'en' => 'Building partnerships with local authorities, cultural institutions, charities, and businesses to enrich Cambridge’s civic life and promote family wellbeing. Where needed, we coordinate targeted humanitarian assistance for war-affected people in Ukraine—delivering food, clothing, hygiene, baby, and medical supplies through trusted partners.',
                    'uk' => 'Побудова партнерств із місцевою владою, освітніми й культурними інституціями, благодійними фондами та бізнесом для збагачення громадського життя Кембриджа. За потреби ми також координуємо адресну гуманітарну допомогу постраждалим від війни в Україні через перевірених партнерів.',
                ], JSON_UNESCAPED_UNICODE),
            ],
        ];

        foreach ($pillars as $pillar) {
            DB::table('pillars')->insert(array_merge($pillar, [
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]));
        }
    }
}
