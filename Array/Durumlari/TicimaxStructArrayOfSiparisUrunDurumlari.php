<?php
/**
 * File for class TicimaxStructArrayOfSiparisUrunDurumlari
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructArrayOfSiparisUrunDurumlari originally named ArrayOfSiparisUrunDurumlari
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructArrayOfSiparisUrunDurumlari extends TicimaxWsdlClass
{
    /**
     * The SiparisUrunDurumlari
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructSiparisUrunDurumlari
     */
    public $SiparisUrunDurumlari;
    /**
     * Constructor method for ArrayOfSiparisUrunDurumlari
     * @see parent::__construct()
     * @param TicimaxStructSiparisUrunDurumlari $_siparisUrunDurumlari
     * @return TicimaxStructArrayOfSiparisUrunDurumlari
     */
    public function __construct($_siparisUrunDurumlari = NULL)
    {
        parent::__construct(array('SiparisUrunDurumlari'=>$_siparisUrunDurumlari),false);
    }
    /**
     * Get SiparisUrunDurumlari value
     * @return TicimaxStructSiparisUrunDurumlari|null
     */
    public function getSiparisUrunDurumlari()
    {
        return $this->SiparisUrunDurumlari;
    }
    /**
     * Set SiparisUrunDurumlari value
     * @param TicimaxStructSiparisUrunDurumlari $_siparisUrunDurumlari the SiparisUrunDurumlari
     * @return TicimaxStructSiparisUrunDurumlari
     */
    public function setSiparisUrunDurumlari($_siparisUrunDurumlari)
    {
        return ($this->SiparisUrunDurumlari = $_siparisUrunDurumlari);
    }
    /**
     * Returns the current element
     * @see TicimaxWsdlClass::current()
     * @return TicimaxStructSiparisUrunDurumlari
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see TicimaxWsdlClass::item()
     * @param int $_index
     * @return TicimaxStructSiparisUrunDurumlari
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see TicimaxWsdlClass::first()
     * @return TicimaxStructSiparisUrunDurumlari
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see TicimaxWsdlClass::last()
     * @return TicimaxStructSiparisUrunDurumlari
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see TicimaxWsdlClass::last()
     * @param int $_offset
     * @return TicimaxStructSiparisUrunDurumlari
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see TicimaxWsdlClass::getAttributeName()
     * @return string SiparisUrunDurumlari
     */
    public function getAttributeName()
    {
        return 'SiparisUrunDurumlari';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructArrayOfSiparisUrunDurumlari
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
