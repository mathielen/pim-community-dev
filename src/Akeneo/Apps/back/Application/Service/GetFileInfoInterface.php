<?php
declare(strict_types=1);

namespace Akeneo\Apps\Application\Service;

use Akeneo\Tool\Component\FileStorage\Model\FileInfoInterface;

/**
 * @author    Willy Mesnage <willy.mesnage@akeneo.com>
 * @copyright 2019 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface GetFileInfoInterface
{
    public function getFileInfo(string $filePath): ?FileInfoInterface;
}
