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

rota[x] -> dist 1a3 -> dit 3a2 -> dist 2a1 - soma total disso     
--------------------------------------    
belem - belo horizonte - aracaju - belem    
--------------------------------------    
>Lógica
- Monta rotas aleatóriamente.
- Analisar a distância total de cada rota.
- Selecionar as melhores rotas.
- Eventualmente, realizar mutações nas piores rotas pós selecionadas (50%).
- Analisar melhor rota quando chegar ao fim da geração.