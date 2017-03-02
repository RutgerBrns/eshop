<?php

class User_Object
{
    public function getUrl()
    {
        return url::to('user', array(
            'id' => $this->id
        ));
    }

}