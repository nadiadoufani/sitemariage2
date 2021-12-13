<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211212182557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE calendar1 (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description LONGTEXT NOT NULL, all_day TINYINT(1) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, salledemariage_id INT DEFAULT NULL, user_id INT NOT NULL, traiteurs_id INT DEFAULT NULL, musiquedemariage_id INT DEFAULT NULL, photographe_id INT DEFAULT NULL, costume_id INT DEFAULT NULL, coiffure_id INT DEFAULT NULL, centredebeaute_id INT DEFAULT NULL, voyagedenoce_id INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom_utilisateur VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, INDEX IDX_67F068BC33186752 (salledemariage_id), INDEX IDX_67F068BCA76ED395 (user_id), INDEX IDX_67F068BCFDD10FC2 (traiteurs_id), INDEX IDX_67F068BC5251110C (musiquedemariage_id), INDEX IDX_67F068BC97DB59CB (photographe_id), INDEX IDX_67F068BCCFCDCFA6 (costume_id), INDEX IDX_67F068BCC17ACDFA (coiffure_id), INDEX IDX_67F068BC4E86B5F5 (centredebeaute_id), INDEX IDX_67F068BC194ECE2C (voyagedenoce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC33186752 FOREIGN KEY (salledemariage_id) REFERENCES salle_de_mariage (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCFDD10FC2 FOREIGN KEY (traiteurs_id) REFERENCES traiteurs (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5251110C FOREIGN KEY (musiquedemariage_id) REFERENCES musique_de_mariage (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC97DB59CB FOREIGN KEY (photographe_id) REFERENCES photographe (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCCFCDCFA6 FOREIGN KEY (costume_id) REFERENCES costume (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC17ACDFA FOREIGN KEY (coiffure_id) REFERENCES coiffure (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC4E86B5F5 FOREIGN KEY (centredebeaute_id) REFERENCES centre_de_beaute (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC194ECE2C FOREIGN KEY (voyagedenoce_id) REFERENCES voyage_de_noce (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE calendar1');
        $this->addSql('DROP TABLE commentaire');
    }
}
