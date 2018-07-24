<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('image_data')->nullable();
            $table->string('mime_type')->nullable();
        });
        
        $db = env('DB_CONNECTION');
        if ( $db == 'mysql') {
            //mysql
            DB::statement('ALTER TABLE `users` MODIFY `image_data` longtext;');
            
        } elseif ($db == 'pgsql') {
            //pgsql
            //DB::statement('ALTER TABLE users ALTER COLUMN image_data TYPE longtext;');
        }
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('image_data');
            $table->dropColumn('mime_type');
            
        });
    }
}
