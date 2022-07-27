<?php

const pantry_id = "";


function get_pantry(){ // Retreives your pantry database information

    $url = "https://getpantry.cloud/apiv1/pantry/" . pantry_id;
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json'
        ),
    ));
    $res = curl_exec($ch);
    if (curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res, true);
    }

}


function update_pantry($name, $description){ // Updates your pantry information

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://getpantry.cloud/apiv1/pantry/' . pantry_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS =>"{
            \"name\": \"$name\",
            \"description\": \"$description\"
        }",
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_error($curl)){
        var_dump(curl_error($curl));
    }else{
        return json_decode($response, true);
    }
}

function create_basket($basket_name){ // Create and/or replace a basket

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://getpantry.cloud/apiv1/pantry" . pantry_id . "/basket/$basket_name",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "derp": "flerp123",
        "testPayload": true,
        "keysLength": 3
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

    if (curl_error($curl)){
        var_dump(curl_error($curl));
    }else{
        return json_decode($response, true);
    }
}


function get_basket($basket_name){ // Get basket's information

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://getpantry.cloud/apiv1/pantry/' . pantry_id . "/basket/$basket_name",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_error($curl)){
        var_dump(curl_error($curl));
    }else{
        return json_decode($response, true);
    }
}


function revrite_basket($basket_name, $data){ // Revrites all basket's infromation or simply adds them

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://getpantry.cloud/apiv1/pantry/'. pantry_id .  "/basket/$basket_name",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_error($curl)){
        var_dump(curl_error($curl));
    }else{
        return json_decode($response, true);
    }
}

function update_basket($basket_name, $append_data){ // Appends data to new or existing basket, overwrites values of existing keys and append values to nested objects or arrays, pass data as a php array
    $old_data = get_basket($basket_name);
    $new_data = json_encode(array_replace($old_data, $append_data));
    $response = revrite_basket($basket_name, $new_data);
    return json_decode($response, true);
}

function delete_basket($basket_name){

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://getpantry.cloud/apiv1/pantry/'. pantry_id .  "/basket/$basket_name",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

    if (curl_error($curl)){
        var_dump(curl_error($curl));
    }else{
        return json_decode($response, true);
    }
}

?>