<?php

class Migration_solicitante_to_os extends CI_Migration
{
    public function up()
    {
        $sql = "
            ALTER TABLE os ADD solicitante varchar(255) NULL;
        ";
        $this->db->query($sql);
    }

    public function down()
    {
        $sql = "
            ALTER TABLE os DROP solicitante;
        ";
        $this->db->query($sql);
    }
}
