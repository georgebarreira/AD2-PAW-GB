# !/bin/bash - Script para iniciar o XAMPP no Linux mint
# antes de rodar deve se dar permissão de execução ao script com o 
# comando: chmod +x startXamp.sh 
# e ter o XAMPP instalado no diretório /opt/lampp
echo "A iniciar o XAMPP..."
sudo /opt/lampp/lampp start
echo "A aguardar 10 segundos para a conclusão da inicialização dos serviços..."
sleep 10
echo ""
echo "Estado dos serviços:"
sudo /opt/lampp/lampp status