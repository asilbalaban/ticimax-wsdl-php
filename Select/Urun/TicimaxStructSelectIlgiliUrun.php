<?php
/**
 * File for class TicimaxStructSelectIlgiliUrun
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectIlgiliUrun originally named SelectIlgiliUrun
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectIlgiliUrun extends TicimaxWsdlClass
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
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * The IlgiliUrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $IlgiliUrunKartiID;
    /**
     * Constructor method for SelectIlgiliUrun
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_urunKartiID
     * @param int $_ilgiliUrunKartiID
     * @return TicimaxStructSelectIlgiliUrun
     */
    public function __construct($_uyeKodu = NULL,$_urunKartiID = NULL,$_ilgiliUrunKartiID = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'UrunKartiID'=>$_urunKartiID,'IlgiliUrunKartiID'=>$_ilgiliUrunKartiID),false);
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
     * Get IlgiliUrunKartiID value
     * @return int|null
     */
    public function getIlgiliUrunKartiID()
    {
        return $this->IlgiliUrunKartiID;
    }
    /**
     * Set IlgiliUrunKartiID value
     * @param int $_ilgiliUrunKartiID the IlgiliUrunKartiID
     * @return int
     */
    public function setIlgiliUrunKartiID($_ilgiliUrunKartiID)
    {
        return ($this->IlgiliUrunKartiID = $_ilgiliUrunKartiID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectIlgiliUrun
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
