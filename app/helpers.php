<?php

use App\Models\aboutsection;
use App\Models\herosection;
use App\Models\setting;

function get_hero_data() {
    $data = herosection::latest()->first();
    return $data;
}

function get_about_data() {
    $data = aboutsection::latest()->first();
    return $data;
}

function get_setting_value($key) {

    $data = setting::where('key', $key)->first();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }

}