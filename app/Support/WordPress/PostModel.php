<?php

namespace App\Support\WordPress;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
abstract class PostModel extends Model
{
    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';

    const STATUS_POST_PUBLISHED = 'publish';
    const STATUS_POST_DRAFT = 'draft';

    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var string
     */
    protected $postType = 'post';

    /**
     * @var array
     */
    protected $dates = ['post_date', 'post_modified'];

    /**
     * @var array
     */
    protected $hidden = [
        'post_date_gmt',
        'post_modified_gmt',
        'ping_status',
        'comment_status',
        'to_ping',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new PostTypeScope());
    }

    /**
     * @param Builder $query
     */
    public function scopePublished(Builder $query)
    {
        $query->where('post_status', static::STATUS_POST_PUBLISHED);
    }

    public function scopeFindOneByName(Builder $query, string $name)
    {
        return $query->where('post_name', $name)->first();
    }

    /**
     * @param Builder $query
     */
    public function scopeDrafts(Builder $query)
    {
        $query->where('post_status', static::STATUS_POST_DRAFT);
    }

    /**
     * @return string
     */
    public function getPostType(): string
    {
        return $this->postType;
    }
}