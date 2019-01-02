<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/2/19
 * Time: 7:34 PM
 */

namespace Xtra\Core\Modular;


class MenuContext
{
    private $menu_list;

    /**
     * MenuContext constructor.
     */
    public function __construct()
    {
        // Initialize an empty array
        $this->menu_list = [];
    }

    /**
     * Adding menu to menu context
     * @param $parent by default there are "top-menu", "user-menu"
     * @param $menu_id
     * @param $menu_name
     * @param $order_by
     * @param array $permissions
     */
    public function add( $parent, $menu_id, $menu_name, $order_by, array $permissions ) {

    }
}