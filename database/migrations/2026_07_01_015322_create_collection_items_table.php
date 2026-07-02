<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collection_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('franchise_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('name');

            $table->string('manufacturer', 150)->nullable();

            $table->string('series', 150)->nullable();

            $table->string('character', 150)->nullable();

            $table->string('edition', 100)->nullable();

            $table->unsignedInteger('quantity')->default(1);

            $table->date('purchase_date')->nullable();

            $table->decimal('purchase_price', 10, 2)->nullable();

            $table->decimal('estimated_price', 10, 2)->nullable();

            $table->enum('condition', [
                'Mint',
                'Near Mint',
                'Good',
                'Fair',
                'Poor'
            ]);

            $table->string('storage_location', 200)->nullable();

            $table->string('photo')->nullable();

            $table->text('notes')->nullable();

            $table->boolean('is_favorite')->default(false);

            $table->enum('status', [
                'owned',
                'wishlist'
            ])->default('owned');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collection_items');
    }
};
