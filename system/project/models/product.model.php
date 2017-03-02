<?php



class Product_Model extends model
{
    protected static $object_class = 'Product_Object';

   public static function getProducts()
    {
        // write query
        $query = "
            SELECT *
            FROM `product`
            WHERE 1
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    /*
    //I AM TRYING TO BUILD AN INSERT QUERY HERE TO CREATE NEW TASKS.
    public static function createProduct($task_name, $task_description)
    {
        // write query
        $query = "
            INSERT INTO `tasks` (task_name, task_description)
            VALUES (?, ?)
        ";

        db::query($query,[$task_name, $task_description]);
        
    }
    */

   
}