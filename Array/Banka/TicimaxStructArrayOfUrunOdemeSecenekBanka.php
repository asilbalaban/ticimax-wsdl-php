<?php
/**
 * File for class TicimaxStructArrayOfUrunOdemeSecenekBanka
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunOdemeSecenekBanka originally named ArrayOfUrunOdemeSecenekBanka
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunOdemeSecenekBanka extends TicimaxWsdlClass
{
    /**
     * The UrunOdemeSecenekBanka
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunOdemeSecenekBanka
     */
    public $UrunOdemeSecenekBanka;
    /**
     * Constructor method for ArrayOfUrunOdemeSecenekBanka
     * @see parent::__construct()
     * @param TicimaxStructUrunOdemeSecenekBanka $_urunOdemeSecenekBanka
     * @return TicimaxStructArrayOfUrunOdemeSecenekBanka
     */
    public function __construct($_urunOdemeSecenekBanka = NULL)
    {
        parent::__construct(array('UrunOdemeSecenekBanka'=>$_urunOdemeSecenekBanka),false);
    }
    /**
     * Get UrunOdemeSecenekBanka value
     * @return TicimaxStructUrunOdemeSecenekBanka|null
     */
    public function getUrunOdemeSecenekBanka()
    {
        return $this->UrunOdemeSecenekBanka;
    }
    /**
     * Set UrunOdemeSecenekBanka value
     * @param TicimaxStructUrunOdemeSecenekBanka $_urunOdemeSecenekBanka the UrunOdemeSecenekBanka
     * @return TicimaxStructUrunOdemeSecenekBanka
     */
    public function setUrunOdemeSecenekBanka($_urunOdemeSecenekBanka)
    {
        return ($this->UrunOdemeSecenekBanka = $_urunOdemeSecenekBanka);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunOdemeSecenekBanka
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunOdemeSecenekBanka
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunOdemeSecenekBanka
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunOdemeSecenekBanka
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunOdemeSecenekBanka
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunOdemeSecenekBanka
     */
    public function getAttributeName()
    {
        return 'UrunOdemeSecenekBanka';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunOdemeSecenekBanka
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
