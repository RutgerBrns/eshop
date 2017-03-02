<?php 

class Users_Model extends model
{
    protected static $object_class = 'User_Object';

   public static function getUsers()
    {
        // write query
        $query = "
            SELECT *
            FROM `users`
            WHERE 1
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

     public static function getUserByEmail($user_email)
    {
        // write query
        $query = "
            SELECT *
            FROM `users`
            WHERE `user_email` = ?
        ";
        // run query and get result set
        $resultset = db::query($query, [$user_email]);
        
        // retrieve all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }

     //I AM TRYING TO BUILD AN INSERT QUERY HERE TO CREATE NEW TASKS.
    public static function createUser($user_email, $user_name, $user_password)
    {
        // write query
        $query = "
            INSERT INTO `users` (user_email, user_name, user_password)
            VALUES (?, ?, ?)
        ";

        //let op dat de gegevens dienen te worden aangeleverd in een array vorm [variabelen]
        db::query($query, [$user_email, $user_name, $user_password]);      

    }
}