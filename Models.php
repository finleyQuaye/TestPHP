<?php
namespace App\Models; use Laravel\Sanctum\HasApiTokens; 
use Illuminate\Foundation\Auth\User as Authenticatable; 

					class User extends Authenticatable { use HasApiTokens, HasFactory, Notifiable; // ... } 


?>