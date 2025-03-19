# Projeto de Cálculo da Quantidade de Água Recomendada

Este projeto tem como objetivo calcular a quantidade de água recomendada para uma pessoa com base no seu peso e altura. A fórmula utiliza métricas simples para fornecer uma recomendação personalizada sobre a quantidade diária de água necessária para uma hidratação adequada.

## Funcionalidade

A classe `RecomendacaoAgua` foi implementada em PHP para calcular e exibir a quantidade de água recomendada para um indivíduo, levando em consideração dois fatores principais:

- **Peso corporal**: A quantidade de água é calculada com base no peso da pessoa.
- **Altura**: Um ajuste adicional é feito para pessoas com altura superior a 180 cm, já que indivíduos mais altos podem precisar de mais líquidos.

## Métricas Utilizadas

O cálculo da quantidade de água recomendada utiliza as seguintes métricas:

1. **Peso Corporal**: A recomendação de água é baseada no peso da pessoa, considerando a necessidade de cerca de **30 ml de água por cada kg de peso**. Isso pode variar entre **30 ml a 40 ml por kg**, dependendo de fatores como atividade física e condições de saúde.
   
   Exemplo:
   - Uma pessoa de 70 kg precisaria de:  
     `70 kg x 30 ml = 2100 ml (2,1 litros)` a `70 kg x 40 ml = 2800 ml (2,8 litros)` de água por dia.

2. **Altura**: Pessoas com altura superior a 180 cm recebem um ajuste, com um adicional de **500 ml de água** para compensar a maior massa corporal e área de superfície.
   
   Exemplo:
   - Uma pessoa de 60 kg e 185 cm de altura receberia uma recomendação de água de `60 kg x 30 ml = 1800 ml + 500 ml = 2300 ml`.


## Exemplo de Resultados

Aqui estão alguns exemplos de entradas e saídas do cálculo:

1. **Pessoa de 70 kg e 175 cm**:
   - Resultado: `2100 ml a 2800 ml` por dia.

2. **Pessoa de 80 kg e 160 cm**:
   - Resultado: `2400 ml a 3200 ml` por dia.

3. **Pessoa de 60 kg e 185 cm** (ajuste devido à altura):
   - Resultado: `2300 ml` por dia (ajuste de 500 ml por ser mais alta que 180 cm).

