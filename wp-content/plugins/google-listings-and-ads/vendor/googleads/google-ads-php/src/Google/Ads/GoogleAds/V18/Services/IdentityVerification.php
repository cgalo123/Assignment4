<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/identity_verification_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An identity verification for a customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.IdentityVerification</code>
 */
class IdentityVerification extends \Google\Protobuf\Internal\Message
{
    /**
     * The verification program type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.IdentityVerificationProgramEnum.IdentityVerificationProgram verification_program = 1;</code>
     */
    protected $verification_program = 0;
    /**
     * The verification requirement for this verification program for this
     * customer.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.services.IdentityVerificationRequirement identity_verification_requirement = 2;</code>
     */
    protected $identity_verification_requirement = null;
    /**
     * Information regarding progress for this verification program for this
     * customer.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.services.IdentityVerificationProgress verification_progress = 3;</code>
     */
    protected $verification_progress = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $verification_program
     *           The verification program type.
     *     @type \Google\Ads\GoogleAds\V18\Services\IdentityVerificationRequirement $identity_verification_requirement
     *           The verification requirement for this verification program for this
     *           customer.
     *     @type \Google\Ads\GoogleAds\V18\Services\IdentityVerificationProgress $verification_progress
     *           Information regarding progress for this verification program for this
     *           customer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\IdentityVerificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The verification program type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.IdentityVerificationProgramEnum.IdentityVerificationProgram verification_program = 1;</code>
     * @return int
     */
    public function getVerificationProgram()
    {
        return $this->verification_program;
    }

    /**
     * The verification program type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.IdentityVerificationProgramEnum.IdentityVerificationProgram verification_program = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVerificationProgram($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\IdentityVerificationProgramEnum\IdentityVerificationProgram::class);
        $this->verification_program = $var;

        return $this;
    }

    /**
     * The verification requirement for this verification program for this
     * customer.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.services.IdentityVerificationRequirement identity_verification_requirement = 2;</code>
     * @return \Google\Ads\GoogleAds\V18\Services\IdentityVerificationRequirement|null
     */
    public function getIdentityVerificationRequirement()
    {
        return $this->identity_verification_requirement;
    }

    public function hasIdentityVerificationRequirement()
    {
        return isset($this->identity_verification_requirement);
    }

    public function clearIdentityVerificationRequirement()
    {
        unset($this->identity_verification_requirement);
    }

    /**
     * The verification requirement for this verification program for this
     * customer.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.services.IdentityVerificationRequirement identity_verification_requirement = 2;</code>
     * @param \Google\Ads\GoogleAds\V18\Services\IdentityVerificationRequirement $var
     * @return $this
     */
    public function setIdentityVerificationRequirement($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Services\IdentityVerificationRequirement::class);
        $this->identity_verification_requirement = $var;

        return $this;
    }

    /**
     * Information regarding progress for this verification program for this
     * customer.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.services.IdentityVerificationProgress verification_progress = 3;</code>
     * @return \Google\Ads\GoogleAds\V18\Services\IdentityVerificationProgress|null
     */
    public function getVerificationProgress()
    {
        return $this->verification_progress;
    }

    public function hasVerificationProgress()
    {
        return isset($this->verification_progress);
    }

    public function clearVerificationProgress()
    {
        unset($this->verification_progress);
    }

    /**
     * Information regarding progress for this verification program for this
     * customer.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.services.IdentityVerificationProgress verification_progress = 3;</code>
     * @param \Google\Ads\GoogleAds\V18\Services\IdentityVerificationProgress $var
     * @return $this
     */
    public function setVerificationProgress($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Services\IdentityVerificationProgress::class);
        $this->verification_progress = $var;

        return $this;
    }

}

