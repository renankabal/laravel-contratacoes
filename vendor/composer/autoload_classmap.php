<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'CreatePasswordRemindersTable' => $baseDir . '/app/database/migrations/2015_09_07_105946_create_password_reminders_table.php',
    'CriarUsuario' => $baseDir . '/app/database/migrations/2015_09_07_105140_criar_usuario.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'HelpersController' => $baseDir . '/app/controllers/HelpersController.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'IndexController' => $baseDir . '/app/controllers/IndexController.php',
    'LoginController' => $baseDir . '/app/controllers/LoginController.php',
    'Normalizer' => $vendorDir . '/patchwork/utf8/src/Normalizer.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'Usuario' => $baseDir . '/app/models/Usuario.php',
    'UsuarioTableSeeder' => $baseDir . '/app/database/seeds/UsuarioTableSeeder.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
