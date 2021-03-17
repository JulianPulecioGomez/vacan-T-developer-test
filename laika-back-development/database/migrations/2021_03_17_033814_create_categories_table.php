<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        DB::unprepared("
            CREATE PROCEDURE `GetCategories`()
            BEGIN
                SELECT * FROM categories;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE `GetCategory`(IN `category_id` INT)
            BEGIN
                SELECT * FROM categories WHERE ID = category_id;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE `StoreCategory`(IN `category_name` varchar(255))
            BEGIN
                INSERT INTO categories(name) values(category_name);
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE `UpdateCategory`(IN `category_id` INT,IN `category_name` varchar(255))
            BEGIN
                UPDATE categories SET name = `category_name`
                WHERE id = `category_id`;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE `DeleteCategory`( IN `category_id` INT)
            BEGIN
                DELETE FROM `products`
                WHERE ID = (
                    SELECT
                        ID
                    FROM
                        `products` AS p
                    WHERE
                        p.category_id = category_id
                );
                DELETE FROM `categories`
                WHERE ID = category_id;
            END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS `GetCategories`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `GetCategory`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `StoreCategory`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `UpdateCategory`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `DeleteCategory`");
        Schema::dropIfExists('categories');
    }
}
