<?php
/**
 * File for class TicimaxStructArrayOfAsortiMiktar
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfAsortiMiktar originally named ArrayOfAsortiMiktar
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfAsortiMiktar extends TicimaxWsdlClass
{
    /**
     * The AsortiMiktar
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructAsortiMiktar
     */
    public $AsortiMiktar;
    /**
     * Constructor method for ArrayOfAsortiMiktar
     * @see parent::__construct()
     * @param TicimaxStructAsortiMiktar $_asortiMiktar
     * @return TicimaxStructArrayOfAsortiMiktar
     */
    public function __construct($_asortiMiktar = NULL)
    {
        parent::__construct(array('AsortiMiktar'=>$_asortiMiktar),false);
    }
    /**
     * Get AsortiMiktar value
     * @return TicimaxStructAsortiMiktar|null
     */
    public function getAsortiMiktar()
    {
        return $this->AsortiMiktar;
    }
    /**
     * Set AsortiMiktar value
     * @param TicimaxStructAsortiMiktar $_asortiMiktar the AsortiMiktar
     * @return TicimaxStructAsortiMiktar
     */
    public function setAsortiMiktar($_asortiMiktar)
    {
        return ($this->AsortiMiktar = $_asortiMiktar);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructAsortiMiktar
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructAsortiMiktar
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructAsortiMiktar
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructAsortiMiktar
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructAsortiMiktar
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string AsortiMiktar
     */
    public function getAttributeName()
    {
        return 'AsortiMiktar';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfAsortiMiktar
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
