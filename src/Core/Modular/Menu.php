<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/2/19
 * Time: 7:35 PM
 */

namespace Xtra\Core\Modular;


interface Menu
{
    /**
     * Menu unique ID
     * @return mixed
     */
    public function getId();

    /**
     * Menu readable name
     * @return mixed
     */
    public function getName();

    /**
     * Add child menu
     * @param $menu_id menu unique ID
     * @param $menu_name menu display name
     * @param $order_by order by, optional default is 0
     * @param array $permissions array of permissions for example ['permission1','permission2']
     * @return mixed
     */
    public function add( $menu_id, $menu_name, $order_by, array $permissions );

}