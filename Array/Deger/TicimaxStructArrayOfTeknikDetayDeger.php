<?php
/**
 * File for class TicimaxStructArrayOfTeknikDetayDeger
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfTeknikDetayDeger originally named ArrayOfTeknikDetayDeger
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfTeknikDetayDeger extends TicimaxWsdlClass
{
    /**
     * The TeknikDetayDeger
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTeknikDetayDeger
     */
    public $TeknikDetayDeger;
    /**
     * Constructor method for ArrayOfTeknikDetayDeger
     * @see parent::__construct()
     * @param TicimaxStructTeknikDetayDeger $_teknikDetayDeger
     * @return TicimaxStructArrayOfTeknikDetayDeger
     */
    public function __construct($_teknikDetayDeger = NULL)
    {
        parent::__construct(array('TeknikDetayDeger'=>$_teknikDetayDeger),false);
    }
    /**
     * Get TeknikDetayDeger value
     * @return TicimaxStructTeknikDetayDeger|null
     */
    public function getTeknikDetayDeger()
    {
        return $this->TeknikDetayDeger;
    }
    /**
     * Set TeknikDetayDeger value
     * @param TicimaxStructTeknikDetayDeger $_teknikDetayDeger the TeknikDetayDeger
     * @return TicimaxStructTeknikDetayDeger
     */
    public function setTeknikDetayDeger($_teknikDetayDeger)
    {
        return ($this->TeknikDetayDeger = $_teknikDetayDeger);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructTeknikDetayDeger
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructTeknikDetayDeger
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructTeknikDetayDeger
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructTeknikDetayDeger
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructTeknikDetayDeger
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string TeknikDetayDeger
     */
    public function getAttributeName()
    {
        return 'TeknikDetayDeger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfTeknikDetayDeger
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
