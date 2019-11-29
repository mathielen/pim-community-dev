<?php

declare(strict_types=1);

namespace Akeneo\Apps\Infrastructure\Install\Query;

/**
 * @author Romain Monceau <romain@akeneo.com>
 * @copyright 2019 Akeneo SAS (http://www.akeneo.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
final class CreateAppsTableQuery
{
    const QUERY = <<<'SQL'
CREATE TABLE IF NOT EXISTS akeneo_app(
    client_id INT NOT NULL UNIQUE,
    user_id INT NOT NULL,
    code VARCHAR(100) NOT NULL,
    label VARCHAR(100) NOT NULL,
    flow_type ENUM('data_destination', 'data_source', 'other') NOT NULL DEFAULT 'other',
    image VARCHAR(255) DEFAULT NULL NULL,
    created DATETIME NOT NULL COMMENT '(DC2Type:datetime)' DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT FK_APP_pim_api_client_app_client_id FOREIGN KEY (client_id) REFERENCES pim_api_client (id),
    CONSTRAINT FK_APP_oro_user_app_user_id FOREIGN KEY (user_id) REFERENCES oro_user (id),
    INDEX IDX_APP_code (code)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB ROW_FORMAT = DYNAMIC
SQL;
}
