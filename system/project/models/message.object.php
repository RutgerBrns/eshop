<?php

class Message_Object
{
    public function getUrl()
    {
        return url::to('message', array(
            'id' => $this->id
        ));
    }

}