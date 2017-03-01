{{ content() }}
<div class = "container bg-success">
    <h1>Welcome to MY MANUAL</h1>
    <p>MY MANUAL is a helpful application to study and search PHP code online.
    We are willing to accept any comments and sugestions.</p>
    <p>{{ link_to('register', 'Try it please &raquo;', 'class': 'btn btn-primary btn-large btn-success') }}</p>
</div>
<div class="container bg-info">
<div class="row">
    <div class="col-md-4">
        <h2 class="bg-danger">PHP Arrays</h2>
        <p>These functions allow you to interact with and manipulate arrays in various ways. 
            Arrays are essential for storing, managing, and operating on sets of variables. 
            Simple and multi-dimensional arrays are supported, and may be either user created or created by another function. 
            There are specific database handling functions for populating arrays from database queries, and several functions return arrays.
            Please see the Arrays section of the manual for a detailed explanation of how arrays are implemented and used in PHP. 
            See also Array operators for other ways how to manipulate the arrays. </p>
    </div>
    <div class="col-md-4">
        <h2 class="bg-danger">PHP PDO</h2>
        <p>The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP. 
            Each database driver that implements the PDO interface can expose database-specific features as regular extension functions. 
            Note that you cannot perform any database functions using the PDO extension by itself; 
            you must use a database-specific PDO driver to access a database server.
            PDO provides a data-access abstraction layer, which means that, regardless of which database you're using, 
            you use the same functions to issue queries and fetch data. 
            PDO does not provide a database abstraction; it doesn't rewrite SQL or emulate missing features. 
            You should use a full-blown abstraction layer if you need that facility. 
            PDO ships with PHP 5.1, and is available as a PECL extension for PHP 5.0; 
            PDO requires the new OO features in the core of PHP 5, and so will not run with earlier versions of PHP.</p>
    </div>
    <div class="col-md-4">
        <h2 class="bg-danger">PHP Code Snippets</h2>
        <p>In programming practice, "snippet" refers narrowly to a portion of source code that is literally included by 
            an editor program into a file, and is a form of copy and paste programming. 
            This concrete inclusion is in contrast to abstraction methods, such as functions or macros, 
            which are abstraction within the language. 
            Snippets are thus primarily used when these abstractions are not available or not desired, 
            such as in languages that lack abstraction, or for clarity and absence of overhead.
           Snippets are similar to having static preprocessing included in the editor, and do not require support by a compiler. 
            On the flip side, this means that snippets cannot be invariably modified after the fact, 
            and thus is vulnerable to all of the problems of copy and paste programming. 
            For this reason snippets are primarily used for simple sections of code (with little logic), or for boilerplate, 
            such as copyright notices, function prototypes, common control structures, or standard library imports. </p>
    </div>
</div>
</div>
