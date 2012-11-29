#!/usr/bin/env python
# encoding: utf-8

import sys
import os

from setuptools import setup, find_packages

setup(name = "mtlpyweb",
      version = "0.0.1",
      description = "The web Montreal Python web site",
      long_description = "",
      author = "Montreal Python user group",
      url = "http://www.montrealpython.org/",
      license = "MIT",
      keywords = "",
      install_requires = [
        "pelican",
        "Jinja2",
        "BeautifulSoup",
        "markdown"
        ],
      packages = find_packages(exclude=["examples", "tests", "tests.*", "docs", "scripts"]),
      include_package_data = True,
      package_data = {
        "": ["README.textile", "LICENSE"],
        "docs": ["Makefile", "source/*"]
        },
      zip_safe = True,
      entry_points={
        "console_scripts": [
            "mtlpyweb-wordpress = mtlpyweb.tools.wordpress:main"
            ]
        }
      )
