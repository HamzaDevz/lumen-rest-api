<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

    public $table = 'Questions';

    protected $fillable = [
        "usr_id",
        "content",
    ];

    public static $rules = [
        "usr_id" => "required|integer",
        "content" => "required|string",
    ];

}
