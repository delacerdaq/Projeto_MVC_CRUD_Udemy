<?php

class Alertas{
    public static function success($message)
    {
        echo "<div class='alert text-center alest-sucess' role='alert'
            $message
        </div>";
    }
    public static function danger($message)
    {
        echo "<div class='alert text-center alest-danger' role='alert'
            $message
        </div>";
    }
}

?>