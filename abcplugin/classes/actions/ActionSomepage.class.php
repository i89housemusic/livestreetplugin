<?php
/*
 * Пример нового экшна. Задаем новые страницы (не забудьте сконфигурировать роутинг в config.php плагина)
 *
 */

class PluginAbcplugin_ActionSomepage extends ActionPlugin {

	/**
	 * Инизиализация экшена
	 *
	 */
	public function Init() {
	}

	/**
	 * Регистрируем евенты, по сути определяем УРЛы вида /somepage/.../
	 *
	 */
	protected function RegisterEvent() {
		//$this->AddEvent('add','EventAdd'); // урл /somepage/add
	    //$this->AddEvent('edit','EventEdit'); // урл /somepage/edit
	}



}
?>
