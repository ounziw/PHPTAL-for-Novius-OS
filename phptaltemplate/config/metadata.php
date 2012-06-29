<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'phptaltemplate',
    'version' => '0.9-alpha',
    'provider' => array(
        'name' => 'Fumito MIZUNO',
    ),
    'launchers' => array(
    ),
    'enhancers' => array(
    ),
    'templates' => array(
        'phptaltemplate_html5' => array(
            'file' => 'phptaltemplate::html5.phptal',
            'title' => 'phptaltemplate',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        ),
    ),
);
