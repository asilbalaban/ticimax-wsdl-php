<?php
/**
 * File for class TicimaxStructArrayOfUrunEtiket
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunEtiket originally named ArrayOfUrunEtiket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunEtiket extends TicimaxWsdlClass
{
    /**
     * The UrunEtiket
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunEtiket
     */
    public $UrunEtiket;
    /**
     * Constructor method for ArrayOfUrunEtiket
     * @see parent::__construct()
     * @param TicimaxStructUrunEtiket $_urunEtiket
     * @return TicimaxStructArrayOfUrunEtiket
     */
    public function __construct($_urunEtiket = NULL)
    {
        parent::__construct(array('UrunEtiket'=>$_urunEtiket),false);
    }
    /**
     * Get UrunEtiket value
     * @return TicimaxStructUrunEtiket|null
     */
    public function getUrunEtiket()
    {
        return $this->UrunEtiket;
    }
    /**
     * Set UrunEtiket value
     * @param TicimaxStructUrunEtiket $_urunEtiket the UrunEtiket
     * @return TicimaxStructUrunEtiket
     */
    public function setUrunEtiket($_urunEtiket)
    {
        return ($this->UrunEtiket = $_urunEtiket);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunEtiket
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunEtiket
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunEtiket
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunEtiket
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunEtiket
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunEtiket
     */
    public function getAttributeName()
    {
        return 'UrunEtiket';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunEtiket
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
