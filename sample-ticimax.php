<?php
/**
 * Test with Ticimax for 'https://lorisparfum.com/Servis/UrunServis.svc?wsdl'
 * @package Ticimax
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/TicimaxAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a TicimaxWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[TicimaxWsdlClass::WSDL_URL] = 'https://lorisparfum.com/Servis/UrunServis.svc?wsdl';
 * $wsdl[TicimaxWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[TicimaxWsdlClass::WSDL_TRACE] = true;
 * $wsdl[TicimaxWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[TicimaxWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new TicimaxWsdlClass($wsdl);
 */
/**
 * Examples
 */


/**********************************
 * Example for TicimaxServiceSelect
 */
$ticimaxServiceSelect = new TicimaxServiceSelect();
// sample call for TicimaxServiceSelect::SelectKategori()
if($ticimaxServiceSelect->SelectKategori(new TicimaxStructSelectKategori(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectMarka()
if($ticimaxServiceSelect->SelectMarka(new TicimaxStructSelectMarka(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectTedarikci()
if($ticimaxServiceSelect->SelectTedarikci(new TicimaxStructSelectTedarikci(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectEtiket()
if($ticimaxServiceSelect->SelectEtiket(new TicimaxStructSelectEtiket(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectParaBirimi()
if($ticimaxServiceSelect->SelectParaBirimi(new TicimaxStructSelectParaBirimi(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectTeknikDetayGrup()
if($ticimaxServiceSelect->SelectTeknikDetayGrup(new TicimaxStructSelectTeknikDetayGrup(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectTeknikDetayOzellik()
if($ticimaxServiceSelect->SelectTeknikDetayOzellik(new TicimaxStructSelectTeknikDetayOzellik(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectTeknikDetayDeger()
if($ticimaxServiceSelect->SelectTeknikDetayDeger(new TicimaxStructSelectTeknikDetayDeger(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectAsortiGrup()
if($ticimaxServiceSelect->SelectAsortiGrup(new TicimaxStructSelectAsortiGrup(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectAsortiMiktar()
if($ticimaxServiceSelect->SelectAsortiMiktar(new TicimaxStructSelectAsortiMiktar(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectEkSecenekGrup()
if($ticimaxServiceSelect->SelectEkSecenekGrup(new TicimaxStructSelectEkSecenekGrup(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectEkSecenekDeger()
if($ticimaxServiceSelect->SelectEkSecenekDeger(new TicimaxStructSelectEkSecenekDeger(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectUrun()
if($ticimaxServiceSelect->SelectUrun(new TicimaxStructSelectUrun(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectUrunCount()
if($ticimaxServiceSelect->SelectUrunCount(new TicimaxStructSelectUrunCount(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectVaryasyon()
if($ticimaxServiceSelect->SelectVaryasyon(new TicimaxStructSelectVaryasyon(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectVaryasyonCount()
if($ticimaxServiceSelect->SelectVaryasyonCount(new TicimaxStructSelectVaryasyonCount(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectMagazaStok()
if($ticimaxServiceSelect->SelectMagazaStok(new TicimaxStructSelectMagazaStok(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectUrunOdemeSecenek()
if($ticimaxServiceSelect->SelectUrunOdemeSecenek(new TicimaxStructSelectUrunOdemeSecenek(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectUrunYorum()
if($ticimaxServiceSelect->SelectUrunYorum(new TicimaxStructSelectUrunYorum(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectUrunKategori()
if($ticimaxServiceSelect->SelectUrunKategori(new TicimaxStructSelectUrunKategori(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectUrunEtiket()
if($ticimaxServiceSelect->SelectUrunEtiket(new TicimaxStructSelectUrunEtiket(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());
// sample call for TicimaxServiceSelect::SelectIlgiliUrun()
if($ticimaxServiceSelect->SelectIlgiliUrun(new TicimaxStructSelectIlgiliUrun(/*** update parameters list ***/)))
    print_r($ticimaxServiceSelect->getResult());
else
    print_r($ticimaxServiceSelect->getLastError());

/********************************
 * Example for TicimaxServiceSave
 */
$ticimaxServiceSave = new TicimaxServiceSave();
// sample call for TicimaxServiceSave::SaveKategori()
if($ticimaxServiceSave->SaveKategori(new TicimaxStructSaveKategori(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveKategoriParent()
if($ticimaxServiceSave->SaveKategoriParent(new TicimaxStructSaveKategoriParent(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveMarka()
if($ticimaxServiceSave->SaveMarka(new TicimaxStructSaveMarka(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveTedarikci()
if($ticimaxServiceSave->SaveTedarikci(new TicimaxStructSaveTedarikci(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveEtiket()
if($ticimaxServiceSave->SaveEtiket(new TicimaxStructSaveEtiket(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveParaBirimi()
if($ticimaxServiceSave->SaveParaBirimi(new TicimaxStructSaveParaBirimi(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveTeknikDetayGrup()
if($ticimaxServiceSave->SaveTeknikDetayGrup(new TicimaxStructSaveTeknikDetayGrup(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveTeknikDetayOzellik()
if($ticimaxServiceSave->SaveTeknikDetayOzellik(new TicimaxStructSaveTeknikDetayOzellik(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveTeknikDetayDeger()
if($ticimaxServiceSave->SaveTeknikDetayDeger(new TicimaxStructSaveTeknikDetayDeger(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveAsortiGrup()
if($ticimaxServiceSave->SaveAsortiGrup(new TicimaxStructSaveAsortiGrup(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveAsortiMiktar()
if($ticimaxServiceSave->SaveAsortiMiktar(new TicimaxStructSaveAsortiMiktar(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveUrun()
if($ticimaxServiceSave->SaveUrun(new TicimaxStructSaveUrun(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveResim()
if($ticimaxServiceSave->SaveResim(new TicimaxStructSaveResim(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveMagazaStok()
if($ticimaxServiceSave->SaveMagazaStok(new TicimaxStructSaveMagazaStok(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveUrunKategori()
if($ticimaxServiceSave->SaveUrunKategori(new TicimaxStructSaveUrunKategori(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveUrunEtiket()
if($ticimaxServiceSave->SaveUrunEtiket(new TicimaxStructSaveUrunEtiket(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());
// sample call for TicimaxServiceSave::SaveIlgiliUrun()
if($ticimaxServiceSave->SaveIlgiliUrun(new TicimaxStructSaveIlgiliUrun(/*** update parameters list ***/)))
    print_r($ticimaxServiceSave->getResult());
else
    print_r($ticimaxServiceSave->getLastError());

/**********************************
 * Example for TicimaxServiceDelete
 */
$ticimaxServiceDelete = new TicimaxServiceDelete();
// sample call for TicimaxServiceDelete::DeleteKategori()
if($ticimaxServiceDelete->DeleteKategori(new TicimaxStructDeleteKategori(/*** update parameters list ***/)))
    print_r($ticimaxServiceDelete->getResult());
else
    print_r($ticimaxServiceDelete->getLastError());
// sample call for TicimaxServiceDelete::DeleteMarka()
if($ticimaxServiceDelete->DeleteMarka(new TicimaxStructDeleteMarka(/*** update parameters list ***/)))
    print_r($ticimaxServiceDelete->getResult());
else
    print_r($ticimaxServiceDelete->getLastError());
// sample call for TicimaxServiceDelete::DeleteTedarikci()
if($ticimaxServiceDelete->DeleteTedarikci(new TicimaxStructDeleteTedarikci(/*** update parameters list ***/)))
    print_r($ticimaxServiceDelete->getResult());
else
    print_r($ticimaxServiceDelete->getLastError());
// sample call for TicimaxServiceDelete::DeleteUrunKategori()
if($ticimaxServiceDelete->DeleteUrunKategori(new TicimaxStructDeleteUrunKategori(/*** update parameters list ***/)))
    print_r($ticimaxServiceDelete->getResult());
else
    print_r($ticimaxServiceDelete->getLastError());
// sample call for TicimaxServiceDelete::DeleteUrunEtiket()
if($ticimaxServiceDelete->DeleteUrunEtiket(new TicimaxStructDeleteUrunEtiket(/*** update parameters list ***/)))
    print_r($ticimaxServiceDelete->getResult());
else
    print_r($ticimaxServiceDelete->getLastError());
// sample call for TicimaxServiceDelete::DeleteIlgiliUrun()
if($ticimaxServiceDelete->DeleteIlgiliUrun(new TicimaxStructDeleteIlgiliUrun(/*** update parameters list ***/)))
    print_r($ticimaxServiceDelete->getResult());
else
    print_r($ticimaxServiceDelete->getLastError());

/**********************************
 * Example for TicimaxServiceUpdate
 */
$ticimaxServiceUpdate = new TicimaxServiceUpdate();
// sample call for TicimaxServiceUpdate::UpdateKategoriDil()
if($ticimaxServiceUpdate->UpdateKategoriDil(new TicimaxStructUpdateKategoriDil(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());
// sample call for TicimaxServiceUpdate::UpdateTeknikDetayGrupDil()
if($ticimaxServiceUpdate->UpdateTeknikDetayGrupDil(new TicimaxStructUpdateTeknikDetayGrupDil(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());
// sample call for TicimaxServiceUpdate::UpdateTeknikDetayOzellikDil()
if($ticimaxServiceUpdate->UpdateTeknikDetayOzellikDil(new TicimaxStructUpdateTeknikDetayOzellikDil(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());
// sample call for TicimaxServiceUpdate::UpdateTeknikDetayDegerDil()
if($ticimaxServiceUpdate->UpdateTeknikDetayDegerDil(new TicimaxStructUpdateTeknikDetayDegerDil(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());
// sample call for TicimaxServiceUpdate::UpdateEkSecenekGrupDil()
if($ticimaxServiceUpdate->UpdateEkSecenekGrupDil(new TicimaxStructUpdateEkSecenekGrupDil(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());
// sample call for TicimaxServiceUpdate::UpdateEkSecenekDegerDil()
if($ticimaxServiceUpdate->UpdateEkSecenekDegerDil(new TicimaxStructUpdateEkSecenekDegerDil(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());
// sample call for TicimaxServiceUpdate::UpdateUrunDil()
if($ticimaxServiceUpdate->UpdateUrunDil(new TicimaxStructUpdateUrunDil(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());
// sample call for TicimaxServiceUpdate::UpdateUrl()
if($ticimaxServiceUpdate->UpdateUrl(new TicimaxStructUpdateUrl(/*** update parameters list ***/)))
    print_r($ticimaxServiceUpdate->getResult());
else
    print_r($ticimaxServiceUpdate->getLastError());

/********************************
 * Example for TicimaxServiceStok
 */
$ticimaxServiceStok = new TicimaxServiceStok();
// sample call for TicimaxServiceStok::StokAdediGuncelle()
if($ticimaxServiceStok->StokAdediGuncelle(new TicimaxStructStokAdediGuncelle(/*** update parameters list ***/)))
    print_r($ticimaxServiceStok->getResult());
else
    print_r($ticimaxServiceStok->getLastError());

/*************************************
 * Example for TicimaxServiceVaryasyon
 */
$ticimaxServiceVaryasyon = new TicimaxServiceVaryasyon();
// sample call for TicimaxServiceVaryasyon::VaryasyonGuncelle()
if($ticimaxServiceVaryasyon->VaryasyonGuncelle(new TicimaxStructVaryasyonGuncelle(/*** update parameters list ***/)))
    print_r($ticimaxServiceVaryasyon->getResult());
else
    print_r($ticimaxServiceVaryasyon->getLastError());

/************************************
 * Example for TicimaxServiceOptimize
 */
$ticimaxServiceOptimize = new TicimaxServiceOptimize();
// sample call for TicimaxServiceOptimize::OptimizeUrun()
if($ticimaxServiceOptimize->OptimizeUrun(new TicimaxStructOptimizeUrun(/*** update parameters list ***/)))
    print_r($ticimaxServiceOptimize->getResult());
else
    print_r($ticimaxServiceOptimize->getLastError());

/********************************
 * Example for TicimaxServiceUrun
 */
$ticimaxServiceUrun = new TicimaxServiceUrun();
// sample call for TicimaxServiceUrun::UrunResimYukle()
if($ticimaxServiceUrun->UrunResimYukle(new TicimaxStructUrunResimYukle(/*** update parameters list ***/)))
    print_r($ticimaxServiceUrun->getResult());
else
    print_r($ticimaxServiceUrun->getLastError());
// sample call for TicimaxServiceUrun::UrunBarkodGuncelle()
if($ticimaxServiceUrun->UrunBarkodGuncelle(new TicimaxStructUrunBarkodGuncelle(/*** update parameters list ***/)))
    print_r($ticimaxServiceUrun->getResult());
else
    print_r($ticimaxServiceUrun->getLastError());

/*******************************
 * Example for TicimaxServiceGet
 */
$ticimaxServiceGet = new TicimaxServiceGet();
// sample call for TicimaxServiceGet::GetTaksitSecenekleri()
if($ticimaxServiceGet->GetTaksitSecenekleri(new TicimaxStructGetTaksitSecenekleri(/*** update parameters list ***/)))
    print_r($ticimaxServiceGet->getResult());
else
    print_r($ticimaxServiceGet->getLastError());
// sample call for TicimaxServiceGet::GetProductStatus()
if($ticimaxServiceGet->GetProductStatus())
    print_r($ticimaxServiceGet->getResult());
else
    print_r($ticimaxServiceGet->getLastError());
