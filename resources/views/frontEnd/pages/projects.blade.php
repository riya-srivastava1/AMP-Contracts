@extends('frontEnd.layouts.main')
@section('content')
    <section class="done-projects">
        <div class="container">
            <div class="content">
                <h1 class="project-heading done">AMP Contracts has executed several prestigious electrical contracting
                    projects.
                    Some of the projects executed are listed under Major Contracts in this binder.</h1>
                <div class="project-area done">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9">
                            <div id="projectaccordion">
                                <div class="row">
                                    @foreach ($executedprojects as $key => $project)
                                        <a class="pdbutton btn col-md-4 col-12  {{ $key === 0 ? '' : 'collapsed' }}"
                                            data-bs-toggle="collapse" href="#{{ $project->id }}">
                                            <div class="projectname">
                                                <img src="{{ $project->company_logo }}" alt="{{ $project->company_name }}"
                                                    height="8%" width="20%" />
                                                <span>{{ $project->company_name }}</span>
                                            </div>
                                            <div id="{{ $project->id }}"
                                                class="collapseown collapse col-12 {{ $key === 0 ? 'show' : '' }}"
                                                data-bs-parent="#projectaccordion">
                                                <div class="projectdetails">
                                                    <div class="forhight">
                                                        <div class="single">
                                                            <p class="description">{{ $project->description }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="projectdetailsshow">
                                                        <div class="single">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <p class="location">{{ $project->location }}</p>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p class="description">{{ $project->description }}</p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <p class="year">
                                                                        {{ \Carbon\Carbon::parse($project->year)->format('M Y') }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @if (($key + 1) % 3 == 0)
                                </div>
                                <div class="row">
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="project-heading running">SELECTIVE LIST OF RUNNING PROJECTS IN EXECUTION-:</h1>
                <div class="project-area running">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9">
                            <div id="rummimgprojectaccordian">
                                <div class="row">
                                    @foreach ($runningprojects as $key => $project)
                                        <a class="pdbutton btn col-md-4 col-12  {{ $key === 0 ? '' : 'collapsed' }}"
                                            data-bs-toggle="collapse" href="#{{ $project->id }}">
                                            <div class="projectname">
                                                <img src="{{ $project->company_logo }}" alt="{{ $project->company_name }}"
                                                    height="8%" width="20%" />
                                                <span>{{ $project->company_name }}</span>
                                            </div>
                                            <div id="{{ $project->id }}"
                                                class="collapseown collapse col-12 {{ $key === 0 ? 'show' : '' }}"
                                                data-bs-parent="#rummimgprojectaccordian">
                                                <div class="projectdetails">
                                                    <div class="forhight">
                                                        <div class="single">
                                                            <p class="description">{{ $project->description }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="projectdetailsshow">
                                                        <div class="single">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <p class="location">{{ $project->location }}</p>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p class="description">{{ $project->description }}</p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <p class="year">
                                                                        {{ \Carbon\Carbon::parse($project->year)->format('M Y') }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @if (($key + 1) % 3 == 0)
                                </div>
                                <div class="row">
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".nav-link").click(function() {
                $(".nav-link").removeClass("active");
                $(this).addClass("active");
                var targetPaneId = $(this).attr("data-bs-target");
                $(".tab-pane").not(targetPaneId).removeClass("show active");
                $(targetPaneId).addClass("show active");
            });
        });


        // when on mobile devices

        if (window.innerWidth < 576) {
            let navLinks = document.querySelectorAll('.nav-link');
            let navTabs = document.querySelectorAll('.nav-tabs');
            let tabPanes = document.querySelectorAll('.tab-pane');
            for (let i = 0; i < navLinks.length; i++) {

                navLinks[i].after(tabPanes[i]);
            }
            // $('.tab-content').css('display', 'none');

        }
        const projectaccordionwidth = document.getElementById('projectaccordion').offsetWidth;
        const alldiv = document.querySelectorAll('.projectdetailsshow');

        for (let i = 0; i < alldiv.length; i++) {
            const div = alldiv[i];
            div.style.display = "block"; // Set the display property to "block" or any other valid value
            div.style.width = projectaccordionwidth + "px"; // Set the width property if that's what you intended
        }

        const pdbutton = document.querySelectorAll('.pdbutton');
        // const projectdetails = document.querySelectorAll('.projectdetails');
        pdbutton.forEach((pdbuttons) => {
            hello();
            pdbuttons.addEventListener('click', function() {
                hello();
            });

            function hello() {
                const forhight = pdbuttons.querySelector('.forhight');
                const projectdetailsshow = pdbuttons.querySelector('.projectdetailsshow');
                const detailsshowHeight = projectdetailsshow.offsetHeight;
                forhight.style.height = `${detailsshowHeight}px`;
                // forhight.style.height = `${detailsshowHeight}px`;
            };
        });
    </script>
@endsection
