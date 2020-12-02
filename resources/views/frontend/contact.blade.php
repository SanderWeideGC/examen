@extends('frontend.includes.layout')
@section('header-title')
    Contact
@endsection
@section('content')

<section class=innerpage_all_wrap>
    <div class=container>
        <div class=row><h2 class=heading>kom in <span>contact</span> met ons</h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quisquam
                reprehenderit, blanditiis nam debitis libero facilis illum repudiandae eveniet voluptatibus
                quibusdam illo ea nisi ipsa accusantium nobis animi asperiores quaerat ,Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Fugiat quisquam reprehenderit, blanditiis nam debitis libero facilis
                illum repudiandae eveniet voluptatibus quibusdam illo ea nisi ipsa accusantium nobis animi
                asperiores quaerat .</p>

            <div class=innerWrapper>
                <ul class="contact_icon clearfix">
                    <li><a href=tel:80052608885263><i class="fa fa-phone"></i> <span>0316 12 25 45 85</span></a></li>
                    <li><a href=mailto:info@dtv.nl><i class="fa fa-envelope-o"></i>
                        <span>info@dtv.nl</span></a></li>
                    <li><a href=#><i class="fa fa-map-marker"></i> <span>J.F Kennedylaan 49</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <div id=map-section></div>
    <div class=container>
        <div class=row>
            <div class=contact_form><h2 class=heading> laat een bericht achter <span>via hier</span></h2>

                <form data-parsley-validate="" name=contact class="formcontact clearfix">
                    <div class=form-group>
                        <input type=text class=form-control name=name placeholder=Naam required="" data-parsley-required-message="vul naam in">
                    </div>
                    <div class=form-group>
                        <input type=text class=form-control name=phone placeholder=Telefoonnummer required="" data-parsley-required-message="vul telefoonnummer in">
                    </div>
                    <div class=form-group>
                        <input type=text class=form-control name=subject placeholder=Onderwerp required="" data-parsley-required-message="vul onderwerp in">
                    </div>
                    <div class=form-group>
                        <input type=email class=form-control name=email placeholder=E-mail required="" data-parsley-required-message="vul e-mail in">
                    </div>
                    <div class=form-group1>
                        <textarea class="form-control textas" name=comment placeholder=Bericht required="" data-parsley-minlength=20 data-parsley-minlength-message="Vul op zijn minst 20 woorden in...!" data-parsley-validation-threshold=10 data-parsley-maxlength=100></textarea>
                    </div>
                    <button type=submit class="btn btn-red button" id=send>Verstuur</button>
                    <div class=form-message></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
