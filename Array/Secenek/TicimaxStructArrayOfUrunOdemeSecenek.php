<?php
/**
 * File for class TicimaxStructArrayOfUrunOdemeSecenek
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunOdemeSecenek originally named ArrayOfUrunOdemeSecenek
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunOdemeSecenek extends TicimaxWsdlClass
{
    /**
     * The UrunOdemeSecenek
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunOdemeSecenek
     */
    public $UrunOdemeSecenek;
    /**
     * Constructor method for ArrayOfUrunOdemeSecenek
     * @see parent::__construct()
     * @param TicimaxStructUrunOdemeSecenek $_urunOdemeSecenek
     * @return TicimaxStructArrayOfUrunOdemeSecenek
     */
    public function __construct($_urunOdemeSecenek = NULL)
    {
        parent::__construct(array('UrunOdemeSecenek'=>$_urunOdemeSecenek),false);
    }
    /**
     * Get UrunOdemeSecenek value
     * @return TicimaxStructUrunOdemeSecenek|null
     */
    public function getUrunOdemeSecenek()
    {
        return $this->UrunOdemeSecenek;
    }
    /**
     * Set UrunOdemeSecenek value
     * @param TicimaxStructUrunOdemeSecenek $_urunOdemeSecenek the UrunOdemeSecenek
     * @return TicimaxStructUrunOdemeSecenek
     */
    public function setUrunOdemeSecenek($_urunOdemeSecenek)
    {
        return ($this->UrunOdemeSecenek = $_urunOdemeSecenek);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunOdemeSecenek
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunOdemeSecenek
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunOdemeSecenek
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunOdemeSecenek
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunOdemeSecenek
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunOdemeSecenek
     */
    public function getAttributeName()
    {
        return 'UrunOdemeSecenek';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunOdemeSecenek
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
