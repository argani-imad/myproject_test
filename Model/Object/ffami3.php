<?php 
    class Ffami3{

    private $cfam; //code famillle
    private $csfam; //code sous famille
    private $cfam31; //code sous sous famille
    private $des3; //description sous sous famille
    private $inds1; //INDS1
    private $inds2;  //INDS2
    private $limit1;
    private $limit2;

    public function __construct($db){
        $this->conn = $db;
    }

//GET & SET code famille
    public function getCfam_Ffami3(){
        return $this->cfam;
    }
    public function setCfam_Ffami3($cfam) {
        $this->cfam = $cfam;
    }

//GET & SET code sous famille 
    public function getCsfam_Ffami3(){
        return $this->csfam;
    }
    public function setCsfam_Ffami3($csfam){
        $this->csfam=$csfam;
    }

//GET & SET sous sous famille
    public function getCfam31(){
        return $this->cfam31;
    }
    public function setCfam31($cfam31){
        $this->cfam31=$cfam31;
    }
//GET & SET Description sous sous famille
    public function getDes3_Ffami3(){
        return $this->des3;
    }
    public function setDes3_Ffami3($des3){
        $this->des3=$des3;
    }

//GET & SET INDS1
    public function getInds1_Ffami3(){
        return $this->inds1;
    }
    public function setInds1_Ffami3($inds1){
        $this->inds1=$inds1;
    }

//GET & SET INDS1
    public function getInds2_Ffami3(){
        return $this->inds2;
    }
    public function setInds2_Ffami3($inds2){
        $this->inds2=$inds2;
    }

//GET & SET INDS1
    public function getLimit1_Ffami3(){
        return $this->limit1;
    }
    public function setLimit1_Ffami3($limit1){
        $this->limit1=$limit1;
    }
//GET & SET INDS1
    public function getLimit2_Ffami3(){
        return $this->limit2;
    }
    public function setLimit2_Ffami3($limit2){
        $this->limit2=$limit2;
    }


//Tout les sous sous familles

    public function ReadAllSFfami3(){
     $query = "SELECT * FROM fregle00.FFAMI3";
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt->fetchAll();

    }

//sous sous famille par code sous sous famille
    public function ReadOneFfami3(){
     $query = "SELECT * from fregle00.FFAMI3 where cfam31=?";
        $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam31);
       
        $stmt->execute();
        return $stmt->fetchAll();

    }

//afficher les sous sous famille par sous famile et famille
    public function ReadFfami3OfSfami($req){

        if($req=="req1"){

          $query = "SELECT * from ( SELECT distinct(g.des3),g.cfam31,DENSE_RANK() OVER (order by g.des3) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and f.csfam=? order by g.des3 ) as tr where tr.rowNumber between ? and ?";
          $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam);
          $stmt->bindParam(2, $this->csfam);  
          $stmt->bindParam(3, $this->limit1);
          $stmt->bindParam(4, $this->limit2);  

        }else{

         $query = "SELECT distinct(g.des3),g.cfam31,DENSE_RANK() OVER (order by g.des3) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and f.csfam=? order by g.des3";
            $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam);
          $stmt->bindParam(2, $this->csfam);  

        }

           $stmt->execute();
        return $stmt->fetchAll();

    }


//afficher count les sous sous famille par sous famile et famille
    public function ReadCountFfami3OfSfami(){
     $query = "SELECT count(*) total from ( SELECT distinct(g.des3),g.cfam31,DENSE_RANK() OVER (order by g.des3) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and f.csfam=? order by g.des3 ) as tr";
        $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam);
          $stmt->bindParam(2, $this->csfam);  
        $stmt->execute();
        return $stmt->fetchAll();

    }


//afficher Desc Sous sous famille
    public function ReadDesc_ffami3(){
     $query = "SELECT DES3 from fregle00.ffami3 where cfam=? and csfam=? and cfam31=?";
        $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam);
          $stmt->bindParam(2, $this->csfam);  
          $stmt->bindParam(3, $this->cfam31);  
        $stmt->execute();
        return $stmt->fetchAll();

    }



  
}
?>