<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: ^2_3^王尔贝
 * Date: 2020/2/8
 * Time: 17:19
 */

namespace App\Rpc\Service;

use App\Model\Logic\WrDocLogin;
use App\Rpc\Lib\WrDocInterface;
use Swoft\Bean\Annotation\Mapping\Inject;
use Swoft\Rpc\Server\Annotation\Mapping\Service;


/**
 * ^2_3^开发文档示例
 * Class WrDocService
 *
 * @since 2.0
 * @Service()
 *
 * @package App\Rpc\Service
 * @author ^2_3^王尔贝
 */
class WrDocService implements WrDocInterface
{

    /**
     * @Inject()
     * @var WrDocLogin
     * @author ^2_3^王尔贝
     */
    private $wrDocLogin;

    /**
     * 信息
     * @return string
     * @author ^2_3^王尔贝
     */
    public function info(): string
    {
        //return 'WrDocService(开发文档示例)';

        return $this->wrDocLogin->info();

    }

}