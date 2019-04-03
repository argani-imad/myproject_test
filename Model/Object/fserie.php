<?php 

    class Fserie {

    private $cfam; //code famille
    private $csfam;  //code sous famille
    private $cfam31; //code sous sous famille
    private $cser; //code serie
    private $deser; //Description serie
    private $deser1;  //Description1 serie
    private $deser2; //Description2 serie
    private $inds1; //INDS 1
    private $inds2; //INDS 2
    private $limit1;
    private $limit2;

    public function __construct($db){
        $this->conn = $db;
    }

//GET & SET code famille
    public function getCfam_Fserie(){
        return $this->cfam;
    }
    public function setCfam_Fserie($cfam){
        $this->cfam=$cfam;
    }

//GET & SET Sous famille
    public function getCsfam_Fserie(){
        return $this->csfam;
    }
    public function setCsfam_Fserie($csfam){
        $this->csfam=$csfam;
    }
 //GET & SET Code Sous sous famille    

    public function getCfam31_Fserie(){
        return $this->cfam31;
    }
    public function setCfam31_Fserie($cfam31){
        $this->cfam31=$cfam31;
    }
//GET & SET Code serie 

    public function getCser(){
        return $this->cser;
    }
    public function setCser($cser){
        $this->cser=$cser;
    }


//GET & SET Descritpion 
    public function getDeser_Fserie(){
        return $this->deser;
    }
    public function setDeser_Fserie($deser){
        $this->deser=$deser;
    }
//GET & SET Description 1
    public function getDeser1_Fserie(){
        return $this->deser1;
    }
    public function setDeser1_Fserie($deser1){
        $this->deser1=$deser1;
    }

//GET & SET Description 2
    public function getDeser2_Fserie(){
        return $this->deser2;
    }
    public function setDeser2_Fserie($deser2){
        $this->deser2=$deser2;
    }

//GET & SET INDS1
    public function getInds1_Fserie(){
        return $this->inds1;
    }
    public function setInds1_Fserie($inds1){
        $this->inds1=$inds1;
    }
//GET & SET INDS2
    public function getInds2_Fserie(){
        return $this->inds2;
    }
    public function setInds2_Fserie($inds2){
        $this->inds2=$inds2;
    }
//GET & SET limit1
    public function getLimit1_Fserie(){
        return $this->limit1;
    }
    public function setLimit1_Fserie($limit1){
        $this->limit1=$limit1;
    }

//GET & SET limit2
    public function getLimit2_Fserie(){
        return $this->limit2;
    }
    public function setLimit2_Fserie($limit2){
        $this->limit2=$limit2;
    }
 
//Tout les series
    public function ReadAllFserie(){
      $query = "SELECT * FROM fregle00.FSERIE";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt->fetchAll();
    }

//serie par Code Serie
    public function ReadOneFserie(){
      $query = "SELECT * FROM fregle00.FSERIE where cser=?";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cser);
        $stmt->execute();
     
        return $stmt->fetchAll();
    }

//afficher les series par sous sous famille ,sous famille et famille
    public function ReadSerieOfFfami3($req){

        if($req=="req1"){


        $query = "SELECT * from (  SELECT distinct(h.deser),h.cser,DENSE_RANK() OVER (order by h.deser) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and  f.csfam=? and g.cfam31=? order by h.deser ) as tr where tr.rowNumber between ? and ?";
        
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam31);
        $stmt->bindParam(4, $this->limit1);
        $stmt->bindParam(5, $this->limit2);

        }else{

    $query = " SELECT distinct(h.deser),h.cser  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and  f.csfam=? and g.cfam31=? order by h.deser";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam31);

        }
  
        $stmt->execute();
     
        return $stmt->fetchAll();
    }


//afficher les series par sous sous famille ,sous famille et famille
    public function ReadCountSerieOfFfami3(){
                $query = "SELECT count(*) total from (SELECT distinct(h.deser),h.cser,DENSE_RANK() OVER (order by h.deser) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
               and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and  f.csfam=? and g.cfam31=? order by h.deser ) as tr";
                    $stmt = $this->conn->prepare( $query );
                    $stmt->bindParam(1, $this->cfam);
                    $stmt->bindParam(2, $this->csfam);
                    $stmt->bindParam(3, $this->cfam31);
                    $stmt->execute();
                 
                    return $stmt->fetchAll();
    }


//afficher Desc serie
    public function ReadDesc_fserie(){
      $query = "SELECT DESER from fregle00.fserie where cfam=? and csfam=? and cfam31=? and cser=?";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam31);
          $stmt->bindParam(4, $this->cser);
        $stmt->execute();
     
        return $stmt->fetchAll();
    }

  
}
?>