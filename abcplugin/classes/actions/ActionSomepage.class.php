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
        $this->SetDefaultEvent('index'); // ПРи ображении к domain.com/somepage будет вызываться EventIndex()
	}

	/**
	 * Регистрируем евенты, по сути определяем УРЛы вида /somepage/.../
	 *
	 */
	protected function RegisterEvent() {
		$this->AddEvent('index','EventIndex');
        //$this->AddEvent('add','EventAdd'); // урл /somepage/add  - вызывается EventAdd()
	    //$this->AddEvent('edit','EventEdit'); // урл /somepage/edit - вызывается EventEdit()
	}

    protected function EventIndex() {

    }





    /**
     * Shutdown Function
     */
     public function EventShutdown() {
     }
}
?>
