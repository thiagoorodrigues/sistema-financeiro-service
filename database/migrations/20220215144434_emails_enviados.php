<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EmailsEnviados extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('EmailsEnviados', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('Remetente', 'string')
            ->addColumn('Destinatario', 'string')
            ->addColumn('Assunto', 'string')
            ->addColumn('Mensagem', 'text')
            ->addColumn('DataEnvio', 'datetime', ['null' => true])
            ->addColumn('DataAbertura', 'datetime', ['null' => true])
            ->addColumn('Status', 'smallinteger', ['comment' => '1 - Não enviado,  2 - Enviado, 3 - Aberto, 4 - Erro de envio'])
            ->addColumn('MensagemErro', 'string', ['null' => true])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->save();
    }

    public function down()
    {
        $this->table('EmailsEnviados')->drop()->save();;
    }
}
