<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
	die('Hacking attemp!');
}

class PluginAbcplugin extends Plugin {
	
	// Активация плагина
	public function Activate() {
		/*
        if (!$this->isTableExists('prefix_tablename')) { 
			$this->ExportSQL(dirname(__FILE__).'/install.sql'); // Если нам надо изменить БД, делаем это здесь
		}
		 */
		return true;
	}
    
	// Деактивация плагина
	public function Deactivate(){
        /*
		$this->ExportSQL(dirname(__FILE__).'/deinstall.sql'); // Выполнить деактивационный sql, если надо
		 */
    }


	// Инициализация плагина
	public function Init() {
	
	}
}
?>