<?php
/**
 * Конфиг
 */

// Переопределить имеющуюся переменную в конфиге:
// Config::Set('router.page.somepage', 'PluginAbcplugin_ActionSomepage'); // Переопределение роутера на наш новый Action - добавляем свой урл  http://domain.com/somepage

// Добавить новую переменную:
// $config['per_page'] = 15;
// Эта переменная будет доступна в плагине как Config::Get('plugin.abcplugin.per_page')

return $config;
