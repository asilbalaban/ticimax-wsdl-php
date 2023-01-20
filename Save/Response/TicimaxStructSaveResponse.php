<?php
/**
 * File for class TicimaxStructSaveResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveResponse originally named SaveResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveResponse extends TicimaxStructWebServisResponse
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ItemId;
    /**
     * Constructor method for SaveResponse
     * @see parent::__construct()
     * @param int $_itemId
     * @return TicimaxStructSaveResponse
     */
    public function __construct($_itemId = NULL)
    {
        TicimaxWsdlClass::__construct(array('ItemId'=>$_itemId),false);
    }
    /**
     * Get ItemId value
     * @return int|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param int $_itemId the ItemId
     * @return int
     */
    public function setItemId($_itemId)
    {
        return ($this->ItemId = $_itemId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveResponse
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
