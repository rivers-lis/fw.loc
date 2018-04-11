<?php


class Router {

    /**
     * таблица маршрута
     * @var array
     */

    protected static $routes = [];

    /**
     * текущий маршрут
     * @var array
     */

    protected static $route = [];

    /**
     * добавляет маршрут в таблицу маршрутов
     *
     * @param string $regexp регулярное вырожение маршрута
     * @param array $route маршрут ([controller, action, params])
     */

    public static function add($regexp , $route = []) {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes() {
        return self::$routes;
    }

    public static function getRoute() {
        return self::$route;
    }

    /**
     * ищет URL в таблице маршрутов
     * @param string $url входящий URL
     * @return bool
     */

    public static function matchRoute($url) {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                debug($matches);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url) {
        if (self::matchRoute($url)) {
            echo 'OK';
        }else{
            http_response_code(404);
            include '404.html';
        }
    }

}