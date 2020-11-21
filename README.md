como executar o projeto

tenha instalado na máquina o composer e o nodejs
execute <composer install> para instalar as dependências do laravel
execute <npm install> para instalar as dependências do node
copiei o arquivo .env.example para .env e configure de acordo
execute <php artisan key:generate> para gerar a chave de segurança
execute <php artisan migrate --seed> para gerar o banco de dados
executerode  para iniciar o servidor
<php artisan serve>
para compilar os arquivos js e scss execute <npm run watch>


com docker

tenha instalado o docker e o docker-compose
execute docker-compose up composer para instalar as dependências caso seja o primeiro run porque irá dar erro se executar o container da aplicação direto, o container da aplicação não está aguardando o container do composer finalizar
execute docker-compose up para subir a aplicação
obs:

caso ocorra algum problema de permissão é só dar permissão de execução nos entrypoints
se tiver problemas de cors mude a chave paths => ["api/*"] para paths => ["*"] em config/cors.php
OBSERVAÇÃO IMPORTANTE
ao atualizar os arquivos no server NÃO trocar a pasta STORAGE pois contém os dados dos usuários

quando colocar os arquivos no FTP mudar o server.php da raíz para index.php

WEBCONSOLE
user: next-tecnologia
pass: msxp0810
TODO
[] puxar numeros do banco nos cards da dashborad no produtor

[] verificar se os emails estão sendo enviados (de registro e de confirmação de email - todos os usuários)

[] corrigir retorno dos dados ao inserir comentário, voltando password junto

[] deixar URLs mais amigaveis

[] e-mails para departamentos. Vamos criar contas de e-mails (teams)

[] sistema de afiliados (teams)

[] ajustar responsividade

[] CKEditor (editor para adicionar as avaliações ?)

fase de finalização

[] mudar o tamanho máximo de upload de arquivo no server

[] remover unused imports

[] comprimir imagens - ref: https://developers.google.com/speed/webp/docs/using

LINKS UTEIS
https://appdividend.com/2018/05/03/how-to-create-filters-in-laravel/

https://github.com/protonemedia/laravel-ffmpeg

https://medium.com/canal-tech/how-video-streaming-works-on-the-web-an-introduction-7919739f7e1

TERMOS ÚTEIS
chunk upload
bandwidth (consumir video)