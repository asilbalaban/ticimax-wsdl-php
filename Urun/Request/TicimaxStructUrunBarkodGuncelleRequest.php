<?php
/**
 * File for class TicimaxStructUrunBarkodGuncelleRequest
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunBarkodGuncelleRequest originally named UrunBarkodGuncelleRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunBarkodGuncelleRequest extends TicimaxWsdlClass
{
    /**
     * The Barkodlar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfstring
     */
    public $Barkodlar;
    /**
     * The UrunID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunID;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * Constructor method for UrunBarkodGuncelleRequest
     * @see parent::__construct()
     * @param TicimaxStructArrayOfstring $_barkodlar
     * @param int $_urunID
     * @param int $_urunKartiID
     * @return TicimaxStructUrunBarkodGuncelleRequest
     */
    public function __construct($_barkodlar = NULL,$_urunID = NULL,$_urunKartiID = NULL)
    {
        parent::__construct(array('Barkodlar'=>($_barkodlar instanceof TicimaxStructArrayOfstring)?$_barkodlar:new TicimaxStructArrayOfstring($_barkodlar),'UrunID'=>$_urunID,'UrunKartiID'=>$_urunKartiID),false);
    }
    /**
     * Get Barkodlar value
     * @return TicimaxStructArrayOfstring|null
     */
    public function getBarkodlar()
    {
        return $this->Barkodlar;
    }
    /**
     * Set Barkodlar value
     * @param TicimaxStructArrayOfstring $_barkodlar the Barkodlar
     * @return TicimaxStructArrayOfstring
     */
    public function setBarkodlar($_barkodlar)
    {
        return ($this->Barkodlar = $_barkodlar);
    }
    /**
     * Get UrunID value
     * @return int|null
     */
    public function getUrunID()
    {
        return $this->UrunID;
    }
    /**
     * Set UrunID value
     * @param int $_urunID the UrunID
     * @return int
     */
    public function setUrunID($_urunID)
    {
        return ($this->UrunID = $_urunID);
    }
    /**
     * Get UrunKartiID value
     * @return int|null
     */
    public function getUrunKartiID()
    {
        return $this->UrunKartiID;
    }
    /**
     * Set UrunKartiID value
     * @param int $_urunKartiID the UrunKartiID
     * @return int
     */
    public function setUrunKartiID($_urunKartiID)
    {
        return ($this->UrunKartiID = $_urunKartiID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunBarkodGuncelleRequest
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
