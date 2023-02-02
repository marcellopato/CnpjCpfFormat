# CNPJ-CPF Format

This is a simple library to format and unformat CNPJ and CPF numbers in PHP.

## Installation

To install this library, run the following command:
`composer require marcellopato/cnpj-cpf-format`

## Usage

Here's an example of how to use this library:
`use Marcellopato\CnpjCpfFormat\CnpjCpfFormat;`


```
// Formatting a CNPJ number
$cnpj = '11222333000199';
$formattedCnpj = CnpjCpfFormat::formatCnpj($cnpj);
```

## Acknowledgments

This library was made possible with the help of ChatGPT, created by OpenAI.

