<?php

ob_start();

// auto class loader
spl_autoload_register(function ($class) {
    if (file_exists("classes/{$class}.php")) {
        require_once "classes/{$class}.php";
    }
});

// include config file
require_once 'config.php';

// start session
session_start();

// set error and exceptions catcher

function errorHandler($level, $message, $file, $line) {
    throw new ErrorException($message, 0, $level, $file, $line);
}

function exceptionHandler($exception) {
    if (SHOW_ERROR_DETAIL) {
        echo "<h1>An error occurred</h1>";
        echo "<p>Uncaught exception: '" . get_class($exception) . "'</p>";
        echo "<p>'" . $exception->getMessage() . "'</p>";
        echo "<p>Stack trace: <pre>" . $exception->getTraceAsString() . "</pre></p>";
        echo "<p>In file: '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
    } else {
        echo "<h1>An error occurred</h1>";
        echo "<p>Please try again later.</p>";
    }


    exit();
}

set_error_handler('errorHandler');
set_exception_handler('exceptionHandler');
