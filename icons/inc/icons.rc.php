<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
* [SEDBY] Icons Plugin / Resources Loader
*
* @package icons
* @author Dmitri Beliavski
* @copyright (c) 2023 seditio.by
*/

defined('COT_CODE') or die('Wrong URL');

$R['icon_cust'] = '<i class="fa-{$type} fa-{$code}"></i>';

// Aliases

$R['icon-search'] = cot_rc('icon_cust', array('code' => 'magnifying-glass', 'type' => 'solid'));

// New Suggestions

$R['icon-expand'] = cot_rc('icon_cust', array('code' => 'arrows-left-right-to-line', 'type' => 'solid'));

$R['icon-bookmark'] = cot_rc('icon_cust', array('code' => 'bookmark', 'type' => 'solid'));
$R['icon-calendar'] = cot_rc('icon_cust', array('code' => 'calendar', 'type' => 'solid'));
$R['icon-calendar-plus'] = cot_rc('icon_cust', array('code' => 'calendar-plus', 'type' => 'solid'));
$R['icon-chart-line'] = cot_rc('icon_cust', array('code' => 'chart-line', 'type' => 'solid'));
$R['icon-chart-pie'] = cot_rc('icon_cust', array('code' => 'chart-pie', 'type' => 'solid'));
$R['icon-clipboard-question'] = cot_rc('icon_cust', array('code' => 'clipboard-question', 'type' => 'solid'));
$R['icon-clock'] = cot_rc('icon_cust', array('code' => 'clock', 'type' => 'solid'));
$R['icon-clone'] = cot_rc('icon_cust', array('code' => 'clone', 'type' => 'solid'));
$R['icon-ellipsis'] = cot_rc('icon_cust', array('code' => 'ellipsis', 'type' => 'solid'));
$R['icon-ellipsis-vertical'] = cot_rc('icon_cust', array('code' => 'ellipsis-vertical', 'type' => 'solid'));
$R['icon-file-invoice'] = cot_rc('icon_cust', array('code' => 'file-invoice-dollar', 'type' => 'solid'));
$R['icon-folder-tree'] = cot_rc('icon_cust', array('code' => 'folder-tree', 'type' => 'solid'));
$R['icon-link'] = cot_rc('icon_cust', array('code' => 'link', 'type' => 'solid'));
$R['icon-location-crosshairs'] = cot_rc('icon_cust', array('code' => 'location-crosshairs', 'type' => 'solid'));
$R['icon-login'] = cot_rc('icon_cust', array('code' => 'right-to-bracket', 'type' => 'solid'));
$R['icon-moon'] = cot_rc('icon_cust', array('code' => 'moon', 'type' => 'solid'));
$R['icon-new-window'] = cot_rc('icon_cust', array('code' => 'arrow-up-right-from-square', 'type' => 'solid'));
$R['icon-right-left'] = cot_rc('icon_cust', array('code' => 'right-left', 'type' => 'solid'));
$R['icon-rss'] = cot_rc('icon_cust', array('code' => 'rss', 'type' => 'solid'));
$R['icon-server'] = cot_rc('icon_cust', array('code' => 'server', 'type' => 'solid'));
$R['icon-sun'] = cot_rc('icon_cust', array('code' => 'sun', 'type' => 'solid'));
$R['icon-tag'] = cot_rc('icon_cust', array('code' => 'tag', 'type' => 'solid'));
$R['icon-tags'] = cot_rc('icon_cust', array('code' => 'tags', 'type' => 'solid'));

$R['icon-backward'] = cot_rc('icon_cust', array('code' => 'backward', 'type' => 'solid'));
$R['icon-forward'] = cot_rc('icon_cust', array('code' => 'forward', 'type' => 'solid'));

// Basic Icons

