<?php

require __DIR__ . '/SingletonExample.php';

/**
 * The client code.
 */
function clientCode()
{
    $s1 = SingletonExample::getInstance();
    $s2 = SingletonExample::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

clientCode();