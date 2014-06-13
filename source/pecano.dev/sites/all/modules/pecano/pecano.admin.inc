<?php

function pecano_contactos_admin_settings()
{
	$form['contactos'] = array(
		'#type' => 'fieldset',
		'#title' => t('Configuracion de direcciones de email.'),
	);
	return system_settings_form($form);
}