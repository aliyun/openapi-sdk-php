<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Ecs\Ecs;
use AlibabaCloud\Ram\Ram;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Ram\V20150501\ListAccessKeys;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class RamTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class RamTest extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::ram()
                                ->v20150501()
                                ->listAccessKeys()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Ram::v20150501()
                       ->listAccessKeys()
                       ->connectTimeout(20)
                       ->timeout(25);

        self::assertInstanceOf(ListAccessKeys::class, $request1);
        self::assertInstanceOf(ListAccessKeys::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testRam()
    {
        $result = AlibabaCloud::ram()
                              ->v20150501()
                              ->listAccessKeys()
                              ->options([
                                            'verify' => false,
                                        ])
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();

        self::assertEquals(
            \getenv('ACCESS_KEY_ID'),
            $result['AccessKeys']['AccessKey'][0]['AccessKeyId']
        );
    }

    /**
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The role already exists:EcsRamRoleTest/
     * @throws ClientException
     * @throws ServerException
     */
    public function testCreateRole()
    {
        Ram::v20150501()
           ->createRole()
           ->options([
                         'verify' => false,
                     ])
           ->withRoleName('EcsRamRoleTest')
           ->withAssumeRolePolicyDocument('{
"Statement": [
{
"Action": "sts:AssumeRole",
"Effect": "Allow",
"Principal": {
  "Service": [
    "ecs.aliyuncs.com"
  ]
}
}
],
"Version": "1"
}')
           ->connectTimeout(20)
           ->timeout(25)
           ->request();
    }

    /**
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The policy has already been created,/
     * @throws ClientException
     * @throws ServerException
     */
    public function testCreatePolicy()
    {
        Ram::v20150501()
           ->createpolicy()
           ->options([
                         'verify' => false,
                     ])
           ->withPolicyName('EcsRamRolePolicyTest')
           ->withPolicyDocument('{
"Statement": [
{
"Action": [
  "oss:Get*",
  "oss:List*"
],
"Effect": "Allow",
"Resource": "*"
}
],
"Version": "1"
}')
           ->connectTimeout(20)
           ->timeout(25)
           ->request();
    }

    /**
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The policy has already been attached to the role./
     * @throws ClientException
     * @throws ServerException
     */
    public function testAttachPolicyToRole()
    {
        Ram::v20150501()
           ->attachpolicytorole()
           ->options([
                         'verify' => false,
                     ])
           ->withPolicyType('Custom')
           ->withPolicyName('EcsRamRolePolicyTest')
           ->withRoleName('EcsRamRoleTest')
           ->connectTimeout(20)
           ->timeout(25)
           ->request();
    }

    /**
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The specified instanceIds are not valid./
     * @throws ClientException
     * @throws ServerException
     */
    public function testAttachInstanceRamRole()
    {
        Ecs::v20140526()
           ->attachinstanceramrole()
           ->options([
                         'verify' => false,
                     ])
           ->withRamRoleName('EcsRamRoleTest')
           ->withInstanceIds('i-bXXXXXXXX')
           ->connectTimeout(20)
           ->timeout(25)
           ->request();
    }
}
