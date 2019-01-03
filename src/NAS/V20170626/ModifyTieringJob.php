<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyTieringJob
 *
 * @method string getVolume()
 * @method string getPath()
 * @method string getHour()
 * @method string getName()
 * @method string getWeekday()
 * @method string getType()
 * @method string getRecursive()
 * @method string getEnabled()
 * @method string getPolicy()
 */
class ModifyTieringJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'ModifyTieringJob';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withVolume() instead.
     *
     * @param string $volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        return $this->withVolume($volume);
    }

    /**
     * @param string $volume
     *
     * @return $this
     */
    public function withVolume($volume)
    {
        $this->data['Volume'] = $volume;
        $this->options['query']['Volume'] = $volume;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPath() instead.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        return $this->withPath($path);
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function withPath($path)
    {
        $this->data['Path'] = $path;
        $this->options['query']['Path'] = $path;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHour() instead.
     *
     * @param string $hour
     *
     * @return $this
     */
    public function setHour($hour)
    {
        return $this->withHour($hour);
    }

    /**
     * @param string $hour
     *
     * @return $this
     */
    public function withHour($hour)
    {
        $this->data['Hour'] = $hour;
        $this->options['query']['Hour'] = $hour;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWeekday() instead.
     *
     * @param string $weekday
     *
     * @return $this
     */
    public function setWeekday($weekday)
    {
        return $this->withWeekday($weekday);
    }

    /**
     * @param string $weekday
     *
     * @return $this
     */
    public function withWeekday($weekday)
    {
        $this->data['Weekday'] = $weekday;
        $this->options['query']['Weekday'] = $weekday;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRecursive() instead.
     *
     * @param string $recursive
     *
     * @return $this
     */
    public function setRecursive($recursive)
    {
        return $this->withRecursive($recursive);
    }

    /**
     * @param string $recursive
     *
     * @return $this
     */
    public function withRecursive($recursive)
    {
        $this->data['Recursive'] = $recursive;
        $this->options['query']['Recursive'] = $recursive;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEnabled() instead.
     *
     * @param string $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        return $this->withEnabled($enabled);
    }

    /**
     * @param string $enabled
     *
     * @return $this
     */
    public function withEnabled($enabled)
    {
        $this->data['Enabled'] = $enabled;
        $this->options['query']['Enabled'] = $enabled;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPolicy() instead.
     *
     * @param string $policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        return $this->withPolicy($policy);
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function withPolicy($policy)
    {
        $this->data['Policy'] = $policy;
        $this->options['query']['Policy'] = $policy;

        return $this;
    }
}
