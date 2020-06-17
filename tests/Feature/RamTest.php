<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Ecs\Ecs;
use AlibabaCloud\Ram\Ram;
use AlibabaCloud\Ram\V20150501\ListAccessKeys;
use PHPUnit\Framework\TestCase;

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
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Ram::v20150501()
                       ->listAccessKeys()
                       ->connectTimeout(60)
                       ->timeout(65);

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
        $result = Ram::v20150501()
                     ->listAccessKeys()
                     ->options([
                                   'verify' => false,
                               ])
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertEquals(
            \getenv('ACCESS_KEY_ID'),
            $result['AccessKeys']['AccessKey'][0]['AccessKeyId']
        );
    }

    /**
     * @throws ClientException
     */
    public function testCreateRole()
    {
        try {
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
               ->connectTimeout(60)
               ->timeout(65)
               ->request();
        } catch (ServerException $exception) {
            self::assertEquals($exception->getErrorMessage(), 'The role already exists:EcsRamRoleTest');
        }
    }

    /**
     * @throws ClientException
     */
    public function testCreatePolicy()
    {
        try {
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
               ->connectTimeout(60)
               ->timeout(65)
               ->request();
        } catch (ServerException $exception) {
            self::assertEquals($exception->getErrorCode(), 'EntityAlreadyExists.Policy');
        }

    }

    /**
     * @throws ClientException
     */
    public function testAttachPolicyToRole()
    {
        try {
            Ram::v20150501()
               ->attachpolicytorole()
               ->options([
                             'verify' => false,
                         ])
               ->withPolicyType('Custom')
               ->withPolicyName('EcsRamRolePolicyTest')
               ->withRoleName('EcsRamRoleTest')
               ->connectTimeout(60)
               ->timeout(65)
               ->request();
        } catch (ServerException $exception) {
            self::assertEquals($exception->getErrorCode(), 'EntityAlreadyExists.Role.Policy');
        }
    }

    /**
     * @throws ClientException
     */
    public function testAttachInstanceRamRole()
    {
        try {
            Ecs::v20140526()
               ->attachinstanceramrole()
               ->options([
                             'verify' => false,
                         ])
               ->withRamRoleName('EcsRamRoleTest')
               ->withInstanceIds('i-bXXXXXXXX')
               ->connectTimeout(60)
               ->timeout(65)
               ->request();
        } catch (ServerException $exception) {
            self::assertEquals('The specified instanceIds are not valid.', $exception->getErrorMessage());
        }
    }
}
