<?php



class Message_Model extends model
{
    protected static $object_class = 'Message_Object';

   public static function getMessages()
    {
        // write query
        $query = "
            SELECT *
            FROM `messages`
            WHERE 1
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    //I AM TRYING TO BUILD AN INSERT QUERY HERE TO CREATE NEW TASKS.
    public static function createMessage($message_email, $message_name, $message_description)
    {
        // write query
        $query = "
            INSERT INTO `messages` (message_email, message_name, message_description)
            VALUES (?, ?, ?)
        ";

        //let op dat de gegevens dienen te worden aangeleverd in een array vorm [variabelen]
        db::query($query, [$message_email, $message_name, $message_description]);        
    }

   
}