TODO
====

Generate Multiple Forms

Enter Form
-Enter Multiple Sections
--Enter Multiple Questions
---Enter Multiple Options
---And under this question others options are mentioned below like (Is comment required ?, Is comment date required ?, Is remedy required ?, Is remedy date required ?, Is image required? etc)

Right now working on following things....

Will update on some intervals or final release :-)

Installation Guide
==================

Run on CMD

composer require a-s-r/laravel-form-builder:dev-master
OR
php composer.phar require a-s-r/laravel-form-builder:dev-master

Then

Add this line 

Asr\FormBuilder\FormBuilderServiceProvider::class,

in config/app.php file under providers array.

Run Migrations
==============

php artisan vendor:publish --provider="Asr\FormBuilder\FormBuilderServiceProvider" --tag="migrations"

After Publishing complete, run

php artisan migrate