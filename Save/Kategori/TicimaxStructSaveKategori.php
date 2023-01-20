<?php
/**
 * File for class TicimaxStructSaveKategori
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveKategori originally named SaveKategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveKategori extends TicimaxWsdlClass
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
     * The kategori
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructKategori
     */
    public $kategori;
    /**
     * Constructor method for SaveKategori
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructKategori $_kategori
     * @return TicimaxStructSaveKategori
     */
    public function __construct($_uyeKodu = NULL,$_kategori = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'kategori'=>$_kategori),false);
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
     * Get kategori value
     * @return TicimaxStructKategori|null
     */
    public function getKategori()
    {
        return $this->kategori;
    }
    /**
     * Set kategori value
     * @param TicimaxStructKategori $_kategori the kategori
     * @return TicimaxStructKategori
     */
    public function setKategori($_kategori)
    {
        return ($this->kategori = $_kategori);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveKategori
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
