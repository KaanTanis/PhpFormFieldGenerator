# About
This is not a package. Example code for building form field with PHP.

# How It Works?
Pages/Post
```php
class Post
{
    public static function fields()
    {
        return [
            Text::make('Example input label', 'title')
                ->placeholder('Example placeholder of the input')
                ->required(),

            Text::make('Example input label', 'description')
                ->placeholder('Example placeholder of the input')
        ];

    }
}
```

And Call
```php
Post::fields();
```
"# PhpFormFieldGenerator" 
