<?php

function checkJsonTariffs($item)
{
    $find_tariff = \App\Models\Tariff::where('id', $item)->first();
    return $find_tariff->tariff_code .' '. $find_tariff->description;
}

function checkJsonDrugs($item)
{
    $find_drug = \App\Models\Drug::where('id', $item)->first();
    return $find_drug->drug_name .' '. $find_drug->dosage_form .' '. $find_drug->strengths .' '. $find_drug->presentation;
}
