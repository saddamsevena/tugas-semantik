<h1 align="center"><a href="https://github.com/saddamsevena/tugas-semantik" target="_blank">Lapbook</a></h1>

## About Projects

The application created is based on a website which the author then named it Lapbook. Lapbook itself is a website that contains information about Laptops of various types, brands, and others. On the website, there is also the application of web semantics in the form of a search engine using SPARQL so that each input given will display results that match the inputted.


### Built With

* [Bootstrap](https://getbootstrap.com/)
* [XAMPP](https://www.apachefriends.org/download.html)
* [Apache Jena Fuseki](https://jena.apache.org/documentation/fuseki2/index.html)
* [NGROK](https://ngrok.com/)

## Requirements

<ul>
    <li>Git</li>
    <li>Composer</li>
    <li>XAMPP</li>
    <li>PHP 7.3+</li>
    <li>Browser</li>
    <li>Apache Jena Fuseki</li>
    <li>NGROK</li>
</ul>

## Installation

1. Prepare and install all Requirements
2. Clone Project on XAMPP folder (../xampp/htdocs)
    ```sh 
        git clone https://github.com/saddamsevena/tugas-semantik
    ```
3. Run Apache Jena Fuseki on root folder
    ```sh 
        fuseki-server
    ```
4. Run NGROK on port 3030
    ```
        ngrok http 3030
    ```
5. Add turtle file on `/src/sparql/data.ttl` to Apache Jena Fuseki on http://localhost:3030/
6. Run the app
    ```sh 
        http://localhost/tugas-semantik/
    ```

## Author

| NPM           | Name        |
| ------------- |-------------|
| 140810190017  | Saddam Habibi Utomo |