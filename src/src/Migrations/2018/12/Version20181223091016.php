<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181223091016 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO "author" ("id", "username", "username_canonical", "email", "email_canonical", "enabled", "salt", "password", "last_login", "confirmation_token", "password_requested_at", "roles") VALUES
(\'101\', \'recenzent@vspj.cz\',	\'recenzent@vspj.cz\',	\'recenzent@vspj.cz\',	\'recenzent@vspj.cz\',	\'1\',	NULL,	\'$2y$13$Ppz7GMGnDd5UM45Uv96GHe6q4GwuM3kC6E1aKIG628Y/7UD2lJaEq\',	NULL,	NULL,	NULL,	\'a:1:{i:0;s:14:"ROLE_RECENZENT";}\')');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM "author" WHERE (("id" = \'101\'));');
    }
}
