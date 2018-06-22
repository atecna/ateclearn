<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180622144342 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE question_theme (id INTEGER NOT NULL, question_id INTEGER DEFAULT NULL, theme_id INTEGER DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A79EF60C1E27F6BF ON question_theme (question_id)');
        $this->addSql('CREATE INDEX IDX_A79EF60C59027487 ON question_theme (theme_id)');
        $this->addSql('CREATE TABLE quiz (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE question (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE notion (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE quiz_notion (id INTEGER NOT NULL, quiz_id INTEGER DEFAULT NULL, notion_id INTEGER DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9E2E231F853CD175 ON quiz_notion (quiz_id)');
        $this->addSql('CREATE INDEX IDX_9E2E231F15242AAB ON quiz_notion (notion_id)');
        $this->addSql('CREATE TABLE answer (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE theme (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE user_question_answer (id INTEGER NOT NULL, user_id INTEGER DEFAULT NULL, question_answer_id INTEGER DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_CF5C09A2A76ED395 ON user_question_answer (user_id)');
        $this->addSql('CREATE INDEX IDX_CF5C09A2A3E60C9C ON user_question_answer (question_answer_id)');
        $this->addSql('CREATE TABLE quiz_question (id INTEGER NOT NULL, quiz_id INTEGER DEFAULT NULL, question_id INTEGER DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6033B00B853CD175 ON quiz_question (quiz_id)');
        $this->addSql('CREATE INDEX IDX_6033B00B1E27F6BF ON quiz_question (question_id)');
        $this->addSql('CREATE TABLE question_answer (id INTEGER NOT NULL, question_id INTEGER DEFAULT NULL, answer_id INTEGER DEFAULT NULL, is_good BOOLEAN DEFAULT \'0\' NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DD80652D1E27F6BF ON question_answer (question_id)');
        $this->addSql('CREATE INDEX IDX_DD80652DAA334807 ON question_answer (answer_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE question_theme');
        $this->addSql('DROP TABLE quiz');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE notion');
        $this->addSql('DROP TABLE quiz_notion');
        $this->addSql('DROP TABLE answer');
        $this->addSql('DROP TABLE theme');
        $this->addSql('DROP TABLE user_question_answer');
        $this->addSql('DROP TABLE quiz_question');
        $this->addSql('DROP TABLE question_answer');
    }
}
