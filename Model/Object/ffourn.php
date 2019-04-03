<?php 
    class Ffourn{

    private $cfam;   //code famille
    private $csfam;  //code sous famille
    private $cfam31; //code sous sous famille
    private $cser;   //code serie
    private $cfour;  //code fournisseur
    private $desfr1; //description fournisseur
    private $desfr2; //description2 fournisseur
    private $desfr3; //description3 fournisseur
    private $indf1;  //INDF2
    private $indf2;  //INDF2
    private $limit1;  //INDF2
    private $limit2;  //INDF2


    public function __construct($db){
        $this->conn = $db;
    }

//GET & SET Code famille
    public function getCfam_Ffourn() {
        return $this->cfam;
    }

    public function setCfam_Ffourn($cfam) {
        $this->cfam = $cfam;
    }

//GET & SET Code sous famille
    public function getCsfam_Ffourn(){
        return $this->csfam;
    }
    public function setCsfam_Ffourn($csfam){
        $this->csfam=$csfam;
    }


//GET & SET Code sous sous famille
    public function getCfam31_Ffourn(){
        return $this->cfam31;
    }
    public function setCfam31_Ffourn($cfam31){
        $this->cfam31=$cfam31;
    }

//GET& SET Code Serie
    public function getCser_Ffourn(){
        return $this->cser;
    }
    public function setCser_Ffourn($cser){
        $this->cser=$cser;
    }

//GET & SET Code fournisseur
    public function getCfour(){
        return $this->cfour;
    }
    public function setCfour($cfour){
        $this->cfour=$cfour;
    }

//GET & SET Description Fournisseur
    public function getDesfr1_Ffourn(){
        return $this->desfr1;
    }
    public function setDesfr1_Ffourn($desfr1){
        $this->desfr1=$desfr1;
    }

//GET & SET Description2 Fournisseur
    public function getDesfr2_Ffourn(){
        return $this->desfr2;
    }
    public function setDesfr2_Ffourn($desfr2){
        $this->desfr2=$desfr2;
    }

//GET & SET Description3 Fournisseur
    public function getDesfr3_Ffourn(){
        return $this->desfr3;
    }
    public function setDesfr3_Ffourn($desfr3){
        $this->desfr3=$desfr3;
    }
//GET & SET INDF1
    public function getIndf1_Ffourn(){
        return $this->indf1;
    }
    public function setIndf1_Ffourn($indf1){
        $this->indf1=$indf1;
    }

 //GET & SET INDF2
    public function getIndf2_Ffourn(){
        return $this->indf2;
    }
    public function setIndf2_Ffourn($indf2){
        $this->indf2=$indf2;
    }
//GET & SET INDF2
    public function getLimit1_Ffourn(){
        return $this->limit1;
    }
    public function setLimit1_Ffourn($limit1){
        $this->limit1=$limit1;
    }
    //GET & SET INDF2
    public function getLimit2_Ffourn(){
        return $this->limit2;
    }
    public function setLimit2_Ffourn($limit2){
        $this->limit2=$limit2;
    }
                                                                                                                                                                                                                            
     

//Tout Les fournisseurs
    public function ReadAllFfourn(){
     $query = "SELECT distinct( i.desfr1),i.CFOUR  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0 and   i.desfr1 not like'%DIVER%') order by desfr1";
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt->fetchAll();

    }


 public function ReadAllFfournLimit($req){

if($req=="a"){
    $query = "SELECT count(distinct( i.desfr1)) as total  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0 ) and i.desfr1 not like'%DIVER%' ";
        $stmt = $this->conn->prepare( $query );



      }else{

         $query = "SELECT * from (SELECT distinct( i.desfr1),i.cfour,DENSE_RANK() OVER (ORDER BY i.desfr1) as rowNumber   from  fstock16.partsof b 
                     left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
                     left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
                     left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
                     left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
            and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0 ) and i.desfr1 not like'%DIVER%' ) as tr  where  tr.rowNumber between ? and ?";
              $stmt = $this->conn->prepare( $query );
              $stmt->bindParam(1, $this->limit1);
              $stmt->bindParam(2, $this->limit2);

      }


        $stmt->execute();
        return $stmt->fetchAll();

    }

    

//fournisseur par code fournisseur
    public function ReadOneFfourn(){
      $query = "SELECT * from fregle00.FFOURN  where cfour=?";
      $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfour);
      
      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }

  
//fournisseur par code fournisseur
    public function ReadFfournFami(){
      $query = "SELECT distinct(i.DESFR1),i.cfour  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
        and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and e.cfam=? and f.csfam=? and g.cfam31=?";

        $stmt = $this->conn->prepare( $query );

        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam31);

        $stmt->execute();
        
        return $stmt->fetchAll();
      
    }

    public function ReadMarquByDes($req){

      if($req=="a"){

      $query = "SELECT count(distinct( i.DESFR1)) as total from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0 ) and  i.DESFR1 like :desfr1";
        $stmt = $this->conn->prepare( $query );
      $stmt->bindValue(':desfr1', '%'.$this->desfr1.' %');
       


      }else{

      $query = "SELECT * FROM(SELECT distinct( i.DESFR1),i.CFOUR,DENSE_RANK () OVER (order by  i.DESFR1) AS rowNumber from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0 ) and  i.DESFR1 like :desfr1 ) as tr  where  tr.rowNumber between :limit1 and :limit2";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':desfr1', '%'.$this->desfr1.' %');
        $stmt->bindValue(':limit1', $this->limit1);
        $stmt->bindValue(':limit2', $this->limit2);

    }

      

      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }
 

  
}
?>