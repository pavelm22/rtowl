<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250330120531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE sponsors (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, priority BOOLEAN NOT NULL, order_num INT NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sponsors_team (sponsors_id INT NOT NULL, team_id INT NOT NULL, PRIMARY KEY(sponsors_id, team_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_49415372FB0F2BBC ON sponsors_team (sponsors_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_49415372296CD8AE ON sponsors_team (team_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sponsors_vehicle (sponsors_id INT NOT NULL, vehicle_id INT NOT NULL, PRIMARY KEY(sponsors_id, vehicle_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_93953AFEFB0F2BBC ON sponsors_vehicle (sponsors_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_93953AFE545317D1 ON sponsors_vehicle (vehicle_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sub_team (id SERIAL NOT NULL, team_id INT NOT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E37639DE296CD8AE ON sub_team (team_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE team (id SERIAL NOT NULL, year VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE team_member (id SERIAL NOT NULL, vorname VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, position VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE vehicle (id SERIAL NOT NULL, team_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, specs JSON NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_1B80E486296CD8AE ON vehicle (team_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_team ADD CONSTRAINT FK_49415372FB0F2BBC FOREIGN KEY (sponsors_id) REFERENCES sponsors (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_team ADD CONSTRAINT FK_49415372296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_vehicle ADD CONSTRAINT FK_93953AFEFB0F2BBC FOREIGN KEY (sponsors_id) REFERENCES sponsors (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_vehicle ADD CONSTRAINT FK_93953AFE545317D1 FOREIGN KEY (vehicle_id) REFERENCES vehicle (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_team ADD CONSTRAINT FK_E37639DE296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E486296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_team DROP CONSTRAINT FK_49415372FB0F2BBC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_team DROP CONSTRAINT FK_49415372296CD8AE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_vehicle DROP CONSTRAINT FK_93953AFEFB0F2BBC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors_vehicle DROP CONSTRAINT FK_93953AFE545317D1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sub_team DROP CONSTRAINT FK_E37639DE296CD8AE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicle DROP CONSTRAINT FK_1B80E486296CD8AE
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sponsors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sponsors_team
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sponsors_vehicle
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sub_team
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE team
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE team_member
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE vehicle
        SQL);
    }
}
