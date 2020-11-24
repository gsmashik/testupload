<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;
    protected $fillable = ['CompnyName','Address','InternetAddress','PrintingHeader','Phone1','Phone2','Fax','Email','TaxOffice','TaxRate'];
}
