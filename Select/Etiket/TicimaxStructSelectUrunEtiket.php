<?php
/**
 * File for class TicimaxStructSelectUrunEtiket
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrunEtiket originally named SelectUrunEtiket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrunEtiket extends TicimaxWsdlClass
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
     * The EtiketID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $EtiketID;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * Constructor method for SelectUrunEtiket
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_etiketID
     * @param int $_urunKartiID
     * @return TicimaxStructSelectUrunEtiket
     */
    public function __construct($_uyeKodu = NULL,$_etiketID = NULL,$_urunKartiID = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'EtiketID'=>$_etiketID,'UrunKartiID'=>$_urunKartiID),false);
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
     * Get EtiketID value
     * @return int|null
     */
    public function getEtiketID()
    {
        return $this->EtiketID;
    }
    /**
     * Set EtiketID value
     * @param int $_etiketID the EtiketID
     * @return int
     */
    public function setEtiketID($_etiketID)
    {
        return ($this->EtiketID = $_etiketID);
    }
    /**
     * Get UrunKartiID value
     * @return int|null
     */
    public function getUrunKartiID()
    {
        return $this->UrunKartiID;
    }
    /**
     * Set UrunKartiID value
     * @param int $_urunKartiID the UrunKartiID
     * @return int
     */
    public function setUrunKartiID($_urunKartiID)
    {
        return ($this->UrunKartiID = $_urunKartiID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrunEtiket
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
