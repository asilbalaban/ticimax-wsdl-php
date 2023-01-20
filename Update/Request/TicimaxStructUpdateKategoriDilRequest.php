<?php
/**
 * File for class TicimaxStructUpdateKategoriDilRequest
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUpdateKategoriDilRequest originally named UpdateKategoriDilRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUpdateKategoriDilRequest extends TicimaxWsdlClass
{
    /**
     * The Ayar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructKategoriDilAyar
     */
    public $Ayar;
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
     * @var TicimaxStructArrayOfKategoriDil
     */
    public $Liste;
    /**
     * Constructor method for UpdateKategoriDilRequest
     * @see parent::__construct()
     * @param TicimaxStructKategoriDilAyar $_ayar
     * @param string $_dil
     * @param TicimaxStructArrayOfKategoriDil $_liste
     * @return TicimaxStructUpdateKategoriDilRequest
     */
    public function __construct($_ayar = NULL,$_dil = NULL,$_liste = NULL)
    {
        parent::__construct(array('Ayar'=>$_ayar,'Dil'=>$_dil,'Liste'=>($_liste instanceof TicimaxStructArrayOfKategoriDil)?$_liste:new TicimaxStructArrayOfKategoriDil($_liste)),false);
    }
    /**
     * Get Ayar value
     * @return TicimaxStructKategoriDilAyar|null
     */
    public function getAyar()
    {
        return $this->Ayar;
    }
    /**
     * Set Ayar value
     * @param TicimaxStructKategoriDilAyar $_ayar the Ayar
     * @return TicimaxStructKategoriDilAyar
     */
    public function setAyar($_ayar)
    {
        return ($this->Ayar = $_ayar);
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
     * @return TicimaxStructArrayOfKategoriDil|null
     */
    public function getListe()
    {
        return $this->Liste;
    }
    /**
     * Set Liste value
     * @param TicimaxStructArrayOfKategoriDil $_liste the Liste
     * @return TicimaxStructArrayOfKategoriDil
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
     * @return TicimaxStructUpdateKategoriDilRequest
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
