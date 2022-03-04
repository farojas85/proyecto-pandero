<x-master-layout>

    @section('title')
        Dashboard
    @endsection

    <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>Media Hover Effects Page</span></h5>
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Medias</a>
                        </li>
                        <li class="breadcrumb-item active">Media Hover Effects Page
                        </li>
                    </ol>
                </div>
                <div class="col s2 m6 l6"><a
                        class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!"
                        data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span
                            class="hide-on-small-onl">Settings</span><i
                            class="material-icons right">arrow_drop_down</i></a>
                    <ul class="dropdown-content" id="dropdown1" tabindex="0">
                        <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span
                                    class="new badge red">2</span></a></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="breadcrumbs-dark pt-3 pb-1" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6 breadcrumbs-left">
                    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Calendar</span></h5>
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Apps</a>
                        </li>
                        <li class="breadcrumb-item active">Apps Calendar
                        </li>
                    </ol>
                </div>
                <div class="col s2 m6 l6"><a class="btn btn-floating dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons">expand_more </i><i class="material-icons right">arrow_drop_down</i></a><ul class="dropdown-content" id="dropdown1" tabindex="0">
                        <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div> --}}

    <div class="section">

    </div>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    @section('vendor-scripts')
    @endsection
</x-master-layout>
