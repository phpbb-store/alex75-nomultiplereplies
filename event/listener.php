<?php
/**
*
* @package no multiple replies
* @copyright (c) 2016 alex75 www.phpbb-store.it
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace alex75\nomultiplereplies\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'						=> 'load_language_on_setup',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'alex75/nomultiplereplies',
			'lang_set' => 'nomultiplereplieslang',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
