@extends('layouts.basic')

{{-- @section('action_title', __('List')) --}}

@section('content')
    <script src="{{ asset('js/admin/fade-efect.js') }}"></script>

    <div class="container">
        <div class="form">
            <ul class="tab-group" data-tab-type="header">
                <li class="tab active"><a data-tab-type="trigger" href="#login">Log In</a></li>
                <li class="tab"><a data-tab-type="trigger" href="#signup">Sign Up</a></li>
            </ul>

            <div class="tab-content">
                <div id="login">
                    <h1>Welcome Back!</h1>
                    <form action="/" method="post">
                        <div class="field-wrap"> <label> Email Address<span class="req">*</span> </label> <input
                                   type="email"required autocomplete="off" /> </div>
                        <div class="field-wrap"> <label> Password<span class="req">*</span> </label> <input
                                   type="password"required autocomplete="off" /> </div>
                        <p class="forgot">
                            <a data-tab-type="trigger" href="#resetPassword">Forgot Password?</a>
                        </p>
                        <button class="button button-block" />
                        Log In
                        </button>
                    </form>
                </div>

                <div id="signup">
                    <h1>Sign Up for Free</h1>
                    <form action="/" method="post">
                        <div class="top-row">
                            <div class="field-wrap"> <label> First Name<span class="req">*</span> </label> <input
                                       type="text" required autocomplete="off" /> </div>
                            <div class="field-wrap"> <label> Last Name<span class="req">*</span> </label> <input
                                       type="text"required autocomplete="off" /> </div>
                        </div>
                        <div class="field-wrap"> <label> Email Address<span class="req">*</span> </label> <input
                                   type="email"required autocomplete="off" /> </div>
                        <div class="field-wrap"> <label> Set A Password<span class="req">*</span> </label> <input
                                   type="password"required autocomplete="off" /> </div> <button type="submit"
                                class="button button-block" />Get Started</button>
                    </form>
                </div>

                <div id="resetPassword">
                    <h1>Reset password</h1>
                    <form action="/" method="post">
                        <div class="top-row">
                            <div class="field-wrap"> <label> First Name<span class="req">*</span> </label> <input
                                       type="text" required autocomplete="off" /> </div>
                            <div class="field-wrap"> <label> Last Name<span class="req">*</span> </label> <input
                                       type="text"required autocomplete="off" /> </div>
                        </div>
                        <div class="field-wrap"> <label> Email Address<span class="req">*</span> </label> <input
                                   type="email"required autocomplete="off" /> </div>
                        <div class="field-wrap"> <label> Set A Password<span class="req">*</span> </label> <input
                                   type="password"required autocomplete="off" /> </div> <button type="submit"
                                class="button button-block" />Get Started</button>
                    </form>
                </div>
            </div><!-- tab-content -->
        </div> <!-- /form -->
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        document.querySelectorAll('[data-tab-type="trigger"]')
            .forEach(trigger => {
                trigger.addEventListener('click', function(event) {
                    event.preventDefault();

                    document.querySelectorAll('[data-tab-type="header"] li.tab.active')
                        .forEach(activeMenu => {
                            activeMenu.classList.remove('active');
                        });

                    // $(this).parent().addClass('active');
                    // $(this).parent().siblings().removeClass('active');

                    let tabId = (event.target.getAttribute('href') ?? '')?.replaceAll('#', '') ?? '';

                    if (!tabId) {
                        console.log('No tabId ID')
                        return null;
                    }

                    document.querySelectorAll(`ul[data-tab-type="header"] li.tab`)
                        .forEach(tabTriggerContainer => {
                            tabTriggerContainer.classList.remove('active');
                            if (tabTriggerContainer.querySelectorAll(`a[href="#${tabId}"]`).length > 0) {
                                tabTriggerContainer.classList.add('active')
                            }
                        })

                    document.querySelectorAll('.tab-content > div')
                        .forEach(async (tabContent) => {
                            // tabContent.style.display = 'none';

                            tabContent.style.transition = '0.5s';
                            tabContent.style.opacity = 0;

                            let targetTabContentId = tabContent.getAttribute('id');

                            if (!targetTabContentId) {
                                console.log('No targetTabContentId ID')
                                return null;
                            }

                            // targetTabContentId = `#${targetTabContentId}`;

                            console.log(targetTabContentId, tabId, (targetTabContentId == tabId));

                            if (targetTabContentId == tabId) {
                                fadeIn(tabContent, 400) //.then(() => {});
                                return;
                            }

                            fadeOut(tabContent, 400) //.then(() => {});
                        });

                });
            })
    </script>
@endsection
