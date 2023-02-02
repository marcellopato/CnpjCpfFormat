<?php

namespace Yourusername\CnpjCpfFormat;

class CnpjCpfFormat
{
    /**
     * Formats a CNPJ number to the standard format
     *
     * @param string $cnpj
     * @return string
     */
    public static function formatCnpj(string $cnpj) : string
    {
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj);
    }

    /**
     * Removes formatting from a CNPJ number
     *
     * @param string $cnpj
     * @return string
     */
    public static function unformatCnpj(string $cnpj) : string
    {
        return preg_replace("/[^0-9]/", "", $cnpj);
    }

    /**
     * Formats a CPF number to the standard format
     *
     * @param string $cpf
     * @return string
     */
    public static function formatCpf(string $cpf) : string
    {
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpf);
    }

    /**
     * Removes formatting from a CPF number
     *
     * @param string $cpf
     * @return string
     */
    public static function unformatCpf(string $cpf) : string
    {
        return preg_replace("/[^0-9]/", "", $cpf);
    }
}
