<?php

function echocpf(string $cpf)
{
    return substr_replace(
        substr_replace(
            substr_replace(
                $cpf,
                '.',
                3,
                0
            ),
            '.',
            7,
            0
        ),
        '-',
        11,
        0
    );
}

function echorg(string $rg)
{
    return substr_replace(
        substr_replace(
            substr_replace(
                $rg,
                '.',
                2,
                0
            ),
            '.',
            6,
            0
        ),
        '-',
        10,
        0
    );
}

function echodate(string $data)
{
    return date_format(
        (new DateTimeImmutable($data)),
        "d/m/Y"
    );
}

function echocel(string $celular)
{
    return substr_replace(
        substr_replace(
            substr_replace(
                substr_replace(
                    $celular,
                    '(',
                    0,
                    0
                ),
                ')',
                3,
                0
            ),
            ' ',
            4,
            0
        ),
        '-',
        10,
        0
    );
}

function echomoney(string $money)
{
    return number_format((float)$money, 2, ',', '');
}
