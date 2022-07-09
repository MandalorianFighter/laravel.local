<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
		$table->dropColumn('name');
                $table->dropColumn('desc');
                $table->string('title')->after('id')->change();
                $table->string('slug')->after('title');
                $table->text('text')->after('slug')->change();
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
                $table->string('name')->after('id');
                $table->string('desc')->after('title');
                $table->string('title')->after('text')->change();
                $table->text('text')->after('name')->change();
                $table->dropColumn('slug');
        });
    }
};
