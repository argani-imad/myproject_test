<?php 
    class Partsof{
        
  	  private $stk ;    //Code Produit
  	  private $des;     //description produit
      private $cfam;   //code famille
      private $csfam;  //code sous famille
      private $cfam3;  //code sous sous famille
      private $cseri;  //code serie
      private $cfour;  //code fournisseur
      private $cdphot; //code photo
      private $cdfich; //code fiche pdf
      private $qtmn;   //quantité min
      private $qtmx;   //quantité max
      private $pv;     //pv
      private $uni;    //uni
      private $devise; //devise
      private $limit1; //devise
      private $limit2; //devise


    public function __construct($db){
        $this->conn = $db;
    }

//GET & SET Code Produit
   	public function getStk(){
        return $this->stk;
    }

    public function setStk($stk) {
        $this->stk = $stk;
    }

//GET & SET description produit
   	public function getDes_partsof(){
        return $this->des;
    }
    public function setDes_partsof($des){
        $this->des=$des;
    }


//GET & SET code famille
   	public function getCfam_partsof(){
        return $this->cfam;
    }
    public function setCfam_partsof($cfam){
        $this->cfam=$cfam;
    }

//GET& SET code sous famille
   	public function getCsfam_partsof(){
        return $this->csfam;
    }
    public function setCsfam_partsof($csfam){
        $this->csfam=$csfam;
    }

//GET & SET code sous sous famille
    
    public function getCfam3_partsof(){
        return $this->cfam3;
    }
    public function setCfam3_partsof($cfam3){
        $this->cfam3=$cfam3;
    }

//GET & SET code serie
  	public function getCseri_partsof(){
        return $this->cseri;
    }
    public function setCseri_partsof($cseri){
        $this->cseri=$cseri;
    }

//GET & SET code fournisseur
  	public function getCfour_partsof(){
        return $this->cfour;
    }
    public function setCfour_partsof($cfour){
        $this->cfour=$cfour;
    }

//GET & SET code photo
  	public function getCdphot(){
        return $this->cdphot;
    }
    public function setCdphot($cdphot){
        $this->cdphot=$cdphot;
    }

//GET & SET code fiche pdf
    public function getCdfich(){
        return $this->cdfich;
    }
    public function setCdfich($cdfich){
        $this->cdfich=$cdfich;
    }

 //GET & SET quantité min
    public function getQtmn(){
        return $this->qtmn;
    }
    public function setQtmn($qtmn){
        $this->qtmn=$qtmn;
    }

//GET & SET quantité max
    public function getQtmx(){
        return $this->qtmx;
    }
    public function setQtmx($qtmx){
        $this->qtmx=$qtmx;
    }

//GET & SET pv
    public function getPv(){
        return $this->pv;
    }
    public function setPv($pv){
        $this->pv=$pv;
    }

//GET & SET uni
    public function getUni(){
        return $this->uni;
    }
    public function setUni($uni){
        $this->uni=$uni;
    }

//GET & SET devise
    public function getDevise(){
        return $this->devise;
    }
    public function setDevise($devise){
        $this->devise=$devise;
    }

//GET & SET limit1
    public function getLimit1(){
        return $this->limit1;
    }
    public function setLimit1($limit1){
        $this->limit1=$limit1;
    }
//GET & SET limit2
    public function getLimi2(){
        return $this->limit2;
    }
    public function setLimit2($limit2){
        $this->limit2=$limit2;
    }


//Tout Les produits
    public function ReadAllPartsof(){
     $query = "SELECT * FROM fstock16.partsof";
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt->fetchAll();

    }
    
//produit par code produit
    public function ReadOnePartsof(){
      $query = "SELECT * from fstock16.partsof  where stk=?";
      $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->stk);
      
      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }

//afficher les produits par categories
    public function ReadPartsofByFfami(){


      $query = "SELECT * from  fstock16.partsof where (cdphot<>' ' and cdfich<>' ')    and  cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)
      and cfam=? and csfam=? and cfam3=? and cseri=?";
      $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam3);
        $stmt->bindParam(4, $this->cseri);

      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }

//afficher les produits par categories et fournisseur
    public function ReadPartsofByFfamiCfour(){
      $query = "SELECT * from  fstock16.partsof where cfam=? and csfam=? and cfam3=? and cseri=?  and cfour=?";
      $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam3);
        $stmt->bindParam(4, $this->cseri);
        $stmt->bindParam(5, $this->cfour);

      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }

    //afficher N de produits
    public function ReadTopPartsof(){
      $query = "SELECT * from  fstock16.partsof where cseri<>'' and stk<>'' and des<>'' and devise<>'' fetch first 12 rows only";
      $stmt = $this->conn->prepare( $query );
 
      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }

