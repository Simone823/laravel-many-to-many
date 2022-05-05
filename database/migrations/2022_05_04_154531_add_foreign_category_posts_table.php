<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignCategoryPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            // Creo una colonna category id
            $table->unsignedBigInteger('category_id')->nullable()->after('description');

            // Aggiungo la foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            // Elimino la foreign key
            $table->dropForeign(['category_id']);
            
            // Elimino la colonna category id
            $table->dropColumn('category_id');
            
        });
    }
}
