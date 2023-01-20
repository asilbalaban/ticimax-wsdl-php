<?php
/**
 * File for class TicimaxStructUrunResimYukleRequest
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunResimYukleRequest originally named UrunResimYukleRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunResimYukleRequest extends TicimaxWsdlClass
{
    /**
     * The EslestirmeTipi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var TicimaxEnumWebUrunResimEslestirmeTipi
     */
    public $EslestirmeTipi;
    /**
     * The ResimAyraci
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ResimAyraci;
    /**
     * The Resimler
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfWebUrunResim
     */
    public $Resimler;
    /**
     * Constructor method for UrunResimYukleRequest
     * @see parent::__construct()
     * @param TicimaxEnumWebUrunResimEslestirmeTipi $_eslestirmeTipi
     * @param int $_resimAyraci
     * @param TicimaxStructArrayOfWebUrunResim $_resimler
     * @return TicimaxStructUrunResimYukleRequest
     */
    public function __construct($_eslestirmeTipi = NULL,$_resimAyraci = NULL,$_resimler = NULL)
    {
        parent::__construct(array('EslestirmeTipi'=>$_eslestirmeTipi,'ResimAyraci'=>$_resimAyraci,'Resimler'=>($_resimler instanceof TicimaxStructArrayOfWebUrunResim)?$_resimler:new TicimaxStructArrayOfWebUrunResim($_resimler)),false);
    }
    /**
     * Get EslestirmeTipi value
     * @return TicimaxEnumWebUrunResimEslestirmeTipi|null
     */
    public function getEslestirmeTipi()
    {
        return $this->EslestirmeTipi;
    }
    /**
     * Set EslestirmeTipi value
     * @uses TicimaxEnumWebUrunResimEslestirmeTipi::valueIsValid()
     * @param TicimaxEnumWebUrunResimEslestirmeTipi $_eslestirmeTipi the EslestirmeTipi
     * @return TicimaxEnumWebUrunResimEslestirmeTipi
     */
    public function setEslestirmeTipi($_eslestirmeTipi)
    {
        if(!TicimaxEnumWebUrunResimEslestirmeTipi::valueIsValid($_eslestirmeTipi))
        {
            return false;
        }
        return ($this->EslestirmeTipi = $_eslestirmeTipi);
    }
    /**
     * Get ResimAyraci value
     * @return int|null
     */
    public function getResimAyraci()
    {
        return $this->ResimAyraci;
    }
    /**
     * Set ResimAyraci value
     * @param int $_resimAyraci the ResimAyraci
     * @return int
     */
    public function setResimAyraci($_resimAyraci)
    {
        return ($this->ResimAyraci = $_resimAyraci);
    }
    /**
     * Get Resimler value
     * @return TicimaxStructArrayOfWebUrunResim|null
     */
    public function getResimler()
    {
        return $this->Resimler;
    }
    /**
     * Set Resimler value
     * @param TicimaxStructArrayOfWebUrunResim $_resimler the Resimler
     * @return TicimaxStructArrayOfWebUrunResim
     */
    public function setResimler($_resimler)
    {
        return ($this->Resimler = $_resimler);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunResimYukleRequest
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
