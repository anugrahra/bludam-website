<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul situs',
            'value'=>'bludam website',
            'type'=>'text'
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'alamat kantor',
            'value'=>'cimahi, jawa barat, indonesia',
            'type'=>'text'
        ]);

        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://instagram.com/blud_am',
            'type'=>'text'
        ]);

        setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://facebook.com/Airminumcimahi',
            'type'=>'text'
        ]);

        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website resmi BLUD AM Cimahi',
            'type'=>'text'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
