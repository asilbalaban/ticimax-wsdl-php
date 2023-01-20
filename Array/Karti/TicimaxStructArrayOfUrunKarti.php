<?php
/**
 * File for class TicimaxStructArrayOfUrunKarti
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunKarti originally named ArrayOfUrunKarti
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunKarti extends TicimaxWsdlClass
{
    /**
     * The UrunKarti
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunKarti
     */
    public $UrunKarti;
    /**
     * Constructor method for ArrayOfUrunKarti
     * @see parent::__construct()
     * @param TicimaxStructUrunKarti $_urunKarti
     * @return TicimaxStructArrayOfUrunKarti
     */
    public function __construct($_urunKarti = NULL)
    {
        parent::__construct(array('UrunKarti'=>$_urunKarti),false);
    }
    /**
     * Get UrunKarti value
     * @return TicimaxStructUrunKarti|null
     */
    public function getUrunKarti()
    {
        return $this->UrunKarti;
    }
    /**
     * Set UrunKarti value
     * @param TicimaxStructUrunKarti $_urunKarti the UrunKarti
     * @return TicimaxStructUrunKarti
     */
    public function setUrunKarti($_urunKarti)
    {
        return ($this->UrunKarti = $_urunKarti);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunKarti
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunKarti
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunKarti
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunKarti
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunKarti
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunKarti
     */
    public function getAttributeName()
    {
        return 'UrunKarti';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunKarti
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
