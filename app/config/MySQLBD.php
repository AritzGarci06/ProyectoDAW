<?php

class MySQLBD
{
    private static function connect()
    {
        static $conexion = null;
        $config = parse_ini_file(ROUTE_APP.'/resources/config.ini');
        if (!$conexion) {
            $conexion = new mysqli($config["host"], $config["user"], $config["pass"], $config["bd"]);
        }
        return $conexion;
    }

    public static function queryRead($query, ...$args)
    {
        $conexion = self::connect();
        $arr = array();
        $preparada = self::prepareQuery($conexion, $query, $args);
        $preparada->execute();
        $result = $preparada->get_result();
        while ($record = $result->fetch_assoc()) {
            array_push($arr, $record);
        }
        return $arr;
    }

    public static function queryWrite($consulta, ...$parametros)
    {
        $conexion = self::connect();
        $query = self::prepareQuery($conexion, $consulta, $parametros);
        $query->execute();
    }

    private static function prepareQuery($conexion, $consulta, $args)
    {
        $query = $conexion->prepare($consulta);
        if ($args) {
            $tipos = "";
            foreach ($args as $value) {
                $tipos .= is_integer($value) ? "i" : "s";
            }
            $query->bind_param($tipos, ...$args);
        }
        return $query;
    }

}

?>