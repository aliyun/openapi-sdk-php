<?php

namespace AlibabaCloud\EsServerless\V20220822;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateApp createApp(array $options = [])
 * @method CreateDataStream createDataStream(array $options = [])
 * @method DeleteAccessToken deleteAccessToken(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method DeleteDataStream deleteDataStream(array $options = [])
 * @method DescibeRegions descibeRegions(array $options = [])
 * @method DisableAccessToken disableAccessToken(array $options = [])
 * @method EnableAccessToken enableAccessToken(array $options = [])
 * @method GenerateAcccessToken generateAcccessToken(array $options = [])
 * @method GetApp getApp(array $options = [])
 * @method GetDataStream getDataStream(array $options = [])
 * @method GetRegionInfo getRegionInfo(array $options = [])
 * @method ListAccessTokens listAccessTokens(array $options = [])
 * @method ListApps listApps(array $options = [])
 * @method ListDataStreams listDataStreams(array $options = [])
 * @method UpdateApp updateApp(array $options = [])
 * @method UpdateDataStream updateDataStream(array $options = [])
 */
class EsServerlessApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'es-serverless';

    /** @var string */
    public $version = '2022-08-22';

    /** @var string */
    public $serviceCode = 'elkxops';
}

/**
 * @method string getBody()
 */
class CreateApp extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getBody()
 */
class CreateDataStream extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]/data-streams';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

        return $this;
    }
}

/**
 * @method string getTokenId()
 */
class DeleteAccessToken extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/tokens/[tokenId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenId($value)
    {
        $this->data['TokenId'] = $value;
        $this->pathParameters['tokenId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 */
class DeleteApp extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getDataStreamName()
 */
class DeleteDataStream extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]/data-streams/[dataStreamName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataStreamName($value)
    {
        $this->data['DataStreamName'] = $value;
        $this->pathParameters['dataStreamName'] = $value;

        return $this;
    }
}

class DescibeRegions extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/regions';
}

/**
 * @method string getTokenId()
 */
class DisableAccessToken extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/tokens/[tokenId]/actions/disable';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenId($value)
    {
        $this->data['TokenId'] = $value;
        $this->pathParameters['tokenId'] = $value;

        return $this;
    }
}

/**
 * @method string getTokenId()
 */
class EnableAccessToken extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/tokens/[tokenId]/actions/enable';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenId($value)
    {
        $this->data['TokenId'] = $value;
        $this->pathParameters['tokenId'] = $value;

        return $this;
    }
}

class GenerateAcccessToken extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/tokens';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAppName()
 */
class GetApp extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getDataStreamName()
 */
class GetDataStream extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]/data-streams/[dataStreamName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataStreamName($value)
    {
        $this->data['DataStreamName'] = $value;
        $this->pathParameters['dataStreamName'] = $value;

        return $this;
    }
}

class GetRegionInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/regions/info';
}

/**
 * @method string getTokenId()
 */
class ListAccessTokens extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/tokens';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTokenId($value)
    {
        $this->data['TokenId'] = $value;
        $this->options['query']['tokenId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getPageSize()
 * @method string getDescription()
 * @method string getPageNumber()
 */
class ListApps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['query']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getDataStreamName()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListDataStreams extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]/data-streams';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataStreamName($value)
    {
        $this->data['DataStreamName'] = $value;
        $this->options['query']['dataStreamName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getBody()
 */
class UpdateApp extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getDataStreamName()
 * @method string getBody()
 */
class UpdateDataStream extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/xops/instances/[appName]/data-streams/[dataStreamName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->pathParameters['appName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataStreamName($value)
    {
        $this->data['DataStreamName'] = $value;
        $this->pathParameters['dataStreamName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

        return $this;
    }
}
