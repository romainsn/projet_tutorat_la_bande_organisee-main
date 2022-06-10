<?php
namespace Repos;
use Entities\Parametre;

class ParametreRepo {

    protected $bdd;
    public function __construct(\PDO $bdd){
        $this->bdd = $bdd;
    }

    public function getAll() : ?array
    {
        $set = NULL;
        $query = 'SELECT * FROM parametre';
        $rqtResult = $this->bdd->query($query);

        if ($rqtResult) {
            $rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
            foreach($rqtResult as $row) {
                if(!is_null($row)) {
                    $set[] = new Parametre(
                        $row['App_Tel_3_OLE'],
                        $row['Vis_Ent_3_OLE'],
                        $row['App_Tel_Sta_3_OLE'],
                        $row['Vis_Ent_Sta_3_OLE'],
                        $row['Bil_2_3_OLE'],
                        $row['Ent_Aou_3_OLE'],
                        $row['App_Tel_4_OLE'],
                        $row['Bil_1_4_OLE'],
                        $row['Poi_Mem_4_OLE'],
                        $row['Bil_2_4_OLE'],
                        $row['Ent_Mai_4_OLE'],
                        $row['App_Tel_5_OLE'],
                        $row['Vis_Ent_5_OLE'],
                        $row['Ent_Mar_5_OLE'],
                        $row['Bil_2_5_OLE'],
                        $row['Ent_Jui_5_OLE'],
                        $row['Ent_Aout_5_OLE']
                    );
                }
            }
        }
        return $set;
    }
}

