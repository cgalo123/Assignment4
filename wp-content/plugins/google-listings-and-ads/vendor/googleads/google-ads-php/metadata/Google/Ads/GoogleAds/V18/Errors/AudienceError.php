<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/errors/audience_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Errors;

class AudienceError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v18/errors/audience_error.protogoogle.ads.googleads.v18.errors"�
AudienceErrorEnum"�
AudienceError
UNSPECIFIED 
UNKNOWN
NAME_ALREADY_IN_USE
DIMENSION_INVALID
AUDIENCE_SEGMENT_NOT_FOUND\'
#AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED
DUPLICATE_AUDIENCE_SEGMENT
TOO_MANY_SEGMENTS$
 TOO_MANY_DIMENSIONS_OF_SAME_TYPE

IN_USE	
MISSING_ASSET_GROUP_ID
4
0CANNOT_CHANGE_FROM_CUSTOMER_TO_ASSET_GROUP_SCOPEB�
#com.google.ads.googleads.v18.errorsBAudienceErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/errors;errors�GAA�Google.Ads.GoogleAds.V18.Errors�Google\\Ads\\GoogleAds\\V18\\Errors�#Google::Ads::GoogleAds::V18::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

