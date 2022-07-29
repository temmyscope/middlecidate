## Middle-Cidate

- I have chosen PHP's Laravel Framework to implement this task.




### Deisgn Pattern

- Design Pattern: Repository Design Pattern


#### Deploy

Deploying this project requires the following steps:

- clone repository
```sh
git clone https://github.com/temmyscope/middlecidate
```

- install dependencies
```sh
composer install
```

- start server
```sh
php artisan serve
``` 

****Note: The necessary environment keys are provided in the .env.example file. Valid values should be provided***
- where Sample Values are: 
```env
INSTITUTION_API=https://api.../institutions
INSTITUTION_API_TOKEN=eyJhbGciOiJSUzI1N...
INSTITUTION_TICKET_API=https://api.../tickets
```


### Endpoint

Sample Request To the Middleware API

- /api/institutions?institution=XXX

sample response
```json
{

}
```


### Worthy of Note

- Naturally, I'd prefer to use either Python's FastAPI or Laravel's Octane Frameworks (as they are more optimized for performance) but seeing it's a straightforward task that won't require extra performance gain, I went with the easiest to setup choice


- A Postman Collection (of requests) would be a proper way to document the API

- 