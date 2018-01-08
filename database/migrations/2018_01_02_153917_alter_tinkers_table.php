<?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AlterTinkersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            \Schema::table('tickers', function (Blueprint $table) {
                if (!\Schema::hasColumn('tinkers', 'high')) {
                    $table->float('high', 20, 12)->after('price');
                }
                if (!\Schema::hasColumn('tinkers', 'low')) {
                    $table->float('low', 20, 12)->after('high');
                }
                if (!\Schema::hasColumn('tinkers', 'high')) {
                    $table->float('volume', 20, 12)->after('low');
                }
                $table->index('id');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            \Schema::table('tickers', function (Blueprint $table) {
                if (\Schema::hasColumn('tinkers', 'high')) {
                    $table->dropColumn('high');
                }
                if (\Schema::hasColumn('tinkers', 'low')) {
                    $table->dropColumn('low');
                }
                if (\Schema::hasColumn('tinkers', 'high')) {
                    $table->dropColumn('volume');
                }
                $table->dropIndex('tinkers_id_index');
            });
        }
    }
