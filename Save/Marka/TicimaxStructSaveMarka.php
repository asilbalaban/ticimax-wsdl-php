<?php
/**
 * File for class TicimaxStructSaveMarka
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveMarka originally named SaveMarka
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveMarka extends TicimaxWsdlClass
{
    /**
     * The UyeKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UyeKodu;
    /**
     * The marka
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructMarka
     */
    public $marka;
    /**
     * Constructor method for SaveMarka
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructMarka $_marka
     * @return TicimaxStructSaveMarka
     */
    public function __construct($_uyeKodu = NULL,$_marka = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'marka'=>$_marka),false);
    }
    /**
     * Get UyeKodu value
     * @return string|null
     */
    public function getUyeKodu()
    {
        return $this->UyeKodu;
    }
    /**
     * Set UyeKodu value
     * @param string $_uyeKodu the UyeKodu
     * @return string
     */
    public function setUyeKodu($_uyeKodu)
    {
        return ($this->UyeKodu = $_uyeKodu);
    }
    /**
     * Get marka value
     * @return TicimaxStructMarka|null
     */
    public function getMarka()
    {
        return $this->marka;
    }
    /**
     * Set marka value
     * @param TicimaxStructMarka $_marka the marka
     * @return TicimaxStructMarka
     */
    public function setMarka($_marka)
    {
        return ($this->marka = $_marka);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveMarka
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
