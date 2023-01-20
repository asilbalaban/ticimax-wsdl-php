<?php
/**
 * File for class TicimaxStructSelectMagazaStokRequest
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectMagazaStokRequest originally named SelectMagazaStokRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectMagazaStokRequest extends TicimaxWsdlClass
{
    /**
     * The MagazaKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $MagazaKodu;
    /**
     * Constructor method for SelectMagazaStokRequest
     * @see parent::__construct()
     * @param string $_magazaKodu
     * @return TicimaxStructSelectMagazaStokRequest
     */
    public function __construct($_magazaKodu = NULL)
    {
        parent::__construct(array('MagazaKodu'=>$_magazaKodu),false);
    }
    /**
     * Get MagazaKodu value
     * @return string|null
     */
    public function getMagazaKodu()
    {
        return $this->MagazaKodu;
    }
    /**
     * Set MagazaKodu value
     * @param string $_magazaKodu the MagazaKodu
     * @return string
     */
    public function setMagazaKodu($_magazaKodu)
    {
        return ($this->MagazaKodu = $_magazaKodu);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectMagazaStokRequest
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
