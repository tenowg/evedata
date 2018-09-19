<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\InvGroups
 *
 * @property int $groupID
 * @property int|null $categoryID
 * @property string|null $groupName
 * @property int|null $iconID
 * @property int|null $useBasePrice
 * @property int|null $anchored
 * @property int|null $anchorable
 * @property int|null $fittableNonSingleton
 * @property int|null $published
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereAnchorable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereAnchored($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereCategoryID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereFittableNonSingleton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereGroupID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereIconID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvGroups whereUseBasePrice($value)
 * @mixin \Eloquent
 */
class InvGroups extends ReadOnly
{
    protected $table = "invGroups";
    protected $primaryKey = "groupID";
}
