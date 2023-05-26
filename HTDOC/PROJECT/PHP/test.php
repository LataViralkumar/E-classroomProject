<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
<style>

.mainbody {
    background:#f0f0f0;
}
/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 20;
  margin-left: -15px;
  margin-right: -15px;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper .container {
  padding-left: 0;
  padding-right: 0;
}
.navbar-wrapper .navbar {
  padding-left: 15px;
  padding-right: 15px;
}

.navbar-content
{
    width:320px;
    padding: 15px;
    padding-bottom:0px;
}
.navbar-content:before, .navbar-content:after
{
    display: table;
    content: "";
    line-height: 0;
}
.navbar-nav.navbar-right:last-child {
    margin-right: 15px !important;
}
.navbar-footer 
{
    background-color:#DDD;
}
.navbar-footer-content { padding:15px 15px 15px 15px; }
.dropdown-menu {
padding: 0px;
overflow: hidden;
}

.brand_network {
    color: #9D9D9D;
    float: left;
    position: absolute;
    left: 70px;
    top: 30px;
    font-size: smaller;
}

.post-content {
    margin-left:58px;
}

.badge-important {
    margin-top: 3px;
    margin-left: 25px;
    position: absolute;
}

body {
    background-color: #e8e8e8;
}
</style>
<div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
                    <span>
                        <div class="navbar-right">
                            <div class="dropdown">
                                <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="caret"></span>
                                </button>
                               
                            </div>
                        </div>
                    </span>
                    <hr>
                    <div class="post-content">
                        <p>Simple post content example.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                    </div>
                 
                    <div>
                    
                        <br>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        