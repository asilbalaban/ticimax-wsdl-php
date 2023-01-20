<?php
/**
 * File for class TicimaxStructArrayOfVaryasyonOzellik
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfVaryasyonOzellik originally named ArrayOfVaryasyonOzellik
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfVaryasyonOzellik extends TicimaxWsdlClass
{
    /**
     * The VaryasyonOzellik
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructVaryasyonOzellik
     */
    public $VaryasyonOzellik;
    /**
     * Constructor method for ArrayOfVaryasyonOzellik
     * @see parent::__construct()
     * @param TicimaxStructVaryasyonOzellik $_varyasyonOzellik
     * @return TicimaxStructArrayOfVaryasyonOzellik
     */
    public function __construct($_varyasyonOzellik = NULL)
    {
        parent::__construct(array('VaryasyonOzellik'=>$_varyasyonOzellik),false);
    }
    /**
     * Get VaryasyonOzellik value
     * @return TicimaxStructVaryasyonOzellik|null
     */
    public function getVaryasyonOzellik()
    {
        return $this->VaryasyonOzellik;
    }
    /**
     * Set VaryasyonOzellik value
     * @param TicimaxStructVaryasyonOzellik $_varyasyonOzellik the VaryasyonOzellik
     * @return TicimaxStructVaryasyonOzellik
     */
    public function setVaryasyonOzellik($_varyasyonOzellik)
    {
        return ($this->VaryasyonOzellik = $_varyasyonOzellik);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructVaryasyonOzellik
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructVaryasyonOzellik
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructVaryasyonOzellik
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructVaryasyonOzellik
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructVaryasyonOzellik
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string VaryasyonOzellik
     */
    public function getAttributeName()
    {
        return 'VaryasyonOzellik';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfVaryasyonOzellik
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
