<?php
/**
 * File for class TicimaxStructArrayOfEkSecenekGrup
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfEkSecenekGrup originally named ArrayOfEkSecenekGrup
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfEkSecenekGrup extends TicimaxWsdlClass
{
    /**
     * The EkSecenekGrup
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructEkSecenekGrup
     */
    public $EkSecenekGrup;
    /**
     * Constructor method for ArrayOfEkSecenekGrup
     * @see parent::__construct()
     * @param TicimaxStructEkSecenekGrup $_ekSecenekGrup
     * @return TicimaxStructArrayOfEkSecenekGrup
     */
    public function __construct($_ekSecenekGrup = NULL)
    {
        parent::__construct(array('EkSecenekGrup'=>$_ekSecenekGrup),false);
    }
    /**
     * Get EkSecenekGrup value
     * @return TicimaxStructEkSecenekGrup|null
     */
    public function getEkSecenekGrup()
    {
        return $this->EkSecenekGrup;
    }
    /**
     * Set EkSecenekGrup value
     * @param TicimaxStructEkSecenekGrup $_ekSecenekGrup the EkSecenekGrup
     * @return TicimaxStructEkSecenekGrup
     */
    public function setEkSecenekGrup($_ekSecenekGrup)
    {
        return ($this->EkSecenekGrup = $_ekSecenekGrup);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructEkSecenekGrup
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructEkSecenekGrup
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructEkSecenekGrup
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructEkSecenekGrup
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructEkSecenekGrup
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string EkSecenekGrup
     */
    public function getAttributeName()
    {
        return 'EkSecenekGrup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfEkSecenekGrup
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
