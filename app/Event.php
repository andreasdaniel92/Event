<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
 
class Event extends Model
{
	use SoftDeletes;
 
    	protected $table = "event";
        protected $fillable = ['nama_event'];
        protected $dates = ['tanggal_event'];
   	protected $datess = ['deleted_at'];
}