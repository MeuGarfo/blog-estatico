<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/"><?php print SITE_NAME; ?></a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="/">Principal</a></li>
                    <?php
                    $categories=categories();
                    foreach ($categories as $key=>$value) {
                        $html=ucfirst($value);
                        if($html<>"Blog"){
                            if($value==$category){
                                print '<li class="active">';
                                print '<a href="/'.$value.'">'.$html.'</a></li>';
                            }else{
                                print '<li>';
                                print '<a href="/'.$value.'">'.$html.'</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
