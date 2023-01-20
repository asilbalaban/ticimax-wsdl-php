<?php
/**
 * File for class TicimaxStructArrayOfTeknikDetayGrupDil
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfTeknikDetayGrupDil originally named ArrayOfTeknikDetayGrupDil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfTeknikDetayGrupDil extends TicimaxWsdlClass
{
    /**
     * The TeknikDetayGrupDil
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTeknikDetayGrupDil
     */
    public $TeknikDetayGrupDil;
    /**
     * Constructor method for ArrayOfTeknikDetayGrupDil
     * @see parent::__construct()
     * @param TicimaxStructTeknikDetayGrupDil $_teknikDetayGrupDil
     * @return TicimaxStructArrayOfTeknikDetayGrupDil
     */
    public function __construct($_teknikDetayGrupDil = NULL)
    {
        parent::__construct(array('TeknikDetayGrupDil'=>$_teknikDetayGrupDil),false);
    }
    /**
     * Get TeknikDetayGrupDil value
     * @return TicimaxStructTeknikDetayGrupDil|null
     */
    public function getTeknikDetayGrupDil()
    {
        return $this->TeknikDetayGrupDil;
    }
    /**
     * Set TeknikDetayGrupDil value
     * @param TicimaxStructTeknikDetayGrupDil $_teknikDetayGrupDil the TeknikDetayGrupDil
     * @return TicimaxStructTeknikDetayGrupDil
     */
    public function setTeknikDetayGrupDil($_teknikDetayGrupDil)
    {
        return ($this->TeknikDetayGrupDil = $_teknikDetayGrupDil);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructTeknikDetayGrupDil
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructTeknikDetayGrupDil
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructTeknikDetayGrupDil
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructTeknikDetayGrupDil
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructTeknikDetayGrupDil
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string TeknikDetayGrupDil
     */
    public function getAttributeName()
    {
        return 'TeknikDetayGrupDil';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfTeknikDetayGrupDil
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
