<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documents extends Model
{
    use HasFactory;

    protected $table = 'documents';

    protected $guarded = ['id'];

    /**
     * get all documents data
     */
    public static function getAllDocs()
    {
        return self::latest()->get();
        // return Cache::rememberForever('docs.all', function(){
        //     return self::latest()->get();
        // });
        
    }

    /**
     * store docs data
     *
     * @param [type] $data
     * @return void
     */
    public static function storeData($data)
    {
        return self::create($data);
    }

    /**
     * 
     */
    public static function updateData($data,$id)
    {
        // dd($data);
        return self::where('id', $id)->update($data);
    }

    /**
     * Documents Current version updated
     *
     * @return void
     */
    public static function updateCurrentVersion($version, $id)
    {
        return self::updateOrCreate(
            [ 'id' => $id ],
            [ 'current_version' => $version ]
        );
    }

    /**
     * Flush the cache
     */
    public static function flushCache()
    {
        Cache::forget('docs.all');
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // static::updated(function () {
        //     self::flushCache();
        // });

        static::created(function () {
            self::flushCache();
        });

        // static::deleted(function () {
        //     self::flushCache();
        // });
    }

}
