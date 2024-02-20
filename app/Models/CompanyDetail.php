<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "company_definition",
        "description",
        "employee_number",
        "items_number",
        "partners_number",
        "clients_number",
        "copyright"
    ];
}
