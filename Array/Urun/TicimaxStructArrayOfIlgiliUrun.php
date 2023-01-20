<?php
/**
 * File for class TicimaxStructArrayOfIlgiliUrun
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfIlgiliUrun originally named ArrayOfIlgiliUrun
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfIlgiliUrun extends TicimaxWsdlClass
{
    /**
     * The IlgiliUrun
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructIlgiliUrun
     */
    public $IlgiliUrun;
    /**
     * Constructor method for ArrayOfIlgiliUrun
     * @see parent::__construct()
     * @param TicimaxStructIlgiliUrun $_ilgiliUrun
     * @return TicimaxStructArrayOfIlgiliUrun
     */
    public function __construct($_ilgiliUrun = NULL)
    {
        parent::__construct(array('IlgiliUrun'=>$_ilgiliUrun),false);
    }
    /**
     * Get IlgiliUrun value
     * @return TicimaxStructIlgiliUrun|null
     */
    public function getIlgiliUrun()
    {
        return $this->IlgiliUrun;
    }
    /**
     * Set IlgiliUrun value
     * @param TicimaxStructIlgiliUrun $_ilgiliUrun the IlgiliUrun
     * @return TicimaxStructIlgiliUrun
     */
    public function setIlgiliUrun($_ilgiliUrun)
    {
        return ($this->IlgiliUrun = $_ilgiliUrun);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructIlgiliUrun
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructIlgiliUrun
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructIlgiliUrun
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructIlgiliUrun
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructIlgiliUrun
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string IlgiliUrun
     */
    public function getAttributeName()
    {
        return 'IlgiliUrun';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfIlgiliUrun
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
