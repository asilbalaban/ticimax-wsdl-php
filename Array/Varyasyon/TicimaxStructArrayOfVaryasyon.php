<?php
/**
 * File for class TicimaxStructArrayOfVaryasyon
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfVaryasyon originally named ArrayOfVaryasyon
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfVaryasyon extends TicimaxWsdlClass
{
    /**
     * The Varyasyon
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructVaryasyon
     */
    public $Varyasyon;
    /**
     * Constructor method for ArrayOfVaryasyon
     * @see parent::__construct()
     * @param TicimaxStructVaryasyon $_varyasyon
     * @return TicimaxStructArrayOfVaryasyon
     */
    public function __construct($_varyasyon = NULL)
    {
        parent::__construct(array('Varyasyon'=>$_varyasyon),false);
    }
    /**
     * Get Varyasyon value
     * @return TicimaxStructVaryasyon|null
     */
    public function getVaryasyon()
    {
        return $this->Varyasyon;
    }
    /**
     * Set Varyasyon value
     * @param TicimaxStructVaryasyon $_varyasyon the Varyasyon
     * @return TicimaxStructVaryasyon
     */
    public function setVaryasyon($_varyasyon)
    {
        return ($this->Varyasyon = $_varyasyon);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructVaryasyon
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructVaryasyon
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructVaryasyon
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructVaryasyon
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructVaryasyon
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string Varyasyon
     */
    public function getAttributeName()
    {
        return 'Varyasyon';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfVaryasyon
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
