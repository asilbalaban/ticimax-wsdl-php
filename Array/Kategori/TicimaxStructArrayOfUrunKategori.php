<?php
/**
 * File for class TicimaxStructArrayOfUrunKategori
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfUrunKategori originally named ArrayOfUrunKategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfUrunKategori extends TicimaxWsdlClass
{
    /**
     * The UrunKategori
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunKategori
     */
    public $UrunKategori;
    /**
     * Constructor method for ArrayOfUrunKategori
     * @see parent::__construct()
     * @param TicimaxStructUrunKategori $_urunKategori
     * @return TicimaxStructArrayOfUrunKategori
     */
    public function __construct($_urunKategori = NULL)
    {
        parent::__construct(array('UrunKategori'=>$_urunKategori),false);
    }
    /**
     * Get UrunKategori value
     * @return TicimaxStructUrunKategori|null
     */
    public function getUrunKategori()
    {
        return $this->UrunKategori;
    }
    /**
     * Set UrunKategori value
     * @param TicimaxStructUrunKategori $_urunKategori the UrunKategori
     * @return TicimaxStructUrunKategori
     */
    public function setUrunKategori($_urunKategori)
    {
        return ($this->UrunKategori = $_urunKategori);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructUrunKategori
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructUrunKategori
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructUrunKategori
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructUrunKategori
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructUrunKategori
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string UrunKategori
     */
    public function getAttributeName()
    {
        return 'UrunKategori';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfUrunKategori
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
