@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<div class="fullwidth-social-icons">
    <div class="container-fluid">
        <div class="row">
            <ul>
                @if($setting->facebook != null)
                    <li>
                        <a class="facebook" href="{{$setting->facebook}}" target="_blank">
                            <span><i class="fa fa-facebook-f"></i> <small>Facebook</small></span>
                        </a>
                    </li>
                @endif
                @if($setting->twitter!= null)
                    <li>
                        <a class="twitter" href="{{$setting->twitter}}" target="_blank">
                            <span><i class="fa fa-twitter"></i> <small>Twitter</small></span>
                        </a>
                    </li>
                @endif
                @if($setting->youtube != null)
                    <li>
                        <a class="youtube" href="{{$setting->youtube}}" target="_blank">
                            <span><i class="fa fa-youtube"></i> <small>Youtube</small></span>
                        </a>
                    </li>
                @endif
                <li>
                    <a class="google" href="#" target="_blank">
                        <span><i class="fa fa-google-plus"></i> <small>Google</small></span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <span><i class="fa fa-rss"></i> <small>Rss Feed</small></span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <span><i class="fa fa-linkedin"></i> <small>Linkedin</small></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
