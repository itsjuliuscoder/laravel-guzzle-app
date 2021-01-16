@extends('layouts.app')

@section('title')
	{{ $title }}
@endsection


@section('bar')
<!-- about banner -->
<div class="abt-banner">
    <div class="about-bar">
        <h4>FREQUENT ASKED QUESTIONS</h4>
        <p>The art and science of asking questions is the source of all knowledge.</p>
        <h6><strong> - Thomas Berger</strong></h6>
    </div>
</div>
<!-- // end of about banner -->
@endsection
@section('content')
<section id="contact">
    <div class="container">
        <div class="faqs bg-default-100">
            <div class="row">
                <div class="container mt-3">
                        <div class="align-center">
                        <h3>Frequently Asked Questions</h3>
                    </div>
                    <div class="accordion" id="myAccordion">
                        <div class="card">
                            <div class="card-header" id="item1Header">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#expandable1" aria-expanded="false" aria-controls="expandable1">
                                  What is AFRIHOW?
                                  <span class="fa fa-plus"></span>
                                </button>
                                </h5>
                            </div>
                            <div id="expandable1" class="collapse" aria-labelledby="item1Header" data-parent="#myAccordion">
                                <div class="card-body">
                                <p>Afrihow is an online learning community built for Africa's growing population. As Africa's population grows rapidly and our focus towards a digital economy, we are dedicated on creating an online community for Africans to learn, share knowledge and keep up with happenings in our constantly and rapidly changing world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="item2Header">
                                <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#expandable2" aria-expanded="true" aria-controls="expandable2">
                                    Why should I use AfriHow
                                    <span class="fa fa-plus"></span>
                                </button>
                                </h5>
                            </div>  
                            <div id="expandable2" class="collapse show" aria-labelledby="item2Header" data-parent="#myAccordion">
                                <div class="card-body">
                                <p>AfriHow was born out of the desire to make learning easier and accesible for Africa's growing population. Knowing that knowledge is the key to solving global problems and achieving the Sustainable Growth and Development of 2030, we want to drive innovation and raise critical thinkers by making learning easier and accessible for you. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="item3Header">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#expandable3" aria-expanded="false" aria-controls="expandable3">
                                    Expandable Item 3
                                    <span class="fa fa-plus"></span> 
                                </button>
                                </h5>
                            </div>
                            <div id="expandable3" class="collapse" aria-labelledby="item3Header" data-parent="#myAccordion">
                                <div class="card-body">
                                    This is the card body. Your content is hidden initially. It is shown by clicking on the card header.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('includes.footer')
@endsection