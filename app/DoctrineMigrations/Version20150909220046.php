<?php

namespace EL\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150909220046 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE charge (id INT AUTO_INCREMENT NOT NULL, dateOpe INT DEFAULT NULL, montant INT DEFAULT NULL, description INT DEFAULT NULL, Motif_id INT DEFAULT NULL, INDEX IDX_556BA4342998DA4F (Motif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chargedirecte (libelle INT DEFAULT NULL, Voyage_id INT DEFAULT NULL, Charge_id INT NOT NULL, INDEX IDX_B20E6AADEA38670C (Voyage_id), PRIMARY KEY(Charge_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chargevehicule (dateExpiration DATETIME DEFAULT NULL, expire TINYINT(1) DEFAULT NULL, Vehicule_id INT DEFAULT NULL, Charge_id INT NOT NULL, INDEX IDX_98CEAC5CCD6BAC6 (Vehicule_id), PRIMARY KEY(Charge_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE encaissement (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(254) DEFAULT NULL, dateEncaissement DATETIME DEFAULT NULL, montant NUMERIC(8, 0) DEFAULT NULL, Voyage_id INT DEFAULT NULL, Tresorerie_id INT DEFAULT NULL, INDEX IDX_5D4869B0EA38670C (Voyage_id), INDEX IDX_5D4869B0C1DA19D0 (Tresorerie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE incident (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(254) DEFAULT NULL, dateSurvenance DATETIME DEFAULT NULL, Voyage_id INT DEFAULT NULL, INDEX IDX_3D03A11AEA38670C (Voyage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE motifdepenses (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(254) DEFAULT NULL, type VARCHAR(254) DEFAULT NULL, expire TINYINT(1) DEFAULT NULL, duree INT DEFAULT NULL, montant NUMERIC(8, 0) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiementcharge (id INT AUTO_INCREMENT NOT NULL, datePaiement INT DEFAULT NULL, description INT DEFAULT NULL, montant INT DEFAULT NULL, Charge_id INT DEFAULT NULL, Tresorerie_id INT DEFAULT NULL, INDEX IDX_77CBADB7D7D9CBB7 (Charge_id), INDEX IDX_77CBADB7C1DA19D0 (Tresorerie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiementsalaire (id INT AUTO_INCREMENT NOT NULL, datePaiement DATETIME DEFAULT NULL, description VARCHAR(254) DEFAULT NULL, montant NUMERIC(8, 0) DEFAULT NULL, Personnel_id INT DEFAULT NULL, Tresorerie_id INT DEFAULT NULL, INDEX IDX_4F58CF824214B8D (Personnel_id), INDEX IDX_4F58CF82C1DA19D0 (Tresorerie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(254) DEFAULT NULL, prenom VARCHAR(254) DEFAULT NULL, dateNais DATETIME DEFAULT NULL, lieuNais VARCHAR(254) DEFAULT NULL, cni VARCHAR(254) DEFAULT NULL, dateDel DATETIME DEFAULT NULL, lieuDel VARCHAR(254) DEFAULT NULL, telephone VARCHAR(254) DEFAULT NULL, email VARCHAR(254) DEFAULT NULL, fonction VARCHAR(254) DEFAULT NULL, salaire NUMERIC(8, 0) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE privilege (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(254) DEFAULT NULL, description VARCHAR(254) DEFAULT NULL, isMenu TINYINT(1) DEFAULT NULL, Parent_id INT DEFAULT NULL, INDEX IDX_87209A87F08B48D3 (Parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(254) DEFAULT NULL, code VARCHAR(254) DEFAULT NULL, description VARCHAR(254) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avoir_privilege (Role_id INT NOT NULL, Privilege_id INT NOT NULL, INDEX IDX_2DBB843319BE1B30 (Role_id), INDEX IDX_2DBB84332ACA5112 (Privilege_id), PRIMARY KEY(Role_id, Privilege_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semiremorque (id INT AUTO_INCREMENT NOT NULL, dateCreation DATETIME DEFAULT NULL, etat VARCHAR(254) DEFAULT NULL, dateDissociation DATETIME DEFAULT NULL, description VARCHAR(254) DEFAULT NULL, Remorque_id INT DEFAULT NULL, Tracteur_id INT DEFAULT NULL, INDEX IDX_BE3D6C8DC73FA513 (Remorque_id), INDEX IDX_BE3D6C8D6D3A090B (Tracteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sortiefond (id INT AUTO_INCREMENT NOT NULL, dateOpe DATETIME DEFAULT NULL, montant NUMERIC(8, 0) DEFAULT NULL, desscription VARCHAR(254) DEFAULT NULL, Tresorerie_id INT DEFAULT NULL, INDEX IDX_19321B48C1DA19D0 (Tresorerie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transfert (id INT AUTO_INCREMENT NOT NULL, dateOpe DATETIME DEFAULT NULL, montant NUMERIC(8, 0) DEFAULT NULL, description VARCHAR(254) DEFAULT NULL, Recepteur_id INT DEFAULT NULL, Emetteur_id INT DEFAULT NULL, INDEX IDX_1E4EACBB2378A3D5 (Recepteur_id), INDEX IDX_1E4EACBBFF75A15B (Emetteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tresorerie (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(254) DEFAULT NULL, libelle VARCHAR(254) DEFAULT NULL, solde NUMERIC(8, 0) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(254) DEFAULT NULL, email VARCHAR(254) DEFAULT NULL, motDePasse VARCHAR(254) DEFAULT NULL, nom VARCHAR(254) DEFAULT NULL, prenom VARCHAR(254) DEFAULT NULL, telephone VARCHAR(254) DEFAULT NULL, Role_id INT DEFAULT NULL, INDEX IDX_1D1C63B319BE1B30 (Role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(254) DEFAULT NULL, immatriculation VARCHAR(254) DEFAULT NULL, dateAchat DATETIME DEFAULT NULL, valeur NUMERIC(8, 0) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (id INT AUTO_INCREMENT NOT NULL, dateDepart DATETIME DEFAULT NULL, dateArrive DATETIME DEFAULT NULL, dateRetour DATETIME DEFAULT NULL, villeArrive VARCHAR(254) DEFAULT NULL, marchandises VARCHAR(254) DEFAULT NULL, montant NUMERIC(8, 0) DEFAULT NULL, etat VARCHAR(254) DEFAULT NULL, observations VARCHAR(254) DEFAULT NULL, SemiRemorque_id INT DEFAULT NULL, INDEX IDX_3F9D895510D594AE (SemiRemorque_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyagepersonnel (id INT AUTO_INCREMENT NOT NULL, fraisDeRoute NUMERIC(8, 0) DEFAULT NULL, fonction VARCHAR(254) DEFAULT NULL, note NUMERIC(8, 0) DEFAULT NULL, observation VARCHAR(254) DEFAULT NULL, Personnel_id INT DEFAULT NULL, Voyage_id INT DEFAULT NULL, INDEX IDX_A93ECB924214B8D (Personnel_id), INDEX IDX_A93ECB92EA38670C (Voyage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE charge ADD CONSTRAINT FK_556BA4342998DA4F FOREIGN KEY (Motif_id) REFERENCES motifdepenses (id)');
        $this->addSql('ALTER TABLE chargedirecte ADD CONSTRAINT FK_B20E6AADEA38670C FOREIGN KEY (Voyage_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE chargedirecte ADD CONSTRAINT FK_B20E6AADD7D9CBB7 FOREIGN KEY (Charge_id) REFERENCES charge (id)');
        $this->addSql('ALTER TABLE chargevehicule ADD CONSTRAINT FK_98CEAC5CCD6BAC6 FOREIGN KEY (Vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE chargevehicule ADD CONSTRAINT FK_98CEAC5D7D9CBB7 FOREIGN KEY (Charge_id) REFERENCES charge (id)');
        $this->addSql('ALTER TABLE encaissement ADD CONSTRAINT FK_5D4869B0EA38670C FOREIGN KEY (Voyage_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE encaissement ADD CONSTRAINT FK_5D4869B0C1DA19D0 FOREIGN KEY (Tresorerie_id) REFERENCES tresorerie (id)');
        $this->addSql('ALTER TABLE incident ADD CONSTRAINT FK_3D03A11AEA38670C FOREIGN KEY (Voyage_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE paiementcharge ADD CONSTRAINT FK_77CBADB7D7D9CBB7 FOREIGN KEY (Charge_id) REFERENCES charge (id)');
        $this->addSql('ALTER TABLE paiementcharge ADD CONSTRAINT FK_77CBADB7C1DA19D0 FOREIGN KEY (Tresorerie_id) REFERENCES tresorerie (id)');
        $this->addSql('ALTER TABLE paiementsalaire ADD CONSTRAINT FK_4F58CF824214B8D FOREIGN KEY (Personnel_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE paiementsalaire ADD CONSTRAINT FK_4F58CF82C1DA19D0 FOREIGN KEY (Tresorerie_id) REFERENCES tresorerie (id)');
        $this->addSql('ALTER TABLE privilege ADD CONSTRAINT FK_87209A87F08B48D3 FOREIGN KEY (Parent_id) REFERENCES privilege (id)');
        $this->addSql('ALTER TABLE avoir_privilege ADD CONSTRAINT FK_2DBB843319BE1B30 FOREIGN KEY (Role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE avoir_privilege ADD CONSTRAINT FK_2DBB84332ACA5112 FOREIGN KEY (Privilege_id) REFERENCES privilege (id)');
        $this->addSql('ALTER TABLE semiremorque ADD CONSTRAINT FK_BE3D6C8DC73FA513 FOREIGN KEY (Remorque_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE semiremorque ADD CONSTRAINT FK_BE3D6C8D6D3A090B FOREIGN KEY (Tracteur_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE sortiefond ADD CONSTRAINT FK_19321B48C1DA19D0 FOREIGN KEY (Tresorerie_id) REFERENCES tresorerie (id)');
        $this->addSql('ALTER TABLE transfert ADD CONSTRAINT FK_1E4EACBB2378A3D5 FOREIGN KEY (Recepteur_id) REFERENCES tresorerie (id)');
        $this->addSql('ALTER TABLE transfert ADD CONSTRAINT FK_1E4EACBBFF75A15B FOREIGN KEY (Emetteur_id) REFERENCES tresorerie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B319BE1B30 FOREIGN KEY (Role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D895510D594AE FOREIGN KEY (SemiRemorque_id) REFERENCES semiremorque (id)');
        $this->addSql('ALTER TABLE voyagepersonnel ADD CONSTRAINT FK_A93ECB924214B8D FOREIGN KEY (Personnel_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE voyagepersonnel ADD CONSTRAINT FK_A93ECB92EA38670C FOREIGN KEY (Voyage_id) REFERENCES voyage (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chargedirecte DROP FOREIGN KEY FK_B20E6AADD7D9CBB7');
        $this->addSql('ALTER TABLE chargevehicule DROP FOREIGN KEY FK_98CEAC5D7D9CBB7');
        $this->addSql('ALTER TABLE paiementcharge DROP FOREIGN KEY FK_77CBADB7D7D9CBB7');
        $this->addSql('ALTER TABLE charge DROP FOREIGN KEY FK_556BA4342998DA4F');
        $this->addSql('ALTER TABLE paiementsalaire DROP FOREIGN KEY FK_4F58CF824214B8D');
        $this->addSql('ALTER TABLE voyagepersonnel DROP FOREIGN KEY FK_A93ECB924214B8D');
        $this->addSql('ALTER TABLE privilege DROP FOREIGN KEY FK_87209A87F08B48D3');
        $this->addSql('ALTER TABLE avoir_privilege DROP FOREIGN KEY FK_2DBB84332ACA5112');
        $this->addSql('ALTER TABLE avoir_privilege DROP FOREIGN KEY FK_2DBB843319BE1B30');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B319BE1B30');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D895510D594AE');
        $this->addSql('ALTER TABLE encaissement DROP FOREIGN KEY FK_5D4869B0C1DA19D0');
        $this->addSql('ALTER TABLE paiementcharge DROP FOREIGN KEY FK_77CBADB7C1DA19D0');
        $this->addSql('ALTER TABLE paiementsalaire DROP FOREIGN KEY FK_4F58CF82C1DA19D0');
        $this->addSql('ALTER TABLE sortiefond DROP FOREIGN KEY FK_19321B48C1DA19D0');
        $this->addSql('ALTER TABLE transfert DROP FOREIGN KEY FK_1E4EACBB2378A3D5');
        $this->addSql('ALTER TABLE transfert DROP FOREIGN KEY FK_1E4EACBBFF75A15B');
        $this->addSql('ALTER TABLE chargevehicule DROP FOREIGN KEY FK_98CEAC5CCD6BAC6');
        $this->addSql('ALTER TABLE semiremorque DROP FOREIGN KEY FK_BE3D6C8DC73FA513');
        $this->addSql('ALTER TABLE semiremorque DROP FOREIGN KEY FK_BE3D6C8D6D3A090B');
        $this->addSql('ALTER TABLE chargedirecte DROP FOREIGN KEY FK_B20E6AADEA38670C');
        $this->addSql('ALTER TABLE encaissement DROP FOREIGN KEY FK_5D4869B0EA38670C');
        $this->addSql('ALTER TABLE incident DROP FOREIGN KEY FK_3D03A11AEA38670C');
        $this->addSql('ALTER TABLE voyagepersonnel DROP FOREIGN KEY FK_A93ECB92EA38670C');
        $this->addSql('DROP TABLE charge');
        $this->addSql('DROP TABLE chargedirecte');
        $this->addSql('DROP TABLE chargevehicule');
        $this->addSql('DROP TABLE encaissement');
        $this->addSql('DROP TABLE incident');
        $this->addSql('DROP TABLE motifdepenses');
        $this->addSql('DROP TABLE paiementcharge');
        $this->addSql('DROP TABLE paiementsalaire');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE privilege');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE avoir_privilege');
        $this->addSql('DROP TABLE semiremorque');
        $this->addSql('DROP TABLE sortiefond');
        $this->addSql('DROP TABLE transfert');
        $this->addSql('DROP TABLE tresorerie');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('DROP TABLE voyage');
        $this->addSql('DROP TABLE voyagepersonnel');
    }
}
