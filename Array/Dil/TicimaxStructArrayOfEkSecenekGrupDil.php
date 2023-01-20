<?php
/**
 * File for class TicimaxStructArrayOfEkSecenekGrupDil
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfEkSecenekGrupDil originally named ArrayOfEkSecenekGrupDil
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfEkSecenekGrupDil extends TicimaxWsdlClass
{
    /**
     * The EkSecenekGrupDil
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructEkSecenekGrupDil
     */
    public $EkSecenekGrupDil;
    /**
     * Constructor method for ArrayOfEkSecenekGrupDil
     * @see parent::__construct()
     * @param TicimaxStructEkSecenekGrupDil $_ekSecenekGrupDil
     * @return TicimaxStructArrayOfEkSecenekGrupDil
     */
    public function __construct($_ekSecenekGrupDil = NULL)
    {
        parent::__construct(array('EkSecenekGrupDil'=>$_ekSecenekGrupDil),false);
    }
    /**
     * Get EkSecenekGrupDil value
     * @return TicimaxStructEkSecenekGrupDil|null
     */
    public function getEkSecenekGrupDil()
    {
        return $this->EkSecenekGrupDil;
    }
    /**
     * Set EkSecenekGrupDil value
     * @param TicimaxStructEkSecenekGrupDil $_ekSecenekGrupDil the EkSecenekGrupDil
     * @return TicimaxStructEkSecenekGrupDil
     */
    public function setEkSecenekGrupDil($_ekSecenekGrupDil)
    {
        return ($this->EkSecenekGrupDil = $_ekSecenekGrupDil);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructEkSecenekGrupDil
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructEkSecenekGrupDil
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructEkSecenekGrupDil
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructEkSecenekGrupDil
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructEkSecenekGrupDil
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string EkSecenekGrupDil
     */
    public function getAttributeName()
    {
        return 'EkSecenekGrupDil';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfEkSecenekGrupDil
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
