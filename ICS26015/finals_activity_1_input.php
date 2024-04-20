
        <!-- Start of Content -->
        <div class="container px-lg-5 p-3 mt-5">
            
            <div class="text-center text-light my-4">
                <h2 class="fw-bold">Welcome.</h2>
                <h3>Pick a form to fill and start generating something!</h3>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-12 col-md-12 col-12 my-4">
                    <!-- Programming Language -->
                    <div class="cat1 rounded shadow-lg">
                        <div class="head bg-primary rounded-top">
                            <h5 class="fw-bold mx-2"><i class="bi bi-code-slash fa-lg"></i> &nbsp; Programming Language</h5>
                        </div>
                        <div class="content p-4">
                            <p> Lorem ipsum dolor sit amet.. </p>
                            <!-- Form -->
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
                                <div class="form-group my-2">
                                    <label for="task">Enter an equation:</label>
                                    <input type="text" class="form-control" id="task" name="task" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-warning fw-bold w-100 mt-3" data-bs-toggle="modal" data-bs-target="#output"><i class="bi bi-caret-right-fill"></i> Generate Result</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-12 my-4">
                    <!-- Recipe Generator -->
                    <div class="cat2 rounded shadow-lg">
                        <div class="head bg-success rounded-top">
                            <h5 class="fw-bold mx-2"><i class="bi bi-egg-fried fa-lg"></i> &nbsp; Recipe Generator</h5>
                        </div>
                        <div class="content p-4">
                            <p> Lorem ipsum dolor sit amet.. </p>
                            <!-- Form -->
                            <form id="recipe-generator" action="finals_activity_1_controller.php" method="post">
                                <div class="form-group my-2">
                                    <label for="dish">Enter a dish:</label>
                                    <input type="text" class="form-control" id="dish" name="dish" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-warning fw-bold w-100 mt-3" data-bs-toggle="modal" data-bs-target="#output"><i class="bi bi-caret-right-fill"></i> Generate Recipe</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-12 my-4">
                    <div class="cat3 rounded shadow-lg">
                        <div class="head bg-danger rounded-top">
                            <h5 class="fw-bold mx-2"><i class="bi bi-collection-play-fill fa-lg"></i> &nbsp; Social Media Ads</h5>
                        </div>
                        <div class="content p-4">
                            <p> Lorem ipsum dolor sit amet.. </p>
                            <!-- Form -->
                            <form id="social-media-ads" action="finals_activity_1_controller.php" method="post">
                                <div class="form-group my-2">
                                    <label for="ad">Enter a prompt:</label>
                                    <input type="text" class="form-control" id="ad" name="ad" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-warning fw-bold w-100 mt-3" data-bs-toggle="modal" data-bs-target="#output"><i class="bi bi-caret-right-fill"></i> Generate Ad</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="output" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fw-bold fs-5" id="staticBackdropLabel">Generated Result:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-scroll">
                    <div id="terms-item-1">
                        <h4>Item 1: Title Goes Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur varius maximus. Suspendisse sit amet rutrum sem. Curabitur pretium enim vel eros semper pretium. Aenean congue quam a ipsum dignissim, sit amet laoreet urna varius. Vestibulum nec eros arcu. Nam ex augue, egestas eu dui vehicula, porttitor eleifend magna. 
                        <br><br>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis vehicula diam eget est gravida, in aliquet dolor sollicitudin. Quisque ac lectus eu sem auctor viverra eget vel lacus. Sed nulla nunc, scelerisque non elit et, ultricies aliquet lacus. Aenean sit amet risus scelerisque, mattis massa sed, auctor urna. Pellentesque eu ligula suscipit, lacinia augue sed, venenatis libero. Proin elementum justo vitae nisl mattis vestibulum.
                        <br><br>
                        Nunc pharetra semper ipsum, sit amet vulputate augue viverra eu. Etiam urna ligula, sagittis non dapibus lacinia, accumsan in ligula. Ut eget nunc sapien. Curabitur fringilla vel eros facilisis porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur consectetur dapibus diam. Phasellus fermentum id mi non congue. Pellentesque vel lorem vitae quam suscipit convallis ac rhoncus urna. Mauris vel lorem risus. Aenean convallis quam sed mi tempor tristique. Vivamus ex odio, eleifend eu auctor ut, luctus non mi.</p>
                        <br><br>
                    </div>

                    <div id="terms-item-2">
                        <h4>Item 2: Title Goes Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur varius maximus. Suspendisse sit amet rutrum sem. Curabitur pretium enim vel eros semper pretium. Aenean congue quam a ipsum dignissim, sit amet laoreet urna varius. Vestibulum nec eros arcu. Nam ex augue, egestas eu dui vehicula, porttitor eleifend magna. 
                        <br><br>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis vehicula diam eget est gravida, in aliquet dolor sollicitudin. Quisque ac lectus eu sem auctor viverra eget vel lacus. Sed nulla nunc, scelerisque non elit et, ultricies aliquet lacus. Aenean sit amet risus scelerisque, mattis massa sed, auctor urna. Pellentesque eu ligula suscipit, lacinia augue sed, venenatis libero. Proin elementum justo vitae nisl mattis vestibulum.
                        <br><br>
                        Nunc pharetra semper ipsum, sit amet vulputate augue viverra eu. Etiam urna ligula, sagittis non dapibus lacinia, accumsan in ligula. Ut eget nunc sapien. Curabitur fringilla vel eros facilisis porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur consectetur dapibus diam. Phasellus fermentum id mi non congue. Pellentesque vel lorem vitae quam suscipit convallis ac rhoncus urna. Mauris vel lorem risus. Aenean convallis quam sed mi tempor tristique. Vivamus ex odio, eleifend eu auctor ut, luctus non mi.</p>
                        <br><br>
                    </div>

                    <div id="terms-item-3">
                        <h4>Item 3: Title Goes Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur varius maximus. Suspendisse sit amet rutrum sem. Curabitur pretium enim vel eros semper pretium. Aenean congue quam a ipsum dignissim, sit amet laoreet urna varius. Vestibulum nec eros arcu. Nam ex augue, egestas eu dui vehicula, porttitor eleifend magna. 
                        <br><br>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis vehicula diam eget est gravida, in aliquet dolor sollicitudin. Quisque ac lectus eu sem auctor viverra eget vel lacus. Sed nulla nunc, scelerisque non elit et, ultricies aliquet lacus. Aenean sit amet risus scelerisque, mattis massa sed, auctor urna. Pellentesque eu ligula suscipit, lacinia augue sed, venenatis libero. Proin elementum justo vitae nisl mattis vestibulum.
                        <br><br>
                        Nunc pharetra semper ipsum, sit amet vulputate augue viverra eu. Etiam urna ligula, sagittis non dapibus lacinia, accumsan in ligula. Ut eget nunc sapien. Curabitur fringilla vel eros facilisis porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur consectetur dapibus diam. Phasellus fermentum id mi non congue. Pellentesque vel lorem vitae quam suscipit convallis ac rhoncus urna. Mauris vel lorem risus. Aenean convallis quam sed mi tempor tristique. Vivamus ex odio, eleifend eu auctor ut, luctus non mi.</p>
                        <br><br>
                    </div>

                    <div id="terms-item-4">
                        <h4>Item 4: Title Goes Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur varius maximus. Suspendisse sit amet rutrum sem. Curabitur pretium enim vel eros semper pretium. Aenean congue quam a ipsum dignissim, sit amet laoreet urna varius. Vestibulum nec eros arcu. Nam ex augue, egestas eu dui vehicula, porttitor eleifend magna. 
                        <br><br>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis vehicula diam eget est gravida, in aliquet dolor sollicitudin. Quisque ac lectus eu sem auctor viverra eget vel lacus. Sed nulla nunc, scelerisque non elit et, ultricies aliquet lacus. Aenean sit amet risus scelerisque, mattis massa sed, auctor urna. Pellentesque eu ligula suscipit, lacinia augue sed, venenatis libero. Proin elementum justo vitae nisl mattis vestibulum.
                        <br><br>
                        Nunc pharetra semper ipsum, sit amet vulputate augue viverra eu. Etiam urna ligula, sagittis non dapibus lacinia, accumsan in ligula. Ut eget nunc sapien. Curabitur fringilla vel eros facilisis porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur consectetur dapibus diam. Phasellus fermentum id mi non congue. Pellentesque vel lorem vitae quam suscipit convallis ac rhoncus urna. Mauris vel lorem risus. Aenean convallis quam sed mi tempor tristique. Vivamus ex odio, eleifend eu auctor ut, luctus non mi.</p>
                        <br><br>
                    </div>

                    <div id="terms-item-5">
                        <h4>Item 5: Title Goes Here</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur varius maximus. Suspendisse sit amet rutrum sem. Curabitur pretium enim vel eros semper pretium. Aenean congue quam a ipsum dignissim, sit amet laoreet urna varius. Vestibulum nec eros arcu. Nam ex augue, egestas eu dui vehicula, porttitor eleifend magna. 
                        <br><br>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis vehicula diam eget est gravida, in aliquet dolor sollicitudin. Quisque ac lectus eu sem auctor viverra eget vel lacus. Sed nulla nunc, scelerisque non elit et, ultricies aliquet lacus. Aenean sit amet risus scelerisque, mattis massa sed, auctor urna. Pellentesque eu ligula suscipit, lacinia augue sed, venenatis libero. Proin elementum justo vitae nisl mattis vestibulum.
                        <br><br>
                        Nunc pharetra semper ipsum, sit amet vulputate augue viverra eu. Etiam urna ligula, sagittis non dapibus lacinia, accumsan in ligula. Ut eget nunc sapien. Curabitur fringilla vel eros facilisis porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur consectetur dapibus diam. Phasellus fermentum id mi non congue. Pellentesque vel lorem vitae quam suscipit convallis ac rhoncus urna. Mauris vel lorem risus. Aenean convallis quam sed mi tempor tristique. Vivamus ex odio, eleifend eu auctor ut, luctus non mi.</p>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark rounded-5 fw-semibold" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>