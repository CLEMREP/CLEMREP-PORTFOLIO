-- MySQL dump 10.13  Distrib 8.0.32, for macos13.0 (arm64)
--
-- Host: localhost    Database: clemrep_folio
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_03_05_175149_create_posts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'Delmas Stage - Plateforme gestion de stage','delmas-stage-plateforme-gestion-de-stage','## Contexte\n\nLe projet est né d\'un besoin de simplification des suivis de recherches de stage. Au Lycée Carcoüet lors des recherches de stage, les professeurs viennent créer un dossier Google Drive pour chacun des élèves. Celui-ci regroupe toutes les informations de l\'élève (lettre de motivation, cv, fiche étudiante ...) mais aussi les étapes dans ses démarches envers les entreprises.\nSuivre tous les élèves et l\'avancement de leurs recherches à travers un Google Drive n\'était pas pratique, c\'est pour cela que la plateforme Delmas Stage a vu le jour.\n\n## Objectif\n\nLes objectifs de la plateforme sont les suivants : simplification et centralisation. L\'application permet de centraliser toutes les démarches d\'une promotion. C\'est-à-dire qu\'un professeur peut voir dans un seul tableau toutes les démarches effectuées par ces élèves. Le tableau permet de voir le status de la démarche (accepté, en attente, refusé) ce qui permet facilement de voir si l\'étudiant a trouvé une entreprise.\nDe plus, les professeurs ont accès aux fiches étudiantes de tous leurs élèves, ce qui permet de voir les démarches d\'un étudiant, ses motivations, son secteur de recherche ou encore ses préférences.\nEnfin, au fil des années, la plateforme permettra de regrouper un réseau d\'entreprise qui recrutent des stagiaires.\n\n## Stack Technique\n\n1. Laravel\n2. Livewire\n3. Blade\n4. SQL\n\nLe projet est open-source, disponible sur [GitHub](https://github.com/CLEMREP/delmas-stage). L\'application est hébergée sous docker.\n\n## Présentation\n\nLe site distingue 4 rôles, super administrateur, administrateur, professeur et élève.\n\nLes étudiants peuvent : \n1.	Gestion des entreprises (ils ont accès à toutes les entreprises de leur promotion).\n2.	Gestion des contacts rattachés aux entreprises.\n3.	Création de démarches, qui permet de lier une entreprise et un contact à une démarche.\n4.	Visualisation des objectifs postulés par les professeurs.\n5.	Gestion de leurs informations personnelles.\n\n![](http://clemrep-folio.test/storage/ovNIdM64vrUyoRruLc6TE8v3VoxGh18ChucVglb8.png)\n\nLes professeurs sont rattachés à une ou plusieurs promotions, ils peuvent :\n1.	Gestion des étudiants de leur(s) promotion(s).\n2.	Visualiser les démarches des étudiants.\n3.	Gestion des objectifs pour les promotions.\n4.	Paramètres de compte.\n\n![](http://clemrep-folio.test/storage/CvDeH4DAiNJOsUuEjPF4eDT7Mj8mdE6c80PYOtzM.png)\n\nLes administrateurs sont rattachés à une ou plusieurs promotions, ils peuvent :\n1.	Gestion des professeurs.\n2.	Gestion des étudiants.\n3.	Gestion des promotions.\n4.	Visualiser les démarches des étudiants.\n5.	Visualiser les fiches des entreprises.\n6.	Paramètres de compte.\n\n![](http://clemrep-folio.test/storage/QwG89ip2kmMDtg0c04Uh2wsELCI5eigKtnpJUKrp.png)\n\nLes super administrateurs peuvent :\n1.	Gestion des administrateurs.\n2.	Gestion des professeurs.\n3.	Gestion des séries (Une série possède une ou plusieurs promotions : Exemple la série SIO possède la promotion SIO 1 et SIO 2).\n4.	Gestion des promotions.\n5.	Paramètres de compte.\n\n![](http://clemrep-folio.test/storage/VodmnF01PO9C3hDmIdXZuWcQMQ2R2QzPb9mhGPUI.png)\n\nDurant le développement de l\'application, j\'ai pu répondre aux demandes d\'évolutions que mes professeurs ont pu me faire afin d\'améliorer la plateforme mais aussi corriger certains bugs.\n\nDe plus, pour mener à bien le projet, j\'ai dû faire de la veille technologique sur Laravel Livewire car c\'était la première fois que je travaillais avec ce package.\n\n## Conclusion\n\nLe projet fût une expérience très enrichissante, il a permis de renforcer mes compétences sur le framework Laravel. De plus, j\'ai pu découvrir de nouvelles choses comme la librairie Laravel Livewire permettant de faire du Ajax tout en gardant le confort de PHP.\n\n#### Compétences\n\n1. B1.2 - Répondre aux incidents et aux demandes d’assistance et d’évolution\n2. B1.5 - Mettre à disposition des utilisateurs un service informatique\n3. B1.6 - Organiser son développement professionnel','ack4bD2WJAZ3iVLB1fZfUcbusGKddm-metaZGVsbWFzX3N0YWdlX3Byb2plY3QucG5n-.png',1,'2023-05-05 10:40:57','2023-05-06 10:50:03',NULL),(2,1,'Laravel Pint, mon analyse.','laravel-pint-mon-analyse','Laravel Pint est un outil permettant **d\\\'améliorer la qualité du code**, notamment en suivant des standards comme le PSR-1, PSR-2, laravel, symfony, ...\n\nIl permet **d\'analyser** et de **corriger** en fonction du standard utilisé. Celui-ci est sans dépendance, construit directement sur PHP-CS-Fixer. Il est très facile d\\\'installer ce package, il suffit d\'exécuter cette commande :\n\n```php\ncomposer require laravel/pint --dev\n```\n\nLaravel Pint possède un gros avantage par rapport à PHP-CS-Fixer, il n\'a pas besoin de configuration pour être utilisé.\n\nCependant, il est tout de même possible de créer un fichier ***pint.json*** à la racine du projet pour y configurer des préréglages :\n```json\n{\n    \"preset\": \"psr12\",\n}\n```\n\nL\'outil peut s\'exécuter de plusieurs façons :\n\n1. *./vendor/bin/pint*\n2. *./vendor/bin/pint --test*\n3. *./vendor/bin/pint -v*\n\nLa première commande permet d\'analyser le code et d\'effectuer directement les modifications.\n\n![](https://ayso32m5n.cloudimg.io/v7/https://web-id.fr/storage/articles%2FLaravel%20Pint%2FCapture%20d%E2%80%99e%CC%81cran%202022-07-06%20a%CC%80%2011.42.06.png?width=570)\n\nLa seconde commande permet seulement d\'analyser le code.\n\n![](https://ayso32m5n.cloudimg.io/v7/https://web-id.fr/storage/articles%2FLaravel%20Pint%2FCapture%20d%E2%80%99e%CC%81cran%202022-07-06%20a%CC%80%2011.43.19.png?width=570)\n\nLa dernière commande permet d\'analyser et d\'effectuer les modifications tout en affichant les détails de celles-ci.\n\n![](https://ayso32m5n.cloudimg.io/v7/https://web-id.fr/storage/articles%2FLaravel%20Pint%2FCapture%20d%E2%80%99e%CC%81cran%202022-07-06%20a%CC%80%2011.42.48.png?width=570)\n\nOn peut voir que Laravel Pint implémente des règles comme ***braces, blanklinebeforestatement***. Il faut savoir que depuis le fichier configuration, nous pouvons désactiver certaines règles.\n\n```json\n{\n    \"preset\": \"psr12\",\n        \"rules\": {\n            \"braces\": false\n        }\n}\n```\n\nIl est également possible d\'isoler certain dossier ou fichier que nous ne voulons pas tester :\n\n```json\n{\n    \"exclude\": [\n        \"my-specific/folder\"\n    ]\n}\n```\n\n```json\n{\n    \"notName\": [\n        \"*-my-file.php\"\n    ]\n}\n```\n\nAprès avoir testé le package, je trouve que niveau performances (temps d\'exécution, configuration, ...) il est au bien dessus de PHP-CS-Fixer.','TCQqmnW5ZGhoyR6rly5W0ZPKWbCbwi-metabWF4cmVzZGVmYXVsdC5qcGc=-.jpg',1,'2023-05-05 10:40:57','2023-05-06 13:36:24',NULL),(3,1,'Mairie Aussonne - Gestion d\'équipes sportives d\'une mairie.','mairie-aussonne-gestion-dequipes-sportives-dune-mairie','## Contexte\n\nLa Mairie Aussonne possède beaucoup d\'associations sportives. Nous sommes chargés de compléter le développement de l\'application en travaillant avec la méthode AGILE sous forme de sprint. Nous sommes en équipe de deux et nous devons répartir les tickets qui nous sont fournis afin de répondre dans les temps aux demandes d\'évolutions.\n\n## Objectif\n\nL\'objectif de ce projet est de mettre en application de nombreuses notions qu\'on a pu aborder dans nos deux années de BTS. Nous avons pu approfondir nos connaissances en PHP en développant avec la méthode MVC. De plus, nous avons appliqué des correctifs au niveau sécurité en utilisant les notions vu en cours (Injection SQL, XSS, ...).\n\n## Présentation\n\nLe projet a été réalisé en suivant des tickets fournis par notre chef de projet (Mme Delmas). Les tickets pouvaient ressembler à ça :\n\n![](http://clemrep-folio.test/storage/xYlRgISNsWMzwxnEpC4YMosaidk6WQ1jDZrZZZNU.png)\n\nL\'application possède plusieurs tableaux de bord en fonction de son rôle (admin, adhérent, entraineur). \n\nAdministrateur :\n1. Ajout, modification des spécialités.\n2. Affectation d’une spécialité aux entraineurs.\n3. Affectation d’une spécialité aux équipes.\n4. Ajout de la visualisation de la spécialité pour les entraineurs.\n5. Ajout de la visualisation de la spécialité pour les équipes.\n\nEntraineur :\n1. Gérer ses équipes.\n2. Gérer ses adhérents.\n\nAdhérent :\n1. Visualisation de ses coéquipiers.\n\nTous les rôles pouvaient modifier leurs profils. De plus, des actualités étaient publiées sur la page principale.\n\nLe projet possède aussi un test afin de s\'assurer de la qualité.\n\n```php\npublic function testCreateTeamAndCoach()\n{\n   $lEntraineur = new metierEntraineur(1, \"dupont\",\"dupont\",\"romain\");\n   $lEquipe = new metierEquipe(1,\"natation\", 254, 5, 98, \"Homme\", $lEntraineur);\n   $lEquipe2 = new metierEquipe(2,\"natation\", 254, 5, 98, \"Homme\", $lEntraineur);\n   $lAdherent = new metierAdherent(1, \"laban\", \"alban\", 12, \"Homme\", \"albanlaban\", \"alban\",$lEquipe);\n\n   $this->assertSame($lEquipe, $lAdherent->getlEquipeDelAdherent());\n\n   $lAdherent->setLEquipeDeLAdherent($lEquipe2);\n\n   $this->assertSame($lEquipe2, $lAdherent->getlEquipeDelAdherent());\n\n   $this->assertSame(\"dupont\",$lEntraineur->getNomEntraineur());\n}\n```\n\n## Conclusion\n\nCe projet fût très enrichissant, notamment pour le fait de travailler en mode projet. C\'est le premier projet durant les deux années de BTS que l\'on travaille en mode projet sous forme de sprint, ce qui ajoute une plus-value.\n\n## Stack Technique\n\n1. PHP\n2. JavaScript (Ajax)\n3. SQL\n\n### Compétences\n\n1. B1.2 - Répondre aux incidents et aux demandes d’assistance et d’évolution\n2. B1.4 - Travailler en mode projet\n3. B1.5 - Mettre à disposition des utilisateurs un service informatique','fCU9rA0EOGFoOeWrHaGqitI7YiPbck-metadHBfYXVzc29ubmUucG5n-.png',1,'2023-05-06 10:59:54','2023-05-06 11:35:03',NULL),(4,1,'TP Docker - Initiation à la dockerisation','tp-docker-initiation-a-la-dockerisation','## Présentation\n\nCe TP a été effectué sur la deuxième année du BTS ayant pour but de découvrir l\'outil docker. L\'objectif était de faire quatre conteneurs web pour 4 clients d\'une entreprise.\n\nDans un premier temps, nous avons effectué l\'installation et le démarrage de docker. Ensuite, nous avons joué avec les images Docker, pour finir par prendre l\'image Debian 11. Enfin, nous avons joué avec les commandes docker pour s\'amuser à rentrer dans un docker, installer les packages nécessaires.\n\n```sh\ndocker pull debian:bullseye\ndocker run -i -t debian:bullseye /bin/bash\n\ndocker commit xxxxxx le_nom_de_l_image\n\ndocker ps\ndocker ps -a\n\ndocker rm $JOB1\ndocker rm id_ou_nom_du_container\ndocker rm `docker ps -a -q`\n```\n\n## Mise en pratique\n\nJ\'avais déjà eu l\'occasion d\'essayer Docker sur mon temps libre. Ce TP m\'a donné l\'envie de passer toutes mes applications hébergées sur mon serveur sous Docker.\n\nJ\'ai donc utilisé Traefik comme reverse proxy pour rediriger les requêtes venant des différents domaines vers le bon conteneur. Ensuite toutes mes applications tournent sur un réseau chacun avec tous les services nécessaires (1 Service = 1 Conteneur). Par exemple, le site [Delmas-Stage](https://delmas.clement-repel.fr) est une application Laravel, j\'ai ainsi un conteneur pour nginx, php-fpm, mariadb.\n\nVoici un exemple de docker-compose.yml que je peux avoir : \n\n```yml\nversion: \'3.9\'\n\nservices:\n  php2:\n    image: php:8.1-fpm-alpine\n    container_name: php-fpm_delmas.clement-repel.fr\n    restart: always\n    volumes:\n      - /docker/delmas.clement-repel.fr/html:/var/www/html\n      - /docker/delmas.clement-repel.fr/php/php.ini-production:/usr/local/etc/php/php.ini-production\n    depends_on:\n      - mariadb2\n    external_links:\n      - mariadb2\n    networks:\n      - web\n\n  nginx2:\n    image: nginx:alpine\n    container_name: nginx_delmas.clement-repel.fr\n    restart: always\n    labels:\n      - traefik.enable=true\n      - traefik.http.routers.nginx2.rule=Host(`delmas.clement-repel.fr`)\n      - traefik.http.routers.nginx2.entrypoints=websecure\n      - traefik.http.routers.nginx2.tls=true\n      - traefik.http.routers.nginx2.tls.certresolver=lets-encrypt\n    volumes:\n      - /docker/delmas.clement-repel.fr/html:/var/www/html\n      - /docker/delmas.clement-repel.fr/default.conf:/etc/nginx/conf.d/default.conf\n    depends_on:\n      - php2\n      - mariadb2\n    networks:\n      - web\n\n  mariadb2:\n    image: mariadb:latest\n    container_name: mariadb-delmas.clement-repel.fr\n    restart: always\n    ports:\n      - 3306\n    volumes:\n      - /docker/delmas.clement-repel.fr/mariadb:/var/lib/mysql\n      - /docker/delmas.clement-repel.fr/mariadb-config:/etc/mysql/mariadb.conf.d/\n    environment:\n      - MYSQL_ROOT_PASSWORD=mon_super_mot_de_passe\n      - MYSQL_DATABASE=ma_database\n      - MYSQL_USER=mon_user\n      - MYSQL_PASSWORD=mon_super_mot_de_passe\n    networks:\n      - web\n\nnetworks:\n  web:\n    external: true\n    driver: bridge\n```\n\nPour arriver à ce résultat, j\'ai passé plusieurs journées à essayer de nouvelles choses, mais aussi à me documenter, car sans documentation, je n\'aurais jamais réussi parce que je n\'avais pas les compétences nécessaires.\n\n## Dans un futur proche\n\nMon prochain objectif est de faire du déploiement continue avec GitHub Actions et Docker. C\'est-à-dire qu\'à chaque push sur la branche main, je crée une image docker, que je viens clone sur mon serveur pour déploiement la nouvelle version du site.\n\n### Compétences\n\n1. B1.5 - Mettre à disposition des utilisateurs un service informatique.\n2. B1.6 - Organiser son développement professionnel.','4HwvjqIHh3tNyCQ0evVQWDKiXNS6bL-metaVFBfRG9ja2VyX2ZpbmFsLnBuZw==-.png',1,'2023-05-06 11:44:11','2023-05-06 11:58:01',NULL),(5,1,'AP Kaliemie - Système d\'authentification par reconnaissance faciale','ap-kaliemie-systeme-dauthentification-par-reconnaissance-faciale','## Présentation\n\nLe projet a pour objectif de sécuriser un accès à un coffre-fort de médicaments. Ce système d\'authentification sera utilisé par des infirmiers, c\'est pour cela que ça doit être sécurisé.\n\nPour accéder au coffre-fort, l\'utilisateur va devoir s\'identifier en plusieurs étapes :\n\n1. Identification classique (username, password)\n2. Identification par badge (RFID)\n3. Identification par reconnaissance faciale\n\nLes informations récoltées durant la phase d\'authentification sont vérifiées par des appels API, afin de s\'assurer que les identifiants sont corrects.\n\nUne fois toutes les étapes passées, l\'utilisateur peut accéder au coffre-fort. Si une étape échoue, des logs s\'ajoutent dans la base de données pour savoir à quelle étape et la raison de l\'échec. Exemple : \n\n```py\ndef InsererBDD(numEtape,statut,commentaire):\n    conn = sqlite3.connect(\'/home/pi/ppe4.db\')\n    cursor = conn.cursor()\n    print (\"DB OK\")\n    cursor.execute(\"INSERT INTO user (identifiant,numEtape,etat,commentaire) VALUES (\'\"+ text_box.get() +\"\',\"+numEtape+\",\"+statut+\",\'\"+commentaire+\"\')\")\n    conn.commit()\n    cursor.close()\n    print (\"INSERT OK\")\n```\n\nAfin de pouvoir reconnaitre les infirmier(e)s, les utilisateurs ont dû passer devant une caméra pour entrainer le modèle à reconnaitre leurs visages.\n\nL\'application est hébergée sur un Raspberry PI. Il suffit de brancher une caméra et un lecteur RFID à celui-ci, puis d\'exécuter le programme pour lancer l\'authentification.\n\nExemple d\'utilisation de la librairie OpenCV, pour afficher un rectangle autour des personnes présent sur la caméra :\n\n```py\nimport cv2\n\nface_cascade = cv2.CascadeClassifier(\'haarcascade_frontalface_default.xml\')\nvideo_capture = cv2.VideoCapture(0)\n\nwhile True:\n    if not video_capture.isOpened():\n        print(\'Unable to load camera.\')\n        break\n    \n    # Capture frame-by-frame\n    ret, frame = video_capture.read()\n    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)\n    faces = face_cascade.detectMultiScale(gray,\n                                          scaleFactor=1.2,\n                                          minNeighbors=5,\n                                          minSize=(80, 80))\n\n    for (x, y, w, h) in faces:\n        cv2.rectangle(frame, (x, y), (x+w, y+h), (0,255,0), 2)\n    \n    cv2.imshow(\'Video\', frame)\n\n    if cv2.waitKey(1) & 0xFF == ord(\'q\'):\n        break\n\n    cv2.imshow(\'Video\', frame)\n\nvideo_capture.release()\ncv2.destroyAllWindows()\n```\n\n## Stack Technique\n\n1. Python\n2. OpenCV\n3. SQL\n\n### Compétences\n\n1. B1.5 - Mettre à disposition des utilisateurs un service informatique.','IiTgo53vZ2J7dKCvC06woWo4tlLqrP-metaQVBfUHl0aG9uLnBuZw==-.png',1,'2023-05-06 12:08:29','2023-05-06 12:18:49',NULL),(6,1,'Cartools - Application mobile pour la recherche de station essence','cartools-application-mobile-pour-la-recherche-de-station-essence','## Contexte\n\nLe projet est né lorsque avec [Maxime](https://maxvzl.com/), on voulait faire un projet en mode Hackaton. Nous avons cherché plusieurs idées et celles de l\'application de stations essences nous a semblé être la meilleure.\n\n## Présentation\n\nL\'application mobile a pour objectif de lister toutes les stations services autour de l\'utilisateur connecté. L\'utilisateur peut ainsi utiliser nos filtres, pour changer son rayon ou encore choisir le type de carburant. Il est également possible de choisir de ranger les résultats par prix croissant ou décroissant et de même pour la distance.\n\nL\'application a été développée avec Maxime en mode projet, c\'est-à-dire que nous avions chacun des tâches bien spécifiques et avant de merge dans main, nous validons et testons entre nous les nouvelles fonctionnalités.\n\nLes utilisateurs peuvent par ailleurs renseigner le modèle de leurs véhicules pour renseigner la quantité de leur réservoir ou encore la consommation du véhicule, ce qui permet de calculer le prix total d\'un plein d\'essence. De plus, une carte interactive est disponible pour aller voir une station bien spécifique. Il est aussi possible de chercher une ville dans la barre de recherche.\n\n![](http://clemrep-folio.test/storage/CHpJQ1JXhvOwb7qPgCn2WSddtnYQhPY2Q1HINUQ9.png)\n\nPour mettre à disposition les stations services, nous avons interrogé une api du gouvernement. Celle-ci nous retourne toutes les stations que nous avons enregistrées dans notre base de données. Cependant, certaines informations sont manquantes dans l\'API du gouvernement tel que la marque et le nom d\'une station.\n\nPour cela, nous avons dû concaténer les résultats de deux API différentes afin d\'avoir un jeu de données le plus complet possible.\n\n```php\n    public function handle(): void\n    {\n        $path = \'https://donnees.roulez-eco.fr/opendata/instantane\';\n        /** @phpstan-ignore-next-line */\n        Storage::disk(\'public\')->put(\'tmp.zip\', file_get_contents($path));\n\n        $zip = new ZipArchive;\n\n        $res = $zip->open(Storage::path(\'public/tmp.zip\'));\n\n        if ($res === true) {\n            /** @var string $xmlFile */\n            $xmlFile = $zip->getFromIndex(0);\n            $zip->close();\n            $xml = simplexml_load_string($xmlFile);\n            /** @var string $json */\n            $json = json_encode($xml);\n            /** @var array $array */\n            $array = json_decode($json, true);\n\n            foreach ($array[\'pdv\'] as $item) {\n                $gazStation = GazStation::updateOrCreate(\n                    [\'gaz_station_id\' => $item[\'@attributes\'][\'id\']],\n                    [\n                        \'gaz_station_id\' => $item[\'@attributes\'][\'id\'],\n                        \'latitude\' => $item[\'@attributes\'][\'latitude\'],\n                        \'longitude\' => $item[\'@attributes\'][\'longitude\'],\n                        \'postal_code\' => $item[\'@attributes\'][\'cp\'],\n                        \'pop\' => $item[\'@attributes\'][\'pop\'],\n                        \'address\' => $item[\'adresse\'],\n                        \'city\' => $item[\'ville\'],\n                    ]\n                );\n\n                if (array_key_exists(\'prix\', $item)) {\n                    foreach ($item[\'prix\'] as $price) {\n                        if (array_key_exists(\'@attributes\', $price)) {\n                            Price::updateOrCreate(\n                                [\'gaz_station_id\' => $gazStation->getKey(), \'carburant_id\' => $price[\'@attributes\'][\'id\']],\n                                [\n                                    \'gaz_station_id\' => $gazStation->getKey(),\n                                    \'fuel_type\' => $price[\'@attributes\'][\'nom\'] ?? null,\n                                    \'carburant_id\' => $price[\'@attributes\'][\'id\'] ?? null,\n                                    \'price\' => $price[\'@attributes\'][\'valeur\'] ?? null,\n                                    \'last_update\' => Carbon::parse($price[\'@attributes\'][\'maj\']),\n                                ]\n                            );\n                        }\n                    }\n                }\n            }\n        } else {\n            logger(\'Erreur de zip\');\n        }\n    }\n```\n\nIl faut cependant venir compléter les noms des stations donc au lancement de la commande une autre méthode est appelée :\n\n```php\n/**\n * Execute the console command.\n */\npublic function handle(): void\n{\n    FetchGazStationsJob::dispatch();\n    CompleteGazStationsJob::dispatch();\n}\n```\n\n```php\npublic function handle(): void\n{\n    $path = \'https://public.opendatasoft.com/api/explore/v2.1/catalog/datasets/prix_des_carburants_j_7/exports/json?lang=fr&timezone=Europe%2FParis\';\n    /** @var string $json */\n    $json = file_get_contents($path);\n    /** @var array $stations */\n    $stations = json_decode($json, true);\n    foreach ($stations as $station) {\n        $stationExists = GazStation::where(\'gaz_station_id\', $station[\'id\'])->first();\n        if ($stationExists) {\n            $stationExists->update([\n                \'brand\' => $station[\'brand\'],\n                \'name\' => $station[\'name\'],\n            ]);\n        }\n    }\n}\n```\n\n## Stack Technique\n\n1. API Laravel\n2. Flutter\n3. MariaDB\n4. Docker\n\n### Compétences\n\n1. B1.4 - Travailler en mode projet.\n2. B1.5 - Mettre à disposition des utilisateurs un service informatique.','BWXCymLsZO6ioDgUpOOpQnxDmeI7Lx-metaQ2FydG9vbHMucG5n-.png',1,'2023-05-06 12:28:59','2023-05-06 12:50:23',NULL),(7,1,'Web^ID - Premiers tickets sur le site de l\'entreprise','webid-premiers-tickets-sur-le-site-de-lentreprise','## Présentation\n\nDurant mon alternance, j\'ai pu réaliser des tickets sur le site vitrine de mon entreprise. Des tickets pour la résolution de bugs ou encore l\'ajout de nouvelles fonctionnalités.\n\nDes tickets me sont assignés, et je devais développer ce qui était attendu dans le ticket.\n\n![](http://clemrep-folio.test/storage/G3E0wUB2lXjzvyVlMb2e5gAaKUXIONgbNEvqU5Xz.png)\n\nPar exemple, ici, je devais corriger un bug sur nos livres blancs.\n\nUn autre ticket de bug était de gérer correctement le fil Ariane qui ne se complétait pas bien. En corrigeant ce problème, cela permet d\'améliorer le SEO du site.\n\nEnfin, j\'ai dû faire un ticket pour implémenter les livres blancs, car avant cette fonctionnalité n\'existait pas. J\'ai dû ajouter le CRUD dans le Back-Office, mais aussi faire en sorte d\'envoyer un email avec le livre blanc en pièce jointe à celui qui rentre son email sur le formulaire de notre site.\n\nÀ la fin de chaque ticket et lorsque la QA a bien été validé, j\'ai pu déployer ma fonctionnalité en prod.\n\n### Compétences\n\n2. B1.2 - Répondre aux incidents et aux demandes d’assistance et d’évolution.\n3. B1.3 - Développer la présence en ligne de l’organisation.\n4. B1.4 - Travailler en mode projet.\n5. B1.5 - Mettre à disposition des utilisateurs un service informatique.','IlMtYDvMl0RHskGAQzyKODxi7lHqYN-metaV2ViX0lEX1ByZXMucG5n-.png',1,'2023-05-06 13:05:32','2023-05-06 13:20:25',NULL),(8,1,'TP GLPI - Mise en place d\'un système de ticketing et de gestion de parc informatique.','tp-glpi-mise-en-place-dun-systeme-de-ticketing-et-de-gestion-de-parc-informatique','## Présentation \n\nGLPI est un logiciel libre de gestion des services informatiques et de gestion des services d\'assistance. Nous avons durant un TP installé ce logiciel sur une machine debian.\n\nNous avons ensuite appris à le configurer dans les grandes lignes (rôles, groupes, utilisateurs). Nous avons ensuite géré notre parc informatique en scannant le réseau, cela permet de savoir quelles sont les machines et ce qui est installé dessus.\n\nDe plus, nous avons joué avec les tickets. S\'amuser à faire un ticket d\'incident avec l\'utilisateur 1 et y répondre avec l\'utilisateur 2.\n\n### Compétences\n\n1. B1.1 - Gérer le patrimoine informatique.\n2. B1.2 - Répondre aux incidents et aux demandes d’assistance et d’évolution.','IGP01mjgeOy6C3E8qzUPjckcHKoylZ-metaR0xQSS5wbmc=-.png',1,'2023-05-06 13:24:26','2023-05-06 13:31:31',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Clément REPEL','contact@clement-repel.fr','2023-05-05 10:40:57','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','wvnAsPpCpZ',NULL,'2023-05-05 10:40:57','2023-05-05 10:40:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-06 17:37:15
