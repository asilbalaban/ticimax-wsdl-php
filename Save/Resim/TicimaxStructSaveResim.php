<?php
/**
 * File for class TicimaxStructSaveResim
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveResim originally named SaveResim
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveResim extends TicimaxWsdlClass
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
     * The kartlar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKarti
     */
    public $kartlar;
    /**
     * The alanAdi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $alanAdi;
    /**
     * The userAgent
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $userAgent;
    /**
     * Constructor method for SaveResim
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructArrayOfUrunKarti $_kartlar
     * @param string $_alanAdi
     * @param string $_userAgent
     * @return TicimaxStructSaveResim
     */
    public function __construct($_uyeKodu = NULL,$_kartlar = NULL,$_alanAdi = NULL,$_userAgent = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'kartlar'=>($_kartlar instanceof TicimaxStructArrayOfUrunKarti)?$_kartlar:new TicimaxStructArrayOfUrunKarti($_kartlar),'alanAdi'=>$_alanAdi,'userAgent'=>$_userAgent),false);
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
     * Get kartlar value
     * @return TicimaxStructArrayOfUrunKarti|null
     */
    public function getKartlar()
    {
        return $this->kartlar;
    }
    /**
     * Set kartlar value
     * @param TicimaxStructArrayOfUrunKarti $_kartlar the kartlar
     * @return TicimaxStructArrayOfUrunKarti
     */
    public function setKartlar($_kartlar)
    {
        return ($this->kartlar = $_kartlar);
    }
    /**
     * Get alanAdi value
     * @return string|null
     */
    public function getAlanAdi()
    {
        return $this->alanAdi;
    }
    /**
     * Set alanAdi value
     * @param string $_alanAdi the alanAdi
     * @return string
     */
    public function setAlanAdi($_alanAdi)
    {
        return ($this->alanAdi = $_alanAdi);
    }
    /**
     * Get userAgent value
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }
    /**
     * Set userAgent value
     * @param string $_userAgent the userAgent
     * @return string
     */
    public function setUserAgent($_userAgent)
    {
        return ($this->userAgent = $_userAgent);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveResim
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
