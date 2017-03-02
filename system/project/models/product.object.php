<?php

class Product_Object
{
    public function getUrl()
    {
        return url::to('product', array(
            'id' => $this->id
        ));
    }

}