<?php

class url
{
    public static function to($page_name = '', $params = array())
    {
        if($page_name)
        {
            $params['page'] = $page_name;
        }

        $query_string = http_build_query($params);

        return config::get('base_url') . ($query_string ? '?' . $query_string : '');
    }

    public static function redirect($url, $code = 302)
    {
        $url = url::to($url);

        if($code == 'refresh')
        {
            header('Refresh: 0; url='.$url);
        }
        else
        {
            $codes = array
            (
                '301' => 'Moved Permanently',
                '302' => 'Found',
                '303' => 'See Other',
                '304' => 'Not Modified',
                '305' => 'Use Proxy',
                '307' => 'Temporary Redirect'
            );

            $code = isset($codes[$code]) ? $code : '302';

            header('HTTP/1.1 '.$code.' '.$codes[$code]);
            header('Location: '.$url);
        }

        exit('<h1>'.$code.' - '.$codes[$code].'</h1><p><a href="'.$url.'">'.$url.'</a></p>');
    }
}