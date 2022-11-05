<?php

class Migration_referencia_to_os extends CI_Migration
{
    public function up()
    {
        $sql = "
            ALTER TABLE os ADD referencia varchar(255) NULL;
        ";
        $this->db->query($sql);
    }

    public function down()
    {
        $sql = "
            ALTER TABLE os DROP referencia;
        ";
        $this->db->query($sql);
    }
}
