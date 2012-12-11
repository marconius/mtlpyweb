Title: Packaging Sprint #5 wrap-up
Date: 2010-07-09 22:42
Author: Ygingras
Category: Packaging, Sprints
Slug: packaging-sprint-5-wrap-up
Lang: en

<!--:en-->Last Monday was a hot and sticky day here in Montréal, one of
these days when air feels as dense as molasses, when grocery stores run
out of ice cream. Yet, a handful of brave Pythonistas decided to brave
the heat and to head out to [Brasseurs Numériques][] for the fifth
Montréal-Python [sprint on the Python packaging system][].

The turn out was a bit low compared with previous sprints but this is
easily explained by the many regulars who are traveling abroad during
the summer. We were also happy to welcome a few new comers.

We took a moment at the white-board to review what was the state of the
Python packaging and to define the aspects on which everyone could be
contributing.

Alex and Nicolas worked on improving the test coverage in distutils2, a
very good way of getting familiar with the code while diving in right
away; I, Yannick, gave them a hand by adding test coverage reports as a
command line option to the test runner; George and Pior worked on 2to3
migration fixers and on the related test suite; and Davin improved the
Hitchhiker's Guide to Packaging while Michel helped him by packaging a
package of his own while following the guide, making sure that the
documentation was clear and obvious.

Thanks to the sprinters:

-   Davin Baragiotta
-   Pior Bastida
-   Nicolas Cadou
-   Alex Gal
-   Michel Gallant
-   Yannick Gingras
-   George Peristerakis

I also want to personally thank everyone for taking the time to clean
their glasses and plates as they were leaving. It was refreshing not to
have to do most of the cleanup myself at 1am.

</p>
We're becoming productive during our sprints. One thing that we
overlooked when we started sprinting at Montréal-Python is how important
it is to have a coach, that is, someone who knows the project reasonably
well and who will answer questions from other sprinters. Theoretically,
a bunch of hackers could work together, dive in, pry open, and figured
out a project as they go. In practice, that does not work very well for
a sprint since you get a bunch of people who are not used to work
together and the kind of close communication that you need for pair
investigation does not have time to kick in during the relatively short
sprint. As people are waiting for the investigators to come up with
answers to their questions, their excitement dissipates and they get
kicked out of [the zone][].

Another thing that really helps is to have possible tasks with a wide
range of difficulty to allow anyone to get busy. An example of great
introductory task, as mentioned earlier, is writing unit-test. This
requires that setting up a working test environment and producing a
coverage report is straight forward and this is what a someone should
keep in mind before launching a sprint on a given project.

As it takes some time to setup and to get focussed, one way to improve
productivity is to have longer sprint. Hacking during the week-end,
especially during nice summer days, is not very popular but dedicated
hackers will show up. A good balance between week-days and weekend
sprints is key here. Another way to improve is to nail down as many
"boiler plate" tasks as possible before the sprint: creating all the
Bitbucket accounts and distributing the necessary privileges, assigning
tasks, or even setting up a working tests environment.

We have to thank the Python Software Foundation for [supporting the
sprint][] by covering the cost of food and drinks. Fuel (food and
drinks), is not a requirement for a sprint since dedicated hackers will
show up whether they have to bring their own booze or not, but it's nice
to be able to reward sprinters with a savory meal. They deserve it. The
[sprint sponsorship program][] is a great thing, not because there is a
financial bottleneck to organizing sprint, but because having a common
coordinator for Python sprint will help to share the excitement and the
knowledge of what works for sprints and what doesn't. Hopefully, other
user groups will join us and make sprints a core element of their
schedule.

[gallery]<!--:-->

  [Brasseurs Numériques]: http://ajah.ca/blog
  [sprint on the Python packaging system]: http://montrealpython.org/2010/07/packaging-sprint-5/
  [the zone]: http://en.wikipedia.org/wiki/Flow_(psychology)
  [supporting the sprint]: http://pythonsprints.com/2010/07/4/our-first-sponsored-sprint-montreal-python-packagi/
  [sprint sponsorship program]: http://pythonsprints.com/
