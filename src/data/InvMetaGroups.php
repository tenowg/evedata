<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\InvMetaGroups
 *
 * @property int $metaGroupID
 * @property string|null $metaGroupName
 * @property string|null $description
 * @property int|null $iconID
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvMetaGroups whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvMetaGroups whereIconID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvMetaGroups whereMetaGroupID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvMetaGroups whereMetaGroupName($value)
 * @mixin \Eloquent
 */
class InvMetaGroups extends ReadOnly
{
    protected $table = "invmetagroups";
    protected $primaryKey = "metaGroupID";
}