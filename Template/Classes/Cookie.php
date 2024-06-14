<?php

final class Cookie {
    public static function set($name, $value, $expiry) {
        setcookie($name, $value, $expiry, '/');
    }

    public static function get($name, $default = null) {
        return $_COOKIE[$name] ?? $default;
    }

    public static function delete($name) {
        if (isset($_COOKIE[$name])) {
            unset($_COOKIE[$name]);
            setcookie($name, null, -1, '/');
        }
    }
}
?>
