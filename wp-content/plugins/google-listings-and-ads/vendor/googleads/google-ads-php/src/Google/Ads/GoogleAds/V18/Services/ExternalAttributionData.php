<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains additional information about externally attributed conversions.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.ExternalAttributionData</code>
 */
class ExternalAttributionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>optional double external_attribution_credit = 3;</code>
     */
    protected $external_attribution_credit = null;
    /**
     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>optional string external_attribution_model = 4;</code>
     */
    protected $external_attribution_model = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $external_attribution_credit
     *           Represents the fraction of the conversion that is attributed to the
     *           Google Ads click.
     *     @type string $external_attribution_model
     *           Specifies the attribution model name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>optional double external_attribution_credit = 3;</code>
     * @return float
     */
    public function getExternalAttributionCredit()
    {
        return isset($this->external_attribution_credit) ? $this->external_attribution_credit : 0.0;
    }

    public function hasExternalAttributionCredit()
    {
        return isset($this->external_attribution_credit);
    }

    public function clearExternalAttributionCredit()
    {
        unset($this->external_attribution_credit);
    }

    /**
     * Represents the fraction of the conversion that is attributed to the
     * Google Ads click.
     *
     * Generated from protobuf field <code>optional double external_attribution_credit = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setExternalAttributionCredit($var)
    {
        GPBUtil::checkDouble($var);
        $this->external_attribution_credit = $var;

        return $this;
    }

    /**
     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>optional string external_attribution_model = 4;</code>
     * @return string
     */
    public function getExternalAttributionModel()
    {
        return isset($this->external_attribution_model) ? $this->external_attribution_model : '';
    }

    public function hasExternalAttributionModel()
    {
        return isset($this->external_attribution_model);
    }

    public function clearExternalAttributionModel()
    {
        unset($this->external_attribution_model);
    }

    /**
     * Specifies the attribution model name.
     *
     * Generated from protobuf field <code>optional string external_attribution_model = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalAttributionModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_attribution_model = $var;

        return $this;
    }

}

