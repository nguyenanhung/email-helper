<?php
if (!function_exists('isEmail')) {
    function isEmail($mail = '')
    {
        return \nguyenanhung\Libraries\Email\Email::validateEmail($mail);
    }
}
