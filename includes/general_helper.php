<?php
/**
 * Created by PhpStorm.
 * User: Kent
 * Date: 1/24/2016
 * Time: 7:18 PM
 */
jimport( 'joomla.utilities.arrayhelper' );
class General_helper
{
    const MENU_TYPE_MAIN = 'mainmenu';
    public function getMainMenu() {
        $app = JFactory::getApplication();
        $menu = $app->getMenu();
        $items   = $menu->getItems('menutype', self::MENU_TYPE_MAIN);
        return $items;
    }
}

?>