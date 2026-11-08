<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Pillars (6 core charitable directions)
        Schema::create('pillars', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('icon')->default('heroicon-o-sparkles');
            $table->unsignedTinyInteger('sort_order')->default(1);
            $table->json('title');          // Translatable (EN/UK)
            $table->json('short_teaser');   // Translatable (EN/UK) - max 120 chars for Homepage grid
            $table->json('full_purpose');   // Translatable (EN/UK) - full Charity Commission text for Policies accordion
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. Dynamic Pages with Filament Builder blocks
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->json('title');            // Translatable (EN/UK)
            $table->json('meta_description')->nullable();
            $table->json('content');          // Translatable JSON array of Filament Builder blocks
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        // 3. Events in Cambridge
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pillar_id')->nullable()->constrained('pillars')->nullOnDelete();
            $table->string('slug')->unique();
            $table->json('title');            // Translatable (EN/UK)
            $table->json('summary');          // Translatable (EN/UK)
            $table->json('description')->nullable();
            $table->string('location')->default('Cambridge, UK');
            $table->dateTime('starts_at');
            $table->dateTime('ends_at')->nullable();
            $table->unsignedInteger('price_pence')->default(0); // 0 = Free event
            $table->unsignedInteger('capacity')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        // 4. News & Impact Reports
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pillar_id')->nullable()->constrained('pillars')->nullOnDelete();
            $table->string('slug')->unique();
            $table->json('title');            // Translatable (EN/UK)
            $table->json('excerpt');          // Translatable (EN/UK)
            $table->json('body');             // Translatable (EN/UK)
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        // 5. Donations & HMRC Gift Aid Declarations
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('stripe_session_id')->nullable()->unique();
            $table->string('stripe_event_id')->nullable()->unique(); // Webhook idempotency
            $table->enum('frequency', ['one_off', 'monthly'])->default('one_off');
            $table->unsignedInteger('amount_pence');
            $table->string('currency', 3)->default('GBP');
            $table->string('status')->default('pending'); // pending, succeeded, failed
            $table->string('email');
            // HMRC Gift Aid required fields
            $table->boolean('is_gift_aid')->default(false);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('house_name_or_number')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('town_or_city')->nullable();
            $table->string('postcode', 16)->nullable();
            $table->timestamp('gift_aid_declared_at')->nullable();
            $table->text('gift_aid_declaration_text')->nullable();
            $table->timestamps();
        });

        // 6. Event Ticket Orders (Cart Checkout)
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
            $table->string('order_reference')->unique();
            $table->string('stripe_session_id')->nullable()->unique();
            $table->string('attendee_name');
            $table->string('attendee_email');
            $table->unsignedSmallInteger('quantity')->default(1);
            $table->unsignedInteger('total_pence')->default(0);
            $table->string('status')->default('confirmed'); // pending, confirmed, cancelled
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('donations');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('events');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('pillars');
    }
};
