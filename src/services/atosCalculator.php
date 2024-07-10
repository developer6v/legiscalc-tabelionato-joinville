<?php

function atosCalculator () {
    $services = [
        "apostilamento-de-haia" => [
            "Name" => 'Apostila de Haia',
            "Emolumento" => 50.33,
            "FRJ" => 11.44,
            "ISSQN" => 1.51,
            "Total" => 63.27,
        ],
        "atas-notariais" => [
            "Name" => 'Ata Notarial',
            "Emolumento" => 188.73,
            "FRJ" => 42.90,
            "ISSQN" => 5.66,
            "Total" => 237.28,
        ],
        "Autenticação de documento" => [
            "Name" => 'Autenticação de documento',
            "Emolumento" => 5.03,
            "FRJ" => 1.14,
            "ISSQN" => 0.15,
            "Total" => 6.3242,
        ],
        "certidoes" => [
            "Name" => 'Certidão',
            "Emolumento" => 14.47,
            "FRJ" => 3.29,
            "ISSQN" => 0.43,
            "Total" => 18.18,
        ],
        "escritura-declaratoria" => [
            "Name" => 'Escritura Declaratória',
            "Emolumento" => 80.00,
            "FRJ" => 18.18,
            "ISSQN" => 2.40,
            "Total" => 100.58,
        ],
        "escritura-emancipacao" => [
            "Name" => 'Escritura Emancipação',
            "Emolumento" => 80.00,
            "FRJ" => 18.18,
            "ISSQN" => 2.40,
            "Total" => 100.58,
        ],
        "escritura-pacto-antenupcial" => [
            "Name" => 'Escritura de Pacto Antenupcial',
            "Emolumento" => 80.00,
            "FRJ" => 18.18,
            "ISSQN" => 2.40,
            "Total" => 100.58,
        ],
        "escritura-uniao-estavel" => [
            "Name" => 'Escritura de União Estável',
            "Emolumento" => 80.00,
            "FRJ" => 18.18,
            "ISSQN" => 2.40,
            "Total" => 100.58,
        ],
        "outras-escrituras" => [
            "Name" => 'Outras Escrituras',
            "Emolumento" => 80.00,
            "FRJ" => 18.18,
            "ISSQN" => 2.40,
            "Total" => 100.58,
        ],
        "Inventário de Separação - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário de Separação - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 113.24,
            "FRJ" => 25.74,
            "ISSQN" => 3.40,
            "Total" => 142.38,
        ],
        "Inventário Dissolução de União Estável - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário Dissolução de União Estável - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 113.24,
            "FRJ" => 25.74,
            "ISSQN" => 3.40,
            "Total" => 142.38,
        ],
        "Inventário Divórcio - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário Divórcio - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 113.24,
            "FRJ" => 25.74,
            "ISSQN" => 3.40,
            "Total" => 142.38,
        ],
        "Reconhecimento de firma" => [
            "Name" => 'Reconhecimento de firma',
            "Emolumento" => 6.02,
            "FRJ" => 1.37,
            "ISSQN" => 0.18,
            "Total" => 7.56,
        ],
        "procuracao-collection" => [
            "Procuração de veículos" => [
                "Name" => 'Procuração de veículos',
                "Emolumento" => 71.71,
                "FRJ" => 16.30,
                "ISSQN" => 2.15,
                "Total" => 90.16,
            ],
            "Procuração para atos negociais" => [
                "Name" => 'Procuração para atos negociais',
                "Emolumento" => 71.71,
                "FRJ" => 16.30,
                "ISSQN" => 2.15,
                "Total" => 90.16,
            ],
            "Procuração para simples representação" => [
                "Name" => 'Procuração para simples representação',
                "Emolumento" => 46.55,
                "FRJ" => 10.58,
                "ISSQN" => 1.40,
                "Total" => 58.53,
            ],
            "Procuração para transacionar bens imóveis" => [
                "Name" => 'Procuração para transacionar bens imóveis',
                "Emolumento" => 148.46,
                "FRJ" => 33.74,
                "ISSQN" => 4.45,
                "Total" => 186.65,
            ],
            "Procuração previdenciária" => [
                "Name" => 'Procuração previdenciária',
                "Emolumento" => 22.65,
                "FRJ" => 5.15,
                "ISSQN" => 0.68,
                "Total" => 28.48,
            ]
        ],
        "testamento-collection" => [
            "Testamento COM especificação patrimonial" => [
                "Name" => 'Testamento COM especificação patrimonial',
                "Emolumento" => 729.74,
                "FRJ" => 165.87,
                "ISSQN" => 21.89,
                "Total" => 917.50,
            ],
            "Testamento SEM especificação patrimonial" => [
                "Name" => 'Testamento SEM especificação patrimonial',
                "Emolumento" => 239.06,
                "FRJ" => 54.34,
                "ISSQN" => 7.17,
                "Total" => 300.57,
            ]
        ]
    ];
    return $services;
}
?>
