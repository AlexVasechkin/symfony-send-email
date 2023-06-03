# Comfortable ready service for Symfony projects to send email

## Description
The service sends html email via symfony/mailer.

## Usage
```php
class SomeController extends AbstractController
{
    public function index(
        SendEmailAction $sendEmailAction 
    ) {
        $sendEmailAction->execute(
            new SendEmailRequest(
                'login@domain.zone', //to
                'Greetings!', //subject
                'Hello, it`s me!' // textContent
                '<p>Hello, it`s me!</p>' //htmlContent
            )        
        );
    }
}
```

## Don`t forget
Add parameter app.email.from to config/services.yml. Set email from as a value.
