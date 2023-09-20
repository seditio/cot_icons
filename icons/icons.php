<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
* [SEDBY] Icons Plugin
*
* @package icons
* @author Dmitri Beliavski
* @copyright (c) 2023 seditio.by
*/

defined('COT_CODE') or die('Wrong URL');

// require_once cot_incfile('icons', 'plug', 'settings.default');
// require_once cot_incfile('icons', 'plug', 'rc');

if ($env['ext'] == 'admin' && !empty(Cot::$cfg['plugin']['icons']['back'])) {
  Resources::linkFileFooter(Cot::$cfg['plugins_dir'].'/icons/' . Cot::$cfg['plugin']['icons']['back'].'/css/all.css', 'css');
  require_once cot_incfile('icons', 'plug', 'rc');
}
elseif (!empty(Cot::$cfg['plugin']['icons']['front'])) {
  Resources::linkFileFooter(Cot::$cfg['plugins_dir'].'/icons/' . Cot::$cfg['plugin']['icons']['back'].'/css/all.css', 'css');
  require_once cot_incfile('icons', 'plug', 'rc');
}
