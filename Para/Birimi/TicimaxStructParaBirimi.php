<?php
/**
 * File for class TicimaxStructParaBirimi
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructParaBirimi originally named ParaBirimi
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructParaBirimi extends TicimaxWsdlClass
{
    /**
     * The Aktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Aktif;
    /**
     * The DovizKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $DovizKodu;
    /**
     * The GuncellemeTarihi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $GuncellemeTarihi;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The Kur
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Kur;
    /**
     * The Tanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Tanim;
    /**
     * Constructor method for ParaBirimi
     * @see parent::__construct()
     * @param boolean $_aktif
     * @param string $_dovizKodu
     * @param dateTime $_guncellemeTarihi
     * @param int $_iD
     * @param double $_kur
     * @param string $_tanim
     * @return TicimaxStructParaBirimi
     */
    public function __construct($_aktif = NULL,$_dovizKodu = NULL,$_guncellemeTarihi = NULL,$_iD = NULL,$_kur = NULL,$_tanim = NULL)
    {
        parent::__construct(array('Aktif'=>$_aktif,'DovizKodu'=>$_dovizKodu,'GuncellemeTarihi'=>$_guncellemeTarihi,'ID'=>$_iD,'Kur'=>$_kur,'Tanim'=>$_tanim),false);
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
     * Get DovizKodu value
     * @return string|null
     */
    public function getDovizKodu()
    {
        return $this->DovizKodu;
    }
    /**
     * Set DovizKodu value
     * @param string $_dovizKodu the DovizKodu
     * @return string
     */
    public function setDovizKodu($_dovizKodu)
    {
        return ($this->DovizKodu = $_dovizKodu);
    }
    /**
     * Get GuncellemeTarihi value
     * @return dateTime|null
     */
    public function getGuncellemeTarihi()
    {
        return $this->GuncellemeTarihi;
    }
    /**
     * Set GuncellemeTarihi value
     * @param dateTime $_guncellemeTarihi the GuncellemeTarihi
     * @return dateTime
     */
    public function setGuncellemeTarihi($_guncellemeTarihi)
    {
        return ($this->GuncellemeTarihi = $_guncellemeTarihi);
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
     * Get Kur value
     * @return double|null
     */
    public function getKur()
    {
        return $this->Kur;
    }
    /**
     * Set Kur value
     * @param double $_kur the Kur
     * @return double
     */
    public function setKur($_kur)
    {
        return ($this->Kur = $_kur);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructParaBirimi
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
