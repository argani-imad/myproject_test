<?php 
include('../Model/Object/partsof.php');

$GLOBALS['Partsof'] = new Partsof(controller_connection());


//Controller GET & SET  ref produit
    function controller_getStk() {
        return $GLOBALS['Partsof']->getStk();
    }

    function controller_setStk($cfam) {
        $GLOBALS['Partsof']->setStk($cfam);
    }


//Controller GET & SET Code  description produit 
    function controller_getDes_partsof() {
        return $GLOBALS['Partsof']->getDes_partsof();
    }

    function controller_setDes_partsof($des) {
        $GLOBALS['Partsof']->setDes_partsof($des);
    }

//Controller GET & SET Code famille 
    function controller_getCfam_partsof() {
        return $GLOBALS['Partsof']->getCfam_partsof();
    }

    function controller_setCfam_partsof($cfam) {
      
        $GLOBALS['Partsof']->setCfam_partsof($cfam);
    }

//Controller GET & SET code sous famille
    function controller_getCsfam_partsof() {

        return $GLOBALS['Partsof']->getCsfam_partsof();
    }

    function controller_setCsfam_partsof($csfam) {
        $GLOBALS['Partsof']->setCsfam_partsof($csfam);
    }

//Controller GET & SET code Sous sous famille 
    function controller_getCfam3_partsof() {
        return $GLOBALS['Partsof']->getCfam3_partsof();
    }

    function controller_setCfam3_partsof($cfam3) {
        $GLOBALS['Partsof']->setCfam3_partsof($cfam3);
    }

//Controller GET & SET code serie
    function controller_getCseri_partsof() {
        return $GLOBALS['Partsof']->getCseri_partsof();
    }
    function controller_setCseri_partsof($cseri) {
        $GLOBALS['Partsof']->setCseri_partsof($cseri);
    }

//Controller GET & SET code fournisseur
     function controller_getCfour_partsof() {
        return $GLOBALS['Partsof']->getCfour_partsof();
    }
    function controller_setCfour_partsof($cfour) {
        $GLOBALS['Partsof']->setCfour_partsof($cfour);
    }

//Controller GET & SET photo du prodruit
    function controller_getCdphot() {
        return $GLOBALS['Partsof']->getCdphot();
    }
    function controller_setCdphot($cdphot) {
        $GLOBALS['Partsof']->setCdphot($cdphot);
    }

//Controller GET & SET fiche pdf
    function controller_getCdfich() {
        return $GLOBALS['Partsof']->getCdfich();
    }
    function controller_setCdfich($cdfich) {
        $GLOBALS['Partsof']->setCdfich($cdfich);
    }

//Controller GET & SET quanitié min
    function controller_getQtmn() {
        return $GLOBALS['Partsof']->getQtmn();
    }
    function controller_setQtmn($qtmn) {
        $GLOBALS['Partsof']->setQtmn($qtmn);
    }

//Controller GET & SET quantité max
    function controller_getQtmx() {
        return $GLOBALS['Partsof']->getQtmx();
    }
    function controller_setQtmx($qtmx) {
        $GLOBALS['Partsof']->setQtmx($qtmx);
    }

//Controller GET & SET PV
    function controller_getPv() {
        return $GLOBALS['Partsof']->getPv();
    }
    function controller_setPv($pv) {
        $GLOBALS['Partsof']->setPv($pv);
    }

//Controller GET & SET Uni
    function controller_getUni() {
        return $GLOBALS['Partsof']->getUni();
    }
    function controller_setUni($pv) {
        $GLOBALS['Partsof']->setUni($uni);
    }

//Controller GET & SET Devise
    function controller_getDevise() {
        return $GLOBALS['Partsof']->getDevise();
    }
    function controller_setDevise($devise) {
        $GLOBALS['Partsof']->setDevise($devise);
    }
//Controller GET & SET Devise
    function controller_getLimit1() {
        return $GLOBALS['Partsof']->getDevise();
    }
    function controller_setLimit1($limit1) {
        $GLOBALS['Partsof']->setLimit1($limit1);
    }
//Controller GET & SET Devise
    function controller_getLimit2() {
        return $GLOBALS['Partsof']->getDevise();
    }
    function controller_setLimit2($limit2) {
        $GLOBALS['Partsof']->setLimit2($limit2);
    }





//controller Tout les sous sous familles  
    function controller_ReadAllPartsof() {
    return $GLOBALS['Partsof']->ReadAllPartsof();
    }
    
//controller sous sous famille par code sous sous famille
    function controller_ReadOnePartsof() {
    return $GLOBALS['Partsof']->ReadOnePartsof();
    }

//controller sous sous famille par code sous sous famille
    function controller_ReadPartsofByFfami() {
    return $GLOBALS['Partsof']->ReadPartsofByFfami();
    }

//controller sous sous famille par code sous sous famille
    function controller_ReadPartsofByFfamiCfour(){
    return $GLOBALS['Partsof']->ReadPartsofByFfamiCfour();
    }


//afficher N de produits
     function controller_ReadTopPartsof(){
    return $GLOBALS['Partsof']->ReadTopPartsof();
    }

//afficher N de produits
     function controller_ReadMarqu(){
    return $GLOBALS['Partsof']->ReadMarqu();
    }

//afficher N de produits
     function controller_ReadCountProd($rech){
    return $GLOBALS['Partsof']->ReadCountProd($rech);
    }

//afficher N de produits
     function controller_ReadpaginntProd($rech){
    return $GLOBALS['Partsof']->ReadpaginntProd($rech);
    }

//afficher N de produits
     function controller_ReadMarquOfFami($req){
    return $GLOBALS['Partsof']->ReadMarquOfFami($req);
    }



function controller_SearchFam1($req){
    return $GLOBALS['Partsof']->SearchFam1($req);
    }
function controller_SearchFam2($req){
    return $GLOBALS['Partsof']->SearchFam2($req);
    }
function controller_SearchFam3($req){
    return $GLOBALS['Partsof']->SearchFam3($req);
    }
function controller_SearchFam4($req){
    return $GLOBALS['Partsof']->SearchFam4($req);
    }


function controller_ReadMarquFam1(){
    return $GLOBALS['Partsof']->ReadMarquFam1();
    }
function controller_ReadMarquFam2(){
    return $GLOBALS['Partsof']->ReadMarquFam2();
    }
function controller_ReadMarquFam3(){
    return $GLOBALS['Partsof']->ReadMarquFam3();
    }
function controller_ReadMarquFam4(){
    return $GLOBALS['Partsof']->ReadMarquFam4();
    }
function controller_ReadMarquProd($req){
    return $GLOBALS['Partsof']->ReadMarquProd($req);
    }
function controller_ReadMarq(){
    return $GLOBALS['Partsof']->ReadMarq();
    }

function controller_ProdSimilaire1(){
    return $GLOBALS['Partsof']->ProdSimilaire1();
    }

function controller_ProdSimilaire2(){
    return $GLOBALS['Partsof']->ProdSimilaire2();
    }
function controller_ProdSimilaire3(){
    return $GLOBALS['Partsof']->ProdSimilaire3();
    }

function controller_ProdSimilaire4(){
    return $GLOBALS['Partsof']->ProdSimilaire4();
    }

?>