
        <!-- Start of Content -->
        <div class="container px-lg-5 p-3 mt-5">
            
            <div class="text-center text-light my-4">
                <h3>Pick a form to fill and start generating something!</h3>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 my-4">
                    <!-- Programming Language -->
                    <div class="cat1 bg-primary p-5 rounded shadow-lg">
                        <h1 class="text-center"><i class="bi bi-code-slash"></i></h1>
                            <h2 class="text-center fw-bold mb-5">Programming Language</h2>
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

                <div class="col-lg-4 col-md-12 col-12 my-4">
                    <!-- Recipe Generator -->
                    <div class="cat2 bg-success p-5 rounded shadow-lg">
                        <h1 class="text-center"><i class="bi bi-egg-fried fa-lg"></i></h1>
                        <h2 class="text-center fw-bold mb-5">Recipe <br> Generator</h2>
                        <form id="recipe-generator" action="finals_activity_1_controller.php" method="post">
                            <div class="form-group my-3">
                                <label for="dish">Enter a dish:</label>
                                <input type="text" class="form-control" id="dish" name="dish" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-warning fw-bold w-100">Generate Recipe</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12 my-4">
                    <div class="cat3 bg-danger p-5 rounded shadow-lg">
                        <h1 class="text-center"><i class="bi bi-collection-play-fill"></i></h1>
                        <h2 class="text-center fw-bold mb-5">Social <br> Media Ads</h2>
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