$R['icon-caret-down'] = cot_rc('icon_cust', array('code' => 'caret-down', 'type' => 'solid'));
$R['icon-caret-left'] = cot_rc('icon_cust', array('code' => 'caret-left', 'type' => 'solid'));
$R['icon-caret-right'] = cot_rc('icon_cust', array('code' => 'caret-right', 'type' => 'solid'));
$R['icon-caret-up'] = cot_rc('icon_cust', array('code' => 'caret-up', 'type' => 'solid'));

$R['icon-arrow-down'] = cot_rc('icon_cust', array('code' => 'arrow-down', 'type' => 'solid'));
$R['icon-arrow-left'] = cot_rc('icon_cust', array('code' => 'arrow-left', 'type' => 'solid'));
$R['icon-arrow-right'] = cot_rc('icon_cust', array('code' => 'arrow-right', 'type' => 'solid'));
$R['icon-arrow-up'] = cot_rc('icon_cust', array('code' => 'arrow-up', 'type' => 'solid'));

$R['icon-arrows-h'] = cot_rc('icon_cust', array('code' => 'arrows-left-right-to-line', 'type' => 'solid'));
$R['icon-arrows-v'] = cot_rc('icon_cust', array('code' => 'arrows-up-down', 'type' => 'solid'));
$R['icon-arrows-hv'] = cot_rc('icon_cust', array('code' => 'arrows-up-down-left-right', 'type' => 'solid'));

$R['icon-grid-1'] = cot_rc('icon_cust', array('code' => 'square', 'type' => 'solid'));
$R['icon-grid-2'] = cot_rc('icon_cust', array('code' => 'grid-2', 'type' => 'solid'));
$R['icon-grid-3'] = cot_rc('icon_cust', array('code' => 'grid', 'type' => 'solid'));
$R['icon-grid-4'] = cot_rc('icon_cust', array('code' => 'grid-4', 'type' => 'solid'));
$R['icon-grid-5'] = cot_rc('icon_cust', array('code' => 'grid-5', 'type' => 'solid'));

$R['icon-chevron-down'] = cot_rc('icon_cust', array('code' => 'chevron-down', 'type' => 'solid'));
$R['icon-chevron-left'] = cot_rc('icon_cust', array('code' => 'chevron-left', 'type' => 'solid'));
$R['icon-chevron-right'] = cot_rc('icon_cust', array('code' => 'chevron-right', 'type' => 'solid'));
$R['icon-chevron-up'] = cot_rc('icon_cust', array('code' => 'chevron-up', 'type' => 'solid'));

$R['icon-chevrons-down'] = cot_rc('icon_cust', array('code' => 'chevrons-down', 'type' => 'solid'));
$R['icon-chevrons-left'] = cot_rc('icon_cust', array('code' => 'chevrons-left', 'type' => 'solid'));
$R['icon-chevrons-right'] = cot_rc('icon_cust', array('code' => 'chevrons-right', 'type' => 'solid'));
$R['icon-chevrons-up'] = cot_rc('icon_cust', array('code' => 'chevrons-up', 'type' => 'solid'));

$R['icon-angle-down'] = cot_rc('icon_cust', array('code' => 'angle-down', 'type' => 'solid'));
$R['icon-angle-left'] = cot_rc('icon_cust', array('code' => 'angle-left', 'type' => 'solid'));
$R['icon-angle-right'] = cot_rc('icon_cust', array('code' => 'angle-right', 'type' => 'solid'));
$R['icon-angle-up'] = cot_rc('icon_cust', array('code' => 'angle-up', 'type' => 'solid'));

$R['icon-angles-down'] = cot_rc('icon_cust', array('code' => 'angles-down', 'type' => 'solid'));
$R['icon-angles-left'] = cot_rc('icon_cust', array('code' => 'angles-left', 'type' => 'solid'));
$R['icon-angles-right'] = cot_rc('icon_cust', array('code' => 'angles-right', 'type' => 'solid'));
$R['icon-angles-up'] = cot_rc('icon_cust', array('code' => 'angles-up', 'type' => 'solid'));

