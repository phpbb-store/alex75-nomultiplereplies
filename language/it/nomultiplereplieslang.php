<?php
/** 
* 
* @package No Multiple Replies
* @copyright (c) 2016 alex75 www.phpbb-store.it
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
if (!defined('IN_PHPBB'))
{
exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'ALERT_MREP'				=> 'Attenzione',
'REPLY_MREP'				=> 'Hai già risposto a questo argomento.',
'NR_MREP'					=> 'Non sono consentite risposte consecutive.',
'NRR_MREP'					=> 'Puoi comunque editare il tuo ultimo messaggio o chiedere ad un moderatore di farlo.',
));
