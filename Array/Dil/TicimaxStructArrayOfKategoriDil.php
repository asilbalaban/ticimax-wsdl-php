<?php
/**
 * File for class TicimaxStructArrayOfKategoriDil
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfKategoriDil originally named ArrayOfKategoriDil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfKategoriDil extends TicimaxWsdlClass
{
    /**
     * The KategoriDil
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructKategoriDil
     */
    public $KategoriDil;
    /**
     * Constructor method for ArrayOfKategoriDil
     * @see parent::__construct()
     * @param TicimaxStructKategoriDil $_kategoriDil
     * @return TicimaxStructArrayOfKategoriDil
     */
    public function __construct($_kategoriDil = NULL)
    {
        parent::__construct(array('KategoriDil'=>$_kategoriDil),false);
    }
    /**
     * Get KategoriDil value
     * @return TicimaxStructKategoriDil|null
     */
    public function getKategoriDil()
    {
        return $this->KategoriDil;
    }
    /**
     * Set KategoriDil value
     * @param TicimaxStructKategoriDil $_kategoriDil the KategoriDil
     * @return TicimaxStructKategoriDil
     */
    public function setKategoriDil($_kategoriDil)
    {
        return ($this->KategoriDil = $_kategoriDil);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructKategoriDil
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructKategoriDil
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructKategoriDil
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructKategoriDil
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructKategoriDil
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string KategoriDil
     */
    public function getAttributeName()
    {
        return 'KategoriDil';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfKategoriDil
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
