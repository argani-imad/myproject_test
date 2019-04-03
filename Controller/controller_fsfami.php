<?php 
include('../Model/Object/fsfami.php');

$GLOBALS['Fsfami'] = new Fsfami(controller_connection());

 	
//Controller GET & SET Code famille 
    function controller_getCfam_Fsfami() {
        return $GLOBALS['Fsfami']->getCfam_Fsfami();
    }

    function controller_setCfam_Fsfami($cfam) {
        $GLOBALS['Fsfami']->setCfam_Fsfami($cfam);
    }

//Controller GET & SET code sous famille
    function controller_getCsfam() {
        return $GLOBALS['Fsfami']->getCsfam();
    }

    function controller_setCsfam($csfam) {
        $GLOBALS['Fsfami']->setCsfam($csfam);
    }

//Controller GET & SET Description  sous famille
    function controller_getDessf() {
        return $GLOBALS['Fsfami']->getDessf();
    }
    function controller_setDessf($dessf) {
        $GLOBALS['Fsfami']->setDessf($dessf);
    }

//Controller GET & SET INDS2
    function controller_getInds1_Fsfami() {
        return $GLOBALS['Fsfami']->getInds1_Fsfami();
    }
    function controller_setInds1_Fsfami($inds1) {
        $GLOBALS['Fsfami']->setInds1_Fsfami($inds1);
    }


//Controller GET & SET INDS2
    function controller_getLimit1_Fsfami() {
        return $GLOBALS['Fsfami']->getLimit1_Fsfami();
    }
    function controller_setLimit1_Fsfami($limit1) {
        $GLOBALS['Fsfami']->setLimit1_Fsfami($limit1);
    }

//Controller GET & SET INDS2
    function controller_getLimit2_Fsfami() {
        return $GLOBALS['Fsfami']->getLimit2_Fsfami();
    }
    function controller_setLimit2_Fsfami($limit2) {
        $GLOBALS['Fsfami']->setLimit2_Fsfami($limit2);
    }


//controller Tout les  sous familles  
    function controller_ReadAllFsfami() {
    return $GLOBALS['Fsfami']->ReadAllFsfami();
    }

//controller  sous famille par code sous famille
    function controller_ReadOneFsfami() {
    return $GLOBALS['Fsfami']->ReadOneFsfami();
    }

//controller  d'afficher les sous familles d'une famille
    function controller_ReadSfamiOfFami($req) {
    return $GLOBALS['Fsfami']->ReadSfamiOfFami($req);
    }

//controller  d'afficher count les sous familles d'une famille
    function controller_ReadCountSfamiOfFami() {
    return $GLOBALS['Fsfami']->ReadCountSfamiOfFami();
    }

//controller  d'afficher Desc fsfami
    function controller_ReadDesc_fsfami(){
    
    return $GLOBALS['Fsfami']->ReadDesc_fsfami();
    }