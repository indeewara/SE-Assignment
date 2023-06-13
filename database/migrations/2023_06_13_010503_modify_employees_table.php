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
        Schema::table('employees', function (Blueprint $table) {
            $table->string('last_name')->nullable()->after('name');
            $table->string('email')->nullable()->after('nic');
            $table->unsignedBigInteger('company_id')->nullable()->after('image_url');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null');
        });
    
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
};
