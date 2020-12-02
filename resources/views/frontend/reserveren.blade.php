@extends('frontend.includes.layout')
@section('header-title')
    Reserveren
@endsection
@section('content')
<section class="matchSchedule countryclub">
    <div class=container>
        <div class=row>
        
            <h2 class="heading small">Plaats een <span>reservering.</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
            qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
            ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
            voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
            Est.</p>

        </div>
        <div class="row">
            <div class=contact_form>

                <form data-parsley-validate="" name=contact class="formcontact clearfix">

                    <div class='form-group text-center'>
                        <label>Selecteer een dag</label> <br>
                        <select name="dag" required data-parsley-required-message="vul dag in">
                            <option value="" disabled selected>0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                        </select>
                    </div>

                    <div class='form-group text-center'>
                        <label>Selecteer een tijd</label> <br>
                        <select name="tijd" required data-parsley-required-message="vul tijd in">
                            <option value="" disabled selected>0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                        </select>
                    </div>

                    <div class='form-group text-center' style='width:100%'>

                        <button type=submit class="btn btn-red" id=send>Verstuur</button>

                    </div>
                    <div class=form-message></div>
                    
                </form>

            </div>
        </div>
    </div>
    
</section>

@endsection