$R['icon-circle-1'] = cot_rc('icon_cust', array('code' => 'circle-1', 'type' => 'solid'));
$R['icon-circle-2'] = cot_rc('icon_cust', array('code' => 'circle-2', 'type' => 'solid'));
$R['icon-circle-3'] = cot_rc('icon_cust', array('code' => 'circle-3', 'type' => 'solid'));
$R['icon-circle-4'] = cot_rc('icon_cust', array('code' => 'circle-4', 'type' => 'solid'));
$R['icon-circle-5'] = cot_rc('icon_cust', array('code' => 'circle-5', 'type' => 'solid'));
$R['icon-circle-6'] = cot_rc('icon_cust', array('code' => 'circle-6', 'type' => 'solid'));

$R['icon-square-1'] = cot_rc('icon_cust', array('code' => 'square-1', 'type' => 'solid'));
$R['icon-square-2'] = cot_rc('icon_cust', array('code' => 'square-2', 'type' => 'solid'));
$R['icon-square-3'] = cot_rc('icon_cust', array('code' => 'square-3', 'type' => 'solid'));
$R['icon-square-4'] = cot_rc('icon_cust', array('code' => 'square-4', 'type' => 'solid'));
$R['icon-square-5'] = cot_rc('icon_cust', array('code' => 'square-5', 'type' => 'solid'));
$R['icon-square-6'] = cot_rc('icon_cust', array('code' => 'square-6', 'type' => 'solid'));

