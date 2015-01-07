<?php
/**
 * Add maintenance mode
 *
 * @package    Map
 * @version    0.1
 * @author     Hinashiki
 * @license    MIT License
 * @copyright  2014 - Hinashiki
 * @link       https://github.com/hinashiki/fuelphp-map
 */
namespace Maintenance;

class MaintenanceMode
{
	/**
	 * check maintenance mode
	 *
	 * @return void
	 */
	public static function check()
	{
		if(\Config::get('maintenance.maintenance_mode') === true)
		{
			throw new \HttpServerMaintenanceException('Maintenance mode.', 503);
		}
	}
}
