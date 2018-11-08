<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('class');
            $table->unsignedInteger('level');
            $table->string('race');
            $table->string('alignment')->nullable();
            $table->string('deity')->nullable();
            $table->string('size');
            $table->unsignedInteger('age');
            $table->string('gender')->nullable();
            $table->unsignedInteger('weight');
            $table->string('eyes')->nullable();
            $table->string('hair')->nullable();
            $table->string('skin')->nullable();
            $table->integer('str_ability_score')->default(0);
            $table->integer('str_ability_mod')->default(0);
            $table->integer('temp_str_ability_score')->nullable();
            $table->integer('temp_str_mod_score')->nullable();
            $table->integer('dex_ability_score')->default(0);
            $table->integer('dex_ability_mod')->default(0);
            $table->integer('temp_dex_ability_score')->nullable();
            $table->integer('temp_dex_mod_score')->nullable();
            $table->integer('con_ability_score')->default(0);
            $table->integer('con_ability_mod')->default(0);
            $table->integer('temp_con_ability_score')->nullable();
            $table->integer('temp_con_mod')->nullable();
            $table->integer('int_ability_score')->default(0);
            $table->integer('int_ability_mod')->default(0);
            $table->integer('temp_int_score')->nullable();
            $table->integer('temp_int_mod')->nullable();
            $table->integer('wis_ability_score')->default(0);
            $table->integer('wis_ability_mod')->default(0);
            $table->integer('temp_wis_ability_score')->nullable();
            $table->integer('temp_wis_mod')->nullable();
            $table->integer('cha_ability_score')->default(0);
            $table->integer('cha_ability_mod')->default(0);
            $table->integer('temp_cha_ability_score')->nullable();
            $table->integer('temp_cha_mod')->nullable();
            $table->unsignedInteger('hit_points')->nullable();
            $table->string('wounds')->nullable();
            $table->unsignedInteger('current_hp')->nullable();
            $table->unsignedInteger('nonlethal_damage')->nullable();
            // CHECK ABOUT IT BEING INT OR NOT...
            $table->string('speed')->nullable();
            $table->unsignedInteger('armor_class')->nullable();
            $table->integer('armor_bonus')->nullable();
            $table->integer('shield_bonus')->nullable();
            $table->integer('dex_modifier')->nullable();
            $table->integer('size_modifier')->nullable();
            $table->integer('natural_armor')->nullable();
            $table->integer('deflection_modifier')->nullable();
            $table->integer('misc_modifier')->nullable();
            $table->integer('damage_reduction')->nullable();
            $table->integer('touch_armor_class')->nullable();
            $table->integer('flat-footed_armor_class')->nullable();
            $table->integer('initiative_mod_def_mod')->nullable();
            $table->integer('initiative_mod_misc_mod')->nullable();
            // SAVING THROW
            $table->unsignedInteger('saving_throw_id');

            $table->boolean('public')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
