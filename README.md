# INSTALAR FRAMEWORK
#
# ter composer instalado
# - apt-get install composer -y
#
# ter modulos do php instalado
#    - olhar documentação em https://laravel.com/docs/5.7
#
# instalar framework
# - composer create-project --prefer-dist laravel/laravel estudos "5.3.*"
# 
# EDITAR /etc/hosts da máquina host
#   - 172.17.0.2      laravel
# CRIAR IMAGEM APARTIR DO DOCKER FILE
# estar dentro do diretório do dockerfile e executar
#   - sudo docker build -t laravel/laravel-estudo:1.0 .
#docker
# RODAR DOCKER FILE COM APACHE PASSANDO CAMINHO DO PROJETO
# sudo docker run -ti -p 3333:80 --add-host=127.0.1.1:laravel -v /home/jefferson/Documentos/workspace/:/var/www/html laravel/laravel-estudo:1.0
# se der erro 500, dar chmod 777 -R /estudos/
