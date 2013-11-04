<?php namespace Scaveit\Localizeit\Models;

/**
    * File Name: KyInterface.php
    * Path: vendor/scaveit/localizeit/src/scaveit/localizeit/Language
    * Date Created: 11/02/2013
    * Original Author: Christian Serna <cs45977@gmail.com>
    * Description:  
    * Main Src File for the Scaveit Localization API
    * 
    * Significant Changes (please indicate date and who made change):
    * 
    *   Licensed: 
    *   The MIT License (MIT)
    *   Copyright (c) 2013 Christian Serna
    * 
    * @package    localizeit
    * @version    0.0.1
    * @author     Scaveit LLC
    * @license    The MIT License
    * @copyright  (c) 2013 - 2014, Scaveit LLC
    * @link       http://Scaveit.com   
    */


interface LangKeyInterface {

	/**
	 * Returns the Copy ID.
	 *
	 * @return mixed
	 */
	public function getId();
    
    
    /**
	 * Returns the Copy Description.
	 *
     * @param string $key
	 * @return string
	 */
	public function getDesc($key);

    

    /**
	 * Save the key elements
     * 
	 * @param string $key
     * @param string $desc
     * @param string $copy
	 * @return bool
	 */
	public function saveLangKey($key,$desc);

	/**
	 * Delete the Key.
	 *
     * @param int $keyId
	 * @return bool
	 */
	public function deleteLangKey($keyId);
    
    
    

}
