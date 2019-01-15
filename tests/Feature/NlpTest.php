<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Nlp\V20180408\Nlp;
use PHPUnit\Framework\TestCase;

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
                              ->connectTimeout(15)
                              ->timeout(20)
                              ->client('content')
                              ->request();
        self::assertEquals('Iphone', $result['data'][0]['word']);
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

        $result = Nlp::wordSegment()
                     ->withDomain('general')
                     ->jsonBody([
                                    'lang' => 'ZH',
                                    'text' => 'Iphone专用数据线',
                                ])
                     ->client('content')
                     ->connectTimeout(15)
                     ->timeout(20)
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

        $result = Nlp::wordSegment([
                                       'body' => \json_encode([
                                                                  'lang' => 'ZH',
                                                                  'text' => 'Iphone专用数据线',
                                                              ]),
                                   ])
                     ->withDomain('general')
                     ->client('content')
                     ->connectTimeout(15)
                     ->timeout(20)
                     ->request();

        self::assertEquals('Iphone', $result['data'][0]['word']);
    }
}
