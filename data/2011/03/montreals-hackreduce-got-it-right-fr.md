Title: Montréal&#039;s Hackreduce got it right
Date: 2011-03-27 21:46
Author: Smathieu
Category: Montréal Python
Slug: montreals-hackreduce-got-it-right
Lang: fr

*Re-publié depuis [http://blog.simonmathieu.com][]*

Quelle fin de semaine! Samedi dernier, 60 hackers, moi compris ont eu
une opportunité plutôt unique. On nous a mis à disposition un cluster de
100 machines, 400 cores, pour faire ce que l'on voulait avec.

L'événement s'appelle [HackReduce][], le but était simplement de fournir
pour une journée une grosse puissance computationnelle à ceux qui le
souhaitaient. Le cluster était pré-chargé avec plusieurs ensembles de
données comme des données de Twitter, tout Wikipedia, des données
d'utilisation du service de vélo public de Montréal [BIXI][] et
plusieurs autres.

Pour moi, c'était une superbe opportunité pour jouer avec des
technologies telles que Hadoop et EC2, sans avoir à peiner avec la
configuration du *cluster* même. Les ingénieurs de [Hopper Travel][],
les principaux commanditaires, on fait un super boulot de mise en place
et ont fourni des exemples de code pour plusieurs ensembles de données.
Cela nous a évité d'écrire les parties ennuyeuses du code de base et
nous a permis plutôt de nous concentrer sur la partie Map/Reduce.

Même si les exemples de code étaient tous en Java, quelques équipes ont
décidé d'écrire plutôt leur Map/Reduce à l'aide de Python. En fait, il y
avait une assez grosse délégation de Montréal-Python présente à
l'événement. Bien que certains aient réussi, coder en Python rendait
impossible l'utilisation de bibliothèques tierces à cause de la façon
dont était configuré le cluster. Néanmoins, les organisateurs de
l'événement ont manifesté de l'intérêt pour organiser un événement
similaire et collaborer avec des groupes comme [Montréal-Python][] et
[Montréal Ruby][] pour avoir un meilleur support pour ces langages.

![Picture from HackReduce][]

Je voudrais remercier les commanditaires pour avoir organisé HackReduce
et de faire de Montréal une ville magnifique pour les geeks.

<span>[![Hopper Travel][1]][] [![Google Montreal][]][]
[![Needium][]][]</span>

  [http://blog.simonmathieu.com]: http://blog.simonmathieu.com/
  [HackReduce]: http://www.hackreduce.org/ "HackReduce"
  [BIXI]: http://montreal.bixi.com/ "BIXI"
  [Hopper Travel]: http://www.hopper.travel/ "Hopper Travel"
  [Montréal-Python]: http://montrealpython.org/ "Montréal-Python"
  [Montréal Ruby]: http://www.montrealonrails.com/ "Montréal Ruby"
  [Picture from HackReduce]: http://www.hackreduce.org/wp-content/uploads/2011/03/IMG_1027.png
  [1]: http://www.hackreduce.org/wp-content/uploads/2011/03/hopper-logo2.png
  [![Hopper Travel][1]]: http://www.hopper.travel/
  [Google Montreal]: http://www.hackreduce.org/wp-content/uploads/2011/03/google-online-logo.png
  [![Google Montreal][]]: http://www.google.com/
  [Needium]: http://www.hackreduce.org/wp-content/uploads/2011/03/needium-new-logo.png
  [![Needium][]]: http://www.needium.com/
