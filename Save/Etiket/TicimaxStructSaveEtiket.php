<?php
/**
 * File for class TicimaxStructSaveEtiket
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveEtiket originally named SaveEtiket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveEtiket extends TicimaxWsdlClass
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
     * The etiket
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructEtiket
     */
    public $etiket;
    /**
     * Constructor method for SaveEtiket
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructEtiket $_etiket
     * @return TicimaxStructSaveEtiket
     */
    public function __construct($_uyeKodu = NULL,$_etiket = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'etiket'=>$_etiket),false);
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
     * Get etiket value
     * @return TicimaxStructEtiket|null
     */
    public function getEtiket()
    {
        return $this->etiket;
    }
    /**
     * Set etiket value
     * @param TicimaxStructEtiket $_etiket the etiket
     * @return TicimaxStructEtiket
     */
    public function setEtiket($_etiket)
    {
        return ($this->etiket = $_etiket);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveEtiket
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
