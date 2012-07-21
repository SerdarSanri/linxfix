#LinxFix

LinxFix is a bundle that allows laravel users to specify link redirects. When you are creating a new website for a client, and they have various links that will no longer be used from their previous site, you can simply use LinxFix.

LinxFix will use the key value pairs within the config to create a 302 redirect, thus minimising the negative SEO effects of broken links.

###Quickstart

* Clone LinxFix into *APPPATH/bundles/*
  * ```git clone git://github.com/benjam-es/linxfix.git linxfix```
* Edit *APPPATH/application/bundles.php*

```php

<?php
// APPPATH/application/bundles.php
return array(
  'linxfix' => array('auto' => true),
);
```
* Edit your *APPPATH/bundles/linxfix/config/links.php* file and make sure you create the redirect links that you require

###Future Updates

* Database controlled redirects
* Choose 301 or 302
* Choose http or https
* When a genuine 404 occurs, store a log of it
* Admin to view 404's and assign them a redirect link