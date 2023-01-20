<?php
/**
 * File for class TicimaxStructGetTaksitSecenekleri
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructGetTaksitSecenekleri originally named GetTaksitSecenekleri
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructGetTaksitSecenekleri extends TicimaxWsdlClass
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
     * The Tutar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $Tutar;
    /**
     * The MaximumTaksitSayisi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $MaximumTaksitSayisi;
    /**
     * The DovizKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $DovizKodu;
    /**
     * Constructor method for GetTaksitSecenekleri
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param double $_tutar
     * @param int $_maximumTaksitSayisi
     * @param string $_dovizKodu
     * @return TicimaxStructGetTaksitSecenekleri
     */
    public function __construct($_uyeKodu = NULL,$_tutar = NULL,$_maximumTaksitSayisi = NULL,$_dovizKodu = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'Tutar'=>$_tutar,'MaximumTaksitSayisi'=>$_maximumTaksitSayisi,'DovizKodu'=>$_dovizKodu),false);
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
     * Get Tutar value
     * @return double|null
     */
    public function getTutar()
    {
        return $this->Tutar;
    }
    /**
     * Set Tutar value
     * @param double $_tutar the Tutar
     * @return double
     */
    public function setTutar($_tutar)
    {
        return ($this->Tutar = $_tutar);
    }
    /**
     * Get MaximumTaksitSayisi value
     * @return int|null
     */
    public function getMaximumTaksitSayisi()
    {
        return $this->MaximumTaksitSayisi;
    }
    /**
     * Set MaximumTaksitSayisi value
     * @param int $_maximumTaksitSayisi the MaximumTaksitSayisi
     * @return int
     */
    public function setMaximumTaksitSayisi($_maximumTaksitSayisi)
    {
        return ($this->MaximumTaksitSayisi = $_maximumTaksitSayisi);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructGetTaksitSecenekleri
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
