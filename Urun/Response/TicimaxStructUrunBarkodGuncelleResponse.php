<?php
/**
 * File for class TicimaxStructUrunBarkodGuncelleResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunBarkodGuncelleResponse originally named UrunBarkodGuncelleResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunBarkodGuncelleResponse extends TicimaxStructWebServisResponse
{
    /**
     * The UrunBarkodGuncelleResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
     * @var WebServisResponse
     */
    public $UrunBarkodGuncelleResult;
    /**
     * Constructor method for UrunBarkodGuncelleResponse
     * @see parent::__construct()
     * @param WebServisResponse $_urunBarkodGuncelleResult
     * @return TicimaxStructUrunBarkodGuncelleResponse
     */
    public function __construct($_urunBarkodGuncelleResult = NULL)
    {
        TicimaxWsdlClass::__construct(array('UrunBarkodGuncelleResult'=>$_urunBarkodGuncelleResult),false);
    }
    /**
     * Get UrunBarkodGuncelleResult value
     * @return WebServisResponse|null
     */
    public function getUrunBarkodGuncelleResult()
    {
        return $this->UrunBarkodGuncelleResult;
    }
    /**
     * Set UrunBarkodGuncelleResult value
     * @param WebServisResponse $_urunBarkodGuncelleResult the UrunBarkodGuncelleResult
     * @return WebServisResponse
     */
    public function setUrunBarkodGuncelleResult($_urunBarkodGuncelleResult)
    {
        return ($this->UrunBarkodGuncelleResult = $_urunBarkodGuncelleResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunBarkodGuncelleResponse
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
