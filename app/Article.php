<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // published_at で日付ミューテーターを使う
    protected $dates = ['published_at'];
    
    //
    public function getTitleAttribute($value)
    {
        // 大文字に変換
        return mb_strtoupper($value);
    }
    
    public function setTitleAttribute($value)
    {
        // 小文字に変換
        $this->attributes['title'] = mb_strtolower($value);
    }
    
}
