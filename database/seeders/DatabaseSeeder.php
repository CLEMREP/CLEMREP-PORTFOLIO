<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Clément REPEL',
            'email' => 'contact@clement-repel.fr',
        ]);

        Post::factory()->create([
            'user_id' => $user->getKey(),
            'title' => 'Delmas Stage - Plateforme gestion de stage',
            'slug' => 'delmas-stage-plateforme-gestion-de-stage',
            'content' => "
            ## Contexte

            Le projet est né d'un besoin de simplification des suivis de recherches de stage. Au Lycée Carcoüet lors des recherches de stage, les professeurs viennent créer un dossier Google Drive pour chacun des élèves. Celui-ci regroupe toutes les informations de l'élève (lettre de motivation, cv, fiche étudiante ...) mais aussi les étapes dans ses démarches envers les entreprises.
            Suivre tous les élèves et l'avancement de leurs recherches à travers un Google Drive n'était pas pratique, c'est pour cela que la plateforme Delmas Stage a vu le jour.

            ## Objectif

            Les objectifs de la plateforme sont les suivants : simplification et centralisation. L'application permet de centraliser toutes les démarches d'une promotion. C'est-à-dire qu'un professeur peut voir dans un seul tableau toutes les démarches effectuées par ces élèves. Le tableau permet de voir le status de la démarche (accepté, en attente, refusé) ce qui permet facilement de voir si l'étudiant a trouvé une entreprise.
            De plus, les professeurs ont accès aux fiches étudiantes de tous leurs élèves, ce qui permet de voir les démarches d'un étudiant, ses motivations, son secteur de recherche ou encore ses préférences.
            Enfin, au fil des années, la plateforme permettra de regrouper un réseau d'entreprise qui recrutent des stagiaires.

            ## Stack Technique

            1. Laravel
            2. Livewire
            3. Blade
            4. SQL

            Le projet est open-source, disponible sur [GitHub](https://github.com/CLEMREP/delmas-stage). L'application est hébergée sous docker.

            ## Présentation

            Le site distingue 4 rôles, super administrateur, administrateur, professeur et élève.

            Les étudiants peuvent :
            1.	Gestion des entreprises (ils ont accès à toutes les entreprises de leur promotion).
            2.	Gestion des contacts rattachés aux entreprises.
            3.	Création de démarches, qui permet de lier une entreprise et un contact à une démarche.
            4.	Visualisation des objectifs postulés par les professeurs.
            5.	Gestion de leurs informations personnelles.

            ![](http://clemrep-folio.test/storage/ovNIdM64vrUyoRruLc6TE8v3VoxGh18ChucVglb8.png)

            Les professeurs sont rattachés à une ou plusieurs promotions, ils peuvent :
            1.	Gestion des étudiants de leur(s) promotion(s).
            2.	Visualiser les démarches des étudiants.
            3.	Gestion des objectifs pour les promotions.
            4.	Paramètres de compte.

            ![](http://clemrep-folio.test/storage/CvDeH4DAiNJOsUuEjPF4eDT7Mj8mdE6c80PYOtzM.png)

            Les administrateurs sont rattachés à une ou plusieurs promotions, ils peuvent :
            1.	Gestion des professeurs.
            2.	Gestion des étudiants.
            3.	Gestion des promotions.
            4.	Visualiser les démarches des étudiants.
            5.	Visualiser les fiches des entreprises.
            6.	Paramètres de compte.

            ![](http://clemrep-folio.test/storage/QwG89ip2kmMDtg0c04Uh2wsELCI5eigKtnpJUKrp.png)

            Les super administrateurs peuvent :
            1.	Gestion des administrateurs.
            2.	Gestion des professeurs.
            3.	Gestion des séries (Une série possède une ou plusieurs promotions : Exemple la série SIO possède la promotion SIO 1 et SIO 2).
            4.	Gestion des promotions.
            5.	Paramètres de compte.

            ![](http://clemrep-folio.test/storage/VodmnF01PO9C3hDmIdXZuWcQMQ2R2QzPb9mhGPUI.png)

            ## Conclusion

            Le projet fût une expérience très enrichissante, il a permis de renforcer mes compétences sur le framework Laravel. De plus, j'ai pu découvrir de nouvelles choses comme la librairie Laravel Livewire permettant de faire du Ajax tout en gardant le confort de PHP

            #### Compétences

            1. 1.3 - Salut à tous
            2. 1.4 - Coucou à vous
            3. 2.3 - Salut hello world !",
            'cover_path' => 'ack4bD2WJAZ3iVLB1fZfUcbusGKddm-metaZGVsbWFzX3N0YWdlX3Byb2plY3QucG5n-.png',
            'published' => 1,
            'created_at' => now(),
        ]);


        Post::factory()->create([
            'user_id' => $user->getKey(),
            'title' => 'Laravel Pint, mon analyse.',
            'slug' => 'laravel-pint-mon-analyse',
            'content' => 'Laravel Pint est un outil permettant **d\'améliorer la qualité du code**, notamment en suivant des standards comme le PSR-1, PSR-2, laravel, symfony, ...

            Il permet **d\'analyser** et de **corriger** en fonction du standard utilisé. Celui-ci est sans dépendance, construit directement sur PHP-CS-Fixer. Il est très facile d\'installer ce package, il suffit d\'exécuter cette commande :

            ```php
            composer require laravel/pint --dev
            ```

            Laravel Pint possède un gros avantage par rapport à PHP-CS-Fixer, il n\'a pas besoin de configuration pour être utilisé.

            Cependant, il est tout de même possible de créer un fichier ***pint.json*** à la racine du projet pour y configurer des préréglages :
            ```json
            {
                "preset": "psr12",
            }
            ```

            L\'outil peut s\'exécuter de plusieurs façons :

            1. *./vendor/bin/pint*
            2. *./vendor/bin/pint --test*
            3. *./vendor/bin/pint -v*

            La première commande permet d\'analyser le code et d\'effectuer directement les modifications.

            ![](https://ayso32m5n.cloudimg.io/v7/https://web-id.fr/storage/articles%2FLaravel%20Pint%2FCapture%20d%E2%80%99e%CC%81cran%202022-07-06%20a%CC%80%2011.42.06.png?width=570)

            La seconde commande permet seulement d\'analyser le code.

            ![](https://ayso32m5n.cloudimg.io/v7/https://web-id.fr/storage/articles%2FLaravel%20Pint%2FCapture%20d%E2%80%99e%CC%81cran%202022-07-06%20a%CC%80%2011.43.19.png?width=570)

            La dernière commande permet d\'analyser et d\'effectuer les modifications tout en affichant les détails de celles-ci.

            ![](https://ayso32m5n.cloudimg.io/v7/https://web-id.fr/storage/articles%2FLaravel%20Pint%2FCapture%20d%E2%80%99e%CC%81cran%202022-07-06%20a%CC%80%2011.42.48.png?width=570)

            On peut voir que Laravel Pint implémente des règles comme ***braces, blanklinebeforestatement***. Il faut savoir que depuis le fichier configuration, nous pouvons désactiver certaines règles.

            ```json
            {
                "preset": "psr12",
                    "rules": {
                        "braces": false
                    }
            }
            ```

            Il est également possible d\'isoler certain dossier ou fichier que nous ne voulons pas tester :

            ```json
            {
                "exclude": [
                    "my-specific/folder"
                ]
            }
            ```

            ```json
            {
                "notName": [
                    "*-my-file.php"
                ]
            }
            ```

            Après avoir testé le package, je trouve que niveau performances (temps d\'exécution, configuration, ...) il est au bien dessus de PHP-CS-Fixer.',
            'cover_path' => 'TCQqmnW5ZGhoyR6rly5W0ZPKWbCbwi-metabWF4cmVzZGVmYXVsdC5qcGc=-.jpg',
            'published' => 1,
            'created_at' => now(),
        ]);
    }
}
