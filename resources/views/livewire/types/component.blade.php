<div class="row layout-top-spacing">

                        <div id="tabsSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Tabs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area simple-tab">
                                    <ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Action</a>
                                                <a class="dropdown-item"  id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Another action</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="simpletabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>   
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                                            <p class="">
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <p class="">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item dropdown"&gt;
        &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Profile &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
        &lt;div class="dropdown-menu"&gt;
            &lt;a class="dropdown-item" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"&gt;Action&lt;/a&gt;
            &lt;a class="dropdown-item"  id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false"&gt;Another action&lt;/a&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="simpletabContent"&gt;
    &lt;div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;   
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="assets/img/90x90.jpg" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2"&gt;
        &lt;p class=""&gt;
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"&gt;
        &lt;p class=""&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area simple-pills">
                                    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" id="pills-profile-tab" data-toggle="tab" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Action</a>
                                                <a class="dropdown-item"  id="pills-profile-tab2" data-toggle="tab" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false">Another action</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
                                            <p class="">
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item dropdown"&gt;
        &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Profile &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
        &lt;div class="dropdown-menu"&gt;
            &lt;a class="dropdown-item" id="pills-profile-tab" data-toggle="tab" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"&gt;Action&lt;/a&gt;
            &lt;a class="dropdown-item"  id="pills-profile-tab2" data-toggle="tab" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false"&gt;Another action&lt;/a&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="pills-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="assets/img/90x90.jpg" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2"&gt;
        &lt;p class=""&gt;
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>