<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id 
 * @property string $title 
 * @property string $icon 
 * @property int $stock 
 * @property string $created_at //时间换成 string类型吧
 * @property string $updated_at
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'Product';

    protected array $guarded = []; // 加上这一句
}
