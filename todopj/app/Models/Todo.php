<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
        protected $fillable = ['id', 'content'];

        public static $rules = array(
            'id' => 'requird',
            'content' => 'required'
        );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->content . ' ' ;
        return $txt;
    }
}