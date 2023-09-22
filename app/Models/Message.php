<?php
namespace App\Mail;
namespace App\Models;
use App\Mail\ContactConfirmation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name','email', 'subject', 'message'];
}
