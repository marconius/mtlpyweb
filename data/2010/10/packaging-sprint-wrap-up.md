Title: Packaging Sprint Wrap-up
Date: 2010-10-03 23:39
Author: Ygingras
Category: Montréal Python
Slug: packaging-sprint-wrap-up
Lang: en

<!--:en-->Last Wednesday, we met at the Montréal office of Google to
sprint on the Python packaging system. This is our second sprint since
we came back from vacation and it went really well with a total of 12
sprinters:

-   Rajiv Abraham
-   Éric Araujo (remotely from Paris)
-   Pior Bastida
-   Nicolas Cadou
-   Yannick Gingras
-   Amos Latteier
-   Mathieu Leduc-Hamel
-   Derek McTavish Mounce
-   Mathieu Perreault
-   Pierre Phaneuf (host from Google)
-   Antoine Reversat
-   Alexandre Vassalotti

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
all sprinters with a full 3-OS license for [WingIDE][]. Overall, over
200 lines were changed across 58 files, not a lot a code in absolute
terms but considering the amount of coaching and of debugging that took
place, this was one of our best sprint. The packaging core team did not
find anything too controversial in our code and it just got merged into
[Tarek's repository][]. We're aiming for another sprint around
mid-October. Stay tuned for the announcement. [caption
id="attachment\_978" align="alignnone" width="300" caption="Yannick
explains how to measure the test coverage"][![][]][][/caption]

  [WingIDE]: http://wingware.com/products
  [Tarek's repository]: https://bitbucket.org/tarek/distutils2/changesets/38d869d48447
  []: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506-300x225.jpg
    "Yannick explains how to measure the test coverage"
  [![][]]: http://montrealpython.org/wp-content/uploads/2010/09/IMG_20100929_194506.jpg
