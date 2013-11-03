<?php

namespace Scaveit\Localizeit\Language\Eloquent;

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
use Scaveit\Localizeit\Language\LangKeyInterface;
use DateTime;

class Key extends Model implements LangKeyInterface
{

    protected $softDelete = true;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'copy_default';

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
     * Attributes that should be hashed.
     *
     * @var array
     */
    protected $hashableAttributes = array(
    );

    /**
     * We are going to use diffent copy tables
     *  per lang type
     * @var type 
     */
    protected $lang;


    public function __construct()
    {
        parent::__construct();
    }

   
    
    
    /**
     * Returns the  Key Id.
     * @param var id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the  Key by id.
     * @param var id
     * @return string
     */
    public function getLangKey($id)
    {
        return $this->find($id)->key;
    }

    /**
     * Returns the Copy Value (text).
     * @param string $key
     * @return string
     */
    public function getDesc($key)
    {
        return $this->where('key', '=', $key)->desc;
    }

    
    /**
     * Returns  object of 
     * all pices of copy for a given 
     * Language or returns all default copy
     * @param string lang
     * @return lang object
     */
    public function getAllKeys()
    {
        return $this->all();
    }

    /**
     * Save the copy elements
     * 
     * @param string $key
     * @param string $lang
     * @param string $copy
     * @return bool
     */
    public function saveLangKey($key, $copy)
    {
        if ($record = $this->where('key', '=', $key)->firstOrFail()) {
            $record->lang = $lang;
            $record->copy = $copy;
            return $copy->save();
        } else {
            return $this->create([
                        'key' => $key,
                        'lang' => $lang,
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
    public function deleteLangKey($keyId){
        $this->find($copyId)->delete();
    }

    

}
