<?php

namespace App\Filament\Resources;

use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;

class PageResource extends Resource
{
    use Translatable;

    protected static ?string $model = Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(100),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Builder::make('content')
                ->label('Page Content Blocks (Strict Anti-Bloat Limits)')
                ->blocks([
                    // 1. HeroBlock
                    Builder\Block::make('hero_block')
                        ->label('Hero Banner (Max 80/160 chars)')
                        ->schema([
                            Forms\Components\TextInput::make('tagline')
                                ->default('UKRAINIAN HAM CENTRE | CAMBRIDGE, UK')
                                ->maxLength(60),
                            Forms\Components\TextInput::make('h1')
                                ->label('Headline (H1)')
                                ->required()
                                ->maxLength(80)
                                ->helperText('Max 80 characters to keep the hero punchy.'),
                            Forms\Components\Textarea::make('subtitle')
                                ->required()
                                ->maxLength(160)
                                ->rows(2)
                                ->helperText('Max 160 characters.'),
                            Forms\Components\TextInput::make('primary_cta_label')
                                ->default('Donate')
                                ->maxLength(25),
                            Forms\Components\TextInput::make('secondary_cta_label')
                                ->default('Our Mission')
                                ->maxLength(25),
                        ]),

                    // 2. MissionCardsBlock
                    Builder\Block::make('mission_cards_block')
                        ->label('Mission Cards (Who We Are / Mission / Vision — Max 250 chars each)')
                        ->schema([
                            Forms\Components\Repeater::make('cards')
                                ->minItems(3)
                                ->maxItems(3)
                                ->schema([
                                    Forms\Components\TextInput::make('title')
                                        ->required()
                                        ->maxLength(40),
                                    Forms\Components\Textarea::make('body')
                                        ->required()
                                        ->maxLength(250)
                                        ->rows(3)
                                        ->helperText('Strictly capped at 250 characters to eliminate repetition.'),
                                ]),
                        ]),

                    // 3. PillarsShowcaseBlock
                    Builder\Block::make('pillars_showcase_block')
                        ->label('6 Pillars Showcase (Auto-loads from Pillars table)')
                        ->schema([
                            Forms\Components\TextInput::make('section_heading')
                                ->default('What We Do')
                                ->maxLength(60),
                            Forms\Components\TextInput::make('section_subheading')
                                ->default('Six interconnected areas driving integration, cultural preservation, and mutual support.')
                                ->maxLength(140),
                        ]),

                    // 4. BeneficiariesBlock
                    Builder\Block::make('beneficiaries_block')
                        ->label('Who Benefits (5 Fixed Cards)')
                        ->schema([
                            Forms\Components\TextInput::make('heading')
                                ->default('Who Benefits')
                                ->maxLength(50),
                            Forms\Components\Repeater::make('items')
                                ->minItems(5)
                                ->maxItems(5)
                                ->schema([
                                    Forms\Components\TextInput::make('group')
                                        ->required()
                                        ->maxLength(50),
                                    Forms\Components\TextInput::make('description')
                                        ->required()
                                        ->maxLength(110),
                                ]),
                        ]),

                    // 5. ManifestoQuoteBlock
                    Builder\Block::make('manifesto_quote_block')
                        ->label('Our Belief / Manifesto Quote')
                        ->schema([
                            Forms\Components\Textarea::make('quote')
                                ->required()
                                ->maxLength(200),
                            Forms\Components\TextInput::make('slogan')
                                ->required()
                                ->maxLength(120),
                        ]),

                    // 6. GovernanceAccordionBlock
                    Builder\Block::make('governance_accordion_block')
                        ->label('Policies & Official Charitable Purposes Accordion')
                        ->schema([
                            Forms\Components\TextInput::make('heading')
                                ->default('Our Charitable Purposes (UK Charity Governance)')
                                ->maxLength(80),
                            Forms\Components\Textarea::make('intro')
                                ->maxLength(360),
                            Forms\Components\Toggle::make('load_from_pillars')
                                ->label('Automatically pull full legal descriptions from the 6 Pillars')
                                ->default(true),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }
}
