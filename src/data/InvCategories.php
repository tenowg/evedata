<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\InvCategories
 *
 * @property int $categoryID
 * @property string|null $categoryName
 * @property int|null $iconID
 * @property int|null $published
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvCategories whereCategoryID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvCategories whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvCategories whereIconID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvCategories wherePublished($value)
 * @mixin \Eloquent
 */
class InvCategories extends ReadOnly
{
    protected $table = "invCategories";
    protected $primaryKey = "categoryID";
}
