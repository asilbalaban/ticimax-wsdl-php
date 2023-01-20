<?php
/**
 * File for class TicimaxStructUpdateUrlRequest
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateUrlRequest originally named UpdateUrlRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateUrlRequest extends TicimaxWsdlClass
{
    /**
     * The Dil
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Dil;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The Tip
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var TicimaxEnumUrlType
     */
    public $Tip;
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Url;
    /**
     * Constructor method for UpdateUrlRequest
     * @see parent::__construct()
     * @param string $_dil
     * @param int $_iD
     * @param TicimaxEnumUrlType $_tip
     * @param string $_url
     * @return TicimaxStructUpdateUrlRequest
     */
    public function __construct($_dil = NULL,$_iD = NULL,$_tip = NULL,$_url = NULL)
    {
        parent::__construct(array('Dil'=>$_dil,'ID'=>$_iD,'Tip'=>$_tip,'Url'=>$_url),false);
    }
    /**
     * Get Dil value
     * @return string|null
     */
    public function getDil()
    {
        return $this->Dil;
    }
    /**
     * Set Dil value
     * @param string $_dil the Dil
     * @return string
     */
    public function setDil($_dil)
    {
        return ($this->Dil = $_dil);
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
     * Get Tip value
     * @return TicimaxEnumUrlType|null
     */
    public function getTip()
    {
        return $this->Tip;
    }
    /**
     * Set Tip value
     * @uses TicimaxEnumUrlType::valueIsValid()
     * @param TicimaxEnumUrlType $_tip the Tip
     * @return TicimaxEnumUrlType
     */
    public function setTip($_tip)
    {
        if(!TicimaxEnumUrlType::valueIsValid($_tip))
        {
            return false;
        }
        return ($this->Tip = $_tip);
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
     * @return TicimaxStructUpdateUrlRequest
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
