Montréal&#039;s Hackreduce got it right
#######################################
:date: 2011-03-27 21:46
:category: Montréal Python

*Reposted from `http://blog.simonmathieu.com`_* What a weekend! This
Saturday, 60 hackers, including myself got a pretty unique opportunity.
We were given a cluster of 100 machines, 400 cores, to do with what we
please. The event is called `HackReduce`_, the goal was simply to give
large amounts of computational power to whoever wanted it for a day. The
cluster came preloaded with several datasets like Twitter data, the
whole of Wikipedia, usage data from Montréal’s public bike service
`BIXI`_ and many more. For me, it was an awesome opportunity to play
with technologies like Haddop and EC2, without having to go through the
pain of configuring the cluster itself. Engineer’s from `Hopper
Travel`_, the main sponsors, did a great job of setting everything and
providing code samples for the various datasets. This saved us from
having to write all of the boring boiler plate code, but instead, let us
focus on the Map/Reduce part. Although the code samples where all in
Java, some teams decided to write their Map/Reduce using Python instead.
There was actually a fairly big delegation from Montréal-Python present
at the event. Although some succeeded, the use of Python made it
impossible to use 3rd party library because of the way the cluster was
configured. Nevertheless, the organizers of the event showed interest in
organizing another similar event and to collaborate with groups like
`Montréal-Python`_ and `Montréal Ruby`_ to have better support for those
languages. |Picture from HackReduce| I’d like to thanks the sponsors for
organizing HackReduce and making Montréal an awesome city for geeks to
live in. `|Hopper Travel|`_ `|Google Montreal|`_ `|Needium|`_

*Re-publié depuis `http://blog.simonmathieu.com`_*

Quelle fin de semaine! Samedi dernier, 60 hackers, moi compris ont eu
une opportunité plutôt unique. On nous a mis à disposition un cluster de
100 machines, 400 cores, pour faire ce que l'on voulait avec.

L'événement s'appelle `HackReduce`_, le but était simplement de fournir
pour une journée une grosse puissance computationnelle à ceux qui le
souhaitaient. Le cluster était pré-chargé avec plusieurs ensembles de
données comme des données de Twitter, tout Wikipedia, des données
d'utilisation du service de vélo public de Montréal `BIXI`_ et plusieurs
autres.

Pour moi, c'était une superbe opportunité pour jouer avec des
technologies telles que Hadoop et EC2, sans avoir à peiner avec la
configuration du *cluster* même. Les ingénieurs de `Hopper Travel`_, les
principaux commanditaires, on fait un super boulot de mise en place et
ont fourni des exemples de code pour plusieurs ensembles de données.
Cela nous a évité d'écrire les parties ennuyeuses du code de base et
nous a permis plutôt de nous concentrer sur la partie Map/Reduce.

Même si les exemples de code étaient tous en Java, quelques équipes ont
décidé d'écrire plutôt leur Map/Reduce à l'aide de Python. En fait, il y
avait une assez grosse délégation de Montréal-Python présente à
l'événement. Bien que certains aient réussi, coder en Python rendait
impossible l'utilisation de bibliothèques tierces à cause de la façon
dont était configuré le cluster. Néanmoins, les organisateurs de
l'événement ont manifesté de l'intérêt pour organiser un événement
similaire et collaborer avec des groupes comme `Montréal-Python`_ et
`Montréal Ruby`_ pour avoir un meilleur support pour ces langages.

.. figure:: http://www.hackreduce.org/wp-content/uploads/2011/03/IMG_1027.png
   :align: center
   :alt: Picture from HackReduce

   Picture from HackReduce
Je voudrais remercier les commanditaires pour avoir organisé HackReduce
et de faire de Montréal une ville magnifique pour les geeks.

`|image4|`_ `|image5|`_ `|image6|`_

.. raw:: html

   </p>

.. _`http://blog.simonmathieu.com`: http://blog.simonmathieu.com/
.. _HackReduce: http://www.hackreduce.org/
.. _BIXI: http://montreal.bixi.com/
.. _Hopper Travel: http://www.hopper.travel/
.. _Montréal-Python: http://montrealpython.org/
.. _Montréal Ruby: http://www.montrealonrails.com/
.. _|image7|: http://www.hopper.travel/
.. _|image8|: http://www.google.com/
.. _|image9|: http://www.needium.com/

.. |Picture from
HackReduce| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/IMG_1027.png
.. |Hopper
Travel| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/hopper-logo2.png
.. |Google
Montreal| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/google-online-logo.png
.. |Needium| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/needium-new-logo.png
.. |image4| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/hopper-logo2.png
.. |image5| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/google-online-logo.png
.. |image6| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/needium-new-logo.png
.. |image7| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/hopper-logo2.png
.. |image8| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/google-online-logo.png
.. |image9| image:: http://www.hackreduce.org/wp-content/uploads/2011/03/needium-new-logo.png
