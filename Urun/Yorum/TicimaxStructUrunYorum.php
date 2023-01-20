<?php
/**
 * File for class TicimaxStructUrunYorum
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunYorum originally named UrunYorum
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunYorum extends TicimaxWsdlClass
{
    /**
     * The EklemeTarihi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $EklemeTarihi;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The Isim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Isim;
    /**
     * The Mail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Mail;
    /**
     * The Mesaj
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Mesaj;
    /**
     * The UrunAdi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UrunAdi;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * The UyeID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UyeID;
    /**
     * Constructor method for UrunYorum
     * @see parent::__construct()
     * @param dateTime $_eklemeTarihi
     * @param int $_iD
     * @param string $_isim
     * @param string $_mail
     * @param string $_mesaj
     * @param string $_urunAdi
     * @param int $_urunKartiID
     * @param int $_uyeID
     * @return TicimaxStructUrunYorum
     */
    public function __construct($_eklemeTarihi = NULL,$_iD = NULL,$_isim = NULL,$_mail = NULL,$_mesaj = NULL,$_urunAdi = NULL,$_urunKartiID = NULL,$_uyeID = NULL)
    {
        parent::__construct(array('EklemeTarihi'=>$_eklemeTarihi,'ID'=>$_iD,'Isim'=>$_isim,'Mail'=>$_mail,'Mesaj'=>$_mesaj,'UrunAdi'=>$_urunAdi,'UrunKartiID'=>$_urunKartiID,'UyeID'=>$_uyeID),false);
    }
    /**
     * Get EklemeTarihi value
     * @return dateTime|null
     */
    public function getEklemeTarihi()
    {
        return $this->EklemeTarihi;
    }
    /**
     * Set EklemeTarihi value
     * @param dateTime $_eklemeTarihi the EklemeTarihi
     * @return dateTime
     */
    public function setEklemeTarihi($_eklemeTarihi)
    {
        return ($this->EklemeTarihi = $_eklemeTarihi);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $_iD the ID
     * @return int
     */
    public function setID($_iD)
    {
        return ($this->ID = $_iD);
    }
    /**
     * Get Isim value
     * @return string|null
     */
    public function getIsim()
    {
        return $this->Isim;
    }
    /**
     * Set Isim value
     * @param string $_isim the Isim
     * @return string
     */
    public function setIsim($_isim)
    {
        return ($this->Isim = $_isim);
    }
    /**
     * Get Mail value
     * @return string|null
     */
    public function getMail()
    {
        return $this->Mail;
    }
    /**
     * Set Mail value
     * @param string $_mail the Mail
     * @return string
     */
    public function setMail($_mail)
    {
        return ($this->Mail = $_mail);
    }
    /**
     * Get Mesaj value
     * @return string|null
     */
    public function getMesaj()
    {
        return $this->Mesaj;
    }
    /**
     * Set Mesaj value
     * @param string $_mesaj the Mesaj
     * @return string
     */
    public function setMesaj($_mesaj)
    {
        return ($this->Mesaj = $_mesaj);
    }
    /**
     * Get UrunAdi value
     * @return string|null
     */
    public function getUrunAdi()
    {
        return $this->UrunAdi;
    }
    /**
     * Set UrunAdi value
     * @param string $_urunAdi the UrunAdi
     * @return string
     */
    public function setUrunAdi($_urunAdi)
    {
        return ($this->UrunAdi = $_urunAdi);
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
     * Get UyeID value
     * @return int|null
     */
    public function getUyeID()
    {
        return $this->UyeID;
    }
    /**
     * Set UyeID value
     * @param int $_uyeID the UyeID
     * @return int
     */
    public function setUyeID($_uyeID)
    {
        return ($this->UyeID = $_uyeID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunYorum
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
