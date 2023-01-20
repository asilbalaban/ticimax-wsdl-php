<?php
/**
 * File for class TicimaxStructKategori
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructKategori originally named Kategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructKategori extends TicimaxWsdlClass
{
    /**
     * The Aktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Aktif;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The Icerik
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Icerik;
    /**
     * The KategoriMenuGoster
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $KategoriMenuGoster;
    /**
     * The Kod
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Kod;
    /**
     * The PID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $PID;
    /**
     * The SeoAnahtarKelime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoAnahtarKelime;
    /**
     * The SeoSayfaAciklama
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoSayfaAciklama;
    /**
     * The SeoSayfaBaslik
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoSayfaBaslik;
    /**
     * The Sira
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Sira;
    /**
     * The Tanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Tanim;
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Url;
    /**
     * Constructor method for Kategori
     * @see parent::__construct()
     * @param boolean $_aktif
     * @param int $_iD
     * @param string $_icerik
     * @param boolean $_kategoriMenuGoster
     * @param string $_kod
     * @param int $_pID
     * @param string $_seoAnahtarKelime
     * @param string $_seoSayfaAciklama
     * @param string $_seoSayfaBaslik
     * @param int $_sira
     * @param string $_tanim
     * @param string $_url
     * @return TicimaxStructKategori
     */
    public function __construct($_aktif = NULL,$_iD = NULL,$_icerik = NULL,$_kategoriMenuGoster = NULL,$_kod = NULL,$_pID = NULL,$_seoAnahtarKelime = NULL,$_seoSayfaAciklama = NULL,$_seoSayfaBaslik = NULL,$_sira = NULL,$_tanim = NULL,$_url = NULL)
    {
        parent::__construct(array('Aktif'=>$_aktif,'ID'=>$_iD,'Icerik'=>$_icerik,'KategoriMenuGoster'=>$_kategoriMenuGoster,'Kod'=>$_kod,'PID'=>$_pID,'SeoAnahtarKelime'=>$_seoAnahtarKelime,'SeoSayfaAciklama'=>$_seoSayfaAciklama,'SeoSayfaBaslik'=>$_seoSayfaBaslik,'Sira'=>$_sira,'Tanim'=>$_tanim,'Url'=>$_url),false);
    }
    /**
     * Get Aktif value
     * @return boolean|null
     */
    public function getAktif()
    {
        return $this->Aktif;
    }
    /**
     * Set Aktif value
     * @param boolean $_aktif the Aktif
     * @return boolean
     */
    public function setAktif($_aktif)
    {
        return ($this->Aktif = $_aktif);
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
     * Get Icerik value
     * @return string|null
     */
    public function getIcerik()
    {
        return $this->Icerik;
    }
    /**
     * Set Icerik value
     * @param string $_icerik the Icerik
     * @return string
     */
    public function setIcerik($_icerik)
    {
        return ($this->Icerik = $_icerik);
    }
    /**
     * Get KategoriMenuGoster value
     * @return boolean|null
     */
    public function getKategoriMenuGoster()
    {
        return $this->KategoriMenuGoster;
    }
    /**
     * Set KategoriMenuGoster value
     * @param boolean $_kategoriMenuGoster the KategoriMenuGoster
     * @return boolean
     */
    public function setKategoriMenuGoster($_kategoriMenuGoster)
    {
        return ($this->KategoriMenuGoster = $_kategoriMenuGoster);
    }
    /**
     * Get Kod value
     * @return string|null
     */
    public function getKod()
    {
        return $this->Kod;
    }
    /**
     * Set Kod value
     * @param string $_kod the Kod
     * @return string
     */
    public function setKod($_kod)
    {
        return ($this->Kod = $_kod);
    }
    /**
     * Get PID value
     * @return int|null
     */
    public function getPID()
    {
        return $this->PID;
    }
    /**
     * Set PID value
     * @param int $_pID the PID
     * @return int
     */
    public function setPID($_pID)
    {
        return ($this->PID = $_pID);
    }
    /**
     * Get SeoAnahtarKelime value
     * @return string|null
     */
    public function getSeoAnahtarKelime()
    {
        return $this->SeoAnahtarKelime;
    }
    /**
     * Set SeoAnahtarKelime value
     * @param string $_seoAnahtarKelime the SeoAnahtarKelime
     * @return string
     */
    public function setSeoAnahtarKelime($_seoAnahtarKelime)
    {
        return ($this->SeoAnahtarKelime = $_seoAnahtarKelime);
    }
    /**
     * Get SeoSayfaAciklama value
     * @return string|null
     */
    public function getSeoSayfaAciklama()
    {
        return $this->SeoSayfaAciklama;
    }
    /**
     * Set SeoSayfaAciklama value
     * @param string $_seoSayfaAciklama the SeoSayfaAciklama
     * @return string
     */
    public function setSeoSayfaAciklama($_seoSayfaAciklama)
    {
        return ($this->SeoSayfaAciklama = $_seoSayfaAciklama);
    }
    /**
     * Get SeoSayfaBaslik value
     * @return string|null
     */
    public function getSeoSayfaBaslik()
    {
        return $this->SeoSayfaBaslik;
    }
    /**
     * Set SeoSayfaBaslik value
     * @param string $_seoSayfaBaslik the SeoSayfaBaslik
     * @return string
     */
    public function setSeoSayfaBaslik($_seoSayfaBaslik)
    {
        return ($this->SeoSayfaBaslik = $_seoSayfaBaslik);
    }
    /**
     * Get Sira value
     * @return int|null
     */
    public function getSira()
    {
        return $this->Sira;
    }
    /**
     * Set Sira value
     * @param int $_sira the Sira
     * @return int
     */
    public function setSira($_sira)
    {
        return ($this->Sira = $_sira);
    }
    /**
     * Get Tanim value
     * @return string|null
     */
    public function getTanim()
    {
        return $this->Tanim;
    }
    /**
     * Set Tanim value
     * @param string $_tanim the Tanim
     * @return string
     */
    public function setTanim($_tanim)
    {
        return ($this->Tanim = $_tanim);
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $_url the Url
     * @return string
     */
    public function setUrl($_url)
    {
        return ($this->Url = $_url);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructKategori
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
