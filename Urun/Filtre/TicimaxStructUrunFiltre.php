<?php
/**
 * File for class TicimaxStructUrunFiltre
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunFiltre originally named UrunFiltre
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunFiltre extends TicimaxWsdlClass
{
    /**
     * The Aktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Aktif;
    /**
     * The Barkod
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Barkod;
    /**
     * The Dil
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Dil;
    /**
     * The EklemeTarihiBaslangic
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $EklemeTarihiBaslangic;
    /**
     * The EklemeTarihiBitis
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $EklemeTarihiBitis;
    /**
     * The EntegrasyonDegerTanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $EntegrasyonDegerTanim;
    /**
     * The EntegrasyonKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $EntegrasyonKodu;
    /**
     * The Firsat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Firsat;
    /**
     * The Indirimli
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Indirimli;
    /**
     * The KasaOnuFirsatlari
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $KasaOnuFirsatlari;
    /**
     * The KategoriID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $KategoriID;
    /**
     * The KategoriIDList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfint
     */
    public $KategoriIDList;
    /**
     * The MarkaID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $MarkaID;
    /**
     * The MarketPlaceAktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var boolean
     */
    public $MarketPlaceAktif;
    /**
     * The MarketPlaceAktif2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var boolean
     */
    public $MarketPlaceAktif2;
    /**
     * The MarketPlaceAktif3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var boolean
     */
    public $MarketPlaceAktif3;
    /**
     * The StokKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $StokKodu;
    /**
     * The TedarikciID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $TedarikciID;
    /**
     * The ToplamStokAdediBas
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var double
     */
    public $ToplamStokAdediBas;
    /**
     * The ToplamStokAdediSon
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var double
     */
    public $ToplamStokAdediSon;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * The Vitrin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Vitrin;
    /**
     * Constructor method for UrunFiltre
     * @see parent::__construct()
     * @param int $_aktif
     * @param string $_barkod
     * @param string $_dil
     * @param dateTime $_eklemeTarihiBaslangic
     * @param dateTime $_eklemeTarihiBitis
     * @param string $_entegrasyonDegerTanim
     * @param string $_entegrasyonKodu
     * @param int $_firsat
     * @param int $_indirimli
     * @param int $_kasaOnuFirsatlari
     * @param int $_kategoriID
     * @param TicimaxStructArrayOfint $_kategoriIDList
     * @param int $_markaID
     * @param boolean $_marketPlaceAktif
     * @param boolean $_marketPlaceAktif2
     * @param boolean $_marketPlaceAktif3
     * @param string $_stokKodu
     * @param int $_tedarikciID
     * @param double $_toplamStokAdediBas
     * @param double $_toplamStokAdediSon
     * @param int $_urunKartiID
     * @param int $_vitrin
     * @return TicimaxStructUrunFiltre
     */
    public function __construct($_aktif = NULL,$_barkod = NULL,$_dil = NULL,$_eklemeTarihiBaslangic = NULL,$_eklemeTarihiBitis = NULL,$_entegrasyonDegerTanim = NULL,$_entegrasyonKodu = NULL,$_firsat = NULL,$_indirimli = NULL,$_kasaOnuFirsatlari = NULL,$_kategoriID = NULL,$_kategoriIDList = NULL,$_markaID = NULL,$_marketPlaceAktif = NULL,$_marketPlaceAktif2 = NULL,$_marketPlaceAktif3 = NULL,$_stokKodu = NULL,$_tedarikciID = NULL,$_toplamStokAdediBas = NULL,$_toplamStokAdediSon = NULL,$_urunKartiID = NULL,$_vitrin = NULL)
    {
        parent::__construct(array('Aktif'=>$_aktif,'Barkod'=>$_barkod,'Dil'=>$_dil,'EklemeTarihiBaslangic'=>$_eklemeTarihiBaslangic,'EklemeTarihiBitis'=>$_eklemeTarihiBitis,'EntegrasyonDegerTanim'=>$_entegrasyonDegerTanim,'EntegrasyonKodu'=>$_entegrasyonKodu,'Firsat'=>$_firsat,'Indirimli'=>$_indirimli,'KasaOnuFirsatlari'=>$_kasaOnuFirsatlari,'KategoriID'=>$_kategoriID,'KategoriIDList'=>($_kategoriIDList instanceof TicimaxStructArrayOfint)?$_kategoriIDList:new TicimaxStructArrayOfint($_kategoriIDList),'MarkaID'=>$_markaID,'MarketPlaceAktif'=>$_marketPlaceAktif,'MarketPlaceAktif2'=>$_marketPlaceAktif2,'MarketPlaceAktif3'=>$_marketPlaceAktif3,'StokKodu'=>$_stokKodu,'TedarikciID'=>$_tedarikciID,'ToplamStokAdediBas'=>$_toplamStokAdediBas,'ToplamStokAdediSon'=>$_toplamStokAdediSon,'UrunKartiID'=>$_urunKartiID,'Vitrin'=>$_vitrin),false);
    }
    /**
     * Get Aktif value
     * @return int|null
     */
    public function getAktif()
    {
        return $this->Aktif;
    }
    /**
     * Set Aktif value
     * @param int $_aktif the Aktif
     * @return int
     */
    public function setAktif($_aktif)
    {
        return ($this->Aktif = $_aktif);
    }
    /**
     * Get Barkod value
     * @return string|null
     */
    public function getBarkod()
    {
        return $this->Barkod;
    }
    /**
     * Set Barkod value
     * @param string $_barkod the Barkod
     * @return string
     */
    public function setBarkod($_barkod)
    {
        return ($this->Barkod = $_barkod);
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
     * Get EklemeTarihiBaslangic value
     * @return dateTime|null
     */
    public function getEklemeTarihiBaslangic()
    {
        return $this->EklemeTarihiBaslangic;
    }
    /**
     * Set EklemeTarihiBaslangic value
     * @param dateTime $_eklemeTarihiBaslangic the EklemeTarihiBaslangic
     * @return dateTime
     */
    public function setEklemeTarihiBaslangic($_eklemeTarihiBaslangic)
    {
        return ($this->EklemeTarihiBaslangic = $_eklemeTarihiBaslangic);
    }
    /**
     * Get EklemeTarihiBitis value
     * @return dateTime|null
     */
    public function getEklemeTarihiBitis()
    {
        return $this->EklemeTarihiBitis;
    }
    /**
     * Set EklemeTarihiBitis value
     * @param dateTime $_eklemeTarihiBitis the EklemeTarihiBitis
     * @return dateTime
     */
    public function setEklemeTarihiBitis($_eklemeTarihiBitis)
    {
        return ($this->EklemeTarihiBitis = $_eklemeTarihiBitis);
    }
    /**
     * Get EntegrasyonDegerTanim value
     * @return string|null
     */
    public function getEntegrasyonDegerTanim()
    {
        return $this->EntegrasyonDegerTanim;
    }
    /**
     * Set EntegrasyonDegerTanim value
     * @param string $_entegrasyonDegerTanim the EntegrasyonDegerTanim
     * @return string
     */
    public function setEntegrasyonDegerTanim($_entegrasyonDegerTanim)
    {
        return ($this->EntegrasyonDegerTanim = $_entegrasyonDegerTanim);
    }
    /**
     * Get EntegrasyonKodu value
     * @return string|null
     */
    public function getEntegrasyonKodu()
    {
        return $this->EntegrasyonKodu;
    }
    /**
     * Set EntegrasyonKodu value
     * @param string $_entegrasyonKodu the EntegrasyonKodu
     * @return string
     */
    public function setEntegrasyonKodu($_entegrasyonKodu)
    {
        return ($this->EntegrasyonKodu = $_entegrasyonKodu);
    }
    /**
     * Get Firsat value
     * @return int|null
     */
    public function getFirsat()
    {
        return $this->Firsat;
    }
    /**
     * Set Firsat value
     * @param int $_firsat the Firsat
     * @return int
     */
    public function setFirsat($_firsat)
    {
        return ($this->Firsat = $_firsat);
    }
    /**
     * Get Indirimli value
     * @return int|null
     */
    public function getIndirimli()
    {
        return $this->Indirimli;
    }
    /**
     * Set Indirimli value
     * @param int $_indirimli the Indirimli
     * @return int
     */
    public function setIndirimli($_indirimli)
    {
        return ($this->Indirimli = $_indirimli);
    }
    /**
     * Get KasaOnuFirsatlari value
     * @return int|null
     */
    public function getKasaOnuFirsatlari()
    {
        return $this->KasaOnuFirsatlari;
    }
    /**
     * Set KasaOnuFirsatlari value
     * @param int $_kasaOnuFirsatlari the KasaOnuFirsatlari
     * @return int
     */
    public function setKasaOnuFirsatlari($_kasaOnuFirsatlari)
    {
        return ($this->KasaOnuFirsatlari = $_kasaOnuFirsatlari);
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
     * Get KategoriIDList value
     * @return TicimaxStructArrayOfint|null
     */
    public function getKategoriIDList()
    {
        return $this->KategoriIDList;
    }
    /**
     * Set KategoriIDList value
     * @param TicimaxStructArrayOfint $_kategoriIDList the KategoriIDList
     * @return TicimaxStructArrayOfint
     */
    public function setKategoriIDList($_kategoriIDList)
    {
        return ($this->KategoriIDList = $_kategoriIDList);
    }
    /**
     * Get MarkaID value
     * @return int|null
     */
    public function getMarkaID()
    {
        return $this->MarkaID;
    }
    /**
     * Set MarkaID value
     * @param int $_markaID the MarkaID
     * @return int
     */
    public function setMarkaID($_markaID)
    {
        return ($this->MarkaID = $_markaID);
    }
    /**
     * Get MarketPlaceAktif value
     * @return boolean|null
     */
    public function getMarketPlaceAktif()
    {
        return $this->MarketPlaceAktif;
    }
    /**
     * Set MarketPlaceAktif value
     * @param boolean $_marketPlaceAktif the MarketPlaceAktif
     * @return boolean
     */
    public function setMarketPlaceAktif($_marketPlaceAktif)
    {
        return ($this->MarketPlaceAktif = $_marketPlaceAktif);
    }
    /**
     * Get MarketPlaceAktif2 value
     * @return boolean|null
     */
    public function getMarketPlaceAktif2()
    {
        return $this->MarketPlaceAktif2;
    }
    /**
     * Set MarketPlaceAktif2 value
     * @param boolean $_marketPlaceAktif2 the MarketPlaceAktif2
     * @return boolean
     */
    public function setMarketPlaceAktif2($_marketPlaceAktif2)
    {
        return ($this->MarketPlaceAktif2 = $_marketPlaceAktif2);
    }
    /**
     * Get MarketPlaceAktif3 value
     * @return boolean|null
     */
    public function getMarketPlaceAktif3()
    {
        return $this->MarketPlaceAktif3;
    }
    /**
     * Set MarketPlaceAktif3 value
     * @param boolean $_marketPlaceAktif3 the MarketPlaceAktif3
     * @return boolean
     */
    public function setMarketPlaceAktif3($_marketPlaceAktif3)
    {
        return ($this->MarketPlaceAktif3 = $_marketPlaceAktif3);
    }
    /**
     * Get StokKodu value
     * @return string|null
     */
    public function getStokKodu()
    {
        return $this->StokKodu;
    }
    /**
     * Set StokKodu value
     * @param string $_stokKodu the StokKodu
     * @return string
     */
    public function setStokKodu($_stokKodu)
    {
        return ($this->StokKodu = $_stokKodu);
    }
    /**
     * Get TedarikciID value
     * @return int|null
     */
    public function getTedarikciID()
    {
        return $this->TedarikciID;
    }
    /**
     * Set TedarikciID value
     * @param int $_tedarikciID the TedarikciID
     * @return int
     */
    public function setTedarikciID($_tedarikciID)
    {
        return ($this->TedarikciID = $_tedarikciID);
    }
    /**
     * Get ToplamStokAdediBas value
     * @return double|null
     */
    public function getToplamStokAdediBas()
    {
        return $this->ToplamStokAdediBas;
    }
    /**
     * Set ToplamStokAdediBas value
     * @param double $_toplamStokAdediBas the ToplamStokAdediBas
     * @return double
     */
    public function setToplamStokAdediBas($_toplamStokAdediBas)
    {
        return ($this->ToplamStokAdediBas = $_toplamStokAdediBas);
    }
    /**
     * Get ToplamStokAdediSon value
     * @return double|null
     */
    public function getToplamStokAdediSon()
    {
        return $this->ToplamStokAdediSon;
    }
    /**
     * Set ToplamStokAdediSon value
     * @param double $_toplamStokAdediSon the ToplamStokAdediSon
     * @return double
     */
    public function setToplamStokAdediSon($_toplamStokAdediSon)
    {
        return ($this->ToplamStokAdediSon = $_toplamStokAdediSon);
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
     * Get Vitrin value
     * @return int|null
     */
    public function getVitrin()
    {
        return $this->Vitrin;
    }
    /**
     * Set Vitrin value
     * @param int $_vitrin the Vitrin
     * @return int
     */
    public function setVitrin($_vitrin)
    {
        return ($this->Vitrin = $_vitrin);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunFiltre
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
