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

    

use \Illuminate\Routing\Controllers\Controller;    


class Localizeit extends Controller{
    
    /**
	 * The language provider, used for retrieving
	 * objects which implement the Language 
	 * interface.
	 *
	 * @var \Scaveit\Localizeit\Language\CopyInterface
	 */
	protected $languageProvider;
    
     //use Scaveit\Localizeit\Language\Eloquent\Copy;
    //use Scaveit\Localizeit\Language\Eloquent\Key;
    
    public function __construct(){
        $this->copyProvider = new \Scaveit\Localizeit\Language\Eloquent\Copy;
        $this->keyProvider = new \Scaveit\Localizeit\Language\Eloquent\Key;
    }
    
    
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->copyProvider->getAllCopy();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
    
    
}
?>