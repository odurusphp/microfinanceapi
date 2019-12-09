<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/30/2019
 * Time: 7:42 AM
 */

class Pagination
{
    public static function paginate()
    {
        $url = parse_url($_SERVER['REQUEST_URI']);
        if(isset($url['query'])) {
            parse_str($url['query'], $parameters);
            $pageparam = isset($parameters['page']) ? $parameters['page']:1;
            $pagecal = $pageparam - 1;
            $limit = isset($parameters['limit']) ? $parameters['limit'] : 20;
            $page =  $pagecal * $limit;
            return ['page'=>$page, 'limit'=>$limit];
        }else{
            return ['page'=>0, 'limit'=>20];
        }
    }
}