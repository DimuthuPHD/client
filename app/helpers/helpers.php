<?php

if (!function_exists('isLoggedIn')) {
    function isLoggedIn()
    {
        $token = session('auth_data');
        return !empty($token);
    }
}

if (!function_exists('JobseekerLogged')) {
    function JobseekerLogged()
    {
        if (isLoggedIn()) {
            $token = session('auth_data');
            $user_type = $token['user_type'] ?? null;
            return $user_type == 'job_seeker' ? true : false;
        }
    }
}

if (!function_exists('ConsultantLogged')) {
    function ConsultantLogged()
    {

        if (isLoggedIn()) {
            $token = session('auth_data');
            $user_type = $token['user_type'] ?? null;
            return $user_type == 'consultant' ? true : false;
        }
    }
}
if (!function_exists('authDetail')) {
    function authDetail($attributePath = null, $default = null)
    {
        // Get the user data from the session.
        $userData = session('auth_data');

        // If no attribute path is provided, return all user data.
        if ($attributePath === null) {
            return $userData;
        }

        // Explode the attribute path into an array of keys.
        $attributeKeys = explode('.', $attributePath);

        // Traverse the nested arrays.
        foreach ($attributeKeys as $key) {
            if (!is_array($userData) || !array_key_exists($key, $userData)) {
                return $default;
            }
            $userData = $userData[$key];
        }

        // Return the final attribute value.
        return $userData;
    }
}

if (!function_exists('getUrlParameters')) {
    function getUrlParameters($url, $parameter, $default = null)
    {
        $urlParts = parse_url($url);
        $query = $urlParts['query'] ?? '';
        parse_str($query, $queryParameters);
        $parameter = $queryParameters[$parameter] ?? $default;

        return $parameter;
    }
}
