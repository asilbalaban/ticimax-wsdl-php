<?php
/**
 * File for class TicimaxStructArrayOfTedarikci
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfTedarikci originally named ArrayOfTedarikci
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfTedarikci extends TicimaxWsdlClass
{
    /**
     * The Tedarikci
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructTedarikci
     */
    public $Tedarikci;
    /**
     * Constructor method for ArrayOfTedarikci
     * @see parent::__construct()
     * @param TicimaxStructTedarikci $_tedarikci
     * @return TicimaxStructArrayOfTedarikci
     */
    public function __construct($_tedarikci = NULL)
    {
        parent::__construct(array('Tedarikci'=>$_tedarikci),false);
    }
    /**
     * Get Tedarikci value
     * @return TicimaxStructTedarikci|null
     */
    public function getTedarikci()
    {
        return $this->Tedarikci;
    }
    /**
     * Set Tedarikci value
     * @param TicimaxStructTedarikci $_tedarikci the Tedarikci
     * @return TicimaxStructTedarikci
     */
    public function setTedarikci($_tedarikci)
    {
        return ($this->Tedarikci = $_tedarikci);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructTedarikci
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructTedarikci
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructTedarikci
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructTedarikci
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructTedarikci
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string Tedarikci
     */
    public function getAttributeName()
    {
        return 'Tedarikci';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfTedarikci
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
