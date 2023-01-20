<?php
/**
 * File for class TicimaxStructSaveKategoriParent
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveKategoriParent originally named SaveKategoriParent
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveKategoriParent extends TicimaxWsdlClass
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
     * The KategoriID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $KategoriID;
    /**
     * The ParentID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ParentID;
    /**
     * Constructor method for SaveKategoriParent
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param int $_kategoriID
     * @param int $_parentID
     * @return TicimaxStructSaveKategoriParent
     */
    public function __construct($_uyeKodu = NULL,$_kategoriID = NULL,$_parentID = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'KategoriID'=>$_kategoriID,'ParentID'=>$_parentID),false);
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
     * Get KategoriID value
     * @return int|null
     */
    public function getKategoriID()
    {
        return $this->KategoriID;
    }
    /**
     * Set KategoriID value
     * @param int $_kategoriID the KategoriID
     * @return int
     */
    public function setKategoriID($_kategoriID)
    {
        return ($this->KategoriID = $_kategoriID);
    }
    /**
     * Get ParentID value
     * @return int|null
     */
    public function getParentID()
    {
        return $this->ParentID;
    }
    /**
     * Set ParentID value
     * @param int $_parentID the ParentID
     * @return int
     */
    public function setParentID($_parentID)
    {
        return ($this->ParentID = $_parentID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveKategoriParent
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
