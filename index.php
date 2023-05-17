<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- VueJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <header>
            <div class="container d-flex align-items-center">
                <i class="fa-brands fa-spotify"></i>
            </div>
        </header>

        <main class="overflow-auto">
            <div class="container">
                <div class="row row-cols-3 px-5">
                    <div v-for="(disk, index) in dischi" :key="index" class="col p-4">
                        <div class="card text-center">
                            <img :src="disk.poster" class="pt-4 px-5" alt="Cover">
                            <div class="card-body">
                                <h5 class="card-title"> {{ disk.title }} </h5>
                                <p class="card-author"> {{ disk.author }} </p>
                                <h5 class="card-year"> {{ disk.year }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>

</html>