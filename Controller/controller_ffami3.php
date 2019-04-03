<?php

include('../Model/Object/ffami3.php');
$GLOBALS['Ffami3'] = new Ffami3(controller_connection());

  
//Controller GET & SET Code famille 
    function controller_getCfam_Ffami3() {
        return $GLOBALS['Ffami3']->getCfam_Ffami3();
    }

    function controller_setCfam_Ffami3($cfam) {
        $GLOBALS['Ffami3']->setCfam_Ffami3($cfam);
    }

//Controller GET & SET code sous famille
    function controller_getCsfam_Ffami3() {
        return $GLOBALS['Ffami3']->getCsfam_Ffami3();
    }

    function controller_setCsfam_Ffami3($csfam) {
        $GLOBALS['Ffami3']->setCsfam_Ffami3($csfam);
    }

//Controller GET & SET code Sous sous famille 
    function controller_getCfam31() {
        return $GLOBALS['Ffami3']->getCfam31();
    }

    function controller_setCfam31($cfam31) {
        $GLOBALS['Ffami3']->setCfam31($cfam31);
    }

//Controller GET & SET Description sous sous famille
    function controller_getDes3_Ffami3() {
        return $GLOBALS['Ffami3']->getDes3_Ffami3();
    }
    function controller_setDes3_Ffami3($des3) {
        $GLOBALS['Ffami3']->setDes3_Ffami3($des3);
    }

//Controller GET & SET INDS1
     function controller_getInds1_Ffami3() {
        return $GLOBALS['Ffami3']->getInds1_Ffami3();
    }
    function controller_setInds1_Ffami3($inds1) {
        $GLOBALS['Ffami3']->setInds1_Ffami3($inds1);
    }

//Controller GET & SET INDS2
    function controller_getInds2_Ffami3() {
        return $GLOBALS['Ffami3']->getInds2_Ffami3();
    }
    function controller_setInds2_Ffami3($inds2) {
        $GLOBALS['Ffami3']->setInds2_Ffami3($inds2);
    }

//Controller GET & SET limit1
     function controller_getLimit1_Ffami3() {
        return $GLOBALS['Ffami3']->getLimit1_Ffami3();
    }
    function controller_setLimit1_Ffami3($limit1) {
        $GLOBALS['Ffami3']->setLimit1_Ffami3($limit1);
    }

//Controller GET & SET limit2
    function controller_getLimit2_Ffami3() {
        return $GLOBALS['Ffami3']->getInds2_Ffami3();
    }
    function controller_setLimit2_Ffami3($limit2) {
        $GLOBALS['Ffami3']->setLimit2_Ffami3($limit2);
    }




//controller Tout les sous sous familles  
    function controller_ReadAllSFfami3() {
    return $GLOBALS['Ffami3']->ReadAllSFfami3();
    }

//controller sous sous famille par code sous sous famille
    function controller_ReadOneFfami3() {
    return $GLOBALS['Ffami3']->ReadOneFfami3();
    }

//controller afficher les sous sous famille par sous famile et famille
    function controller_ReadFfami3OfSfami($req) {
    return $GLOBALS['Ffami3']->ReadFfami3OfSfami($req);
    }

//controller afficher count les sous sous famille par sous famile et famille
    function controller_ReadCountFfami3OfSfami() {
    return $GLOBALS['Ffami3']->ReadCountFfami3OfSfami();
    }

//controller afficher Desc sous sous famille
    function controller_ReadDesc_ffami3() {
    return $GLOBALS['Ffami3']->ReadDesc_ffami3();
    }




