<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
	die('Hacking attemp!');
}

class PluginAbcplugin extends Plugin {
	
	/**
	 * Активация плагина.
	 */
	public function Activate() {		
		/*
        if (!$this->isTableExists('prefix_tablename')) { // При активации выполняем SQL дамп, если не существует таблица tablename
			$this->ExportSQL(dirname(__FILE__).'/install.sql');
		}
		 */
		return true;
	}

    /**
     * Деактивация плагина
     */
	public function Deactivate(){
        /*
		$this->ExportSQL(dirname(__FILE__).'/deinstall.sql'); // Выполнить деактивационный sql, если надо
		 */
    }


	/**
	 * Инициализация плагина
	 */
	public function Init() {
	
	}
}
?>