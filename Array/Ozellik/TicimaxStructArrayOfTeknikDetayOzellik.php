<?php
/**
 * File for class TicimaxStructArrayOfTeknikDetayOzellik
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfTeknikDetayOzellik originally named ArrayOfTeknikDetayOzellik
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfTeknikDetayOzellik extends TicimaxWsdlClass
{
    /**
     * The TeknikDetayOzellik
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTeknikDetayOzellik
     */
    public $TeknikDetayOzellik;
    /**
     * Constructor method for ArrayOfTeknikDetayOzellik
     * @see parent::__construct()
     * @param TicimaxStructTeknikDetayOzellik $_teknikDetayOzellik
     * @return TicimaxStructArrayOfTeknikDetayOzellik
     */
    public function __construct($_teknikDetayOzellik = NULL)
    {
        parent::__construct(array('TeknikDetayOzellik'=>$_teknikDetayOzellik),false);
    }
    /**
     * Get TeknikDetayOzellik value
     * @return TicimaxStructTeknikDetayOzellik|null
     */
    public function getTeknikDetayOzellik()
    {
        return $this->TeknikDetayOzellik;
    }
    /**
     * Set TeknikDetayOzellik value
     * @param TicimaxStructTeknikDetayOzellik $_teknikDetayOzellik the TeknikDetayOzellik
     * @return TicimaxStructTeknikDetayOzellik
     */
    public function setTeknikDetayOzellik($_teknikDetayOzellik)
    {
        return ($this->TeknikDetayOzellik = $_teknikDetayOzellik);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructTeknikDetayOzellik
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructTeknikDetayOzellik
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructTeknikDetayOzellik
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructTeknikDetayOzellik
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructTeknikDetayOzellik
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string TeknikDetayOzellik
     */
    public function getAttributeName()
    {
        return 'TeknikDetayOzellik';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfTeknikDetayOzellik
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
