<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->timestamps();
           
        });

        $categories = [
            'Moda',
            'Motori',
            'Politica',
            'Sport',
            'Tech',
            'Viaggi',
        ];

        $icons = [
            'Moda' => 'fas fa-tshirt',
            'Motori' => 'fas fa-car',
            'Politica' => 'fas fa-balance-scale',
            'Sport' => 'fas fa-futbol',
            'Tech' => 'fas fa-laptop',
            'Viaggi' => 'fas fa-plane',
        ];

        foreach ($categories as $category) {

            Category::create([
                'name' => $category,
                'icon' => $icons[$category],
            ]);
        }


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
