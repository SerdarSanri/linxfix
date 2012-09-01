#LinxFix

LinxFix is a bundle that allows laravel users to specify link redirects. When you are creating a new website for a client, and they have various links that will no longer be used from their previous site, you can simply use LinxFix.

LinxFix will use an array of links to check against the current URL. If the current URL matches any of the 'from' values, it will redirect to the 'to' value with the specificed 'status', thus minimising the negative SEO effects of broken links.

Note: LinxFix only overrides 404's, not regular links.

###Download the Bundle

* Clone LinxFix into *APPPATH/bundles/*

  * ```git clone git://github.com/benjam-es/linxfix.git linxfix```*

###Autoload the Bundle

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
* Choose http or https
* When a genuine 404 occurs, store a log of it
* Admin to view 404's and assign them a redirect link