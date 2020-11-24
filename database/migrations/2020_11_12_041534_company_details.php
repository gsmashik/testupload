<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            
            $table->bigIncrements('id')->autoIncrement();
            // General Tab
            $table->mediumText('CompnyName',100)->comment("Company Name");
            $table->mediumText('Address',255)->comment("Address");
            $table->mediumText('InternetAddress',100)->comment("Internet Address");
            $table->mediumText('PrintingHeader',255)->comment("Printing Header");
            $table->string('Phone1',20)->comment('Telephone 1');
            $table->string('Phone2',20)->comment('Telephone 2');
            $table->string('Fax',20)->comment('Fax Number');
            $table->string('Email',100)->comment('Email');
            // Accounting  Tab
            $table->mediumText('TaxOffice',255)->comment("Tax Office");
            $table->float('TaxRate')->comment("Company Tax Rate");
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_details');
    }
}
