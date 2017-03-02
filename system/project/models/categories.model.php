<?php


class Category_Model extends model
{
    protected static $object_class = 'Category_Object';

   public static function getCategories()
    {
        // write query
        $query = "
            SELECT *
            FROM `category`
            WHERE 1
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

}