<?php
include 'DB.php';

class Schedule
{
    private $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function find($group)
    {
        $date = date("Y-m-d");

        return $this->db->select("
            SELECT data.date, `group`.Name_gr, data.number_ora, predmet.Name_predmet, teach.Name_teach
            FROM
                data
                    JOIN `group` ON data.id_group = group.id_group
                    JOIN predmet ON data.id_predmet = predmet.id_predmet
                    JOIN teach ON predmet.id_teach = teach.id_teach
            WHERE data.date = '{$date}' AND group.Name_gr = '{$group}'
        ", 'number_ora');
    }
}