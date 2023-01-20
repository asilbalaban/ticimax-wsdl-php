<?php
/**
 * File for class TicimaxStructArrayOfParaBirimi
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfParaBirimi originally named ArrayOfParaBirimi
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfParaBirimi extends TicimaxWsdlClass
{
    /**
     * The ParaBirimi
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructParaBirimi
     */
    public $ParaBirimi;
    /**
     * Constructor method for ArrayOfParaBirimi
     * @see parent::__construct()
     * @param TicimaxStructParaBirimi $_paraBirimi
     * @return TicimaxStructArrayOfParaBirimi
     */
    public function __construct($_paraBirimi = NULL)
    {
        parent::__construct(array('ParaBirimi'=>$_paraBirimi),false);
    }
    /**
     * Get ParaBirimi value
     * @return TicimaxStructParaBirimi|null
     */
    public function getParaBirimi()
    {
        return $this->ParaBirimi;
    }
    /**
     * Set ParaBirimi value
     * @param TicimaxStructParaBirimi $_paraBirimi the ParaBirimi
     * @return TicimaxStructParaBirimi
     */
    public function setParaBirimi($_paraBirimi)
    {
        return ($this->ParaBirimi = $_paraBirimi);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructParaBirimi
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructParaBirimi
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructParaBirimi
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructParaBirimi
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructParaBirimi
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string ParaBirimi
     */
    public function getAttributeName()
    {
        return 'ParaBirimi';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfParaBirimi
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
