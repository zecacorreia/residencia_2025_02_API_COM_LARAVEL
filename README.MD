# Mentoria - API  2025.2

"Proposta: Criar um grupo de agentes de inteligência artificial para analisar ações e gerar conteúdos recomendando (ou não) a compra, com base em dados reais e percepção de mercado.
        •        Júlia: coleta os dados financeiros atualizados via Yahoo Finance.
        •        Pedro: analisa o que o mercado e a mídia estão dizendo sobre a empresa.
        •        Key: jornalista experiente que redige o conteúdo final, com base nos dados dos outros dois.
        •        Fator humano: revisa e aprova o conteúdo antes da publicação.

O objetivo é produzir matérias financeiras claras, confiáveis e baseadas em dados, com apoio de IA e curadoria humana"

e deveremos usar as seguintes tecnologias: Inteligência Artificial (Assistentes virtuais, processamento de linguagem natural, modelos de IA, etc...), HTML/CSS/JavaScript, Lavável + PHP , Python


então recomendo que vocês já vão estudando algumas dessas tecnologias, para que semana que vem, vocês possam estar mais familiarizados com tudo isso, beleza?   

## Diretórios

- src = Aplicação wordpress
- db = Arquivos do banco de dados (Local!!! Não subir para o git)
- DockerConfig = Arquivos de configuração do Docker

## Como rodar

### Levanta o ambiente (na raiz)

```bash
docker-compose up --build -d
```

### Acessando a aplicação

```bash
localhost
```

### Acessando o container da aplicação

```bash
docker exec -it agenda bash
```

### Acessando o container do Banco de Dados

```bash
docker exec -it db_agenda bash
```

### Se tiver problema no Windows

```
 --config core.autocrlf=input
```
