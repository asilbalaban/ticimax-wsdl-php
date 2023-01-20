<?php
/**
 * File for class TicimaxStructArrayOfUrunKartiEtiket
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunKartiEtiket originally named ArrayOfUrunKartiEtiket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunKartiEtiket extends TicimaxWsdlClass
{
    /**
     * The UrunKartiEtiket
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunKartiEtiket
     */
    public $UrunKartiEtiket;
    /**
     * Constructor method for ArrayOfUrunKartiEtiket
     * @see parent::__construct()
     * @param TicimaxStructUrunKartiEtiket $_urunKartiEtiket
     * @return TicimaxStructArrayOfUrunKartiEtiket
     */
    public function __construct($_urunKartiEtiket = NULL)
    {
        parent::__construct(array('UrunKartiEtiket'=>$_urunKartiEtiket),false);
    }
    /**
     * Get UrunKartiEtiket value
     * @return TicimaxStructUrunKartiEtiket|null
     */
    public function getUrunKartiEtiket()
    {
        return $this->UrunKartiEtiket;
    }
    /**
     * Set UrunKartiEtiket value
     * @param TicimaxStructUrunKartiEtiket $_urunKartiEtiket the UrunKartiEtiket
     * @return TicimaxStructUrunKartiEtiket
     */
    public function setUrunKartiEtiket($_urunKartiEtiket)
    {
        return ($this->UrunKartiEtiket = $_urunKartiEtiket);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunKartiEtiket
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunKartiEtiket
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunKartiEtiket
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunKartiEtiket
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunKartiEtiket
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunKartiEtiket
     */
    public function getAttributeName()
    {
        return 'UrunKartiEtiket';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunKartiEtiket
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
