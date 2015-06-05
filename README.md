yii2-mmigration
=

Helper for default migration of Yii2


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
