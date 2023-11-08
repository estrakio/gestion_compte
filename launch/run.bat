if not defined in_subprocess (cmd /k set in_subprocess=y ^& %0 %*) & exit )

docker-compose  -p gestion_compte -f ../docker/docker-compose.yml up