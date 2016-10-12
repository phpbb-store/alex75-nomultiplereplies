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
'ALERT_MREP'				=> 'Alert',
'REPLY_MREP'				=> 'You have already responded to this argument.',
'NR_MREP'					=> 'They are not allowed consecutive answers.',
'NRR_MREP'					=> 'You can edit your last message or ask a moderator to do so.',
));
