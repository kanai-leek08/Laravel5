<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

	public $table = "members";

	public $primaryKey = "id";

	public $timestamps = true;

	public $fillable = [
	    "name",
		"age",
		"gender",
		"skill",
		"detail"
	];

	public static $rules = [
	    "name" => "required",
		"age" => "required|numeric|max:100",
		"gender" => "required|in:male,falmale",
		"skill" => "required|regex:/[a-z]{20}/"
	];

}
