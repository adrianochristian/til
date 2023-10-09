# Force the Content-Type: ApplicationJson Header on API Requests

While developing an API there is the small chance that the Content-type won't be informed by the frontend.

Using the following code is possible to force it to be sent in every request: 


```php
    $request->set->('Accept','application/json');
```

By standards, this should be defined as a config before the throttle:api (in the Kernel.php file) so it won't have any problems with route model binding

```php
'api' => [
    AlwaysAcceptJson::class, //Our personalized middleware class
    'throttle:api',
    //Other Definitions
]
```

This ensures that we always will return the correct response and status code as defined by our API standards