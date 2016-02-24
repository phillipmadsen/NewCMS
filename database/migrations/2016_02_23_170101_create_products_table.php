<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
      $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('name');
            $table->string('status')->nullable();
            $table->string('product_category')->nullable();
            $table->string('online_status')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('product_short_description')->nullable();
            $table->text('product_description')->nullable();
            $table->text('product_notes')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamp('available_on');
            $table->integer('upc')->nullable();
            $table->integer('guid')->nullable();
            $table->integer('asin')->nullable();
            $table->integer('mpn')->nullable();
            $table->string('model')->nullable();
            $table->string('manufacturer')->default('The Grace Company');
            $table->string('product_line')->nullable();
            $table->string('dealer')->nullable();
            $table->string('dealer_location')->nullable();
            $table->string('primary_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->string('fourth_image')->nullable();
            $table->string('fifth_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('admin_image')->nullable();
            $table->string('thumb_image')->nullable();
            $table->string('path', 255)->nullable();
            $table->string('file_name', 255)->nullable();
            $table->integer('file_size')->nullable();
            $table->string('title', 255);
            $table->string('image_type'); // raw thumb gallery banner product
            $table->string('image_alt')->nullable();
            $table->string('tax_status')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('tax_class')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('grace_price', 8, 2)->nullable();
            $table->decimal('list_price', 8, 2)->nullable();
            $table->timestamp('sale_price_dates_to');
            $table->timestamp('sale_price_dates_from');
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->string('sale_price_coupon_code')->nullable();
            $table->decimal('promo_price', 8, 2)->nullable();
            $table->decimal('msrp_price', 8, 2)->nullable();
            $table->decimal('dealer_price', 8, 2)->nullable();
            $table->decimal('employee_price', 8, 2)->nullable();
            $table->integer('quantity_available')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('number_sales')->nullable();
            $table->integer('grace_inventory')->nullable();
            $table->integer('dealer_inventory')->nullable();
            $table->integer('vendor_inventory')->nullable();
            $table->string('product_video')->nullable();
            $table->string('youtube_video')->nullable();
            $table->string('vimeo_video')->nullable();
            $table->string('product_doc')->nullable();
            $table->string('tracking')->nullable();
            $table->integer('group')->unsigned()->nullable();
            $table->string('schema_html')->nullable();
            $table->string('schema_body')->nullable();
            $table->string('schema_content')->nullable();
            $table->text('ld_json')->nullable();
            $table->text('weight')->nullable();
            $table->text('length')->nullable();
            $table->text('height')->nullable();
            $table->text('depth')->nullable();
            $table->boolean('onsale')->default('0');
            $table->boolean('ispromo')->default('0');
            $table->boolean('is_draft')->default('0');
            $table->boolean('hasShopCategories')->default('0');
            $table->boolean('hasVideos')->default('0');
            $table->boolean('hasProdDocs')->default('0');
            $table->boolean('hasReviewsTab')->default('0');
            $table->boolean('hasSocialShare')->default('0');
            $table->boolean('hasRecent')->default('0');
            $table->boolean('hasNew')->default('0');
            $table->boolean('hasLastViewed')->default('0');
            $table->boolean('hasBrandInfo')->default('0');
            $table->boolean('hasRelated')->default('0');
            $table->boolean('hasPopular')->default('0');
            $table->string('slug')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table = 'products';
        Storage::disk('local')->put($table . '_' . date('Y-m-d_H-i-s') . '.bak', json_encode(DB::table($table)->get()));
        Schema::drop('products');
    }
}