$R['icon-backward'] = cot_rc('icon_cust', array('code' => 'backward', 'type' => 'solid'));
$R['icon-badge-check'] = cot_rc('icon_cust', array('code' => 'badge-check', 'type' => 'solid'));
$R['icon-badge-percent'] = cot_rc('icon_cust', array('code' => 'badge-percent', 'type' => 'solid'));
$R['icon-ban'] = cot_rc('icon_cust', array('code' => 'ban', 'type' => 'solid'));
$R['icon-bars'] = cot_rc('icon_cust', array('code' => 'bars', 'type' => 'solid'));
$R['icon-briefcase'] = cot_rc('icon_cust', array('code' => 'briefcase', 'type' => 'solid'));
$R['icon-calculator'] = cot_rc('icon_cust', array('code' => 'calculator', 'type' => 'solid'));
$R['icon-cash-register'] = cot_rc('icon_cust', array('code' => 'cash-register', 'type' => 'solid'));
$R['icon-chart-simple'] = cot_rc('icon_cust', array('code' => 'chart-simple', 'type' => 'solid'));
$R['icon-check'] = cot_rc('icon_cust', array('code' => 'check', 'type' => 'solid'));
$R['icon-check-square'] = cot_rc('icon_cust', array('code' => 'square-check', 'type' => 'solid'));
$R['icon-code'] = cot_rc('icon_cust', array('code' => 'code', 'type' => 'solid'));
$R['icon-comment'] = cot_rc('icon_cust', array('code' => 'comment', 'type' => 'solid'));
$R['icon-comments'] = cot_rc('icon_cust', array('code' => 'comments', 'type' => 'solid'));
$R['icon-construction'] = cot_rc('icon_cust', array('code' => 'trowel-bricks', 'type' => 'solid'));
$R['icon-credit-card'] = cot_rc('icon_cust', array('code' => 'credit-card', 'type' => 'solid'));
$R['icon-dashboard'] = cot_rc('icon_cust', array('code' => 'gauge', 'type' => 'solid'));
$R['icon-database'] = cot_rc('icon_cust', array('code' => 'database', 'type' => 'solid'));
$R['icon-desktop'] = cot_rc('icon_cust', array('code' => 'desktop', 'type' => 'solid'));
$R['icon-dolly'] = cot_rc('icon_cust', array('code' => 'dolly', 'type' => 'solid'));
$R['icon-door-open'] = cot_rc('icon_cust', array('code' => 'door-open', 'type' => 'solid'));
$R['icon-envelope'] = cot_rc('icon_cust', array('code' => 'envelope', 'type' => 'solid'));
$R['icon-external-link'] = cot_rc('icon_cust', array('code' => 'arrow-up-right-from-square', 'type' => 'solid'));
$R['icon-eye'] = cot_rc('icon_cust', array('code' => 'eye', 'type' => 'solid'));
$R['icon-file'] = cot_rc('icon_cust', array('code' => 'file', 'type' => 'solid'));
$R['icon-file-circle-question'] = cot_rc('icon_cust', array('code' => 'file-circle-question', 'type' => 'solid'));
$R['icon-file-code'] = cot_rc('icon_cust', array('code' => 'file-code', 'type' => 'solid'));
$R['icon-file-export'] = cot_rc('icon_cust', array('code' => 'file-export', 'type' => 'solid'));
$R['icon-file-lines'] = cot_rc('icon_cust', array('code' => 'file-lines', 'type' => 'solid'));
$R['icon-filter'] = cot_rc('icon_cust', array('code' => 'filter', 'type' => 'solid'));
$R['icon-flag-checkered'] = cot_rc('icon_cust', array('code' => 'flag-checkered', 'type' => 'solid'));
$R['icon-folder'] = cot_rc('icon_cust', array('code' => 'folder', 'type' => 'solid'));
$R['icon-folder-open'] = cot_rc('icon_cust', array('code' => 'folder-open', 'type' => 'solid'));
$R['icon-font'] = cot_rc('icon_cust', array('code' => 'font', 'type' => 'solid'));
$R['icon-gear'] = cot_rc('icon_cust', array('code' => 'gear', 'type' => 'solid'));
$R['icon-gears'] = cot_rc('icon_cust', array('code' => 'gears', 'type' => 'solid'));
$R['icon-globe'] = cot_rc('icon_cust', array('code' => 'globe', 'type' => 'solid'));
$R['icon-group'] = cot_rc('icon_cust', array('code' => 'group', 'type' => 'solid'));
$R['icon-hammer'] = cot_rc('icon_cust', array('code' => 'hammer', 'type' => 'solid'));
$R['icon-hand-point-right'] = cot_rc('icon_cust', array('code' => 'hand-point-right', 'type' => 'solid'));
$R['icon-house'] = cot_rc('icon_cust', array('code' => 'house', 'type' => 'solid'));
$R['icon-image'] = cot_rc('icon_cust', array('code' => 'image', 'type' => 'solid'));
$R['icon-key'] = cot_rc('icon_cust', array('code' => 'key', 'type' => 'solid'));
$R['icon-list'] = cot_rc('icon_cust', array('code' => 'list', 'type' => 'solid'));
$R['icon-lock'] = cot_rc('icon_cust', array('code' => 'lock', 'type' => 'solid'));
$R['icon-location-dot'] = cot_rc('icon_cust', array('code' => 'location-dot', 'type' => 'solid'));
$R['icon-magnifying-glass'] = cot_rc('icon_cust', array('code' => 'magnifying-glass', 'type' => 'solid'));
$R['icon-map-location-dot'] = cot_rc('icon_cust', array('code' => 'map-location-dot', 'type' => 'solid'));
$R['icon-money-check'] = cot_rc('icon_cust', array('code' => 'money-check', 'type' => 'solid'));
$R['icon-palette'] = cot_rc('icon_cust', array('code' => 'palette', 'type' => 'solid'));
$R['icon-person-dolly'] = cot_rc('icon_cust', array('code' => 'person-dolly', 'type' => 'solid'));
$R['icon-phone'] = cot_rc('icon_cust', array('code' => 'phone', 'type' => 'solid'));
$R['icon-pause'] = cot_rc('icon_cust', array('code' => 'pause', 'type' => 'solid'));
$R['icon-pencil'] = cot_rc('icon_cust', array('code' => 'pencil', 'type' => 'solid'));
$R['icon-play'] = cot_rc('icon_cust', array('code' => 'play', 'type' => 'solid'));
$R['icon-plug'] = cot_rc('icon_cust', array('code' => 'plug', 'type' => 'solid'));
$R['icon-plus'] = cot_rc('icon_cust', array('code' => 'plus', 'type' => 'solid'));
$R['icon-plus-circle'] = cot_rc('icon_cust', array('code' => 'plus-circle', 'type' => 'solid'));
$R['icon-question'] = cot_rc('icon_cust', array('code' => 'question', 'type' => 'solid'));
$R['icon-refresh'] = cot_rc('icon_cust', array('code' => 'arrows-rotate', 'type' => 'solid'));
$R['icon-share'] = cot_rc('icon_cust', array('code' => 'share', 'type' => 'solid'));
$R['icon-shield'] = cot_rc('icon_cust', array('code' => 'shield', 'type' => 'solid'));
$R['icon-sitemap'] = cot_rc('icon_cust', array('code' => 'sitemap', 'type' => 'solid'));
$R['icon-thumbs-up'] = cot_rc('icon_cust', array('code' => 'thumbs-up', 'type' => 'solid'));
$R['icon-train'] = cot_rc('icon_cust', array('code' => 'train', 'type' => 'solid'));
$R['icon-trash'] = cot_rc('icon_cust', array('code' => 'trash', 'type' => 'solid'));
$R['icon-unlock'] = cot_rc('icon_cust', array('code' => 'unlock', 'type' => 'solid'));
$R['icon-upload'] = cot_rc('icon_cust', array('code' => 'upload', 'type' => 'solid'));
$R['icon-user'] = cot_rc('icon_cust', array('code' => 'user', 'type' => 'solid'));
$R['icon-user-group'] = cot_rc('icon_cust', array('code' => 'user-group', 'type' => 'solid'));
$R['icon-user-plus'] = cot_rc('icon_cust', array('code' => 'user-plus', 'type' => 'solid'));
$R['icon-users'] = cot_rc('icon_cust', array('code' => 'users', 'type' => 'solid'));
$R['icon-wrench'] = cot_rc('icon_cust', array('code' => 'wrench', 'type' => 'solid'));
$R['icon-xmark'] = cot_rc('icon_cust', array('code' => 'xmark', 'type' => 'solid'));

