<?php

include('../Model/Object/ffami.php');
$GLOBALS['Ffami'] = new Ffami(controller_connection());

//Controller GET & SET Code famille 
   
    function controller_getCfam() {
        return $GLOBALS['Ffami']->getCfam();
    }

    function controller_setCfam($cfam) {
        $GLOBALS['Ffami']->setCfam($cfam);
    }
//Controller GET & SET description famille 
    function controller_getDesf() {
        return $GLOBALS['Ffami']->getDesf();
    }

    function controller_setDesf($desf) {
        $GLOBALS['Ffami']->setDesf($desf);
    }

//Controller GET & SET INDM1 
    function controller_getIndm1() {
        return $GLOBALS['Ffami']->getIndm1();
    }

    function controller_setIndm1($indm1) {
        $GLOBALS['Ffami']->setIndm1($indm1);
    }

//Controller GET & SET INDM2
    function controller_getIndm2() {
        return $GLOBALS['Ffami']->getIndm2();
    }
    function controller_setIndm2($indm2) {
        $GLOBALS['Ffami']->setIndm2($indm2);
    }

//Controller GET & SET limit1
    function controller_getLimit1_Ffami() {
        return $GLOBALS['Ffami']->getLimit1_Ffami();
    }
    function controller_setLimit1_Ffami($limit1) {
        $GLOBALS['Ffami']->setLimit1_Ffami($limit1);
    }                                               

//Controller GET & SET limit2
    function controller_getLimit2_Ffami() {
        return $GLOBALS['Ffami']->getLimit2_Ffami();
    }
    function controller_setLimit2_Ffami($limit2) {
        $GLOBALS['Ffami']->setLimit2_Ffami($limit2);
    }





//controller tout les familles
    function controller_ReadAllFfami() {
        return $GLOBALS['Ffami']->ReadAllFfami();
    }

//controller count les familles
    function controller_ReadCountAllFfami() {
        return $GLOBALS['Ffami']->ReadCountAllFfami();
    }
//controller count les familles avec limite
    function controller_ReadAllFfamiLimit() {
        return $GLOBALS['Ffami']->ReadAllFfamiLimit();
    }
//controller famille par code famille
    function controller_ReadOneFfami() {
        return $GLOBALS['Ffami']->ReadOneFfami();
    }




