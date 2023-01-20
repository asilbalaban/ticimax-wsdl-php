<?php
/**
 * File for class TicimaxStructArrayOfWebUrunResim
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfWebUrunResim originally named ArrayOfWebUrunResim
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfWebUrunResim extends TicimaxWsdlClass
{
    /**
     * The WebUrunResim
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructWebUrunResim
     */
    public $WebUrunResim;
    /**
     * Constructor method for ArrayOfWebUrunResim
     * @see parent::__construct()
     * @param TicimaxStructWebUrunResim $_webUrunResim
     * @return TicimaxStructArrayOfWebUrunResim
     */
    public function __construct($_webUrunResim = NULL)
    {
        parent::__construct(array('WebUrunResim'=>$_webUrunResim),false);
    }
    /**
     * Get WebUrunResim value
     * @return TicimaxStructWebUrunResim|null
     */
    public function getWebUrunResim()
    {
        return $this->WebUrunResim;
    }
    /**
     * Set WebUrunResim value
     * @param TicimaxStructWebUrunResim $_webUrunResim the WebUrunResim
     * @return TicimaxStructWebUrunResim
     */
    public function setWebUrunResim($_webUrunResim)
    {
        return ($this->WebUrunResim = $_webUrunResim);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructWebUrunResim
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructWebUrunResim
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructWebUrunResim
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructWebUrunResim
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructWebUrunResim
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string WebUrunResim
     */
    public function getAttributeName()
    {
        return 'WebUrunResim';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfWebUrunResim
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