// Brands

$R['icon-facebook'] = cot_rc('icon_cust', array('code' => 'facebook', 'type' => 'brands'));
$R['icon-github'] = cot_rc('icon_cust', array('code' => 'github', 'type' => 'brands'));
$R['icon-google'] = cot_rc('icon_cust', array('code' => 'google', 'type' => 'brands'));
$R['icon-twitter'] = cot_rc('icon_cust', array('code' => 'twitter', 'type' => 'brands'));
$R['icon-whatsapp'] = cot_rc('icon_cust', array('code' => 'whatsapp', 'type' => 'brands'));
$R['icon-telegram'] = cot_rc('icon_cust', array('code' => 'telegram', 'type' => 'brands'));
$R['icon-viber'] = cot_rc('icon_cust', array('code' => 'viber', 'type' => 'brands'));
$R['icon-vk'] = cot_rc('icon_cust', array('code' => 'vk', 'type' => 'brands'));
$R['icon-yandex'] = cot_rc('icon_cust', array('code' => 'yandex', 'type' => 'brands'));

$R['icon-instagram'] = cot_rc('icon_cust', array('code' => 'instagram', 'type' => 'brands'));
$R['icon-instagram-square'] = cot_rc('icon_cust', array('code' => 'instagram-square', 'type' => 'brands'));
$R['icon-pinterest'] = cot_rc('icon_cust', array('code' => 'pinterest', 'type' => 'brands'));
$R['icon-linkedin'] = cot_rc('icon_cust', array('code' => 'linkedin', 'type' => 'brands'));
