<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finals Activity#1 | Form Instances</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <!-- Navigation Header -->
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary sticky-top text-light" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Finals Activity#1</a>
            <p class="mx-3 my-2"> Jean Khladyn Stefanie L. Abarquez </p>
        </div>
    </nav>

    <!-- Start of Content -->
    <div class="container my-5">
        <div class="row g-3">
            <div class="col-lg-4 col-md-12 col-12">
                <!-- Programming Language -->
                <div class="bg-primary p-5 rounded shadow-lg">
                    <h1 class="text-center"><i class="bi bi-code-slash"></i></h1>
                        <h2 class="text-center fw-bold mb-4">Programming Language</h2>
                        <form id="programming-language" action="finals_activity_1_controller.php" method="post">
                            <div class="form-group">
                                <label for="language">Select a programming language:</label>
                                <select class="form-select" id="language" name="language">
                                    <option value="Java">Java</option>
                                    <option value="Python">Python</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="C#">C#</option>
                                    <option value="C++">C++</option>
                                    <option value="Ruby">Ruby</option>
                                    <option value="Swift">Swift</option>
                                    <option value="Go">Go</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Rust">Rust</option>
                                    <option value="TypeScript">TypeScript</option>
                                    <option value="Kotlin">Kotlin</option>
                                    <option value="Scala">Scala</option>
                                    <option value="Perl">Perl</option>
                                    <option value="Haskell">Haskell</option>
                                </select>
                            </div>
                            <div class="form-group my-3">
                                <label for="task">Enter an equation:</label>
                                <input type="text" class="form-control" id="task" name="task" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-warning fw-bold w-100">Generate Result</button>
                        </form>
                    </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12">
                <!-- Recipe Generator -->
                <div class="bg-success p-5 rounded shadow-lg">
                    <h1 class="text-center"><i class="bi bi-egg-fried fa-lg"></i></h1>
                    <h2 class="text-center fw-bold mb-4">Recipe <br> Generator</h2>
                    <form id="recipe-generator" action="finals_activity_1_controller.php" method="post">
                        <div class="form-group my-3">
                            <label for="dish">Enter a dish:</label>
                            <input type="text" class="form-control" id="dish" name="dish" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-warning fw-bold w-100">Generate Recipe</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12">
                <div class="bg-danger p-5 rounded shadow-lg">
                    <h1 class="text-center"><i class="bi bi-collection-play-fill"></i></h1>
                    <h2 class="text-center fw-bold mb-4">Social <br> Media Ads</h2>
                    <form id="social-media-ads" action="finals_activity_1_controller.php" method="post">
                        <div class="form-group my-3">
                            <label for="ad">Enter a prompt:</label>
                            <input type="text" class="form-control" id="ad" name="ad" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-warning fw-bold w-100">Generate Ad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <small class="d-block"> Activity made by James Anthony Sing for ICS26015. </small>
    </footer>

    </body>
</html>
