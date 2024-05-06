@push('custom_css')
<style type="text/css">
.accordion_one .panel-group {
    
    border: 1px solid #f1f1f1;
    margin-top:20px;
    
    
}

a:link {
    text-decoration: none
}

.accordion_one .panel {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 0px solid transparent;
    border-radius: 0;
    margin: 0;
}

.accordion_one .panel-default {
    border: 0;
}

.accordion-wrap .panel-heading {
    padding: 0px;
    border-radius: 0px;
}

h4 {
    font-size: 18px;
    line-height: 24px;
}

.accordion_one .panel .panel-heading a.collapsed {
    color: #999999;
    display: block;
    padding: 12px 30px;
    border-top: 0px;
}

.accordion_one .panel .panel-heading a {
    display: block;
    padding: 12px 30px;
    background: #fff;
    color: #313131;
    border-bottom: 1px solid #f1f1f1;
}

.accordion-wrap .panel .panel-heading a {
    font-size: 14px;
}

.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 0;
    padding-top: 0;
    padding: 25px 30px 30px 35px;
    background: #fff;
    color: #999999;
}

.img-accordion {
    width: 81px;
    float: left;
    margin-right: 15px;
    display: block;
}

.accordion_one .panel .panel-heading a.collapsed:after {
    content: "\2b";
    color: #999999;
    background: #f1f1f1;
}

.accordion_one .panel .panel-heading a:after, .accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
   
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px;
}
.accordion_one .panel .panel-heading a:after {
    content: "\2212";
}

.accordion_one .panel .panel-heading a:after, .accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px;
}


</style>
@endpush
<section class="about-sec section-padding">
    <div class="container">
        <div class="text-center about-us-sec mb-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-info">
                        <h3>Frequently asked questions</h3>
                    </div><!--about-info end-->
                </div>
            </div>
        </div><!-- about-us-sec end-->
        <div class="row">
            <div class="col-sm-12 accordion_one">
                <div class="panel-group" id="accordionFourLeft">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftone" aria-expanded="false" class="collapsed">
                                    Where is WeWork?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftone" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                            <div class="panel-body">
                                <div class="img-accordion">
                                    <img src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                </div>
                                <div class="text-accordion">
                                    <p>WeWork is an app that connects users with workspaces across the UAE. Users can either work from coworking spaces using credits or instantly book a variety of on-demand spaces such as meeting rooms and workspace.
                                    </p>
                                </div>
                            </div>
                            <!-- end of panel-body -->
                        </div>
                    </div>
                    <!-- /.panel-default -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftTwo" aria-expanded="false">What is the benefit of using WeWork?</a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftTwo" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                            <div class="panel-body">
                                <div class="img-accordion">
                                    <img src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                </div>
                                <div class="text-accordion">
                                    <p>With WeWork, you get benefits water, discounts on food.</p>
                                    <p>Not only can you save more with a WoWOrk plan, you have the flexibility to use your credits where and how you want to.
                                    </p>
                                </div>
                            </div>
                            <!-- end of panel-body -->
                        </div>
                    </div>
                    <!-- /.panel-default -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftThree" aria-expanded="false">
                                    Do I need a registered license to work from your spaces?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                            <div class="panel-body">
                                <div class="img-accordion">
                                    <img src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                </div>
                                <div class="text-accordion">
                                    <p>Nope! All we need is a name, number and email address.</p>
                                </div>
                            </div>
                            <!-- end of panel-body -->
                        </div>
                    </div>
                    <!-- /.panel-default -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftFour" aria-expanded="false">
                                    Do you provide Ejari for business license registration? (UAE only)
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFiveLeftFour" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                            <div class="panel-body">
                                <div class="img-accordion">
                                    <img src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                </div>
                                <div class="text-accordion">
                                    <p>
                                    Yes we do. We provide Ejairi services paired with an annual Letswork credit plan. Visit our head office for more information</p>
                                </div>
                            </div>
                            <!-- end of panel-body -->
                        </div>
                    </div>
                </div>
                <!--end of /.panel-group-->
            </div>
        </div>
    </div>
</section>
