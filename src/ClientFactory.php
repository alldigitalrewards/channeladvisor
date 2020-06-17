<?php

namespace AllDigitalRewards\ChannelAdvisor;

class ClientFactory
{
    public static function getClient(): Client
    {
        $refresh_token = getenv('CHANNELADVISOR_REFRESH_TOKEN');
        if ($refresh_token === false) {
            throw new \Exception('Environment variable CHANNELADVISOR_REFRESH_TOKEN is not set.');
        }

        $application_id = getenv('CHANNELADVISOR_APPLICATION_ID');
        if ($application_id === false) {
            throw new \Exception('Environment variable CHANNELADVISOR_APPLICATION_ID is not set.');
        }

        $shared_secret = getenv('CHANNELADVISOR_SHARED_SECRET');
        if ($shared_secret === false) {
            throw new \Exception('Environment Variable CHANNELADVISOR_SHARED_SECRET is not set.');
        }

        $profile_id = getenv('CHANNELADVISOR_PROFILE_ID');
        if ($profile_id === false) {
            throw new \Exception('Environment Variable CHANNELADVISOR_PROFILE_ID is not set.');
        }

        return new Client(
            $refresh_token,
            $application_id,
            $shared_secret,
            $profile_id
        );
    }
}
