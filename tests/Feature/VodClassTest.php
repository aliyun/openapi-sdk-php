<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Vod\Vod;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Vod\V20170321\DeleteImage;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class VodClassTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class VodClassTest extends TestCase
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
        )->regionId('cn-hangzhou')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::vod()
                                ->v20170321()
                                ->deleteImage()
                                ->connectTimeout(30)
                                ->timeout(35);

        $request2 = Vod::v20170321()
                       ->deleteImage()
                       ->connectTimeout(30)
                       ->timeout(35);

        self::assertInstanceOf(DeleteImage::class, $request1);
        self::assertInstanceOf(DeleteImage::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * 创建分类
     *
     * @return string
     * @throws ServerException
     * @throws ClientException
     */
    public function testAddCategory()
    {
        $result = Vod::v20170321()
                     ->addCategory()
                     ->withCateName('name')
                     ->withParentId('')
                     ->connectTimeout(30)
                     ->timeout(35)
                     ->request();

        self::assertArrayHasKey('Category', $result);

        return $result['Category']['CateId'];
    }

    /**
     * 修改分类
     *
     * @depends testAddCategory
     *
     * @param string $cateId
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public function testUpdateCategory($cateId)
    {
        $result = Vod::v20170321()
                     ->updateCategory()
                     ->withCateId($cateId)
                     ->withCateName('new name')
                     ->connectTimeout(30)
                     ->timeout(35)
                     ->request();

        self::assertArrayHasKey('RequestId', $result);

        return $cateId;
    }

    /**
     * 查询分类及其子分类
     *
     * @depends testUpdateCategory
     *
     * @param string $cateId
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public function testGetCategories($cateId)
    {
        $result = Vod::v20170321()
                     ->getCategories()
                     ->withCateId($cateId)
                     ->connectTimeout(30)
                     ->timeout(35)
                     ->request();

        self::assertArrayHasKey('Category', $result);
        self::assertEquals('new name', $result['Category']['CateName']);

        return $cateId;
    }

    /**
     * 删除分类
     *
     * @depends testGetCategories
     *
     * @param string $cateId
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public function testDeleteCategory($cateId)
    {
        $result = Vod::v20170321()
                     ->deleteCategory()
                     ->withCateId($cateId)
                     ->connectTimeout(30)
                     ->timeout(35)
                     ->request();

        self::assertArrayHasKey('RequestId', $result);

        $result = Vod::v20170321()
                     ->getCategories()
                     ->withCateId($cateId)
                     ->connectTimeout(30)
                     ->timeout(35)
                     ->request();

        self::assertArrayHasKey('Category', $result);
        self::assertEquals([], $result['Category']);

        return $cateId;
    }
}
