<?php
/**
 * File for class TicimaxStructArrayOfUrunOdemeSecenekTaksit
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunOdemeSecenekTaksit originally named ArrayOfUrunOdemeSecenekTaksit
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunOdemeSecenekTaksit extends TicimaxWsdlClass
{
    /**
     * The UrunOdemeSecenekTaksit
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunOdemeSecenekTaksit
     */
    public $UrunOdemeSecenekTaksit;
    /**
     * Constructor method for ArrayOfUrunOdemeSecenekTaksit
     * @see parent::__construct()
     * @param TicimaxStructUrunOdemeSecenekTaksit $_urunOdemeSecenekTaksit
     * @return TicimaxStructArrayOfUrunOdemeSecenekTaksit
     */
    public function __construct($_urunOdemeSecenekTaksit = NULL)
    {
        parent::__construct(array('UrunOdemeSecenekTaksit'=>$_urunOdemeSecenekTaksit),false);
    }
    /**
     * Get UrunOdemeSecenekTaksit value
     * @return TicimaxStructUrunOdemeSecenekTaksit|null
     */
    public function getUrunOdemeSecenekTaksit()
    {
        return $this->UrunOdemeSecenekTaksit;
    }
    /**
     * Set UrunOdemeSecenekTaksit value
     * @param TicimaxStructUrunOdemeSecenekTaksit $_urunOdemeSecenekTaksit the UrunOdemeSecenekTaksit
     * @return TicimaxStructUrunOdemeSecenekTaksit
     */
    public function setUrunOdemeSecenekTaksit($_urunOdemeSecenekTaksit)
    {
        return ($this->UrunOdemeSecenekTaksit = $_urunOdemeSecenekTaksit);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunOdemeSecenekTaksit
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunOdemeSecenekTaksit
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunOdemeSecenekTaksit
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunOdemeSecenekTaksit
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunOdemeSecenekTaksit
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunOdemeSecenekTaksit
     */
    public function getAttributeName()
    {
        return 'UrunOdemeSecenekTaksit';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunOdemeSecenekTaksit
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
