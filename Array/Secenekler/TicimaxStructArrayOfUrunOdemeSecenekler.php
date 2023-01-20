<?php
/**
 * File for class TicimaxStructArrayOfUrunOdemeSecenekler
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunOdemeSecenekler originally named ArrayOfUrunOdemeSecenekler
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunOdemeSecenekler extends TicimaxWsdlClass
{
    /**
     * The UrunOdemeSecenekler
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunOdemeSecenekler
     */
    public $UrunOdemeSecenekler;
    /**
     * Constructor method for ArrayOfUrunOdemeSecenekler
     * @see parent::__construct()
     * @param TicimaxStructUrunOdemeSecenekler $_urunOdemeSecenekler
     * @return TicimaxStructArrayOfUrunOdemeSecenekler
     */
    public function __construct($_urunOdemeSecenekler = NULL)
    {
        parent::__construct(array('UrunOdemeSecenekler'=>$_urunOdemeSecenekler),false);
    }
    /**
     * Get UrunOdemeSecenekler value
     * @return TicimaxStructUrunOdemeSecenekler|null
     */
    public function getUrunOdemeSecenekler()
    {
        return $this->UrunOdemeSecenekler;
    }
    /**
     * Set UrunOdemeSecenekler value
     * @param TicimaxStructUrunOdemeSecenekler $_urunOdemeSecenekler the UrunOdemeSecenekler
     * @return TicimaxStructUrunOdemeSecenekler
     */
    public function setUrunOdemeSecenekler($_urunOdemeSecenekler)
    {
        return ($this->UrunOdemeSecenekler = $_urunOdemeSecenekler);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunOdemeSecenekler
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunOdemeSecenekler
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunOdemeSecenekler
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunOdemeSecenekler
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunOdemeSecenekler
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunOdemeSecenekler
     */
    public function getAttributeName()
    {
        return 'UrunOdemeSecenekler';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunOdemeSecenekler
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
