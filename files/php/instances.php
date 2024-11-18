<?php
$instance['test01'] = array_merge($instance['test01'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "fabric",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Hypixel",
        "ip" => "mc.hypixel.net",
        "port" => 25565
    )
));

//$instance['PokeMoonX'] = array_merge($instance['PokeMoonX'], array(
//    "loadder" => array(
//        "minecraft_version" => "1.16.5",
//        "loadder_type" => "forge",
//        "loadder_version" => "1.16.5-36.2.35"
//    ),
//    "verify" => false,
//    "ignored" => array(),
//  "whitelist" => array(),
//    "whitelistActive" => false,
//    "status" => array(
//        "nameServer" => "PokeMoonX",
//        "ip" => "178.32.106.234",
//        "port" => 25599
//    )
//));
?>