<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentVersions extends Model
{
    use HasFactory;

    protected $table = 'document_versions';
    
    protected $guarded = ['id'];


    /**
     * get all document version record here
     *
     * @return void
     */
    public static function getDocsVersions()
    {
        return self::latest()->get();
        // return Cache::rememberForever('docs.version.all', function(){
        //     return self::latest()->get();
        // });

    }

    /**
     * docments version store function
     *
     * @param [type] $data
     * @return void
     */
    public static function storeDocuments($data)
    {
        // dd($data);
        // Documents::updateCurrentVersion($data['version'], $data['document_id']);
        return self::create($data);
    }

    /**
     * Flush the cache
     */
    public static function flushCache()
    {
        Cache::forget('docs.version.all');
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function () {
            self::flushCache();
        });

    }
}
