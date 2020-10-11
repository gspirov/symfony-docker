<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201011091324 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $table = $schema->getTable('user');

        $table->addColumn('username', Types::STRING)
              ->setLength(155)
              ->setNotnull(true);

        $table->addColumn('created_at', Types::DATETIME_MUTABLE)->setNotnull(true);
        $table->addColumn('updated_at', Types::DATETIME_MUTABLE)->setNotnull(false)->setDefault(null);
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE user DROP created_at, DROP updated_at, DROP username');
    }
}
