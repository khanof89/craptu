<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AlterGroupsTableAddSymbol extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            \Schema::table('groups', function (Blueprint $table) {
                if (!\Schema::hasColumn('groups', 'symbol')) {
                    $table->string('symbol')->after('name');
                }
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            \Schema::table('groups', function (Blueprint $table) {
                if (\Schema::hasColumn('groups', 'symbol')) {
                    $table->dropColumn('symbol');
                }
            });
        }
    }
