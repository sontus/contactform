<?php

namespace Sontus\Contactform\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = ['name','email','subject','message'];
}
