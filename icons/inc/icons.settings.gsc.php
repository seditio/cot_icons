<?
/**
* [SEDBY] Icons Plugin / GSC Settings
*
* @package icons
* @author Dmitri Beliavski
* @copyright (c) 2023 seditio.by
*/

$post = '"></i>';
if ($env['location'] == 'administration') {
  $pre1 = '<i class="fa fa-';
  $pre2 = '<i class="brands fa-';
  Resources::linkFileFooter($cfg['plugins_dir'].'/icons/fa621free/css/all.min.css', 'css');
}
else {
  $pre1 = '<i class="icon icon-';
  $pre2 = '<i class="bricon icon-';
  Resources::linkFileFooter($cfg['plugins_dir'].'/icons/emperor-brands/style.css', 'css');
  Resources::linkFileFooter($cfg['plugins_dir'].'/icons/emperor-thin/style.css', 'css');
}
