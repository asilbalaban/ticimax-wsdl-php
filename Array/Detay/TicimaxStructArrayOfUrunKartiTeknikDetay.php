<?php
/**
 * File for class TicimaxStructArrayOfUrunKartiTeknikDetay
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunKartiTeknikDetay originally named ArrayOfUrunKartiTeknikDetay
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunKartiTeknikDetay extends TicimaxWsdlClass
{
    /**
     * The UrunKartiTeknikDetay
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunKartiTeknikDetay
     */
    public $UrunKartiTeknikDetay;
    /**
     * Constructor method for ArrayOfUrunKartiTeknikDetay
     * @see parent::__construct()
     * @param TicimaxStructUrunKartiTeknikDetay $_urunKartiTeknikDetay
     * @return TicimaxStructArrayOfUrunKartiTeknikDetay
     */
    public function __construct($_urunKartiTeknikDetay = NULL)
    {
        parent::__construct(array('UrunKartiTeknikDetay'=>$_urunKartiTeknikDetay),false);
    }
    /**
     * Get UrunKartiTeknikDetay value
     * @return TicimaxStructUrunKartiTeknikDetay|null
     */
    public function getUrunKartiTeknikDetay()
    {
        return $this->UrunKartiTeknikDetay;
    }
    /**
     * Set UrunKartiTeknikDetay value
     * @param TicimaxStructUrunKartiTeknikDetay $_urunKartiTeknikDetay the UrunKartiTeknikDetay
     * @return TicimaxStructUrunKartiTeknikDetay
     */
    public function setUrunKartiTeknikDetay($_urunKartiTeknikDetay)
    {
        return ($this->UrunKartiTeknikDetay = $_urunKartiTeknikDetay);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunKartiTeknikDetay
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunKartiTeknikDetay
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunKartiTeknikDetay
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunKartiTeknikDetay
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunKartiTeknikDetay
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunKartiTeknikDetay
     */
    public function getAttributeName()
    {
        return 'UrunKartiTeknikDetay';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunKartiTeknikDetay
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
