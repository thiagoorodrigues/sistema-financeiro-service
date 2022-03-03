<?php

use Phinx\Seed\AbstractSeed;
use core\traits\UuidTrait;

class TokensSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'Id' => UuidTrait::v4(),
                'Nome' => 'Externo',
                'Token' => '6e3fc67e-8f82-4296-a089-afa5974ed5de'
            ]
        ];

        $query = $this->table('Tokens');
        $query->insert($data)->save();
    }
}
