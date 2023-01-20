<?php
/**
 * File for class TicimaxStructArrayOfWebMagazaStok
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfWebMagazaStok originally named ArrayOfWebMagazaStok
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfWebMagazaStok extends TicimaxWsdlClass
{
    /**
     * The WebMagazaStok
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebMagazaStok
     */
    public $WebMagazaStok;
    /**
     * Constructor method for ArrayOfWebMagazaStok
     * @see parent::__construct()
     * @param TicimaxStructWebMagazaStok $_webMagazaStok
     * @return TicimaxStructArrayOfWebMagazaStok
     */
    public function __construct($_webMagazaStok = NULL)
    {
        parent::__construct(array('WebMagazaStok'=>$_webMagazaStok),false);
    }
    /**
     * Get WebMagazaStok value
     * @return TicimaxStructWebMagazaStok|null
     */
    public function getWebMagazaStok()
    {
        return $this->WebMagazaStok;
    }
    /**
     * Set WebMagazaStok value
     * @param TicimaxStructWebMagazaStok $_webMagazaStok the WebMagazaStok
     * @return TicimaxStructWebMagazaStok
     */
    public function setWebMagazaStok($_webMagazaStok)
    {
        return ($this->WebMagazaStok = $_webMagazaStok);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructWebMagazaStok
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructWebMagazaStok
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructWebMagazaStok
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructWebMagazaStok
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructWebMagazaStok
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string WebMagazaStok
     */
    public function getAttributeName()
    {
        return 'WebMagazaStok';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfWebMagazaStok
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
