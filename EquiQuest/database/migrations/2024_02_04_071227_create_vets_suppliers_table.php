<?php

// database/migrations/timestamp_create_vets_suppliers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVetsSuppliersTable extends Migration
{
    public function up()
    {
        Schema::create('vets_suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->date('next_visit_date')->nullable();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vets_suppliers');
    }
}
