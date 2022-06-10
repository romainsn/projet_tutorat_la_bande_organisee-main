<?php

namespace Repositories;
use Entities\Referent;

class ReferentRepository
{
//put your code here
    protected $bdd;

    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
            $this->bdd = $bdd;
    }

    public function getAll() : ? array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM referent';
        dump_var($query, DUMP, 'Requête SQL:');


        $rqtResult = $this->bdd->query($query);


        if ($rqtResult) {
            $rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
            foreach($rqtResult as $row ) {
                $resultSet[] = new Referent($row);

            }
        }

        return $resultSet;
    }}