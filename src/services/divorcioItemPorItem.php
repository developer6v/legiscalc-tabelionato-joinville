<?php
function divorcioItemPorItem ($valor) {
    $emolumento = $frj = $issqn = $total = 'undefined';
    if ($valor >= 0 && $valor <= 12581.70) {
        $emolumento = 156.02; $frj = 35.46; $issqn = 4.68; $total = 196.16;
    } elseif ($valor <= 18872.55) {
        $emolumento = 179.92; $frj = 40.90; $issqn = 5.40; $total = 226.21;
    } elseif ($valor <= 26421.57) {
        $emolumento = 255.41; $frj = 58.05; $issqn = 7.66; $total = 321.13;
    } elseif ($valor <= 32712.42) {
        $emolumento = 333.41; $frj = 75.78; $issqn = 10.00; $total = 419.20;
    } elseif ($valor <= 40261.44) {
        $emolumento = 416.22; $frj = 94.61; $issqn = 12.49; $total = 523.31;
    } elseif ($valor <= 49068.63) {
        $emolumento = 502.01; $frj = 114.11; $issqn = 15.06; $total = 631.18;
    } elseif ($valor <= 56617.65) {
        $emolumento = 591.34; $frj = 134.41; $issqn = 17.74; $total = 743.49;
    } elseif ($valor <= 65424.84) {
        $emolumento = 683.18; $frj = 155.29; $issqn = 20.50; $total = 858.96;
    } elseif ($valor <= 72973.86) {
        $emolumento = 778.80; $frj = 177.02; $issqn = 23.36; $total = 979.19;
    } elseif ($valor <= 83039.22) {
        $emolumento = 878.20; $frj = 199.61; $issqn = 26.35; $total = 1104.16;
    } elseif ($valor <= 91846.41) {
        $emolumento = 982.64; $frj = 223.35; $issqn = 29.48; $total = 1235.47;
    } elseif ($valor <= 101911.77) {
        $emolumento = 1089.57; $frj = 247.66; $issqn = 32.69; $total = 1369.92;
    } elseif ($valor <= 111977.13) {
        $emolumento = 1200.55; $frj = 272.89; $issqn = 36.02; $total = 1509.45;
    } elseif ($valor <= 122042.48) {
        $emolumento = 1317.30; $frj = 299.42; $issqn = 39.52; $total = 1656.24;
    } elseif ($valor <= 133366.02) {
        $emolumento = 1436.83; $frj = 326.59; $issqn = 43.10; $total = 1806.53;
    } elseif ($valor <= 144689.54) {
        $emolumento = 1526.16; $frj = 346.90; $issqn = 45.78; $total = 1918.84;
    } elseif ($valor <= 156013.07) {
        $emolumento = 1615.49; $frj = 367.20; $issqn = 48.46; $total = 2031.16;
    } elseif ($valor <= 168594.77) {
        $emolumento = 1702.31; $frj = 386.94; $issqn = 51.07; $total = 2140.31;
    } elseif ($valor <= 181176.48) {
        $emolumento = 1787.86; $frj = 406.38; $issqn = 53.64; $total = 2247.88;
    } elseif ($valor <= 193758.18) {
        $emolumento = 1872.15; $frj = 425.54; $issqn = 56.16; $total = 2353.85;
    } elseif ($valor <= 206339.87) {
        $emolumento = 1955.19; $frj = 444.41; $issqn = 58.66; $total = 2458.26;
    } elseif ($valor <= 256339.88) {
        $emolumento = 2005.19; $frj = 455.78; $issqn = 60.16; $total = 2521.13;
    } elseif ($valor <= 306339.89) {
        $emolumento = 2055.19; $frj = 467.14; $issqn = 61.66; $total = 2583.99;
    } elseif ($valor <= 356339.90) {
        $emolumento = 2105.19; $frj = 478.51; $issqn = 63.16; $total = 2646.86;
    } elseif ($valor <= 406339.91) {
        $emolumento = 2155.19; $frj = 489.87; $issqn = 64.66; $total = 2709.72;
    } elseif ($valor <= 456339.92) {
        $emolumento = 2205.19; $frj = 501.24; $issqn = 66.16; $total = 2772.59;
    } elseif ($valor <= 506339.93) {
        $emolumento = 2255.19; $frj = 512.60; $issqn = 67.66; $total = 2835.45;
    } elseif ($valor <= 556339.94) {
        $emolumento = 2305.19; $frj = 523.97; $issqn = 69.16; $total = 2898.32;
    } elseif ($valor <= 606339.95) {
        $emolumento = 2355.19; $frj = 535.33; $issqn = 70.66; $total = 2961.18;
    } elseif ($valor <= 656339.96) {
        $emolumento = 2405.19; $frj = 546.70; $issqn = 72.16; $total = 3024.05;
    } elseif ($valor <= 706339.97) {
        $emolumento = 2455.19; $frj = 558.06; $issqn = 73.66; $total = 3086.91;
    } elseif ($valor <= 756339.98) {
        $emolumento = 2505.19; $frj = 569.43; $issqn = 75.16; $total = 3149.78;
    } elseif ($valor <= 806339.99) {
        $emolumento = 2555.19; $frj = 580.79; $issqn = 76.66; $total = 3212.64;
    } elseif ($valor <= 856340.00) {
        $emolumento = 2605.19; $frj = 592.16; $issqn = 78.16; $total = 3275.51;
    } elseif ($valor <= 906340.01) {
        $emolumento = 2655.19; $frj = 603.52; $issqn = 79.66; $total = 3338.37;
    } elseif ($valor <= 956340.02) {
        $emolumento = 2705.19; $frj = 614.89; $issqn = 81.16; $total = 3401.24;
    } elseif ($valor <= 1006340.03) {
        $emolumento = 2755.19; $frj = 626.25; $issqn = 82.66; $total = 3464.10;
    } elseif ($valor <= 1056340.04) {
        $emolumento = 2805.19; $frj = 637.62; $issqn = 84.16; $total = 3526.97;
    } elseif ($valor <= 1106340.05) {
        $emolumento = 2855.19; $frj = 648.98; $issqn = 85.66; $total = 3589.83;
    } elseif ($valor <= 1156340.06) {
        $emolumento = 2905.19; $frj = 660.35; $issqn = 87.16; $total = 3652.70;
    } elseif ($valor <= 1206340.07) {
        $emolumento = 2955.19; $frj = 671.71; $issqn = 88.66; $total = 3715.56;
    } elseif ($valor <= 1256340.08) {
        $emolumento = 3005.19; $frj = 683.08; $issqn = 90.16; $total = 3778.43;
    } elseif ($valor <= 1306340.09) {
        $emolumento = 3055.19; $frj = 694.44; $issqn = 91.66; $total = 3841.29;
    } elseif ($valor <= 1356340.10) {
        $emolumento = 3105.19; $frj = 705.81; $issqn = 93.16; $total = 3904.16;
    } elseif ($valor <= 1406340.11) {
        $emolumento = 3155.19; $frj = 717.17; $issqn = 94.66; $total = 3967.02;
    } elseif ($valor <= 1456340.12) {
        $emolumento = 3205.19; $frj = 728.54; $issqn = 96.16; $total = 4029.89;
    } elseif ($valor <= 1506340.13) {
        $emolumento = 3255.19; $frj = 739.90; $issqn = 97.66; $total = 4092.75;
    } elseif ($valor <= 1556340.14) {
        $emolumento = 3305.19; $frj = 751.27; $issqn = 99.16; $total = 4155.62;
    } elseif ($valor <= 1606340.15) {
        $emolumento = 3355.19; $frj = 762.63; $issqn = 100.66; $total = 4218.48;
    } elseif ($valor <= 1656340.16) {
        $emolumento = 3405.19; $frj = 774.00; $issqn = 102.16; $total = 4281.35;
    } elseif ($valor <= 1706340.17) {
        $emolumento = 3455.19; $frj = 785.36; $issqn = 103.66; $total = 4344.21;
    } elseif ($valor <= 1756340.18) {
        $emolumento = 3505.19; $frj = 796.73; $issqn = 105.16; $total = 4407.08;
    } elseif ($valor <= 1806340.19) {
        $emolumento = 3555.19; $frj = 808.09; $issqn = 106.66; $total = 4469.94;
    } elseif ($valor <= 1856340.20) {
        $emolumento = 3605.19; $frj = 819.46; $issqn = 108.16; $total = 4532.81;
    } elseif ($valor <= 1906340.21) {
        $emolumento = 3655.19; $frj = 830.82; $issqn = 109.66; $total = 4595.67;
    } elseif ($valor <= 1956340.22) {
        $emolumento = 3705.19; $frj = 842.19; $issqn = 111.16; $total = 4658.54;
    } elseif ($valor <= 2006340.23) {
        $emolumento = 3755.19; $frj = 853.55; $issqn = 112.66; $total = 4721.40;
    } elseif ($valor <= 2056340.24) {
        $emolumento = 3805.19; $frj = 864.92; $issqn = 114.16; $total = 4784.27;
    } elseif ($valor <= 2106340.25) {
        $emolumento = 3855.19; $frj = 876.28; $issqn = 115.66; $total = 4847.13;
    } elseif ($valor <= 2156340.26) {
        $emolumento = 3905.19; $frj = 887.65; $issqn = 117.16; $total = 4910.00;
    } elseif ($valor <= 2206340.27) {
        $emolumento = 3955.19; $frj = 899.01; $issqn = 118.66; $total = 4972.86;
    } elseif ($valor <= 2256340.28) {
        $emolumento = 4005.19; $frj = 910.38; $issqn = 120.16; $total = 5035.73;
    } elseif ($valor <= 2306340.29) {
        $emolumento = 4055.19; $frj = 921.74; $issqn = 121.66; $total = 5098.59;
    } elseif ($valor <= 2356340.30) {
        $emolumento = 4105.19; $frj = 933.11; $issqn = 123.16; $total = 5161.46;
    } elseif ($valor <= 2406340.31) {
        $emolumento = 4155.19; $frj = 944.47; $issqn = 124.66; $total = 5224.32;
    } elseif ($valor <= 2456340.32) {
        $emolumento = 4205.19; $frj = 955.84; $issqn = 126.16; $total = 5287.19;
    } elseif ($valor <= 2506340.33) {
        $emolumento = 4255.19; $frj = 967.20; $issqn = 127.66; $total = 5350.05;
    } elseif ($valor <= 2556340.34) {
        $emolumento = 4305.19; $frj = 978.57; $issqn = 129.16; $total = 5412.92;
    } elseif ($valor <= 2606340.35) {
        $emolumento = 4355.19; $frj = 989.93; $issqn = 130.66; $total = 5475.78;
    } elseif ($valor <= 2656340.36) {
        $emolumento = 4405.19; $frj = 1001.30; $issqn = 132.16; $total = 5538.65;
    } elseif ($valor <= 2706340.37) {
        $emolumento = 4455.19; $frj = 1012.66; $issqn = 133.66; $total = 5601.51;
    } elseif ($valor <= 2756340.38) {
        $emolumento = 4505.19; $frj = 1024.03; $issqn = 135.16; $total = 5664.38;
    } elseif ($valor <= 2806340.39) {
        $emolumento = 4555.19; $frj = 1035.39; $issqn = 136.66; $total = 5727.24;
    } elseif ($valor <= 2856340.40) {
        $emolumento = 4605.19; $frj = 1046.76; $issqn = 138.16; $total = 5790.11;
    } elseif ($valor <= 2906340.41) {
        $emolumento = 4655.19; $frj = 1058.12; $issqn = 139.66; $total = 5852.97;
    } elseif ($valor <= 2956340.42) {
        $emolumento = 4705.19; $frj = 1069.49; $issqn = 141.16; $total = 5915.84;
    } elseif ($valor <= 3006340.43) {
        $emolumento = 4755.19; $frj = 1080.85; $issqn = 142.66; $total = 5978.70;
    } elseif ($valor <= 3056340.44) {
        $emolumento = 4805.19; $frj = 1092.22; $issqn = 144.16; $total = 6041.57;
    } elseif ($valor <= 3106340.45) {
        $emolumento = 4855.19; $frj = 1103.58; $issqn = 145.66; $total = 6104.43;
    } elseif ($valor <= 3156340.46) {
        $emolumento = 4905.19; $frj = 1114.95; $issqn = 147.16; $total = 6167.30;
    } elseif ($valor <= 3206340.47) {
        $emolumento = 4955.19; $frj = 1126.31; $issqn = 148.66; $total = 6230.16;
    } elseif ($valor <= 3256340.48) {
        $emolumento = 5005.19; $frj = 1137.68; $issqn = 150.16; $total = 6293.03;
    } elseif ($valor <= 3306340.49) {
        $emolumento = 5055.19; $frj = 1149.04; $issqn = 151.66; $total = 6355.89;
    } elseif ($valor <= 3356340.50) {
        $emolumento = 5105.19; $frj = 1160.41; $issqn = 153.16; $total = 6418.76;
    } elseif ($valor <= 3406340.51) {
        $emolumento = 5155.19; $frj = 1171.77; $issqn = 154.66; $total = 6481.62;
    } elseif ($valor > 3406340.51) {
        $emolumento = 5199.39; $frj = 1181.82; $issqn = 155.98; $total = 6537.19;
    }

    $result = [
        'emolumento' => $emolumento,
        'frj' => $frj,
        'issqn' => $issqn,
        'total' => $total,
    ];

    return $result;    
}


?>