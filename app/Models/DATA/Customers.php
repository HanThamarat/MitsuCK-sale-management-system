<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'Customers';
    protected $fillable = ['PrefixName', 'FirstName','MiddleName','LastName','IDNumber','NewCardDate','ExpireCard','Brideday','Gender',	'Nationality',	'religion',	'LineID',	'FacebookName',	'RelationST',	'FirstNameofRelation',	'LastNameofRelation',	'PhoneofRelation',	'Note',	'Address',	'PostAddress',	'Mobilephone1',	'Mobilephone2'];
}
