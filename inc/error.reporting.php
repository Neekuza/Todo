    <?php
    // <<php error joseph lentor>>
   // \php_error\reportErrors();
     

    // <<whoops>>
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();