//afficher les produits par categories
    public function ReadMarqu(){


      $query = "SELECT e.desf ,f.dessf,g.des3,h.deser
 from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3          
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
where e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=?";

      $stmt = $this->conn->prepare( $query );

        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam3);
        $stmt->bindParam(4, $this->cseri);

      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }

    //afficher les produits par categories
    public function ReadCountProd($rech){

        if($rech=="aa"){

         $query = "SELECT count(*) as total from  fstock16.partsof where stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and cfam < 90   and ajt<>'S' and (CDPHOT<>'' or CDFICH<>'') and lower(DES) LIKE :des";
              $stmt = $this->conn->prepare( $query );
                $stmt->bindValue(':des', '%'.$this->des.' %');
           // echo "1";
                // echo $this->des;

        }elseif($rech=="bb"){

          $query = "SELECT count(*) as total from fstock16.partsof where cfour=? and cfam=? and csfam=? and cfam3=? and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and cfam < 90   and ajt<>'S' and (CDPHOT<>'' or CDFICH<>'')";
                  $stmt = $this->conn->prepare( $query );
                $stmt->bindParam(1, $this->cfour);
                $stmt->bindParam(2, $this->cfam);
                $stmt->bindParam(3, $this->csfam);
                $stmt->bindParam(4, $this->cfam3);

        }else{

                $query = "  SELECT  count(*) as total from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
  and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=?";
                  $stmt = $this->conn->prepare( $query );
                $stmt->bindParam(1, $this->cfam);
                $stmt->bindParam(2, $this->csfam);
                $stmt->bindParam(3, $this->cfam3);
                $stmt->bindParam(4, $this->cseri);
        //echo "2";
        }
             

              $stmt->execute();
              
              return $stmt->fetchAll();
              
            }

        //afficher les produits par categories
    public function ReadpaginntProd($rech){



if($rech=="aa"){

  $query = "SELECT * from ( SELECT   stk ,des,CDPHOT,DEVISE,PV,CDFICH,
            ROW_NUMBER() OVER (order by stk) AS rowNumber from   fstock16.partsof where stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and cfam < 90   and ajt<>'S' and (CDPHOT<>'' and CDFICH<>'') and UPPER(DES) LIKE :des ) as tr
where tr.rowNumber between :limit1 and :limit2 ";
      $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(':des',  '%'.$this->des.' %');
        $stmt->bindValue(':limit1', $this->limit1);
        $stmt->bindValue(':limit2', $this->limit2);
   // echo "1";
      // echo $this->des.'***'.$this->limit1.'***'.$this->limit2;

}elseif($rech=="bb"){


$query = "SELECT * from ( SELECT   stk ,des,CDPHOT,DEVISE,PV,CDFICH,
            ROW_NUMBER() OVER (order by stk) AS rowNumber from   fstock16.partsof where cfam=? and csfam=? and cfam3=? and cfour=? and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and cfam < 90   and ajt<>'S' and (CDPHOT<>'' and CDFICH<>'') ) as tr
where tr.rowNumber between ? and ? ";
       $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam3);
        $stmt->bindParam(4, $this->cfour);
        $stmt->bindParam(5, $this->limit1);
        $stmt->bindParam(6, $this->limit2);

}else{

     $query = "SELECT * from (SELECT stk ,des,CDPHOT,DEVISE,PV,CDFICH,ROW_NUMBER() OVER (order by stk) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=?)as tr where tr.rowNumber between ? and ? ";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->cfam);
        $stmt->bindParam(2, $this->csfam);
        $stmt->bindParam(3, $this->cfam3);
        $stmt->bindParam(4, $this->cseri);
        $stmt->bindParam(5, $this->limit1);
        $stmt->bindParam(6, $this->limit2);
//echo "2";
}

 

      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }


