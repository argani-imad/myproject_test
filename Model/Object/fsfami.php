<?php 

    class Fsfami{
        
    private $cfam; //code famillle
    private $csfam; //code sous famille
     private $dessf; //description sous sous famille
    private $inds1; //INDS1
    private $inds2;  //INDS2
    private $limit1;
    private $limit2;
  

    public function __construct($db){
        $this->conn = $db;
    }

//GET & SET code famille
   public function getCfam_Fsfami() {
        return $this->cfam;
    }

    public function setCfam_Fsfami($cfam) {
        $this->cfam = $cfam;
    }

//GET & SET code sous famille 
   public function getCsfam(){
        return $this->csfam;
    }
    public function setCsfam($csfam){
        $this->csfam=$csfam;
    }

//GET & SET code sous famille 
   public function getDessf(){
        return $this->dessf;
    }
    public function setDessf($dessf){
        $this->dessf=$dessf;
    }    

//GET & SET INDS1
   public function getInds1_Fsfami(){
        return $this->inds1;
    }
    public function setInds1_Fsfami($inds1){
        $this->inds1=$inds1;
    }

    //GET & SET INDS1
    public function getInds2_Fsfami(){
        return $this->inds2;
    }
    public function setInds2_Fsfami($inds2){
        $this->inds2=$inds2;
    }

//GET & SET limit1
    public function getLimit1_Fsfami(){
        return $this->limit1;
    }
    public function setLimit1_Fsfami($limit1){
        $this->limit1=$limit1;
    }
//GET & SET limit2
    public function getLimit2_Fsfami(){
        return $this->limit2;
    }
    public function setLimit2_Fsfami($limit2){
        $this->limit2=$limit2;
    }


//Tout les sous familles

  public function ReadAllFsfami(){
     $query = "SELECT * FROM fregle00.fSfami";
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt->fetchAll();

    }

//sous famille par code sous famille
  public function ReadOneFsfami(){
     $query = "SELECT * from fregle00.fSfami where csfam=?";
        $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->csfam);
       
        $stmt->execute();
        return $stmt->fetchAll();

    }

//afficher les sous familles d'une famille
  public function ReadSfamiOfFami($req){

    if($req=="req1"){
     
          $query = "SELECT * from (SELECT distinct(f.dessf),f.csfam,DENSE_RANK() OVER (order by f.dessf) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=?  order by f.dessf ) as tr where tr.rowNumber between ? and ?";
          $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam);
          $stmt->bindParam(2, $this->limit1);
          $stmt->bindParam(3, $this->limit2);  


    }else{

          $query = "SELECT distinct(f.dessf),f.csfam,DENSE_RANK() OVER (order by f.dessf) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=?  order by f.dessf";
          $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam);


    }

     
       
        $stmt->execute();
        return $stmt->fetchAll();

    }

  public function ReadCountSfamiOfFami(){

      $query = "SELECT count(*) total from (SELECT distinct(f.dessf),f.csfam,DENSE_RANK() OVER (order by f.dessf) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=?  order by f.dessf ) as tr";
          $stmt = $this->conn->prepare($query);
          $stmt->bindParam(1, $this->cfam);
           $stmt->execute();
        return $stmt->fetchAll();

  }



//afficher designation de sous famille
  public function ReadDesc_fsfami(){
     $query = "SELECT DESSF from fregle00.fsfami where cfam=? and csfam=?";
        $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfam);
          $stmt->bindParam(2, $this->csfam);


        $stmt->execute();
        return $stmt->fetchAll();

    }


}


?>