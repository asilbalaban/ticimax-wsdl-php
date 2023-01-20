<?php
/**
 * File for class TicimaxStructUpdateTeknikDetayDegerDilRequest
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateTeknikDetayDegerDilRequest originally named UpdateTeknikDetayDegerDilRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateTeknikDetayDegerDilRequest extends TicimaxWsdlClass
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
     * The Liste
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfTeknikDetayDegerDil
     */
    public $Liste;
    /**
     * Constructor method for UpdateTeknikDetayDegerDilRequest
     * @see parent::__construct()
     * @param string $_dil
     * @param TicimaxStructArrayOfTeknikDetayDegerDil $_liste
     * @return TicimaxStructUpdateTeknikDetayDegerDilRequest
     */
    public function __construct($_dil = NULL,$_liste = NULL)
    {
        parent::__construct(array('Dil'=>$_dil,'Liste'=>($_liste instanceof TicimaxStructArrayOfTeknikDetayDegerDil)?$_liste:new TicimaxStructArrayOfTeknikDetayDegerDil($_liste)),false);
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
     * Get Liste value
     * @return TicimaxStructArrayOfTeknikDetayDegerDil|null
     */
    public function getListe()
    {
        return $this->Liste;
    }
    /**
     * Set Liste value
     * @param TicimaxStructArrayOfTeknikDetayDegerDil $_liste the Liste
     * @return TicimaxStructArrayOfTeknikDetayDegerDil
     */
    public function setListe($_liste)
    {
        return ($this->Liste = $_liste);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUpdateTeknikDetayDegerDilRequest
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
