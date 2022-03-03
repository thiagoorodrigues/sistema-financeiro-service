<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PlanosModulosCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('PlanosModulos', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('PlanosId', 'uuid')
            ->addColumn('ModulosId', 'uuid')
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->addForeignKey('PlanosId', 'Planos', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->addForeignKey('ModulosId', 'Modulos', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->save();
    }

    public function down()
    {
        $this->table('PlanosModulos')->drop()->save();
    }
}
