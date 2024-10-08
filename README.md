
# noframework

**noframework** is a minimalistic framework for building web applications—without relying on established frameworks. This project serves as a learning tool, helping me to better understand the fundamental concepts of web development and the inner workings of frameworks. The goal is to explore what makes a framework function and gain a deeper understanding of the processes involved.

## Packages Used

This project utilizes several packages, each serving a specific purpose:

- **spatie/ignition**: A beautiful and informative error page generator that helps in debugging by offering detailed error messages and stack traces.
  
- **league/container**: A dependency injection container that simplifies managing and injecting dependencies throughout your application, helping to maintain clean and modular code.

- **adbario/php-dot-notation**: This package allows you to work with arrays using dot notation, making it easier to access and manipulate nested data structures.

- **vlucas/phpdotenv**: A library that loads environment variables from a `.env` file, providing a straightforward way to manage configuration settings, separating them from your code.

- **laminas/laminas-diactoros**: A package that provides PSR-7 HTTP message implementations, including request, response, and stream objects. It helps in creating and managing HTTP messages in a standardized way, ensuring compatibility with other PSR-7-compliant packages and frameworks.

- **league/route**: A powerful routing package built on top of FastRoute that enhances routing capabilities by adding features like controller and middleware registration, among others. It provides a flexible and efficient way to handle HTTP routing in your application.

- **laminas/laminas-httphandlerrunner**: A package that executes PSR-15 `RequestHandlerInterface` instances and emits the responses they generate. It handles the request/response lifecycle, making it easier to implement middleware-based applications.

- **twig/twig**: A flexible and powerful templating engine for PHP, designed to help you separate your application's logic and presentation. Twig allows you to write clean and maintainable templates, with features like template inheritance, filters, and macros.

- **illuminate/database**: A powerful and flexible database abstraction layer and ORM (Object-Relational Mapping) that is part of the Laravel framework. It provides an easy-to-use API for interacting with databases, supporting a variety of database systems. This package simplifies complex database operations, including querying, relationships, and migrations, making it easier to manage and interact with your database.

- **cartalyst/sentinel**: Sentinel is a modern, framework-agnostic package for authorization and authentication, featuring roles, permissions, custom hashing, and additional security features. It adheres to the PSR-4 standard for seamless PHP interoperability. **Version 7.0** of Sentinel is used in this project.

- **illuminate/events**: A lightweight event dispatcher, part of the Laravel framework, that allows you to register, listen to, and trigger events in your application. It helps decouple your application's components by promoting the use of events and listeners.

- **symfony/http-foundation**: A component that provides an object-oriented layer for the HTTP specification, making it easier to manage HTTP requests, responses, cookies, and sessions. It is an essential tool for handling HTTP interactions in a standardized and efficient manner.

- **slim/csrf**: A simple and flexible CSRF (Cross-Site Request Forgery) protection middleware for PHP applications. It helps secure your forms and sensitive endpoints by generating and validating unique tokens for each user session. This ensures that malicious attempts to submit unauthorized requests are blocked, protecting your application from CSRF attacks.

- **respect/validation**: A powerful and intuitive validation library for PHP that allows you to validate input data against a wide variety of rules. It offers a fluent API for building complex validation logic with ease, supporting a vast array of validators like `email`, `numeric`, `length`, and custom rules. This package is ideal for ensuring data integrity in your application by enforcing validation rules consistently across your forms and inputs.

- **illuminate/pagination**: A pagination library that is part of the Laravel framework. It provides a convenient and flexible way to paginate large sets of data, generating links and managing the current page state. This package makes it easy to create paginated views, with customizable templates and options for handling pagination in various scenarios, such as in collections or database queries. It simplifies the process of breaking down large datasets into manageable pages, improving user experience and performance in your application.


## Contributing
Contributions are welcome! If you wish to contribute, please ensure that your changes are well-documented and easy to understand.

Thanks, Alex from Codecourse, for this awesome tutorial.
