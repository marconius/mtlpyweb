Packaging Sprint Wrap-up
########################
:date: 2010-10-03 23:39
:category: Montréal Python

Last Wednesday, we met at the Montréal office of Google to sprint on the
Python packaging system. This is our second sprint since we came back
from vacation and it went really well with a total of 12 sprinters:

-  Rajiv Abraham
-  Éric Araujo (remotely from Paris)
-  Pior Bastida
-  Nicolas Cadou
-  Yannick Gingras
-  Amos Latteier
-  Mathieu Leduc-Hamel
-  Derek McTavish Mounce
-  Mathieu Perreault
-  Pierre Phaneuf (host from Google)
-  Antoine Reversat
-  Alexandre Vassalotti

Mathieu Leduc-Hamel launched the sprint with a "state of the packaging"
presentation then everyone got busy pairing and getting setup. We had
enough veterans to help all the new comer to get started and, in no
time, everyone was hacking at full speed. We're also really happy that
Éric was able to stay up late and to help us with technical questions on
the internals of the packaging system. Most sprinters decided to refresh
their mind by writing some unit test. This was great because the we were
soon confronted with obscure failures on some machines while most of the
crew had fully passing suites. Mathieu Perreault was able to hunt down a
failure that was dependant on the hostname of the machine and Nicolas
uncovered a bad fixture that would make later tests fail. Rajiv, who
started with Python only a few weeks ago and who also was our only
Windows user, paired with Alexandre and resolved several Windows
specific tests. Amos wrote several new tests, bringing version.py to
complete test coverage in the process while I, Yannick, helped him by
resolving a bug in the test runner that would make it report inaccurate
coverage on a few core files. Our documentation team was also hard at
work with Derek improving the existing prose and Pior and Antoine
pairing to produce a new example package that would use more the of
advanced features of distutils2. In addition to hosting the sprint,
Google supported us with pizza, snacks, and refreshments. We were a bit
disappointed to learn that the M&M dispenser was out of order but I have
to admit that cashews and dried mangos were a more than fair
compensation. WingWare also supported our sprinting effort by providing
all sprinters with a full 3-OS license for `WingIDE`_. Overall, over 200
lines were changed across 58 files, not a lot a code in absolute terms
but considering the amount of coaching and of debugging that took place,
this was one of our best sprint. The packaging core team did not find
anything too controversial in our code and it just got merged into
`Tarek's repository`_. We're aiming for another sprint around
mid-October. Stay tuned for the announcement. [caption
id="attachment\_978" align="alignnone" width="300" caption="Yannick
explains how to measure the test coverage"]`|image0|`_[/caption]

Mercredi dernier, nous nous sommes rencontrés dans les bureaux
Montréalais de Google pour un sprint sur le packaging python. C'était
notre second sprint depuis le retour de vacances et c'était encore une
fois un succès avec un total de 12 sprinters:

-  Rajiv Abraham
-  Éric Araujo (à distance, de Paris)
-  Pior Bastida
-  Nicolas Cadou
-  Yannick Gingras
-  Amos Latteier
-  Mathieu Leduc-Hamel
-  Derek McTavish Mounce
-  Mathieu Perreault
-  Pierre Phaneuf (hôte de Google)
-  Antoine Reversat
-  Alexandre Vassalotti

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
nous a aussi aidé en offrant une licence complete de `WingIDE`_ à tous
les sprinteurs.

Au bout du compte, un peu plus de 200 lignes ont été modifiées à travers
58 fichiers, ce qui ne représente pas énormément de code de termes
absolut mais si on considère tout l'effort de pairage et de déboggage
qui à été déployé, ce sprint était un de nos plus productif. Notre code
a passé l'inspection des développeurs principaux du système de packaging
et il vient tout juste d'être fusionné dans la `branche de Tarek`_. On
compte refaire un sprint vers la mi-octobre. Suivez-ce blog pour plus de
détails.

[caption id="attachment\_978" align="alignnone" width="300"
caption="Yannick explains how to measure the test
coverage"]`|image1|`_[/caption]

.. raw:: html

   </p>

.. _WingIDE: http://wingware.com/products
.. _Tarek's
repository: https://bitbucket.org/tarek/distutils2/changesets/38d869d48447
.. _|image2|: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506.jpg
.. _branche de
Tarek: https://bitbucket.org/tarek/distutils2/changesets/38d869d48447

.. |image0| image:: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506-300x225.jpg
.. |image1| image:: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506-300x225.jpg
.. |image2| image:: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506-300x225.jpg
