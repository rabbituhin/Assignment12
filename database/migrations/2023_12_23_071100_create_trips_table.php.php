<?php

// database/migrations/xxxx_xx_xx_add_user_id_to_seats_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToSeatsTable extends Migration
{
    public function up()
    {
        Schema::table('seats', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
        });
    }

    public function down()
    {
        Schema::table('seats', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
