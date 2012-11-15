#!/usr/bin/env python
# encoding: utf-8

import sys
import os

try:
    from setuptools import setup, find_packages
except ImportError:
    print("You do not seem to have distribute or setuptools installed.")
    print("WebCore requires functionality from one of these packages.")
    print("We recommend installing distribute:\n\
        http://pypi.python.org/pypi/distribute#installation-instructions\n")

    raise


if sys.version_info <= (2, 6):
    raise SystemExit("Python 2.6 or later is required.")


setup(
        name = "MtlPython",
        version = "0.0.1",

        description = "The web Montreal Python web site",
        long_description = "",
        author = "Montreal Python user group",
        url = "http://www.montrealpython.org/",
        license = "MIT",
        keywords = '',
        install_requires = [
		'pelican',
		'Jinja2',
		'BeautifulSoup',
            ],
        packages = find_packages(exclude=['examples', 'tests', 'tests.*', 'docs', 'scripts']),
        include_package_data = True,
        package_data = {
                '': ['README.textile', 'LICENSE'],
                'docs': ['Makefile', 'source/*']
            },
        zip_safe = True,

   )
