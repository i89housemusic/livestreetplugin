<?php

class PluginAbcplugin_HookAbcplugin extends Hook { // Название класса означает
	
	
	public function RegisterHook() {
		
		// Регистрация событий на хуки
		
		/*
		 * Хук в начало функции AddTopic() в модуле Topic (файл /classes/modules/topic/Topic.class.php , если этот модуль не переопределен в других плагинах):
		 *
		 * $this->AddHook('module_topic_addtopic_before','func_topic_addtopic_before');
		 *
		 * Будет вызвана функция func_topic_addtopic_before($aVars) , где $aVars - массив аргументов, переданных этой функции.
		 * Передача результата в функцию AddTopic() делается путем изменения аргументов по ссылке - &$aVars[0]
		 */

		/*
		 * Хук в конец функции AddTopic() в модуле Topic (файл /classes/modules/topic/Topic.class.php , если этот модуль не переопределен в других плагинах):
		 *
		 * $this->AddHook('module_topic_addtopic_after','func_topic_addtopic_after');
		 *
		 * Будет вызвана функция func_topic_addtopic_after($Var) , где $Var - это то, что возвращает AddTopic() (т.е. или false или объект топика $oTopic)
		 * Функция должна завершаться при помощи return $Var
		 */





		
		$this->AddHook('module_topic_addtopic_after','topic_addtopic_after');
		$this->AddHook('module_topic_updatetopic_before','topic_updatetopic_before');
		$this->AddHook('module_topic_updatetopic_after','topic_updatetopic_after');
		
		$this->AddHook('template_form_add_topic_topic_end','TopicExtraFields');
		$this->AddHook('template_form_update_topic_topic_end','TopicExtraFields');
		$this->AddHook('template_form_add_topic_question_end','TopicExtraFields');
		$this->AddHook('template_form_add_topic_link_end','TopicExtraFields');
		$this->AddHook('template_form_add_topic_picturestory_end','TopicDisableCheckbox');

		$this->AddHook('init_action','func_init_action');
		$this->AddHook("check_topic_fields", "check_topic_fields");

	}
	
	
	
}
?>