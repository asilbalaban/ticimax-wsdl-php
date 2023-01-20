<?php
/**
 * File for class TicimaxStructSaveUrunResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveUrunResponse originally named SaveUrunResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveUrunResponse extends TicimaxWsdlClass
{
    /**
     * The SaveUrunResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveUrunResult;
    /**
     * The urunKartlari
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKarti
     */
    public $urunKartlari;
    /**
     * Constructor method for SaveUrunResponse
     * @see parent::__construct()
     * @param int $_saveUrunResult
     * @param TicimaxStructArrayOfUrunKarti $_urunKartlari
     * @return TicimaxStructSaveUrunResponse
     */
    public function __construct($_saveUrunResult = NULL,$_urunKartlari = NULL)
    {
        parent::__construct(array('SaveUrunResult'=>$_saveUrunResult,'urunKartlari'=>($_urunKartlari instanceof TicimaxStructArrayOfUrunKarti)?$_urunKartlari:new TicimaxStructArrayOfUrunKarti($_urunKartlari)),false);
    }
    /**
     * Get SaveUrunResult value
     * @return int|null
     */
    public function getSaveUrunResult()
    {
        return $this->SaveUrunResult;
    }
    /**
     * Set SaveUrunResult value
     * @param int $_saveUrunResult the SaveUrunResult
     * @return int
     */
    public function setSaveUrunResult($_saveUrunResult)
    {
        return ($this->SaveUrunResult = $_saveUrunResult);
    }
    /**
     * Get urunKartlari value
     * @return TicimaxStructArrayOfUrunKarti|null
     */
    public function getUrunKartlari()
    {
        return $this->urunKartlari;
    }
    /**
     * Set urunKartlari value
     * @param TicimaxStructArrayOfUrunKarti $_urunKartlari the urunKartlari
     * @return TicimaxStructArrayOfUrunKarti
     */
    public function setUrunKartlari($_urunKartlari)
    {
        return ($this->urunKartlari = $_urunKartlari);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveUrunResponse
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
