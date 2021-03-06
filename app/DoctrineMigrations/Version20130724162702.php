<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130724162702 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE images DROP PRIMARY KEY");
        $this->addSql("ALTER TABLE images DROP id, CHANGE images_id images_id INT AUTO_INCREMENT NOT NULL");
        $this->addSql("ALTER TABLE images ADD PRIMARY KEY (images_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE images DROP PRIMARY KEY");
        $this->addSql("ALTER TABLE images ADD id INT AUTO_INCREMENT NOT NULL, CHANGE images_id images_id LONGTEXT NOT NULL");
        $this->addSql("ALTER TABLE images ADD PRIMARY KEY (id)");
    }
}
