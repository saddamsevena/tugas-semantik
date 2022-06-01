<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapbook - Home</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3c1353c4c.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Connector untuk menghubungkan PHP dan SPARQL -->
    <?php
        require_once("sparqllib.php");
        $test = "";
        if (isset($_POST['search'])) {
            $test = $_POST['search'];
            $data = sparql_get(
            "http://localhost:3030/lapbook",
            "
            PREFIX id: <https://lapbook.com/>
            PREFIX item: <https://lapbook.com/ns/item#>
            PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>

            SELECT ?NamaProduk ?Processor ?RAM ?Storage ?GPU ?Harga ?Type ?OS ?Brand ?TahunRilis
            WHERE
            { 
                ?items
                    item:NamaProduk     ?NamaProduk ;
                    item:Processor      ?Processor ;
                    item:RAM            ?RAM ;
                    item:Storage        ?Storage ;
                    item:GPU            ?GPU ;
                    item:Harga          ?Harga ;
                    item:Type           ?Type ;
                    item:OS             ?OS ;
                    item:Brand          ?Brand ;
                    item:TahunRilis     ?TahunRilis .
                    FILTER 
                    (regex (?NamaProduk, '$test', 'i') 
                    || regex (?Processor, '$test', 'i') 
                    || regex (?RAM, '$test', 'i') 
                    || regex (?Storage, '$test', 'i') 
                    || regex (?GPU, '$test', 'i') 
                    || regex (?Harga, '$test', 'i') 
                    || regex (?Type, '$test', 'i') 
                    || regex (?OS, '$test', 'i') 
                    || regex (?Brand, '$test', 'i') 
                    || regex (?TahunRilis, '$test', 'i'))
                    }"
            );
        } else {
            $data = sparql_get(
            "http://localhost:3030/lapbook",
            "
                PREFIX id: <https://lapbook.com/>
                PREFIX item: <https://lapbook.com/ns/item#>
                PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                
                SELECT ?NamaProduk ?Processor ?RAM ?Storage ?GPU ?Harga ?Type ?OS ?Brand ?TahunRilis
                WHERE
                { 
                    ?items
                        item:NamaProduk     ?NamaProduk ;
                        item:Processor      ?Processor ;
                        item:RAM            ?RAM ;
                        item:Storage        ?Storage ;
                        item:GPU            ?GPU ;
                        item:Harga          ?Harga ;
                        item:Type           ?Type ;
                        item:OS             ?OS ;
                        item:Brand          ?Brand ;
                        item:TahunRilis     ?TahunRilis .
                }
            "
            );
        }

        if (!isset($data)) {
            print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
        }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container container-fluid">
            <a class="navbar-brand" href="index.php"><img src="src/img/logo-nobg.png" style="width:50px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
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

    <div class="container container-fluid mt-3  ">
        <i class="fa-solid fa-magnifying-glass"></i><span>Menampilkan hasil pencarian untuk "<?php echo $test; ?>"</span>
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Tipe</th>
                    <th>Brand</th>
                    <th>Tahun Rilis</th>
                    <th>Processor</th>
                    <th>RAM</th>
                    <th>Storage</th>
                    <th>GPU</th>
                    <th>OS</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                <?php foreach ($data as $dat) : ?>
                <tr>
                    <td></td>
                    <td><?= $dat['NamaProduk'] ?></td>
                    <td><?= $dat['Type'] ?></td>
                    <td><?= $dat['Brand'] ?></td>
                    <td><?= $dat['TahunRilis'] ?></td>
                    <td><?= $dat['Processor'] ?></td>
                    <td><?= $dat['RAM'] ?></td>
                    <td><?= $dat['Storage'] ?></td>
                    <td><?= $dat['GPU'] ?></td>
                    <td><?= $dat['OS'] ?></td>
                    <td><?= $dat['Harga'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="footer text-light text-center bg-dark pb-1">
        <p>Copyright &copy; All rights reserved -<img src="src/img/logo-nobg.png" style="width:75px" alt="Logo"></p>
    </footer>
</body>
</html>