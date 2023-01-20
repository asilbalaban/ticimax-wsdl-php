<?php
/**
 * File for class TicimaxStructUrunBarkodGuncelle
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunBarkodGuncelle originally named UrunBarkodGuncelle
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunBarkodGuncelle extends TicimaxWsdlClass
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
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunBarkodGuncelleRequest
     */
    public $request;
    /**
     * Constructor method for UrunBarkodGuncelle
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructUrunBarkodGuncelleRequest $_request
     * @return TicimaxStructUrunBarkodGuncelle
     */
    public function __construct($_uyeKodu = NULL,$_request = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'request'=>$_request),false);
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
     * Get request value
     * @return TicimaxStructUrunBarkodGuncelleRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param TicimaxStructUrunBarkodGuncelleRequest $_request the request
     * @return TicimaxStructUrunBarkodGuncelleRequest
     */
    public function setRequest($_request)
    {
        return ($this->request = $_request);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunBarkodGuncelle
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
