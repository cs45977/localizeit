<?php namespace Scaveit\Localizeit\Models\Eloquent;

/**
 * File Name: Copy.php
 * Path: vendor/scaveit/localizeit/src/scaveit/localizeit/Language/Eloquent
 * Date Created: 11/02/2013
 * Original Author: Christian Serna <cs45977@gmail.com>
 * Description:  
 * Elequent Model for Adding and Removing Copy
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
use Illuminate\Database\Eloquent\Model;
use Scaveit\Localizeit\Models\LangCopyInterface;
use DateTime;

class Copy extends Model implements LangCopyInterface
{

    protected $softDelete = true;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'localizeit_copy_default';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array(
    );

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = array(
    );

  

    /**
     * We are going to use diffent copy tables
     *  per lang type
     * @var type 
     */
    protected $lang;


    public function __construct()
    {
        $this->setLang();
        $this->table = 'localizeit_copy_'.$this->lang;
        parent::__construct();
    }

    /**
     * Setting the $this->lang var to set the correct tables
     * @param type $lang
     */
    public function setLang($lang = null)
    {
       // TODO: Have this look at tables Exist 
            
        if($lang){
            $this->lang = $lang;
        }
        $this->lang = 'default'; //substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

    /**
     * Returns the Copy ID.
     *
     * @return mixed
     */
    public function getId()
    {
        $this->id;
    }

     /**
	 * Returns the Copy Object By Key.
	 * @param str $key
	 * @return string
	 */
	public function getCopy($key)
    {
        return $this->where('key', '=', $key)->get();
    }


    /**
     * Returns  object of 
     * all pices of copy for a given 
     * Language or returns all default copy
     * @param string lang
     * @return lang object
     */
    public function getAllCopy()
    {
        return $this->all();
    }
    
    /**
     * Returns  object of 
     * all pices of copy 
      * Prepared for file transfer (key:value)
     * @param string lang
     * @return lang object
     */
	public function getKeyValue()
    {
        
        return $this->select(array('key', 'value','description'))->groupBy('key')->get();
    }

    /**
     * Save the copy elements
     * 
     * @param string $key
     * @param string $lang
     * @param string $copy
     * @return bool
     */
    public function saveCopy($key, $copy)
    {
        if ($record = $this->where('key', '=', $key)->firstOrFail()) {
            $record->copy = $copy;
            return $copy->save();
        } else {
            return $this->create([
                        'key' => $key,
                        'copy' => $copy,
            ]);
        }
    }

    /**
     * Delete the copy.
     *
     * @param int $copyID
     * @return bool
     */
    public function deleteCopy($copyId){
        $this->find($copyId)->delete();
    }

    

}
