yii2-mmigration
=

Helper for default migration of Yii2

# Attention

There is no functionality. It will be soon!


Install
-------

### via Composer (recommended)

`php composer.phar require mirkhamidov/yii2-mmigration '*'`


## set config

don`t forget to add to your main config file:

```php
...
'controllerMap' => [
    'migrate' => [
        'class'          => 'yii\console\controllers\MigrateController',
        'templateFile'   => '@miroff/db/views/template.php',
    ],
],
...
```



* **0.0.3** / 05.06.2015

    `new` No functionality, it will bee soon!
