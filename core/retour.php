<?php

class Retour
{
    public function requistRetour()
    {
        $adress = isset($_GET['rule']) ? $_GET['rule'] : '/';

        $part = explode('/', trim($adress, '/'));


        $controlleur = !empty($part[0]) ? ucfirst($part[0]) . 'Controlleur' : 'HomeControlleur';

        $action = !empty($part[1]) ? $part[1] : 'index';

        $controlleurFile = 'controlleurs/' . $controlleur . '.php';

        if (file_exists($controlleurFile)) {
            require_once $controlleurFile;
            if (class_exists($controlleur)) {
                $instance = new $controlleur();
                if (method_exists($instance, $action)) {
                    $param = array_slice($part, 2);
                    $refliction = new ReflectionMethod($instance, $action);
                    $ref = $refliction->getParameters();
                    if (count($ref) > 0) {
                        if (count($param) >= count($ref)) {
                            call_user_func_array([$instance, $action], $param);
                        } else {
                            echo "Not enough parameters!";
                        }
                    } else {
                        $instance->$action();
                    }
                } else {
                    echo "Action method not found!";
                }
            } else {
                echo "Controlleur class not found!";
            }
        } else {
            echo "Controlleur file not found!";
        }
    }
}
