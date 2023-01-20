<?php
/**
 * File for class TicimaxStructUrunOdemeSecenekler
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunOdemeSecenekler originally named UrunOdemeSecenekler
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunOdemeSecenekler extends TicimaxWsdlClass
{
    /**
     * The BankaID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $BankaID;
    /**
     * The TaksitSayisi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $TaksitSayisi;
    /**
     * The TaksitTanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $TaksitTanim;
    /**
     * The TaksitTutari
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $TaksitTutari;
    /**
     * The TaksitTutariStr
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $TaksitTutariStr;
    /**
     * The ToplamTutar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $ToplamTutar;
    /**
     * The ToplamTutarStr
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ToplamTutarStr;
    /**
     * Constructor method for UrunOdemeSecenekler
     * @see parent::__construct()
     * @param int $_bankaID
     * @param int $_taksitSayisi
     * @param string $_taksitTanim
     * @param double $_taksitTutari
     * @param string $_taksitTutariStr
     * @param double $_toplamTutar
     * @param string $_toplamTutarStr
     * @return TicimaxStructUrunOdemeSecenekler
     */
    public function __construct($_bankaID = NULL,$_taksitSayisi = NULL,$_taksitTanim = NULL,$_taksitTutari = NULL,$_taksitTutariStr = NULL,$_toplamTutar = NULL,$_toplamTutarStr = NULL)
    {
        parent::__construct(array('BankaID'=>$_bankaID,'TaksitSayisi'=>$_taksitSayisi,'TaksitTanim'=>$_taksitTanim,'TaksitTutari'=>$_taksitTutari,'TaksitTutariStr'=>$_taksitTutariStr,'ToplamTutar'=>$_toplamTutar,'ToplamTutarStr'=>$_toplamTutarStr),false);
    }
    /**
     * Get BankaID value
     * @return int|null
     */
    public function getBankaID()
    {
        return $this->BankaID;
    }
    /**
     * Set BankaID value
     * @param int $_bankaID the BankaID
     * @return int
     */
    public function setBankaID($_bankaID)
    {
        return ($this->BankaID = $_bankaID);
    }
    /**
     * Get TaksitSayisi value
     * @return int|null
     */
    public function getTaksitSayisi()
    {
        return $this->TaksitSayisi;
    }
    /**
     * Set TaksitSayisi value
     * @param int $_taksitSayisi the TaksitSayisi
     * @return int
     */
    public function setTaksitSayisi($_taksitSayisi)
    {
        return ($this->TaksitSayisi = $_taksitSayisi);
    }
    /**
     * Get TaksitTanim value
     * @return string|null
     */
    public function getTaksitTanim()
    {
        return $this->TaksitTanim;
    }
    /**
     * Set TaksitTanim value
     * @param string $_taksitTanim the TaksitTanim
     * @return string
     */
    public function setTaksitTanim($_taksitTanim)
    {
        return ($this->TaksitTanim = $_taksitTanim);
    }
    /**
     * Get TaksitTutari value
     * @return double|null
     */
    public function getTaksitTutari()
    {
        return $this->TaksitTutari;
    }
    /**
     * Set TaksitTutari value
     * @param double $_taksitTutari the TaksitTutari
     * @return double
     */
    public function setTaksitTutari($_taksitTutari)
    {
        return ($this->TaksitTutari = $_taksitTutari);
    }
    /**
     * Get TaksitTutariStr value
     * @return string|null
     */
    public function getTaksitTutariStr()
    {
        return $this->TaksitTutariStr;
    }
    /**
     * Set TaksitTutariStr value
     * @param string $_taksitTutariStr the TaksitTutariStr
     * @return string
     */
    public function setTaksitTutariStr($_taksitTutariStr)
    {
        return ($this->TaksitTutariStr = $_taksitTutariStr);
    }
    /**
     * Get ToplamTutar value
     * @return double|null
     */
    public function getToplamTutar()
    {
        return $this->ToplamTutar;
    }
    /**
     * Set ToplamTutar value
     * @param double $_toplamTutar the ToplamTutar
     * @return double
     */
    public function setToplamTutar($_toplamTutar)
    {
        return ($this->ToplamTutar = $_toplamTutar);
    }
    /**
     * Get ToplamTutarStr value
     * @return string|null
     */
    public function getToplamTutarStr()
    {
        return $this->ToplamTutarStr;
    }
    /**
     * Set ToplamTutarStr value
     * @param string $_toplamTutarStr the ToplamTutarStr
     * @return string
     */
    public function setToplamTutarStr($_toplamTutarStr)
    {
        return ($this->ToplamTutarStr = $_toplamTutarStr);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunOdemeSecenekler
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
