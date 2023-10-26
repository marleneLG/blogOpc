# Project 5 : Personnal blog

This project was created as part of my training with openclassrooms to present you my skills obtained through my learning.

## Technologies

* PHP
* CSS 

## Features

* Develop an administration section that must be accessible only to registered and validated users.
* The administration pages will be accessible on conditions.
* view posts from newest to oldestiew posts from newest to oldest
* On the page allowing to modify a blog post, the user has the possibility to modify the fields title, chapô, author and content.
* Use one or more external libraries provided they are integrated through Composer.
* On the administration part, only people with “administrator” rights have access; other users will only be able to comment on articles (with validation before publication).
* No security breaches.
* Project monitored via SymfonyInsight.

## Built with

* PHP 8.2.0
* phpMyAdmin 5.2.0
* MySQL 8.0.31
* Twig 3.5

## Getting started

In order to install the project, follow these simple steps.

### Prerequisite

* PHP > 8.2.0
* SMTP server WAMP/MAMP for local use
* MySQL : phpMyAdmin 
* Librarie will be installed using Composer (Twig)
* CSS libraries [Bootstrap](https://getbootstrap.com/)
* Mailing service with docker

## Installation

### Clone

* Git clone the repository from this page. [GitHub Documentation](https://docs.github.com/fr/repositories/creating-and-managing-repositories/cloning-a-repository)

### Configuration

* Open php.ini file, then replace Database and SMTP fields with your own information
* If you are missing any information, please ask your webhost for SMTP and Database credentials
* Install composer [Composer](https://getcomposer.org/doc/00-intro.md)
* In your CMD, move on your project directory using cd command:
    {% filename %}cd your/directory{% endfilename %}
* Run: 
    {% filename %}composer install{% endfilename %}
* All dependencies should be installed in a vendor directory.