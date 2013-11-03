<?php namespace Scaveit\Localizeit;

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

    


class Localizeit {
    
    /**
	 * The language provider, used for retrieving
	 * objects which implement the Language 
	 * interface.
	 *
	 * @var \Scaveit\Localizeit\Language\CopyInterface
	 */
	protected $languageProvider;
    
    public function __construct(){
    }        
    
}
?>