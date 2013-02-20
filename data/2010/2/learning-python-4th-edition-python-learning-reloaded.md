Title: Learning Python, 4th Edition: Python Learning Reloaded!
Date: 2010-02-18 08:29
Author: Aalsaadi
Category: Montréal Python
Tags: Book Review, python
Slug: learning-python-4th-edition-python-learning-reloaded
Lang: en

<!--:en-->*Learning Python* is a well-written book by an experienced
Python trainer that has served the Python community well since the first
edition was published, back in 1999. Now at its fourth edition, this
book by Mark Lutz arguably continues to be Python's bible. This article
reviews the fourth edition by discussing the target audience, scope,
content, and pedagogical features. It concludes by a recommendation.

Audience
--------

This book is intended as an introductory text to programmers new to
Python.  Although people with no programming experience are not
discouraged from reading it, they are warned that time is mostly spent
teaching Python, not programming fundamentals. I agree with this
picture, though from my own experience as well as those of others, the
book is equally valuable to more experienced Python programmers both as
a pseudo-reference, and as an introduction to more advanced topics. The
critical point here is that the book does not make assumptions about
educational or vocational experiences and provides many examples, which
renders the book approachable by a large audience.

Scope
-----

Both Python 2.6 and 3.x are covered in this edition. However, the latest
3.x line is considered the reference from which variations in 2.6 are
discussed when appropriate. This approach is logical; the new Python 3.x
presents a major change to the language, but is not sufficiently
dominant to warrant exclusive treatment. This book discusses the Python
language and excludes the Python standard and non-standard libraries.
The latter are discussed in other places, including Lutz's own
*Programming Python,* which stands at its third edition at the time of
writing of this article. I find this separation necessary because of
size considerations and, in fact, this division did not exist in the
first edition of the book! However, one topic does not seem to fit in
the language/libraries division, and that is packaging and deployment. I
will argue that there aren't many (if any) books that discuss packaging
and deployment of Python programs. I will also argue that this topic
should be included in the book being reviewed here since it is essential
to real Python programming. Since Lutz discusses the Python run-time
environment, I do not think it would detract from the book's coherence
to include a single chapter on packaging.  It is possible that the
proliferation of various packaging and deployment options such as
distutils, setuptools, pip, buildout, virtualenv, paver, fabric and
others, is the reason for this exclusion. Or it could be that these
tools are in a state of major flux that any text will be quickly
outdated.  If size is the reason for this exclusion, maybe Lutz or
someone else can publish a *"Packaging and Deploying Python"* as a
separate volume.

Content
-------

The book starts by making a case for the use of Python. Both the
features of the language and its prominent users are discussed to build
credibility. Then, the run-time environment is discussed: how to run
programs in various ways on various operating systems and language
interpreters. Types and statements, which are at the core of any
language, are discussed next. Notably, there is an excellent discussion
on the topic of iterators and generators (both are also covered in a
later chapter).  Functions, modules and classes are then introduced. The
text also includes a discussion of general object-oriented programming
(OOP) principles which I find to be invaluable, as it brings the topic
of classes to life. Exceptions are introduced and discussed in detail.
The placement here is appropriate since exceptions are now objects in
Python so classes had to be discussed first. This chapter should prove
to be especially useful for people migrating from other languages that
do not have simple, yet effective, exception-handling constructs.
Finally, four advanced topics are covered: decorators, unicode, managed
attributes, and meta-classes. I find the first two to be absolutely
necessary for almost any system nowadays, even the smaller ones! The
latter two are not as ubiquitous, but should be useful to more
experienced programmers. I should mention here that the discussion of
the topics mentioned above doesn't stop at the basics, but provides
comprehensive coverage. This is also the case with the discussion of
topics such as dynamic typing, inheritance order, iterators, generators,
comprehensions, and functional programming, among many others. There is
even an interlude on documentation and the pydoc library.

Pedagogical Features
--------------------

Like many programming texts, *Learning Python* uses small programming
examples (appropriately executed in the Python interactive shell). These
small examples hope to capture the essence of the topic at hand, and it
does that well within the limitations of a small-scale context. This
fourth edition adds a new chapter on classes (Chapter 27) that contains
a more realistic code example presented in a tutorial format. In
addition to examples, each chapter ends with a summary of the chapter's
content as well as a quiz. The quiz is immediately followed by its
answers for easy reference. I have to admit that I do not use any of
these two features, so I will not be able to comment on their efficacy.

Conclusion
----------

Like many O'Reilly books, this is a well-written, coherent, and
beautifully type-set book. I highly recommend it to anyone who wants to,
or already does, program using python. It should help the novice in
their transition to an excellent programming language, or otherwise,
make an already familiar environment more powerful in the hands of
veterans.

> *About the reviewer: Ahmed Al-Saadi is a Software Analyst who works
> for a Montreal Python house. He wrote his first lines of code on a
> Sinclair ZX Spectrum+, though unfortunately not in Python at the
> time.*
