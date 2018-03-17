Folyamat:

UserBundle telepítése itt megtalálható de leírtam vmennyire magyarul is:

http://symfony.com/doc/master/bundles/FOSUserBundle/index.html

1. Telepítettem a symfony-t (composer create-project symfony/framework-standard-edition <projekt neve> "3.4.*")
2. Telepítettem a FOSUserBundle-t a projektben (composer require friendsofsymfony/user-bundle "~2.0")
3. FOSUserBundle-t be helyeztem a symfony AppKernel.php fájljába abba a tömbbe ahová fel vannak listázva 
a további Bundle-k
4. Készítettem egy User Entity-t az AppBundle\Entity mappába, majd örököltetek a FOSUSerBundle-ben lévő User felhasználóból.
5. A User Entity-t felmappoltam adatbázisba (xml [config/doctrine])
6. FOSUserBundle-t konfiguráltam a config.yml-ben

