<ul>
    <li class="yay-user-info">
        <a href="page-profile.html">
            <img src="{{ asset('assets/_con/images/user.jpg') }}" alt="<?php echo Illuminate\Support\Facades\Session::get('name'); ?>" class="circle">
            <h3 class="yay-user-info-name"><?php echo Illuminate\Support\Facades\Session::get('name'); ?></h3>
            <div class="yay-user-location">
                <i class="fa fa-map-marker"></i> Indonesia
            </div>
        </a>
    </li>

    <!-- <li>
        <a href="angularjs/" class=" waves-effect waves-blue"> <i class="ion ion-social-angular"></i> Open Angular Version </a>

    </li> -->

    <li class="label">Menu</li>

    <li>
        <a href="{{ route('article') }}" class=" waves-effect waves-blue"> <i class="fa fa-newspaper-o"></i> Article </a>

    </li>

    <li>
        <a href="{{ route('category') }}" class=" waves-effect waves-blue"> <i class="fa fa-group"></i> Categories </a>

    </li>

    <li>
        <a href="{{ route('image') }}" class=" waves-effect waves-blue"> <i class="fa fa-photo"></i> Bank Image </a>

    </li>
    <!-- <li>
        <a href="widgets.html" class=" waves-effect waves-blue"> <i class="fa fa-magic"></i> Visitor </a>

    </li> -->


    
    <!-- <li>
        <a href="#" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-indent"></i> Menu Levels
            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
        </a>
        <ul>

            <li>
                <a href="#" class="yay-sub-toggle waves-effect waves-blue">  Second Level <span class="yay-collapse-icon mdi-navigation-expand-more"></span>  </a>
                <ul>

                    <li>
                        <a href="#1" class="yay-sub-toggle waves-effect waves-blue">  Third Level <span class="yay-collapse-icon mdi-navigation-expand-more"></span>  </a>
                        <ul>

                            <li>
                                <a href="#1" class=" waves-effect waves-blue">  Fourth Level   </a>

                            </li>

                            <li>
                                <a href="#2" class=" waves-effect waves-blue">  Fourth Level   </a>

                            </li>

                            <li>
                                <a href="#3" class=" waves-effect waves-blue">  Fourth Level   </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#2" class="yay-sub-toggle waves-effect waves-blue">  Third Level <span class="yay-collapse-icon mdi-navigation-expand-more"></span>  </a>
                        <ul>

                            <li>
                                <a href="#1" class=" waves-effect waves-blue">  Fourth Level   </a>

                            </li>

                            <li>
                                <a href="#2" class=" waves-effect waves-blue">  Fourth Level   </a>

                            </li>

                            <li>
                                <a href="#3" class=" waves-effect waves-blue">  Fourth Level   </a>

                            </li>

                        </ul>
                    </li>

                </ul>
            </li>

        </ul>
    </li> -->


    <!-- <li class="label">Stats</li>
    <li class="content">
        <span><i class="fa fa-spinner"></i> Server Load</span>
        <div class="progress small light-green lighten-4">
            <div class="light-green accent-5" style="width: 37%"></div>
        </div>

        <span><i class="fa fa-thumbs-o-up"></i> User Satisfaction</span>
        <div class="progress small">
            <div style="width: 91%"></div>
        </div>
    </li> -->
</ul>