public function ReadMarquOfFami($req){

      if($req=="a"){

      $query = "SELECT count(distinct(i.DESFR1)) total  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=? and i.desfr1 not like'%DIVER%'";
      $stmt = $this->conn->prepare( $query );
      $stmt->bindParam(1, $this->cfam);
      $stmt->bindParam(2, $this->csfam);
      $stmt->bindParam(3, $this->cfam3);
      $stmt->bindParam(4, $this->cseri);
       


      }elseif($req=="b"){

  $query = "SELECT distinct(i.DESFR1),i.cfour,DENSE_RANK() OVER (order by i.DESFR1 ) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=? and i.desfr1 not like'%DIVER%'";

      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(1, $this->cfam);
      $stmt->bindParam(2, $this->csfam);
      $stmt->bindParam(3, $this->cfam3);
      $stmt->bindParam(4, $this->cseri);


      }else{

      $query = "SELECT * from ( SELECT distinct(i.DESFR1),i.cfour,DENSE_RANK() OVER (order by i.DESFR1 ) AS rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=? and i.desfr1 not like'%DIVER%') as tr where tr.rowNumber between ? and ?";

      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(1, $this->cfam);
      $stmt->bindParam(2, $this->csfam);
      $stmt->bindParam(3, $this->cfam3);
      $stmt->bindParam(4, $this->cseri);
      $stmt->bindValue(5, $this->limit1);
      $stmt->bindValue(6, $this->limit2);

    }

      

      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }





     public function SearchFam1($req){

      if($req=="a"){

      $query = "SELECT  count(*) total from (SELECT distinct(e.desf),e.cfam, DENSE_RANK() OVER (order by e.desf ) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and UPPER(desf) like :des) as tr ";
      // echo "count";
      $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':des', '%'.$this->des.' %');
       


      }else{

        // echo "donnee";

        $query = "SELECT  * from (SELECT distinct(e.desf),e.cfam, DENSE_RANK() OVER (order by e.desf ) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and UPPER(desf) like :des) as tr  where tr.rowNumber between :limit1 and :limit2";
      
        $stmt = $this->conn->prepare( $query );
          $stmt->bindValue(':des', '%'.$this->des.' %');
        $stmt->bindValue(':limit1', $this->limit1);
        $stmt->bindValue(':limit2', $this->limit2);


      }


      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }





   public function SearchFam2($req){

      if($req=="a"){

       
      $query = "SELECT count( *) total from (SELECT distinct(f.dessf),f.csfam,e.cfam, DENSE_RANK() OVER (order by e.desf ) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and UPPER(dessf) like :des) as tr";
      // echo "count2";
      $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(':des', '%'.$this->des.' %');
       


      }else{

        // echo "donnee2";

        $query = "SELECT  * from (SELECT distinct(f.dessf),f.csfam,e.cfam, DENSE_RANK() OVER (order by f.dessf ) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and  UPPER(dessf) like :des) as tr  where tr.rowNumber between :limit1 and  :limit2";
      
        $stmt = $this->conn->prepare( $query );
          $stmt->bindValue(':des', '%'.$this->des.' %');
        $stmt->bindValue(':limit1', $this->limit1);
        $stmt->bindValue(':limit2', $this->limit2);


      }


      $stmt->execute();
      
      return $stmt->fetchAll();
      
    }



     public function SearchFam3($req){

      if($req=="a"){

      // echo "count3";

      $query = "SELECT count( *) total from (SELECT distinct(g.DES3),g.CFAM31,f.csfam,e.cfam,DENSE_RANK() OVER (order by e.desf ) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and UPPER(des3) like :des) as tr";
      
      $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(':des', '%'.$this->des.' %');
       


      }else{
      // echo "donnee3";
        $query = "SELECT  * from (SELECT distinct(g.DES3),g.CFAM31,f.csfam,e.cfam, DENSE_RANK() OVER (order by g.DES3 ) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and  UPPER(des3) like :des) as tr  where tr.rowNumber between :limit1 and  :limit2";

             
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':des', '%'.$this->des.' %');
        $stmt->bindValue(':limit1', $this->limit1);
        $stmt->bindValue(':limit2', $this->limit2);


      }


      $stmt->execute();
      
      return $stmt->fetchAll();
      

    }

     public function SearchFam4($req){

      if($req=="a"){


      $query = "SELECT count( *) total from (SELECT distinct(h.deser),H.CSER,g.CFAM31,f.csfam,e.cfam,DENSE_RANK() OVER (order by h.deser ) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and UPPER(deser) like :des) as tr";
      
      $stmt = $this->conn->prepare( $query );
        $stmt->bindValue(':des', '%'.$this->des.' %');
       


      }else{


        $query = "SELECT  * from (SELECT distinct(h.deser),H.CSER,g.CFAM31,f.csfam,e.cfam,DENSE_RANK() OVER (order by h.deser) as rowNumber  from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
      and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and  UPPER(deser) like :des) as tr  where tr.rowNumber between :limit1 and  :limit2";
      
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':des', '%'.$this->des.' %');
        $stmt->bindValue(':limit1', $this->limit1);
        $stmt->bindValue(':limit2', $this->limit2);


      }


      $stmt->execute();
      
      return $stmt->fetchAll();
      
}





