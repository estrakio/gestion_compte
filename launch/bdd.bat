@echo off
echo "BIENVENUE DANS LA BASE DE DONNEES "
docker exec -it gestion_compte-db_compte-1 bash -c "psql -d gestionCompteDatabase -U adminCompte"