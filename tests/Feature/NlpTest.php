<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Nlp\Nlp;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Nlp\V20180408\WordSegment;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class NlpTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class NlpTest extends TestCase
{

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testWordSegment()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->name('content')->regionId('cn-shanghai');

        $result = AlibabaCloud::nlp()
                              ->v20180408()
                              ->wordSegment()
                              ->withDomain('general')
                              ->jsonBody([
                                             'lang' => 'ZH',
                                             'text' => 'Iphone专用数据线',
                                         ])
                              ->connectTimeout(60)
                              ->timeout(65)
                              ->client('content')
                              ->request();
        self::assertEquals('Iphone', $result['data'][0]['word']);
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::nlp()
                                ->v20180408()
                                ->wordSegment()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Nlp::v20180408()
                       ->wordSegment()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(WordSegment::class, $request1);
        self::assertInstanceOf(WordSegment::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testWordSegmentWithApiResolver()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->name('content')->regionId('cn-shanghai');

        $result = Nlp::v20180408()
                     ->wordSegment()
                     ->withDomain('general')
                     ->jsonBody([
                                    'lang' => 'ZH',
                                    'text' => 'Iphone专用数据线',
                                ])
                     ->client('content')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertEquals('Iphone', $result['data'][0]['word']);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testWordSegmentParametersInConstruct()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->name('content')
                    ->regionId('cn-shanghai');

        $result = Nlp::v20180408()
                     ->wordSegment([
                                       'body' => \json_encode([
                                                                  'lang' => 'ZH',
                                                                  'text' => 'Iphone专用数据线',
                                                              ]),
                                   ])
                     ->withDomain('general')
                     ->client('content')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertEquals('Iphone', $result['data'][0]['word']);
    }

    public function testSetMethod()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->name('content')
                    ->regionId('cn-shanghai');

        $result = Nlp::v20180408()
                     ->wordSegment([
                                       'body' => \json_encode([
                                                                  'lang' => 'ZH',
                                                                  'text' => 'Iphone专用数据线',
                                                              ]),
                                   ])
                     ->withDomain('general')
                     ->client('content')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertEquals('Iphone', $result['data'][0]['word']);
    }
}