public function ReadMarquFam1(){

    


      $query = "SELECT distinct(i.DESFR1 ),e.desf ,i.cfour,e.cfam
                 from  fstock16.partsof b 
                 left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
                 left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR 
                 where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
                 and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and b.cfour = ? order by  i.desfr1  , e.desf";
      
      $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->cfour);
      


           $stmt->execute();
      
      return $stmt->fetchAll();
      
}


  public function ReadMarquFam2(){

        $query = "SELECT distinct(i.DESFR1),e.desf, f.dessf ,e.cfam,f.csfam
                 from  fstock16.partsof b 
                 left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
                 left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
                 left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR 
                 where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
                 and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and b.cfour =? and e.cfam=?
                 order by  i.desfr1,e.desf  , f.dessf";
        
        $stmt = $this->conn->prepare( $query );
            $stmt->bindParam(1, $this->cfour);
            $stmt->bindParam(2, $this->cfam);
        


             $stmt->execute();
        
        return $stmt->fetchAll();
        
  }


 public function ReadMarquFam3(){

        $query = "SELECT distinct(i.DESFR1),e.desf, f.dessf,g.des3 ,e.cfam,f.csfam,g.cfam31
               from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3   
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR 
                where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
                and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and b.cfour =? and b.cfam=? and b.csfam=? 
                order by    i.desfr1,e.desf,f.dessf,g.des3";
        
            $stmt = $this->conn->prepare( $query );
            $stmt->bindParam(1, $this->cfour);
            $stmt->bindParam(2, $this->cfam);
            $stmt->bindParam(3, $this->csfam);


             $stmt->execute();
        
        return $stmt->fetchAll();
        
  }

   public function ReadMarquFam4(){

        $query = "SELECT distinct(i.DESFR1),e.desf, f.dessf ,g.des3,h.deser ,e.cfam,f.csfam,g.cfam31,h.cser
               from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3   
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR 
               where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
               and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0) and b.cfour =? and b.cfam=? and b.csfam=?  and b.cfam3=? and i.desfr1 not like'%DIVER%' order by e.desf,f.dessf,g.des3,h.deser";
        
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $this->cfour);
            $stmt->bindParam(2, $this->cfam);
            $stmt->bindParam(3, $this->csfam);
            $stmt->bindParam(4, $this->cfam3);


             $stmt->execute();
        
        return $stmt->fetchAll();
        
  }

 public function ReadMarquProd($req){
    

    if($req=="a"){

        $query = "  SELECT  count(*) as total from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
               and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and i.cfour=? and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=?   ";
        
              $stmt = $this->conn->prepare($query);
              $stmt->bindParam(1, $this->cfour);
              $stmt->bindParam(2, $this->cfam);
              $stmt->bindParam(3, $this->csfam);
              $stmt->bindParam(4, $this->cfam3);
              $stmt->bindParam(5, $this->cseri);


        }elseif($req=="b"){


           $query = "SELECT  stk ,des,CDPHOT,DEVISE,PV,CDFICH,i.cfour,e.cfam,f.csfam,g.cfam31,h.cser,ROW_NUMBER() OVER (order by stk) AS rowNumber from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
               and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and i.cfour=? and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=?";
        
              $stmt = $this->conn->prepare($query);
              $stmt->bindParam(1, $this->cfour);
              $stmt->bindParam(2, $this->cfam);
              $stmt->bindParam(3, $this->csfam);
              $stmt->bindParam(4, $this->cfam3);
              $stmt->bindParam(5, $this->cseri);
  



        }else{

 $query = "SELECT * from (   SELECT  stk ,des,CDPHOT,DEVISE,PV,CDFICH,i.cfour,e.cfam,f.csfam,g.cfam31,h.cser,ROW_NUMBER() OVER (order by stk) AS rowNumber from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
               and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and i.cfour=? and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=? ) as tr where tr.rowNumber between ? and ? ";
        
              $stmt = $this->conn->prepare($query);
              $stmt->bindParam(1, $this->cfour);
              $stmt->bindParam(2, $this->cfam);
              $stmt->bindParam(3, $this->csfam);
              $stmt->bindParam(4, $this->cfam3);
              $stmt->bindParam(5, $this->cseri);
              $stmt->bindParam(6, $this->limit1);
              $stmt->bindParam(7, $this->limit2);



        }
             $stmt->execute();        
        return $stmt->fetchAll();
        
  }


 public function ReadMarq(){
  
        $query = "SELECT * from ( SELECT   stk ,des,CDPHOT,DEVISE,PV,CDFICH,cfour,cfam,csfam,cfam3,cseri,
            ROW_NUMBER() OVER (order by stk) AS rowNumber from   fstock16.partsof where  cfour =? and cfam=? and csfam=?  and cfam3=? and cseri=? and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and cfam < 90   and ajt<>'S' and (CDPHOT<>'' or CDFICH<>'') ) as tr   ";
        
              $stmt = $this->conn->prepare($query);
              $stmt->bindParam(1, $this->cfour);
              $stmt->bindParam(2, $this->cfam);
              $stmt->bindParam(3, $this->csfam);
              $stmt->bindParam(4, $this->cfam3);
              $stmt->bindParam(5, $this->cseri);

             $stmt->execute();        
             return $stmt->fetchAll();
        
  }
