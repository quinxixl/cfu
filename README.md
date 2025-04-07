zapusk - docker-compose up --build
site: localhost
phpmyadmin: localhost:8081
dump db: docker-compose exec db mysqldump -u root -p cfu > dump.sql
если изменяются данные в бд, то нужно прописать эту команду: docker-compose down -v
затем опять запуск
