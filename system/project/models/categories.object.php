<?php

class Category_Object
{
    public function getUrl()
    {
        return url::to('category', array(
            'id' => $this->id
        ));
    }

}