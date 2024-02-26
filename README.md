# Projeto: Curso Conteinerização

<img src="https://img.shields.io/badge/docker-compose?color=blue"/>

## 1. Descrição

Esse projeto possui duas imagens: uma da aplicação em php e outra do banco mysql. O objetivo deste projeto foi construir um docker-compose.yml que fizesse a conexão desses dois conteiners.  

* Dockerfile mysql: 
No arquivo Dockerfile do mysql usamos a versão 5.7 da imagem do mysql e estamos expondo a porta 3306 para acessar o banco. 

* Dockerfile php: 
No arquivo Dockerfile do php usamos a versão 7.4 da imagem do php e estamos expondo a porta 80 para acessar a aplicação. Além disso, é necessário fazer a instalação do mysqli nesta imagem para que ela seja executada adequadamente.


## 2. DockerHub

Se preferir baixar as imagens diretamente do DockerHub, acesse os links: 

* [Dockerfile php](https://hub.docker.com/layers/camilamarquess/projeto-docker/v1-php/images/sha256-01edaf219313419061c765a2b82e41ea2e1aa76c21f77e134b98edda9f51d499?context=repo)
* [Dockerfile mysql](https://hub.docker.com/layers/camilamarquess/projeto-docker/v1/images/sha256-01edaf219313419061c765a2b82e41ea2e1aa76c21f77e134b98edda9f51d499?context=repo)


## 3. Instalação

Você pode clonar este projeto usando o link abaixo:

```
git clone 
```

Antes de executar o comando abaixo, tenha certeza que você tenha o docker e docker compose instalados em sua máquina de acordo com o seu sistema operacional: 
* [Instalando o Docker](https://docs.docker.com/engine/install/) 
* [Instalando o Docker Compose](https://docs.docker.com/desktop/install/windows-install/).

Para executar a aplicação, você deve executar: 

```
docker-compose up -d
```

Então você conseguirá visualizar o html da sua aplicação no endereço `localhost:8080` no seu navegador.

Para parar a aplicação, digite: 

```
docker-compose down
```