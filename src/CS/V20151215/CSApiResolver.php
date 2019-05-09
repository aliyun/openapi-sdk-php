<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ScaleOutCluster scaleOutCluster(array $options = [])
 * @method GetClusterCertInfo getClusterCertInfo(array $options = [])
 * @method CreateTriggerHook createTriggerHook(array $options = [])
 * @method CreateClusterByResourcesGroup createClusterByResourcesGroup(array $options = [])
 * @method PreCheckForCreateCluster preCheckForCreateCluster(array $options = [])
 * @method DescribeKubernetesVersionMetadata describeKubernetesVersionMetadata(array $options = [])
 * @method DescribeEdgeClusterAttachScripts describeEdgeClusterAttachScripts(array $options = [])
 * @method DeleteClusterNodes deleteClusterNodes(array $options = [])
 * @method DescribeClusterUserKubeconfig describeClusterUserKubeconfig(array $options = [])
 * @method DescribeClusterEndpoints describeClusterEndpoints(array $options = [])
 * @method DescribeClusterNodes describeClusterNodes(array $options = [])
 * @method DescribeClusterLogs describeClusterLogs(array $options = [])
 * @method CheckAliyunCSServiceRole checkAliyunCSServiceRole(array $options = [])
 * @method ResetClusterNode resetClusterNode(array $options = [])
 * @method DeleteClusterNode deleteClusterNode(array $options = [])
 * @method RevokeClusterToken revokeClusterToken(array $options = [])
 * @method DownloadClusterNodeCerts downloadClusterNodeCerts(array $options = [])
 * @method AttachInstances attachInstances(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method ScaleCluster scaleCluster(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeClusterDetail describeClusterDetail(array $options = [])
 * @method DescribeClusterCerts describeClusterCerts(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DescribeApiVersion describeApiVersion(array $options = [])
 */
class CSApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'CS';

    /** @var string */
    public $version = '2015-12-15';

    /** @var string */
    public $serviceCode = 'cs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ScaleOutCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetClusterCertInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/hosts/certs';
}

class CreateTriggerHook extends Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class CreateClusterByResourcesGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/resource_groups/[ResourceGroupId]/clusters';

    /** @var string */
    public $method = 'POST';
}

class PreCheckForCreateCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/ess/precheck';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterType()
 * @method string getMultiAZ()
 * @method string getKubernetesVersion()
 * @method string getRegion()
 */
class DescribeKubernetesVersionMetadata extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/metadata/versions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['query']['ClusterType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMultiAZ($value)
    {
        $this->data['MultiAZ'] = $value;
        $this->options['query']['MultiAZ'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKubernetesVersion($value)
    {
        $this->data['KubernetesVersion'] = $value;
        $this->options['query']['KubernetesVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNamePrefix()
 */
class DescribeEdgeClusterAttachScripts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attachscript';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamePrefix($value)
    {
        $this->data['NamePrefix'] = $value;
        $this->options['query']['NamePrefix'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodes';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPrivateIpAddress()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterUserKubeconfig extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/user_config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivateIpAddress($value)
    {
        $this->data['PrivateIpAddress'] = $value;
        $this->options['query']['PrivateIpAddress'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterEndpoints extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/endpoints';
}

/**
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 */
class DescribeClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodes';

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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/logs';
}

class CheckAliyunCSServiceRole extends Roa
{
    /** @var string */
    public $pathPattern = '/aliyuncsrole/status';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResetClusterNode extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/instances/[InstanceId]/reset';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getReleaseInstance()
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getForce()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNode extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/ip/[Ip]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReleaseInstance($value)
    {
        $this->data['ReleaseInstance'] = $value;
        $this->options['query']['releaseInstance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForce($value)
    {
        $this->data['Force'] = $value;
        $this->options['query']['force'] = $value;

        return $this;
    }
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class RevokeClusterToken extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/revoke';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DownloadClusterNodeCerts extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/nodes/[NodeId]/certs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AttachInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attach';

    /** @var string */
    public $method = 'POST';
}

class CreateCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ScaleCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getClusterType()
 * @method string getName()
 */
class DescribeClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['query']['clusterType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterCerts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/certs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'DELETE';
}

class DescribeApiVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/version';
}