//produits similaire
   public function ProdSimilaire1(){
  
        $query = "SELECT  * from  fstock16.partsof b 
                 left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
                 left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
                 left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
                 left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
                 left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
                 and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%'  and des like :des and stk<>:stk";
        
              $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':des', ''.$this->des.' %');
        $stmt->bindValue(':stk', $this->stk);

             $stmt->execute();        
             return $stmt->fetchAll();
        
  }
  
 // public function ProdSimilaire1(){
  
 //        $query = "SELECT  * from  fstock16.partsof b 
 //               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
 //               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
 //               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
 //               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
 //               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
 //               and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=? and i.cfour<>?";
        
 //              $stmt = $this->conn->prepare($query);
 //              $stmt->bindParam(1, $this->cfam);
 //              $stmt->bindParam(2, $this->csfam);
 //              $stmt->bindParam(3, $this->cfam3);
 //              $stmt->bindParam(4, $this->cseri);
 //              $stmt->bindParam(5, $this->cfour);

 //             $stmt->execute();        
 //             return $stmt->fetchAll();
        
 //  }

  //produits similaire
 public function ProdSimilaire2(){
  
        $query = "SELECT  * from  fstock16.partsof b 
               left outer join fregle00.ffami   e   on  e.cfam=b.cfam   
               left outer join fregle00.fSfami f on  f.cfam=b.cfam and f.csfam=b.csfam
               left outer join fregle00.FFAMI3 g on g.cfam=b.cfam  and g.csfam=b.csfam  and g.cfam31=b.cfam3    
               left outer join fregle00.FSERIE H on H.cfam=b.cfam  and H.csfam=b.csfam  and H.cfam31=b.cfam3 and H.CSER=b.CSERI
               left outer join fregle00.FFOURN  i on  i.CFOUR= b.CFOUR where (cdphot<>' ' and cdfich<>' ')    and e.desf is not null   and b.cfam < 90   and ajt<>'S'  
               and stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and   i.desfr1 not like'%DIVER%' and e.cfam=? and f.csfam=? and g.cfam31=? and h.cser=? and i.cfour=? and b.stk<>?";
        
              $stmt = $this->conn->prepare($query);
              $stmt->bindParam(1, $this->cfam);
              $stmt->bindParam(2, $this->csfam);
              $stmt->bindParam(3, $this->cfam3);
              $stmt->bindParam(4, $this->cseri);
              $stmt->bindParam(5, $this->cfour);
               $stmt->bindParam(6, $this->stk);

             $stmt->execute();        
             return $stmt->fetchAll();
        
  }



//         public function ReadpaginntProdSearch(){


//       $query = "SELECT * from ( SELECT   stk ,des,CDPHOT,DEVISE,PV,
//             ROW_NUMBER() OVER (order by stk) AS rowNumber from   fstock16.partsof where stk in (select distinct stk from fstock16.fqtdpa where cdep not in ('CS' , 'E1' , 'E2' , 'E3' , 'V1' , 'V2' , 'ST') and qtef<>0)  and cfam < 90   and ajt<>'S' and (CDPHOT<>'' or CDFICH<>'') and DES LIKE '%?%' ) as tr
// where tr.rowNumber between ? and ? ";
//       $stmt = $this->conn->prepare( $query );
//         $stmt->bindParam(1, $this->des);
//         $stmt->bindParam(2, $this->limit1);
//         $stmt->bindParam(3, $this->limit2);
//       $stmt->execute();
      
//       return $stmt->fetchAll();
      
//     }





}