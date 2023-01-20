<?php
/**
 * File for class TicimaxStructUrunResimYukleResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunResimYukleResponse originally named UrunResimYukleResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunResimYukleResponse extends TicimaxStructWebServisResponse
{
    /**
     * The Basarili
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Basarili;
    /**
     * The Hatali
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Hatali;
    /**
     * The UrunResimYukleResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
     * @var WebServisResponse
     */
    public $UrunResimYukleResult;
    /**
     * Constructor method for UrunResimYukleResponse
     * @see parent::__construct()
     * @param int $_basarili
     * @param int $_hatali
     * @param WebServisResponse $_urunResimYukleResult
     * @return TicimaxStructUrunResimYukleResponse
     */
    public function __construct($_basarili = NULL,$_hatali = NULL,$_urunResimYukleResult = NULL)
    {
        TicimaxWsdlClass::__construct(array('Basarili'=>$_basarili,'Hatali'=>$_hatali,'UrunResimYukleResult'=>$_urunResimYukleResult),false);
    }
    /**
     * Get Basarili value
     * @return int|null
     */
    public function getBasarili()
    {
        return $this->Basarili;
    }
    /**
     * Set Basarili value
     * @param int $_basarili the Basarili
     * @return int
     */
    public function setBasarili($_basarili)
    {
        return ($this->Basarili = $_basarili);
    }
    /**
     * Get Hatali value
     * @return int|null
     */
    public function getHatali()
    {
        return $this->Hatali;
    }
    /**
     * Set Hatali value
     * @param int $_hatali the Hatali
     * @return int
     */
    public function setHatali($_hatali)
    {
        return ($this->Hatali = $_hatali);
    }
    /**
     * Get UrunResimYukleResult value
     * @return WebServisResponse|null
     */
    public function getUrunResimYukleResult()
    {
        return $this->UrunResimYukleResult;
    }
    /**
     * Set UrunResimYukleResult value
     * @param WebServisResponse $_urunResimYukleResult the UrunResimYukleResult
     * @return WebServisResponse
     */
    public function setUrunResimYukleResult($_urunResimYukleResult)
    {
        return ($this->UrunResimYukleResult = $_urunResimYukleResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunResimYukleResponse
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
