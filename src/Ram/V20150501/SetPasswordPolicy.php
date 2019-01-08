<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetPasswordPolicy
 *
 * @method string getRequireNumbers()
 * @method string getPasswordReusePrevention()
 * @method string getRequireUppercaseCharacters()
 * @method string getMaxPasswordAge()
 * @method string getMaxLoginAttemps()
 * @method string getHardExpiry()
 * @method string getMinimumPasswordLength()
 * @method string getRequireLowercaseCharacters()
 * @method string getRequireSymbols()
 */
class SetPasswordPolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'SetPasswordPolicy';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $requireNumbers
     *
     * @return $this
     */
    public function withRequireNumbers($requireNumbers)
    {
        $this->data['RequireNumbers'] = $requireNumbers;
        $this->options['query']['RequireNumbers'] = $requireNumbers;

        return $this;
    }

    /**
     * @param string $passwordReusePrevention
     *
     * @return $this
     */
    public function withPasswordReusePrevention($passwordReusePrevention)
    {
        $this->data['PasswordReusePrevention'] = $passwordReusePrevention;
        $this->options['query']['PasswordReusePrevention'] = $passwordReusePrevention;

        return $this;
    }

    /**
     * @param string $requireUppercaseCharacters
     *
     * @return $this
     */
    public function withRequireUppercaseCharacters($requireUppercaseCharacters)
    {
        $this->data['RequireUppercaseCharacters'] = $requireUppercaseCharacters;
        $this->options['query']['RequireUppercaseCharacters'] = $requireUppercaseCharacters;

        return $this;
    }

    /**
     * @param string $maxPasswordAge
     *
     * @return $this
     */
    public function withMaxPasswordAge($maxPasswordAge)
    {
        $this->data['MaxPasswordAge'] = $maxPasswordAge;
        $this->options['query']['MaxPasswordAge'] = $maxPasswordAge;

        return $this;
    }

    /**
     * @param string $maxLoginAttemps
     *
     * @return $this
     */
    public function withMaxLoginAttemps($maxLoginAttemps)
    {
        $this->data['MaxLoginAttemps'] = $maxLoginAttemps;
        $this->options['query']['MaxLoginAttemps'] = $maxLoginAttemps;

        return $this;
    }

    /**
     * @param string $hardExpiry
     *
     * @return $this
     */
    public function withHardExpiry($hardExpiry)
    {
        $this->data['HardExpiry'] = $hardExpiry;
        $this->options['query']['HardExpiry'] = $hardExpiry;

        return $this;
    }

    /**
     * @param string $minimumPasswordLength
     *
     * @return $this
     */
    public function withMinimumPasswordLength($minimumPasswordLength)
    {
        $this->data['MinimumPasswordLength'] = $minimumPasswordLength;
        $this->options['query']['MinimumPasswordLength'] = $minimumPasswordLength;

        return $this;
    }

    /**
     * @param string $requireLowercaseCharacters
     *
     * @return $this
     */
    public function withRequireLowercaseCharacters($requireLowercaseCharacters)
    {
        $this->data['RequireLowercaseCharacters'] = $requireLowercaseCharacters;
        $this->options['query']['RequireLowercaseCharacters'] = $requireLowercaseCharacters;

        return $this;
    }

    /**
     * @param string $requireSymbols
     *
     * @return $this
     */
    public function withRequireSymbols($requireSymbols)
    {
        $this->data['RequireSymbols'] = $requireSymbols;
        $this->options['query']['RequireSymbols'] = $requireSymbols;

        return $this;
    }
}
