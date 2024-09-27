<?php

use Hidehalo\Nanoid\Client;

if (!function_exists('generateNanoId')) {
    /**
     * @param string $alphabet
     * @param int $length
     * @param string $prefix
     * @return string
     */
    function generateNanoId(string $alphabet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', int $length = 12, string $prefix = ''): string
    {
        $client = new Client();

        if ($alphabet) {
            return $prefix . $client->formattedId($alphabet, $length);
        }

        return $prefix . $client->generateId($length, Client::MODE_DYNAMIC);
    }
}

if (!function_exists('isImpersonated')) {
    function isImpersonated()
    {
        return session()->has('impersonator_id');
    }
}
