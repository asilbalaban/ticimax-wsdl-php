<?php
/**
 * File for class TicimaxStructArrayOfTeknikDetayOzellikDil
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfTeknikDetayOzellikDil originally named ArrayOfTeknikDetayOzellikDil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfTeknikDetayOzellikDil extends TicimaxWsdlClass
{
    /**
     * The TeknikDetayOzellikDil
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTeknikDetayOzellikDil
     */
    public $TeknikDetayOzellikDil;
    /**
     * Constructor method for ArrayOfTeknikDetayOzellikDil
     * @see parent::__construct()
     * @param TicimaxStructTeknikDetayOzellikDil $_teknikDetayOzellikDil
     * @return TicimaxStructArrayOfTeknikDetayOzellikDil
     */
    public function __construct($_teknikDetayOzellikDil = NULL)
    {
        parent::__construct(array('TeknikDetayOzellikDil'=>$_teknikDetayOzellikDil),false);
    }
    /**
     * Get TeknikDetayOzellikDil value
     * @return TicimaxStructTeknikDetayOzellikDil|null
     */
    public function getTeknikDetayOzellikDil()
    {
        return $this->TeknikDetayOzellikDil;
    }
    /**
     * Set TeknikDetayOzellikDil value
     * @param TicimaxStructTeknikDetayOzellikDil $_teknikDetayOzellikDil the TeknikDetayOzellikDil
     * @return TicimaxStructTeknikDetayOzellikDil
     */
    public function setTeknikDetayOzellikDil($_teknikDetayOzellikDil)
    {
        return ($this->TeknikDetayOzellikDil = $_teknikDetayOzellikDil);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructTeknikDetayOzellikDil
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructTeknikDetayOzellikDil
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructTeknikDetayOzellikDil
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructTeknikDetayOzellikDil
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructTeknikDetayOzellikDil
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string TeknikDetayOzellikDil
     */
    public function getAttributeName()
    {
        return 'TeknikDetayOzellikDil';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfTeknikDetayOzellikDil
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
