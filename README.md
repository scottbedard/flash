# Flash Messaging

A Lavavel package for easy flash messaging

https://packagist.org/packages/bedard/flash

##### Adding a flash message

To add a message to the flash que, you have a few options. There are four preset status types, and one for custom statuses.

Here are examples of the four preset status types
```php
Flash::error('On no, something failed!');
Flash::info('Your account has been created!');
Flash::success('Hooray, everything worked!');
Flash::warning('You left a field blank.');
);
```
You may also add custom status types using the message() method
```php
Flash::message('foo', 'This is a foo message.');
```

##### Displaying flash messages

To access your flash messages, look for the session variable named 'flash_messages'. If messages exist, this will be an associative array using the keys 'type' and 'content'.

Here is a quick example of how messages can be accessed and displayed using Laravel's Blade syntax
```html+php
@if($messages = Session::get('flash_messages'))
	@foreach($messages as $message)
		<div class="flash {{ $message['type'] }}">{{ $message['content'] }}</div>
	@endforeach
@endif
```