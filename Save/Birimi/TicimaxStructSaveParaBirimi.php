<?php
/**
 * File for class TicimaxStructSaveParaBirimi
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveParaBirimi originally named SaveParaBirimi
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveParaBirimi extends TicimaxWsdlClass
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
     * The parabirimi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructParaBirimi
     */
    public $parabirimi;
    /**
     * Constructor method for SaveParaBirimi
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructParaBirimi $_parabirimi
     * @return TicimaxStructSaveParaBirimi
     */
    public function __construct($_uyeKodu = NULL,$_parabirimi = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'parabirimi'=>$_parabirimi),false);
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
     * Get parabirimi value
     * @return TicimaxStructParaBirimi|null
     */
    public function getParabirimi()
    {
        return $this->parabirimi;
    }
    /**
     * Set parabirimi value
     * @param TicimaxStructParaBirimi $_parabirimi the parabirimi
     * @return TicimaxStructParaBirimi
     */
    public function setParabirimi($_parabirimi)
    {
        return ($this->parabirimi = $_parabirimi);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveParaBirimi
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
