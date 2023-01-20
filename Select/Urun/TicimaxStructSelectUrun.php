<?php
/**
 * File for class TicimaxStructSelectUrun
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrun originally named SelectUrun
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrun extends TicimaxWsdlClass
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
     * The f
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunFiltre
     */
    public $f;
    /**
     * The s
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUrunSayfalama
     */
    public $s;
    /**
     * Constructor method for SelectUrun
     * @see parent::__construct()
     * @param string $_uyeKodu
     * @param TicimaxStructUrunFiltre $_f
     * @param TicimaxStructUrunSayfalama $_s
     * @return TicimaxStructSelectUrun
     */
    public function __construct($_uyeKodu = NULL,$_f = NULL,$_s = NULL)
    {
        parent::__construct(array('UyeKodu'=>$_uyeKodu,'f'=>$_f,'s'=>$_s),false);
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
     * Get f value
     * @return TicimaxStructUrunFiltre|null
     */
    public function getF()
    {
        return $this->f;
    }
    /**
     * Set f value
     * @param TicimaxStructUrunFiltre $_f the f
     * @return TicimaxStructUrunFiltre
     */
    public function setF($_f)
    {
        return ($this->f = $_f);
    }
    /**
     * Get s value
     * @return TicimaxStructUrunSayfalama|null
     */
    public function getS()
    {
        return $this->s;
    }
    /**
     * Set s value
     * @param TicimaxStructUrunSayfalama $_s the s
     * @return TicimaxStructUrunSayfalama
     */
    public function setS($_s)
    {
        return ($this->s = $_s);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrun
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
