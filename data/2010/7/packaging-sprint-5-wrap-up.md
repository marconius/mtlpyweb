Title: Packaging Sprint #5 wrap-up
Date: 2010-07-09 22:42
Category: Packaging, Sprints

<!--:en-->Last Monday was a hot and sticky day here in Montréal, one of
these days when air feels as dense as molasses, when grocery stores run
out of ice cream. Yet, a handful of brave Pythonistas decided to brave
the heat and to head out to [Brasseurs Numériques][] for the fifth
Montréal-Python [sprint on the Python packaging system][]. The turn out
was a bit low compared with previous sprints but this is easily
explained by the many regulars who are traveling abroad during the
summer. We were also happy to welcome a few new comers. We took a moment
at the white-board to review what was the state of the Python packaging
and to define the aspects on which everyone could be contributing. Alex
and Nicolas worked on improving the test coverage in distutils2, a very
good way of getting familiar with the code while diving in right away;
I, Yannick, gave them a hand by adding test coverage reports as a
command line option to the test runner; George and Pior worked on 2to3
migration fixers and on the related test suite; and Davin improved the
Hitchhiker's Guide to Packaging while Michel helped him by packaging a
package of his own while following the guide, making sure that the
documentation was clear and obvious. Thanks to the sprinters:

-   Davin Baragiotta
-   Pior Bastida
-   Nicolas Cadou
-   Alex Gal
-   Michel Gallant
-   Yannick Gingras
-   George Peristerakis

I also want to personally thank everyone for taking the time to clean
their glasses and plates as they were leaving. It was refreshing not to
have to do most of the cleanup myself at 1am. We're becoming productive
during our sprints. One thing that we overlooked when we started
sprinting at Montréal-Python is how important it is to have a coach,
that is, someone who knows the project reasonably well and who will
answer questions from other sprinters. Theoretically, a bunch of hackers
could work together, dive in, pry open, and figured out a project as
they go. In practice, that does not work very well for a sprint since
you get a bunch of people who are not used to work together and the kind
of close communication that you need for pair investigation does not
have time to kick in during the relatively short sprint. As people are
waiting for the investigators to come up with answers to their
questions, their excitement dissipates and they get kicked out of [the
zone][]. Another thing that really helps is to have possible tasks with
a wide range of difficulty to allow anyone to get busy. An example of
great introductory task, as mentioned earlier, is writing unit-test.
This requires that setting up a working test environment and producing a
coverage report is straight forward and this is what a someone should
keep in mind before launching a sprint on a given project. As it takes
some time to setup and to get focussed, one way to improve productivity
is to have longer sprint. Hacking during the week-end, especially during
nice summer days, is not very popular but dedicated hackers will show
up. A good balance between week-days and weekend sprints is key here.
Another way to improve is to nail down as many "boiler plate" tasks as
possible before the sprint: creating all the Bitbucket accounts and
distributing the necessary privileges, assigning tasks, or even setting
up a working tests environment. We have to thank the Python Software
Foundation for [supporting the sprint][] by covering the cost of food
and drinks. Fuel (food and drinks), is not a requirement for a sprint
since dedicated hackers will show up whether they have to bring their
own booze or not, but it's nice to be able to reward sprinters with a
savory meal. They deserve it. The [sprint sponsorship program][] is a
great thing, not because there is a financial bottleneck to organizing
sprint, but because having a common coordinator for Python sprint will
help to share the excitement and the knowledge of what works for sprints
and what doesn't. Hopefully, other user groups will join us and make
sprints a core element of their schedule. [gallery]<!--:--><!--:fr-->Il
faisait chaud et humide lundi dernier ici à Montréal, une de ces
journées où l'air est comme de la mélasse, où les épiceries n'ont plus
de crème glacée. Malgré ça, une poignée de Pythoneux ont décidé de
braver la chaleur et de se présenter chez les [Brasseurs Numériques][]
pour le cinquième [sprint sur le système de packaging Python][sprint on
the Python packaging system]. La participation était un peu plus faible
qu'aux sprints précédants mais vu les voyages estivaux de plusieurs
participants réguliers, cela s'explique aisément. Nous étions par
ailleurs heureux d'accueillir quelques nouveaux. Au tableau blanc, nous
avons fait une revue de l'état actuel du packaging Python et nous avons
cerné les aspects sur lesquels chacun pouvait contribuer. Alex et
Nicolas ont travaillé à l'amélioration de la couverture de tests de
distutils2, une très bonne façon de se familiariser avec le code tout en
s'y plongeant immédiatement; je (Yannick) leur ai donné un coup de main
en ajoutant des rapports de couverture de tests en tant qu'option en
ligne de commande de l'exécuteur de test; George et Pior ont travaillé
sur les ajusteurs (fixers) pour la migration 2to3 et sur la suite de
tests associée; et Davin a amélioré le Hitchhiker's Guide to Packaging
tandis que Michel l'a aidé en paquettant un de ses propres paquets en
suivant le guide, s'assurant que la documentation était claire et
explicite. Merci aux sprinters:

