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

    public static function addProduct($product_name, $product_description, $product_price, $unit_qty, $amount_in_stock, $is_top)
    {

        // write query
        $query = "
            INSERT INTO `product` ('name, description, price, unit_qty, amount_in_stock, is_top') 
            VALUES (?, ?, ?, ?, ?, ?)
        ";

        //let op dat de gegevens dienen te worden aangeleverd in een array vorm [variabelen]
        db::query($query, [$product_name, $product_description, $product_price, $unit_qty, $amount_in_stock, $is_top]);        
    
    }

   
}