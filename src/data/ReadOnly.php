<?php

namespace EveData;

use Illuminate\Database\Eloquent\Model;

class ReadOnly extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function __construct() {
        $this->connection = config('evedata.database');
    }
    /**
     * Don't save the model to the database.
     *
     * @param  array  $options
     * @return bool
     */
    public function save(array $options = array())
    {
        return false;
    }
    /**
     * Don't update the model in the database.
     *
     * @param  array  $attributes
     * @param  array  $options
     * @return bool
     */
    public function update(array $attributes = array(), array $options = array())
    {
        return false;
    }
  
    /**
     * Don't delete the model from the database.
     *
     * @return bool
     */
    public function delete()
    {
        return false;
    }
  
    /**
     * Don't destroy the models for the given IDs.
     *
     * @param  array|int  $ids
     * @return int
     */
    public static function destroy($ids)
    {
        return 0;
    }
}