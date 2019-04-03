<?php

include('../Model/Object/fserie.php');
$GLOBALS['Fserie'] = new Fserie(controller_connection());

   
//Controller GET & SET Code famille 
    function controller_getCfam_Fserie() {
        return $GLOBALS['Fserie']->getCfam_Fserie();
    }

    function controller_setCfam_Fserie($cfam) {
        $GLOBALS['Fserie']->setCfam_Fserie($cfam);
    }

//Controller GET & SET code sous famille
    function controller_getCsfam_Fserie() {
        return $GLOBALS['Fserie']->getCsfam_Fserie();
    }

    function controller_setCsfam_Fserie($csfam) {
        $GLOBALS['Fserie']->setCsfam_Fserie($csfam);
    }

//Controller GET & SET code Sous sous famille 
    function controller_getCfam31_Fserie() {
        return $GLOBALS['Fserie']->getCfam31_Fserie();
    }

    function controller_setCfam31_Fserie($cfam31) {
        $GLOBALS['Fserie']->setCfam31_Fserie($cfam31);
    }

//Controller GET & SET code serie
    function controller_getCser() {
        return $GLOBALS['Fserie']->getCser();
    }
    function controller_setCser($cser) {
        $GLOBALS['Fserie']->setCser($cser);
    }

//Controller GET & SET code fournisseur
     function controller_getDeser_Fserie() {
        return $GLOBALS['Fserie']->getDeser_Fserie();
    }
    function controller_setDeser_Fserie($deser) {
        $GLOBALS['Fserie']->setDeser_Fserie($deser);
    }

//Controller GET & SET Description1
    function controller_getDeser1_Fserie() {
        return $GLOBALS['Fserie']->getDeser1_Fserie();
    }
    function controller_setDesfr1__Fserie($desfr1) {
        $GLOBALS['Fserie']->setDesfr1_Ffourn($desfr1);
    }

//Controller GET & SET Description2
    function controller_getDeser2_Fserie() {
        return $GLOBALS['Fserie']->getDesfr2_Ffourn();
    }
    function controller_setDeser2_Fserie($deser2) {
        $GLOBALS['Fserie']->setDesfr2_Ffourn($deser2);
    }


//Controller GET & SET INDF1
    function controller_getInds1_Fserie() {
        return $GLOBALS['Fserie']->getInds1_Fserie();
    }
    function controller_setInds1_Fserie($inds1) {
        $GLOBALS['Fserie']->setInds1_Fserie($inds1);
    }

//Controller GET & SET INDF2
    function controller_getInds2_Fserie() {
        return $GLOBALS['Fserie']->getInds2_Fserie();
    }
    function controller_setInds2_Fserie($inds2) {
        $GLOBALS['Fserie']->setInds2_Fserie($inds2);
    }

//Controller GET & SET INDF2
    function controller_getLimit1_Fserie() {
        return $GLOBALS['Fserie']->getLimit1_Fserie();
    }
    function controller_setLimit1_Fserie($limit1) {
        $GLOBALS['Fserie']->setLimit1_Fserie($limit1);
    }

//Controller GET & SET INDF2
    function controller_getLimit2_Fserie() {
        return $GLOBALS['Fserie']->getLimit2_Fserie();
    }
    function controller_setLimit2_Fserie($limit2) {
        $GLOBALS['Fserie']->setLimit2_Fserie($limit2);
    }





//controller Tout les series  
    function controller_ReadAllFserie() {
    return $GLOBALS['Fserie']->ReadAllFserie();
    }

//controller serie par code serie
    function controller_ReadOneFserie() {
    return $GLOBALS['Fserie']->ReadOneFserie();
    }

//controller afficher les series par sous sous famille ,sous famille et famille
    function controller_ReadSerieOfFfami3($req){
    return $GLOBALS['Fserie']->ReadSerieOfFfami3($req);
    }

//controller afficher les series par sous sous famille ,sous famille et famille
    function controller_ReadCountSerieOfFfami3(){
    return $GLOBALS['Fserie']->ReadCountSerieOfFfami3();
    }

//controller Desc serie
    function controller_ReadDesc_fserie(){
    return $GLOBALS['Fserie']->ReadDesc_fserie();
    }





