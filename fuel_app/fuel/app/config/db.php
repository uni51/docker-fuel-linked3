<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Global database settings
 * -----------------------------------------------------------------------------
 *
 *  Set database configurations here to override environment specific
 *  configurations
 *
 */

return array(
    'active' => 'default',

    /**
     * Base config, just need to set the DSN, username and password in env. config.
     */
    'default' => array(
        'type'        => 'mysql',
        'connection'  => array(
            'hostname' => 'localhost',
            'database' => 'fuel_db',
            'username' => 'root',
            'password' => 'root',
            'persistent' => false,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'enable_cache' => false,
        'profiling'    => false,
    ),
);
