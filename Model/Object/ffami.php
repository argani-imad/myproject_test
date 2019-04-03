<?php

class Ffami{

         private $cfam; //Code famille
         private  $desf; //Description famille
         private   $indm1; //INDM1
         private   $indm2; //INDM2
           private   $limit1; //limit1
             private   $limit2; //limit2
  

    


    public function __construct($db) {
        $this->conn = $db;
    }
//Get&SET Code famille
    public function getCfam() {
        return $this->cfam;
    }

    public function setCfam($cfam) {
        $this->cfam = $cfam;
    }
//Get&SET Description famille
    public function getDesf_Ffami() {
        return $this->desf;
    }

    public function setDesf_Ffami($desf) {
        $this->desf = $desf;
    }
//Get&SET INDM1
     public function getIndm1_Ffami() {
        return $this->indm1;
    }

    public function setIndm1_Ffami($indm1) {
        $this->indm1 = $indm1;
    }
//Get&SET INDM2
        public function getIndm2_Ffami() {
        return $this->indm2;
    }

    public function setIndm2_Ffami($indm2) {
        $this->indm2 = $indm2;
    }

//Get&SET limit1
        public function getLimit1_Ffami() {
        return $this->limit1;
    }

    public function setLimit1_Ffami($limit1) {
        $this->limit1 = $limit1;
    }
//Get&SET INDM2
        public function getLimit2_Ffami() {
        return $this->limit2;
    }

    public function setLimit2_Ffami($limit2) {
        $this->limit2 = $limit2;
    


}
//Tout les familles  SELECT * from ( SELECT   CFAM,DESF, ROW_NUMBER() OVER () AS rowNumber from    fregle00.ffami  ) as tr where tr.rowNumber between 1 and 10; 
    public function ReadAllFfami() {
        $query = "SELECT * from (select  distinct(e.desf ),e.CFAM,DENSE_RANK () OVER (order by e.desf) AS rowNumber
 from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3          
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR 
where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)) as tr";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

//tout les familles avec des limites
 public function ReadAllFfamiLimit() {
        $query = "SELECT * from (select  distinct(e.desf ),e.CFAM,DENSE_RANK () OVER (order by e.desf) AS rowNumber
 from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3          
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR 
where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)) as tr where tr.rowNumber between ? and ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->limit1);
        $stmt->bindParam(2, $this->limit2);
       
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
  //count les familles  
  public function ReadCountAllFfami() {
        $query = "SELECT  count(distinct(e.desf )) as total
 from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3          
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR 
where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
//Famille par Code famille
     public function ReadOneFfami(){
      $query = "SELECT * from fregle00.ffami where cfam=?";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }




}
