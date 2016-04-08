# PCV
PCV - Problema do Caixeiro Viajante.    
>classes e métodos    

- Tamanho da População: quantas variaçãoes de rotas criadas aleatóriamente.
- Seleção: selecionar as melhores rotas depois do crossover.
- Mutação: realiza aterações nos filhos(rotas) em determinado momento.
- Número máximo de gerações: determina quantas gerações devem ser criadas, para não entrar el loop infinito.
- Lista das cidades: informações das distâncias entre as cidades.

cidades [    
	"belem"    
	"aracaju"    
	"belo horizonte"    
]    

rota [    
	"1"    
	"3"    
	"2"    
	"1"    
]    

calcular rota    

rota[x] -> dist 1a3 -> dist 3a2 -> dist 2a1 - soma total disso     
--------------------------------------    
Belem - Belo Horizonte - Aracaju - Belem
--------------------------------------    
>Lógica Algoritmo Genético
- Gerar população inicial.
- Descartar uma parte dos indivíduos.
- Aplicar operadores de reprodução.
- Aplicar operadores de mutação.
- Se o critério de parada foi satisfeito, encerrar, senão, voltar ao passo 2.
--------------------------------------    
>Lógica
- Monta rotas aleatóriamente.
- Analisar a distância total de cada rota.
- Selecionar as melhores rotas.
- Eventualmente, realizar mutações nas piores rotas pós selecionadas (50%).
- Analisar melhor rota quando chegar ao fim da geração.

--------------------------------------
Array cidades(matriz) -> 'cidade1','distancia','cidade2'
- cidades[0][0] = 'cidade1'
- cidades[0][1] = 'distancia'
- cidades[0][2] = 'cidade2'

Array rotas
- rotas recebe cidades[x], cidades[x], cidades[x],...
*onde x é um número randômico que não repete

Compara distancia
- compara cada linha do rota com cidades, acumulnado a distancia percorrida