<?php
function getSetting($setting_key)
{
    $system_data=config('settings');
    if ($setting_key){
        return 'hi';
    }else{
        return '';
    }
}
