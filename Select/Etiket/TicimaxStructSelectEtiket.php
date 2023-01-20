<?php
/**
 * File for class TicimaxStructSelectEtiket
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectEtiket originally named SelectEtiket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectEtiket extends TicimaxWsdlClass
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
     * The etiketID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $etiketID;
    /**
     * Constructor method for SelectEtiket
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_etiketID
     * @return TicimaxStructSelectEtiket
     */
    public function __construct($_uyeKodu = NULL,$_etiketID = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'etiketID'=>$_etiketID),false);
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
     * Get etiketID value
     * @return int|null
     */
    public function getEtiketID()
    {
        return $this->etiketID;
    }
    /**
     * Set etiketID value
     * @param int $_etiketID the etiketID
     * @return int
     */
    public function setEtiketID($_etiketID)
    {
        return ($this->etiketID = $_etiketID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectEtiket
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
