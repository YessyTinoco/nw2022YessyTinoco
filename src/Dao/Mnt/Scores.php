<?php
namespace Dao\Mnt;

use Dao\Table;


class scores extends Table
{
    public static function getAll()
    {
        $sqlstr = "Select * from scores;";
        return self::obtenerRegistros($sqlstr, array());
    }
    
    public static function getById(int $scoreid)
    {
        $sqlstr = "SELECT * from `scores` where scoreid=:scoreid;";
        $sqlParams = array("scoreid" => $scoreid);
        return self::obtenerUnRegistro($sqlstr, $sqlParams);
    }

    public static function insert(
        $scoredsc,
        $scoreauthor,
        $scoregenre,
        $scoreyear,
        $scoresales,
        $scoreprice,
        $scoredocurl,
        $scoreest
    ) {
        $sqlstr = "INSERT INTO `scores`
        (`scoredsc`,
        `scoreauthor`, `scoregenre`, `scoreyear`,
        `scoresales`, `scoreprice`, `scoredocurl`, `scoreest`)
         VALUES
        (:scoredsc,
        :scoreauthor, :scoregenre,
        :scoreyear, :scoresales, :scoreprice, :scoredocurl, :scoreest);";
        $sqlParams = [
            "scoredsc" => $scoredsc ,
            "scoreauthor" => $scoreauthor ,
            "scoregenre" => $scoregenre ,
            "scoreyear" => $scoreyear ,
            "scoresales" => $scoresales ,
            "scoreprice" =>  $scoreprice ,
            "scoredocurl" => $scoredocurl,
            "scoreest" => $scoreest

        ];
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

    public static function update(
        $scoredsc,
        $scoreauthor,
        $scoregenre,
        $scoreyear,
        $scoresales,
        $scoreprice,
        $scoredocurl,
        $scoreest,
        $scoreid
    ) {
        $sqlstr = "UPDATE `scores` set
`scoredsc`=:scoredsc, `scoreauthor`=:scoreauthor,
`scoregenre`=:scoregenre, `scoreyear`=:scoreyear, `scoresales`=:scoresales,
`scoreprice`=:scoreprice, `scoredocurl`=:scoredocurl, `scoreest`=:scoreest
 where `scoreid` = :scoreid;";
        $sqlParams = array(
            "scoredsc" => $scoredsc ,
            "scoreauthor" => $scoreauthor ,
            "scoregenre" => $scoregenre ,
            "scoregenre" => $scoregenre ,
            "scoreyear" => $scoreyear ,
            "scoresales" => $scoresales ,
            "scoreprice" =>  $scoreprice ,
            "scoredocurl" => $scoredocurl,
            "scoreest" => $scoreest,
            "scoreid" => $scoreid
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }


    public static function delete($scoreid)
    {
        $sqlstr = "DELETE from `scores` where scoreid = :scoreid;";
        $sqlParams = array(
            "scoreid" => $scoreid
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

}
