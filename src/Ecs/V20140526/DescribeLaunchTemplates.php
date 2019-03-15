<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method array getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTemplateTag()
 * @method array getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTemplateResourceGroupId()
 * @method $this withTemplateResourceGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLaunchTemplates extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $launchTemplateName
     *
     * @return $this
     */
    public function withLaunchTemplateName(array $launchTemplateName)
    {
        $this->data['LaunchTemplateName'] = $launchTemplateName;
        foreach ($launchTemplateName as $i => $iValue) {
            $this->options['query']['LaunchTemplateName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
    public function withTemplateTag(array $templateTag)
    {
        $this->data['TemplateTag'] = $templateTag;
        foreach ($templateTag as $i => $iValue) {
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Key'] = $templateTag[$i]['Key'];
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Value'] = $templateTag[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $launchTemplateId
     *
     * @return $this
     */
    public function withLaunchTemplateId(array $launchTemplateId)
    {
        $this->data['LaunchTemplateId'] = $launchTemplateId;
        foreach ($launchTemplateId as $i => $iValue) {
            $this->options['query']['LaunchTemplateId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
