<?
/**
* [SEDBY] Icons Plugin / Default Settings
*
* @package icons
* @author Dmitri Beliavski
* @copyright (c) 2023 seditio.by
*/

// $pre1 = '<i class="fa fa-';
// $pre2 = '<i class="fa-brands fa-';
// $post = '"></i>';

$R['icon_cust'] = '<i class="fa {$type} fa-{$code}"></i>';

Resources::linkFileFooter($cfg['plugins_dir'].'/icons/fa640free/css/all.min.css', 'css');
Resources::linkFileFooter($cfg['plugins_dir'].'/icons/fa640free/css/brands.min.css', 'css');
