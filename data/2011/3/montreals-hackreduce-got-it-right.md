Title: Montréal&#039;s Hackreduce got it right
Date: 2011-03-27 21:46
Author: Smathieu
Category: Montréal Python
Slug: montreals-hackreduce-got-it-right
Lang: en

<!--:en-->*Reposted from [http://blog.simonmathieu.com][]* What a
weekend! This Saturday, 60 hackers, including myself got a pretty unique
opportunity. We were given a cluster of 100 machines, 400 cores, to do
with what we please. The event is called [HackReduce][], the goal was
simply to give large amounts of computational power to whoever wanted it
for a day. The cluster came preloaded with several datasets like Twitter
data, the whole of Wikipedia, usage data from Montréal’s public bike
service [BIXI][] and many more. For me, it was an awesome opportunity to
play with technologies like Haddop and EC2, without having to go through
the pain of configuring the cluster itself. Engineer’s from [Hopper
Travel][], the main sponsors, did a great job of setting everything and
providing code samples for the various datasets. This saved us from
having to write all of the boring boiler plate code, but instead, let us
focus on the Map/Reduce part. Although the code samples where all in
Java, some teams decided to write their Map/Reduce using Python instead.
There was actually a fairly big delegation from Montréal-Python present
at the event. Although some succeeded, the use of Python made it
impossible to use 3rd party library because of the way the cluster was
configured. Nevertheless, the organizers of the event showed interest in
organizing another similar event and to collaborate with groups like
[Montréal-Python][] and [Montréal Ruby][] to have better support for
those languages. ![Picture from HackReduce][] I’d like to thanks the
sponsors for organizing HackReduce and making Montréal an awesome city
for geeks to live in. <span>[![Hopper Travel][1]][] [![Google
Montreal][]][] [![Needium][]][]</span>

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
