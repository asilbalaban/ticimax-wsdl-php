<?php
/**
 * File for class TicimaxStructDeleteMarkaResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructDeleteMarkaResponse originally named DeleteMarkaResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructDeleteMarkaResponse extends TicimaxWsdlClass
{
    /**
     * The DeleteMarkaResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebServisResponse
     */
    public $DeleteMarkaResult;
    /**
     * Constructor method for DeleteMarkaResponse
     * @see parent::__construct()
     * @param TicimaxStructWebServisResponse $_deleteMarkaResult
     * @return TicimaxStructDeleteMarkaResponse
     */
    public function __construct($_deleteMarkaResult = NULL)
    {
        parent::__construct(array('DeleteMarkaResult'=>$_deleteMarkaResult),false);
    }
    /**
     * Get DeleteMarkaResult value
     * @return TicimaxStructWebServisResponse|null
     */
    public function getDeleteMarkaResult()
    {
        return $this->DeleteMarkaResult;
    }
    /**
     * Set DeleteMarkaResult value
     * @param TicimaxStructWebServisResponse $_deleteMarkaResult the DeleteMarkaResult
     * @return TicimaxStructWebServisResponse
     */
    public function setDeleteMarkaResult($_deleteMarkaResult)
    {
        return ($this->DeleteMarkaResult = $_deleteMarkaResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructDeleteMarkaResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
