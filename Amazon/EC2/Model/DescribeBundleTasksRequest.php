<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_EC2
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2008-12-01
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon EC2 PHP5 Library
 *  Generated: Wed Dec 24 22:54:04 PST 2008
 * 
 */

/**
 *  @see Amazon_EC2_Model
 */
require_once ('Amazon/EC2/Model.php');  

    

/**
 * Amazon_EC2_Model_DescribeBundleTasksRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>BundleId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeBundleTasksRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeBundleTasksRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>BundleId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'BundleId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the BundleId .
     * 
     * @return array of string BundleId
     */
    public function getBundleId() 
    {
        return $this->_fields['BundleId']['FieldValue'];
    }

    /**
     * Sets the value of the BundleId.
     * 
     * @param string or an array of string BundleId
     * @return this instance
     */
    public function setBundleId($bundleId) 
    {
        if (!$this->_isNumericArray($bundleId)) {
            $bundleId =  array ($bundleId);    
        }
        $this->_fields['BundleId']['FieldValue'] = $bundleId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of BundleId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withBundleId($bundleId1, $bundleId2)</code>
     * 
     * @param string  $stringArgs one or more BundleId
     * @return Amazon_EC2_Model_DescribeBundleTasksRequest  instance
     */
    public function withBundleId($stringArgs)
    {
        foreach (func_get_args() as $bundleId) {
            $this->_fields['BundleId']['FieldValue'][] = $bundleId;
        }
        return $this;
    }  
      

    /**
     * Checks if BundleId list is non-empty
     * 
     * @return bool true if BundleId list is non-empty
     */
    public function isSetBundleId()
    {
        return count ($this->_fields['BundleId']['FieldValue']) > 0;
    }




}