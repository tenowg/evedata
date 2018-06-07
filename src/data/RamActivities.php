<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\RamActivities
 *
 * @property int $activityID
 * @property string|null $activityName
 * @property string|null $iconNo
 * @property string|null $description
 * @property int|null $published
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\RamActivities whereActivityID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\RamActivities whereActivityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\RamActivities whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\RamActivities whereIconNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\RamActivities wherePublished($value)
 * @mixin \Eloquent
 */
class RamActivities extends ReadOnly
{
    protected $table = "ramactivities";
    protected $primaryKey = "activityID";
}
