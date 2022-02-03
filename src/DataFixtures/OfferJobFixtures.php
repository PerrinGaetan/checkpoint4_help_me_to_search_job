<?php

namespace App\DataFixtures;

use App\Entity\JobOffer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OfferJobFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $jobs = [
            [
                'job' => 'Développeur H/F',
                'company' => 'LivingObjects',
                'city' => 'Toulouse',
                'contractType' => 'CDI',
                'contact' => 'M. Georges',
                'typeOfCompany' => 'Edtieur logiciel',
                'description' => "LivingObjects recherche des développeurs juniors pour intégrer ses équipes devs experts.

                LivingObjects est un éditeur logiciel situé à Toulouse. Nous concevons des solutions d’analyse performance pour les réseaux mobiles et internet . L’équipe technique constituée de 25 personnes regroupe chef de projet technique, développeurs, Datananalyst, devops, admin sys, designer/ergonome.

                L’architecture micro-service de nos applications web, à haut niveau d’interopérabilité, garantit une amélioration continue, indispensable pour rester en phase avec un environnement métier exigeant et en constante évolution.

                Nous attachons beaucoup d’importance à la cohésion du groupe et à la montée en compétence de chacun. Notre équipe est composée d’expert dans leur domaine et nous souhaitons nous renforcer avec des profils développeurs juniors qui seront les experts de demain.

                Travailler chez LivingObjects, c’est :

                    Encourager l’autonomie pour ajouter sa pierre à l’édifice commun
                    Savoir transmettre et intégrer un collectif
                    Rester en veille techno pour ajouter les évolutions susceptibles de renforcer notre base produit
                    Décider de respecter les process conçus en équipe

                Vous avez une expérience réussie de stage en entreprise en développement logiciel (Web application, angular, java, nodeJS, fullsstack, … .) venez rejoindre une équipe expérimentée et un projet technique ambitieux et stimulant.

                En fonction de vos appétences techniques (back, front) vous serez intégré à une des équipes de LO pour participer, apprendre et devenir pleinement autonome dans la prise en charge de projet de développement logiciel.

                Statut : Cadre

                Type d'emploi : Temps plein, CDI

                Salaire : 30 000,00€ à 40 000,00€ par an

                Avantages :

                    Participation au Transport
                    Réductions Tarifaires
                    RTT
                    Titre-restaurant

                Horaires :

                    Du Lundi au Vendredi

                Rémunération supplémentaire :

                    Prime annuelle

                Télétravail:

                    Non",
                'email' => 'rh@livingobjects.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur Full Stack confirmé : VueJS / PHP H/F',
                'company' => 'NetExplorer',
                'city' => 'Colomiers',
                'contractType' => 'CDI',
                'contact' => 'Mme Catherine',
                'typeOfCompany' => 'ESN',
                'description' => "NetExplorer est une entreprise française qui développe sa propre solution collaborative de stockage et partage de fichiers destinée exclusivement aux entreprises. Si tu connais Dropbox Business ou Onedrive Entreprise tu ne seras pas dépaysé!

                SaaS spécialisé dans la gestion de fichiers dans le Cloud, nous évoluons dans un marché ultra concurrentiel. En croissance constante depuis sa création en 2007, NetExplorer est devenu le leader français du partage de fichiers sécurisés et ceci grâce à une équipe d’une vingtaine de collaborateurs ultra motivés et talentueux!

                En tant que développeur Fullstack, tu intégreras l’équipe Dev WebApp constituée de 2 développeurs et d’un Product Manager.

                Notre stack front-end :

                    VueJS 1.0 (mais on bosse pour migrer vers la version 3.0)
                    HTML5 / CSS3 / Less
                    Backbone, Gulp / WebPack

                Notre stack back-end :

                    PHP 7/8, POO
                    Architecture REST / JSON
                    SQL (MySQL / MariaDB)
                    Méthodologie : Scrum (Daily Meeting, Sprint Planning)

                Tes missions

                    Concevoir et développer de nouvelles fonctionnalités
                    Participer à la maintenance de la solution à travers la correction de bogue et le maintien d’une dette technique acceptable.
                    Contribuer aux décisions fonctionnelles des évolutions planifiées en collaboration avec le Product Manager
                    Être force de proposition pour améliorer continuellement nos méthodes et nos technologies.

                Les compétences et aptitudes pour réussir

                    Tu te sens à l’aise aussi bien côté front que back
                    Tu maîtrises nos technos (idéalement)
                    Tu es rigoureux(se), organisé(e) et fiable. Lorsque tu t’engages, tu délivres !
                    Tu es proactif(ve) et sais remonter au plus tôt toute alerte ou problème aux personnes concernées.

                Et l’expérience ? Tu possèdes au minimum une expérience de 3 ans dans le développement d’application web au sein d’équipe agiles.

                Les petits PLUS qui feront une GRANDE différence

                    Tu cherches constamment à t’améliorer mais partager tes connaissances est tout aussi important pour toi.
                    Tu es drivé(e) par la satisfaction clients
                    Tu es passionné(e) de technique mais aussi pragmatique

                Ce que nous offrons

                Parce que nos collaborateurs sont très impliqués et que nous souhaitons bâtir une relation durable, nous mettons un point d’honneur à améliorer sans cesse le confort de travail à travers :

                    Des horaires flexibles
                    Du télétravail (full remote possible)
                    Prime d’intéressement
                    Des activités extra professionnelles (escape game, journée ski)
                    Des tickets restaurant
                    Une machine à café de compet’ (café & thé gratuit)
                    Du matériel de qualité pour bosser dans les meilleures conditions
                    La possibilité d’effectuer des formations professionnelles

                Process de recrutement

                    Call d’introduction RH avec Laurence
                    Test technique
                    Entretien Fit avec Florentin (PM) et Stéphane (CTO)
                    Welcome aboard!

                Type d'emploi : Temps plein, CDI
                Statut : Cadre

                Salaire : 35 000,00€ à 40 000,00€ par an

                Avantages :

                    Épargne salariale
                    Horaires flexibles
                    Titre-restaurant
                    Travail à Distance

                Horaires :

                    Travail en journée

                Expérience:

                    Développeur informatique h/f ou similaire: 3 ans (Exigé)",
                'email' => 'rh@NetExplorer.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur Logiciel H/F',
                'company' => 'COSOLUCE',
                'city' => 'Toulouse',
                'contractType' => 'CDD',
                'contact' => 'Mme Gentil',
                'typeOfCompany' => 'ESN',
                'description' => "COSOLUCE, 9,3M€ de CA, plus de 80 salariés, est éditeur de logiciels depuis 20 ans pour plus de 6 600 collectivités locales équipées sur les gammes Finance, RH et Affaires Générales.

                POSTE ET MISSIONS.
                Intégré.e au service Recherche et Développement, composé de 4 squads, organisés en agilité, vos missions seront les suivantes :

                    Développer les fonctionnalités de nos logiciels en vous intégrant un de nos équipes Scrum.
                    Participer aux cérémoniaux Agile de votre équipe Scrum.
                    Garantir des livraisons de qualité.
                    Assurer le support technique de niveau 3.
                    Participer à l'amélioration continue de notre fonctionnement interne.

                PROFIL.
                De formation supérieure en Développement Informatique, fort d'une solide expérience vous êtes une personne motivée, curieuse, créative, autonome et rigoureuse.
                Orienté-client, votre sens de l’organisation et des priorisations sera la clé pour mener à bien vos missions. Un bon niveau d’anglais sera apprécié.

                COMPÉTENCES ATTENDUES.

                    Maitrise de l'environnement technologique VB6, Microsoft .NET (C#), WPF et SQL Server (Transact-SQL)
                    Connaissances en architecture applicative et tests automatisés
                    Connaissance de JIRA
                    Bonnes pratiques de la méthode agile Scrum

                Statut : Cadre

                Type d'emploi : Temps plein, CDI

                Salaire : à partir de 2 750,00€ par mois

                Avantages :

                    Épargne salariale
                    RTT
                    Titre-restaurant

                Horaires :

                    Du Lundi au Vendredi

                Rémunération supplémentaire :

                    Primes

                Télétravail:

                    Oui",
                'email' => 'rh@livingobjects.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur Salesforce Freelance H/F',
                'company' => 'OpenClassrooms',
                'city' => 'Toulouse',
                'contractType' => 'Freelance',
                'contact' => 'M. Nebra ',
                'typeOfCompany' => 'Centre de formation',
                'description' => "Nous recherchons des Mentors Développeur Salesforce H/F

                Un Mentor Développeur Salesforce OpenClassrooms est un professionnel expérimenté indépendant (freelance ou auto-entrepreneur). Il/elle accompagne un étudiant jusqu'à une heure par semaine en visioconférence et jusqu’à cinq étudiants par semaine au démarrage.

                Les missions du Mentor Développeur Salesforce

                Un rôle modèle qui partage chaque semaine et à distance son savoir-faire lié à son métier, en accompagnant un étudiant tout au long de son parcours de formation. Tout le support pédagogique est créé et mis à votre disposition par OpenClassrooms sur la plateforme.

                En tant que mentor, vos missions principales lors des réunions hebdomadaires avec votre étudiant seront de :

                    Guider et conseiller votre étudiant dans la réalisation des projets de son parcours.
                    Inspirer votre étudiant par vos conseils et votre expérience vécue sur votre métier
                    Suivre la progression de votre étudiant au fil des sessions de mentorat
                    Signaler les problématiques et difficultés liées à votre étudiant

                Expérience recherchée

                Sur le parcours Développeur Salesforce, nos étudiants apprennent à administrer une solution Salesforce, développer pour le web et acquièrent des compétences spécifiques aux développeurs Salesforce : Lightning, Apex, déploiement via Heroku...

                    Vous disposez d'au moins 3 ans d’expérience dans le domaine du développement Salesforce

                    Vous avez obtenu des certifications Salesforce : AppBuilder, Administrator, Developer et vous êtes membre de Trailhead (la communauté d'utilisateurs SalesForce)

                    Vous savez vulgariser des concepts complexes, fixer des objectifs et donner des feedbacks constructifs

                    Vous disposez d'une structure de type entreprise ou d'un statut d'auto-entrepreneur (immatriculée au registre du commerce de votre pays de résidence) afin de pouvoir facturer mensuellement vos prestations, ou vous êtes prêt(e) à le créer

                Un Processus d’intégration en quatre étapes

                    Complétez le formulaire pour devenir mentor en vous munissant d’un CV à jour

                    Si votre profil est sélectionné, vous serez invité à réaliser une vidéo ou un test technique. L'occasion pour nous d'en apprendre plus sur vos compétences

                    Votre profil est retenu ! Envoyez-nous les documents nécessaires à la mise en place de la prestation de services : nous nous chargeons de tout

                    Nous vous envoyons votre contrat sous format numérique, vous n'avez plus qu'à le signer, 100% en ligne",
                'email' => 'rh@livingobjects.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur front-end (React ou Vue)',
                'company' => 'Emprunte Mon Toutou',
                'city' => 'Toulouse',
                'contractType' => 'CDI',
                'contact' => 'Mme Toutti',
                'typeOfCompany' => 'Start-up',
                'description' => "Emprunte Mon Toutou est la première communauté qui met en relation les propriétaires de chiens occupés avec des personnes qui adorent les chiens mais ne peuvent en avoir, et se portent donc bénévoles pour les promener et garder. Basée sur le bénévolat et l’amour des toutous, notre application dispose d’une excellente réputation et passe très régulièrement dans les médias.

                Avec 4 ans d’existence, près de 500 000 inscrits, une équipe de 15 personnes (tech, design, marketing, produit, service client), plusieurs partenariats avec des entreprises de renom, un lancement récent en Espagne, et bientôt dans d’autres pays, Emprunte Mon Toutou est une startup en pleine croissance. Notre application est disponible sur le web ainsi que sur le Play Store et l’App Store.

                Nous recrutons un développeur front-end senior afin de concevoir et développer le nouveau front de notre application web (le design & les spécifications fonctionnelles sont déjà établis). Sous la tutelle du CTO, vous aurez la responsabilité complète de la conception de l’architecture de notre nouveau front-end, sans avoir à retravailler l’ancien front. Une fois ceci fait vous assurerez le développement front sur le long terme.

                Vous rejoindrez une équipe produit composée de 6 personnes (CTO, développeur front, développeur back, product manager, product assistant, designer) organisée sous la méthode agile (Scrum).

                Nous sommes flexibles quant à la technologie utilisée pour le nouveau front : React ou Vue, en fonction de vos compétences.
                Poste à pourvoir immédiatement.

                Résumé de vos responsabilités :

                    Mise en place du front du nouvel espace membre web

                    Développement et/ou modification de fonctionnalités front end

                    Développement de nouvelles fonctionnalités et des tests associés

                    Participation aux choix techniques et fonctionnels

                Compétences nécessaires :

                    Typescript

                    ReactJS (Next) OU Vue3 (Nuxt)

                    Redux OU Vuex

                    CSS/SCSS (maîtrise)

                    REST/Apollo

                    Git (avancé)

                    Test-driven development (Cypress, Jest …)

                Dans l’idéal :

                    Bases de CI/CD (Docker)

                    Connaissance des SGBDR (Postgres)

                    Travail en méthodes Agiles (Jira, Confluence)

                Qualités personnelles nécessaires :

                    Travail d'équipe

                    Rigueur

                    Bonne organisation

                    Autonomie, perspicacité

                Notre stack actuelle : Symfony, Mercure, Vue 2, NestJS, AWS, Google Cloud.

                Notre bureau est au centre de Toulouse (quartier Compans Caffarelli), au sein d’une communauté de startups, cependant nous sommes parfaitement ouverts au travail à distance (complet ou partiel).

                La mission d’Emprunte Mon Toutou est simple : donner l’opportunité à tous de partager des moments magiques avec un chien, tout en rendant service à leurs propriétaires. Si cette mission vous passionne autant que nous et que vous avez les compétences requises, alors prenez contact avec nous pour candidater !

                Type d'emploi : Temps plein, CDI

                Avantages :

                    Horaires flexibles
                    Participation au Transport
                    Travail à Distance

                Horaires :

                    Du Lundi au Vendredi
                    Travail en journée

                Mesures COVID-19:
                Télétravail, port du masque dans les bureaux, gel hydroalcoolique, etc.

                Télétravail:

                    Oui",
                'email' => 'rh@empruntemontoutou.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur WinDev H/F',
                'company' => 'GROUPE AHG EUROPE',
                'city' => 'Flourens',
                'contractType' => 'CDD',
                'contact' => 'M. Bordaz',
                'typeOfCompany' => 'ESN',
                'description' => "Acteur majeur du secteur de la fixation aéronautique, le groupe Ateliers de la Haute Garonne est un groupe familial historique français en pleine croissance. Notre cœur de métier est la conception et la fabrication de fixations à destination de tous les grands donneurs d’ordre du secteur aéronautique (AIRBUS, BOEING, DASSAULT…). Le Groupe, composé de 850 collaborateurs, souhaite poursuivre son développement en proposant des innovations produits de haute qualité aux plus grands avionneurs.

                Notre service informatique est complétement intégré aux services de production et services supports de la Société.

                Au sein d’une équipe de 7 personnes, vous participerez au développement des applications métier du Groupe.

                Vous travaillerez sur des projets novateurs pour répondre aux objectifs de qualité et de productivité de l’entreprise.

                Vous contribuerez au maintien des applications en conditions opérationnelles.

                VOS MISSIONS :

                    Vous prenez en charge l’analyse des projets qui vous seront confiés

                    Vous rédigez les spécifications fonctionnelles et techniques

                    Vous développez et testez les applications

                    Vous documentez les applications et les procédures

                    Vous participez à l’amélioration continue et à l’évolution des applications existantes

                Vous êtes titulaire d’un BAC+2 en développement informatique et vous justifiez d’une expérience minimum de 3 ans en développement WinDev en environnement Windows ou alors vous avez une expérience professionnelle de 7 ans en développement WinDev.

                La connaissance de WinDev Mobile ou Webdev est un plus.

                Des connaissances en informatique industrielle seraient un plus dans le cadre des développements liés aux automates connectés.

                Vous êtes rigoureux, réactif et motivé, vos capacités de communication et votre esprit de synthèse seront vos atouts pour comprendre rapidement les spécificités du service.

                Nous étudions, à compétences égales, toutes les candidatures dont celles de personnes en situation de handicap.",
                'email' => 'rh@ahg.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur Full Stack H/F',
                'company' => 'TIK TRAK',
                'city' => 'Lyon',
                'contractType' => 'CDI',
                'contact' => 'Mme Juliette',
                'typeOfCompany' => 'ESN',
                'description' => "Description de l'entreprise

                Fondée en 2020, TIK TRAK construit des applications mobiles et web à destination des distributeurs de grandes machines (matériel de travaux publics, matériel agricole...). Nous avons une expérience forte dans ces domaines d'activité et souhaitons nous développer en Europe.

                Notre mission est d'utiliser la tech pour aider les concessionnaires à développer leurs affaires, réduire leur empreinte carbone et mieux manager leur équipe.

                Description du poste

                TIK TRAK développe des applications web et mobile innovantes destinées au concessionnaires de grandes machines (de gros tracteurs, pelles à chenille ou encore camions).

                Stack

                Nous travaillons avec les outils suivants:

                    Node.js (Express)
                    Base de données MongoDb
                    Client web React.js
                    Application mobile React Native
                    DevOps et SCRUM sur GitLab

                Tes responsabilités

                Au sein de l'équipe technique, tu participes au développement des fonctionnalités TIK TRAK:

                    Identifier et comprendre les besoins fonctionnels auprès des utilisateurs
                    Participer aux réflexions techniques
                    Développer et améliorer l'application web (client et serveur)
                    Développer et améliorer l'application mobile
                    S'assurer de la stabilité de tes développements

                Ton profil

                Alors évidemment on aimerait que tu saches tout faire, mais si ce n'est pas le cas on sera attentif à ton esprit de collaboration, ta détermination et la qualité de ton code (tests techniques). On travaille en équipe et ton enthousiasme, ton esprit d'initiative et ta capacité d'adaptation pourraient bien te faire grandir dans l'entreprise. Des connaissances en intégration continue et AWS S3 seraient appréciées mais ne sont pas obligatoires pour postuler.

                Les plus de cette offre

                Quelques avantages sur notre offre que tu ne trouveras pas partout:

                    Poste 100% télétravail
                    Cycle de décision très court (ton manager est le CTO)
                    Rejoindre un entreprise autofinancée et rentable en pleine croissance
                    Relation de confiance importante : responsabilités et autonomie

                Date de début prévue : 01/03/2022

                Type d'emploi : Temps plein, CDI

                Salaire : à partir de 35 000,00€ par an

                Avantages :

                    Horaires flexibles
                    Travail à Distance

                Horaires :

                    Du Lundi au Vendredi
                    Horaires aménageables
                    Périodes de Travail de 8 Heures

                Rémunération supplémentaire :

                    Prime trimestrielle

                Expérience:

                    React: 2 ans (Optionnel)

                Télétravail:

                    Oui",
                'email' => 'rh@tiktrak.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur H/F PHP/Symfony',
                'company' => 'Ciss',
                'city' => 'Lyon',
                'contractType' => 'CDD',
                'contact' => 'M. Torc',
                'typeOfCompany' => 'Editeur logiciel',
                'description' => "Notre société grandit, et ce sera peut-être grâce à vous !

                Éditeur de solutions de paiement multi-canal et de digitalisation de l’expérience client, pour le commerce local comme pour des enseignes à plus grande diffusion, nous sommes à la recherche d'un/une développeur/développeuse PHP/Symfony pour rejoindre notre grandissante équipe jeune, sympathique, multiculturelle et motivée !

                Nous poursuivons notre politique de recrutement en examinant tous les profils, du junior pour vous permettre d'évoluer dans votre carrière, au senior pour apporter les compétences qui compléteront les nôtres. Évidemment, un niveau minimum sera demandé.
                N'hésitez pas a nous contacter ou à postuler directement, on aime aller vite

                Statut : Cadre

                Type d'emploi : Temps plein, CDI

                Salaire : 2 200,00€ à 2 700,00€ par mois

                Avantages :

                    Participation au Transport

                Horaires :

                    Du Lundi au Vendredi

                Expérience:

                    PHP: 2 ans (Optionnel)
                    Symfony: 1 an (Exigé)
                    Informatique: 1 an (Exigé)

                Langue:

                    Anglais (Optionnel)

                Télétravail:

                    Non",
                'email' => 'rh@ciss.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur React / NextJS Confirmé',
                'company' => 'Appsolute',
                'city' => 'Villeurbanne',
                'contractType' => 'CDI',
                'contact' => 'Mme Jeanne Bauche',
                'typeOfCompany' => 'Editeur logiciel',
                'description' => "A propos d'Appsolute

                Si vous aimez les ambiances start-up, mais qui ont une véritable exigence sur l'expertise, vous êtes bien tombé(e) ! Appsolute est une agence digitale de 60 personnes située à Paris, Lyon et Toulon. Nous faisons de superbes projets web et mobiles pour de belles marques, avec de beaux outils et des technos de pointe !

                L'ambiance est jeune et décontractée, mais nous mettons un point d'honneur à mettre l'excellence au coeur de tous nos travaux.

                Nos clients vont de la grosse PME au grand compte CaC40 sur des sujets de transformations digitales hyper variés: impossible de s'ennuyer !

                Nous accordons beaucoup d'importance à l'équilibre vie privée / vie pro avec des horaires cool, du télétravail, un stress minimum et beaucoup de flexibilité et d'autonomie.

                A propos du poste

                Intégré au sein du pôle web comptant une 15aine de personnes, vous serez amené à travailler sur des projets ambitieux, à forte valeur ajoutée: extranet, e-commerce, web-apps, plateformes web, en collaboration avec les équipes projet: Scrum Master, Designers, Backend Developers, DevOps.

                Nous avons un fort souhait de personnaliser le parcours de votre carrière chez Appsolute pour mieux nous adapter à vos envies: aucune porte n'est donc fermée !

                Nous essayons aussi de toujours nous renouveler sur les stacks technique au travers de projets intéressants, internes ou clients, de formations et d'émulations interne.

                Votre profil

                - 2 ans d'expérience minimum dans le développement web sur React.js, VueJS et/ou Next.js en agence ou ESN
                - Très bonne connaissance de Git et Code versionning avec Gitlab
                - Excellentes compétences en matière de documentation, de recherche, d'apprentissage et d'enseignement
                - Les connaissances de Tailwind, Bootstrap, Sass, Webpack sont un plus

                - Les compétences back (Node, Laravel ou autre) sont un plus

                - Connaissances méthodes Scrum/Agile
                - Capacité à résoudre des problèmes individuellement et en équipe

                Type d'emploi : Temps plein, CDI

                Salaire : 2 900,00€ à 3 700,00€ par mois

                Avantages :

                    Horaires flexibles
                    Travail à Distance

                Horaires :

                    Du Lundi au Vendredi
                    Périodes de Travail de 8 Heures
                    Travail en journée

                Rémunération supplémentaire :

                    Prime trimestrielle

                Expérience:

                    Développeur informatique h/f ou similaire: 2 ans (Exigé)
                    *JS: 1 an (Exigé)

                Langue:

                    Anglais (Exigé)

                Télétravail:

                    Temporairement en raison du COVID-19",
                'email' => 'rh@appsolute.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Développeur Web PHP - Symfony H/F',
                'company' => 'Dedi agency',
                'city' => 'Lyon',
                'contractType' => 'CDI',
                'contact' => 'M. Yoda',
                'typeOfCompany' => 'ESN',
                'description' => "A PROPOS DE NOUS

                Depuis 17 ans, Dedi. est spécialisée en eCommerce. Composée de 25 experts, notre agence est située à Lyon 9ème.
                Dedi. est une agence digitale ambitieuse et dynamique mais surtout pluridisciplinaire et engagée, qui accompagne ses clients depuis la spécification de leurs besoins jusqu’à la réalisation de leurs objectifs. Notre positionnement est clair : Service digital externalisé !
                Du conseil à la création en passant par le marketing, l’UX et l’UI design, la stack technique et la TMA : la Dedi team couvre un périmètre de compétences à la fois large et spécialisé pour garantir à ses clients la réussite de leurs projets !

                Si tu veux jeter un œil à nos réalisations : https://www.dedi-agency.com/realisations/

                DESCRIPTIF DU POSTE

                En tant que développeur Web PHP, tu seras amené à

                    Développer de nouvelles fonctionnalités sur le framework Symfony (Sylius)
                    Participer à la conception et production TMA et TME de nos projets eCommerce
                    Faire évoluer la stack technique
                    Accompagner nos Dev’ Junior

                Tu seras présent aux cérémonies Agile (Daily meeting / présentation des stories / Démo / rétrospectives)

                Tu adopteras le déploiement automatisé et continue.

                Enfin, en fonction de ton expérience et de ton expertise, tu pourras être amené à prendre le « lead » et à participer au reflexion avant-vente et aux ateliers de conception.

                PROFIL RECHERCHÉ

                « Les règles de l’art »

                    Tu parles couramment le langage PHP
                    Tu as déjà apprivoisé Symfony
                    Tu es à l’aise avec Linux, sans pour autant être expert
                    Tu connais PHPStorm
                    Tu connais GIT, le tout-puissant (on utilise les PR et on fait de la code review)

                « L’humain avant tout »

                Tu sais :

                    Que demander de l’aide n’est pas une honte, bien au contraire !
                    Être force de propositions pour faire évoluer la stack technique et les procédures agiles
                    Remonter les alertes sur les tâches / projets au plus tôt
                    Communiquer avec une équipe

                LES GROS PLUS :

                Tu connais Sylius, Docker et/ou un framework JS (jQuery, ça ne compte pas)
                Tu as une sensibilité pour le monde et les enjeux du e-commerce

                LES PETITS PLUS :

                Tu as à une appétence pour l’automatisation.
                Tu as des compétences en administration système Linux

                BON À SAVOIR

                Dedi’dej : le 1er vendredi de chaque mois, l’occasion d'échanger tous ensemble sur la vie de l’agence, les résultats et les projets.

                Dedi’summer / Dedi’winter : 2 moments de partage et de teambuilding, le temps d’un afterwork convivial en été comme en hiver.

                Dedi’days : la keynote ! une fois par an, un moment clé pour présenter la stratégie à court et moyen terme, d'échanger sur l’organisation, les procédures (démarche qualité) et le process interne (roadmap projet).

                Notre agence est située à 5mn du métro Valmy et Gare de Vaise, notre espace de travail est lumineux et agréable, surtout notre terrasse !

                Nos valeurs : confiance, empathie et intelligences.

                Alors si tu veux rejoindre la Dedi team et collaborer dans un environnement dynamique, ouvert au télétravail, bienveillant et en croissance régulière : n’attends plus, postule !

                Dedi agency a fourni les informations d'embauche inclusives suivantes :

                Nous sommes un employeur garantissant l'égalité des chances et considérons tous les candidats qualifiés de manière égale, sans distinction de race, de couleur, de religion, de sexe, d'orientation sexuelle, d'identité de genre, d'origine nationale, de statut d'ancien combattant ou de handicap.

                Type d'emploi : Temps plein, CDI

                Salaire : 35 000,00€ à 45 000,00€ par an

                Avantages :

                    Horaires flexibles
                    Participation au Transport
                    Titre-restaurant
                    Travail à Distance

                Horaires :

                    Du Lundi au Vendredi
                    Travail en journée

                Expérience:

                    Symfony: 1 an (Optionnel)

                Télétravail:

                    Oui",
                'email' => 'rh@dediagency.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Boulanger H/F',
                'company' => 'SARL JACQUIER',
                'city' => 'Lyon',
                'contractType' => 'CDD',
                'contact' => 'M. Labrioche',
                'typeOfCompany' => '',
                'description' => "URGENT

                Notre Boulangerie Pâtisserie JACQUIER située 52 cours Richard Vitton à Lyon (Montchat) recherche un(e) boulanger(ere) avec expérience dans le domaine OBLIGATOIRE

                Environ 39h/semaine

                2 jours de repos / semaine

                environ 1900 € net / mois

                Type d'emploi : Temps plein, CDI

                Type d'emploi : Temps plein, CDI

                Salaire : 2 300,00€ à 2 400,00€ par mois

                Horaires :

                    Travail de Nuit

                Formation:

                    CAP / BEP (Exigé)

                Expérience:

                    Boulanger h/f ou similaire: 2 ans (Exigé)

                Disponibilité:

                    Travail de nuit (Exigé)",
                'email' => 'rh@labrioche.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Boulanger H/F',
                'company' => 'Boulangerie Devesa',
                'city' => 'Lyon',
                'contractType' => 'CDI',
                'contact' => 'Mme Laflute',
                'typeOfCompany' => 'Boulangerie',
                'description' => "La Boulangerie DEVESA recherche un boulanger H/F pour agrandir son équipe. Travail de jour de 11H30 à 18H30 du mardi au samedi 1 semaine sur 2 et du lundi au vendredi 1 semaine sur 2. Boulangerie fermée le dimanche.

                Durant votre journée de travail il vous faudra façonner et cuire les baguettes, effectuer différents pétrissages (croissant, brioches, pâte sucrée, pâte brisée...), peser un pétrin, nettoyer et ranger le poste de travail

                Type d'emploi : Temps plein, CDI

                Salaire : Jusqu'à 1 700,00€ par mois

                Avantages :

                    Participation au Transport

                Horaires :

                    Travail en journée

                Formation:

                    CAP / BEP (Optionnel)

                Expérience:

                    Boulanger h/f ou similaire: 1 an (Optionnel)

                Télétravail:

                    Non",
                'email' => 'rh@boulangerie.fr',
                'phone' => '0606060606',
                'salary' => '10000',
            ],
            [
                'job' => 'Boulanger - Boulangerie H/F repos week end',
                'company' => 'Boulangerie Gaborit',
                'city' => 'Sainte-Foy-lès-Lyon',
                'contractType' => 'CDD',
                'contact' => 'M. Bellemiche',
                'typeOfCompany' => '',
                'description' => "Différents travaux de boulangerie.

                Travail intéressant et en équipe.

                Horaires et conditions de travail intéressants (pas de coupures, poste essentiellement du matin)

                Repos week-end (samedi et dimanche).

                Mutuelle d'entreprise.

                Salaire a négocier selon expérience.

                Minimum de 1 an d'expérience, CAP Boulangerie obligatoire (ou 4 ans d'expérience en production boulangerie)

                Se présenter directement en entreprise l'après-midi ou envoyer un CV par indeed.

                Type d'emploi : Temps plein

                Horaires :

                    Travail en journée
                    Travail les Jours Fériés
                    Travail le Week-end

                Télétravail:

                    Non",
                'email' => 'rh@maboulangerie.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Boulanger H/F',
                'company' => 'Le 9 eme PAIN',
                'city' => 'Lyon',
                'contractType' => 'CDD',
                'contact' => 'Mme Dupain',
                'typeOfCompany' => 'Boulangerie Artisanal',
                'description' => "Le/la Boulanger(e) devra savoir travailler en autonomie rapidement.

                Il lancera des pâtes BIO sur levain et fera des viennoiseries maison. Il gèrera la lève et la cuisson , tout en respectant les règles d'hygiène et de sécurité.

                Recherche un boulanger motivé et dynamique.

                Il travaillera du lundi au vendredi.

                Salaire selon expérience.

                Durée du contrat : 9 mois

                Type d'emploi : Temps plein, CDD

                Salaire : 1 480,00€ à 2 692,00€ par mois

                Horaires :

                    Du Lundi au Vendredi
                    Heures Supplémentaires
                    Périodes de Travail de 8 Heures
                    Repos le Week-end
                    Travail de Nuit

                Rémunération supplémentaire :

                    Heures supplémentaires majorées

                Mesures COVID-19:
                Port du masque obligatoire pour les salariés et les clients.

                Formation:

                    CAP / BEP (Exigé)

                Expérience:

                    Boulanger h/f ou similaire: 1 an (Optionnel)

                Disponibilité:

                    Travail en journée (Optionnel)
                    Travail de nuit (Optionnel)",
                'email' => 'rh@mamiche.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Boulanger H/F',
                'company' => 'CYPRIEN',
                'city' => 'Toulouse',
                'contractType' => 'CDI',
                'contact' => 'Mme Cyprien',
                'typeOfCompany' => '',
                'description' => "Bonjour à Toutes et tous,

                Nous sommes la Boulangerie Cyprien à Toulouse centre (quartier Saint Cyprien). Nous sommes une boulangerie pâtisserie 100 % artisanale qui aconnu une importante croissance depuis notre ouverture il y a 4 ans (Passage dans l'Emission La Meilleure Boulangerie de France dès la deuxième année d'ouverture) et succès d'estime dans tout notre quartier (le plus sympa et vivant de Toulouse !;) )

                Vous pouvez regarder nos produits et notre état d'esprit ici : https://www.instagram.com/boulangeriecyprientoulouse/?hl=en

                Notre production est 100 % artisanale : Traditions (Natures, Graines, Charbon végétal), Pains sur levain dur (Grand Epeautre Bio, T80 Bio, T150). Nous fabriquons beaucoup de pains spéciaux à l'attention de nos points de vente mais également pour les professionnels (Burgers, Foccaccia, Pain de Mie etc)

                Notre fournil est parfaitement équipé et nous mettons tout en oeuvre pour maintenir la qualité de travail pour nos équipes.

                Nous recherchons aujourd'hui un(e) Boulanger(e) qui aime avant tout son métier et le faire de façon 100 % artisanale sans compromis et qui a envie d'apprendre, de progresser et de faire partie d'une équipe jeune et dynamique !

                Notre équipe est composée de 3 boulangers (2 postes en 39 H et 1 poste en 35H) + un apprenti. Nous recherchons donc un nouveau Boulanger en 35 H avec deux jours de repos consécutifs chaque semaine !

                Nh'ésitez pas à nous contacter par mail ou téléphone (l'apres-midi à partir de 14h idéalement) pour nous soumettre vos CV et nous poser vos éventuelles questions !

                Type d'emploi : Temps plein, CDI

                Salaire : 1 600,00€ à 2 000,00€ par mois

                Avantages :

                    Réductions Tarifaires
                    Titre-restaurant

                Horaires :

                    Périodes de Travail de 8 Heures

                Rémunération supplémentaire :

                    Heures supplémentaires majorées
                    Prime annuelle
                    Primes

                Formation:

                    CAP / BEP (Exigé)

                Expérience:

                    Boulanger h/f ou similaire: 3 ans (Exigé)

                Disponibilité:

                    Travail en journée (Optionnel)

                Télétravail:

                    Non",
                'email' => 'rh@stcyprien.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Boulanger (H/F)',
                'company' => 'Carrefour',
                'city' => 'Labège',
                'contractType' => 'CDD',
                'contact' => 'M. Carrefour',
                'typeOfCompany' => 'Supermarché',
                'description' => "Créateur de l'hypermarché et commerçant alimentaire de référence, Carrefour reste fidèle à ses racines mais se réinvente pour permettre à chacun, chaque jour, de manger mieux : plus sain, plus local, plus responsable.

                Nos atouts pour y parvenir ? Un réseau multiformat de 5400 magasins, des services et une offre digitale enrichis, une coopération renforcée avec les acteurs du monde agricole, de la chaîne alimentaire, de la Tech…

                Et des collaborateurs passionnés, qui s'engagent, challengent leur métier et grandissent ensemble pour réussir la transition alimentaire pour tous.

                Pour porter l'ambition du Groupe, Carrefour fait évoluer son format de magasin historique : l'Hypermarché. Avec ses espaces toujours plus adaptés aux besoins des clients et ses 80000 références de produits alimentaires et non alimentaires, c'est un environnement innovant, convivial et familial, où tous les budgets se retrouvent.

                Carrefour recherche pour son hypermarché un(e) :

                Boulanger (H/F)

                Vos missions :

                    Fabriquer, préparer ou transformer à partir de matière premières tous nos pains, viennoiseries.
                    Equilibrer la production selon le flux clients et les contraintes de fraîcheur en veillant au respect des règles d’hygiène, de sécurité, de traçabilité et de qualité.
                    Gérer les plannings de fabrication et de vente
                    Assurer les contrôles qualité, la mise en place des étalages
                    Préparer les commandes clients
                    Etre garant de la qualité et de la fraîcheur des produits
                    Effectuer des contrôles des produits et du matériel
                    Effectuer l’étiquetage des produits


                Votre profil :

                    Vous êtes titulaire d'un CAP en boulangerie et/ou 2 à 3 ans d'expérience du métier.
                    Vous êtes passionné par les produits et vous apréciez travailler en équipe.


                Les avantages Carrefour :

                    Une rémunération sur 13,5 mois (après un an d'ancienneté)
                    Intéressement + participation
                    Mutuelle/prévoyance
                    Offres CE
                    6 semaines de Congés Payés
                    10 % de remise sur achat",
                'email' => 'rh@carrefour.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Boulanger tourier H/F',
                'company' => 'LFC FOUNRIL',
                'city' => 'Toulouse',
                'contractType' => 'CDD',
                'contact' => 'M. Tourier',
                'typeOfCompany' => 'Boulangerie',
                'description' => "Tu est à la recherche d'une Boulangerie Bio Artisanale ? Nous recherchons un Boulanger pour compléter notre équipe de production au sein de la Boulangerie des Pont-Jumeaux (156 Allée de Barcelone, 31000, Toulouse)

                Savoir être : Rigoureux, ponctuel, soigné

                Savoir faire en viennoiserie : Boulâge des pâtons, utilisation de matériel de nettoyage, réalisation des cuisson de pains, Confectionner des viennoiseries, Entretenir un poste de travail..

                Savoir faire en Boulangerie : Sélectionner et doser les ingrédients (farine, levure, additifs, ...) pour la réalisation des pâtes à pain ou à viennoiserie, les mélanger et effectuer le pétrissage, l'abaisse, façonnage, enfournement, cuisson et défournement.

                Avantages supplémentaires :

                    Heures de nuit majorées
                    Heure de dimanche majorées
                    Heures Supplémentaires

                    Repas gratuit
                    Prime annuelle

                Nous recherchons une personne disponible rapidement

                Date de début prévue : 31/01/2022

                Type d'emploi : Temps plein

                Salaire : 1 945,00€ par mois

                Formation:

                    CAP / BEP (Optionnel)

                Expérience:

                    Boulanger h/f ou similaire: 1 an (Exigé)

                Disponibilité:

                    Travail de nuit (Optionnel)

                Télétravail:

                    Non",
                'email' => 'rh@tourier.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
            [
                'job' => 'Boulanger H/F',
                'company' => 'Fournil de fronton',
                'city' => 'Toulouse',
                'contractType' => 'CDI',
                'contact' => 'Mme Founil',
                'typeOfCompany' => '',
                'description' => "Rejoindre Ange c’est, partager nos valeurs sur la qualité de nos produits, le respect de nos clients et de nos collaborateurs, et le plaisir d’un travail bien fait en équipe dans une démarche éco-responsable.

                Nous recrutons à Toulouse, un BOULANGER H/F.

                Description du poste :

                Sous la responsabilité du chef production, vous participez au pétrissage, au façonnage et à la cuisson de notre baguette et de nos pains spéciaux conformément à nos recettes, nos procédures et nos valeurs.

                Profil :

                - Vous êtes titulaire d’un CAP/BEP boulangerie et disposez d’une expérience d’au moins 6 mois sur un poste similaire.

                - Vous êtes reconnu(e) pour votre rigueur et votre esprit d’équipe.

                Type d'emploi :

                - CDI, temps plein (42h/semaine, sur 5 jours – repos hebdomadaire le dimanche) plus un jour dans la semaine et jours fériés dans une équipe jeune et dynamique.

                -prime panier repas.

                -heure de nuit rémunéré

                Type d'emploi : Temps plein, CDI

                Salaire : à partir de 2 000,00€ par mois

                Rémunération supplémentaire :

                    Prime annuelle

                Formation:

                    CAP / BEP (Optionnel)",
                'email' => 'rh@ange.fr',
                'phone' => '0606060606',
                'salary' => '30000',
            ],
        ];

        foreach ($jobs as $job) {
            $newJob = new JobOffer();
            $newJob->setJob($job['job']);
            $newJob->setCompany($job['company']);
            $newJob->setCity($job['city']);
            $newJob->setContractType($job['contractType']);
            $newJob->setContact($job['contact']);
            $newJob->setTypeOfCompany($job['typeOfCompany']);
            $newJob->setDescription($job['description']);
            $newJob->setEmail($job['email']);
            $newJob->setPhone($job['phone']);

            $manager->persist($newJob);

        }

        $manager->flush();
    }
}
