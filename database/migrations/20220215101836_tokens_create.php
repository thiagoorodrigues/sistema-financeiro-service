<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TokensCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Tokens', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('Nome', 'string')
            ->addColumn('Token', 'string', ['limit' => 50])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->save();
    }

    public function down()
    {
        $this->table('Tokens')->drop()->save();;
    }
}
