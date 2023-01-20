<?php
/**
 * File for class TicimaxStructDeleteUrunKategori
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructDeleteUrunKategori originally named DeleteUrunKategori
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructDeleteUrunKategori extends TicimaxWsdlClass
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
     * The list
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKategori
     */
    public $list;
    /**
     * Constructor method for DeleteUrunKategori
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructArrayOfUrunKategori $_list
     * @return TicimaxStructDeleteUrunKategori
     */
    public function __construct($_uyeKodu = NULL,$_list = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'list'=>($_list instanceof TicimaxStructArrayOfUrunKategori)?$_list:new TicimaxStructArrayOfUrunKategori($_list)),false);
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
     * Get list value
     * @return TicimaxStructArrayOfUrunKategori|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param TicimaxStructArrayOfUrunKategori $_list the list
     * @return TicimaxStructArrayOfUrunKategori
     */
    public function setList($_list)
    {
        return ($this->list = $_list);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructDeleteUrunKategori
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
