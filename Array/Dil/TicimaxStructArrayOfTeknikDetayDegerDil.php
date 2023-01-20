<?php
/**
 * File for class TicimaxStructArrayOfTeknikDetayDegerDil
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfTeknikDetayDegerDil originally named ArrayOfTeknikDetayDegerDil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfTeknikDetayDegerDil extends TicimaxWsdlClass
{
    /**
     * The TeknikDetayDegerDil
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTeknikDetayDegerDil
     */
    public $TeknikDetayDegerDil;
    /**
     * Constructor method for ArrayOfTeknikDetayDegerDil
     * @see parent::__construct()
     * @param TicimaxStructTeknikDetayDegerDil $_teknikDetayDegerDil
     * @return TicimaxStructArrayOfTeknikDetayDegerDil
     */
    public function __construct($_teknikDetayDegerDil = NULL)
    {
        parent::__construct(array('TeknikDetayDegerDil'=>$_teknikDetayDegerDil),false);
    }
    /**
     * Get TeknikDetayDegerDil value
     * @return TicimaxStructTeknikDetayDegerDil|null
     */
    public function getTeknikDetayDegerDil()
    {
        return $this->TeknikDetayDegerDil;
    }
    /**
     * Set TeknikDetayDegerDil value
     * @param TicimaxStructTeknikDetayDegerDil $_teknikDetayDegerDil the TeknikDetayDegerDil
     * @return TicimaxStructTeknikDetayDegerDil
     */
    public function setTeknikDetayDegerDil($_teknikDetayDegerDil)
    {
        return ($this->TeknikDetayDegerDil = $_teknikDetayDegerDil);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructTeknikDetayDegerDil
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructTeknikDetayDegerDil
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructTeknikDetayDegerDil
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructTeknikDetayDegerDil
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructTeknikDetayDegerDil
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string TeknikDetayDegerDil
     */
    public function getAttributeName()
    {
        return 'TeknikDetayDegerDil';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfTeknikDetayDegerDil
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
