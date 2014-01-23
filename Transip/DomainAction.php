<?php

/**
 * This class models a DomainAction, which holds information
 * about the action being run.
 *
 * @package Transip
 * @class DomainAction
 * @author TransIP (support@transip.nl)
 * @version 20140114 01:03
 */
class Transip_DomainAction
{
	/**
	 * The name of this DomainAction.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * If this action has failed, this field will be true.
	 *
	 * @var boolean
	 */
	public $hasFailed;

	/**
	 * If this action has failed, this field will contain an descriptive message.
	 *
	 * @var string
	 */
	public $message;
}

?>
