<?php
/**
 * Конфиг
 */

// Переопределить имеющуюся переменную в конфиге:
// Config::Set('router.page.somepage', 'PluginAbcplugin_ActionSomepage'); // Переопределение роутера на наш новый Action - добавляем свой урл  http://domain.com/tagged

// Добавить новую переменную:
// $config['per_page'] = 15;
// Эта переменная будет доступна в плагине как Config::Get('module.topic.new_time') с ключом  $aSomeConfigVariable['plugin.abcplugin.per_page']

return $config;
