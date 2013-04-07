Title: Packaging Sprint Wrap-up
Date: 2010-10-03 23:39
Author: Yannick Gingras (ygingras@ygingras.net)
Category: Montréal Python
Slug: packaging-sprint-wrap-up
Lang: fr

Mercredi dernier, nous nous sommes rencontrés dans les bureaux
Montréalais de Google pour un sprint sur le packaging python. C'était
notre second sprint depuis le retour de vacances et c'était encore une
fois un succès avec un total de 12 sprinters:

-   Rajiv Abraham
-   Éric Araujo (à distance, de Paris)
-   Pior Bastida
-   Nicolas Cadou
-   Yannick Gingras
-   Amos Latteier
-   Mathieu Leduc-Hamel
-   Derek McTavish Mounce
-   Mathieu Perreault
-   Pierre Phaneuf (hôte de Google)
-   Antoine Reversat
-   Alexandre Vassalotti

Mathieu Leduc-Hamel a ouvert le sprint avec une présentation sur l'état
du packaging; puis tout les sprinters ont commencé à installer leur
environnement par petit groupe. Suffisament de vétéran était présent
pour guider les nouveaux et en très peu de temps, tout le monde
pythonait frénétiquement. Nous somme aussi très heureux qu'Éric ait
accepté de se coucher très tard pour nous soutenir avec ses réponses aux
questions d'ordre techniques sur le fonctionnement du système de
packaging.

La plupart des sprinteurs ont optés pour se rafraîchir la mémoire en
écrivant des test unitaires, ce qui fut une très bonne choses car nous
fumes confrontés à une série de tests qui passaient chez tout le monde
sauf chez quelque sprinteurs. Mathieu Perreault a été en mesure de
traquer un problème obscure qui causait un échec en fonction du nom
d'une machine et Nicolas à démasquer le manque de nettoyage après un
test qui causait des échecs pour les tests subséquents.

Rajiv, qui a débuté en Python il n'y a que quelque semaines et qui était
aussi notre seul utilisateur de Windows, s'est joint à Alexandre pour
réparer un groupe de tests spécifiques à Windows. Amos a écrit plusieurs
nouveau tests pour, entre autre, amener version.py à une couverture
complète. Je, Yannick, lui ai donné un coup de main repérant un bug dans
le système d'instrumentation qui rapportait une couverture inexacte pour
quelques modules au coeur du système.

Notre équipe de documentation était aussi très affairée avec Derek qui a
amélioré la prose existante et Antoine et Pior qui on travaillé de pair
pour produire un packetage d'exemple plus complexe pour démontrer
certaines des options avancées de distutils2.

En plus d'heberger le sprint, Google nous a soutenu avec de la pizza,
des amuse gueule, et des rafraîchissements. Nous étions un peu décu de
constater le manque du distributeur de M&M mais je doit admettre que les
noix d'acajou et les mangues séchées ont largement compensées. WingWare
nous a aussi aidé en offrant une licence complete de [WingIDE][] à tous
les sprinteurs.

Au bout du compte, un peu plus de 200 lignes ont été modifiées à travers
58 fichiers, ce qui ne représente pas énormément de code de termes
absolut mais si on considère tout l'effort de pairage et de déboggage
qui à été déployé, ce sprint était un de nos plus productif. Notre code
a passé l'inspection des développeurs principaux du système de packaging
et il vient tout juste d'être fusionné dans la [branche de Tarek][]. On
compte refaire un sprint vers la mi-octobre. Suivez-ce blog pour plus de
détails.

[caption id="attachment\_978" align="alignnone" width="300"
caption="Yannick explains how to measure the test
coverage"][![][]][][/caption]

  [WingIDE]: http://wingware.com/products
  [branche de Tarek]: https://bitbucket.org/tarek/distutils2/changesets/38d869d48447
  []: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506-300x225.jpg
    "Yannick explains how to measure the test coverage"
  [![][]]: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506.jpg
