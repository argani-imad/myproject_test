<?php 
include('../Model/Object/ffourn.php');

$GLOBALS['Ffourn'] = new Ffourn(controller_connection());

//Controller GET & SET Code famille 
    function controller_getCfam_Ffourn() {
        return $GLOBALS['Ffourn']->getCfam_Ffourn();
    }

    function controller_setCfam_Ffourn($cfam) {
        $GLOBALS['Ffourn']->setCfam_Ffourn($cfam);
    }

//Controller GET & SET code sous famille
    function controller_getCsfam_Ffourn() {
        return $GLOBALS['Ffourn']->getCsfam_Ffourn();
    }

    function controller_setCsfam_Ffourn($csfam) {
        $GLOBALS['Ffourn']->setCsfam_Ffourn($csfam);
    }

//Controller GET & SET code Sous sous famille 
    function controller_getCfam31_Ffourn() {
        return $GLOBALS['Ffourn']->getCfam31_Ffourn();
    }

    function controller_setCfam31_Ffourn($cfam31) {
        $GLOBALS['Ffourn']->setCfam31_Ffourn($cfam31);
    }

//Controller GET & SET code serie
    function controller_getCser_Ffourn() {
        return $GLOBALS['Ffourn']->getCser_Ffourn();
    }
    function controller_setCser_Ffourn($cser) {
        $GLOBALS['Ffourn']->setCser_Ffourn($cser);
    }

//Controller GET & SET code fournisseur
     function controller_getCfour() {
        return $GLOBALS['Ffourn']->getCfour();
    }
    function controller_setCfour($cfour) {
        $GLOBALS['Ffourn']->setCfour($cfour);
    }

//Controller GET & SET Description1
    function controller_getDesfr1_Ffourn() {
        return $GLOBALS['Ffourn']->getDesfr1_Ffourn();
    }
    function controller_setDesfr1_Ffourn($desfr1) {
        $GLOBALS['Ffourn']->setDesfr1_Ffourn($desfr1);
    }

//Controller GET & SET Description2
    function controller_getDesfr2_Ffourn() {
        return $GLOBALS['Ffourn']->getDesfr2_Ffourn();
    }
    function controller_setDesfr2_Ffourn($desfr2) {
        $GLOBALS['Ffourn']->setDesfr2_Ffourn($desfr2);
    }

//Controller GET & SET Description3
    function controller_getDesfr3_Ffourn() {
        return $GLOBALS['Ffourn']->getDesfr3_Ffourn();
    }
    function controller_setDesfr3_Ffourn($desfr3) {
        $GLOBALS['Ffourn']->setDesfr3_Ffourn($desfr3);
    }

//Controller GET & SET INDF1
    function controller_getIndf1_Ffourn() {
        return $GLOBALS['Ffourn']->getIndf1_Ffourn();
    }
    function controller_setIndf1_Ffourn($indf1) {
        $GLOBALS['Ffourn']->setIndf1_Ffourn($indf1);
    }

//Controller GET & SET INDF2
    function controller_getIndf2_Ffourn() {
        return $GLOBALS['Ffourn']->getIndf2_Ffourn();
    }
    function controller_setIndf2_Ffourn($indf2) {
        $GLOBALS['Ffourn']->setIndf2_Ffourn($indf2);
    }


//Controller GET & SET limit1
    function controller_getLimit1_Ffourn() {
        return $GLOBALS['Ffourn']->getLimit1_Ffourn();
    }
    function controller_setLimit1_Ffourn($limit1) {
        $GLOBALS['Ffourn']->setLimit1_Ffourn($limit1);
    }

//Controller GET & SET limit2
    function controller_getLimit2_Ffourn() {
        return $GLOBALS['Ffourn']->getLimit2_Ffourn();
    }
    function controller_setLimit2_Ffourn($limit2) {
        $GLOBALS['Ffourn']->setLimit2_Ffourn($limit2);
    }






//controller Tout les sous sous familles  
    function controller_ReadAllFfourn() {
    return $GLOBALS['Ffourn']->ReadAllFfourn();
    }

//controller sous sous famille par code sous sous famille
    function controller_ReadOneFfourn() {
    return $GLOBALS['Ffourn']->ReadOneFfourn();
    }

//controller Tout les sous sous familles  
    function controller_ReadFfournFami() {
    return $GLOBALS['Ffourn']->ReadFfournFami();
    }

//controller Tout les sous sous familles  
    function controller_ReadAllFfournLimit($req) {
    return $GLOBALS['Ffourn']->ReadAllFfournLimit($req);
    }

//controller Tout les sous sous familles  
    function controller_ReadMarquByDes($req) {
    return $GLOBALS['Ffourn']->ReadMarquByDes($req);
    }


?>