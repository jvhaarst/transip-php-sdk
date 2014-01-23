<?php

/**
 * This class models an Operating System
 *
 * @package Transip
 * @class OperatingSystem
 * @author TransIP (support@transip.nl)
 * @version 20140114 01:03
 */
class Transip_OperatingSystem
{
	/**
	 * The operating system name
	 *
	 * @var string
	 */
	public $name = '';

	/**
	 * Description
	 *
	 * @var string
	 */
	public $description = '';

	/**
	 * The snapshot creation date
	 *
	 * @var string
	 */
	public $dateTimeCreate = '';

	/**
	 * Is a preinstallable image
	 *
	 * @var boolean
	 */
	public $isPreinstallableImage = false;
}

?>
