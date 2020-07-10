<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UteQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />


        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #1b7eb8;  /* fallback for old browsers */
                background-image: -webkit-linear-gradient(15deg, #1b7eb8 0%, #3cba4d 100%);  /* Chrome 10-25, Safari 5.1-6 */
                background-image: linear-gradient(15deg, #1b7eb8 0%, #3cba4d 100%); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                color: #fff;

                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                line-height: 2;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                line-height: 1.2;
            }

            .title-tagline {
                font-size: 24px;
                margin-bottom: 40px;
                color: rgba(255, 255, 255, 0.8);
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-b-lg {
                margin-bottom: 60px;
            }

            .border {
                border: 1px solid rgba(255, 255, 255, 0.5);
                border-radius: 5px;
            }

            .p-3 {
                padding: 15px;
            }

            a,
            .link {
                color: #fff;
                border-bottom: 1px dashed rgb(251, 231, 0);
                text-decoration: none;
                transition: all ease-in-out 0.3s;
                border-radius: 0;
                padding: 0 3px;
            }

            a:hover,
            .link:hover {
                color: #fff;
                border-bottom: 1px dashed white;
                transition: all ease-in-out 0.3s;
                text-decoration: none;
            }

            a:active,
            .link:active,
            a:focus,
            .link:focus {
                border-bottom: 1px dashed rgba(255, 255, 255, 0.3);
                text-decoration: none;
                color: rgba(255, 255, 255, 0.5);
            }

            .mt-5 {
                margin-top: 60px;
            }

            .hidden {
                display: none;
            }

            .clickable {
                cursor: pointer;
            }

            .img-responsive {
                max-width: 100%;
                height: auto;
            }

            .modal-lg {
                max-width: 640px;
            }

            .small {
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title">
                    UteQ
                </div>

                <div class="title-tagline m-b-lg">
                    [Web]technology for U
                    <div style="font-size: 16px; color: rgba(255, 255, 255, 0.5)">&lt;with a Q&gt;</div>
                </div>


                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#compatibleModal">
                        Ready for your next project?
                    </button>
                    <button type="button" class="btn btn-link text-white ml-2 link px-1" data-toggle="modal" data-target="#aboutModal">
                        About UteQ
                    </button>
                </div>

                <!-- Modal -->
                <x-modal id="compatibleModal">

                    <div class="h1 mt-3 mb-5">Are we compatible?</div>

                    <div class="container text-left">
                        <div class="row">
                            <div class="col-md">
                                <div class="h5 text-success">Our specialism</div>
                                <ul class="text-success list-group list-group list-group-flush border-left pl-2">
                                    <li class="list-group-item p-0 border-0">
                                        Solving the unsolvable
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        Laravel Framework (PHP)
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        Automating your work
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        Excel to application
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        Designing the future
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        Being your
                                        <a href="https://www.wikiwand.com/en/Q_(James_Bond)" class="text-success" target="_blank">Q</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md mt-4 mt-md-0">
                                <div class="h5">Not really our thing</div>

                                <ul class="list-group list-group list-group-flush border-left pl-2">
                                    <li class="list-group-item p-0 border-0">
                                        Tight deadlines
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        Visual design
                                    </li>
                                    <li class="list-group-item p-0 border-0">
                                        IT (fixing your printer)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="mt-5">
                        <i>To summarise, might we <b>design and build</b> something really cool for you?</i><br />
                        <a class="btn btn-warning mt-3"
                           href="mailto:info@uteq.nl?subject=Lets%20talk%20about%20my%20project%21&body=Tell%20us%20as%20much%20as%20you%20can%20about%0A-%20your%20online%20project%0A-%20your%20planning%0A-%20your%20budget%0A-%20%E2%80%A6%0A%0AJust%20about%20anything%20that%20gives%20a%20good%20start%21"
                        >Lets start talking</a><br />
{{--                                    In a big big hurry? Call me: <a class="text-dark" href="tel:+31614032722">+31 6 140 32 722</a>--}}
                    </p>
                </x-modal>

                <x-modal id="aboutModal" size="lg">
                    <div class="h1 mt-3 mb-5">About UteQ</div>

                    <div class="container text-left">
                        <div class="row">
                            <div class="col-md-8">
                                <p>We design and build web- sites, shops and applications since 2008.</p>

                                <p>Our main focus is the future. Sometimes this means reinventing the wheel, making it function just a bit better. We live on the bleeding edge of technology.</p>

                                <p>You might say that we love to try out new stuff. This has its payoffs, but we believe in the future. We rather create something small and new than something big that is old before it hits the market.</p>

                                <p>Just building things that people love to use is what makes our heart tick the most. As the company evolves and we try more things, our vision gets stronger. Be prepared for the next big thing!</p>
                            </div>
                            <div class="col-md-4 text-muted small">
                                UteQ is a twist of the words Human and Technology and as you can image Uteq is easier to write, remember and softer on the eyes than Huteq. The Q is for U.

                                <img src="{{ asset('images/keyboard.png') }}" class="img-responsive mt-5" />
                            </div>
                        </div>
                    </div>
                </x-modal>
{{--                    <p>--}}
{{--                        <i>Can I help with your project?</i><br />--}}
{{--                        Feel free to e-mail me at: <a href="mailto:info@uteq.nl?subject=Lets%30talk%20about%20my%20project%21&body=Tell%20us%20as%20much%20as%20you%20can%20about%0A-%20your%20online%20project%0A-%20your%20planning%0A-%20your%20budget%0A-%20%E2%80%A6%0A%0AJust%20about%20anything%20that%20gives%20a%20good%20start%21">info@uteq.nl</a><br />--}}
{{--                        In a big big hurry? Call me: <a href="tel:+31614032722">+31 6 140 32 722</a>--}}
{{--                    </p>--}}

                <div style="font-size: 10px" class="mt-5 clickable" data-toggle="modal" data-target="#qModal">
                    Let us be your <span class="link" href="https://www.wikiwand.com/en/Q_(James_Bond)">Q</span>
                </div>

                <x-modal id="qModal" size="lg">
                    <h5 class="modal-title mb-5">
                        There is a gadget for everything
                    </h5>
                    <div class="container text-left">
                        <div class="row">
                            <div class="col">
                                <p>Q of course is just a silly joke, but as with every joke there is some truth in it.</p>
                                <p><b>Enabling</b> is the magic word.</p>
                                <p>Creating wonderful gadgets that will enable you to complete your mission or rather project.</p>

                                <div class="d-flex">
                                    <div class="btn text-dark px-0 mt-3 mr-auto">Ready to be enabled?</div>
                                    <a class="btn btn-outline-warning mt-3"
                                       href="mailto:info@uteq.nl?subject=Enable%20me%21&body=Tell%20us%20as%20much%20as%20you%20can%20about%0A-%20your%20online%20project%0A-%20your%20planning%0A-%20your%20budget%0A-%20%E2%80%A6%0A%0AJust%20about%20anything%20that%20gives%20a%20good%20start%21"
                                    >
                                        Get in touch
                                    </a>
                                </div>
                            </div>
                            <div class="col mt-1">
                                <img src="{{ asset('images/q.jpeg') }}" class="img-responsive" />
                            </div>
                        </div>
                    </div>




                    <blockquote class="mt-5 ml-3 border-left px-5 text-left small">
                        Q is a fictional character in the James Bond films and film novelisations.
                        Q (standing for Quartermaster), like M, is a job title rather than a name.
                        He is the head of Q Branch (or later Q Division),
                        the fictional research and development division of the British Secret Service.
                        <footer class="blockquote-footer">
                            Source: https://www.wikiwand.com/en/Q_(James_Bond)
                        </footer>
                    </blockquote>
                </x-modal>

{{--                <div>&copy; {{ date('Y') }} | Dont forget about <a href="https://github.com/uteqnl" target="_blank">Github</a></div>--}}
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
