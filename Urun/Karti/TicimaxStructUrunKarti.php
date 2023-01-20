<?php
/**
 * File for class TicimaxStructUrunKarti
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunKarti originally named UrunKarti
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunKarti extends TicimaxWsdlClass
{
    /**
     * The Aciklama
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Aciklama;
    /**
     * The AdwordsAciklama
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AdwordsAciklama;
    /**
     * The AdwordsKategori
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AdwordsKategori;
    /**
     * The AdwordsTip
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AdwordsTip;
    /**
     * The Aktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Aktif;
    /**
     * The AnaKategori
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AnaKategori;
    /**
     * The AnaKategoriID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $AnaKategoriID;
    /**
     * The AramaAnahtarKelime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AramaAnahtarKelime;
    /**
     * The AsortiGrupID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $AsortiGrupID;
    /**
     * The DuzenleyenKullanici
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $DuzenleyenKullanici;
    /**
     * The EklemeTarihi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $EklemeTarihi;
    /**
     * The EkleyenKullanici
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $EkleyenKullanici;
    /**
     * The EntegrasyonID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $EntegrasyonID;
    /**
     * The Etiketler
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKartiEtiket
     */
    public $Etiketler;
    /**
     * The FBStoreGoster
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $FBStoreGoster;
    /**
     * The FirsatUrunu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $FirsatUrunu;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The IndirimliFiyatOzellik
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $IndirimliFiyatOzellik;
    /**
     * The IndirimliFiyatOzellikStok1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $IndirimliFiyatOzellikStok1;
    /**
     * The IndirimliFiyatOzellikStok2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $IndirimliFiyatOzellikStok2;
    /**
     * The IndirimliFiyatOzellikTarih1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $IndirimliFiyatOzellikTarih1;
    /**
     * The IndirimliFiyatOzellikTarih2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $IndirimliFiyatOzellikTarih2;
    /**
     * The KargoTipi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $KargoTipi;
    /**
     * The Kategoriler
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfint
     */
    public $Kategoriler;
    /**
     * The MaksTaksitSayisi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $MaksTaksitSayisi;
    /**
     * The Marka
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Marka;
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
     * @var boolean
     */
    public $MarketPlaceAktif;
    /**
     * The MarketPlaceAktif2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $MarketPlaceAktif2;
    /**
     * The MarketPlaceAktif3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $MarketPlaceAktif3;
    /**
     * The MenseiUlke
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructUlke
     */
    public $MenseiUlke;
    /**
     * The OnYazi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OnYazi;
    /**
     * The OzelAlan1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OzelAlan1;
    /**
     * The OzelAlan2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OzelAlan2;
    /**
     * The OzelAlan3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OzelAlan3;
    /**
     * The OzelAlan4
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OzelAlan4;
    /**
     * The OzelAlan5
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OzelAlan5;
    /**
     * The PuanDeger
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $PuanDeger;
    /**
     * The Resimler
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfstring
     */
    public $Resimler;
    /**
     * The SatisBirimi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SatisBirimi;
    /**
     * The SeoAnahtarKelime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoAnahtarKelime;
    /**
     * The SeoNoFollow
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoNoFollow;
    /**
     * The SeoNoIndex
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $SeoNoIndex;
    /**
     * The SeoSayfaAciklama
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoSayfaAciklama;
    /**
     * The SeoSayfaBaslik
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $SeoSayfaBaslik;
    /**
     * The Sira
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Sira;
    /**
     * The TahminiTeslimSuresi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $TahminiTeslimSuresi;
    /**
     * The TedarikciID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $TedarikciID;
    /**
     * The TedarikciKodu
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $TedarikciKodu;
    /**
     * The TedarikciKodu2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $TedarikciKodu2;
    /**
     * The TeknikDetayGrupID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $TeknikDetayGrupID;
    /**
     * The TeknikDetaylar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKartiTeknikDetay
     */
    public $TeknikDetaylar;
    /**
     * The ToplamStokAdedi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $ToplamStokAdedi;
    /**
     * The UcretsizKargo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $UcretsizKargo;
    /**
     * The UrunAdi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UrunAdi;
    /**
     * The UrunSayfaAdresi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UrunSayfaAdresi;
    /**
     * The UyeAlimMax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $UyeAlimMax;
    /**
     * The UyeAlimMin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $UyeAlimMin;
    /**
     * The Varyasyonlar
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfVaryasyon
     */
    public $Varyasyonlar;
    /**
     * The Vitrin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Vitrin;
    /**
     * The YeniUrun
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $YeniUrun;
    /**
     * The YonlendirmeAdresi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $YonlendirmeAdresi;
    /**
     * Constructor method for UrunKarti
     * @see parent::__construct()
     * @param string $_aciklama
     * @param string $_adwordsAciklama
     * @param string $_adwordsKategori
     * @param string $_adwordsTip
     * @param boolean $_aktif
     * @param string $_anaKategori
     * @param int $_anaKategoriID
     * @param string $_aramaAnahtarKelime
     * @param int $_asortiGrupID
     * @param int $_duzenleyenKullanici
     * @param dateTime $_eklemeTarihi
     * @param int $_ekleyenKullanici
     * @param string $_entegrasyonID
     * @param TicimaxStructArrayOfUrunKartiEtiket $_etiketler
     * @param boolean $_fBStoreGoster
     * @param boolean $_firsatUrunu
     * @param int $_iD
     * @param int $_indirimliFiyatOzellik
     * @param int $_indirimliFiyatOzellikStok1
     * @param int $_indirimliFiyatOzellikStok2
     * @param dateTime $_indirimliFiyatOzellikTarih1
     * @param dateTime $_indirimliFiyatOzellikTarih2
     * @param int $_kargoTipi
     * @param TicimaxStructArrayOfint $_kategoriler
     * @param int $_maksTaksitSayisi
     * @param string $_marka
     * @param int $_markaID
     * @param boolean $_marketPlaceAktif
     * @param boolean $_marketPlaceAktif2
     * @param boolean $_marketPlaceAktif3
     * @param TicimaxStructUlke $_menseiUlke
     * @param string $_onYazi
     * @param string $_ozelAlan1
     * @param string $_ozelAlan2
     * @param string $_ozelAlan3
     * @param string $_ozelAlan4
     * @param string $_ozelAlan5
     * @param int $_puanDeger
     * @param TicimaxStructArrayOfstring $_resimler
     * @param string $_satisBirimi
     * @param string $_seoAnahtarKelime
     * @param boolean $_seoNoFollow
     * @param boolean $_seoNoIndex
     * @param string $_seoSayfaAciklama
     * @param string $_seoSayfaBaslik
     * @param int $_sira
     * @param int $_tahminiTeslimSuresi
     * @param int $_tedarikciID
     * @param string $_tedarikciKodu
     * @param string $_tedarikciKodu2
     * @param int $_teknikDetayGrupID
     * @param TicimaxStructArrayOfUrunKartiTeknikDetay $_teknikDetaylar
     * @param double $_toplamStokAdedi
     * @param boolean $_ucretsizKargo
     * @param string $_urunAdi
     * @param string $_urunSayfaAdresi
     * @param double $_uyeAlimMax
     * @param double $_uyeAlimMin
     * @param TicimaxStructArrayOfVaryasyon $_varyasyonlar
     * @param boolean $_vitrin
     * @param boolean $_yeniUrun
     * @param string $_yonlendirmeAdresi
     * @return TicimaxStructUrunKarti
     */
    public function __construct($_aciklama = NULL,$_adwordsAciklama = NULL,$_adwordsKategori = NULL,$_adwordsTip = NULL,$_aktif = NULL,$_anaKategori = NULL,$_anaKategoriID = NULL,$_aramaAnahtarKelime = NULL,$_asortiGrupID = NULL,$_duzenleyenKullanici = NULL,$_eklemeTarihi = NULL,$_ekleyenKullanici = NULL,$_entegrasyonID = NULL,$_etiketler = NULL,$_fBStoreGoster = NULL,$_firsatUrunu = NULL,$_iD = NULL,$_indirimliFiyatOzellik = NULL,$_indirimliFiyatOzellikStok1 = NULL,$_indirimliFiyatOzellikStok2 = NULL,$_indirimliFiyatOzellikTarih1 = NULL,$_indirimliFiyatOzellikTarih2 = NULL,$_kargoTipi = NULL,$_kategoriler = NULL,$_maksTaksitSayisi = NULL,$_marka = NULL,$_markaID = NULL,$_marketPlaceAktif = NULL,$_marketPlaceAktif2 = NULL,$_marketPlaceAktif3 = NULL,$_menseiUlke = NULL,$_onYazi = NULL,$_ozelAlan1 = NULL,$_ozelAlan2 = NULL,$_ozelAlan3 = NULL,$_ozelAlan4 = NULL,$_ozelAlan5 = NULL,$_puanDeger = NULL,$_resimler = NULL,$_satisBirimi = NULL,$_seoAnahtarKelime = NULL,$_seoNoFollow = NULL,$_seoNoIndex = NULL,$_seoSayfaAciklama = NULL,$_seoSayfaBaslik = NULL,$_sira = NULL,$_tahminiTeslimSuresi = NULL,$_tedarikciID = NULL,$_tedarikciKodu = NULL,$_tedarikciKodu2 = NULL,$_teknikDetayGrupID = NULL,$_teknikDetaylar = NULL,$_toplamStokAdedi = NULL,$_ucretsizKargo = NULL,$_urunAdi = NULL,$_urunSayfaAdresi = NULL,$_uyeAlimMax = NULL,$_uyeAlimMin = NULL,$_varyasyonlar = NULL,$_vitrin = NULL,$_yeniUrun = NULL,$_yonlendirmeAdresi = NULL)
    {
        parent::__construct(array('Aciklama'=>$_aciklama,'AdwordsAciklama'=>$_adwordsAciklama,'AdwordsKategori'=>$_adwordsKategori,'AdwordsTip'=>$_adwordsTip,'Aktif'=>$_aktif,'AnaKategori'=>$_anaKategori,'AnaKategoriID'=>$_anaKategoriID,'AramaAnahtarKelime'=>$_aramaAnahtarKelime,'AsortiGrupID'=>$_asortiGrupID,'DuzenleyenKullanici'=>$_duzenleyenKullanici,'EklemeTarihi'=>$_eklemeTarihi,'EkleyenKullanici'=>$_ekleyenKullanici,'EntegrasyonID'=>$_entegrasyonID,'Etiketler'=>($_etiketler instanceof TicimaxStructArrayOfUrunKartiEtiket)?$_etiketler:new TicimaxStructArrayOfUrunKartiEtiket($_etiketler),'FBStoreGoster'=>$_fBStoreGoster,'FirsatUrunu'=>$_firsatUrunu,'ID'=>$_iD,'IndirimliFiyatOzellik'=>$_indirimliFiyatOzellik,'IndirimliFiyatOzellikStok1'=>$_indirimliFiyatOzellikStok1,'IndirimliFiyatOzellikStok2'=>$_indirimliFiyatOzellikStok2,'IndirimliFiyatOzellikTarih1'=>$_indirimliFiyatOzellikTarih1,'IndirimliFiyatOzellikTarih2'=>$_indirimliFiyatOzellikTarih2,'KargoTipi'=>$_kargoTipi,'Kategoriler'=>($_kategoriler instanceof TicimaxStructArrayOfint)?$_kategoriler:new TicimaxStructArrayOfint($_kategoriler),'MaksTaksitSayisi'=>$_maksTaksitSayisi,'Marka'=>$_marka,'MarkaID'=>$_markaID,'MarketPlaceAktif'=>$_marketPlaceAktif,'MarketPlaceAktif2'=>$_marketPlaceAktif2,'MarketPlaceAktif3'=>$_marketPlaceAktif3,'MenseiUlke'=>$_menseiUlke,'OnYazi'=>$_onYazi,'OzelAlan1'=>$_ozelAlan1,'OzelAlan2'=>$_ozelAlan2,'OzelAlan3'=>$_ozelAlan3,'OzelAlan4'=>$_ozelAlan4,'OzelAlan5'=>$_ozelAlan5,'PuanDeger'=>$_puanDeger,'Resimler'=>($_resimler instanceof TicimaxStructArrayOfstring)?$_resimler:new TicimaxStructArrayOfstring($_resimler),'SatisBirimi'=>$_satisBirimi,'SeoAnahtarKelime'=>$_seoAnahtarKelime,'SeoNoFollow'=>$_seoNoFollow,'SeoNoIndex'=>$_seoNoIndex,'SeoSayfaAciklama'=>$_seoSayfaAciklama,'SeoSayfaBaslik'=>$_seoSayfaBaslik,'Sira'=>$_sira,'TahminiTeslimSuresi'=>$_tahminiTeslimSuresi,'TedarikciID'=>$_tedarikciID,'TedarikciKodu'=>$_tedarikciKodu,'TedarikciKodu2'=>$_tedarikciKodu2,'TeknikDetayGrupID'=>$_teknikDetayGrupID,'TeknikDetaylar'=>($_teknikDetaylar instanceof TicimaxStructArrayOfUrunKartiTeknikDetay)?$_teknikDetaylar:new TicimaxStructArrayOfUrunKartiTeknikDetay($_teknikDetaylar),'ToplamStokAdedi'=>$_toplamStokAdedi,'UcretsizKargo'=>$_ucretsizKargo,'UrunAdi'=>$_urunAdi,'UrunSayfaAdresi'=>$_urunSayfaAdresi,'UyeAlimMax'=>$_uyeAlimMax,'UyeAlimMin'=>$_uyeAlimMin,'Varyasyonlar'=>($_varyasyonlar instanceof TicimaxStructArrayOfVaryasyon)?$_varyasyonlar:new TicimaxStructArrayOfVaryasyon($_varyasyonlar),'Vitrin'=>$_vitrin,'YeniUrun'=>$_yeniUrun,'YonlendirmeAdresi'=>$_yonlendirmeAdresi),false);
    }
    /**
     * Get Aciklama value
     * @return string|null
     */
    public function getAciklama()
    {
        return $this->Aciklama;
    }
    /**
     * Set Aciklama value
     * @param string $_aciklama the Aciklama
     * @return string
     */
    public function setAciklama($_aciklama)
    {
        return ($this->Aciklama = $_aciklama);
    }
    /**
     * Get AdwordsAciklama value
     * @return string|null
     */
    public function getAdwordsAciklama()
    {
        return $this->AdwordsAciklama;
    }
    /**
     * Set AdwordsAciklama value
     * @param string $_adwordsAciklama the AdwordsAciklama
     * @return string
     */
    public function setAdwordsAciklama($_adwordsAciklama)
    {
        return ($this->AdwordsAciklama = $_adwordsAciklama);
    }
    /**
     * Get AdwordsKategori value
     * @return string|null
     */
    public function getAdwordsKategori()
    {
        return $this->AdwordsKategori;
    }
    /**
     * Set AdwordsKategori value
     * @param string $_adwordsKategori the AdwordsKategori
     * @return string
     */
    public function setAdwordsKategori($_adwordsKategori)
    {
        return ($this->AdwordsKategori = $_adwordsKategori);
    }
    /**
     * Get AdwordsTip value
     * @return string|null
     */
    public function getAdwordsTip()
    {
        return $this->AdwordsTip;
    }
    /**
     * Set AdwordsTip value
     * @param string $_adwordsTip the AdwordsTip
     * @return string
     */
    public function setAdwordsTip($_adwordsTip)
    {
        return ($this->AdwordsTip = $_adwordsTip);
    }
    /**
     * Get Aktif value
     * @return boolean|null
     */
    public function getAktif()
    {
        return $this->Aktif;
    }
    /**
     * Set Aktif value
     * @param boolean $_aktif the Aktif
     * @return boolean
     */
    public function setAktif($_aktif)
    {
        return ($this->Aktif = $_aktif);
    }
    /**
     * Get AnaKategori value
     * @return string|null
     */
    public function getAnaKategori()
    {
        return $this->AnaKategori;
    }
    /**
     * Set AnaKategori value
     * @param string $_anaKategori the AnaKategori
     * @return string
     */
    public function setAnaKategori($_anaKategori)
    {
        return ($this->AnaKategori = $_anaKategori);
    }
    /**
     * Get AnaKategoriID value
     * @return int|null
     */
    public function getAnaKategoriID()
    {
        return $this->AnaKategoriID;
    }
    /**
     * Set AnaKategoriID value
     * @param int $_anaKategoriID the AnaKategoriID
     * @return int
     */
    public function setAnaKategoriID($_anaKategoriID)
    {
        return ($this->AnaKategoriID = $_anaKategoriID);
    }
    /**
     * Get AramaAnahtarKelime value
     * @return string|null
     */
    public function getAramaAnahtarKelime()
    {
        return $this->AramaAnahtarKelime;
    }
    /**
     * Set AramaAnahtarKelime value
     * @param string $_aramaAnahtarKelime the AramaAnahtarKelime
     * @return string
     */
    public function setAramaAnahtarKelime($_aramaAnahtarKelime)
    {
        return ($this->AramaAnahtarKelime = $_aramaAnahtarKelime);
    }
    /**
     * Get AsortiGrupID value
     * @return int|null
     */
    public function getAsortiGrupID()
    {
        return $this->AsortiGrupID;
    }
    /**
     * Set AsortiGrupID value
     * @param int $_asortiGrupID the AsortiGrupID
     * @return int
     */
    public function setAsortiGrupID($_asortiGrupID)
    {
        return ($this->AsortiGrupID = $_asortiGrupID);
    }
    /**
     * Get DuzenleyenKullanici value
     * @return int|null
     */
    public function getDuzenleyenKullanici()
    {
        return $this->DuzenleyenKullanici;
    }
    /**
     * Set DuzenleyenKullanici value
     * @param int $_duzenleyenKullanici the DuzenleyenKullanici
     * @return int
     */
    public function setDuzenleyenKullanici($_duzenleyenKullanici)
    {
        return ($this->DuzenleyenKullanici = $_duzenleyenKullanici);
    }
    /**
     * Get EklemeTarihi value
     * @return dateTime|null
     */
    public function getEklemeTarihi()
    {
        return $this->EklemeTarihi;
    }
    /**
     * Set EklemeTarihi value
     * @param dateTime $_eklemeTarihi the EklemeTarihi
     * @return dateTime
     */
    public function setEklemeTarihi($_eklemeTarihi)
    {
        return ($this->EklemeTarihi = $_eklemeTarihi);
    }
    /**
     * Get EkleyenKullanici value
     * @return int|null
     */
    public function getEkleyenKullanici()
    {
        return $this->EkleyenKullanici;
    }
    /**
     * Set EkleyenKullanici value
     * @param int $_ekleyenKullanici the EkleyenKullanici
     * @return int
     */
    public function setEkleyenKullanici($_ekleyenKullanici)
    {
        return ($this->EkleyenKullanici = $_ekleyenKullanici);
    }
    /**
     * Get EntegrasyonID value
     * @return string|null
     */
    public function getEntegrasyonID()
    {
        return $this->EntegrasyonID;
    }
    /**
     * Set EntegrasyonID value
     * @param string $_entegrasyonID the EntegrasyonID
     * @return string
     */
    public function setEntegrasyonID($_entegrasyonID)
    {
        return ($this->EntegrasyonID = $_entegrasyonID);
    }
    /**
     * Get Etiketler value
     * @return TicimaxStructArrayOfUrunKartiEtiket|null
     */
    public function getEtiketler()
    {
        return $this->Etiketler;
    }
    /**
     * Set Etiketler value
     * @param TicimaxStructArrayOfUrunKartiEtiket $_etiketler the Etiketler
     * @return TicimaxStructArrayOfUrunKartiEtiket
     */
    public function setEtiketler($_etiketler)
    {
        return ($this->Etiketler = $_etiketler);
    }
    /**
     * Get FBStoreGoster value
     * @return boolean|null
     */
    public function getFBStoreGoster()
    {
        return $this->FBStoreGoster;
    }
    /**
     * Set FBStoreGoster value
     * @param boolean $_fBStoreGoster the FBStoreGoster
     * @return boolean
     */
    public function setFBStoreGoster($_fBStoreGoster)
    {
        return ($this->FBStoreGoster = $_fBStoreGoster);
    }
    /**
     * Get FirsatUrunu value
     * @return boolean|null
     */
    public function getFirsatUrunu()
    {
        return $this->FirsatUrunu;
    }
    /**
     * Set FirsatUrunu value
     * @param boolean $_firsatUrunu the FirsatUrunu
     * @return boolean
     */
    public function setFirsatUrunu($_firsatUrunu)
    {
        return ($this->FirsatUrunu = $_firsatUrunu);
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
     * Get IndirimliFiyatOzellik value
     * @return int|null
     */
    public function getIndirimliFiyatOzellik()
    {
        return $this->IndirimliFiyatOzellik;
    }
    /**
     * Set IndirimliFiyatOzellik value
     * @param int $_indirimliFiyatOzellik the IndirimliFiyatOzellik
     * @return int
     */
    public function setIndirimliFiyatOzellik($_indirimliFiyatOzellik)
    {
        return ($this->IndirimliFiyatOzellik = $_indirimliFiyatOzellik);
    }
    /**
     * Get IndirimliFiyatOzellikStok1 value
     * @return int|null
     */
    public function getIndirimliFiyatOzellikStok1()
    {
        return $this->IndirimliFiyatOzellikStok1;
    }
    /**
     * Set IndirimliFiyatOzellikStok1 value
     * @param int $_indirimliFiyatOzellikStok1 the IndirimliFiyatOzellikStok1
     * @return int
     */
    public function setIndirimliFiyatOzellikStok1($_indirimliFiyatOzellikStok1)
    {
        return ($this->IndirimliFiyatOzellikStok1 = $_indirimliFiyatOzellikStok1);
    }
    /**
     * Get IndirimliFiyatOzellikStok2 value
     * @return int|null
     */
    public function getIndirimliFiyatOzellikStok2()
    {
        return $this->IndirimliFiyatOzellikStok2;
    }
    /**
     * Set IndirimliFiyatOzellikStok2 value
     * @param int $_indirimliFiyatOzellikStok2 the IndirimliFiyatOzellikStok2
     * @return int
     */
    public function setIndirimliFiyatOzellikStok2($_indirimliFiyatOzellikStok2)
    {
        return ($this->IndirimliFiyatOzellikStok2 = $_indirimliFiyatOzellikStok2);
    }
    /**
     * Get IndirimliFiyatOzellikTarih1 value
     * @return dateTime|null
     */
    public function getIndirimliFiyatOzellikTarih1()
    {
        return $this->IndirimliFiyatOzellikTarih1;
    }
    /**
     * Set IndirimliFiyatOzellikTarih1 value
     * @param dateTime $_indirimliFiyatOzellikTarih1 the IndirimliFiyatOzellikTarih1
     * @return dateTime
     */
    public function setIndirimliFiyatOzellikTarih1($_indirimliFiyatOzellikTarih1)
    {
        return ($this->IndirimliFiyatOzellikTarih1 = $_indirimliFiyatOzellikTarih1);
    }
    /**
     * Get IndirimliFiyatOzellikTarih2 value
     * @return dateTime|null
     */
    public function getIndirimliFiyatOzellikTarih2()
    {
        return $this->IndirimliFiyatOzellikTarih2;
    }
    /**
     * Set IndirimliFiyatOzellikTarih2 value
     * @param dateTime $_indirimliFiyatOzellikTarih2 the IndirimliFiyatOzellikTarih2
     * @return dateTime
     */
    public function setIndirimliFiyatOzellikTarih2($_indirimliFiyatOzellikTarih2)
    {
        return ($this->IndirimliFiyatOzellikTarih2 = $_indirimliFiyatOzellikTarih2);
    }
    /**
     * Get KargoTipi value
     * @return int|null
     */
    public function getKargoTipi()
    {
        return $this->KargoTipi;
    }
    /**
     * Set KargoTipi value
     * @param int $_kargoTipi the KargoTipi
     * @return int
     */
    public function setKargoTipi($_kargoTipi)
    {
        return ($this->KargoTipi = $_kargoTipi);
    }
    /**
     * Get Kategoriler value
     * @return TicimaxStructArrayOfint|null
     */
    public function getKategoriler()
    {
        return $this->Kategoriler;
    }
    /**
     * Set Kategoriler value
     * @param TicimaxStructArrayOfint $_kategoriler the Kategoriler
     * @return TicimaxStructArrayOfint
     */
    public function setKategoriler($_kategoriler)
    {
        return ($this->Kategoriler = $_kategoriler);
    }
    /**
     * Get MaksTaksitSayisi value
     * @return int|null
     */
    public function getMaksTaksitSayisi()
    {
        return $this->MaksTaksitSayisi;
    }
    /**
     * Set MaksTaksitSayisi value
     * @param int $_maksTaksitSayisi the MaksTaksitSayisi
     * @return int
     */
    public function setMaksTaksitSayisi($_maksTaksitSayisi)
    {
        return ($this->MaksTaksitSayisi = $_maksTaksitSayisi);
    }
    /**
     * Get Marka value
     * @return string|null
     */
    public function getMarka()
    {
        return $this->Marka;
    }
    /**
     * Set Marka value
     * @param string $_marka the Marka
     * @return string
     */
    public function setMarka($_marka)
    {
        return ($this->Marka = $_marka);
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
     * Get MenseiUlke value
     * @return TicimaxStructUlke|null
     */
    public function getMenseiUlke()
    {
        return $this->MenseiUlke;
    }
    /**
     * Set MenseiUlke value
     * @param TicimaxStructUlke $_menseiUlke the MenseiUlke
     * @return TicimaxStructUlke
     */
    public function setMenseiUlke($_menseiUlke)
    {
        return ($this->MenseiUlke = $_menseiUlke);
    }
    /**
     * Get OnYazi value
     * @return string|null
     */
    public function getOnYazi()
    {
        return $this->OnYazi;
    }
    /**
     * Set OnYazi value
     * @param string $_onYazi the OnYazi
     * @return string
     */
    public function setOnYazi($_onYazi)
    {
        return ($this->OnYazi = $_onYazi);
    }
    /**
     * Get OzelAlan1 value
     * @return string|null
     */
    public function getOzelAlan1()
    {
        return $this->OzelAlan1;
    }
    /**
     * Set OzelAlan1 value
     * @param string $_ozelAlan1 the OzelAlan1
     * @return string
     */
    public function setOzelAlan1($_ozelAlan1)
    {
        return ($this->OzelAlan1 = $_ozelAlan1);
    }
    /**
     * Get OzelAlan2 value
     * @return string|null
     */
    public function getOzelAlan2()
    {
        return $this->OzelAlan2;
    }
    /**
     * Set OzelAlan2 value
     * @param string $_ozelAlan2 the OzelAlan2
     * @return string
     */
    public function setOzelAlan2($_ozelAlan2)
    {
        return ($this->OzelAlan2 = $_ozelAlan2);
    }
    /**
     * Get OzelAlan3 value
     * @return string|null
     */
    public function getOzelAlan3()
    {
        return $this->OzelAlan3;
    }
    /**
     * Set OzelAlan3 value
     * @param string $_ozelAlan3 the OzelAlan3
     * @return string
     */
    public function setOzelAlan3($_ozelAlan3)
    {
        return ($this->OzelAlan3 = $_ozelAlan3);
    }
    /**
     * Get OzelAlan4 value
     * @return string|null
     */
    public function getOzelAlan4()
    {
        return $this->OzelAlan4;
    }
    /**
     * Set OzelAlan4 value
     * @param string $_ozelAlan4 the OzelAlan4
     * @return string
     */
    public function setOzelAlan4($_ozelAlan4)
    {
        return ($this->OzelAlan4 = $_ozelAlan4);
    }
    /**
     * Get OzelAlan5 value
     * @return string|null
     */
    public function getOzelAlan5()
    {
        return $this->OzelAlan5;
    }
    /**
     * Set OzelAlan5 value
     * @param string $_ozelAlan5 the OzelAlan5
     * @return string
     */
    public function setOzelAlan5($_ozelAlan5)
    {
        return ($this->OzelAlan5 = $_ozelAlan5);
    }
    /**
     * Get PuanDeger value
     * @return int|null
     */
    public function getPuanDeger()
    {
        return $this->PuanDeger;
    }
    /**
     * Set PuanDeger value
     * @param int $_puanDeger the PuanDeger
     * @return int
     */
    public function setPuanDeger($_puanDeger)
    {
        return ($this->PuanDeger = $_puanDeger);
    }
    /**
     * Get Resimler value
     * @return TicimaxStructArrayOfstring|null
     */
    public function getResimler()
    {
        return $this->Resimler;
    }
    /**
     * Set Resimler value
     * @param TicimaxStructArrayOfstring $_resimler the Resimler
     * @return TicimaxStructArrayOfstring
     */
    public function setResimler($_resimler)
    {
        return ($this->Resimler = $_resimler);
    }
    /**
     * Get SatisBirimi value
     * @return string|null
     */
    public function getSatisBirimi()
    {
        return $this->SatisBirimi;
    }
    /**
     * Set SatisBirimi value
     * @param string $_satisBirimi the SatisBirimi
     * @return string
     */
    public function setSatisBirimi($_satisBirimi)
    {
        return ($this->SatisBirimi = $_satisBirimi);
    }
    /**
     * Get SeoAnahtarKelime value
     * @return string|null
     */
    public function getSeoAnahtarKelime()
    {
        return $this->SeoAnahtarKelime;
    }
    /**
     * Set SeoAnahtarKelime value
     * @param string $_seoAnahtarKelime the SeoAnahtarKelime
     * @return string
     */
    public function setSeoAnahtarKelime($_seoAnahtarKelime)
    {
        return ($this->SeoAnahtarKelime = $_seoAnahtarKelime);
    }
    /**
     * Get SeoNoFollow value
     * @return boolean|null
     */
    public function getSeoNoFollow()
    {
        return $this->SeoNoFollow;
    }
    /**
     * Set SeoNoFollow value
     * @param boolean $_seoNoFollow the SeoNoFollow
     * @return boolean
     */
    public function setSeoNoFollow($_seoNoFollow)
    {
        return ($this->SeoNoFollow = $_seoNoFollow);
    }
    /**
     * Get SeoNoIndex value
     * @return boolean|null
     */
    public function getSeoNoIndex()
    {
        return $this->SeoNoIndex;
    }
    /**
     * Set SeoNoIndex value
     * @param boolean $_seoNoIndex the SeoNoIndex
     * @return boolean
     */
    public function setSeoNoIndex($_seoNoIndex)
    {
        return ($this->SeoNoIndex = $_seoNoIndex);
    }
    /**
     * Get SeoSayfaAciklama value
     * @return string|null
     */
    public function getSeoSayfaAciklama()
    {
        return $this->SeoSayfaAciklama;
    }
    /**
     * Set SeoSayfaAciklama value
     * @param string $_seoSayfaAciklama the SeoSayfaAciklama
     * @return string
     */
    public function setSeoSayfaAciklama($_seoSayfaAciklama)
    {
        return ($this->SeoSayfaAciklama = $_seoSayfaAciklama);
    }
    /**
     * Get SeoSayfaBaslik value
     * @return string|null
     */
    public function getSeoSayfaBaslik()
    {
        return $this->SeoSayfaBaslik;
    }
    /**
     * Set SeoSayfaBaslik value
     * @param string $_seoSayfaBaslik the SeoSayfaBaslik
     * @return string
     */
    public function setSeoSayfaBaslik($_seoSayfaBaslik)
    {
        return ($this->SeoSayfaBaslik = $_seoSayfaBaslik);
    }
    /**
     * Get Sira value
     * @return int|null
     */
    public function getSira()
    {
        return $this->Sira;
    }
    /**
     * Set Sira value
     * @param int $_sira the Sira
     * @return int
     */
    public function setSira($_sira)
    {
        return ($this->Sira = $_sira);
    }
    /**
     * Get TahminiTeslimSuresi value
     * @return int|null
     */
    public function getTahminiTeslimSuresi()
    {
        return $this->TahminiTeslimSuresi;
    }
    /**
     * Set TahminiTeslimSuresi value
     * @param int $_tahminiTeslimSuresi the TahminiTeslimSuresi
     * @return int
     */
    public function setTahminiTeslimSuresi($_tahminiTeslimSuresi)
    {
        return ($this->TahminiTeslimSuresi = $_tahminiTeslimSuresi);
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
     * Get TedarikciKodu value
     * @return string|null
     */
    public function getTedarikciKodu()
    {
        return $this->TedarikciKodu;
    }
    /**
     * Set TedarikciKodu value
     * @param string $_tedarikciKodu the TedarikciKodu
     * @return string
     */
    public function setTedarikciKodu($_tedarikciKodu)
    {
        return ($this->TedarikciKodu = $_tedarikciKodu);
    }
    /**
     * Get TedarikciKodu2 value
     * @return string|null
     */
    public function getTedarikciKodu2()
    {
        return $this->TedarikciKodu2;
    }
    /**
     * Set TedarikciKodu2 value
     * @param string $_tedarikciKodu2 the TedarikciKodu2
     * @return string
     */
    public function setTedarikciKodu2($_tedarikciKodu2)
    {
        return ($this->TedarikciKodu2 = $_tedarikciKodu2);
    }
    /**
     * Get TeknikDetayGrupID value
     * @return int|null
     */
    public function getTeknikDetayGrupID()
    {
        return $this->TeknikDetayGrupID;
    }
    /**
     * Set TeknikDetayGrupID value
     * @param int $_teknikDetayGrupID the TeknikDetayGrupID
     * @return int
     */
    public function setTeknikDetayGrupID($_teknikDetayGrupID)
    {
        return ($this->TeknikDetayGrupID = $_teknikDetayGrupID);
    }
    /**
     * Get TeknikDetaylar value
     * @return TicimaxStructArrayOfUrunKartiTeknikDetay|null
     */
    public function getTeknikDetaylar()
    {
        return $this->TeknikDetaylar;
    }
    /**
     * Set TeknikDetaylar value
     * @param TicimaxStructArrayOfUrunKartiTeknikDetay $_teknikDetaylar the TeknikDetaylar
     * @return TicimaxStructArrayOfUrunKartiTeknikDetay
     */
    public function setTeknikDetaylar($_teknikDetaylar)
    {
        return ($this->TeknikDetaylar = $_teknikDetaylar);
    }
    /**
     * Get ToplamStokAdedi value
     * @return double|null
     */
    public function getToplamStokAdedi()
    {
        return $this->ToplamStokAdedi;
    }
    /**
     * Set ToplamStokAdedi value
     * @param double $_toplamStokAdedi the ToplamStokAdedi
     * @return double
     */
    public function setToplamStokAdedi($_toplamStokAdedi)
    {
        return ($this->ToplamStokAdedi = $_toplamStokAdedi);
    }
    /**
     * Get UcretsizKargo value
     * @return boolean|null
     */
    public function getUcretsizKargo()
    {
        return $this->UcretsizKargo;
    }
    /**
     * Set UcretsizKargo value
     * @param boolean $_ucretsizKargo the UcretsizKargo
     * @return boolean
     */
    public function setUcretsizKargo($_ucretsizKargo)
    {
        return ($this->UcretsizKargo = $_ucretsizKargo);
    }
    /**
     * Get UrunAdi value
     * @return string|null
     */
    public function getUrunAdi()
    {
        return $this->UrunAdi;
    }
    /**
     * Set UrunAdi value
     * @param string $_urunAdi the UrunAdi
     * @return string
     */
    public function setUrunAdi($_urunAdi)
    {
        return ($this->UrunAdi = $_urunAdi);
    }
    /**
     * Get UrunSayfaAdresi value
     * @return string|null
     */
    public function getUrunSayfaAdresi()
    {
        return $this->UrunSayfaAdresi;
    }
    /**
     * Set UrunSayfaAdresi value
     * @param string $_urunSayfaAdresi the UrunSayfaAdresi
     * @return string
     */
    public function setUrunSayfaAdresi($_urunSayfaAdresi)
    {
        return ($this->UrunSayfaAdresi = $_urunSayfaAdresi);
    }
    /**
     * Get UyeAlimMax value
     * @return double|null
     */
    public function getUyeAlimMax()
    {
        return $this->UyeAlimMax;
    }
    /**
     * Set UyeAlimMax value
     * @param double $_uyeAlimMax the UyeAlimMax
     * @return double
     */
    public function setUyeAlimMax($_uyeAlimMax)
    {
        return ($this->UyeAlimMax = $_uyeAlimMax);
    }
    /**
     * Get UyeAlimMin value
     * @return double|null
     */
    public function getUyeAlimMin()
    {
        return $this->UyeAlimMin;
    }
    /**
     * Set UyeAlimMin value
     * @param double $_uyeAlimMin the UyeAlimMin
     * @return double
     */
    public function setUyeAlimMin($_uyeAlimMin)
    {
        return ($this->UyeAlimMin = $_uyeAlimMin);
    }
    /**
     * Get Varyasyonlar value
     * @return TicimaxStructArrayOfVaryasyon|null
     */
    public function getVaryasyonlar()
    {
        return $this->Varyasyonlar;
    }
    /**
     * Set Varyasyonlar value
     * @param TicimaxStructArrayOfVaryasyon $_varyasyonlar the Varyasyonlar
     * @return TicimaxStructArrayOfVaryasyon
     */
    public function setVaryasyonlar($_varyasyonlar)
    {
        return ($this->Varyasyonlar = $_varyasyonlar);
    }
    /**
     * Get Vitrin value
     * @return boolean|null
     */
    public function getVitrin()
    {
        return $this->Vitrin;
    }
    /**
     * Set Vitrin value
     * @param boolean $_vitrin the Vitrin
     * @return boolean
     */
    public function setVitrin($_vitrin)
    {
        return ($this->Vitrin = $_vitrin);
    }
    /**
     * Get YeniUrun value
     * @return boolean|null
     */
    public function getYeniUrun()
    {
        return $this->YeniUrun;
    }
    /**
     * Set YeniUrun value
     * @param boolean $_yeniUrun the YeniUrun
     * @return boolean
     */
    public function setYeniUrun($_yeniUrun)
    {
        return ($this->YeniUrun = $_yeniUrun);
    }
    /**
     * Get YonlendirmeAdresi value
     * @return string|null
     */
    public function getYonlendirmeAdresi()
    {
        return $this->YonlendirmeAdresi;
    }
    /**
     * Set YonlendirmeAdresi value
     * @param string $_yonlendirmeAdresi the YonlendirmeAdresi
     * @return string
     */
    public function setYonlendirmeAdresi($_yonlendirmeAdresi)
    {
        return ($this->YonlendirmeAdresi = $_yonlendirmeAdresi);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunKarti
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
