<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapbook - About</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container container-fluid">
            <a class="navbar-brand" href="index.php"><img src="src/img/logo-nobg.png" style="width:50px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="about.php">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="" method="post" id="nameform">
                    <input class="form-control me-2" type="search" placeholder="Ketik keyword disini" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="accordion container my-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Semantic Web?
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p>The Semantic Web is an extension of the World Wide Web through standards set by the World Wide Web Consortium (W3C). The goal of the Semantic Web is to make Internet data machine-readable. To enable the encoding of semantics with the data, technologies such as Resource Description Framework (RDF) and Web Ontology Language (OWL) are used.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                About the Project
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <p>Lapbook is a website that can help you to find laptops with many preferences based on your keyword, we will provide laptops data only for you. This website build with Bootstrap, Apache Jena Fuseki, NGROK and SPARQL.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-fluid my-3" style="width: 18rem;">
        <div class="card bg-dark text-center text-light">
            <div class="card-header h4">
                Developer
            </div>
            <img src="src/img/me.jpg" alt="Author">
            <div class="card-body">
                <h6>Saddam Habibi Utomo</h6>
                <span>140810190017<br>Computer Science<br>Padjadjaran University</span>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer text-light text-center bg-dark pb-1">
        <p>Copyright &copy; All rights reserved -<img src="src/img/logo-nobg.png" style="width:75px" alt="Logo"></p>
    </footer>
</body>
</html>