-   Davin Baragiotta
-   Pior Bastida
-   Nicolas Cadou
-   Alex Gal
-   Michel Gallant
-   Yannick Gingras
-   George Peristerakis

Je voudrais aussi remercier personnellement chacun d'avoir pris le temps
de nettoyer leurs verres et assiettes avant de partir. C'était
rafraîchissant de ne pas avoir à faire le gros du ménage à 1 heure du
matin. Nous commençons à devenir productif durant nos sprints. Une chose
que nous avons négligé au début lorsque nous avons commencé à organiser
des sprints à Montréal-Python, c'est l'importance d'avoir un coach,
c'est-à-dire quelqu'un qui connaît raisonnablement bien le projet et qui
répondra aux questions des autres sprinters. En théorie, une bande de
hackers devrait pouvoir travailler ensemble, s'y plonger, décortiquer et
cerner un projet au fur et à mesure. En pratique, ça ne fonctionne pas
bien pour un sprint puisque vous vous retrouvez avec une bande qui n'est
pas habituée à travailler ensemble et le genre de communication étroite
nécessaire pour l'investigation en pair n'a pas le temps de prendre
durant le relativement court sprint. Quand les sprinters doivent
attendre des investigateurs les réponses à leurs questions, leur
excitation se dissipe et ils ne sont plus [dans le coup][]. Une autre
chose qui aide c'est d'avoir une liste de tâches possibles qui couvrent
plusieurs niveaux de difficulté pour permettre à chacun de s'affairer.
Un exemple d'une belle tâche d'introduction, tel que mentionné plus tôt,
c'est d'écrire des tests unitaires. Pour ce faire, il faut que la mise
en place d'un environnement fonctionnel de test et que la production
d'un rapport de couverture soient facilitées aux sprinteurs; ce sont là
des choses à garder à l'esprit pour qui souhaite lancer un sprint sur un
projet. Dans la mesure où ça prend un certain temps pour s'intaller et
se concentrer, une façon d'améliorer la productivité d'un sprint est de
tenir un sprint plus long. Hacker le week-end, en particulier lors des
belles journées d'été, n'est pas très populaire mais les hackers engagés
vont se présenter. Un bon équilibre entre les sprints en semaine et en
week-end est un élément clé. Une autre façon d'améliorer est de régler
le plus possible les tâches connexes avant le sprint: créer tous les
comptes Bitbucket et attribuer les privilèges nécessaires, assigner les
tâches ou même mettre en place un environnement fonctionnel de tests.
Remercions la Python Software Foundation d'avoir [supporté le
sprint][supporting the sprint] en couvrant les frais de nourriture et de
rafraîchissement. Le carburant (bouffe et liquide) n'est pas requis pour
un sprint dans la mesure où les hackers engagés se présenteront, qu'ils
aient à amener leur propre bibine ou pas, mais c'est agréable de pouvoir
récompenser les sprinters avec un met savoureux. Ils le méritent. Le
[programme de commandite de sprint][sprint sponsorship program] est une
chose super, pas tant qu'il y ait un goulot financier à l'organisation
de sprints mais parce que d'avoir un coordonnateur commun pour les
sprints Python aidera à partager l'enthousiasme et la connaissance
relative à ce qui marche ou pas avec les sprints. Nous espérons que
d'autres groupes d'utilisateurs vont se joindre à nous et feront des
sprints un élément central de leurs activités. [gallery]<!--:-->

</p>

  [Brasseurs Numériques]: http://ajah.ca/blog
  [sprint on the Python packaging system]: http://montrealpython.org/2010/07/packaging-sprint-5/
  [the zone]: http://en.wikipedia.org/wiki/Flow_(psychology)
  [supporting the sprint]: http://pythonsprints.com/2010/07/4/our-first-sponsored-sprint-montreal-python-packagi/
  [sprint sponsorship program]: http://pythonsprints.com/
  [dans le coup]: http://fr.wikipedia.org/wiki/Flow_(psychologie)
