<?php
/**
 * File for class TicimaxStructArrayOfUrunYorum
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunYorum originally named ArrayOfUrunYorum
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunYorum extends TicimaxWsdlClass
{
    /**
     * The UrunYorum
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunYorum
     */
    public $UrunYorum;
    /**
     * Constructor method for ArrayOfUrunYorum
     * @see parent::__construct()
     * @param TicimaxStructUrunYorum $_urunYorum
     * @return TicimaxStructArrayOfUrunYorum
     */
    public function __construct($_urunYorum = NULL)
    {
        parent::__construct(array('UrunYorum'=>$_urunYorum),false);
    }
    /**
     * Get UrunYorum value
     * @return TicimaxStructUrunYorum|null
     */
    public function getUrunYorum()
    {
        return $this->UrunYorum;
    }
    /**
     * Set UrunYorum value
     * @param TicimaxStructUrunYorum $_urunYorum the UrunYorum
     * @return TicimaxStructUrunYorum
     */
    public function setUrunYorum($_urunYorum)
    {
        return ($this->UrunYorum = $_urunYorum);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunYorum
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunYorum
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunYorum
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunYorum
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunYorum
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunYorum
     */
    public function getAttributeName()
    {
        return 'UrunYorum';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunYorum
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
