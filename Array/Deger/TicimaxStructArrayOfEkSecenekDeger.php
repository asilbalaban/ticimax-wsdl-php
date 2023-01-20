<?php
/**
 * File for class TicimaxStructArrayOfEkSecenekDeger
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfEkSecenekDeger originally named ArrayOfEkSecenekDeger
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfEkSecenekDeger extends TicimaxWsdlClass
{
    /**
     * The EkSecenekDeger
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructEkSecenekDeger
     */
    public $EkSecenekDeger;
    /**
     * Constructor method for ArrayOfEkSecenekDeger
     * @see parent::__construct()
     * @param TicimaxStructEkSecenekDeger $_ekSecenekDeger
     * @return TicimaxStructArrayOfEkSecenekDeger
     */
    public function __construct($_ekSecenekDeger = NULL)
    {
        parent::__construct(array('EkSecenekDeger'=>$_ekSecenekDeger),false);
    }
    /**
     * Get EkSecenekDeger value
     * @return TicimaxStructEkSecenekDeger|null
     */
    public function getEkSecenekDeger()
    {
        return $this->EkSecenekDeger;
    }
    /**
     * Set EkSecenekDeger value
     * @param TicimaxStructEkSecenekDeger $_ekSecenekDeger the EkSecenekDeger
     * @return TicimaxStructEkSecenekDeger
     */
    public function setEkSecenekDeger($_ekSecenekDeger)
    {
        return ($this->EkSecenekDeger = $_ekSecenekDeger);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructEkSecenekDeger
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructEkSecenekDeger
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructEkSecenekDeger
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructEkSecenekDeger
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructEkSecenekDeger
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string EkSecenekDeger
     */
    public function getAttributeName()
    {
        return 'EkSecenekDeger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfEkSecenekDeger
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
