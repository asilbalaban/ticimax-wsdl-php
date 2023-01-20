<?php
/**
 * File for class TicimaxStructArrayOfAsortiGrup
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfAsortiGrup originally named ArrayOfAsortiGrup
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfAsortiGrup extends TicimaxWsdlClass
{
    /**
     * The AsortiGrup
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructAsortiGrup
     */
    public $AsortiGrup;
    /**
     * Constructor method for ArrayOfAsortiGrup
     * @see parent::__construct()
     * @param TicimaxStructAsortiGrup $_asortiGrup
     * @return TicimaxStructArrayOfAsortiGrup
     */
    public function __construct($_asortiGrup = NULL)
    {
        parent::__construct(array('AsortiGrup'=>$_asortiGrup),false);
    }
    /**
     * Get AsortiGrup value
     * @return TicimaxStructAsortiGrup|null
     */
    public function getAsortiGrup()
    {
        return $this->AsortiGrup;
    }
    /**
     * Set AsortiGrup value
     * @param TicimaxStructAsortiGrup $_asortiGrup the AsortiGrup
     * @return TicimaxStructAsortiGrup
     */
    public function setAsortiGrup($_asortiGrup)
    {
        return ($this->AsortiGrup = $_asortiGrup);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructAsortiGrup
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructAsortiGrup
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructAsortiGrup
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructAsortiGrup
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructAsortiGrup
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string AsortiGrup
     */
    public function getAttributeName()
    {
        return 'AsortiGrup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfAsortiGrup
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
