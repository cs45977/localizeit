<?php namespace Scaveit\Localizeit\Language;

/**
    * File Name: localizeit.php
    * Path: vendor/scaveit/localizeit/src/scaveit/localizeit
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


interface LangCopyInterface {

	/**
	 * Returns the Copy ID.
	 *
	 * @return mixed
	 */
	public function getId();
    
    
    /**
	 * Returns the Copy Key.
	 * @param var id
	 * @return string
	 */
	public function getCopyKey($id);

	/**
	 * Returns the Copy Value (text).
	 * @param string $key
	 * @return string
	 */
	public function getCopy($key);

	
	/**
	 * Returns the Copy Lang .
	 * for a given CopyId
     * @param = $copyId
	 * @return string
	 */
	public function getLang($copyId);

    
    /**
     * Returns  object of 
     * all pices of copy for a given 
     * Language or returns all default copy
     * @param string lang
     * @return lang object
     */
     public function getAllCopy();
     
	/**
	 * Save the copy elements
     * 
	 * @param string $keyId
     * @param string $lang
     * @param string $copy
	 * @return bool
	 */
	public function saveCopy($keyId,$copy);

	/**
	 * Delete the copy.
	 *
     * @param int $copyID
	 * @return bool
	 */
	public function deleteCopy($copyId);


    

}
