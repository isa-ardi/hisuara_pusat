<?php


function customBaseUrl($is_local, $subdomain = [], $ext = "")
{
    if ($is_local == true) {
        return (string) 'https://' . $_SERVER['HTTP_HOST'] . "/" . $subdomain[0];
    }
    $subdomain = implode('.', $subdomain);
    return  (string) 'https://' . $subdomain . ".rekapitung." . $ext;
}
