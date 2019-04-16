<?php

namespace AlibabaCloud\Tests\Unit;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;

class CallTraitTest extends TestCase
{
    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Please use withInstanceId instead of setInstanceId
     * @throws ClientException
     */
    public function testSetMethod()
    {
        AlibabaCloud::cCC()
                    ->v20170705()
                    ->listPhoneNumbers()
                    ->host('ccc.cn-shanghai.aliyuncs.com')
                    ->setInstanceId('id')
                    ->connectTimeout(20)
                    ->timeout(25);
    }
}
