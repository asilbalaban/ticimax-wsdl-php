<?php
/**
 * File for class TicimaxStructArrayOfTeknikDetayGrup
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfTeknikDetayGrup originally named ArrayOfTeknikDetayGrup
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfTeknikDetayGrup extends TicimaxWsdlClass
{
    /**
     * The TeknikDetayGrup
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTeknikDetayGrup
     */
    public $TeknikDetayGrup;
    /**
     * Constructor method for ArrayOfTeknikDetayGrup
     * @see parent::__construct()
     * @param TicimaxStructTeknikDetayGrup $_teknikDetayGrup
     * @return TicimaxStructArrayOfTeknikDetayGrup
     */
    public function __construct($_teknikDetayGrup = NULL)
    {
        parent::__construct(array('TeknikDetayGrup'=>$_teknikDetayGrup),false);
    }
    /**
     * Get TeknikDetayGrup value
     * @return TicimaxStructTeknikDetayGrup|null
     */
    public function getTeknikDetayGrup()
    {
        return $this->TeknikDetayGrup;
    }
    /**
     * Set TeknikDetayGrup value
     * @param TicimaxStructTeknikDetayGrup $_teknikDetayGrup the TeknikDetayGrup
     * @return TicimaxStructTeknikDetayGrup
     */
    public function setTeknikDetayGrup($_teknikDetayGrup)
    {
        return ($this->TeknikDetayGrup = $_teknikDetayGrup);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructTeknikDetayGrup
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructTeknikDetayGrup
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructTeknikDetayGrup
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructTeknikDetayGrup
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructTeknikDetayGrup
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string TeknikDetayGrup
     */
    public function getAttributeName()
    {
        return 'TeknikDetayGrup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfTeknikDetayGrup
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
